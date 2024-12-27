@extends('layouts.master_front')
@section('content')
 
      <!-- header section start -->
      @include('front.partials.main.header')
      <!-- header section end -->
      <!-- services section start -->
      @include('front.partials.main.services_section')
      <!-- services section end -->
      <!-- about sectuion start -->
      @include('front.partials.main.about_section')
      <!-- about sectuion end -->
      <!-- projects section start -->
      @include('front.partials.main.projects_section')
      <!-- projects section end -->
      <!-- testimonial section start -->
     @include('front.partials.main.testimonial_section')
      <!-- testimonial section end -->
      <!-- contact section start -->
      @include('front.partials.main.contact_section')
      <!-- contact section end -->
      <!-- footer section start -->
     @include('front.partials.main.footer_section')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2019 All Rights Reserved. Design by <a href="https://html.design" rel="nofollow">HTML.DESIGN</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
@endsection