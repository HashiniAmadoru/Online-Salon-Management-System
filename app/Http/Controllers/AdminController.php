<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\SalonOwner;
use App\Appointment;
use App\customer;
use App\owners;
use App\User;
use App\Advertisement;
use App\AdImage;
use App\contactus;
use App\Comment;
use App\service;
use App\mainServices;
use App\subServices;
use App\vision_details;
use App\open_close_time;
use App\product_type;
use App\product_list;
use App\sowner_gallery;
use App\sowner_service;
use App\salon_product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

    //SERVICE AREA

    public function __construct() {
        $this->middleware('auth');
    }

    //reg main servie area
    public function main_service_reg(Request $request) {

        $this->validate($request, [
            'main_service' => 'required',
            'image2' => 'required|max:1',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $img = $request->file('image2');

        $data = $request->all();
        $save['main_service'] = $data['main_service'];

        $imageName = time() . rand(10, 1000) . '.' . $img->getClientOriginalExtension();

        $destinationPath = Storage::disk('public')->putFileAs('photos', $img, $imageName);

        $save['image'] = $destinationPath;
        
        mainServices::insert($save);

        return redirect()->back();
    }

    //edit Mainservice
    public function editMainservice(Request $request) {
       
        $main_service_id = $request->main_service_id;

        $mainSer = subServices::where("main_service_id", $main_service_id)->get();
        if (!empty($mainSer->toArray())) {
            return Redirect('/adminService')->with("warning", "You cannot update Record. Because This has sub services");
        }

        $data = mainServices::where('main_service_id', $main_service_id)->first()->toArray();

        $data['preview_img'] = Storage::url($data['image']);

        return view('adminMainServiceEdit', compact('data'));
    }

    //update Main service
    public function updateMainservice(Request $request, $main_service_id) {

        $update = $request->all();

        $sdata['main_service'] = $update['main_service'];

         if (isset($update['file-input'])) {
            $imageName = time() . rand(10, 1000) . '.' . $update['file-input']->getClientOriginalExtension();
            $destinationPath = Storage::disk('public')->putFileAs('service', $update['file-input'], $imageName);
            $sdata['image'] = $destinationPath;
        }
        
        mainServices::where('main_service_id', $main_service_id)->update($sdata);

        return Redirect('/adminService')->with("success", "Your Updated successfully");
    }

//delete Main service
    public function deleteMainservice(Request $request) {

        $main_service_id = $request->main_service_id;

        $mainSer = subServices::where("main_service_id", $main_service_id)->get();
        if (!empty($mainSer->toArray())) {
            return Redirect('/adminService')->with("warning", "You cannot delete Record. Because This has sub services");
        }
        mainServices::where("main_service_id", $main_service_id)->delete();
        return Redirect('/adminService')->with("danger", "Delete Record successfully");
    }

    //sub_service_reg
    public function sub_service_reg(Request $request) {

        $this->validate($request, [
            'sub_service' => 'required',
            'main_service_id' => 'required',
        ]);

        $data = $request->all();

        $save['sub_service'] = $data['sub_service'];
        $save['main_service_id'] = $data['main_service_id'];

        subServices::insert($save);

        return redirect('/adminService')->with("success2", "Your Updated successfully");
    }

    //edit Sub service
    public function editSubsService(Request $request) {

        $sub_service_id = $request->sub_service_id;

        $SubSer = service::where("sub_service_id", $sub_service_id)->get();

        if (!empty($SubSer->toArray())) {
            return Redirect('/adminService')->with("warning2", "You cannot Update Record. Because This has sub services.");
        }

        $data = subServices::where('sub_service_id', $sub_service_id)->first()->toArray();

        return view('adminSubServiceEdit', compact('data'));
    }

    //update Sub service
    public function updateSubservice(Request $request, $sub_service_id) {

        $update = $request->all();

        $sdata['sub_service'] = $update['sub_service'];

        subServices::where('sub_service_id', $sub_service_id)->update($sdata);

        return Redirect('/adminService')->with("success2", "Your Updated successfully");
    }

    //delete sub service
    public function deleteSubservice(Request $request) {

        $sub_service_id = $request->sub_service_id;

        $SubSer = service::where("sub_service_id", $sub_service_id)->get();
        if (!empty($SubSer->toArray())) {
            return Redirect('/adminService')->with("warning2", "You cannot Delete Record. Because This has sub services.");
        }

        subServices::where("sub_service_id", $sub_service_id)->delete();
        return Redirect('/adminService')->with("danger2", "Delete Record successfully");
    }

    //get main service with sub services
    public function allSubService(Request $request, $main_service_id) {

        $mainSer = subServices::where("main_service_id", $main_service_id)->get();
        if (!empty($mainSer->toArray())) {
            return $mainSer->toArray();
        }
        return 'false';
    }

    //view admin service page with details
    public function adminService() {

        // $alldata = service::where('status','1')->with('ServiceDetails')->get()->toArray();

        $alldata = service::Sub_main_service()->toArray();

        foreach ($alldata as $data) {

            $data->preview_img = Storage::url($data->image);

            $withimg[] = $data;
        }
        //view main service details
        $main_Services = mainServices::get()->toArray();

        //view sub service details
        $sub_service = subServices::with('subServiceDetails')->get()->toArray();

        return view('adminService', compact('withimg', 'main_Services', 'sub_service'));
    }

    //service_reg registration
    public function admin_service_reg(Request $request) {

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
// dd($save);


        $save['status'] = '1';

        service::create($save);

        return redirect('/adminService')->with("success3", "Your Updated successfully");
    }

    //delete service
    public function deleteservice(Request $request) {

        $service_id = $request->service_id;

        $SubSer = sowner_service::where("service_id", $service_id)->get();

        if (!empty($SubSer->toArray())) {
            return Redirect('/adminService')->with("warning3", "You cannot Delete Record. Because This service is used by a salon.");
        }

        service::where("service_id", $service_id)->delete();

        return Redirect('/adminService')->with("danger3", "Delete Record successfully");
    }

    //service edit
    public function viewservice(Request $request) {

        $service_id = $request->service_id;

        $SubSer = sowner_service::where("service_id", $service_id)->get();

        if (!empty($SubSer->toArray())) {
            return Redirect('/adminService')->with("warning3", "You cannot Update Record. Because This service is used by a salon.");
        }

        $data = service::where('service_id', $service_id)->first()->toArray();
        $data['preview_img'] = Storage::url($data['image']);


        return view('adminServiceEdit', compact('data'));
    }

    //update service
    public function updateservice(Request $request, $service_id) {

        $update = $request->all();

        $sdata['service_name'] = $update['service_name'];
        $sdata['time'] = $update['time'];


        if (isset($update['file-input'])) {
            $imageName = time() . rand(10, 1000) . '.' . $update['file-input']->getClientOriginalExtension();
            $destinationPath = Storage::disk('public')->putFileAs('service', $update['file-input'], $imageName);
            $sdata['image'] = $destinationPath;
        }

        service::where('service_id', $service_id)->update($sdata);

        return Redirect('/adminService')->with("success3", "Your Updated successfully");
    }

    //admin - new service page
    public function adminNewService() {

        $alldata = service::New_service()->toArray();

        $withimg = [];

        if (!empty($alldata)) {

            foreach ($alldata as $data) {

                $data->preview_img = Storage::url($data->image);

                $withimg[] = $data;
            }
        }

        return view('adminNewService', compact('withimg'));
    }

    //admin service - Approve new service 
    public function NewService_approve(Request $request) {

        $service_id = $request->service_id;

        $update['status'] = '1';

        service::where('service_id', $service_id)->update($update);

        return Redirect('/adminNewService')->with("success", "Add Your Record successfully.");
    }

    //admin service - Delete new service 
    public function NewService_delete(Request $request) {

        $service_id = $request->service_id;

        service::where("service_id", $service_id)->delete();

        return Redirect('/adminNewService')->with("danger", "Delete Record successfully.");

        // return Redirect()->back();
    }

    //PRODUCT AREA
    //view admin product page

    public function adminProduct(Request $request) {

        $main_Products = product_type::get()->toArray();

        $production = product_list::Sub_main_product()->toArray();

        foreach ($production as $data) {

            $data->preview_img = Storage::url($data->image);
// dd($data);
            $withimg[] = $data;
        }
        // dd($withimg);
// dd($production);
        return view('adminProduct', compact('main_Products', 'withimg'));
    }

    //admin main product reg part
    public function main_product_reg(Request $request) {

        $this->validate($request, [
            'product_type' => 'required',
        ]);

        $data = $request->all();
        $save['product_type'] = $data['product_type'];

        product_type::insert($save);

        return redirect()->back();
    }

    //Edit main products
    public function editMainProduct(Request $request) {

        $product_type_id = $request->product_type_id;
// dd($product_type_id);
        $SubSer = product_list::where("product_type_id", $product_type_id)->get();

        if (!empty($SubSer->toArray())) {
            return Redirect('/adminProduct')->with("warning", "You cannot Update Record. Because This has sub Products.");
        }

        $data = product_type::where('product_type_id', $product_type_id)->first()->toArray();


        return view('adminProductEdit', compact('data'));
    }

    //update Main product
    public function updateProduct(Request $request, $product_type_id) {

        $update = $request->all();

        $sdata['product_type'] = $update['product_type'];


        product_type::where('product_type_id', $product_type_id)->update($sdata);

        return Redirect('/adminProduct')->with("success", "Your Updated successfully");
    }

    //delete main products
    public function deleteMainProduct(Request $request) {

        $product_type_id = $request->product_type_id;

        $SubSer = product_list::where("product_type_id", $product_type_id)->get();
        if (!empty($SubSer->toArray())) {
            return Redirect('/adminProduct')->with("warning", "You cannot Delete Record. Because This has sub Products.");
        }

        product_type::where("product_type_id", $product_type_id)->delete();
        return Redirect('/adminProduct')->with("danger", "Delete Record successfully");
    }

    //admin product reg part
    public function product_reg(Request $request) {

        $this->validate($request, [
            'product_name' => 'required',
            'image' => 'required|max:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $request->file('image');

        $data = $request->all();

        $save['product_name'] = $data['product_name'];
        $save['product_type_id'] = $data['main_Product'];
        $imageName = time() . rand(10, 1000) . '.' . $img->getClientOriginalExtension();

        $destinationPath = Storage::disk('public')->putFileAs('photos', $img, $imageName);

        $save['image'] = $destinationPath;
        $save['status'] = '1';
// dd($save);
        product_list::insert($save);

        return redirect()->back();
    }

    public function adminNewProduct() {

        $alldata = product_list::New_product()->toArray();

        $withimg = [];

        if (!empty($alldata)) {

            foreach ($alldata as $data) {

                $data->preview_img = Storage::url($data->image);

                $withimg[] = $data;
            }
// dd($withimg);
        }

        return view('adminNewProduct', compact('withimg'));
    }

    //admin product - Approve new product 
    public function NewProduct_approve(Request $request) {

        $product_id = $request->product_id;

        $update['status'] = '1';

        product_list::where('product_id', $product_id)->update($update);

        return Redirect('/adminNewProduct')->with("success", "Add Your Record successfully.");
    }

    //admin product - Delete new product 
    public function NewProduct_delete(Request $request) {

        $product_id = $request->product_id;

        product_list::where("product_id", $product_id)->delete();

        return Redirect('/adminNewProduct')->with("danger", "Delete Record successfully.");
    }

    //Edit sub products
    public function editSubProduct(Request $request) {

        $product_id = $request->product_id;
// dd($product_id);
        $Subpro = salon_product::where("product_id", $product_id)->get();

        if (!empty($Subpro->toArray())) {
            return Redirect('/adminProduct')->with("warning2", "You cannot Update Record. Because This Product is used by a salon.");
        }

        $data = product_list::where('product_id', $product_id)->first()->toArray();
        // dd($data );

        $data['preview_img'] = Storage::url($data['image']);


        return view('adminSubProductEdit', compact('data'));
    }

    //update Sub product
    public function updateSubProduct(Request $request, $product_id) {

        $update = $request->all();

        $sdata['product_name'] = $update['product_name'];


        if (isset($update['file-input'])) {
            $imageName = time() . rand(10, 1000) . '.' . $update['file-input']->getClientOriginalExtension();
            $destinationPath = Storage::disk('public')->putFileAs('service', $update['file-input'], $imageName);
            $sdata['image'] = $destinationPath;
        }


        product_list::where('product_id', $product_id)->update($sdata);

        return Redirect('/adminProduct')->with("success2", "Your Updated successfully");
    }

    //delete sub products
    public function deleteSubProduct(Request $request) {

        $product_id = $request->product_id;

        $SubPro = salon_product::where("product_id", $product_id)->get();
        if (!empty($SubPro->toArray())) {
            return Redirect('/adminProduct')->with("warning2", "You cannot Delete Record. Because This Product is used by a salon.");
        }

        product_list::where("product_id", $product_id)->delete();
        return Redirect('/adminProduct')->with("danger2", "Delete Record successfully");
    }

    //ADMIN AREA
    //admin dashboard all details
    public function count_salon() {

        //count customers, owners, ads, appointments
        $customer = customer::get()->count();
        $owners = owners::get()->count();
        $Advertisement = Advertisement::get()->count();
        $Appointment = Appointment::get()->count();


        $data['customer'] = $customer;
        $data['owners'] = $owners;
        $data['Advertisement'] = $Advertisement;
        $data['Appointment'] = $Appointment;

        $sdata = owners::with('salon')->get()->toArray();

        $alldata = customer::get()->toArray();

        //Customer with high number of advertisements
        $advertdata = DB::select('SELECT  COUNT(`ad_id`) AS `countRW`, `email` FROM `advertisements` GROUP BY `email` ORDER BY (`countRW`) DESC LIMIT 5');


        foreach ($advertdata as $key => $value) {

            $pdata['email'] = $value->email;
            $pdata['count'] = $value->countRW;
            $pdata['name'] = Advertisement::where('email', $value->email)->first()->name;

 

            $adata[] = $pdata;


        }

        //Salon with high number of appointments
        $highAppointment = DB::select('SELECT  COUNT(`app_id`) AS `countRW`, `salon_id` FROM `appointments` GROUP BY `salon_id` ORDER BY (`countRW`) DESC LIMIT 5');

        foreach ($highAppointment as $key => $H_app) {
            $A_data['count'] = $H_app->countRW;
            $A_data['all'] = SalonOwner::where('salon_id', $H_app->salon_id)->first()->salon_name;

            $App_data[] = $A_data;
        }

        //Customer with high number of appointments
        $Cus_Appointment = DB::select('SELECT  COUNT(`app_id`) AS `countRW`, `email` FROM `appointments` GROUP BY `email` ORDER BY (`countRW`) DESC LIMIT 5');

        foreach ($Cus_Appointment as $key => $C_app) {
            $C_data['count'] = $C_app->countRW;

            $C_data['all'] = Appointment::where('email', $C_app->email)->first()->Cus_name;

            $Cus_data[] = $C_data;
        }

        if (empty($adata)) {
            $adata = [];
        }

        return view('adminDashboard', compact('data', 'sdata', 'alldata', 'adata', 'App_data', 'Cus_data'));
    }

    //View admin customer details
    public function all_customer() {

        $alldata = customer::get()->toArray();

        return view('adminCustomer', compact('alldata'));
    }

    //delete admin/customer
    public function delete_customer($reg_id, $email) {

        $email = $email;

        $reg_id = $reg_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Remove From Registration';

        $data['msg'] = 'Your Participant was caneled.';

        $mail = Appointment::sendEmail($data);

        Personal::where("reg_id", $reg_id)->delete();

        if ($mail == 'send') {
            return back()->with("danger", "Delete Customer successfully");
        }

        return Redirect()->back();
    }

    //view admin/customer contact form
    public function customer_contact(Request $request) {

        $email = $request->email;

        return view('A_CustomerContactform', compact('email'));
    }

    //Admin/customer contact form details(send mail details)
    public function A_CustomerContactform(Request $request) {

        $details = $request->all();

        $email = $request->email;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = $details['title'];

        $data['msg'] = $details['message'];

        $mail = Appointment::sendEmail($data);
        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

    //View admin/salon owners details
    public function all_salon() {

        $alldata = owners::with('salon')->get()->toArray();

        return view('adminSalonOwner', compact('alldata'));
    }

    //delete admin/salon owner 
    public function deletesalonowner($reg_id, $email, $salon_id) {

        $email = $email;

        $reg_id = $reg_id;

        $salon_id = $salon_id;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = 'Remove From Registration(SalonOwner)';

        $data['msg'] = 'Your Participant was caneled.';

        $mail = Appointment::sendEmail($data);

        Appointment::where("salon_id", $salon_id)->delete();

        Comment::where("salon_id", $salon_id)->delete();

        vision_details::where("salon_id", $salon_id)->delete();

        open_close_time::where("salon_id", $salon_id)->delete();

        sowner_gallery::where("salon_id", $salon_id)->delete();

        salon_product::where("salon_id", $salon_id)->delete();

        sowner_service::where("salon_id", $salon_id)->delete();

        SalonOwner::where("reg_id", $reg_id)->delete();

        User::where("email", $email)->delete();

        Personal::where("reg_id", $reg_id)->delete();

        if ($mail == 'send') {
            return back()->with("danger", "Delete Salon Owner successfully");
        }

        return Redirect()->back();
    }

    //view admin/salonowner contact form
    public function salon_contact(Request $request) {

        $email = $request->email;

        return view('A_SalonContactform', compact('email'));
    }

    //Admin/salon owner contact form details(send mail details)
    public function A_SalonContactform(Request $request) {

        $details = $request->all();

        $email = $request->email;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = $details['title'];

        $data['msg'] = $details['message'];

        $mail = Appointment::sendEmail($data);
        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

    //view admin/appointment page details
    public function adminAppointment() {

        $alldata = Appointment::with('salon')->orderBY('app_id', 'DESC')->get()->toArray();

        return view('adminAppointment', compact('alldata'));
    }

    //view admin/advertisement details
    public function adminAdvertisement() {

        $allAd = Advertisement::with('adimages')->get()->toArray();

        foreach ($allAd as $profile) {
            $withimg = [];

            foreach ($profile['adimages'] as $allimg) {

                $data['preview_img'] = Storage::url($allimg['image_name']);

                $withimg[] = $data;
            }
            unset($profile['adimages']);
            $profile['images'] = $withimg;


            $alldata[] = $profile;
        }

        if (empty($alldata)) {
            $alldata = [];
        }
        
        return view('adminAdvertisement', compact('alldata'));
    }

    //view admin/advertisement contact form page
    public function advertisement_contact(Request $request) {

        $email = $request->email;

        return view('A_AdvertisementContactform', compact('email'));
    }

    //Admin/advertisement contact form details(send mail details)
    public function A_AdvertisementContactform(Request $request) {

        $details = $request->all();

        $email = $request->email;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = $details['title'];

        $data['msg'] = $details['message'];

        $mail = Appointment::sendEmail($data);
        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

    //View admin/contactus page
    public function adminContactus() {

        $alldata = contactus::get()->toArray();

        return view('adminContactus', compact('alldata'));
    }

    //SALON OWNER AREA
    //view salonowner/appointment contact form page
    public function S_customer_contact(Request $request) {

        $email = $request->email;

        return view('S_customer_contact', compact('email'));
    }

    //Contact form salonowner/appointment details(send mail details)
    public function S_CustomerContactform(Request $request) {

        $details = $request->all();

        $email = $request->email;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = $details['title'];

        $data['msg'] = $details['message'];

        $mail = Appointment::sendEmail($data);
        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

    //view contactform salonowner/admin
    public function S_adminContactForm() {

        return view('S_adminContactForm');
    }

    //Contact form salonowner/admin details(send mail details)
    public function S_adminContact(Request $request) {

        $emailUser = Auth::user()->email;

        $detailsUser = personalDetails($emailUser);

        $reg_id['reg_id'] = $detailsUser->reg_id;

        $profile = SalonOwner::where('reg_id', $reg_id)->first()->toArray();


        $details = $request->all();

        $email = $request->email;

        $data['to'] = $email;

        $data['subject'] = 'Salon Center';

        $data['title'] = $details['title'];

        $data['msg'] = 'Message From : ' . $emailUser . ' - ' . $profile['salon_name'] . "<br>" . $details['message'];

        $mail = Appointment::sendEmail($data);
        if ($mail == 'send') {
            return back()->with("success", "Email successfully");
        }
    }

}
