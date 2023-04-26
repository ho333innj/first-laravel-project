<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create(){
        // $article=new Article();

        // $article = Article::create(['title' => 'Traveling to Europe' , 'body'=>'travelling to bisim']);
        $article = new Article();
$article->title = " 1";
$article->body = "2";

$article->save();


    }
}
