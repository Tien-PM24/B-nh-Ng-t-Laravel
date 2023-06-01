<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataCovidController extends Controller
{
    public function index(Request $request)
    {
        // Lấy dữ liệu từ API
        $response = Http::get('https://api.covid19api.com/summary');
        $data = $response->json();

        // Chuyển đổi dữ liệu thành mảng và sắp xếp tăng dần theo TotalConfirmed
        $regions = collect($data['Countries'])->map(function ($item) {
            return [
                'Country' => $item['Country'],
                'TotalConfirmed' => $item['TotalConfirmed'],
                'TotalDeaths' => $item['TotalDeaths'],
                'TotalRecovered' => $item['TotalRecovered'],
            ];
        })->sortBy('TotalConfirmed')->values();

        // Truyền dữ liệu vào view
        return view('covid.data')->with('regions', $regions);
    }
}

