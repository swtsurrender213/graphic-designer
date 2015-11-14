// A jQuery( document ).ready() block.
jQuery( document ).ready(function() {
  jQuery(".myhover").hover(
  function () {
    jQuery(this).append(jQuery("<div class='hover'>"+jQuery(this).find('img').attr('alt')+"</div>"));
    jQuery(this).find(".hover").fadeIn();
  }, 
  function () {    
    jQuery(this).find(".hover").fadeOut(function() { jQuery(this).remove(); })
  }
); 
});


