// JavaScript Document
$(document).ready(function() {
	$('.tp-banner').revolution(
	{
		delay:9000,
		startwidth:1170,
		startheight:400,
		hideThumbs:10,
		fullWidth:"on",
		forceFullWidth:"on",
		onHoverStop:"off",
		touchenabled:"on",
		parallax:"mouse",
		parallaxBgFreeze:"on",
		parallaxLevels:[7,4,3,2,5,4,3,2,1,0]
	});

	$('.slider-market').revolution(
	{
		delay:9000,
		hideThumbs:15,
		fullWidth:"off",
		forceFullWidth:"off",
		onHoverStop:"off",
		touchenabled:"on"
	});
});
/*== Email Validator==*/
function validateEmail(email){
   var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   isValid = emailPattern.test(email);
	if(isValid){
		return true;
	}else{
		return false;
	}
}
/*== FORM VALIDATOR ==*/

function checkRequired(){
	//Check if required fields are filled
	var counter = 0;
	jQuery("input.required, select.required, textarea.required").each(function(index) {
		contentField = jQuery(this).val();
		//Check if empty
		if(contentField == '' || contentField == null || contentField == '0'){
			//Change BG style
			jQuery(this).css({'background-color':'#f2dede'});
			jQuery(this).css({'color':'#a94442'});
			//Take the cursor to the first field
			if(counter == 0){
				jQuery(this).focus();
			}
			counter++;
		}else{
			//Reset style
			jQuery(this).css({'background-color':'#fff'});
			jQuery(this).css({'color':'#595959'});
		}
	});

	//If any field is "not valid"
	if(counter > 0){
		swal({
			title: "Error",   
			text: "Los campos REQUERIDOS no pueden estar vacios.",   
			type: "error",   
			confirmButtonText: "Cerrar" });
		//Set this message
		//$('#contact_form').prepend('<div class="alert alert-danger" role="alert">Los campos no pueden estar vacios</div>');
		//alert('Los campos no pueden estar vacios');
		return false;
	}else{
		//Reset the error message
		return true;
	}
}

function checkForm(){
	one = checkRequired();

	
	
	jQuery("input.validEmail").each(function(index) {
		contentField = jQuery(this).val();
		two = validateEmail(contentField);
		if(!two){
			//jQuery('.errMsg').html('Inserte un Email V&aacute;lido');
			//$('#contact_form').prepend('<div class="alert alert-danger" role="alert">Inserte un E-mail v&aacute;lido</div>');
			//alert('Inserte un E-mail valido');
			swal({
			title: "Error",   
			text: "Inserte un Correo Electronico Valido.",   
			type: "error",   
			confirmButtonText: "Cerrar" });
		}
	});
	

if(one && two){
	var name = $('#name').val();
	var email = $('#email').val();
	var subject = $('#subject').val();
	var message = $('#message').val();

	$('#contact_form').html('<div id="response_div"><img src="/img/ajax-loader.gif" /></div>');
	$.ajax({
	   type: "POST", 
	   url: "lib/sendform.php",
	   data: 'pname='+name+'&pemail='+email+'&pmessage='+message,
	   success: function(msg){
		   if(msg){
			   //alert('¡Gracias!, su mensaje ha sido enviado.');
				 $('#contact_form').html('<div class="alert alert-success" role="alert">&iexcl;Gracias!, su mensaje ha sido enviado.<br /></div>');
		   }else{
				 $('#contact_form').html('<div class="alert alert-danger" role="alert">Su mensaje NO a sido enviado, por favor intente mas tarde.</div>');
				 //alert('Su mensaje NO a sido enviado, por favor intente mas tarde.');

		   }
	   }
	 });
		return true; 
}else{
	return false;
}

}

