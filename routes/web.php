<?php

use App\Models;
use App\Models\User; // Adjust the namespace according to your structure
use App\Models\Upload_Speciality; // Adjust the namespace according to your structure

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; // Don't forget to import Auth
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

use App\Http\Controllers\AppointmentController;

use App\Http\Controllers\AppointmentControllerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// FOR ADMINSECTION
route::get("/doctor" ,[ AdminController::class ,'doctor']);
route::get("/add_doctor" ,[ AdminController::class ,'add_doctor']);
route::get("/users" ,[ AdminController::class ,'users']);
route::get("/appointments" ,[ AdminController::class ,'appointments']);
route::get("/All_Speciality" ,[ AdminController::class ,'All_Speciality']);
route::get("/Add_Speciality" ,[ AdminController::class ,'Add_Speciality']);
route::post("/upload_doctor" ,[ AdminController::class ,'upload_doctor']);
route::post("/Upload_Speciality" ,[ AdminController::class ,'Upload_Speciality']);



// for edit dlt function on admin dashboard
route::get("/edit_user/{id}" ,[ AdminController::class ,'edit_user']);
route::get("/delete_user/{id}" ,[ AdminController::class ,'delete_user']);



// bookingappointment

route::post("/Book_Appointment" ,[ AppointmentController::class ,'Book_Appointment']);


// forupdateuser
route::post("/update_user/{id}" ,[ AdminController::class ,'update_user']);


// usertheme menus

route::get("/slider" ,[ AdminController::class ,'slider']);
route::get("/about" ,[ AdminController::class ,'about']);
route::get("/contact" ,[ AdminController::class ,'contact']);
route::get("/department" ,[ AdminController::class ,'department']);
route::get("/specialist" ,[ AdminController::class ,'specialist']);
route::get("/appointment" ,[ AdminController::class ,'appointment']);



route::get("/pending_appointments" ,[ AdminController::class ,'pending_appointments']);
route::get("/cancelled_appointments" ,[ AdminController::class ,'cancelled_appointments']);
route::get("/approved_appointments" ,[ AdminController::class ,'approved_appointments']);
route::get("/can_req/{id}" ,[ AdminController::class ,'can_req']);
route::get("/app_req/{id}" ,[ AdminController::class ,'app_req']);



// FOR DOCTORSECTION also admin appointments
route::get("/Patients_req" ,action: [ DoctorController::class ,'Patients_req']);
route::get("/Patients_cancel" ,action: [ DoctorController::class ,'Patients_cancel']);
route::get("/Patients_aprov" ,action: [ DoctorController::class ,'Patients_aprov']);
route::get("/aprov/{id}" ,action: [ DoctorController::class ,'aprov']);
route::get("/cancel/{id}" ,action: [ DoctorController::class ,'cancel']);



Route::get('/', function () {
    $doctors = User::where('usertype', '1')->get();  
                $specialitizer =Upload_Speciality::all();    
        // echo $specialitizer;
            // return view("u      
                         return view('user.index', compact('doctors' , 'specialitizer'));

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::id()) {
            if (Auth::user()->usertype == "0") {
           
                $doctors = User::where('usertype', '1')->get();  
                $specialitizer =Upload_Speciality::all();    
        // echo $specialitizer;
            // return view("u      
                         return view('user.index', compact('doctors' , 'specialitizer'));
           
            } elseif (Auth::user()->usertype == "1") {
                return view('author.index');
            } elseif (Auth::user()->usertype == "2") { // Assuming a third usertype (admin)
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back(); // Ensure this block is correctly placed
        }
    })->name('dashboard');
});



