{{--
	resources/views/partials/script.blade.php
	 --}}

<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>

	@if ( Request::is('/') OR Request::is('categorie/'))
	<script src="{{asset('js/main.js')}}"></script>
	@else
	<script src="{{asset('js/show.js')}}"></script>
	@endif

	<script type="text/javascript">

	$(function() {
	    $('body').on('click', '.pagination a', function(e) {
	        e.preventDefault();

	        var url = $(this).attr('data-url');
	        getRessources(url);
	        window.history.pushState("", "", url);
	    });

	    function getRessources(url) {
	        $.ajax({
	            url : url,
	        }).done(function (data) {
	            $('.work').html(data);
	        }).fail(function () {
	            alert('Articles could not be loaded.');
	        });
	    }
	});

	</script>
