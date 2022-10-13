<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    protected $table 		= "product_type";

	protected $primaryKey 	= 'product_type_id';

	protected $keyType 		= 'int';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'product_type_id', 

        'product_type',
    ];

    public function ProductDetails() {

        return $this->belongsTo('App\product_list', 'product_type_id');
    }

}
