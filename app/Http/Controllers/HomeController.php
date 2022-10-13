<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
       $user_role = Auth::user()->user_role;
       if($user_role == 'admin'){

         $autoDeleteAD = Advertisement::autoDeleteAdvertisement();

        return Redirect ('/adminDashboard');
       }else{
            return Redirect('/myprofile');
        }
    }


    
}
