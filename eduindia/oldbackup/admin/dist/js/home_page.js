var notifi 		 = $('#notification');
var inner_notifi = $('.inner_notification');
var show_notifi  = 'show_notifiaction';

//Successfull Notification function
function notification(message,loadform){
	    $(loadform)[0].reset(); 
		notifi.addClass(show_notifi); //Show Notification
	    
		inner_notifi.html(message); //In Notification Content
		
		//Hide Notification
		setTimeout(function(){
		   notifi.removeClass(show_notifi);
		 	
		},1000); 
}
 

//add more listing images
$(document).on('click','.add_more_product_images',function(){ 
   var apend_img = "<div class='col-sm-12 innermultiimg' id='innermultiimg'><div class='col-sm-6'><input type='file' id='multi_product_images' class='form-control' accept='image/*' name='multi_product_images[]'><span id='show_img__error'></span></div><span class='remove_more_product_images'>Remove </span></div>";
   $('.outmultiimg').append(apend_img);
});
//Remove images option
$(document).on('click','.remove_more_product_images',function(){
     var revome_img = $(this).parent().remove();
	 
});


////Full Width Banner
$(document).on('submit','#add_full_with_banner',function(){
	var banner_type        = $('#banner_type').val();
	var error		       = $('#cms_error');
	var back 		       = setTimeout(function(){
								error.html('');
							},1500); 
	if(banner_type ==""){
		error.html('Category Name is Required*');
		$('#banner_type').focus().addClass('show_error');
		return false;
	}else{
		return true;
	}
});

//chagne full width banner category
$(document).on('change','#banner_type',function(){
	var check_type = $(this).val();
	if(check_type=="S_c"){
		$('#outer_cat_ids').show();
	}else{
		$('#outer_cat_ids').hide();
	}
})




//fetch sub category listing
$(document).on('change','#listing_category',function(){
	var list_cat_fetch_id = $(this).val();
	
	if(list_cat_fetch_id !==""){
		$.ajax({
			url:'ajax_to_php/ajax_to_php.php',
			method:'POST',
			data:{list_cat_fetch_id:list_cat_fetch_id},
			success:function(data){
				$('#listing_sub_category').html(data);
			}
		});
	}
});
 
 

//fetch course Category
$(document).on('change','#ins_id',function(){
	var ins_id = $(this).val(); 
	$('#s_course').html('<option value="">Select Course</option>');
	if(ins_id !==""){
		$.ajax({
			url:'ajax_to_php/admin_file.php',
			type:'POST',
			data:{ins_id:ins_id},
			success:function(r_data){  
					$('#ins_cat_id').html(r_data);
				 
			}
		});
	}
}); 
 
//Get fetch course by course cat id
$(document).on('change','#ins_cat_id',function(){
	var ins_cat_id = $(this).val(); 
	if(ins_cat_id !==""){
		$.ajax({
			url:'ajax_to_php/admin_file.php',
			type:'POST',
			data:{ins_cat_id:ins_cat_id},
			success:function(r_data){  
					$('#s_course').html(r_data);
				 
			}
		});
	}
}); 
 
 //show all subject
$(document).on('change','#s_course',function(){ 
	var s_course_id  = $(this).val();
	var check_second = $('.check_second').val();

	if(s_course_id !==""){

	    if(check_second==1){
			$('#show_all_subject').html('');
		
			$('.selected_all_subject').show();
		    $.ajax({
				url:'ajax_to_php/admin_file.php',
				method:'post',
				data:{s_course_id:s_course_id},
				success:function(fd){
					if(fd == 0){
					   $('#selected_all_subject').html('<p class="text-danger">Not Join Subject This Course</p>');	
					   
					}else{
						$('#selected_all_subject').html(fd);		
					}
					
					
				}
			});
		
			$('#show_outer_select').show();
			$('#show_all_subject').load('fetch_all_subject.php?sc_id='+s_course_id);	
			
	    }else{

			     $('#s_show_all_subject').html('');
				
					$('.s_selected_all_subject').show();
				    $.ajax({
						url:'ajax_to_php/admin_file.php',
						method:'post',
						data:{ss_course_id:s_course_id},
						success:function(fd){
							if(fd == 0){
							   $('#s_selected_all_subject').html('<p class="text-danger">Not Join Subject This Course</p>');	
							   
							}else{
								$('#s_selected_all_subject').html(fd);		
							}
							
							
						}
					});
				
					$('#s_show_outer_select').show();
					$('#s_show_all_subject').load('fetch_all_second_year_subject.php?sc_id='+s_course_id);
	    }
		
	}
});

  
 
