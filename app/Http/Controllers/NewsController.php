<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function list(){
        $news = (new News())
            ->get()
        ;
        return Inertia::render('News/NewsList', compact('news'));
    }

    public function detail(){

    }
}
