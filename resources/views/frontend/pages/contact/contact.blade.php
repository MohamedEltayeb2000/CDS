@extends('frontend.master.master')

@section('content')

    <section id="aa-catg-head-banner">

        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </section>
 
    <section id="aa-contact">
        
        <div class="container">
         
            <div class="row">
                <div class="col-md-12">
                  
                    <div class="aa-contact-area">
                          <center class="card-header">
                        <h2>Contact Us</h2>
                    </center>
                        <div class="aa-contact-address">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Contact Details</h4>
                                    <div class="aa-contact-address-right">
                                        <ul class="list-group">
                                            <li class="list-group-item" style="padding: 25px;margin-bottom:10px;"><i class="fa fa-home"></i> Mohamed ALi </li>
                                            <li class="list-group-item" style="padding: 25px;margin-bottom:10px;"><i class="fa fa-phone"></i> 01026036513</li>
                                            <li class="list-group-item" style="padding: 25px;margin-bottom:10px;"><i class="fa fa-envelope"></i>alimomo226@gmail.com</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4>Write to Us</h4>
                                    <div class="aa-contact-address-left">
                                        <form class="comments-form contact-form" id="contact_form_action"
                                              method="post"
                                              action="{{route('contact-post')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name"
                                                               placeholder="Your Name"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" id="email" name="email"
                                                               placeholder="Email"
                                                               class="form-control">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="phone" id="topic" name="topic"
                                                               placeholder="Phone"
                                                               class="form-control">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <select class="custom-select" required>
                                                              <option value="">Open this select menu</option>
                                                              <option value="1">One</option>
                                                              <option value="2">Two</option>
                                                              <option value="3">Three</option>
                                                            </select>
                                                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                          </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                <textarea class="form-control" style="width: 100%;resize: none;height: 121px;" id="message"
                                                          name="message"
                                                          placeholder="Message"></textarea>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button id="send_contact_message" class="aa-secondary-btn">Send
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                 <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=faculty%20of%20science%20alexandria%20university&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 100%; height: 400px;"></iframe><a href="https://fnftest.net" style="display:none">fnf test</a><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}</style><a href="https://googlemapsiframegenerator.com" style="display:none">Google Maps Iframe Generator - Free Html Embed Code</a><style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
                                </div>
                            </div>
                        </div>

                        <div class="aa-contact-map">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>






@endsection