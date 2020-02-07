<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "views";

    protected $fillable = ['name','category', 'image'];
}

