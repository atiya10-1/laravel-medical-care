<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\uploadspe;

use Illuminate\Http\Request;
use App\Models\PatientsAppoint;
use App\Models\Upload_Speciality; // Adjust the namespace according to your structure

use App\Models\uploadspecialities;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    

    
// forusernavmenus
    public function slider(){
        return view("user.slider");
    }
    
    public function about(){
        return view("user.about");
    }

    public function contact(){
        return view("user.contact");
    }

    public function department(){
        $specialitizer =Upload_Speciality::all();    
        echo $specialitizer;
            // return view("user.department");
        // return view("user.department", compact('uploads'));
    }

    
        public function specialist(){
        return view("user.specialist");
    }

    public function appointment(){
        return view("user.appointment");
    }

    // end

    public function doctor(){
        if (Auth::id()) {
            if(Auth::User()->usertype=="2"){            
                $doctors = User ::where ('usertype' , "1") ->get();
                return view("admin.doctor" , compact("doctors"));
                        }else{
                            return redirect()->back();
                        }}
                
        
        else{return redirect()->back();
        }}
       
        
public function add_doctor(){
    if (Auth::id()) {
        if(Auth::User()->usertype=="2"){
            return view("admin.add_doctor");
        }else{
             return redirect()->back();
        }
    
    }else{return redirect()->back();}
    }


public function Upload_Speciality(Request $request){
    if (Auth::id()) {
      if(Auth::User()->usertype=="2"){
        
            $specialitizer =  new Upload_Speciality();
            $image = $request->image;
            $imagename =time().'.'.$image ->getClientOriginalExtension();
            $request->image->move('s_image', $imagename);
            $specialitizer->image = $imagename;
            
            $specialitizer->name =$request-> speciality;
            $specialitizer->descrription =$request-> description;
            $specialitizer->save();
            return redirect()->back();
                }else{return redirect()->back();
                }            
    }else{
        return redirect()->back();
    }}

public function Add_Speciality(){
    if (Auth::id()) {
    
        if(Auth::User()->usertype=="2"){
            return view("admin.Add_Speciality");
            }else{
                return redirect()->back();
            }
    }else{return redirect()->back();}

}

public function All_Speciality(){
    if (Auth::id()) {
        if(Auth::User()->usertype=="2"){
            $specialitizer =Upload_Speciality::all();    
            return view("admin.All_Speciality" , compact('specialitizer'));
        }else{
            return redirect()->back();
        }}else{return redirect()->back();
        }
    
    }

// foradminsidebarappointments

public function cancelled_appointments(){
    if (Auth::id()) {
        if(Auth::User()->usertype=="2"){
            $p_req = PatientsAppoint::where('req_status' ,'Cancelled')->get() ;
            return view("admin.cancelled_appointments" , compact('p_req'));
        }else{
            return redirect()->back();
        }
        
    }else{
        return redirect()->back();
    }
    
}


public function approved_appointments(){
    if (Auth::id()) {
        if(Auth::User()->usertype=="2"){
            $p_req = PatientsAppoint::where('req_status' ,'Approved')->get() ;
            return view("admin.approved_appointments" , compact('p_req'));
        
        }else{
            return redirect()->back();
        }
        
    }else{return redirect()->back();}
    
}


public function pending_appointments(){
    if (Auth::id()) { 

        if(Auth::User()->usertype=="2"){
            $p_req = PatientsAppoint::where('req_status' ,'pending')->get() ;
            return view("admin.pending_appointments" , compact('p_req'));
        
        }else{
            return redirect()->back();
        }
    }  else{return redirect()->back();
    }
}

   
    
public function can_req($id){
    if (Auth::id()) { 
        if(Auth::User()->usertype=="2"){
            $p_req = PatientsAppoint::find($id) ;
            $p_req -> req_status = "Cancelled";
            $p_req->save();
        return redirect()->back();
         
        }else{
            return redirect()->back();
        }
    }else{
        return redirect()->back();
    }
    
    }
    
public function app_req($id){
    if (Auth::id()) { 
        if(Auth::User()->usertype=="2"){
        
            $p_req = PatientsAppoint::find($id) ;
            $p_req-> req_status = "Approved";
            $p_req->save();
        return redirect()->back();
                }else{
                    return redirect()->back();
                   }
               
            
    }else{
        return redirect()->back();
    }
    }


public function upload_doctor(Request $request){
    if (Auth::id()) {
        if(Auth::User()->usertype=="2"){
 
            $doctor = new User();
            $image = $request->image;
             $imagename =time().'.'.$image ->getClientOriginalExtension();
             $request->image->move('dcimage', $imagename);
             $doctor->image = $imagename;
        
             
        $doctor->name = $request->dc_Name;
        $doctor->email = $request->dc_email;
        $doctor->speciality = $request->speciality;
        $doctor->phone = $request->dc_Number;
        $doctor->adress = $request->dc_adress;
        $doctor->password = bcrypt('wellcome123');
        $doctor->usertype = "1";
        $doctor->save();
        return redirect()->back();
        
        }else{
            return redirect()->back();
        }
    }else{return redirect()->back();
    }
    }


// ye wo user h jo dtabase m jhn hm isko uploadkrenge means us table me or upr wla user wo h jo model ka nme h  



    public function users(){
        if (Auth::id()) {
            if(Auth::User()->usertype=="2"){
                $users = user::paginate(perPage: 4);;
                return view("admin.users", compact('users'));  
            }else{return redirect()->back();} 
        }else{
            return redirect()->back();
        }
 }
    
 
        public function appointments(){
            return view("admin.appointments");
           }

           
    public function edit_user($id){
        if (Auth::id()) {
            if(Auth::User()->usertype=="2"){
                $user = user::find($id);
                return view('admin.edit_user' , compact('user'));
            }else{
                return redirect()->back();
            }
         
        }else{return redirect()->back();}
        }


public function delete_user($id){
    if (Auth::id()) {
    
        if(Auth::User()->usertype=="2"){
            $user = user::find($id)->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        
    }else{return redirect()->back();}
    }


public function update_user (Request $request,$id){
    if (Auth::id()) {

        if(Auth::User()->usertype=="2"){
            $user =User::find($id);
            $image = $request->image;
             $imagename =time().'.'.$image ->getClientOriginalExtension();
             $request->image->move('dcimage', $imagename);
             $user->image = $imagename;
        
             
        $user->name = $request->user_Name;
        $user->email = $request->user_email;
        $user->speciality = $request->speciality;
        $user->phone = $request->user_Number;
        $user->adress = $request->user_adress;
        
        $user->save();
        return redirect('/users');
        }else{return redirect()->back();
        }
    }else{return redirect()->back();}
   
}
}