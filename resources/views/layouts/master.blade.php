<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Neito Energy Limited </title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    	<!--Favicon-->
 	<link rel="icon" href="/assets/img/favicon.png" type="image/jpg" />
 	<!-- Bootstrap CSS -->
 	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
 	<!-- Font Awesome CSS-->
 	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
 	<!-- Line Awesome CSS -->
 	<link href="/assets/css/line-awesome.min.css" rel="stylesheet">
 	<!-- Animate CSS-->
 	<link href="/assets/css/animate.css" rel="stylesheet">
 	<!-- Bar Filler CSS -->
 	<link href="/assets/css/barfiller.css" rel="stylesheet">
 	<!-- Flaticon CSS -->
 	<link href="/assets/css/flaticon.css" rel="stylesheet">
 	<!-- Owl Carousel CSS -->
 	<link href="/assets/css/owl.carousel.css" rel="stylesheet">
 	<!-- Style CSS -->
 	<link href="/assets/css/style.css" rel="stylesheet">
 	<!-- Responsive CSS -->
 	<link href="/assets/css/responsive.css" rel="stylesheet">

 	<!-- jquery -->
 	<script src="/assets/js/jquery-1.12.4.min.js"></script>



</head>

<body>

    <!-- Pre-Loader -->
    <div id="loader">
        <div class="loading">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('layouts.header')

    @include('inc.message')


    @yield('content')


    @include('layouts.footer')


   
 	<!-- Popper JS -->
 	<script src="/assets/js/popper.min.js"></script>
 	<!-- Bootstrap JS -->
 	<script src="/assets/js/bootstrap.min.js"></script>
 	<!-- Wow JS -->
 	<script src="/assets/js/wow.min.js"></script>
 	<!-- Way Points JS -->
 	<script src="/assets/js/jquery.waypoints.min.js"></script>
 	<!-- Counter Up JS -->
 	<script src="/assets/js/jquery.counterup.min.js"></script>
 	<!-- Owl Carousel JS -->
 	<script src="/assets/js/owl.carousel.min.js"></script>
 	<!-- Magnific Popup JS -->
 	<script src="/assets/js/magnific-popup.min.js"></script>
 	<!-- Sticky JS -->
 	<script src="/assets/js/jquery.sticky.js"></script>
 	<!-- Progress Bar JS -->
 	<script src="/assets/js/jquery.barfiller.js"></script>
 	<!-- Main JS -->
 	<script src="/assets/js/main.js"></script>
    <script>
          $(document).ready(function(){
           
              setInterval(() =>  $('.owl-prev').trigger('click'), 9000);
              
        });
    </script>
</body>


</html>
