<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientsAppoint;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function Patients_req(){
        if (Auth::id()) {
            if(Auth::User()->usertype=="1"){     
            
        
                $p_req = PatientsAppoint::where('req_status' , 'Pending')->get();
                return view('author.Patients_req', compact('p_req'));
                
                        }else{return redirect()->back();
                        }
        }else{
            return redirect()->back();
        }
        
}


public function Patients_cancel(){
    if (Auth::id()) {
        if(Auth::User()->usertype=="1"){     
            $p_req = PatientsAppoint::all();    
            $p_req = PatientsAppoint::where('req_status' , 'Cancelled')->get();
            return view('author.Patients_cancel', compact('p_req'));
            
        }else{return redirect()->back();}
        
    }
    else{
        return redirect()->back();
    }
    }

    
    public function Patients_aprov(){
        if (Auth::id()) {
        
            if(Auth::User()->usertype=="1"){     
                $p_req = PatientsAppoint::all();
                $p_req = PatientsAppoint::where('req_status' , 'Approved')->get();
                return view('author.Patients_aprov', compact('p_req'));        
            }else{return redirect()->back();}
            
        }else{return redirect()->back();}
       }
        

public function aprov($id){
    if (Auth::id()) {

        if(Auth::User()->usertype=="1"){     
            $p_req = PatientsAppoint::find($id) ;
            $p_req -> req_status = "Approved";
            $p_req->save();
        return redirect()->back();
        }else{
            return redirect()->back();
        }
    }else{return redirect()->back();}
    }

   
public function cancel($id){
    if (Auth::id()) {
        if(Auth::User()->usertype=="1"){  
            $p_req = PatientsAppoint::find($id) ;
            $p_req -> req_status = "Cancelled";
            $p_req->save();
        return redirect()->back();
         } else{
            return redirect()->back();
     }  
    }else{
        return redirect()->back();
}
}
}