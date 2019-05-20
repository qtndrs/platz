{{--
	resources/views/ressources/liste.blade.php
	 --}}


	 <div id="wrapper-container">

	 	<div class="container object">

	 		<div id="main-container-image">

	 				<section class="work" id="ressource">

@foreach ($ressources as $ressource)
<figure class="white">
<a href="{{route('ressource', ['id' => $ressource->id])}}">
	<img src="{{ asset('img/' . $ressource->image) }}" />
	<dl>
		<dt>{{ $ressource -> titre }}</dt>
		<dd>{{ $ressource -> texteLead }}</dd>
	</dl>
</a>
	<div id="wrapper-part-info">
		<div class="part-info-image"><img src="{{ asset('img/' . $ressource->categorie->icone) }}" alt="" width="28" height="28"/></div>
		<div id="part-info">{{ $ressource ->categorie->nom }}</div>
</div>
</figure>
@endforeach

			</section>

		</div>
{{ $ressources->links()}}
	</div>

</div>
