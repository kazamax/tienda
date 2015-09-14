<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'slug', 'description', 'extract', 'price', 'price_bf', 'image', 'visible', 'category_id'];
 
       //relacion con categoria
 	public function category(){
    	return $this->belongsTo('App\Category');
    }

    // Relación Product -> OrderItem
	public function order_item()
	{
    	return $this->hasOne('App\OrderItem');
	}
}


