 
jQuery(document).on('submit','#login',function(event){

      event.preventDefault();
 	let username=$("#username").val(); 	 
 	let pass=$("#pass").val();  

 	$.ajax({
 		url: 'call-center/model/login/login.php',
 		type: 'POST',
 		dataType: 'json',
 		data: {'usuario':username,'pass':btoa(pass)},
 		 
 	})
 	.done(function(res) { 
 		if (res.aux=='1') {
 			 alertify.set('notifier','position', 'top-center');
			 alertify.error(res.msj);
			  
 		}
 		else if(res.aux=='0'){
 			window.location.href = "view/index.php";
 		}
 	})
 	.fail(function( jqXHR, textStatus, errorThrown ) {
    // Un callback .fail()
	    alert(jqXHR);
	    alert(textStatus);
	    alert(errorThrown);
 	})
 	.always(function() {
 		console.log("complete");
 	});
 	
});





 
