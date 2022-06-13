jQuery(document).ready(function($) {
 
  //Check to see if the window is top if not then display button
 $(window).scroll(function(){

  var y = $(this).scrollTop();
  if (y < 1500) {
    $('#header').fadeIn(1000);
  } else {
    $('#header').fadeOut(1000);
  }

  // if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
  //     $('#header').hide();
  // }else { 
  //   $('#header').show();
  //  }
});

 //Click event to scroll to top
 $('#myBtn').click(function(){
  $('html, body').animate({scrollTop : 0},100);
  return false;
 });

 //show/hide about
 $("#ka").click(function(){
  $(".hide1").show(800);
  $(".que, .hide2, .hide3, .hide4").hide();
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kapec").click(function(){
  $(".que, .hide1, .hide3, .hide4").hide();
  $(".hide2").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kadaveida").click(function(){
  $(".que, .hide1, .hide2, .hide4").hide();
  $(".hide3").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kas").click(function(){
  $(".que, .hide1, .hide2, .hide3").hide();
  $(".hide4").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});

// show hide fakti
$('#aks').click(function(){
$('#fakti').show(1800);
$('#aks').hide(300);
$('.phy').css({
  'padding-top': '5vh'
});
$('.phy p').css({
  'text-align': 'left'
});
});

// hide spon
$('#aizv, #aizvsp, #aizvne').click(function(){
$('#fakti, #sponk, #spong, #needsr, #needsf, #needs, #myDIV00, #myDIV11, #myDIV12, #myDIV13',).hide(500);
$('.phy p').css({
  'text-align': 'center'
});
$('html, body').animate({
  scrollTop: $("#needstit").offset().top
}, 100);
$('#aks, #btnn4, #btnn5, #btnn6 ,#btnn7').show(300);
});

//hide fakti
$('#aizv').click(function(){
$('#fakti').hide(500);
$('.phy').css({
  'padding-top': '25vh'
});
$('.phy p').css({
  'text-align': 'center'
});
$('html, body').animate({
  scrollTop: $("#phy").offset().top
}, 100);
$('#aks').show(300);
});

// show hide spon needs
$('#spon1').click(function(){
$('#spong').show(500);
$('#needs').show(500);
$('#sponk').hide(500);
$('#needsr').hide(500);
$('#needsf').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#spon2').click(function(){
$('#sponk').show(500);
$('#needs').show(500);
$('#spong').hide(500);
$('#needsr').hide(500);
$('#needsf').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#needs1').click(function(){
$('#needsr').show(500);
$('#needs').show(500);
$('#needsf').hide(500);
$('#sponk').hide(500);
$('#spong').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#needs2').click(function(){
$('#needsf').show(500);
$('#needs').show(500);
$('#needsr').hide(500);
$('#sponk').hide(500);
$('#spong').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

// show/hide que1
$('#btnn').click(function(){
  $('#myDIV').show();
  $('#btnn').hide();
  $('html, body').animate({
    scrollTop: $("#myDIV").offset().top
  }, 1000);
});

$('#btnn4').click(function(){
  $('#myDIV00').show(500);
  $('#btnn4').hide(500);
  $('#header').hide(500);
  $('html, body').animate({
    scrollTop: $("#myDIV00").offset().top
  }, 1000);
});
$('#btnn5').click(function(){
  $('#myDIV11').show(500);
  $('#btnn5').hide(500);
  $('#header').hide(500);
  $('html, body').animate({
    scrollTop: $("#myDIV11").offset().top
  }, 1000);
});
$('#btnn6').click(function(){
  $('#myDIV12').show(500);
  $('#btnn6').hide(500);
  $('#header').hide(500);
  $('html, body').animate({
    scrollTop: $("#myDIV12").offset().top
  }, 1000);
});
$('#btnn7').click(function(){
  $('#myDIV13').show(500);
  $('#btnn7').hide(500);
  $('#header').hide(500);
  $('html, body').animate({
    scrollTop: $("#myDIV13").offset().top
  }, 1000);
});


$('#butatb').click(function(){
  $('#myDIVans').show(500);
  $('#butatb').hide(500);
 
});

$('#myDIVansc').click(function(){
  $('#butatb').show(500);
  $('#myDIVans').hide(500);
});

$(document).ready(function(){
  $('#tru1, #tru, #tru2').on("click",function(e){
   $('#myImg').show('10000');
   $('html, body').animate({
    scrollTop: $("#myImg").offset().top
  }, 1000);
  });
});


$(document).ready(function(){
  $('#but2').on("click",function(e){
   $('#myDIV14').show('10000');
   $('#but2').hide('10000');
   $('html, body').animate({
    scrollTop: $("#myDIV14").offset().top
  }, 1000);
  });
});



});

// Slideshows
var slideIndex = 1;
  
function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

function picalert() {
  alert("Attēls tiks (ja tiks) pievienots pēc cenzūras procedūras.!");
}