/*
    ./js/add.js
 */



          $(document).on('submit', '#contact' ,function(e){
              e.preventDefault();
              if($('#body').val()==''){
                  alert("Ecrivez d'abord un commentaire.");
              }
              else{
                  var commentForm = $('#contact').serialize();
                  $.ajax({
                      method: 'GET',
                      url: $(this).attr('action'),
                      data: commentForm,
                      success: function(reponsePHP){
                        $('.liste').prepend(reponsePHP)
                              .find('.post-reply').first()
                              .hide()
                              .slideDown();
                      }
                  });
              }


});
