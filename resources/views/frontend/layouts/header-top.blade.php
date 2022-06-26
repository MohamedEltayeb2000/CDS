@section('header-top')

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>




    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="aa-header-top-area">
                            <div class="col-md-2">
                                <div class="aa-header-top-left">
                                    <!-- start cellphone -->
                                    <div class="cellphone hidden-xs">
                                        <p><span class="fa fa-phone"></span>+201026036513</p>
                                    </div>
                                    <!-- / cellphone -->
                                </div>
                            </div>
                            <!-- start header top left -->
                            <div class="col-md-5">
                                <div id="breaking-news-container">
                                    <div id="breaking-news-colour" class="slideup animated">
                                    </div>
                                    <span class="breaking-news-title delay-animated slidein">
                                      <span class="blink">Notice</span>
                                    </span>

                                    <div class="breaking-news-headline delay-animated2 fadein marquee">
                                        @foreach($noticeData as $notice)
                                            <a href="{{route('notice').'/'.$notice->slug}}">{{$notice->title}}</a>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                            <!-- / header top left -->
                            {{-- <div class="aa-header-top-right">
                                <ul class="nav navbar-nav my-nav-bar">
                                    <li><a href="{{route('login')}}">Login | Register</a></li>
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
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>




    </header>

@endsection