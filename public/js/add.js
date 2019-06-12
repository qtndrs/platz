/*
    ./js/add.js
 */

          $(document).on('submit', '#contact' ,function(e){
              e.preventDefault();

                  $.ajax({

                      url: $(this).attr('action'),
                      data: $(this).serialize(),
                      method: 'get',
                      success: function(user){

                          var code = "<div class=\"post-reply\">\n\
                              					<div class=\"image-reply-post\"></div>\n\
                              				  <div class=\"name-reply-post\">"+user['name']+"</div>\n\
                              					<div class=\"text-reply-post\">"+$('#body').val()+"</div>\n\
                                			</div>";
                          $('#liste').prepend(code).find('.post-reply:first').hide().slideDown();
                          $('#body').val("");

                      },
                      error: function(){
                        alert('Il y a une erreur de transaction');
                      }
                  });

});
