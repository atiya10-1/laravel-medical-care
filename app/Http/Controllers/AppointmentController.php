<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PatientsAppoint;

use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{


  public function Book_Appointment(Request $request){

    // Create a new appointment instance
    $p_appointments = new PatientsAppoint();
    $p_appointments->name = Auth::user()->name; // Keep this to get the name of the authenticated user
    $p_appointments->email = Auth::user()->email; // Same for email
    $p_appointments->d_name = $request->input('d_name'); // Get doctor's name from the request
    $p_appointments->Date = $request->input('Date'); // Get the date from the request
    $p_appointments->Time = $request->input('Time'); // Get the time from the request
    $p_appointments->Messeage = $request->input('Messeage'); // Get the message from the request

    // Save the appointment to the database
    $p_appointments->save();

    // Optionally, add a success message to the session
    return redirect()->back()->with('success', 'Appointment booked successfully!');
}
 }
