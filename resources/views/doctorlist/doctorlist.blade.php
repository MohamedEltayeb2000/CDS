
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>CDs</title>

    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="DoctorListFrontend/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="DoctorListFrontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/magnific-popup.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/themify-icons.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/nice-select.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/flaticon.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/gijgo.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/animate.min.css">
    <link rel="stylesheet" href="DoctorListFrontend/css/slicknav.css">

    <link rel="stylesheet" href="DoctorListFrontend/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" /><link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>

<body>

<!-- header-start -->

<!-- header-end -->


    <!-- Search -->
    <div class="catagory_area ">
<div class="container " style="margin-top: 10rem">
            <div class=" single_text">
                <h2>book with
                    The best doctor in Egypt</h3>
                <h3>Book online</h4>

                <br>
            </div>
            <form  method="GET" action="/searchdoctor">
            <div class="row cat_search" >

                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" name="search" placeholder="Doctor Name" >
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option value="" >Location</option>
                            <option value="Sedi Gaber">Sedi Gaber</option>
                            <option value="Kaffr Abdo">Kaffr Abdo</option>
                            <option value="Luran">Luran</option>
                            <option value="El Hadra">El Hadra</option>

                        </select>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                            </select>
                    </div>
                </div> --}}

                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <input type="submit" class="boxed-btn3" value="Serach">
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
    <!-- endsearch -->
    <!-- job_listing_area_start  -->
 @foreach ($doctors as $row )
<form method="GET" action="/createbooking">
    <div class="job_listing_area">
        <div class="container" >

            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-10 col-md-10" style="height: 16rem;" >
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div >

                                        <img  src="{{asset('backend/uploads/images/doctor/'.$row['image'])}}" alt="#" width="100" height="100">

                                </div>
                                <div class="jobs_conetent">


                                    <h4 style="margin-left: 30px;"> <input style="color:green ; border-color:chartreuse" name="doctorname"value="{{$row['name']}}"></h4>


                                    <div class="links_locat">
                                        <div class="location">
                                            <p> <i class="fas fa-briefcase-medical"></i> Doctor <span style="color: blue;">{{$row['name']}}</span> specialized in <span style="color: blue;">Chests</span></p>
                                            <p> <i class="fa fa-map-marker"></i> address : address</p>
                                            <p> <i class="fa fa-map-marker"></i> <span style="color: blue;">30</span> LE</p>
                                            <p> <i class="fa fa-clock-o"></i> Working Hours : <span style="color: blue;">2:00pm-4:00pm</span> Hour</p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <input type="submit"class="boxed-btn3" value="Book Now">
                                </div>

                                <div class="rating">
                                    <div class="text-warning">
                                        <!-- to make image category for clinic image -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    <div class="rating" >
                                        <h5>Doctor Rate </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- job_listing_area_end  -->



</form>
<!-- footer start -->


<!--/ footer end  -->

<!-- link that opens popup -->
<!-- JS here -->
<script src="DoctorListFrontend/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="DoctorListFrontend/js/vendor/jquery-1.12.4.min.js"></script>
<script src="DoctorListFrontend/js/popper.min.js"></script>
<script src="DoctorListFrontend/js/bootstrap.min.js"></script>
<script src="DoctorListFrontend/js/owl.carousel.min.js"></script>
<script src="DoctorListFrontend/js/isotope.pkgd.min.js"></script>
<script src="DoctorListFrontend/js/ajax-form.js"></script>
<script src="DoctorListFrontend/js/waypoints.min.js"></script>
<script src="DoctorListFrontend/js/jquery.counterup.min.js"></script>
<script src="DoctorListFrontend/js/imagesloaded.pkgd.min.js"></script>
<script src="DoctorListFrontend/js/scrollIt.js"></script>
<script src="DoctorListFrontend/js/jquery.scrollUp.min.js"></script>
<script src="DoctorListFrontend/js/wow.min.js"></script>
<script src="DoctorListFrontend/js/nice-select.min.js"></script>
<script src="DoctorListFrontend/js/jquery.slicknav.min.js"></script>
<script src="DoctorListFrontend/js/jquery.magnific-popup.min.js"></script>
<script src="DoctorListFrontend/js/plugins.js"></script>
<script src="DoctorListFrontend/js/gijgo.min.js"></script>



<!--contact js-->
<script src="DoctorListFrontend/js/contact.js"></script>
<script src="DoctorListFrontend/js/jquery.ajaxchimp.min.js"></script>
<script src="DoctorListFrontend/js/jquery.form.js"></script>
<script src="DoctorListFrontend/js/jquery.validate.min.js"></script>
<script src="DoctorListFrontend/js/mail-script.js"></script>


<script src="DoctorListFrontend/js/main.js"></script>
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>

</html>
