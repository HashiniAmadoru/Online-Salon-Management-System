<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
   protected $table 		= "services";

	protected $primaryKey 	= 'service_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'service_id',

        'sub_service_id', 

        'service_name',

        'image',

        'time',

        'status',
    ];

    public function ServiceDetails() {

        return $this->belongsTo('App\subServices', 'sub_service_id');
    }

    protected function Sub_main_service(){

        $service_details = DB::table('services')
            ->join('sub_services', 'services.sub_service_id', '=', 'sub_services.sub_service_id')
            ->join('main_services', 'sub_services.main_service_id', '=', 'main_services.main_service_id')
            ->where('services.status','1')
            ->get(['services.*','sub_services.*','main_services.main_service_id','main_services.main_service']);

            return $service_details;
    }

    protected function New_service(){

        $service_details = DB::table('services')
            ->join('sub_services', 'services.sub_service_id', '=', 'sub_services.sub_service_id')
            ->join('main_services', 'sub_services.main_service_id', '=', 'main_services.main_service_id')
            ->where('services.status','0')
            ->get(['services.*','sub_services.*','main_services.main_service_id','main_services.main_service']);

            return $service_details;
    }

}
