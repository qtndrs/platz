{{--
	resources/views/Categories/index.blade.php
	 --}}


<div id="wrapper-navbar">
	<div class="navbar object">
@foreach ($categories as $categorie)
						<div id="wrapper-bouton-icon">
									 <a href="{{route('categorie', ['id' => $categorie->id])}}"><div id="bouton-{{ $categorie->btn }}"><img src="{{ asset('img/' . $categorie->icone) }}" alt="{{ $categorie->nom }}" title="{{ $categorie->nom }}" height="28" width="28"></div></a>
						 </div>
@endforeach
	</div>
</div>
