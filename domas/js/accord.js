


$(function() {
    $('#accordion > li').hover(
        function () {
            var $this = $(this);
            $this.stop().animate({'width':'28vw'},500);
            $('.heading',$this).stop(true,true).fadeOut();
            $('.bgDescription',$this).stop(true,true).slideDown(500);
            $('.description',$this).stop(true,true).fadeIn();
        },
        function () {
            var $this = $(this);
            $this.stop().animate({'width':'10vw'},1000);
            $('.heading',$this).stop(true,true).fadeIn();
            $('.description',$this).stop(true,true).fadeOut(500);
            $('.bgDescription',$this).stop(true,true).slideUp(700);
        }
    );
});

$(document).ready(function(){
    $("#eye").animate({
           left: '42.1vw',
           opacity: '0.1',
        }, 3000, 'linear').animate({
           left: '41.5vw',
           opacity: '1',
        }, 3000, 'linear');

});

$('#butatb').click(function(){
    $('#myDIVans').show(500);
    $('#butatb').hide(500);
    // $('#header').hide(500);
    $('html, body').animate({
      scrollTop: $("#goto").offset().top
    }, 1000);
  });
  
  $('#myDIVansc').click(function(){
    $('#butatb').show(500);
    $('#myDIVans').hide(500);
    // $('#header').hide(500);
    // $('html, body').animate({
    //   scrollTop: $("#myDIV13").offset().top
    // }, 1000);
  });

// $('#reload').click(function() {
//     location.reload();
// });


// function myFunction() {
//   var x = document.getElementById("myDIV");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }





















  
//   $('#btnn2').click(function(){
//     $('#myDIV').show();
//     $('#btnn2').hide();
//     $('#btnn3').hide();
//     $('html, body').animate({
//       scrollTop: $("#myDIV").offset().bottom
//     }, 1000);
//   });
  
//   $('#btnn3').click(function(){
//     $('#myDIV2').show();
//     $('#btnn2').hide();
//     $('#btnn3').hide();
//     $('html, body').animate({
//       scrollTop: $("#myDIV2").offset().bottom
//     }, 1000);
//   });

// });

