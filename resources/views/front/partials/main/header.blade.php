 <div class="header_section">
         <div class="container-fluid bg-dark-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="{{asset('front/assets/images/logo.png')}}"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="projects.html">Project</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="testimonial.html">Testimonial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_text">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="quote_btn"><a href="#">Get A Quote</a></div>
                  </form>
               </div>
            </nav>
         </div>
         
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                {{-- @foreach ($sliders as $key => $item) --}}
                  {{-- <div class="carousel-item {{$key == 0 ? 'active': ''}} "> --}}
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                    {{-- <h1 class="banner_taital">{{$item->title}}</h1> --}}
                                    {{-- <p class="banner_text">{{$item->description}}</p> --}}
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                {{-- @endforeach --}}

                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">BUILDER CONSTRUCTION SERVICES</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">BUILDER CONSTRUCTION SERVICES</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
        <!-- banner section end -->
      </div>