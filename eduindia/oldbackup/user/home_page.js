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


//fetch course Category
$(document).on('change','#ins_id',function(){
	var ins_id = $(this).val(); 
	
	$('#ins_cat_id').html('<option>Select Course Category</option>');
	$('#s_course').html('<option>Select Course</option>');
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


//fetch course 
$(document).on('change','#ins_cat_id',function(){
	var f_course = $(this).val(); 
	
	if(f_course !==""){
		$.ajax({
			url:'ajax_to_php/admin_file.php',
			type:'POST',
			data:{f_course:f_course},
			success:function(r_data){  
					$('#s_course').html(r_data);
				 
			}
		});
	}
}); 

 
 

   
 

 




