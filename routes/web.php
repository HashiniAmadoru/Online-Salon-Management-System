<?php


Route::get('/', function () {
    return view('welcome');
});

//Auth Routes
Auth::routes();


//REGISTRATION PART

//view customer registration page
Route::get('/customerReg', function () {
    return view('cusReg');
});

//Customer registration 
Route::post('/register_cus', 'RegistrationController@cus_reg')->name('register_cus');

//Check available email or not
Route::post('email_available/check','CustomerSiteController@check')->name('email_available.check');

//view salon owner registration page
Route::get('/salonOwnerReg', function () {
    return view('salonReg');
});

//Salon owner registration
Route::post('/register_salonowner', 'RegistrationController@salonowner_reg')->name('register_salonowner');



//SERVICES AREA

//MAIN SERVICE AREA

//mainService reg
Route::post('/main_service_reg', 'AdminController@main_service_reg')->name('main_service_reg');

//edit main service details
Route::get('/editMainservice/{main_service_id}','AdminController@editMainservice')->name('editMainservice');

//update Main service details
Route::post('/updateMainservice/{main_service_id}','AdminController@updateMainservice')->name('updateMainservice');

//Delete Main service
Route::get('/deleteMainservice/{main_service_id}','AdminController@deleteMainservice')->name('deleteMainservice');


//SUB SERVICE AREA

//sub service reg
Route::post('/sub_service_reg', 'AdminController@sub_service_reg')->name('sub_service_reg');

//Edit sub service details
Route::get('/editSubsService/{sub_service_id}','AdminController@editSubsService')->name('editSubsService');

//update Sub service details
Route::post('/updateSubservice/{sub_service_id}','AdminController@updateSubservice')->name('updateSubservice');

//Delete Sub service
Route::get('/deleteSubservice/{sub_service_id}','AdminController@deleteSubservice')->name('deleteSubservice');


//OTHER THINGS OF SERVICE[Related service area]

//get main service with all sub services
Route::get('/allSubService/{main_service_id}','AdminController@allSubService')->name('allSubService');

//get main service with all sub services(SalonController)
Route::get('/allSubService/{main_service_id}','SalonController@allSubService')->name('allSubService');

//get sub service with all services
Route::get('/allServices/{sub_service_id}','SalonController@allServices')->name('allServices');

//view customer service page
Route::get('/service','CustomerSiteController@service')->name('service');

//view admin service page
Route::get('/adminService','AdminController@adminService')->name('adminService');

//to get all services using sub service
Route::get('/allSub_Ser/{service_id}','CustomerSiteController@allSub_Ser')->name('allSub_Ser');


//SERVICE REG PART

//Service registration 
Route::post('/admin_service_reg', 'AdminController@admin_service_reg')->name('admin_service_reg');

//Delete service
Route::get('/deleteservice/{service_id}','AdminController@deleteservice')->name('deleteservice');

//edit service details
Route::get('/viewservice/{service_id}','AdminController@viewservice')->name('viewservice');

//update service details
Route::post('/updateservice/{service_id}','AdminController@updateservice')->name('updateservice');


//SERVICE AREA(admins - sowner)

//Sowner - service request form admin
Route::get('/Service_request','SalonController@Service_request')->name('Service_request');

//Sowner - Service request registration 
Route::post('/service_reg', 'SalonController@service_reg')->name('service_reg');

//Sowner - Add your service 
Route::get('/Add_yourService','SalonController@Add_yourService')->name('Add_yourService');

//Sowner - add service reg page
Route::post('/add_service', 'SalonController@add_service')->name('add_service');

//Sowner - delete add your service
Route::get('/deleteAddservice/{id}','SalonController@deleteAddservice')->name('deleteAddservice');



//Admin - new service page
Route::get('/adminNewService','AdminController@adminNewService')->name('adminNewService');

//admin - new service approve
Route::get('/NewService_approve/{service_id}','AdminController@NewService_approve')->name('NewService_approve');

//admin - new service delete part
Route::get('/NewService_delete/{service_id}','AdminController@NewService_delete')->name('NewService_delete');



//PRODUCT AREA


//View Admin product page
Route::get('/adminProduct','AdminController@adminProduct')->name('adminProduct'); 

//admin main product reg part
Route::post('/main_product_reg', 'AdminController@main_product_reg')->name('main_product_reg');

//admin product - main product delete
Route::get('/deleteMainProduct/{product_type_id}','AdminController@deleteMainProduct')->name('deleteMainProduct');

//admin main product edit 
Route::get('/editMainProduct/{product_type_id}','AdminController@editMainProduct')->name('editMainProduct');

