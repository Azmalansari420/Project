//=================== Define Global Varible =====================>>>>>>>>>>
var notifi 		 = $('#notification');
var inner_notifi = $('.inner_notification');
var show_notifi  = 'show_notifiaction';

//=================== Successfull Notification  =====================>>>>>>>>>>
function notification(message,loadform){
	    $(loadform)[0].reset();
		notifi.addClass(show_notifi); //Show Notification
	    
		inner_notifi.html(message); //In Notification Content
		
		//Hide Notification
		setTimeout(function(){
		   notifi.removeClass(show_notifi);
		},1000); 
}

//=================== Edit Notification  =====================>>>>>>>>>>
function edit_notification(message,location_name){
	notifi.addClass(show_notifi); //Show Notification
	inner_notifi.html(message);  //In Notification Content
    //Hide Notification
	setTimeout(function(){
	   notifi.removeClass(show_notifi);
	   //hide tabel tr
	   location.href=location_name;
    },1000);
						 
}
//=================== All Delete JS =====================>>>>>>>>>>
function all_delete(data_id,hide_id,aj_cov,locat,del_img=null,mes=null){
	$('#conformpopup').show();
	var  id      = data_id; 
	var hide_tr  = hide_id+id;  
	$('#yesdelete').click(function(){
		$.ajax({
			   url:locat +'.php?' +aj_cov+ '=' +id+'&del_old_img='+del_img,  
			   success:function(responce){ 
				   if(responce==1){
					   
					   $('#conformpopup').hide();//Hide confirm popup
					   
					   
					   notifi.addClass('show_notifiaction');//Show Notification
					   if(mes==null){
						   var mes = 'Successful Delete';
					   }
					   
					   inner_notifi.html(mes);//In Notification Content
					   
					   //Hide Notification
					   setTimeout(function(){
						   notifi.removeClass('show_notifiaction'); 
							$(hide_tr).animate({
								background:"#fff",
								opacity: "hide"
								}, 'slow');
								
					   },1000);
					   
				   }
			   }
		}); 
	});
}
 
 
//=================== Add Menu JS  =================>>>>>>>>>>
  
$(document).on('submit','#add_menu_form',function(){  
	var menu_position      = $('#menu_position').val();
	var menu_name          = $('#menu_name').val(); 
	var sort_order         = $('#sort_order').val(); 
	var error		       = $('#submenu_error');
	var back 		       = setTimeout(function(){
								error.html("");
							},1500); 
	   
	if(menu_position == ""){
	    error.html("Menu Position is Required*");
		return false;
	}
	else if(menu_name == ""){
		error.html("Menu Name is required"); 
		return false;
	}
	else if(sort_order == ""){
	    error.html("Sort Order is required"); 
	    return false;
	}
	else{
			$.ajax({
				url:'ajax_file_php.php',
				type:'post',
				data:$(this).serialize(),
				success:function(responce){ 
				   if(responce == 1){
							  
						//This Funtion Use For Notification  and This Function Define on menu.js page
						notification('Successfull Add Top Submenu','#add_menu_form');
							   
					} 
				}
			}); 
		  return false;
		}  
		   
 
	   
});

//===================\\ Edit Menu =================>>>>>>>>>> 
  
