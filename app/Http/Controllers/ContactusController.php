<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactus;

class ContactusController extends Controller {

    //customer Contact us details
    public function contact(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $cus_id = generate_id('contactuses', 'con_id', 'con', 5);

        $data = $request->all();
        $save['con_id'] = $cus_id;
        $save['name'] = $data['name'];
        $save['email'] = $data['email'];
        $save['message'] = $data['message'];


        Contactus::create($save);

        return redirect()->back();
    }

    //view customer contact us page
    public function contactus(Request $request) {

        return view('contactus');
    }

}
