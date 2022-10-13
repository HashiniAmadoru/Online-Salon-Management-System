<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subServices extends Model
{
    protected $table 		= "sub_services";

	protected $primaryKey 	= 'sub_service_id';

	protected $keyType 		= 'int';

	public $incrementing 	= true;

	public $timestamps 		= false;

    protected $fillable = [

        'sub_service_id', 

        'sub_service',

        'main_service_id',
	];

	
    public function subServiceDetails() {

        return $this->belongsTo('App\mainServices', 'main_service_id');
    }

    public function Service() {

        return $this->hasMany('App\service', 'sub_service_id', 'sub_service_id');
    }

}
