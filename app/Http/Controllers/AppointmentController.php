<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller {

    //Make Appointment 
    public function appointment(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'phone' => 'required|digits:10',
            'date' => 'required',
            'time' => 'required'
        ]);

        $data = $request->all();

        $app_id = generate_id('appointments', 'app_id', 'app', 5);

        $save['app_id'] = $app_id;
        $save['Cus_name'] = $data['name'];
        $save['email'] = $data['email'];
        $save['service'] = $data['service'];
        $save['phone'] = $data['phone'];
        $save['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        $save['time'] = $data['time'];
        $save['salon_id'] = $data['salon'];

        Appointment::create($save);

        return back()->with("success", "Your Appointment successfully");
    }

    //Appointment with salon_ID
    public function appointment_salon(Request $request) {

        $salon_id = $request->salon_id;
        return view('appointment', compact('salon_id'));
    }

}
