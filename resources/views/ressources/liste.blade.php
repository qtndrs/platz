{{--
	resources/views/ressources/liste.blade.php


	 --}}




@foreach ($ressources as $ressource)
<figure class="white">
<a href="{{route('ressource', ['id' => $ressource->id])}}">
	<img src="{{ asset('storage/' . $ressource->image) }}" style="width: 243px; height: 182.250px;"/>
	<dl>
		<dt>{{ $ressource -> titre }}</dt>
		<dd>{!! $ressource -> texteLead !!}</dd>
	</dl>
</a>
	<div id="wrapper-part-info">
		<div class="part-info-image"><img src="{{ asset('img/' . $ressource->categorie->icone) }}" alt="" width="28" height="28"/></div>
		<div id="part-info">{{ $ressource ->categorie->nom }}</div>
</div>
</figure>
@endforeach


				{{ $ressources->links('partials.paginator', ['ressources'=>$ressources]) }}
