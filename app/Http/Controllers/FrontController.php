<?php

namespace App\Http\Controllers;

use App\Models\articlenews;
use App\Models\author;
use App\Models\banneradvertisement;
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

        $featured_articles = articlenews::with(['category'])
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $authors = author::all();

        $bannerads = banneradvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();

        $entertainment_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Entertainment');
        })
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(6)
        ->get();

        $entertainment_featured_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Entertainment');
        })
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        // ->take(1)
        ->first();

        $business_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Business');
        })
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(6)
        ->get();

        $business_featured_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Business');
        })
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        // ->take(1)
        ->first();

        $automotive_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Automotive');
        })
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(6)
        ->get();

        $automotive_featured_articles = articlenews::whereHas('category', function ($query) {
            $query->where('name', 'Automotive');
        })
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        // ->take(1)
        ->first();


        return view('front.index', compact('categories', 'articles', 'authors', 'featured_articles', 'bannerads', 'entertainment_articles', 'entertainment_featured_articles', 'business_articles', 'business_featured_articles', 'automotive_articles', 'automotive_featured_articles'));
    }

    public function category(Category $category){
        $categories = Category::all();
        $bannerads = banneradvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        ->first();
        return view('front.category', compact('category', 'categories', 'bannerads'));
    }

    public function author(Author $author){
        $categories = Category::all();
        $bannerads = banneradvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        ->first();
        return view('front.author', compact( 'author', 'categories', 'bannerads'));
    }

    public function search(Request $request){
        $request->validate([
            'keyword' => ['required', 'string', 'max:255'],
        ]);

        $categories = Category::all();

        $keyword = $request->keyword;

        $articles = articlenews::with(['category', 'author'])
        ->where('name', 'like', '%' . $keyword . '%')->paginate(6);

        return view('front.search', compact('articles', 'keyword', 'categories'));
    }

    public function details(articlenews $articleNews){
        $categories = Category::all();
        
        $articles = articlenews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->where('id', '!=', $articleNews->id)
        ->latest()
        ->take(3)
        ->get();

        $bannerads = banneradvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        ->first();

        $square_ads = banneradvertisement::where('type', 'square')
        ->where('is_active', 'active')
        ->inRandomOrder()
        ->take(2)
        ->get();

        if($square_ads->count() < 2) {
            $square_ads_1 = $square_ads->first();
            $square_ads_1 = null;
        } else {
            $square_ads_1 = $square_ads->get(0);
            $square_ads_1 = $square_ads->get(1);
        }

        return view('front.details', compact('articleNews', 'categories', 'articles', 'bannerads'));
    }
}
