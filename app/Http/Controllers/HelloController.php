<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function xinchao(){
        $title = "Đây là tiêu đề";
        $name = "Hồ Thị Hương";
        $class = '24A';
        $arr = ['title' => $title,'name' => $name,'class' => $class ];
        return view('test') ->with('student',$arr );
    }
    
}
