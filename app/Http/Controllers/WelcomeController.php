<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about()
    {
        $name = 'Christina';
        $fruits = ["蘋果", "香蕉", "鳳梨", "西瓜", "百香果"];
        $js = "<script>alert('hi');</script>";
        return view('pages/about', ['name' => $name, 'js' => $js, 'fruits' => $fruits]);
    }
}
