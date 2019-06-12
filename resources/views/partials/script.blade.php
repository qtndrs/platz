{{--
	resources/views/partials/script.blade.php

	@if (\Session::has('success'))
	<script> toastr.success("{{ Session::get('success') }}");</script>
	@endif
	@if (\Session::has('failure'))
	<script> toastr.error("{{ Session::get('failure') }}");</script>
	@endif
	 --}}

<!-- SCRIPT-->
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/addComment.js')}}"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>
	<!-- pagination -->
<script type="text/javascript" src="{{asset('js/paginator.js')}}"></script>

	@yield('script')

	@if ( Request::is('/') OR Request::is('categorie/'))
	<script src="{{asset('js/main.js')}}"></script>
	@else
	<script src="{{asset('js/show.js')}}"></script>
	@endif
	<script type="text/javascript">
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	</script>

							<!-- newsletter msg


						<script>
						$(function(){

							$.ajaxSetup({
											 headers: {
											 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
											 }
											 });

							$('#tip_newsletter_input').on("keydown", function(e){

							    // 13 is the key code for the Enter key
							    if(e.keyCode === 13){
							        e.preventDefault();
											$.ajax({


												url: $(this).attr('action'),
													method: 'post',
						              success: function(responsePHP){
														alert(responsePHP);

							    }
							});
							}
							});

						});
						</script>
						 -->
