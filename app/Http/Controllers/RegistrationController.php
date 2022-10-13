<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\SalonOwner;
use App\User;
use App\vision_details;
use App\open_close_time;
use App\sowner_gallery;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller {

    //Customer registration
    public function cus_reg(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'nic' => 'required|regex:/^[0-9]{9}[vV]$/',
            'phone1' => 'required|digits:10',
        ]);

        $cus_id = generate_id('personals', 'reg_id', 'cus', 5);

        $data = $request->all();
        $save['reg_id'] = $cus_id;
        $save['name'] = $data['name'];
        $save['address'] = $data['address'];
        $save['email'] = $data['email'];
        $save['nic'] = $data['nic'];
        $save['city'] = $data['city'];
        $save['phone1'] = $data['phone1'];


        Personal::create($save);

        return back()->with("success", "Your Registration successfully");
    }

    //Salon owner registration
    public function salonowner_reg(Request $request) {

        $this->validate($request, [
            'salonOwnerName' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'nic' => 'required|regex:/^[0-9]{9}[vV]$/',
            'phone1' => 'required|digits:10',
            'SalonName' => 'required',
            'salonAddress' => 'required',
            'password' => 'required|size:8'
        ]);

        $cus_id = generate_id('personals', 'reg_id', 'cus', 5);

        $salon_id = generate_id('salon_owners', 'salon_id', 'salon', 5);

        $data = $request->all();
        $save['reg_id'] = $cus_id;
        $save['name'] = $data['salonOwnerName'];
        $save['address'] = $data['address'];
        $save['email'] = $data['email'];
        $save['nic'] = $data['nic'];
        $save['city'] = $data['city'];
        $save['phone1'] = $data['phone1'];

        $save_salon['salon_id'] = $salon_id;
        $save_salon['salon_name'] = $data['SalonName'];
        $save_salon['salon_address'] = $data['salonAddress'];
        $save_salon['reg_id'] = $cus_id;
        $save_salon['profile_img'] = 'profile/trainer-3.jpg';

        $save_user['user_role'] = 'S_Owner';
        $save_user['name'] = $data['salonOwnerName'];
        $save_user['email'] = $data['email'];
        $save_user['password'] = Hash::make($data['password']);

        $save_vision['salon_id'] = $salon_id;

        $cover_photo['salon_id'] = $salon_id;
        $cover_photo['photo_type'] = 'Cover';
        $cover_photo['photo'] = 'profile/1605085990832.jpg';

        Personal::create($save);
        SalonOwner::insert($save_salon);
        vision_details::insert($save_vision);
        sowner_gallery::insert($cover_photo);
        User::insert($save_user);


        $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        foreach ($weekdays as $date) {
            $save_time['salon_id'] = $salon_id;
            $save_time['date'] = $date;
            $save_time['open_time'] = '07.00AM';
            $save_time['close_time'] = '07.00PM';

            open_close_time::insert($save_time);
        }

        return back()->with("success", "Your Registration successfully");
    }

}
