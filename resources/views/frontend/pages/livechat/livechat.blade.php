@extends('frontend.master.master')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="container app">
            <div class="row app-one">
                <div class="col-sm-4 side">
                    <div class="side-one">
                        <div class="row heading">
                            <div class="col-md-3 col-xs-3 heading-avatar">
                                <div class="heading-avatar-icon">
                                    <img src="{{asset('assets/backend/uploads/images/user/'.Auth::guard('web')->user()->image)}}">
                                </div>

                                <br>
                            </div>
                            <div class="col-md-9  ">
                                <h3 class="card-header" href="">  :- {{Auth::guard('web')->user()->name}}</h3>
                            </div>
                         
                        </div>

                      

                        <div class="row sideBar">
                            @foreach($doctorData as $doctor)
                            <div class="col-12 ">

                                <a href="javascript:void(0)" id="receiver_username" class="receiver_username" data-id="{{$doctor->username}}">
                                    <div class="col-12 sideBar-body">

                                        <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                            <div class="avatar-icon">
               
                                                <img src="{{asset('backend/uploads/images/doctor/'.$doctor->image)}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-9 sideBar-main">
                                            <div class="row">
                                                <div class="sideBar-name">
                                            <span class="name-meta">
                                                {{$doctor->name}}
                                             </span>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="side-two">




                        <div class="row compose-sideBar">
                            <div class="row sideBar-body">
                                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                    <div class="avatar-icon">
                                        <img src="{{asset('backend/uploads/images/doctor/'.$doctor->image)}}">
                                    </div>
                                    
                                </div>
                                <div class="col-sm-9 col-xs-9 sideBar-main">
                                    <div class="row">
                                        <div class=" col-xs-8 sideBar-name">
                  <span class="name-meta">Mohamed ALi 
                </span>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-sm-8 conversation" >
                    <div class="row heading">
                        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
                            <div class="heading-avatar-icon">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-7 heading-name">
                            <div id="doctor-name"></div>
                        </div>
                        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
                            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row reply">
        
                        <div class="col-sm-9 col-xs-9 reply-main">

                            <form action="{{route('send-message')}}" id="send_message_cline_all" method="post">
                                {{csrf_field()}}
                                <input type="hidden" id="receiver_username">
                                <textarea name="message" class="form-control col-10" id="message_box"></textarea>
                                <button class="btn btn-success btn-sm"><i class="fa fa-send"></i> Send Messages</button>

                                <div class="form-group form-group-sm float-right">
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection