<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
   protected $table 		= "contactuses";

	protected $primaryKey 	= 'con_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'con_id', 

        'name',

        'email',

        'message'
    ];
}
