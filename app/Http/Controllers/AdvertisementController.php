<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\AdImage;
use Carbon\Carbon;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller {

    //View customer All Advertisement page with details(image)
    public function index() {

        $alldata = Advertisement::with('adimages')->where('status', '1')->get()->toArray();

        foreach ($alldata as $data) {

            $data['preview_img'] = Storage::url($data['adimages'][0]['image_name']);

            $withimg[] = $data;
        }

         if (empty($withimg)) {
            $withimg = [];
        }

        return view('advertisement', compact('withimg'));
    }

    //customer one advertisement_view with add_ID
    public function advertisement_view(Request $request) {

        $ad_id = $request->ad_id;

        $profile = Advertisement::where('ad_id', $ad_id)->with('adimages')->first()->toArray();

        foreach ($profile['adimages'] as $allimg) {

            $data['preview_img'] = Storage::url($allimg['image_name']);

            $withimg[] = $data;
        }

        unset($profile['adimages']);
        $profile['images'] = $withimg;

        return view('viewalladvertisement', compact('profile','ad_id'));
    }

    //View customer advertisement form page
    public function advertisementForm() {

        return view('advertisementForm');
    }

    //Make Advertisement
    public function add_details(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'topic' => 'required',
            'price' => 'required|int',
            'description' => 'required',
            'phone1' => 'required|digits:10',
            'image' => 'required|max:3|min:3',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $request->file('image');

        $data = $request->all();

        $ad_id = generate_id('advertisements', 'ad_id', 'ad', 5);
        $save['ad_id'] = $ad_id;
        $save['name'] = $data['name'];
        $save['email'] = $data['email'];
        $save['address'] = $data['address'];
        $save['topic'] = $data['topic'];
        $save['price'] = $data['price'];
        $save['description'] = $data['description'];
        $save['phone1'] = $data['phone1'];

        foreach ($img as $image_one) {

            $imageName = time() . rand(10, 1000) . '.' . $image_one->getClientOriginalExtension();

            $destinationPath = Storage::disk('public')->putFileAs('photos', $image_one, $imageName);

            $ad_img['ad_id'] = $ad_id;

            $ad_img['image_name'] = $destinationPath;

            // dd($ad_img);

            AdImage::create($ad_img);
        }
// dd($save);
        Advertisement::create($save);

        return back()->with("success", "Your Advertisement successfully");
    }

}
