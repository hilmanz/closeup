jQuery(document).ready(function() {
	/*------------POP UP------------*/	
	jQuery("a.popup").click(function(){
		var targetID = jQuery(this).attr('href');
		jQuery(targetID).fadeIn();
		jQuery("#bgPopup").fadeIn();
	});
	jQuery("a.closePopup").click(function(){
		jQuery(".popupContainer").fadeOut();
		jQuery("#bgPopup").fadeOut();
	});
});