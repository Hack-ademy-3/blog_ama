<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('welcome',['articles'=>$articles]);
    }
}
