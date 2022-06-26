@extends ('frontend.master.master')
@section('content')

    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="signin">
                    <div class="aa-myaccount-area bgsign">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-myaccount-login">
                                    <div class="titlepage text_align_center">
                                        <h2 style="color:#0B4A93 ; padding-top:10px" > Welcome back! </h2>
                                     </div>
                                     <h3 style="color: #0B4A93 ; text-align:center ;">Enter your email and password to sign in</h3>
                                     <br>
                                   
                                    @include('frontend.layouts.messages')
                                    <form action="{{route('login')}}" method="post" class="aa-login-form offset-lg-1">
                                        @csrf
                                        <div class="form-group form-group-sm">
                                            <label class="input_container" for="user_email">      <p style="color: #0B4A93 ;">Email:</p></label>
                                            <input type="text" name="user_email" id="user_email" placeholder="E-mail">
                                            <a href="" style="color: red;">{{$errors->first('user_email')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label  class="input_container" for="password"><p style="color: #0B4A93 ;">Password:</p></label>
                                            <input type="password" id="password" name="user_password" placeholder="Password">
                                            <a href="" style="color: red;">{{$errors->first('user_password')}}</a>
                                        </div>
                                                                
                                        {{-- <div class="remember" style="padding-top:8px">
                                            <input type="checkbox" name="" value="" style="margin-right:10px">Remember Me
                                        </div> --}}
                                       
                                        <div class="form-group w-100">
                                            <button class="btn btn-primary btn-block mb-4" type="submit" name="login_form" class="aa-browse-btn ">Login</button>
                                        </div>
                                        <div class="col-md-12" style="color:#2370C8 ; padding-top:10px ; text-align:center">
                                            <p >Don't have an Account?
                                              <a href="#signup" style="color:#0B4A93 ; font-weight: bold">Sign Up</a>
                                            </p>
                                          </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img text_align_center">
                                   <figure><img src="{{asset('assets/images/signin.png')}}" alt="#"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="aa-myaccount-area bgsign">

                    <div class="row" id="signup">
                        <div class="col-md-6">
                            <div class="about_img text_align_center">
                                <figure><img src="{{asset('assets/images/p-signup.png')}}" alt="#"/></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <div class="titlepage text_align_center">
                                    <h2 style="color:#0B4A93 ; padding-top:10px" > Welcome ! </h2>
                                    <br>           <br>
                                    <h3 style="color: #0B4A93 ; text-align:center ;"> Create an Account</h3>

                                    </div>
                                    <form action="{{route('register')}}" method="post" class="aa-login-form">
                                    @csrf
                                    <div class="form-group col-md-11">
                                        <label for="name"> <p style="color: #0B4A93 ;">Name:</p></label>
                                        <input type="text" name="name" id="name" placeholder="name">
                                        <a href="" style="color: red;">{{$errors->first('name')}}</a>
                                    </div>
                                    <div class="form-group col-md-11">
                                        <label for="email"> <p style="color: #0B4A93 ;">Email:</p></label>
                                        <input type="text" name="email" id="email" placeholder="Username or email">
                                        <a href="" style="color: red;">{{$errors->first('email')}}</a>
                                    </div>
                                    <div class="form-group col-md-11">
                                        <label for="password"> <p style="color: #0B4A93 ;">Password:</p></label>
                                        <input type="password" id="password" name="password" placeholder="Password">
                                        <a href="" style="color: red;">{{$errors->first('password')}}</a>
                                    </div>

                                    <div class="form-group col-md-11">
                                        <button  class="btn btn-primary btn-block mb-4" name="register_form" type="submit" class="aa-browse-btn">Register</button>
                                    </div>
                                    <div class="col-md-11" style="color:#2370C8 ; padding-top:10px ; text-align:center">
                                        <p >Already have an Account?
                                            <a href="#signin" style="color:#0B4A93 ; font-weight: bold">Sign In</a>
                                        </p>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
            </div>
    </section>
    

    <footer id="aa-footer">




@endsection