<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->paginate(10);
        return view('news.index', compact('news'));
    }

    public function show($id, Request $request)
    {
        $now = Carbon::now();
        $cats = Categories::all();

        $news = News::findOrFail($id);
        $catName = Categories::find($news->category_id);
        $username = User::find($news->user_id);

        $createdAt  = Carbon::parse($news->created_at);
        $hoursDifference = $createdAt->diffInHours($now);
        $hoursDifference = round($hoursDifference);


        if ($hoursDifference < 24){
            $timeAgo = "{$hoursDifference}ч.";
        }else{
            $daysDifference = $createdAt->diffInDays($now);
            $daysDifference = round($daysDifference);
            $timeAgo = "{$daysDifference} дни";
        }


        $news->incrementViewsIfNeeded($request);

        //dd($catName);

        return view('layouts.news.show', compact(
            'news',
            'catName',
            'username',
            'timeAgo',
            'cats'
        ));
    }
}
