<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('satner/img/C.png')}}" type="image/png">
	<title>Covid Modelling Challenge</title>
	<!-- Bootstrap CSS -->

	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" >
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css" >
	<link rel="stylesheet" href="{{asset('satner/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('satner/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('satner/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('satner/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('satner/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('satner/vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('satner/css/style.css')}}">

</head>

<body>

	<div id="wrapperfront">
		<!--Untuk memasukan file _navbar kedalam master blad-->
		@include('layoutfront.includefront._navbarfront')

		<!-- MAIN -->
		@yield('contentfront')
		
		@include('layoutfront.includefront._footerfront')


	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="{{asset('satner/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('satner/js/popper.js')}}"></script>
	<script src="{{asset('satner/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('satner/js/stellar.js')}}"></script>
	<script src="{{asset('satner/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('satner/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('satner/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('satner/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('satner/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('satner/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('satner/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('satner/js/gmaps.min.js')}}"></script>
	<script src="{{asset('satner/js/theme.js')}}"></script>
	


	<script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
	<script src="{{asset('backend/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('backend/assets/scripts/klorofil-common.js')}}"></script>

	
	
	
	
	
	@yield('jsfront')

	@yield('chart')

	
</body>

</html>
