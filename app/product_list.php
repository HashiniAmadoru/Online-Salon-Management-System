<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class product_list extends Model
{
    protected $table 		= "product_list";

	protected $primaryKey 	= 'product_id';

	protected $keyType 		= 'int';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'product_id', 

        'product_name',

        'product_type_id',

        'image',
    ];

    public function product() {

        return $this->hasMany('App\product_type', 'product_type_id', 'product_type_id');
    }

    protected function Sub_main_product(){

        $products = DB::table('product_list')
            ->join('product_type', 'product_list.product_type_id', '=', 'product_type.product_type_id')
            ->where('product_list.status','1')
            ->get(['product_list.*','product_list.product_type_id','product_type.product_type']);
// dd($products);
            return $products;
    }

    protected function New_product(){

        $product_details = DB::table('product_list')
            ->join('product_type', 'product_list.product_type_id', '=', 'product_type.product_type_id')
            ->where('product_list.status','0')
            ->get(['product_list.*','product_list.product_type_id','product_type.product_type']);

            return $product_details;
    }


}
