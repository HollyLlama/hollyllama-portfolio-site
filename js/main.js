$(document).ready(function(){

  // Sticky Function
  
  window.onscroll = function() {myStickyFunction()};
  
  var nav = document.getElementById("nav");
  var sticky = nav.offsetTop;
  
  function myStickyFunction() {
    if (window.pageYOffset > sticky) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  }

  
  // Fade In & Slide Up
  
  $(window).scroll( function(){
      
    $('').each( function(i){
        
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_object ){
            
            //$(this).animate({'opacity':'1'},1);
            $(this).slideUp(1);
  
                
        }
        
    }); 
    
  
  });

});
