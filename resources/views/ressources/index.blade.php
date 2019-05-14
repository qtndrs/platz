{{--
	resources/views/ressources/index.blade.php
	 --}}
@foreach ($ressources as $ressource)
<figure class="white">
  <a href="">
    <img src="{{ asset('img/' . $ressources->image) }}" />
    <dl>
      <dt>{{ $ressoure -> titre }}</dt>
      <dd>{{ $ressoure -> texteLead }}</dd>
    </dl>
  </a>
    <div id="wrapper-part-info">
      <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
      <div id="part-info">categoriee titre </div>
  </div>
</figure>
@endforeach
