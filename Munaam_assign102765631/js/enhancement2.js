var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


setInterval(myTimer, 12000);

function myTimer() {

  document.getElementById("setUp").src = 'images/lucky.jpg';

  setInterval(resetter, 3000);
}

function resetter(){
   document.getElementById("setUp").src = 'images/quiz.jpg';
}



let currentSlide = 0, theSlides = document.getElementsByClassName('widget_media_image'), customSliderTimer, next, prev, theWrapper = document.getElementById('my-custom-slider-demo');
function customNavToNextSlide() {
  next = ( currentSlide < theSlides.length - 1 ) ? currentSlide + 1 : 0;
  customSetCurrentSlide(next);
}
function customNavToPrevSlide() {
  prev = ( currentSlide > 0 ) ? currentSlide - 1 : theSlides.length - 1;
  customSetCurrentSlide(prev);
}
function customSetCurrentSlide(to) {
  clearInterval(customSliderTimer);
  for (let i = 0; i < theSlides.length; i ++) {
    if ( currentSlide == i ) {
      theSlides[currentSlide].classList.remove('active');
    }
    if ( next == i ) {
      theSlides[to].classList.add('active');
    }
  }
  currentSlide = to;
  customSliderStart();
}
function customSliderStart() {
  customSliderTimer = setInterval(function() {
    customNavToNextSlide();
  }, 5000);
}
function customSliderInit() {
  let height = theSlides[0].getElementsByTagName('img')[0].height;
  theWrapper.style.height = height + 'px';
  for (let i = 0; i < theSlides.length; i ++) {
    theSlides[i].style.height = height + 'px';
  }
}
if (typeof theSlides !== 'undefined') {
  window.addEventListener('resize', customSliderInit);
  customSliderInit();
  if ( theSlides.length > 1 ) {
    customSliderStart();
  }
}

function clock() {
  var now = new Date();
  var ctx = document.getElementById('canvas').getContext('2d');
  ctx.save();
  ctx.clearRect(0, 0, 150, 150);
  ctx.translate(75, 75);
  ctx.scale(0.4, 0.4);
  ctx.rotate(-Math.PI / 2);
  ctx.strokeStyle = 'black';
  ctx.fillStyle = 'white';
  ctx.lineWidth = 8;
  ctx.lineCap = 'round';

  // Hour marks
  ctx.save();
  for (var i = 0; i < 12; i++) {
    ctx.beginPath();
    ctx.rotate(Math.PI / 6);
    ctx.moveTo(100, 0);
    ctx.lineTo(120, 0);
    ctx.stroke();
  }
  ctx.restore();

  // Minute marks
  ctx.save();
  ctx.lineWidth = 5;
  for (i = 0; i < 60; i++) {
    if (i % 5!= 0) {
      ctx.beginPath();
      ctx.moveTo(117, 0);
      ctx.lineTo(120, 0);
      ctx.stroke();
    }
    ctx.rotate(Math.PI / 30);
  }
  ctx.restore();

  var sec = now.getSeconds();
  var min = now.getMinutes();
  var hr  = now.getHours();
  hr = hr >= 12 ? hr - 12 : hr;

  ctx.fillStyle = 'black';

  // write Hours
  ctx.save();
  ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec);
  ctx.lineWidth = 14;
  ctx.beginPath();
  ctx.moveTo(-20, 0);
  ctx.lineTo(80, 0);
  ctx.stroke();
  ctx.restore();

  // write Minutes
  ctx.save();
  ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);
  ctx.lineWidth = 10;
  ctx.beginPath();
  ctx.moveTo(-28, 0);
  ctx.lineTo(112, 0);
  ctx.stroke();
  ctx.restore();

  // Write seconds
  ctx.save();
  ctx.rotate(sec * Math.PI / 30);
  ctx.strokeStyle = '#D40000';
  ctx.fillStyle = '#D40000';
  ctx.lineWidth = 6;
  ctx.beginPath();
  ctx.moveTo(-30, 0);
  ctx.lineTo(83, 0);
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, 10, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.beginPath();
  ctx.arc(95, 0, 10, 0, Math.PI * 2, true);
  ctx.stroke();
  ctx.fillStyle = 'rgba(0, 0, 0, 0)';
  ctx.arc(0, 0, 3, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.restore();

  ctx.beginPath();
  ctx.lineWidth = 14;
  ctx.strokeStyle = '#325FA2';
  ctx.arc(0, 0, 142, 0, Math.PI * 2, true);
  ctx.stroke();

  ctx.restore();

  window.requestAnimationFrame(clock);
}

window.requestAnimationFrame(clock);
