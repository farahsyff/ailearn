//slideFunc
let slideCounter = 0;
let slide = document.getElementsByClassName("slides");
let dots = document.getElementsByClassName("dot");

$( document ).ready(function() {
  $(".slides").hide();
  $(slide[slideCounter]).show();
});

function bulletSlide(n) {
  slideCounter = n;

  $(".dot.activeDot").removeClass("activeDot");
  $(dots[slideCounter]).addClass("activeDot");

  $(".slides").hide();
  $(slide[slideCounter]).fadeIn();
}

function arrowSlide(n) {
  let past = slideCounter;
  slideCounter = slideCounter + n;
  if(slideCounter>3){
      slideCounter = 0;
  }
  else if(slideCounter<0){
      slideCounter = 3;
  }

  $(dots[past]).removeClass("activeDot");
  $(dots[slideCounter]).addClass("activeDot");

  $(slide[past]).hide();
  $(slide[slideCounter]).fadeIn();
}