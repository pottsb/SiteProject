jQuery(document).ready(function() {

	if ($('.widgetContainer').hasClass('hidden')){
	    $('.contentContainer').css({'width':'100%'})
	    console.log("Width set to 100%")
	} else{
	    $('.contentContainer').css({'width':'75%'})
	    console.log("Width set to 75%")
	}

});