//get city by state id 
$(document).on('change','#state_id',function(){
	var get_state_id = $(this).val(); 
	$('#city_id').html('<option value="">Select City</option>');
	if(get_state_id !==""){
		$.ajax({
			url:'ajax_to_php/admin_file.php',
			type:'POST',
			data:{get_state_id:get_state_id},
			success:function(r_data){  
					$('#district_id').html(r_data);
				 
			}
		});
	}
}); 


//get District by City id 
$(document).on('change','#district_id',function(){
	var get_dis_id = $(this).val(); 
	if(get_dis_id !==""){
		$.ajax({
			url:'ajax_to_php/admin_file.php',
			type:'POST',
			data:{get_dis_id:get_dis_id},
			success:function(r_data){  
					$('#city_id').html(r_data);
				 
			}
		});
	}
}); 


 
//ADD Category Code 
   $(document).on('submit','#add_category_form',function(){ 
	var cat_name           = $('#cat_name').val();
	
	var cat_img           =  $('#cat_img').val(); 
	var check_extension   = cat_img.split('.').pop().toLowerCase();	
	
	var error		       = $('#promo_error');
	var back 		       = setTimeout(function(){
								error.html('');
							},1500); 

	if(cat_name == ''){
		error.html('Category Name is Required*');
		$('#cat_name').focus().addClass('show_error');
			setTimeout(function(){
				$('#cat_name').removeClass('show_error');
		},1500); 
	   return false;	
	} 
	if(cat_img !==""){
		if($.inArray(check_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
		  error.html("File Type is JPG JPEG PNG GIF");
		  return false;
	    }else{
			$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST', 	
			 data: new FormData(this), 
			  beforeSend: function() { 
				$('#add_cat_btn').html('Loading...');
				$('#add_cat_btn').attr('disabled',true);
				},
			 contentType:false, 
			 processData:false,			 
			 success:function(data){
				$('#add_cat_btn').html('<i class="fa fa-save"></i> Save');				 
				 if(data==1){
					//This Funtion Use For Notification And This Function Define on menu.js page
					notification('Successfull Add Category Code','#add_category_form',);
					$('#add_cat_btn').attr('disabled',false);
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
				    $('#add_cat_btn').attr('disabled',false);
				}else{
				    error.html(data);	   
				}  
			 }
		 });
		 return false;
		}
	}
	else{
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST', 	
			 data: new FormData(this), 
			  beforeSend: function() { 
				$('#add_cat_btn').html('Loading...');
				$('#add_cat_btn').attr('disabled',true);
				},
			 contentType:false, 
			 processData:false,			 
			 success:function(data){
				$('#add_cat_btn').html('<i class="fa fa-save"></i> Save');				 
				 if(data==1){
					//This Funtion Use For Notification And This Function Define on menu.js page
					notification('Successfull Add Category Code','#add_category_form',);
					$('#add_cat_btn').attr('disabled',false);
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
				    $('#add_cat_btn').attr('disabled',false);
				}else{
				    error.html(data);	   
				}  
			 }
		 });
	   return false;
	}  
 return false;
   });

//Edit Category Code 
$(document).on('submit','#update_category_form',function(){  
	var edit_cat_name           = $('#edit_cat_name').val();
	
	var edit_cat_img            =  $('#edit_cat_img').val(); 
	var check_extension         = edit_cat_img.split('.').pop().toLowerCase();	
   	
	var error		            = $('#promo_error');
	var back 		            = setTimeout(function(){
								error.html('');
							   },1500); 

	if(edit_cat_name == ''){
		error.html('Promo Name is Required*');
		$('#edit_cat_name').focus().addClass('show_error');
			setTimeout(function(){
				$('#edit_cat_name').removeClass('show_error');
		},1500); 
	   return false;	
	}
   if(edit_cat_img !==""){
		if($.inArray(check_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
		  error.html("File Type is JPG JPEG PNG GIF");
		  $('#edit_cat_img').focus().addClass('show_error');
			setTimeout(function(){
				$('#edit_cat_img').removeClass('show_error');
		 },1500);
		  return false;
	    }else{
			$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST', 	
			 data: new FormData(this), 
			  beforeSend: function() { 
				$('#update_cat_btn').html('Loading...');
				$('#update_cat_btn').attr('disabled',true);
				},
			 contentType:false, 
			 processData:false,			 
			 success:function(data){
				$('#update_cat_btn').html('<i class="fa fa-save"></i> Save');				 
				 if(data==1){
					//This Funtion Use For Notification And This Function Define on menu.js page
					edit_notification('Successfull Update Category','category-list.php',);
					$('#update_cat_btn').attr('disabled',false);
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
					$('#edit_cat_img').focus().addClass('show_error');
					setTimeout(function(){
						$('#edit_cat_img').removeClass('show_error');
					},1500);
				    $('#update_cat_btn').attr('disabled',false);
				}else{
				    error.html(data);	
					$('#update_cat_btn').attr('disabled',false);					
				}  
			 }
		 });
		 return false;
		}
	}	
	else{
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST',
			 data: new FormData(this), 
			  beforeSend: function() { 
				$('#update_cat_btn').html('Loading...');
				$('#update_cat_btn').attr('disabled',true);
				},
			 contentType:false, 
			 processData:false, 
			 success:function(data){  
			    $('#update_cat_btn').html('<i class="fa fa-save"></i> Update');	
				 if(data==1){
				    edit_notification('Successfull Update Category','category-list.php'); 
					$('#update_cat_btn').attr('disabled',false);
				 }else if(data==2){
					error.html("Image Upload Max Size 2Mb");
					$('#edit_cat_img').focus().addClass('show_error');
					setTimeout(function(){
						$('#edit_cat_img').removeClass('show_error');
					},1500);
				    $('#update_cat_btn').attr('disabled',false);					
				 }else{
				    error.html(data);	
					$('#update_cat_btn').attr('disabled',false);								
				}  
			 }
		 });
	   return false;
	}
});
 
