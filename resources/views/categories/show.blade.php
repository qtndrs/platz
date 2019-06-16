{{--
	resources/views/categories/show.blade.php
	 --}}

	 @extends('templates/homepage')

	 @section('titre')

	 Liste des ressources de la categorie {{$categorie->nom}}

	 @stop

	 @section('content')
	 <div id="wrapper-container">

	  <div class="container object">

	 	 <div id="main-container-image ">

	 			 <section class="work" id="ressource">
					 @include('ressources.liste')
	 			</section>

	 	</div>
	 	</div>

	 </div>
	 @stop
