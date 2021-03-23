<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('welcome',['articles'=>$articles]);
    }

    public function userDetail($id)
    {
        $user = User::findOrFail($id);
        return view('user_detail',['user'=>$user]);
        
    }
}
