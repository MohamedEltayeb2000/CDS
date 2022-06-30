@section('nav')
    <!-- menu -->
    <nav class="navbar sticky-top   navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
        <div class="container">
            <a class="navbar-brand logo_right" href="#"><img src="{{asset('assets/images/logo2.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav pull-left">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('index')}}"">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('about-us')}}" >About</a>
                    </li>

                    {{-- <li class="">
                        <a class="nav-link" href="#">Category <span class="caret"></span>
                        <ul class="dropdown-menu">
                            @foreach($catData as $cat)
                                <li><a href="{{route('index-category').'/'.$cat->cat_name}}">{{$cat->cat_name}}</a></li>
                            @endforeach

                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('retrievedoctors')}}">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('all-product')}}">Product</a></li>

                            <li class="nav-item"><a  class="nav-link" href="{{route('live-chat')}}">Live Chat</a></li>
                            <li class="nav-item"><a class="nav-link"  href="{{route('prescription-upload')}}">Prescription</a></li>


                  <div class="aa-header-top-right">
                    <ul class="nav navbar-nav my-nav-bar">
                        <li><a class="btn btn-primary loginbtn" href="{{route('login')}}"> <i class="fa fa-sign-in ml-2" aria-hidden="true"></i> Login | Register <i class="fa fa-user-plus ml-2" aria-hidden="true"></i> </a></li>
                        @if(Auth::guard('web')->user())

                            <li><a>My Account <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('profile')}}">Profile</a></li>
                                    <li><a href="{{route('user-setting')}}">Setting</a></li>
                                    <li><a href="{{route('user-password-change')}}">Change password</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

                </ul>

            </div>
        </div>
    </nav>
    {{-- <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('index')}}">Home</a></li>

                            <li><a href="{{route('about-us')}}">About Us</a>
                            </li>
                            <li><a href="#">Category <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach($catData as $cat)
                                        <li><a href="{{route('index-category').'/'.$cat->cat_name}}">{{$cat->cat_name}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{route('all-product')}}">Product</a></li>
                            <li><a href="{{route('news')}}">News</a></li>
                            <li><a href="{{route('live-chat')}}">Live Chat</a></li>
                            <li><a href="{{route('prescription-upload')}}">Prescription</a></li>

                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section> --}}

    <!-- / menu -->


@endsection
