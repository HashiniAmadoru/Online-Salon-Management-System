<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class open_close_time extends Model
{
    protected $table 		= "open_close_time";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= false;

    protected $fillable = [

        'id', 

        'salon_id',

        'date',

        'open_time',

        'close_time',
    ];
}
