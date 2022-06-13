
document.addEventListener('click', function (event) {
  

  
  if (!event.target.classList.contains("accordion-toggle")) return;
  
 
  var content = document.querySelector(event.target.hash);
  if (!content) return;
  
 
  event.preventDefault();
  

  if (content.classList.contains('active')) {
    content.classList.remove('active');
    return;
  }
  

  var accordions = document.querySelectorAll
  ('.accordion-content1.active,.accordion-content2.active,.accordion-content3.active,.accordion-content4.active');
  for (var i = 0; i < accordions.length; i++) {
    accordions[i].classList.remove('active');
  }
    
  content.classList.toggle('active');
})





function myFunction() {
 
 
 var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
   
  } else {
    x.style.display = "block";
    document.getElementById("btnn").style.display = "none";
  }
}


function toggle(ele) {
  var cont = document.getElementById('cont');
  if (cont.style.display == 'block') {
      cont.style.display = 'none';

      document.getElementById(ele.id).value = 'TĀPAT vien';
      document.getElementById(ele.id).className = 'svarigi';
  }
  else {
      cont.style.display = 'block';
      document.getElementById(ele.id).value = 'AtpakaĻ';
      document.getElementById(ele.id).className = 'svarigi1';
  }
}



function pop(div) {
  document.getElementById(div).style.display = 'block';
}
function hide(div) {
  document.getElementById(div).style.display = 'none';
}
//To detect escape button
document.onkeydown = function(evt) {
  evt = evt || window.event;
  if (evt.keyCode == 27) {
    hide('popDiv');
  }
};

$(function(){
  $(".fragments").each(function () {
      len=$(this).text().length;
      str= $(this).text().substr(0,880);
      lastIndexOf = str.lastIndexOf(" "); 
      if(len>880) {
          $(this).text(str.substr(0, lastIndexOf) + '[…]');
      }
  });

  $(document).ready(function(){
    $('.button2').on("click",function(){
     $('#containerr').show('10000');
    //  $('#but2').hide('10000');
     $('html, body').animate({
      scrollTop: $("#containerr").offset().top
    }, 1000);
    });

  });
  });






