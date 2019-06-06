/*
    ./js/add.js
 */


 $('#tip_newsletter_input').on("keydown", function(e){
    // 13 is the key code for the Enter key
    if(e.keyCode === 13){
        e.preventDefault();
    }
});
