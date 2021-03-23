<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view ('article_new');
    }

    public function make(Request $request)
    {
        Article::create([
            'name'=> $request->input('name'),
            'content'=> $request->input('content'),
        ]);

        return redirect()->route('home');
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show')
    }
}
