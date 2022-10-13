<?php

namespace App;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

class salon_product extends Model
{
   protected $table 		= "salon_product";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'int';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'id', 

        'salon_id',

        'product_id',

    ];


    protected function salonWith_products(){

        $email = Auth::user()->email;

        $details = personalDetails($email);
          
        $reg_id['reg_id'] = $details->reg_id;
         
        $profile = SalonOwner::where('reg_id',$reg_id)->first()->toArray();
          
        

        $product_details = DB::table('product_list')
            ->join('salon_product', 'product_list.product_id', '=', 'salon_product.product_id')
            ->join('product_type', 'product_list.product_type_id', '=', 'product_type.product_type_id')
            ->where('salon_product.salon_id','=',$profile['salon_id']);
// dd( $product_details);
        return $product_details;

    }


    protected function CusSalonWith_product($salon_id,$product_type_id){


         $product_details = DB::table('product_list')
            ->join('salon_product', 'product_list.product_id', '=', 'salon_product.product_id')
            ->join('product_type', 'product_list.product_type_id', '=', 'product_type.product_type_id')
            ->where('salon_product.salon_id','=',$salon_id)
            ->where('product_type.product_type_id','=',$product_type_id)
            ->get(['product_list.*','salon_product.*','product_type.product_type_id','product_type.product_type']);

        return $product_details;
    }

}
