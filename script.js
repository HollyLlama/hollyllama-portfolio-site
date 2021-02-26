
/*Button Functions*/

jQuery(document).ready(function(){
    jQuery('#hideshowillustration').on('click', function(event) {
        jQuery('#illustrationsDiv').toggle();
    });
  });
jQuery(document).ready(function(){
    jQuery('#hideshowweb').on('click', function(event) {
        jQuery('#websitesDiv').toggle('show');
    });
  });

jQuery(document).ready(function(){
    jQuery('#hideshowiphone').on('click', function(event) {
        jQuery('#iphoneAppDiv').toggle('show');
      });
    });

  jQuery(document).ready(function(){
      jQuery('#hideshowlogo').on('click', function(event) {
          jQuery('#logosDiv').toggle('show');
        });
      });

    jQuery(document).ready(function(){
        jQuery('#hideshowprint').on('click', function(event) {
            jQuery('#printDiv').toggle('show');
          });



/*Copyright Date*/

document.getElementById("year").innerHTML = new Date().getFullYear();

});
