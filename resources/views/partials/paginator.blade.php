{{--
	resources/views/partials/paginator.blade.php
	 --}}

	 <div id="wrapper-oldnew">
@if ($paginator->hasPages())
		 <div  class="oldnew pagination" role="navigation">

{{-- Previous Page Link --}}

				 	 <div class="wrapper-oldnew-prev">
						 @if ($paginator->onFirstPage())
						 <div id="oldnew-prev" class="disabled" aria-disabled="true"></div>
						 @else
						 <div id="oldnew-prev"><a href="#" data-url="{{ $paginator->previousPageUrl() }}" rel="prev"></a></div>
						 @endif
				 	 </div>

{{-- Next Page Link --}}

					 <div class="wrapper-oldnew-next">
						 @if ($paginator->hasMorePages())
						 <div id="oldnew-next"><a href="#" data-url="{{ $paginator->nextPageUrl() }}" rel="next"></a></div>
						 @else
						 <div id="oldnew-next" class="disabled" aria-disabled="true"></a></div>
						 @endif
			 	 	</div>

		</div>
@endif
	 </div>
