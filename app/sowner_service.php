<?php

namespace App;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

class sowner_service extends Model
{
    protected $table 		= "sowner_service";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'id', 

        'salon_id',

        'service_id',

        'price',

    ];

    protected function salonWith_services(){

    	$email = Auth::user()->email;

	    $details = personalDetails($email);
	      
	    $reg_id['reg_id'] = $details->reg_id;
	     
	    $profile = SalonOwner::where('reg_id',$reg_id)->first()->toArray();
	      
	    

		$service_details = DB::table('services')
            ->join('sowner_service', 'services.service_id', '=', 'sowner_service.service_id')
            ->join('sub_services', 'services.sub_service_id', '=', 'sub_services.sub_service_id')
            ->join('main_services', 'sub_services.main_service_id', '=', 'main_services.main_service_id')
            ->where('sowner_service.salon_id','=',$profile['salon_id']);

	    return $service_details;
    }

    protected function CusSalonWith_services($salon_id,$service_id){


        $service_details = DB::table('services')
            ->join('sowner_service', 'services.service_id', '=', 'sowner_service.service_id')
            ->join('sub_services', 'services.sub_service_id', '=', 'sub_services.sub_service_id')
            ->join('main_services', 'sub_services.main_service_id', '=', 'main_services.main_service_id')
            ->where('sowner_service.salon_id','=', $salon_id)
            ->where('main_services.main_service_id','=', $service_id);

        return $service_details;
    }

    protected function CusSalonWith_SubServices($salon_id,$sub_service_id){


        $service_details = DB::table('services')
            ->join('sowner_service', 'services.service_id', '=', 'sowner_service.service_id')
            ->join('sub_services', 'services.sub_service_id', '=', 'sub_services.sub_service_id')
            ->join('main_services', 'sub_services.main_service_id', '=', 'main_services.main_service_id')
            ->where('sowner_service.salon_id','=', $salon_id)
            ->where('sub_services.sub_service_id','=', $sub_service_id);

        return $service_details;
    }
}
