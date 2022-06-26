<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class DoctorlistController extends Controller
{
    function showdoctorlist(){
        return view("doctorlist.doctorlist");
    }



    function retrievedoctors(){
        $doctors=Doctor::all()->toArray();
         //var_dump( $doctors);
         return view("doctorlist.doctorlist",compact("doctors"));
    }
    function searchdoctor(Request $request){
        $search=$request->get("search");
        //var_dump( $search);
        $doctors=Doctor::where('name','like','%'.$search.'%')->get();
        return view("doctorlist.doctorlist",compact("doctors"));
    }

    function createbooking(Request $request){

        $doctorname=$request->get("doctorname");
        //$user=Auth::users()->name();
       // var_dump( $user);
       // var_dump( $doctorname);

        if(Auth::check()){
Appointment::create([
            'user_name' =>  Auth::user()->name,
            'doctor_name' => $doctorname,
        ]);
        alert()->success('Sweet Alert with success.','Booking Successfuly')->autoclose(3500);
        }else{
            alert()->error('Sweet Alert with error.','Booking Failed You Should Login Frist')->autoclose(3500);
        }
      return $this->retrievedoctors();

    }
}
