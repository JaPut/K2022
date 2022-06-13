$("#talak").click(function()
{
  jQuery('html,body').animate({scrollTop:0},8000);
});

$('#btnn').click(function(){
  $('#myDIV').show();
  $('#btnn').hide();
  $('html, body').animate({
    scrollTop: $(".talak").offset().top
  }, 1000);

  $("#field").keyup(function(){
    el = $(this);
    if(el.val().length >= 255){
        el.val( el.val().substr(0, 255) );
    } else {
        $("#charNum").text(254-el.val().length);
    }
});

});

