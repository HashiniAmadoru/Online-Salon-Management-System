<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
   protected $table 		= "ad_images";

	protected $primaryKey 	= 'id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'id', 

        'ad_id',

        'image_name'
    ];


    public function advertisement() {

        return $this->belongsTo('App\Advertisement', 'ad_id');
    }
}