//ADD Banner 
$(document).on('submit','#add_slier_form',function(){  
	 
	var banner_pic        =  $('#banner_pic').val(); 
	var check_extension   = banner_pic.split('.').pop().toLowerCase();	
	var error		      = $('#cms_error');
	var back 		      = setTimeout(function(){
								error.html('');
							},1500);  
							

	 if(banner_pic==""){
		error.html('Banner Images is Required*');
		$('#banner_pic').focus().addClass('show_error');
			setTimeout(function(){
				$('#banner_pic').removeClass('show_error');
		},1500); 
	    return false;
	}
	else if($.inArray(check_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
		error.html("File Type is JPG JPEG PNG GIF");
		$('#banner_pic').focus().addClass('show_error');
			setTimeout(function(){
				$('#banner_pic').removeClass('show_error');
		},1500); 
		return false;
	   }
	else{
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST',
			 data: new FormData(this), 
			  beforeSend: function() { 
				$('#cms_submit_btn').html('Loading...');
				$('#cms_submit_btn').attr('disabled',true);
				},
			 contentType:false, 
			 processData:false, 
		     success:function(data){  
			     $('#cms_submit_btn').html('<i class="fa fa-save"></i> Save');
				 if(data==1){
					notification('Successfull Add Banner','#add_slier_form');
					$('#cms_submit_btn').attr('disabled',false);
					
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
					$('#banner_pic').focus().addClass('show_error');
						setTimeout(function(){
							$('#banner_pic').removeClass('show_error');
					},1500); 
				    $('#cms_submit_btn').attr('disabled',false);
				}else{
				    error.html(data);
				    $('#cms_submit_btn').attr('disabled',false);
				}  
			 }
		 });
	   return false;
	}
}); 
  
//EDIT  Slider Home
$(document).on('submit','#edit_slider_form',function(){  
	  
	var edit_cms_pic      =  $('#edit_cms_pic').val();  
	var check_extension   = edit_cms_pic.split('.').pop().toLowerCase();		
	var error		      = $('#cms_error');
	var back 		      = setTimeout(function(){
								error.html('');
							},1500); 
	 
	 
	if(edit_cms_pic==""){
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST',
			 data: new FormData(this),
			 beforeSend: function() { 
				$('#cms_submit_btn').html('Loading...');
				$('#cms_submit_btn').attr('disabled',true);
				},
			 contentType:false,
			 processData:false, 
			 success:function(data){  
			     $('#cms_submit_btn').html('<i class="fa fa-save"></i> Update');
				 if(data==1){
					edit_notification('Successfull Update CMS','all-slider.php');
					$('#cms_submit_btn').attr('disabled',false);
					
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
				    $('#cms_submit_btn').attr('disabled',false);
				}else{
				    error.html(data);
				    $('#cms_submit_btn').attr('disabled',false);
				}  
			 } 
		 });
	   return false;
		
	}else{
		if($.inArray(check_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
			error.html("File Type is JPG JPEG PNG GIF");
			return false;
	    }
		else{
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST',
			 data: new FormData(this),
			 beforeSend: function() { 
				$('#cms_submit_btn').html('Loading...');
				$('#cms_submit_btn').attr('disabled',true);
				},
			 contentType:false,
			 processData:false, 
			 success:function(data){  
			     $('#cms_submit_btn').html('<i class="fa fa-save"></i> Update');
				if(data==1){
					edit_notification('Successfull Update Banner','all-slider.php');
					$('#cms_submit_btn').attr('disabled',false);
					
				 }else if(data==2){ 
				    error.html("Image Upload Max Size 2Mb");
				    $('#cms_submit_btn').attr('disabled',false);
				}else{
				    error.html(data);
				    $('#cms_submit_btn').attr('disabled',false);
				}   
			 }
		 });
	   return false;
	}
	}
});


