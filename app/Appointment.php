<?php

namespace App;
use Mail;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table 		= "appointments";

	protected $primaryKey 	= 'app_id';

	protected $keyType 		= 'string';

	public $incrementing 	= false;

	public $timestamps 		= true;

    protected $fillable = [

        'app_id', 

        'Cus_name',

        'email',

        'service',

        'phone',

        'status',

        'date',

        'time',

        'salon_id'
    ];


    protected function sendEmail($data){
       

        $recpnt_list = $data['to'];

        $sbjct = $data['subject'];

        $mail_data    = array('title' => $data['title'], 'content' => $data['msg']);

        $is_send = Mail::send('emailTemplate', $mail_data, function ($message) use ($recpnt_list, $sbjct) {

                $message->from('saloncenter9@gmail.com');
                $message->to($recpnt_list);
                $message->subject($sbjct);           
                
            });

       return 'send';
    }

    public function salon() {

        return $this->hasOne('App\SalonOwner', 'salon_id', 'salon_id');
    }
}