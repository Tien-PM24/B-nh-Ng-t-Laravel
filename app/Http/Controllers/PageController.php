<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use App\Models\Comment;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {

        $slide=Slide::all();

        $new_product=Product::where('new',1)->paginate(8);

        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);

        return view('trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }

    public function getLoaiSp(){
        return view('loai_sanpham');
    }

    public function getChitiet() {
        return view('chitiet_sanpham');
    }

    public function getLienhe() {
        return ('lienhe');
    }

    public function getDetail(Request $request) {
        $sanpham = Product::where('id', $request->id)->first();
        $splienquan = Product::where('id', '<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments = Comment::where('id_product', $request->id)->get();
        return view('detail', compact('sanpham', 'splienquan', 'comments'));
    }

    public function getContact(){
        return view('lienhe');
    }

    public function getAbout(){
        return view('about');
    }

    
}
