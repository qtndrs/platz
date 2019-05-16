{{--
	resources/views/ressources/liste.blade.php
	 --}}

@foreach ($ressources as $ressource)
<figure class="white">
<a href="">
	<img src="{{ asset('img/' . $ressource->image) }}" />
	<dl>
		<dt>{{ $ressource -> titre }}</dt>
		<dd>{{ $ressource -> texteLead }}</dd>
	</dl>
</a>
	<div id="wrapper-part-info">
		<div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
		<div id="part-info">{{ $ressource -> categorie_id }}</div>
</div>
</figure>
@endforeach
