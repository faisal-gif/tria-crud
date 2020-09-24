<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        //return 'NIM = 1931710005 Nama = Siti Amalia Fitriani';
        return view('about');
    }
}