//update main products
Route::post('/updateProduct/{product_type_id}','AdminController@updateProduct')->name('updateProduct');

//admin product reg
Route::post('/product_reg', 'AdminController@product_reg')->name('product_reg');

//admin sub product edit 
Route::get('/editSubProduct/{product_id}','AdminController@editSubProduct')->name('editSubProduct');

//update Sub products
Route::post('/updateSubProduct/{product_id}','AdminController@updateSubProduct')->name('updateSubProduct');

//admin product - sub product delete
Route::get('/deleteSubProduct/{product_id}','AdminController@deleteSubProduct')->name('deleteSubProduct');



//Admin - new product page
Route::get('/adminNewProduct','AdminController@adminNewProduct')->name('adminNewProduct');

//admin - new product approve
Route::get('/NewProduct_approve/{product_id}','AdminController@NewProduct_approve')->name('NewProduct_approve');

//admin - new product delete part
Route::get('/NewProduct_delete/{product_id}','AdminController@NewProduct_delete')->name('NewProduct_delete');





//PRODUCT AREA - SOWNER PART

//Sowner - product request form admin
Route::get('/Product_request','SalonController@Product_request')->name('Product_request');

//Sowner - request product reg
Route::post('/Sproduct_reg', 'SalonController@Sproduct_reg')->name('Sproduct_reg');

//Add your product sowner
Route::get('/Add_yourProduct','SalonController@Add_yourProduct')->name('Add_yourProduct');

//get all products
Route::get('/allProducts/{product_type_id}','SalonController@allProducts')->name('allProducts');

//Reg sowner product 
Route::post('/add_product', 'SalonController@add_product')->name('add_product');

//salonowner - delete add your product
Route::get('/deleteAddProduct/{id}','SalonController@deleteAddProduct')->name('deleteAddProduct');


//SALON AREA [WITH APPOINTMENT,COMMENT CUSTOMER VIEW]

//View customer salon details
Route::get('/salon','CustomerSiteController@all_salon')->name('salon');

//Salon Customer appointment with salon_ID
Route::get('/appointment_salon/{salon_id}','AppointmentController@appointment_salon')->name('appointment_salon');

//Make appointment
Route::post('/appointment','AppointmentController@appointment')->name('appointment');

//salon customer Comment with salon_ID
Route::get('/saloncomment/{salon_id}','CommentController@saloncomment')->name('saloncomment');

//Make comment
Route::post('/comment','CommentController@comment')->name('comment');

//view see profile(salon page)
Route::get('/seeProfile/{salon_id}','CustomerSiteController@seeProfile');

//get serviceID,SalonID for seeProfile page
Route::get('/seeProfileWithID/{salon_id}/{service_id}','CustomerSiteController@seeProfileWithID');

//get serviceID,SalonID with sub serv for seeProfile page
Route::get('/seeProfileWithSubSer/{salon_id}/{sub_service_id}','CustomerSiteController@seeProfileWithSubSer');


//CONTACTUS AREA CUSTOMER 

//view contact us page
Route::get('/contactus','ContactusController@contactus')->name('contactus');

//Contactus Details
Route::post('contact','ContactusController@contact')->name('contact');



//ADVERTISEMENT CUSTOMER VIEW

//View customer Advertisement page with details(image)
Route::get('/advertisement', 'AdvertisementController@index');

//customer one Advertisement with AD_ID
Route::get('/viewalladvertisement/{ad_id}','AdvertisementController@advertisement_view')->name('viewalladvertisement');

//View customer advertisement form
Route::get('/advertisementForm', 'AdvertisementController@advertisementForm');

//Make customer Advertisement
Route::post('advertisementForm', 'AdvertisementController@add_details');



//ADMIN AREA

//View Admin dashborad count details(all details with admin dashboard)
Route::get('/adminDashboard','AdminController@count_salon')->name('AdminController');

//View Admin/Customer details
Route::get('/adminCustomer','AdminController@all_customer')->name('adminCustomer');

//Delete Admin/Customer
Route::get('/deletecustomer/{reg_id}/{email}','AdminController@delete_customer')->name('deletecustomer');

//View Contatform Admin/customer with mail
Route::get('/customer_contact/{email}','AdminController@customer_contact')->name('customer_contact');

//Contact form Admin/customer all typing details
Route::post('A_CustomerContactform','AdminController@A_CustomerContactform')->name('A_CustomerContactform');

//View Admin/Salon owner details
Route::get('/adminSalonOwner','AdminController@all_salon')->name('adminSalonOwner');

//Delete admin/SalonOwner
Route::get('/deletesalonowner/{reg_id}/{email}/{salon_id}','AdminController@deletesalonowner')->name('deletesalonowner');

