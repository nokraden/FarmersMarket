<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
	//public $timestamps = false;
	//const CREATED_AT = 'Created_At';
    //const UPDATED_AT = 'Updated_At';	
	
	//protected $primaryKey = 'Product_SID';

	//Database structure
	protected $fillable = [
		'user_id',
		'name',
		'comments',
		'website',
		'image',
		'address',
		'city',
		'state',
		'zipcode',
		'latitude',
		'lngitude',
		'start',
		'end',
		'approved'
	];
	
	//Defined database cardinality an dlinks one market to many products
	public function products() {
			return $this->hasMany('App\Models\Product');
	}
}
