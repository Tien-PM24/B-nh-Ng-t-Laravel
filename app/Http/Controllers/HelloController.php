<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        $name = "Đinh Thị Cẩm Ngọc";
        $age = "20 tuổi";
        $class = "Bỏ học";
        $arr = ['name'=>$name, 'age'=>$age, 'class' => $class];
        $tittle = "Hello everyone come to PNV24";
        $ok = "I'm so happy to hear that";
        $dog = "Ok sờ Kê BABI";
        //return view ('test')->with(['tittle'=>$tittle, 'ok'=>$ok, 'dog'=>$dog]);
        return view ('test')->with('student', $arr);
    }

}