//view Admin/Solonowner contactform with mail
Route::get('/salon_contact/{email}','AdminController@salon_contact')->name('salon_contact');

//contact form admin/Salonowner all typing details
Route::post('A_SalonContactform','AdminController@A_SalonContactform')->name('A_SalonContactform');

//View Admin/appointment page
Route::get('/adminAppointment','AdminController@adminAppointment')->name('adminAppointment');

//View Admin/advertisement page
Route::get('/adminAdvertisement','AdminController@adminAdvertisement')->name('adminAdvertisement');

//Accept Admin/advertisement with ad_ID
Route::get('/advertisement_approve/{email}/{ad_id}','SalonController@advertisement_approve')->name('advertisement_approve');

//Delete Admin/advertisement
Route::get('/deleteadvertisement/{ad_id}/{email}','SalonController@deleteadvertisement')->name('deleteadvertisement');


//View Contact form Admin/Advertisement with mail
Route::get('/advertisement_contact/{email}','AdminController@advertisement_contact')->name('advertisement_contact');

//Contact form admin/advertisement all typing details
Route::post('A_AdvertisementContactform','AdminController@A_AdvertisementContactform')->name('A_AdvertisementContactform');

//View Admin/Contact US page
Route::get('/adminContactus','AdminController@adminContactus')->name('adminContactus');





//SALON OWNER AREA

//View myprofile details
Route::get('/myprofile','SalonController@myprofile')->name('myprofile');

//view edit myprofile page
Route::get('/viewMyprofile/{reg_id}','SalonController@viewMyprofile')->name('viewMyprofile');

//update myprofile details
Route::post('/editmyprofile/{reg_id}','SalonController@editMyprofile')->name('editmyprofile');

//view appointment/salon owner
Route::get('/SOwnerAppointment','SalonController@view')->name('SOwnerAppointment');

//Accept Salonowner/appointment with salon_ID
Route::get('/appointment_approve/{email}/{app_id}','SalonController@appointment_approve')->name('appointment_approve');

//Delete salonowner/appointment
Route::get('/deleteappointment/{app_id}/{email}','SalonController@delete_appointment')->name('deleteappointment');

//Salonowner/appointment Contatform with mail
Route::get('/S_customer_contact/{email}','AdminController@S_customer_contact')->name('S_customer_contact');

//Contact form salonowner/appointment all typing details
Route::post('S_CustomerContactform','AdminController@S_CustomerContactform')->name('S_CustomerContactform');

//contact form salonowner/admin view mail page
Route::get('/S_adminContactForm','AdminController@S_adminContactForm')->name('S_adminContactForm');

//customerform salonowner/admin all typing details
Route::post('S_adminContact','AdminController@S_adminContact')->name('S_adminContact');

//S-comments with mail
Route::get('/S_comments','SalonController@S_comments')->name('S_comments');

//view Salon owner see profile(salon Admin page)
Route::get('/SownerSeeProfile','SalonController@SownerSeeProfile');

//Edit seeprofile - who we are details
Route::get('/editVision/{id}','SalonController@editVision')->name('editVision');

//update seeprofile - who we are details
Route::post('/updateVision/{id}','SalonController@updateVision')->name('updateVision');

//view Salon owner Product(salon Admin page)
Route::get('/SownerProduct','SalonController@SownerProduct');

//get productID,SalonID for seeProfile page
Route::get('/seeProfile_Product_WithID/{salon_id}/{product_type_id}','CustomerSiteController@seeProfile_Product_WithID');


//open time reg
Route::get('/Editopen_time/{id}','SalonController@Editopen_time')->name('Editopen_time');

//update seeprofile - open time
Route::post('/updateOpen_time','SalonController@updateOpen_time')->name('updateOpen_time');

//Sowner - cover photo page edit part
Route::get('/editCoverPhoto/{id}','SalonController@editCoverPhoto')->name('editCoverPhoto');

//update seeprofile - Cover photo
Route::post('/updateCover_photo/{id}','SalonController@updateCover_photo')->name('updateCover_photo');

//view salon owner gallery page
Route::get('/SalonOwnerGallery', 'SalonController@SalonOwnerGallery')->name('SalonOwnerGallery');

//delete salon gallery  photo
Route::get('/deleteGallery/{id}','SalonController@deleteGallery')->name('deleteGallery');

//REG - salon owner gallery page
Route::post('/SalonOwnerGalleryReg', 'SalonController@SalonOwnerGalleryReg')->name('SalonOwnerGalleryReg');










//Check admin or salon owner
Route::get('/home', 'HomeController@index')->name('home');

//Only for testing part
Route::get('/test','testController@test')->name('test');

