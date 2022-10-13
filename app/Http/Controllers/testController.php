<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalonOwner;

class testController extends Controller
{
    public function test(){
    	$getall = SalonOwner::get()->toArray();
    	return view('testContent', compact('getall'));
    }
}
