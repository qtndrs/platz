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
	<script type="text/javascript" src="{{asset('js/add.js')}}"></script>

	@if ( Request::is('/') OR Request::is('categorie/'))
	<script src="{{asset('js/main.js')}}"></script>
	@else
	<script src="{{asset('js/show.js')}}"></script>
	@endif

	<script type="text/javascript">

	$(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                retriveMembers(page);
            }
        }
    });

    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();

            $('li').removeClass('active');
            $(this).parent('li').addClass('active');

            var liveurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];

            retriveMembers(page);
        });

    });

    function retriveMembers(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $(".work").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('Sorry, No response from server');
        });
    }

	</script>
