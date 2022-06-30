@extends('frontend.master.master')

@section('content')
<section class="blueback">
      <div class="container bgsign">
         <div class="row" >

            <div class="col-md-6">
               <div class="row " ">
                  <div class="col-md-12" style="  padding-top:15px">
                     <div class="titlepage text_align_center">
                        <h2 style="color:#0B4A93 ; padding-top:20px" > Welcome! </h2>

                     </div>
                     <h3 style="color: #0B4A93 ; text-align:center ; font-weight: bold ; ">Register as!</h3>
                     <br>
                  <div class="col-12 row " style="text-align: center;" >
                     <div class="col-2">
                       </div>
                     <div class="col-3">
                        <a href="P-signup.html"><img src="images\pateint.png" alt=""></a>
                        <p class="darkblue1" >patient</p>
                     </div>
                     <div class="col-3">
                        <a href="D-signup.html"><img src="images\doctor.png" alt=""></a>
                        <p class="darkblue1" >Doctor</p>
                     </div>
                     <div class="col-3">
                        <a href="H-signup.html"><img src="images\hospital.png" alt=""></a>
                        <p class="darkblue1" >Hospital</p>
                     </div>
                     </div>
<br>
                     <div class="col-md-12" style="color:#2370C8 ; padding-top:10px ; text-align:center">
                     <p >Already have an Account?                      <a href="#" style="color:#0B4A93 ; font-weight: bold">Sign In</a>
                     </p>
                        </div>
                     </div>
               
            </div>
            </div>
            <div class="col-md-6">
               <div class="about_img text_align_center">
                  <figure><img src="images/sign-up.png" alt="#"/></figure>
               </div>
         </div>
               </div>
      <!-- SignUp -->


        </div>
        <br>
      </section>
@endsection