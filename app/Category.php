<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "category";
	protected $primaryKey = 'id_cat';
    protected $fillable = ['nama_cat'];
}
