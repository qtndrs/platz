{{--
	resources/views/ressources/index.blade.php
	 --}}

@extends('templates/homepage')

@section('titre')

Liste des ressources

@stop

@section('content')
<div id="wrapper-container">

	<div class="container object">

		<div id="main-container-image">

				<section class="work">
	@include('ressources.liste')
				</section>

		</div>

	</div>
	{{$ressources->links()}}
</div>
@stop
