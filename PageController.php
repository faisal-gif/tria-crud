<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function home(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM = 1931710005 Nama = Siti Amalia Fitriani';
    }

    public function articles($id){
        return 'Halaman artikel dengan id'.$id;
    }
}
