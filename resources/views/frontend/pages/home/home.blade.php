@extends('frontend.master.master')

@section('content')

    {{--  muksam  --}}

    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        @foreach($bannerData as $banner)
                            <li>
                                
                                <div class="seq-model">
                                    <img data-seq src="{{asset('assets/backend/uploads/images/banner/'.$banner->image)}}"
                                         alt="Men slide img"/>
                                </div>
                                <div class="seq-title photog">
                                    <h4 data-seq>
                                        {{$banner->title}}
                                    </h4>
                                    <a class="read_more mt-30" href="{{route('banner-details').'/'.$banner->slug}}"  >Read More</a>

    
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <div class="coronata mt-30">
        <div class="container">
          <h2 class="titlepage darkblue1" style="text-align:center ; font-size:40px">Covid-19 Symptoms</h2>
           <div class="row d_flex grid" style="flex-wrap:inherit">
              <div class="col-md-4" >
                 <div class="con">
                   <img src="{{asset('assets/images/Rectangle 63.png')}}" alt="cough">

               </div>
                </div>
              <div class="container">
                <div class="row "  >
              <div class="col-md-4" >
                <div class="con">
                    <img src="{{asset('assets/images/dry-cough.png')}}" alt="cough">

                  <h2>Cough</h2>
              </div>
               </div>
              <div class="col-md-4">
                <div class="con">
                    <img src="{{asset('assets/images/sore-throat.png')}}" alt="cough">

                  <h2>Sore Throat</h2>
              </div>
            </div>
              <div class="col-md-4">
                <div class="con">
                    <img src="{{asset('assets/images/cold.png')}}" alt="cough">
                  <h2>Cold</h2>
              </div>
              </div>
              <div class="col-md-4 mt-3">
                <div class="con">
                    <img src="{{asset('assets/images/fever.png')}}" alt="cough">

                  <h2>fever</h2>
              </div>
            </div>
              <div class="col-md-4 mt-3">
                <div class="con">
                    <img src="{{asset('assets/images/headache.png')}}" alt="cough">

                  <h2>Headache</h2>
              </div>
            </div>
              <div class="col-md-4 mt-3 ">
                <div class="con">
                    <img src="{{asset('assets/images/vomiting.png')}}" alt="cough">

                  <h2>Vomiting</h2>
              </div>
            </div>
              </div>
               </div>

         </div>
     </div>
   </div>
   <section>
    <div class="protect">
        <div class="container">
           <div class="row" >
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2 class="darkblue1">How to Prevent <span class="babyblue">Virus</span> </h2>
                 </div>
              </div>
           </div>
        </div>
        <div class="container" >
            <div class="row" >
                 <!--  Demos -->
                    <div class="item col-md-4">
                       <div class="protect_box  text_align_center">
                         <div class="feature-box-rounded main-service-box ">
                            <i>
                                <img src="{{asset('assets/images/place.png')}}" alt="cough">
                            </i>
                          <h3 class="babyblue"> wash your place</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                    <div class="item col-md-4">
                         <div class="protect_box text_align_center">
                         <div class="feature-box-rounded main-service-box">
                            <i>
                                <img src="{{asset('assets/images/distance.png')}}" alt="cough">
                            </i>                          <h3 class="babyblue"> Maintain distance</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                    <div class="item col-md-4 ">
                        <div class="protect_box text_align_center">
                         <div class="feature-box-rounded main-service-box">
                            <i>
                                <img src="{{asset('assets/images/touch-face.png')}}" alt="cough">
                            </i>                            <h3 class="babyblue"> Don't touch face</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                    <div class="item col-md-4 mt-3">
                        <div class="protect_box text_align_center">
                         <div class="feature-box-rounded main-service-box">
                            <i>
                                <img src="{{asset('assets/images/hand.png')}}" alt="cough">
                            </i>                                                      <h3 class="babyblue"> wash your hand</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                    <div class="item col-md-4 mt-3">
                        <div class="protect_box text_align_center">
                         <div class="feature-box-rounded main-service-box">
                            <i>
                                <img src="{{asset('assets/images/napkin.png')}}" alt="cough">
                            </i>                           <h3 class="babyblue"> Use napkin</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                    <div class="item col-md-4 mt-3">
                        <div class="protect_box text_align_center">
                         <div class="feature-box-rounded main-service-box">
                            <i>
                                <img src="{{asset('assets/images/mask.png')}}" alt="cough">
                            </i> 
                          <h3 class="babyblue"> Wear mask</h3>
                          <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                         </div>
                       </div>
                    </div>
                 </div>

     </div>
        </div>
   </section>
   <div class="cases">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage text_align_center ">
                <h2 class="darkblue1">Our Services</h2>
                <p class="col-md-12">We provide to you the best choiches for you. Adjust it to your health needs
                  and make sure your undergo treatment with our highly qualified doctors you can
                  consult with us which type of service is suitable for your health</p>
             </div>
          </div>
       </div>
       <div class="row d_flex mt-3">
          <div class=" col-md-4" >
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/Questionnaire.png')}}"  class="img-icon" alt="#"/>
                </figure>
                <div class="nostrud">
                    <h3> <a href="">Questionnaire</a> </h3>

                   <p class="mt-2">Answer some questions and get your percentage of having COVID-19</p>
                </div>
             </div>
          </div>
          <div class=" col-md-4">
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/ct-scan.png')}}"  class="img-icon" alt="#"/>
                </figure>                <div class="nostrud">
                   <h3> <a href=" {{route('ct')}}">Ct-scan </a> </h3>
                    <p class="mt-2">Upload your CT-scan and get the result of having COVID-19 or no</p>
                </div>
             </div>
          </div>
          <div class=" col-md-4">
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/consultation.png')}}"  class="img-icon" alt="#"/>
                </figure>                                <div class="nostrud">
                   <h3>Consultation</h3>
                   <p class="mt-2">Free consultation with our trusted doctors and get the best recomendations</p>
                </div>
             </div>
          </div>
          <div class=" col-md-4">
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/search-doctor.png')}}"  class="img-icon" alt="#"/>
                </figure>                       <div class="nostrud">
                   <h3>Search Doctor</h3>
                   <p class="mt-2">Choose your doctor from thousands of specialist, general, and trusted hospitals</p>
                </div>
             </div>
          </div>
          <div class=" col-md-4">
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/search-hospital.png')}}"  class="img-icon" alt="#"/>
                </figure>                <div class="nostrud">
                   <h3>Search Hospital</h3>
                   <p class="mt-2">You can get 24/7 urgent care for yourself or your children and your lovely family</p>
                </div>
             </div>
          </div>
          <div class=" col-md-4">
             <div class="latest text_align_center main-service-box">
                <figure>
                    <img src="{{asset('assets/images/online-pharmacy.png')}}"  class="img-icon" alt="#"/>
                </figure>  
                <div class="nostrud">
                   <h3>Online Pharmacy</h3>
                   <p class="mt-2">Buy your medicines with our mobile application with a simple delivery system</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="doctors">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage text_align_center ">
                <h2 class="darkblue1">Our Doctors</h2>
                <h3>Meet Our Experts Doctors</h3>
             </div>
          </div>
       </div>
     
       <div class="row d_flex">
        @foreach ($doctors as $row )
          <div class=" col-md-4">
                <div id="ho_efcet" class="reader text_align_center">
                   <i>
                       <img src="{{asset('backend/uploads/images/doctor/'.$row->image)}}" alt="#"/></i>
                   <h3>{{$row['name']}} <br>
                     Pulmonologist</h3>
                </div>
             </div>
             @endforeach
          </div>
          
    </div>
 </div>
    <!-- Products section -->
    {{-- <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3></h3>
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            @foreach($productData as $product)

                                                <li>

                                                        <figure>
                                                            <a class="aa-product-img"
                                                               href="{{route('product-details').'/'.$product->id}}"><img
                                                                        src="{{asset('assets/backend/uploads/images/product/'.$product->image)}}"
                                                                        width="300" height="200"
                                                                        alt="polo shirt img"></a>
                                                            <a class="aa-add-card-btn"
                                                               href="{{route('product-details').'/'.$product->id}}"><span
                                                                        class="fa fa-shopping-cart"></span>Add To
                                                                Cart</a>
                                                            <figcaption>
                                                                <h4 class="aa-product-title"><a
                                                                            href="#">{{$product->name}}</a></h4>
                                                                <span class="aa-product-price">Rs: {{$product->price}}</span>
                                                            </figcaption>
                                                        </figure>


                                                </li>

                                            @endforeach


                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- / Products section -->
    <!-- banner section -->

    <!-- / Testimonial -->

    <!-- Latest Blog -->
     {{-- <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">

                            @foreach($limitNewsData as $news)

                                <div class="col-md-4 col-sm-4">
                                    <article class="aa-latest-blog-single">
                                        <figure class="aa-blog-img">
                                            <a href="{{route('news-details').'/'.$news->slug}}"><img src="{{asset('backend/uploads/images/news/'.$news->image)}}"alt="img" height="300"></a>
                                            <figcaption class="mu-blog-caption">
                                                <h3><a href="{{route('news-details').'/'.$news->slug}}">
                                                        {{substr($news->title,0,25)}}
                                                        .</a></h3>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-blog-meta">
                                            <a href="{{route('news-details').'/'.$news->slug}}"> {{$news->created_at->format('l/F/Y')}}</a>
                                        </div>
                                        <div class="mu-blog-description">
                                            <p>
                                                {!! substr($news->description,0,100) !!}
                                            </p>
                                            <a class="aa-read-mor-btn"
                                               href="{{route('news-details').'/'.$news->slug}}">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="cases" id="mu-course-content">
        <div class="titlepage  text_align_center ">
            <h2 class="darkblue1">Our Pharmacy</h2>
            <div class="container">
                <div class="row">

                    <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach($productData as $product)

                            <li>

                                    <figure>
                                        <a class="aa-product-img"
                                        href="{{route('product-details').'/'.$product->id}}"><img
                                                    src="{{asset('backend/uploads/images/product/'.$product->image)}}"
                                                    width="250" height="200"
                                                    alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"
                                        href="{{route('product-details').'/'.$product->id}}"><span
                                                    class="fa fa-shopping-cart"></span>Add To
                                            Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                        href="#">{{$product->name}}</a></h4>
                                                        
                                            <span class="aa-product-price">Rs: {{$product->price}}</span>
                                        </figcaption>
                                    </figure>


                            </li>

                        @endforeach


                    </ul>
                </div>
                <div class="row">
                    <div class="about">
                        <div class="container">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="about_img text_align_center">
                                <figure>
                                    <img src="{{asset('assets/images/about.png')}}" alt="" >
                                </figure>
                                </div>
                            </div>
                                <div class="col-md-7">
                                <div class="titlepage text_align_left">
                                    <h3 style="font-size:30px ;color: #06489E">About Us</h3>
                                    <h2 style="font-size:35px ; color:#262A4E">System Detect Patient
                                    CT Scan & Show Result.</h2>
                                    <p>  Medicine Marble statue of Asclephius on a pedestal, symbol of medicine in Western medicine
                                        Statue of Asclepius, the Greek god of medicine, holding the symbolic Rod of Asclepius with its
                                        coiled serpent
                                        Specialist Medical specialty
                                        Glossary Glossary of medicine
                                        Medicine is the science and practice of establishing the diagnosis, prognosis, treatment, and
                                        prevention of disease.
                                        Medicine encompasses a variety of health care practices evolved to maintain and restore health
                                        by the prevention and
                                        treatment of illness. Contemporary medicine applies biomedical sciences, biomedical research,
                                        genetics, and medical technology
                                        to diagnose, treat, and prevent injury and disease, typically through pharmaceuticals or
                                        surgery, but also through therapies as diverse
                                        as psychotherapy, external splints and traction, medical devices, biologics, and ionizing
                                        radiation, amongst others.
                                    </p>
                                    <a class="read_more" href="{{route('about-us')}}">Read more</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->



    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe to our Pharmacy </h3>
                        <form action="{{route('subscribe-post')}}" id="email_form_action" method="post"
                              class="aa-subscribe-form">
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Enter your Email">
                            <input type="submit" id="send_email_message" value="Subscribe">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->





@endsection