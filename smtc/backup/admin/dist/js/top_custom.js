$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});




//hide and show object
function hide_obj(h,s){
	$(h).hide();
	$(s).show();
}

// HIDE AND SHOW All
function hideall(h){$(h).hide();}
function showall(s){$(s).show();}
 
//ADMIN LOGIN CODE
$(document).on('submit','#myloginform',function(){
 	var adminemail    = $('#admin_email').val();
	var adminpassword = $('#admin_password').val();
	var error		  = 'animated  bounce  error';
	var showerror	  = $('#loginerror');
	 
    if( (adminemail=="") && (adminpassword=="") ){
		 showerror.html("<span style='color:#f00'>Invalid Login</span>");
		 $('.seconderror').addClass(error);
		 $('.firsterror').addClass(error);
		 setTimeout(function(){
		   showerror.html('Login to Befikrbuy Super Dashboard');	
			$('.firsterror').removeClass(error);			
			$('.seconderror').removeClass(error);			
			},1500);
		 return false;
		 
	}
	
	else if(adminemail == ""){
		showerror.html("<span style='color:#f00'>Email is Required</span>");
		$('.firsterror').addClass(error);
		setTimeout(function(){
		   showerror.html('Login to Befikrbuy Super Dashboard');	
			$('.firsterror').removeClass(error);			
			},1500);
		return false;
	}
	else if(adminpassword==""){
		showerror.html("<span style='color:#f00'>Password is Required</span>");
		$('.seconderror').addClass(error);
		setTimeout(function(){
			    showerror.html('Login to Befikrbuy Super Dashboard');	
				$('.firsterror').removeClass(error);
			 },1500);
		return false;
	}
	else{
		$.ajax({
			url : 'ajax_to_php/admin_file.php',
			method: 'POST',
			data:$(this).serialize(),
			  beforeSend: function() { 
				$('#adminloginbtn').html('..............loading............');
			},
			success:function(responce){  
				$('#adminloginbtn').html('Login Dashboard'); 
				 if(responce==1){
					showerror.html("<span style='color:#2db10e;'>Welcome To Befikrbuy Admin </span>"); 
					setTimeout(function(){
						 window.location.href='welcome.php';
					 
						
					},1000);
				}
				else if(responce==0){
					showerror.html("<span style='color:#f00;'>Email or Password is Error</span>"); 
				}
				else{
					showerror.html(responce); 
				}
				 
			}
		});
		return false;
	}
});
 