//add top menu
$(document).on('submit','#add_right_category_form',function(){  
	var rcat_name  =  $('#rcat_name').val(); 
	var error	   = $('#promo_error');
	var back       = setTimeout(function(){
				       error.html('');
				     },1500); 
	
	if(rcat_name == ''){
		error.html('Right side Category Name is Required*');
		$('#rcat_name').focus().addClass('show_error');
			setTimeout(function(){
				$('#rcat_name').removeClass('show_error');
		},1500); 
	   return false;	
	}else{
		$.ajax({
			 url:'ajax_to_php/admin_file.php',
			 type:'POST',
			 data: $(this).serialize(), 
			 success:function(data){  
				if(data==1){
					notification('Successfull Add Right Category','#add_right_category_form');
					 
					
				 }else{
				    error.html(data);  
				}   
			 }
		 });
		return false;
	}			
    return false;
});

//add User Code
$(document).on('submit','#add_user_form',function(){ 
     var user_first_name = $('#user_first_name').val();
	 var user_email      = $('#user_email').val();
	 var user_mobile      = $('#user_mobile').val();
	 var user_o_l_pass      = $('#user_o_l_pass').val();
     var user_img = $('#user_img').val();
	 var check_extension   = user_img.split('.').pop().toLowerCase(); 
	 var error	   = $('#promo_error');
	 var back       = setTimeout(function(){
				       error.html('');
				     },1500); 
	 if(user_first_name==""){
		 error.html('User Name is Required*');
		$('#user_first_name').focus().addClass('show_error');
			setTimeout(function(){
				$('#user_first_name').removeClass('show_error');
		},1500); 
	   return false;
	 }else if(user_email==""){
		   error.html('User Email is Required*');
		$('#user_email').focus().addClass('show_error');
			setTimeout(function(){
				$('#user_email').removeClass('show_error');
		},1500); 
	   return false;
		 
	 }
	 var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	if (!filter.test(user_email)) {
		$('#user_email').focus().addClass('show_error');
		error.html('Email id is Invalid');; 
		setTimeout(function(){$('#user_email').removeClass('show_error');},4000);
		return false;
	}
	 
	 else if(user_mobile==""){
		  error.html('User Mobile is Required*');
		$('#user_mobile').focus().addClass('show_error');
			setTimeout(function(){
				$('#user_mobile').removeClass('show_error');
		},1500); 
	   return false;
		 
	 }
	 else if(user_o_l_pass==""){
		  error.html('User Password is Required*');
		$('#user_o_l_pass').focus().addClass('show_error');
			setTimeout(function(){
				$('#user_o_l_pass').removeClass('show_error');
		},1500); 
	   return false;
		 
	 }
	 else if(user_img !==""){
		 
		if($.inArray(check_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
			error.html("File Type is JPG JPEG PNG GIF");
			return false;
	    }
		else{
			$.ajax({
				 url:'ajax_to_php/admin_file.php',
				 type:'POST',
				 data: new FormData(this),
				 beforeSend: function() { 
					$('#add_user_btn').html('Loading...');
					$('#add_user_btn').attr('disabled',true);
					},
				 contentType:false,
				 processData:false, 
				 success:function(data){  
					 $('#add_user_btn').html('<i class="fa fa-save"></i> Save & Continue');
					if(data==1){
						notification('Successfull Add User','#add_user_form');
						$('#add_user_btn').attr('disabled',false);
						
					 }else if(data==2){ 
						error.html("Image Upload Max Size 2Mb");
						$('#add_user_btn').attr('disabled',false);
					}else{
						error.html(data);
						$('#add_user_btn').attr('disabled',false);
					}   
				 }
			 });
			return false;
		}
		
	 }else{
		 $.ajax({
				 url:'ajax_to_php/admin_file.php',
				 type:'POST',
				 data: new FormData(this),
				 beforeSend: function() { 
					$('#add_user_btn').html('Loading...');
					$('#add_user_btn').attr('disabled',true);
					},
				 contentType:false,
				 processData:false, 
				 success:function(data){  
					 $('#add_user_btn').html('<i class="fa fa-save"></i> Save & Continue');
					if(data==1){
						notification('Successfull Add User','#add_user_form');
						$('#add_user_btn').attr('disabled',false);
						
					 }else if(data==2){ 
						error.html("Image Upload Max Size 2Mb");
						$('#add_user_btn').attr('disabled',false);
					}else{
						error.html(data);
						$('#add_user_btn').attr('disabled',false);
					}   
				 }
			 });
		 return false;
	 }
	 return false;
});

 

 
//Print Invoice
function printDiv(divName) {
   var printContents    = document.getElementById(divName).innerHTML; 
   document.body.innerHTML = printContents;
   window.print();
	

	
}




