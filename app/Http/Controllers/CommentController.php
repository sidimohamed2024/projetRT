<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CommentController extends Controller
{
    //


    public function afficezComment($id){
            $article=Article::findOrFail($id);

           return view('showComment',compact('article')); 
    }
}
