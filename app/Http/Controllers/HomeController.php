<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
//     public function getAll() {
//         $article = Article::all();
//         return view('home', ['articles' => $article]);
//      }
//      public function getId($id) {
//          $article = Article::find($id);
//          return view('article',['articles'=> $article]);
        
//      $value = Cache::remember('articles', $seconds, function () {
//             return DB::table('articles')->get();
//         });
// }
    public function getAll()
    {
        $article=Article::all();
        return view('home',['article'=>$article]);
    }
    public function getId($id){
        $article=Article::find($id);
        return view('articles',['article'=>$article]);
    }
}
