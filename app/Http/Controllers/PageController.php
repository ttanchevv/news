<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use App\Models\Pages;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $news = News::latest()->with('categoryName')->take(5)->get();

        //Взема се времето от кога е пусната новината
        $newsWithTimeAgo = $news->map(function ($item) {
            $item->timeAgo = calculateTimeAgo($item->created_at);
            return $item;
        });

        //dd($news, $categories);

        return view('home', compact('newsWithTimeAgo'));
    }
    public function news($id)
    {
        $news = News::all()->where('id', $id);
    }

    public function category($id)
    {
        // Намери категорията по ID
        $cat = Categories::findOrFail($id); // Get cat where url = id
        $cats =Categories::all(); // Get all cat
        $items = News::where('category_id', $id)->take(5)->get(); //Get news where category_id = cat_id
        $news = News::all();


        // Върни изгледа
        return view('layouts.category', compact('cat', 'items', 'cats'));
    }

    public function aboutUs()
    {

    }


}
