@extends('frontend.master.master')
<style>
    #chat{
	padding-left:0;
	margin:0;
	list-style-type:none;
	overflow-y:scroll;
	height:175px;
	border-top:2px solid #fff;
	border-bottom:2px solid #fff;
}
#chat li{
	padding:10px 30px;
}
#chat h2,#chat h3{
	display:inline-block;
	font-size:13px;
	font-weight:normal;
}
#chat h3{
	color:#bbb;
}
#chat .entete{
	margin-bottom:5px;
}
#chat .message{
	padding:20px;
	color:#fff;
	
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:5px;
}
#chat .me{
	text-align:right;
}
#chat .you .message{
	background-color:#58b666;
}
#chat .me .message{
	background-color:#6fbced;
}
#chat .triangle{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 10px 10px 10px;
}
#chat .you .triangle{
		border-color: transparent transparent #58b666 transparent;
		margin-left:15px;
}
#chat .me .triangle{
		border-color: transparent transparent #6fbced transparent;
		margin-left:375px;
}

</style>
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
                                    <img src="{{asset('backend/uploads/images/user/'.Auth::guard('web')->user()->image)}}">
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
                                <img src="{{asset('assets/images/marwan.jpg')}}">
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-7 heading-name">
                            <div id="doctor-name">Moemn mostafa</div>
                        </div>
                        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
                            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <ul id="chat">
                        <li class="me">
                            <div class="entete">
                        
                                <h2>Mahmoud ahmed </h2>
                                <span class="status blue"></span>
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
doctor moemn i have problem with lungs                            </div>
                        </li>
                        <li class="you">
                            <div class="entete">
                                <span class="status green"></span>
                                <h2>Moemn mostafa</h2>
                  
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
how can i help you mahmoud                            </div>
                        </li>
                        <li class="me">
                            <div class="entete">
                        
                                <h2>Mahmoud ahmed </h2>
                                <span class="status blue"></span>
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
                              okay dear  will contact you tonight
                            </div>
                        </li>
                        <li class="you">
                            <div class="entete">
                                <span class="status green"></span>
                                <h2>Moemn mostafa</h2>
                       
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
okay i waiting you                            </div>
                        </li>
                        <li class="me">
                            <div class="entete">
                              
                                <h2>Mahmoud ahmed </h2>
                                <span class="status blue"></span>
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            </div>
                        </li>
                    
                    </ul>
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