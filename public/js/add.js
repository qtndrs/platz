/*
    ./js/add.js
 */

          $(document).on('submit', '#contact' ,function(e){
              e.preventDefault();

                  $.ajax({

                      url: $(this).attr('action'),
                      data: $(this).serialize(),
                      method: 'get',
                      success: function(reponsePHP){
                        if (reponsePHP == 1) {
                          var code = "<div class=\"post-reply\">\n\
                              					<div class=\"image-reply-post\"></div>\n\
                              				  <div class=\"name-reply-post\">"+$('#user').val()+"</div>\n\
                              					<div class=\"text-reply-post\">"+$('#body').val()+"</div>\n\
                                			</div>";
                          $('#liste').prepend(code).find('.post-reply:first').hide().slideDown();
                          $('#body').val("");
                        }
                        else {
                          alert("Problème durant l'ajout du commentaire");
                        }
                      },
                      error: function(){
                        alert('Il y a une erreur de transaction');
                      }
                  });

});
