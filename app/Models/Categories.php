<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
