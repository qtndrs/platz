{{--
	resources/views/partials/script.blade.php
	 --}}

<!-- SCRIPT -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('js/addComment.js')}}"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>
	@yield('script')

	@if ( Request::is('/') OR Request::is('categorie/'))
	<script src="{{asset('js/main.js')}}"></script>
	@else
	<script src="{{asset('js/show.js')}}"></script>
	@endif


							<!-- newsletter msg  -->
	@if (\Session::has('success'))
	<script> toastr.success("{{ Session::get('success') }}");</script>
	@endif
	@if (\Session::has('failure'))
	<script> toastr.error("{{ Session::get('failure') }}");</script>
	@endif
