<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = [
        'titulo', 'autor', 'categoria', 'texto',
    ];

    public function categories() {
        return $this->belongsToMany('App\Category', 'categories_posts', 'post_id', 'category_id');
    }
}

