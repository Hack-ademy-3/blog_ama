<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
        $tags = Tag::all();
        return view ('article_new', ['tags'=>$tags]);
    }

    public function make(Request $request)
    {
        if (! Auth::user()) {
            return redirect()->back();
        }

        $article = Article::create([
            'name'=> $request->input('name'),
            'content'=> $request->input('content'),
            'user_id'=> Auth::user()->id,
        ]);

        $article->tags()->sync($request->input('tags'));

        return redirect()->route('home');
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article_show', ['article'=>$article]);
    }
}
