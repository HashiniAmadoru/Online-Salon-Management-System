<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalonOwner extends Model
{
    protected $table 		= "salon_owners";

	protected $primaryKey 	= 'salon_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'salon_id', 

        'salon_name',

        'salon_address',

        'reg_id',

        'profile_img'
    ];

    public function profileDetails() {

        return $this->belongsTo('App\Personal', 'reg_id');
    }
    
    public function salonDetails() {

        return $this->belongsTo('App\owners', 'reg_id');
    }

    public function AppointmentDetails() {

        return $this->belongsTo('App\Appointment', 'salon_id');
    }

}
