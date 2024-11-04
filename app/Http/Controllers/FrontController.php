<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\ArticleNews;
use Illuminate\Http\Request;
use App\Models\BannerAdvertisement;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $articles = ArticleNews::with(['category'])
            ->where('is_featured', 'not_featured')
            ->latest()
            ->take(3)
            ->get();

        $featured_articles = ArticleNews::with(['category'])
            ->where('is_featured', 'featured')
            ->inRandomOrder()
            ->take(3)
            ->get();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
            ->inRandomOrder()
            ->where('type', 'banner')
            // ->take(1)
            ->first();

        $authors = Author::all();

        return view('front.index', compact('categories', 'articles', 'featured_articles', 'authors', 'bannerads'));
    }
}
