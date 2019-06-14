{{--
	resources/views/partials/paginator.blade.php

	 --}}



	 <div id="wrapper-oldnew">
				<div class="oldnew">

						<!-- Previous Page Link -->
						<div class="wrapper-oldnew-prev">
						@if ($ressources->onFirstPage())
								<div class="disabled" id="oldnew-prev"></div>
						@else
								<a href="#"  data-url="{{ $ressources->previousPageUrl() }}" rel="prev" ><div id="oldnew-prev"></div></a>
						@endif
						</div>


						<!-- Next Page Link -->
						<div class="wrapper-oldnew-next">
								@if ($ressources->hasMorePages())
										<a href="#" data-url='{{ $ressources->nextPageUrl() }}' rel="next"><div id="oldnew-next"></div></a>
								@else
										<div class="disabled" id="oldnew-next"></div>
								@endif
						</div>

				</div>
		</div>

			 	<div id="wrapper-thank">
			     	<div class="thank">
			         	<div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
			     	</div>
			 	</div>
