
/*
    ./js/paginator.js
 */

					$(function() {


						 $(document).on('click', '.oldnew a', function(e){
						  e.preventDefault();
							$.ajax({
						   url:$(this).attr('data-url'),
						   success:function(responsePHP)
						   {
						    $('#ressource').html(responsePHP);
						   }
						  });

						 });
	});
