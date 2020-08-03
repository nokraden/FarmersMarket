<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//public $timestamps = false;
	//const CREATED_AT = 'Created_At';
    //const UPDATED_AT = 'Updated_At';	
	
	//protected $primaryKey = 'Product_SID';
	//can also add protedctd fields if needed
	protected $fillable = [
        'market_id',
        'vendor_id',
		'name',
		'image',
		'quantity',
		'price'
	];
	
	public function event() {
		return $this->belongsTo('App\Models\Market');
	}
}
