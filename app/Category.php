<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = [
        'title', 'description',
    ];

    public function posts() {
        return $this->belongsToMany('App\Post', 'categories_posts', 'category_id', 'post_id');
    }
}