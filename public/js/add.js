/*
    ./js/add.js
 */



          $(document).on('submit', '#contact' ,function(){
              if($('#body').val()==''){
                  alert("Ecrivez d'abord un commentaire.");
              }
              else{
                  var commentForm = $('#contact').serialize();
                  $.ajax({
                      method: 'GET',
                      url: 'add/comment',
                      data: commentForm,
                      success: function(reponsePHP){
                        $('.liste').prepend(reponsePHP)
                              .find('.post-reply').first()
                              .hide()
                              .slideDown();
        M.toast({html: "Votre commentaire est bien ajouté !"});
                      }
                  });
              }


});
  });
