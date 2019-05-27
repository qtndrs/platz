{{--
	resources/views/partials/script.blade.php
	 --}}

<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('js/addComment.js')}}"></script>
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

	<script >
	$(function () {
			$(document).on('submit','#contact' ,function(e){
					e.preventDefault();

					$.ajax({
							url:'/ajax/add',
							data:{
									texte: $('#body').val(),
									ressource: $('#ressource').val(),
									user: $('#user').val()
							},
							method: 'get',
							success: function(reponsePHP) {
									console.log(reponsePHP);


							},
							error: function (jqXHR, exception) {
									var msg = '';
									if (jqXHR.status === 0) {
											msg = 'Not connect.\n Verify Network.';
									} else if (jqXHR.status == 404) {
											msg = 'Requested page not found. [404]';
									} else if (jqXHR.status == 500) {
											msg = 'Internal Server Error [500].';
									} else if (exception === 'parsererror') {
											msg = 'Requested JSON parse failed.';
									} else if (exception === 'timeout') {
											msg = 'Time out error.';
									} else if (exception === 'abort') {
											msg = 'Ajax request aborted.';
									} else {
											msg = 'Uncaught Error.\n' + jqXHR.responseText;
									}
									$('#err').html(msg);
							},
					})
			});
	});
	</script>
