<?php $this->load->view('include/header.php'); ?>


<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>About</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>About</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_about_area -->
<div class="hackery_about_area home1">
	<div class="container">
		<div class="row about_area">
			
			<div class="col-lg-12 col-md-12 col-sm-12 about_service">
				<div class="witr_section_right">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-left">
							<h2>About Us</h2>	
							<h6 style="font-size: 18px;">WELCOME TO ASR BIKE MECHANIC  YOUR DOORSTEP BIKE REPAIRING SERVICE MECHANICS MET IN DELHI AND NCR</h6>	
							<p>Bicycle sweethearts, day to day workers, and all bicycle riders in Delhi NCR, we take care of you. Quick and occupied existence of Delhi, Noida and Gurgaon truly merits the best Garage administrations at home. "TIME IS MONEY" and when Mechanic and Garage comes to you, you save time and ride joyfully.</p>

							<p>For a wide range of bicycle, we will come to your home or office with all bicycle devices and hardware to deal with your bicycles from bicycle overhauling to fixing. Carport available for any emergencies offer web based booking administrations for Bike overhauling and fixing at client favored area whether it's home or office in Noida, Greater Noida, Delhi and Gurgaon. Pick a very capable and experienced specialist through our entryway we send technician at your home to fix any sort of bicycle related issue or normal bicycle overhauling at home. You can book online carport administrations for a bicycle overhauling at home in Noida, Gr.Noida and Delhi.</p>

							<p>We fill in according to client accommodation we give choice to redo date, time allotment and so on for booking then we send our Mechanic at home.

							Our group of enthusiastic and devoted experts can likewise help you at your office wellbeing and health program support for street security, street rule and guidelines preparing and so on. We work with corporate too who involved bicycles for ride business or food conveyance and so on to welcome top quality bicycle administration on location.

							Carport On Call expects to refresh, wellness and quality upkeep of your bike.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- hackery_team_area -->
<div class="hackery_team2_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">		
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-left">
						<h3>Meet our Engineers</h3>		
					</div>
				</div>	
			</div>	
		</div>
		<div class="witr_team_area_c team_top">
			<div class="row post_team_idteam">
				<!-- hackery_team_01 -->
				<?php 
				$this->db->order_by('id desc');
				$engin = $this->crud->selectDataByMultipleWhere('engineer',array('status'=>1,));
				foreach($engin as $data)
					{ ?>
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team">
						<div class="witr_team_section">
							<img src="<?php echo base_url(); ?>media/uploads/engineer/<?php echo $data->image; ?>" alt="" />
						</div> 
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#" ><?php echo $data->name; ?> </a></h5>
							<span><?php echo $data->work_p; ?> </span>	
						</div>								
					</div>
				</div>	
				<?php } ?>
			</div>	
		</div>	
	</div>	
</div>	
		








<?php $this->load->view('include/footer.php'); ?>
