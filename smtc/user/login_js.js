//Validated user name & Password
$(document).on('click','#login_btn',function(){
	var lup    = $('#login_user_password').val();
	var lun    = $('#login_user_name').val();
	if(lun !=="" && lup !==""){
		
		$.ajax({
			url:'ajax_to_php/admin_login.php',
			type:'POST',
			data:{lun:lun,lup:lup},
			success:function(rd){ 

				if(rd==1){
					  
					//Set Value
					$('.user_title').html('Checking... Please Wait').css("color", "#45bf1f");
					//Send on page
					setTimeout(function(){
						$('.user_title').html('Welcome to User').css("color", "#45bf1f");
						 window.location.href='welcome.php';
					},1000);
				}else if(rd==2){
				    
				    $('.user_title').html('Payment is Pending Please Contact to Admin').css("color", "#ab0000");
				    
				}else if(rd==3){
				    
				    $('#login_user_password').removeClass('input_success').addClass('input_error');
				    //Set Value
					$('.user_title').html('Student Password is wrong').css("color", "#ab0000");
					
			    }else if(rd==4){
					
					//Add Class
					$('#login_user_name').removeClass('input_success').addClass('input_error');
					
					//Set Value
					$('.user_title').html('Student Registration Id is wrong').css("color", "#ab0000");
				    
			    }else{
					console.log(rd);
				}
			}
		});
	}
	
	return false;
	
	
});
//Validated Logout
$(document).on('click','#logout',function(){
	$.ajax({
			url:'ajax_to_php/admin_login.php',
			type:'POST',
			data:{logout:'Yes'},
			success:function(rd){ 
			  if(rd==1){
				  window.location.href='index.php';
			  }else{
				  console.log(rd);
			  }
			   
			}
	});
	return false;
});
