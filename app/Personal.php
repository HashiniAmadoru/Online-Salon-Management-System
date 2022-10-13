<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table 		= "personals";

	protected $primaryKey 	= 'reg_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'reg_id', 

        'name', 

        'address',

        'email',

        'nic',

        'city',

        'phone1'
    ];

    public function myprofile() {

        return $this->hasOne('App\SalonOwner', 'reg_id', 'reg_id');
    }
}
