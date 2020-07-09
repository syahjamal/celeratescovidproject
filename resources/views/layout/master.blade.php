<!doctype html>
<html lang="en">

<head>

	
	<link rel="icon" href="{{asset('backend/assets/img/C.png')}}" type="image/png">
	<title>Covid Modelling Challange</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/linearicons/style.css')}}">
	

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!--Data Tabel CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" defer>
	
	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!--Untuk memasukan file _navbar kedalam master blad-->
		@include('layout.include._navbar')

		<!--Untuk memasukan file _sidebar kedalam master blade-->
		@include('layout.include._sidebar')
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<!-- <div class="clearfix"></div> -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{asset('backend/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('backend/assets/scripts/klorofil-common.js')}}"></script>

	@yield('js')
	
	@yield('chart')

	@yield('chart2')

    



</body>

</html>
