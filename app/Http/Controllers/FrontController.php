<?php

namespace App\Http\Controllers;

use App\Models\articlenews;
use App\Models\author;
use App\Models\category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $categories = category::all();

        $articles = articlenews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(3)
        ->get();

        $authors = author::all();

        return view('front.index', compact('categories', 'articles', 'authors'));
    }
}
