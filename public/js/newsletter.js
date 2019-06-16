/*
    ./js/add.js
 */


 $(function(){

  $(document).on("submit", '#form', function(e){
      e.preventDefault();
       $.ajax({
            url:$('#form').attr('action'),
            data: {
              email: $('#tip_newsletter_input').val(),
            },
              method: 'post',
              success: function(num){
                if (num === '1') {
                   toastr.success("Votre email  a été enregistré");
              } else {
                toastr.error("Votre email est déjà enregistré ");
              }
      }
  });
  });




});
