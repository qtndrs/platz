{{--
	resources/views/ressources/index.blade.php
	 --}}

@extends('templates/homepage')

@section('titre')

Liste des ressources

@stop

@section('content')

	@include('ressources.liste')

@stop
