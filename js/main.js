$(document).ready(function(){

  // Sticky Function
  
  window.onscroll = function() {myStickyFunction()};
  
  var nav = document.getElementById("nav");
  var sticky = nav.offsetTop;

  
  function myStickyFunction() {
    if (window.pageYOffset > sticky) {
      nav.classList.add("sticky");
      $(".llamalogo-nav").addClass("show");
      $(".main").addClass("main-out");
    } else {
      nav.classList.remove("sticky");
      $(".llamalogo-nav").removeClass("show");
      $(".main").removeClass("main-out");
    }
  }

});
