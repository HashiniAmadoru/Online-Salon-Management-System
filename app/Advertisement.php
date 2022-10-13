<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Advertisement extends Model
{

    protected $table 		= "advertisements";

	protected $primaryKey 	= 'ad_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'ad_id', 

        'name',

        'email',

        'address',

        'topic',

        'price',

        'description',

        'phone1',

        'image_name'
    ];

    public function adimages() {

        return $this->hasMany('App\AdImage', 'ad_id', 'ad_id');
    }

    //Auto delete admin/advertisement after two weeks
    protected function autoDeleteAdvertisement() {

        $AutoD = Advertisement::where('updated_at', '<', Carbon::now()->subDays(14))->where('status','1')->get();

        foreach ($AutoD as $AutoDelete) {
            
            $ad_id = $AutoDelete->ad_id;
            AdImage::where('ad_id',$ad_id)->delete();
            $AutoDelete->delete();
        }

        return $AutoD;

    }

}
 