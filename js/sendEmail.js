$(document).ready( ()=>{
    
    $('.myForm').submit((e)=>{
        e.preventDefault();
        
        $('#submit').css("visibility","hidden");
		
		const cname = $('#name').val();
		const email = $('#user_email').val();
		const message = $('#message').val();
		var statusSuccess = "Email has been successfully sent!";
		var statusError = "Check your internet connection!";
		
		//ajax
		$.ajax({
			
			type: 'POST',
			url: 'mail/mail.php',
			data: {cname:cname, email:email, message:message},
			success: function(data){
				if(data == 100){
					$('#c_name').val("");
					$('#email').val("");
					$('#message').val("");
					setTimeout(function(){
						$('#submit').css("visibility","visible");
                        $('.modal-body').css('padding', '4px');
                        $('.modal-body').css('border-radius', '6px');
						$('.modal-body').css('background', 'green');
						$('.modal-body').css('color', 'white');
					    openModal("Success!", statusSuccess);
					
					},2000)
					
					setTimeout(function(){
					    $('#submit').val("Send Email");
					    
					},5000)
					
				}else if(data == 301)
				{
                    $('.modal-body').css('padding', '4px');
                    $('.modal-body').css('border-radius', '6px');
					$('.modal-body').css('background', 'red');
					$('.modal-body').css('color', 'white');
					openModal("Error!", "Ensure all fields are not left blank.");
					$('#submit').css("visibility", "visible");
				}
				else{
                    $('.modal-body').css('padding', '4px');
                    $('.modal-body').css('border-radius', '6px');
					$('.modal-body').css('background', 'red');
					$('.modal-body').css('color', 'white');
					openModal("Error!", statusError);
					$('#submit').css("visibility", "visible");
				}
				
			},
            error: function(error){
                console.log(error);
            }
			
		})
		
		
	})

	var openModal = function (title, message) {

		$(".modal-title").html(title);
		$(".modal_message").html(message);
		$("#exampleModalCenter").modal();
	}
	

})

