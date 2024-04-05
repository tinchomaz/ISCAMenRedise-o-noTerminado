$(function() { 
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
	$(".boton").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($(".nombre").val() == "") {  
			$(".nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  
		}  
        if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
			$(".email").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  
        if ($(".telefono").val() == "") {  
			$(".telefono").focus().after('<span class="error">Ingrese un telefono</span>');  
			return false;  
		} 		
        if ($(".asunto").val() == "") {  
			$(".asunto").focus().after('<span class="error">Ingrese un asunto</span>');  
			return false;  
		}  
        if ($(".mensaje").val() == "") {  
			$(".mensaje").focus().after('<span class="error">Ingrese un mensaje</span>');   
			return false;  
		}  
    });  
	$(".nombre, .asunto, .mensaje, .telefono").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.error').fadeOut();
			return false;  
		}  
	});	
	$(".email").bind('blur keyup', function(){  
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {	
			$('.error').fadeOut();  
			return false;  
		}  
	});
});

// $("#popupform").fancybox({
// 	'scrolling'		: 'no',
// 	'titleShow'		: true,
// 	'autoDimensions': true,	
// 	'onClosed'		: function() {
// 	    $("#login_error").hide();
// 	}
// });

$("#contactform").bind("submit", function() {

	if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
	    $("#login_error").show();
	    $.fancybox.resize();
	    return false;
	}

	$.fancybox.showActivity();

	$.ajax({
		type		: "POST",
		cache	: false,
		url		: "/data/login.php",
		data		: $(this).serializeArray(),
		success: function(data) {
			$.fancybox(data);
		}
	});

	return false;
});

var statSend = false;
function checkSubmit() {
	if (!statSend) {
		statSend = true;
		return true;
	} else {
		alert("El formulario ya se esta enviando...");
		return false;
	}
}
