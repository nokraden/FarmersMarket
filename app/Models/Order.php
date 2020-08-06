<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	//public $timestamps = false;
	//const CREATED_AT = 'Created_At';
    //const UPDATED_AT = 'Updated_At';	
	
	//protected $primaryKey = 'Product_SID';
	
	protected $fillable = [
		'user_id',
		'product_id',
		'market_id',
		'quantity',
		'price',
		'invoiced'
	];
	
	public function product() {
		return $this->belongsTo('App\Models\Product');
	}
}