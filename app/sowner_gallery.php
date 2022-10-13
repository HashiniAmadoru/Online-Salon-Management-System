<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sowner_gallery extends Model
{
    protected $table 		= "sowner_gallery";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'id', 

        'salon_id',

        'photo_type',

        'photo',

    ];
}
