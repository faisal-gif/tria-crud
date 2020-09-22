<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles($id){
        return 'Halaman artikel dengan id'.$id;
    }
}
