const counters = document.querySelectorAll('.value');
const speed = 99210;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('akhi');
      const value1 = 'xxx';
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 500);
        }else{
          counter.innerText = value1;
        }
     
        
   }
   animate();
});

$(document).ready(function(){
       setInterval(callMe);
    });

function callMe(){

$(document).ready(function(){
       $("#div3, #div5").animate({
              left: '155px',
              opacity: '1',
           }, 10000, 'linear', ).animate({
              left: '145px',
              opacity: '0.5',
           }, 10000, 'linear', );
});


$(document).ready(function(){
       $("#div4, #div6").animate({
              left: '145px',
              opacity: '0.1',
           }, 10000, 'linear').animate({
              left: '155px',
              opacity: '1',
           }, 10000, 'linear');
 
});
}