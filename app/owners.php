<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owners extends Model
{
    protected $table 		= "owners";

	protected $primaryKey 	= 'salon_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

     public function salon() {

        return $this->hasOne('App\SalonOwner', 'reg_id', 'reg_id');
    }

}
