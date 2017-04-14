<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['title','description','image','link','category_id','user_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
