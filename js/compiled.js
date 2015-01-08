// JavaScript Document
jQuery(document).ready(function() {
	jQuery('.tp-banner').revolution({
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
});
/*==Clen Form==*/
function clean(){
	jQuery(".clean").each(function(index){
		jQuery(this).val("");
	});
}
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
		return false;
	}else{
		//Reset the error message
		three = checkSecurityCode();
		if(three){
			return true;	
		}else{
			return false;
		}
		
	}
}
/*== SECURITY CODE ==*/
function checkSecurityCode(){
	var code = jQuery('#code').val();
	var counter = 0;
	jQuery.ajax({
		type: "POST", 
		url:  "lib/captcha/captcha-verify.php",
		data: 'pcode='+code,
		success: function(msg){
			if(msg){ 
				returni= true;
			}
			else{
				swal({
					title: "Error, Eres un Robot?",   
					text: "El codigo de Seguridad es Incorrecto",   
					type: "error",   
					confirmButtonText: "Cerrar" });
				returni= false;
			}
	 	}
	});
	return returni;
}

function checkForm(){
	one = checkRequired();
	
	jQuery("input.validEmail").each(function(index) {
		contentField = jQuery(this).val();
		two = validateEmail(contentField);
		if(!two){
			swal({
			title: "Error",   
			text: "Inserte un Correo Electronico Valido.",   
			type: "error",   
			confirmButtonText: "Cerrar" });
		}
	});

if(one && two){
	var name = jQuery('#name').val();
	var email = jQuery('#email').val();
	var subject = jQuery('#subject').val();
	var country = jQuery('#country').val();
	var market = jQuery('#market').val();
	var message = jQuery('#message').val();

	//$('#contact_form').html('<div style="text-align:center;"><img src="img/ajax-loader.gif" /></div>');
	jQuery.ajax({
	   type: "POST", 
	   url: "lib/sendform.php",
	   data: 'pname='+name+'&pemail='+email+'&psubject='+subject+'&pcountry='+country+'&pmarket='+market+'&pmessage='+message,
	   success: function(msg){
		   if(msg){				 
				 swal({
					title: "Mensaje Enviado",   
					text: "Su mensaje ha sido enviado; pronto nos comunicaremos.",   
					type: "success"});
				 clean();
				 //window.location.reload();
		   }else{
				swal({
					title: "Error",   
					text: "Su mensaje NO a sido enviado, por favor intente mas tarde.",   
					type: "error",   
					confirmButtonText: "Cerrar" });

		   }
	   }
	 });
		return true; 
}else{
	return false;
}

}

