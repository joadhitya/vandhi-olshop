<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_code', 'category_name', 'category_slug', 'category_description'];
}
