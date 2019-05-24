/*
    ./js/add.js
 */

    $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

          $(document).on('click', '#btn', function(){
              if($('#message').val()==''){
                  alert("Ecrivez d'abord un commentaire.");
              }
              else{
                  var commentForm = $('#contact').serialize();
                  $.ajax({
                      method: 'GET',
                      url: 'add',
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
