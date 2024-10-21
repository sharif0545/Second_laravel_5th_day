<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="{{asset('assets/css/johndoe.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
   
@yield('maincontent')
	<!-- core  -->
    <script src="{{asset('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Isotope  -->
    <script src="{{asset('assets/vendors/isotope/isotope.pkgd.js')}}"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{asset('assets/js/johndoe.js')}}"></script>

</body>
</html>
