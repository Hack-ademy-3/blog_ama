<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
        return view ('article_new');
    }

    public function make(Request $request)
    {
        if (! Auth::user()) {
            return redirect()->back();
        }

        Article::create([
            'name'=> $request->input('name'),
            'content'=> $request->input('content'),
            'user_id'=> Auth::user()->id,
        ]);

        return redirect()->route('home');
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article_show', ['article'=>$article]);
    }
}
