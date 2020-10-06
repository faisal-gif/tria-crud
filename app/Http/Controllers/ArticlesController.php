<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function index($id){
       // return 'Halaman artikel id '.$id;
       return view('articles', compact('id'));
    }

    // public function getId(Article $article) 
    // {
    //     $article = Article::find($id);
    //     return view('article',['articles'=> $article]);
    //     //return $article;
    // }

        public function getAll()
    {
        $article = Cache::rememberForever('articles', function() {
            return Article::all();
        });
        return view('articles', compact('article'));
    }
    public function getId($id){
        $article=Article::find($id);
        return view('articles',['article'=>$article]);
    }
    
}

