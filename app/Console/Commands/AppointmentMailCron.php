<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Appointment;
use Carbon\Carbon;

class AppointmentMailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointmentmail:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       \Log::info("Cron is working fine!");
     
        $today = Carbon::now()->format('Y-m-d');

        $time = Carbon::now()->format('H:i');

            if('00:01' < $time  && $time < '12:00'){

                $period = 'Morning';
                $needTime = 'Afternoon';
                $DateNow = $today;
            }

            if('12:01' < $time  && $time < '17:00'){
                 $period = 'Afternoon';
                 $needTime = 'Evening';
                 $DateNow = $today;

            }
            if('17:01' < $time  && $time < '24:00'){
                 $period = 'Evening';
                 $needTime = 'Morning';
                 $DateNow = Carbon::now()->addDay()->format('Y-m-d');
            }

            $appointmentDet =  Appointment::where('time', $needTime)->whereDate('date', '>=',  $DateNow)->get()->toArray();

            foreach ($appointmentDet as $cus_email) {

               $recpnt_list = $cus_email['email'];
        
                $sbjct = 'subject';
        
                $mail_data    = array('title' => 'Your Appointment', 'content' => 'Regarding the reminder of your appoointment');
        
                $is_send = Mail::send('emailTemplate', $mail_data, function ($message) use ($recpnt_list, $sbjct) {
        
                        $message->from('saloncenter9@gmail.com');
                        $message->to($recpnt_list);
                        $message->subject($sbjct);           
                        
                    });
            }

        $this->info('Demo:Cron Cummand Run successfully!');

    }
}
