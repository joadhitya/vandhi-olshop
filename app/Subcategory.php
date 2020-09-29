<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['subcategory_code', 'subcategory_name','id_category' ,'subcategory_slug', 'subcategory_description'];
}
