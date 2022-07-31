$(document).ready(function(){

  // Sticky Function
  
  window.onscroll = function() {myStickyFunction()};
  
  var nav = document.getElementById("nav");
  var sticky = nav.offsetTop;

  
  function myStickyFunction() {
    if (window.pageYOffset > sticky) {
      nav.classList.add("sticky");

      var width = $("body").width();

      if (width > 1024) {
        $('.main').css('display', 'none');
        $('header').css('min-height', '0px').css('padding-bottom', '150px');
      }
    } else {
      nav.classList.remove("sticky");
      var width = $("body").width();

      if (width > 1024) {
        $('.main').css('display', 'flex');
        $('header').css('min-height', '500px').css('padding-bottom', '12rem');
      }
    }
  }

});
