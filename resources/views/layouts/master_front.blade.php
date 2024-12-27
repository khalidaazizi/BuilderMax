
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Builder Max</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="robots" content="index,follow">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('front/assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('front/assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
       <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/style.css')}}">
      @yield('css')
   </head>
   <body>
          {{-- make project --}}
            @yield('content')
          {{-- make project --}}

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('front/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/assets/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('front/assets/js/plugin.js')}}"></script>
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      @yield('js')
   </body>
</html>