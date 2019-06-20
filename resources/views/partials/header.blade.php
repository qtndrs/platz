{{--
	resources/views/partials/header.blade.php
	 --}}
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Platz - @yield('titre')</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/small-logo-01.png') }}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link  href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	@yield('css')

	@if ( Request::is('/') )
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@elseif(Route::currentRouteName() == 'categorie')
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@elseif(Route::currentRouteName() == 'paginate')
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@elseif(Route::currentRouteName() == 'pofile')
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@else
	<link href="{{URL::asset('show.css')}}" rel="stylesheet">

	@endif
	<style media="screen">
		#sign {
			position: absolute;
			right: 300px;
			width:170px;
			margin-top:13px;
			height:auto;
			display:inline-block;
			padding: 10px;
			border-radius: 3px;
		}
		#sign a {
			padding-left: 10px;
			padding-right: 10px;
			font-family: Helvetica, sans-serif;
			opacity:0.5;
			cursor:pointer;
			color:#666;
			opacity:1;
		}
		#sign a:hover {
			color: white;
		}

	</style>
</head>

<body>
<a name="ancre"></a>

<div class="cache"></div>
<!-- HEADER -->
<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo"> <a href="{{ route('templates.homepage') }}"><img src="{{ asset('img/logo-burst.png') }}" alt="logo platz" height="38" width="90"></a> </div>

<div id="sign">
	<?php if (Auth::check()): ?>
		<a class="log" href="{{route('profile')}}">My Profile</a>
		<a class="log" href="{{route('logout')}}">Logout</a>
	<?php else: ?>
		<a class="log" href="{{route('login')}}">Sign In</a>
		<a class="log" href="{{route('register')}}">Sign Up</a>
	<?php endif; ?>
</div>

			  <div id="main_tip_search">
			<form action ="#"  method="get">
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
				</div>
        <div id="stripes"></div>
    </div>



		<div id="main-header" class="object">



		</div>
</div>