$(document).on('submit','#menu_form_edit',function(){   
	var edit_menu_name     = $('#edit_menu_name').val(); 
	var sort_order         = $('#sort_order').val(); 
	var error		       = $('#menu_error');
	var back 		       = setTimeout(function(){
								error.html("");
							},1500); 
	 if(edit_menu_name == ""){
		error.html("Menu Name is required"); 
		return false;
	}
	else if(sort_order == ""){
	    error.html("Sort Order is required"); 
	    return false;
	}
	else{
			$.ajax({
				url:'ajax_file_php.php',
				type:'post',
				data:$(this).serialize(),
				success:function(responce){  
				   if(responce == 1){
							  
						//This Funtion Use For Notification  and This Function Define on menu.js page
						edit_notification('Successfull Update Menu','menu-list.php');
							   
					} 
				}
			}); 
		  return false;
		} 
});
//===================\\ ADD SUB CATEGORY CODE =================>>>>>>>>>>
$(document).on('submit','#add_sub_cat_form',function(event){
	event.preventDefault();
	
	var shp                =  $('#shp').val(); 
	var menu_id            =  $('#menu_id').val(); 
	var category_name      =  $('#category_name').val();
	var category_img       =  $('#category_img').val(); 
	var cat_img_extension  =  category_img.split('.').pop().toLowerCase();
	var sort_order         =  $('#sort_order').val(); 
	var error		       =  $('#category_error');
	var back 		       =  setTimeout(function(){
								error.html("");
							  },1500);
 
	if(menu_id == ""){
	    error.html("Inner Topmenu is  Required *");
		back;
		return false;
	}
	else if(category_name == ""){
	    error.html("Category Name is Required *");
		back;
		return false;
	}
	    
	else if(sort_order == ""){
	    error.html("Sort Order is Required *");
	    back;
	    return false;
	}
	else if(category_img == ""){
		error.html("Category Image Required *");
		back;
		return false;
	}
	else if($.inArray(cat_img_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
		error.html("File Type is JPG JPEG PNG GIF");
		back;
		return false;
	}  
	else{
	    $.ajax({
			url:'ajax_file_php.php',
			type:'post',
			data: new FormData(this),
			contentType:false,
			processData:false,
			success:function(responce){   
				  if(responce == 1){
					   
					//This Funtion Use For Notification  and This Function Define on menu.js page
					
						notification('Successfull Add Category','#add_sub_cat_form');
					    
				   }else{
					    error.html("File Max Upload Size 2mb");
						back;
						return false;
				   }
			   }
		   });
		return false;
	   }  
});

//===================\\ EDIT CATEGORY  =================>>>>>>>>>>
$(document).on('submit','#edit_category_form',function(event){
	event.preventDefault();
	var update_id          =  $('#update_id').val(); 
	var shp                =  $('#shp').val();
	var submenu_id         =  $('#submenu_id').val(); 
	var edit_category_name =  $('#edit_category_name').val();
	var category_img       =  $('#category_img').val();
	var cat_img_extension  =  category_img.split('.').pop().toLowerCase();
	var old_category_img   =  $('#old_category_img').val();
	var sort_order         =  $('#sort_order').val();
	var category_status    =  $('#category_status').val(); 
	var error		       =  $('#category_error');
	var back 		       =  setTimeout(function(){
								error.html("");
							  },1500);
	 
	   
	   
	if(submenu_id == ""){
		error.html("Inner Submenu is Required *");
		back;
		return false;
	}   
    else if(edit_category_name == ""){
	    error.html("Category Name is Required *");
		back;
		return false;
	}
	    
	else if(sort_order == ""){
	    error.html("Sort Order is Required *");
	    back;
	    return false;
	}
	else if(category_img == ""){
		if(category_status == ""){
		   error.html("Category Status Required *");
		   back;
		   return false;
	    }
		else{
			$.ajax({
			url:'ajax_file_php.php?old_category_img='+old_category_img,
			type:'post',
			data: new FormData(this),
			contentType:false,
			processData:false,
			success:function(responce){   			
				  if(responce == 1){
					   
					//This Funtion Use For Notification  and This Function Define on menu.js page
					edit_notification('Successfull Update Category','sub-category-list.php');
					    
				   } 
			   }
		   });
		return false; 
		}
	} 
	else if($.inArray(cat_img_extension, ['gif','jpg','png','jpeg','bmp']) == -1) {
		error.html("File Type is JPG JPEG PNG GIF");
		back;
		return false;
	    }
	 else{		
	    $.ajax({
			url:'ajax_file_php.php',
			type:'post',
			data: new FormData(this),
			contentType:false,
			processData:false,
			success:function(responce){    
				  if(responce == 1){
					   
					//This Funtion Use For Notification  and This Function Define on menu.js page
					edit_notification('Successfull Update Category','sub-category-list.php');
					    
				   }else{
					    error.html("File Max Upload Size 2mb");
						back;
						return false;   
				   }
			   }
		   });
		return false;
	   }  
 
});




 

//============================= ADD PAGE =======================>>>>>>>>>>>>
$(document).on('submit','#add_page_form',function(event){
	event.preventDefault();
	var page_menu_id     = $('#page_menu_id').val();
	var page_name        = $('#page_name').val();
	var page_content     = $('#page_content').val();
	var page_order       = $('#page_order').val();
	var page_status      = $('#page_status').val();
	var error		     =  $('#page_error');
	var back 		     =  setTimeout(function(){
								error.html("");
							  },1500);
	if(page_menu_id==""){
		error.html("Page Footer menu Required * ");
		back;
		return false;
	}
	if(page_name==""){
		error.html("Page Name is Required * ");
		back
		return false;
	}
	else if(page_content==""){
		error.html("Page Content is Required * ");
		back
		return false;
	}
	else if(page_order==""){
		error.html("Page order is Required * ");
		back
		return false;
	}
	else{
		$.ajax({
			url:'ajax_file_php.php',
			type:'post',
			data:$(this).serialize(),
			success:function(responce){  
				  if(responce == 1){
					   
					//This Funtion Use For Notification  and This Function Define on menu.js page
					notification('Successfull Add Page','#add_page_form');
					$('#cke_1_contents').empty();
					    
				   } 
			   }
		   });
		return false;
	}
});


//=================== Edit PAGE ===============================>>>>>>>>>>>>
$(document).on('submit','#edit_add_page_form',function(){
	var page_submenu_id  = $('#page_submenu_id').val();
	var edit_page_name   = $('#edit_page_name').val();
	var page_content     = $('#page_content').val();
	var page_order       = $('#page_order').val();
	var page_status      = $('#page_status').val();
	var error		     =  $('#page_error');
	var back 		     =  setTimeout(function(){
								error.html("");
							  },1500);
	if(page_submenu_id==""){
		error.html("Page Submenu is Required * ");
		back;
		return false;
	}
	if(edit_page_name==""){
		error.html("Page Name is Required * ");
		back;
		return false;
	}
	else if(page_content==""){
		error.html("Page Content is Required * ");
		back;
		return false;
	}
	else if(page_order==""){
		error.html("Page order is Required * ");
		back;
		return false;
	}
	else{
		$.ajax({
			url:'ajax_file_php.php',
			type:'POST',
			data:$(this).serialize(),
			success:function(responce){  
			 
			  if(responce == 1){
					   
					//This Funtion Use For Notification  and This Function Define on menu.js page
					edit_notification("Successfull Update Page","page-list.php");
					    
				   } 
			   }
		   });
		return false;
	}
});