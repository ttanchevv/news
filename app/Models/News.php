<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'news_img',
        'category_id ',
        'created_at',
    ];

    public function categoryName()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function incrementViewsIfNeeded($request)
    {
        if (auth()->check()) {
            $userKey = 'viewed_news_' . $this->id . '_user_' . auth()->id();
            if (!$request->session()->has($userKey)) {
                $this->increment('views');
                $request->session()->put($userKey, true);
            }
        } else {
            $ipKey = 'viewed_news_' . $this->id . '_ip_' . $request->ip();
            if (!$request->session()->has($ipKey)) {
                $this->increment('views');
                $request->session()->put($ipKey, true);
            }
        }
    }
}
