<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalonOwner;
use App\service;
use App\mainServices;
use App\subServices;
use DB;
use App\Comment;
use App\vision_details;
use App\sowner_service;
use App\open_close_time;
use App\sowner_gallery;
use App\salon_product;
use App\Personal;
use App\product_type;
use App\product_list;
use Illuminate\Support\Facades\Storage;

class CustomerSiteController extends Controller {

    //email check 
    public function check(Request $request) {
// dd($request->get('email'));
        if ($request->get('email')) {
            $email = $request->get('email');
            $data = DB::table("personals")
                    ->where('email', $email)
                    ->count();
            if ($data > 0) {
                echo 'not_unique';
            } else {
                echo 'unique';
            }
        }
    }

    //View Customer salon data(customer view)

    public function all_salon() {

        $withimg = DB::select('SELECT COUNT(`app_id`) AS `countRW`, salon_owners.* FROM `salon_owners`  
            LEFT JOIN  `appointments` ON salon_owners.salon_id = appointments.salon_id 
            GROUP BY salon_owners.salon_id ORDER BY (`countRW`) DESC');
        
        foreach ($withimg as $key => $value) {
            $withimg[$key]->preview_img = Storage::url($value->profile_img);
        }


        return view('salon', compact('withimg'));
    }

    //view seeProfile
    public function seeProfile(Request $request) {

        $salon_id = $request->salon_id;

        $profile = SalonOwner::where('salon_id', $salon_id)->with('profileDetails')->first()->toArray();

        $alldata = vision_details::where('salon_id', $salon_id)->get()->toArray();
 
        $time = open_close_time::where('salon_id', $salon_id)->get()->toArray();

        $Comment = Comment::where('salon_id', $salon_id)->orderBY ('com_id','DESC')->get()->toArray();

        $cover_P = sowner_gallery::where('salon_id', $profile['salon_id'])->first()->toArray();

        $cover_P['preview_img'] = Storage::url($cover_P['photo']);

        $product = product_type::get()->toArray();
        foreach ($product as $img) {

            $img['preview_img'] = Storage::url($img['image']);

            $productWithimg[] = $img;
        }

        $gallary = sowner_gallery::where('salon_id', $profile['salon_id'])->where('photo_type', 'Gallery')->orderBY('id', 'DESC')->limit(8)->get()->toArray();
      
          foreach ($gallary as $data) {

            $data['preview_img'] = Storage::url($data['photo']);

            $withimg[] = $data;
        }

         $main_Services = mainServices::get()->toArray();
         foreach ($main_Services as $img) {

            $img['preview_img'] = Storage::url($img['image']);

            $mainSerWithimg[] = $img;
        }

        if (empty($withimg)) {
            $withimg = [];
        }

        return view('seeProfile', compact('salon_id','profile','cover_P','time','alldata','Comment','withimg','mainSerWithimg','productWithimg'));
       
    }


    public function seeProfileWithID(Request $request) {
       
        $service_id = $request->service_id;
        $salon_id = $request->salon_id;

        
        $yur_ms = sowner_service::CusSalonWith_services($salon_id,$service_id)->groupBy('main_services.main_service_id')->get(['main_services.main_service_id'])->toArray();

         $yur_ss = sowner_service::CusSalonWith_services($salon_id,$service_id)->groupBy('sub_services.sub_service_id')->get(['sub_services.sub_service_id'])->toArray();

        $yur_s = sowner_service::CusSalonWith_services($salon_id,$service_id)->where('status', '1')->get(['services.*','sub_services.*'])->toArray();

        foreach ($yur_ms as $ms_key => $ms) {

            $data[$ms_key] = mainServices::where('main_service_id', $ms->main_service_id)->first()->toArray();
            foreach ($yur_ss as $ss_key => $ss) {

                $hassub = subServices::where('main_service_id', $ms->main_service_id)->where('sub_service_id', $ss->sub_service_id)->first(); 
                if ($hassub) {
                    $data[$ms_key]['sub'][$ss_key] = $hassub->toArray();
                    foreach ($yur_s as $s_key => $s_value) {

                        if ($s_value->sub_service_id == $ss->sub_service_id) {
                           
                            $data[$ms_key]['sub'][$ss_key]['service'][$s_key]['name'] = $s_value->service_name;
                            $data[$ms_key]['sub'][$ss_key]['service'][$s_key]['image'] = Storage::url($s_value->image);
                            $data[$ms_key]['sub'][$ss_key]['service'][$s_key]['time'] = $s_value->time;
                            

                        }
                    }
                }
            }
        }

         if (empty($yur_ms)) {
            $data = [];
        }

        return view('seeProfileModel',compact('data','salon_id'));
    }

     public function seeProfile_Product_WithID(Request $request) {
       
        $product_type_id = $request->product_type_id;
        $salon_id = $request->salon_id;

        $salonProduct = salon_product::CusSalonWith_product($salon_id,$product_type_id);

        foreach ($salonProduct as $img) {

            $img->preview_img = Storage::url($img->image);

            $product_Withimg[] = $img;
        }

        $data = [];
         if (!empty($salonProduct->toArray())) {
           $data =  $salonProduct->toArray();
        }

        return view('seeProfile_productModel',compact('data'));

    }

    public function seeProfileWithSubSer(Request $request) {

        $sub_service_id = $request->sub_service_id;
        $salon_id = $request->salon_id;

        $yur_s = sowner_service::CusSalonWith_SubServices($salon_id,$sub_service_id)->where('status', '1')->get(['services.*','sub_services.*'])->toArray();

        foreach ($yur_s as $Sdata) {

            $Sdata->preview_img = Storage::url($Sdata->image);

            $withimg[] = $Sdata;
        }

    return view('seeProfileModelPart',compact('withimg'));
    }
    

//new service
    public function service() {

        $alldata = service::Sub_main_service()->toArray();

        foreach ($alldata as $data) {

            $data->preview_img = Storage::url($data->image);

            $withimg[] = $data;
        }

        $main_Services = mainServices::get()->toArray();

        $sub_service = subServices::with('subServiceDetails')->get()->toArray();

        return view('service', compact('withimg', 'main_Services', 'sub_service'));
    }

    //to get all services using sub service
    public function allSub_Ser(Request $request) {

        $service_id = $request->service_id;

        $detailResult = service::where('sub_service_id', $service_id)->where('status', '1')->get();
        
        $detailSub = [];

        if(!empty($detailResult)){

            $detailSub = subServices::where('sub_service_id', $detailResult[0]['sub_service_id'])->get();
        }
        
        foreach ($detailResult as $data) {

            $data->preview_img = Storage::url($data->image);

            $withimg[] = $data;
        }

        return view('serviceDetails', compact('withimg','detailSub'));
    }

}
