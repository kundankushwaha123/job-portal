 
<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="author" content="Dreams Technologies">
	<meta name="robots" content="index, follow">

	<!-- Title -->
	<title>Job-Portal</title>

	<!-- Themescript JS -->
	<script src="{{asset('assets/js/theme-script.js')}}"></script>

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple-touch-icon.png')}}">

	<!-- Favicon -->
	<link rel="icon" href="{{ url('assets/img/favicon.png')}}" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.png')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/tabler-icons/tabler-icons.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css')}}">
	<!-- Color Picker CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/plugins/%40simonwep/pickr/themes/nano.min.css')}}">
	<!-- Datatable CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/dataTables.bootstrap5.min.css')}}">
	<!-- Daterangepicker CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/daterangepicker/daterangepicker.css')}}">
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css')}}">
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="{{ url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css')}}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    {{-- Extra page CSS will come here --}}
    @stack('styles')
</head>