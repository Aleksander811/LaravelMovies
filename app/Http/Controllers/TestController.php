<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function profile(){
        $user = [
            'Aleksandras',
            'a.kovsevic@gmail.com',
            'mokytojas'
        ];
        return view('profile', compact('user'));
    }


    public function index(){
        return view('welcome');
    }
}
