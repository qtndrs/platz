{{--
	resources/views/partials/header.blade.php
	 --}}
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Platz - @yield('titre')</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="{{ asset('img/small-logo-01.png') }}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link  href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	@if ( Request::is('/') )
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@elseif(Route::currentRouteName() == 'categorie')
	<link href="{{URL::asset('style.css')}}" rel="stylesheet">
	@else
	<link href="{{URL::asset('show.css')}}" rel="stylesheet">
	@endif
</head>

<body>
<a name="ancre"></a>

<div class="cache"></div>
<!-- HEADER -->
<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo"><img src="{{ asset('img/logo-burst.png') }}" alt="logo platz" height="38" width="90"></div>
        <div id="main_tip_search">
			<form><input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>
