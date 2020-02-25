<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public $table = 'destination';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category', 'location', 'description', 'image'];

    public function divisi(){
    	return $this->belongsTo('App\Divisi', 'divisi','id_div');
    }
}
