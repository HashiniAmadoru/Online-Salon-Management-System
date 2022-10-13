<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vision_details extends Model
{
    protected $table 		= "vision_details";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'id', 

        'salon_id',

        'description',

        'vision',

        'mission',
    ];
}
