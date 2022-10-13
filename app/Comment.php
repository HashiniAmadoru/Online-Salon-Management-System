<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table 		= "comments";

	protected $primaryKey 	= 'com_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'com_id', 

        'name',

        'email',

        'message',

        'salon_id'
    ];
}
