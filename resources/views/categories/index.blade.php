{{--
	resources/views/Categories/index.blade.php
	 --}}


<div id="wrapper-navbar">
	<div class="navbar object">
@foreach ($categories as $categorie)
						<div id="wrapper-bouton-icon">
									 <div id="bouton-{{ $categorie->btn }}"><img src="{{ asset('img/' . $categorie->icone) }}" alt="{{ $categorie->nom }}" title="{{ $categorie->nom }}" height="28" width="28"></div>
						 </div>
@endforeach
	</div>
</div>
