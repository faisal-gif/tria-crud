<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id){
        //return 'Halaman artikel dengan id'.$id;
        return view('articles', compact('id'));
    }
}
