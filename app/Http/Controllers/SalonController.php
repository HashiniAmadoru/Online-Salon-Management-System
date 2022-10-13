<?php

namespace App\Http\Controllers;

use App\Personal;
use App\SalonOwner;
use App\Appointment;
use App\Advertisement;
use App\User;
use App\Comment;
use Carbon\Carbon;
use App\service;
use App\mainServices;
use App\subServices;
use App\vision_details;
use App\sowner_service;
use App\open_close_time;
use App\sowner_gallery;
use App\product_type;
use App\product_list;
use App\salon_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SalonController extends Controller {

    //SALON AREA

    public function __construct() {
        $this->middleware('auth');
    }

    //ADMIN DASHBOARD
    //Admin/advertisement accept
    public function advertisement_approve(Request $request) {

        $email = $request->email;

        $ad_id = $request->ad_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Advertisement';

        $data['msg'] = 'Your Advertisement is accepted. We will do our best to accommodate your request.';

        $mail = Appointment::sendEmail($data);

        $update['status'] = '1';

        Advertisement::where('ad_id', $ad_id)->update($update);

        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

    //Admin/advertisement delete
    public function deleteadvertisement(Request $request) {

        $email = $request->email;

        $ad_id = $request->ad_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Delete Your Advertisement';

        $data['msg'] = 'Your Advertisement is deleted. very sorry';

        $mail = Appointment::sendEmail($data);

        Advertisement::where("ad_id", $ad_id)->delete();

        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }


    //SALON OWNER AREA
    //View salonowner/myprofile details page
    public function myprofile() {

        $email = Auth::user()->email;

        $details = personalDetails($email);

        $profile = Personal::where('email', $email)->with('myprofile')->first()->toArray();

        $profile['reg_id'] = $details->reg_id;

        $profile['preview_img'] = Storage::url($profile['myprofile']['profile_img']);

        return view('myprofile', compact('profile'));
    }

    //Edit salonowner/myprofile details page(with values)
    public function viewMyprofile(Request $request) {

        $reg_id = $request->reg_id;

        $profile = Personal::where('reg_id', $reg_id)->with('myprofile')->first()->toArray();

        $profile['preview_img'] = Storage::url($profile['myprofile']['profile_img']);

        return view('updateMyprofile', compact('profile'));
    }

    //update myprofile details
    public function editmyprofile(Request $request, $reg_id) {

        $update = $request->all();

        $data['name'] = $update['Ownername'];
        $data['address'] = $update['address'];
        $data['city'] = $update['city'];
        $data['nic'] = $update['nic'];
        $data['phone1'] = $update['phone1'];

        $sdata['salon_name'] = $update['Sname'];
        $sdata['salon_address'] = $update['Saddress'];

        $udata['name'] = $update['Ownername'];

        if (isset($update['file-input'])) {
            $imageName = time() . rand(10, 1000) . '.' . $update['file-input']->getClientOriginalExtension();

            $destinationPath = Storage::disk('public')->putFileAs('profile', $update['file-input'], $imageName);
            $sdata['profile_img'] = $destinationPath;
        }

        $email = Auth::user()->email;

        Personal::where('reg_id', $reg_id)->update($data);

        SalonOwner::where('reg_id', $reg_id)->update($sdata);

        User::where('email', $email)->update($udata);

        return Redirect('/myprofile')
                        ->with("success", "Your Updated successfully");
    }

    //view salonowners/appointment details page
    public function view(Request $request) {

        $email = Auth::user()->email;

        $details = personalDetails($email);

        $reg_id['reg_id'] = $details->reg_id;

        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();

        $today = Carbon::now()->format('Y-m-d');

        $appointmentDetails = Appointment::where('salon_id', $profile['salon_id'])->whereDate('date', '>=', $today)->get()->toArray();

        return view('SOwnerAppointment', compact('appointmentDetails'));
    }


//Accept salonowner/appointment 
    public function appointment_approve(Request $request) {

        $email = $request->email;

        $app_id = $request->app_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Appointment';

        $data['msg'] = 'Your Appointment is accepted. We will do our best to accommodate your request.';

        $mail = Appointment::sendEmail($data);

        $update['status'] = 'a';

        Appointment::where('app_id', $app_id)->update($update);

        if ($mail == 'send') {
            return back()->with("success", "Appointment Accept successfully");
        }
    }

    //delete salonowner/appointment
    public function delete_appointment($app_id, $email) {

        $email = $email;

        $app_id = $app_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Appointment';

        $data['msg'] = 'Your Appointment was canceled. Very sorry.';

        $mail = Appointment::sendEmail($data);

        Appointment::where("app_id", $app_id)->delete();

        if ($mail == 'send') {
            return back()->with("danger", "Delete Appointment successfully");
        }

        // return Redirect()->back();
    }

    //view salonowner/customer comment page
    public function S_comments(Request $request) {

        $email = Auth::user()->email;

        $details = personalDetails($email);

        $reg_id['reg_id'] = $details->reg_id;

        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();

        $commentDetails = Comment::where('salon_id', $profile['salon_id'])->get()->toArray();

        return view('S_comments', compact('commentDetails'));
    }

//SERVICE AREA
    //Service request from admin
    public function Service_request() {

        //view main service details
        $main_Services = mainServices::get()->toArray();

        $alldata = service::Sub_main_service()->toArray();

        foreach ($alldata as $data) {

            $data->preview_img = Storage::url($data->image);

            $withimg[] = $data;
        }

        return view('Service_request', compact('main_Services', 'withimg'));
    }

    //get main service with sub services
    public function allSubService(Request $request, $main_service_id) {

        $mainSer = subServices::where("main_service_id", $main_service_id)->get();
        // dd($mainSer);
        if (!empty($mainSer->toArray())) {
            return $mainSer->toArray();
        }

        return 'false';
    }

    //salon owner - service_reg registration
    public function service_reg(Request $request) {

        $this->validate($request, [
            'service_name' => 'required',
            'image' => 'required|max:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'time' => 'required',
        ]);



        $img = $request->file('image');

        $data = $request->all();

        $save['sub_service_id'] = $data['sub_service_3form'];
        $save['service_name'] = $data['service_name'];
        $save['time'] = $data['time'];

        $imageName = time() . rand(10, 1000) . '.' . $img->getClientOriginalExtension();

        $destinationPath = Storage::disk('public')->putFileAs('photos', $img, $imageName);

        $save['image'] = $destinationPath;

        $save['status'] = '0';

        service::create($save);

        return Redirect('/Service_request')->with("success", "Your Request successfully");
    }

    //Salon - add your service
    public function Add_yourService() {

        $main_Services = mainServices::get()->toArray();

        $sub_service = subServices::with('subServiceDetails')->get()->toArray();

        $alldata = service::Sub_main_service()->toArray();

        //View Add your service
        $yur_ms = sowner_service::salonWith_services()->groupBy('main_services.main_service_id')->get(['main_services.main_service_id'])->toArray();

        $yur_ss = sowner_service::salonWith_services()->groupBy('sub_services.sub_service_id')->get(['sub_services.sub_service_id'])->toArray();

        $yur_s = sowner_service::salonWith_services()->where('status', '1')->get()->toArray();


        foreach ($yur_ms as $ms_key => $ms) {
            $data[$ms_key] = mainServices::where('main_service_id', $ms->main_service_id)->first()->toArray();
            foreach ($yur_ss as $ss_key => $ss) {
                $hassub = subServices::where('main_service_id', $ms->main_service_id)->where('sub_service_id', $ss->sub_service_id)->first();
                if ($hassub) {
                    $data[$ms_key]['sub'][$ss_key] = $hassub->toArray();
                    foreach ($yur_s as $s_key => $s_value) {
                        if ($s_value->sub_service_id == $ss->sub_service_id) {
                            $data[$ms_key]['sub'][$ss_key]['service'][$s_value->id] = $s_value->service_name;
                        }
                    }
                }
            }
        }

        if (empty($yur_ms)) {
            $data = [];
        }
// dd($data);
        return view('Add_yourService', compact('main_Services', 'alldata', 'sub_service', 'data', 'has_data'));
    }

    //Delete Add Your Service - Sowner 
    public function deleteAddservice(Request $request) {

        $id = $request->id;
// dd($id);
        sowner_service::where("id", $id)->delete();
        return Redirect('/Add_yourService')->with("danger", "Delete Record successfully");
    }

    //get sub service with all services
    public function allServices(Request $request, $sub_service_id) {

        $subSer = service::where("sub_service_id", $sub_service_id)->where('status', '1')->get();

        return view('service_checkbox', compact('subSer'));
    }

    //Add your service - salonowner
    public function add_service(Request $request) {


        $services = $request->services;
        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();


        foreach ($services as $key => $data) {

            if (isset($data['service_id'])) {
                $save['service_id'] = $key;
                $save['price'] = (isset($data['price'])) ? $data['price'] : 0.00;
                $save['salon_id'] = $profile['salon_id'];

                $has_data = sowner_service::where('salon_id', $profile['salon_id'])->where('service_id', $key)->first();

                // if(!empty($has_data)){
                if (empty($has_data)) {
                    sowner_service::create($save);
                    // return back()->with("warning", "Your Service Already Added");
                }

                // sowner_service::create($save);
            }
        }
        return back()->with("success", "Your Service Add successfully");
    }

    //Edit cover photo
    public function editCoverPhoto(Request $request) {

        $id = $request->id;
        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();
        $alldata = sowner_gallery::where('salon_id', $profile['salon_id'])->where('photo_type', 'Cover')->first()->toArray();
        $cover_P = sowner_gallery::where('salon_id', $profile['salon_id'])->first()->toArray();

        $cover_P['preview_img'] = Storage::url($cover_P['photo']);
        // dd($alldata);
        return view('coverphoto', compact('alldata', 'cover_P'));
    }

    //update Seeprofile - cover photo
    public function updateCover_photo(Request $request, $id) {

        $update = $request->all();
        // dd($update);


        if (isset($update['file-input'])) {
            $imageName = time() . rand(10, 1000) . '.' . $update['file-input']->getClientOriginalExtension();

            $destinationPath = Storage::disk('public')->putFileAs('profile', $update['file-input'], $imageName);
            $sdata['photo'] = $destinationPath;
        }


        sowner_gallery::where('id', $id)->update($sdata);

        return Redirect('/SownerSeeProfile')->with("success3", "Your Updated successfully");
    }

//SEE PROFILE PART - Salon owners
    //view Salon owner see Profile
    public function SownerSeeProfile(Request $request) {

        $email = Auth::user()->email;

        $details = personalDetails($email);

        $reg_id['reg_id'] = $details->reg_id;

        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();
        // dd($profile);
        $alldata = vision_details::where('salon_id', $profile['salon_id'])->get()->toArray();

        $time = open_close_time::where('salon_id', $profile['salon_id'])->get()->toArray();

        $cover_P = sowner_gallery::where('salon_id', $profile['salon_id'])->first()->toArray();

        $cover_P['preview_img'] = Storage::url($cover_P['photo']);
        // dd($cover_P);

        return view('SownerSeeProfile', compact('alldata', 'time', 'cover_P', 'profile'));
    }

    //edit seeprofile - who we are details
    public function editVision(Request $request) {

        $id = $request->id;

        $alldata = vision_details::where('id', $id)->first()->toArray();

        return view('visionEdit', compact('alldata'));
    }

    //update seeprofile - who we are details
    public function updateVision(Request $request, $id) {

        $update = $request->all();

        $sdata['description'] = $update['description'];
        $sdata['vision'] = $update['vision'];
        $sdata['mission'] = $update['mission'];



        vision_details::where('id', $id)->update($sdata);

        return Redirect('/SownerSeeProfile')->with("success", "Your Updated successfully");
    }

    //Edit open time
    public function Editopen_time(Request $request) {

        $id = $request->id;
        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();
        $alldata = open_close_time::where('salon_id', $profile['salon_id'])->get()->toArray();
        // dd($alldata);

        return view('openingTime', compact('alldata'));
    }

    //update open time 
    public function updateOpen_time(Request $request) {

        $update = $request->all();

        $sdata['open_time'] = $update['open_time'];
        $sdata['close_time'] = $update['close_time'];

        open_close_time::where('id', $update['date'])->update($sdata);

        return Redirect('/SownerSeeProfile')->with("success1", "Your Updated successfully");
    }

    //view Salon owner products
    public function SownerProduct() {
        return view('SownerProduct');
    }

    //PRODUCT AREA - Sowner
    //Product_request from admin
    public function Product_request() {

        //view main product details
        $main_products = product_type::get()->toArray();

        $production = product_list::Sub_main_product()->toArray();

        foreach ($production as $data) {

            $data->preview_img = Storage::url($data->image);

            $withimg[] = $data;
        }
// dd( $withimg);
        return view('Product_request', compact('main_products', 'withimg'));
    }

    //request product registration - sowner
    public function Sproduct_reg(Request $request) {

        $this->validate($request, [
            'product_name' => 'required',
            'image' => 'required|max:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $request->file('image');

        $data = $request->all();

        $save['product_name'] = $data['product_name'];
        $save['product_type_id'] = $data['product_type'];

        $imageName = time() . rand(10, 1000) . '.' . $img->getClientOriginalExtension();

        $destinationPath = Storage::disk('public')->putFileAs('photos', $img, $imageName);

        $save['image'] = $destinationPath;
        $save['status'] = '0';

        product_list::insert($save);

        return Redirect('/Product_request')->with("success", "Your Request successfully");
    }

    public function Add_yourProduct() {

        $main_Products = product_type::get()->toArray();

        $sub_Products = product_list::with('product')->get()->toArray();

        //View Add your service
        $yur_ms = salon_product::salonWith_products()->groupBy('product_type.product_type_id')->get(['product_type.product_type_id'])->toArray();

        $yur_ss = salon_product::salonWith_products()->groupBy('product_list.product_id')->get(['product_list.product_id'])->toArray();

        $yur_s = salon_product::salonWith_products()->where('status', '1')->get()->toArray();
// dd($yur_s);

        foreach ($yur_ms as $ms_key => $ms) {
            $data[$ms_key] = product_type::where('product_type_id', $ms->product_type_id)->first()->toArray();
            foreach ($yur_ss as $ss_key => $ss) {
                $hassub = product_list::where('product_type_id', $ms->product_type_id)->where('product_id', $ss->product_id)->first();
                if ($hassub) {
                    $data[$ms_key]['sub'][$ss_key] = $hassub->toArray();
                    foreach ($yur_s as $s_key => $s_value) {
                        if ($s_value->product_id == $ss->product_id) {
                            $data[$ms_key]['sub'][$ss_key]['product'][$s_value->id] = $s_value->product_name;
                            // $data[$ms_key]['sub'][$ss_key]['service'][$s_value->id] = $s_value->service_name;
                        }
                    }
                }
            }
        }

// dd($data);
        if (empty($yur_ms)) {
            $data = [];
        }

        return view('Add_yourProduct', compact('main_Products', 'data', 'sub_Products'));
    }

    //get all products
    public function allProducts(Request $request, $product_type_id) {

        $products = product_list::where("product_type_id", $product_type_id)->where('status', '1')->get();

        return view('product_checkbox', compact('products'));
    }

    public function add_product(Request $request) {


        $products = $request->products;

        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();


        foreach ($products as $key => $data) {

            if (isset($data['product_id'])) {
                $save['product_id'] = $key;
                $save['salon_id'] = $profile['salon_id'];

                $has_data = salon_product::where('salon_id', $profile['salon_id'])->where('product_id', $key)->first();

                if (!empty($has_data)) {
                    return back()->with("warning", "Your Product Already Added");
                }

                salon_product::create($save);
                return back()->with("success", "Your Product Add successfully");
            }
        }
    }

    //sowner - delete add products
    public function deleteAddProduct(Request $request) {

        $id = $request->id;
        salon_product::where("id", $id)->delete();
        return Redirect('/Add_yourProduct')->with("danger", "Delete Record successfully");
    }

    //View Salon Owner Gallery page
    public function SalonOwnerGallery(Request $request) {

        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();
        $alldata = sowner_gallery::where('salon_id', $profile['salon_id'])->where('photo_type', 'Gallery')->orderBY('id', 'DESC')->get()->toArray();
// dd($alldata);
// $alldata = sowner_gallery::where('salon_id',$profile['salon_id'])->where('photo_type','Gallery')->orderBY ('id','DESC')->limit(5)->get()->toArray();
        foreach ($alldata as $key => $allimg) {

            $alldata[$key]['preview_img'] = Storage::url($allimg['photo']);
        }


        return view('SalonOwnerGallery', compact('alldata'));
    }

    //delete gallery salonowner
    public function deleteGallery(Request $request) {

        $id = $request->id;
        sowner_gallery::where("id", $id)->where('photo_type', 'Gallery')->delete();
        return Redirect('/SalonOwnerGallery')->with("danger", "Delete Record successfully");
    }

    public function SalonOwnerGalleryReg(Request $request) {



        $this->validate($request, [
            'image' => 'required|max:5',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $request->file('image');

        // $data = $request->all();
        $email = Auth::user()->email;
        $details = personalDetails($email);
        $reg_id['reg_id'] = $details->reg_id;
        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();

        foreach ($img as $image_one) {

            $imageName = time() . rand(10, 1000) . '.' . $image_one->getClientOriginalExtension();

            $destinationPath = Storage::disk('public')->putFileAs('photos', $image_one, $imageName);

            $Sowner_img['photo'] = $destinationPath;

            $Sowner_img['photo_type'] = 'Gallery';
            $Sowner_img['salon_id'] = $profile['salon_id'];

            sowner_gallery::create($Sowner_img);
        }

        return back()->with("success", "Image uploaded successfully");
    }

}
