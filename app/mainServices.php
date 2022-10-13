<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainServices extends Model
{
    protected $table 		= "main_services";

	protected $primaryKey 	= 'main_service_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'main_service_id', 

        'main_service',
	];

	
	
    public function subService() {

        return $this->hasMany('App\subServices', 'main_service_id', 'main_service_id');
    }
}
