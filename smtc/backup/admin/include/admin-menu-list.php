<?php
$menu_bar_list = array(
				'1'=>array(
						'menu_name'=>'Location Detail',
						'menu_link'=>'#',
						'menu_type'=>1, // 0 Mean single menu and 1 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>' Add State | category-list.php',
											'2'=>' Add District | sub-category-list.php',
											'3'=>' Add City | sub_sub-category-list.php'
										  )
					),
				'2'=>array(
						'menu_name'=>'Course Detail',
						'menu_link'=>'#',
						'menu_type'=>1, // 0 Mean single menu and 1 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>' Add Specialization | add-specialization.php',
											'2'=>' Add Course Category | add-instiute.php',
											'3'=>'  
			Add Course Sub Category | add-institue-course-category.php',
			'4'=>'Add Course Sub Sub Category | add-course.php',
			//'5'=>'Add Subject | add-subject.php',				
			//'6'=>'Join Subjects With course | add-course.php',											
										  )
					),
				'3'=>array(
						'menu_name'=>'Students',
						'menu_link'=>'#',
						'menu_type'=>1, // 0 Mean single menu and 1 Mean Drop Down Menu
						'menu_icon'=>'fa fa-users',
						'menu_list'=>array(
											'1'=>' Add Students | add-student.php',
											'2'=>'All Students | all-student.php'
										  )
					),
					'30'=>array(
						'menu_name'=>'Fee Payment',
						'menu_link'=>'add-fee-payment.php',
						'menu_type'=>0, // 0 Mean single menu and 1 Mean Drop Down Menu
						'menu_icon'=>'fa fa-inr',
						'menu_list'=>array()
					),
				'4'=>array(
						'menu_name'=>'Generate Barcode',
						'menu_link'=>'genrate-barcode.php',
						'menu_type'=>0, // 0 Mean single menu and 1 Mean Drop 
						'menu_icon'=>'fa fa-picture-o',
						'menu_list'=>array()
					),
				'5'=>array(
						'menu_name'=>'Change Password',
						'menu_link'=>'change-password.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-key',
						'menu_list'=>array()
					),
				'6'=>array(
						'menu_name'=>'Marquee',
						'menu_link'=>'marquee.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-key',
						'menu_list'=>array()
					)
				 				
			);

?>