<?php

namespace App\Http\Controllers;
use App\Article;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //public function index($id){
       // return 'Halaman artikel id '.$id;
       //return view('articles', compact('id'));
    //}

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
        $article = Article::find($id);
        $komen = Comment::all();
        return view('articles',['article'=>$article, 'komen'=>$komen, 'id'=>$id]);
    }
    
    public function insertData(Request $req, $id){
        $hasil  = Article::find($id);
        $user = new comment();
        $user->name = $req->nama;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->save();
        return redirect()->action('ArticlesController@getId', ['id'=>$id]);
    }

    public function index(){
        $article = Article::all();
        return view('manage', ['article' => $article]);
    }

    public function add()
    {
    return view('addarticle');
    }

    public function create(Request $request)
    {
        Article::create([
        'title' => $request->title,
        'author' => $request->author,
        'image' => $request->image
    ]);
        return redirect('/manage');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->author = $request->author;
        $article->image = $request->image;
        $article->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
}