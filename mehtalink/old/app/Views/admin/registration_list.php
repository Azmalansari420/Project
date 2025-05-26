
<?php if(!isset($page_type)){$page_type=0;} 
$uri = service('uri');
$currentpage=$uri->getSegment(3);
$array=combine_array();

?>
  <div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Registration List</h1>
            <hr />
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              
              <!-- /.card-header -->
			  <form action="<?php echo base_url('cpdadmin/multicheck');?>" method="post">
				
				
              <div class="card-body">
			  <input type="checkbox" id="check_all"/> &nbsp;Check All
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
                    <th>Sn</th>
                    <th>Profile</th>
					<th>Permanent Address</th>
					<th>Physical Attributes</th>
					
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; if($user) { foreach($user as $values) { ?>
				  <tr>
				  <td><?=$i;?></td>
				  <td>
				  {"First Name":"<?=$values->f_name;?>"}</br>
				  {"Last Name":"<?=$values->l_name;?>"}</br>
				  {"Gender":"<?=$values->gender;?>"}</br>
				  {"Email":"<?=$values->email;?>"}</br>
				  {"DOB":"<?=$values->dob;?>"}</br>
				  {"Marital Status":"<?=$values->marital_status;?>"}</br>
				  {"Number Of Children":"<?=$values->number_children;?>"}</br>
				  {"Area":"<?=$values->area;?>"}</br>
				  {"On Behalf":"<?=$values->behalf;?>"}</br>
				  {"Mobile":"<?=$values->mobile;?>"}</br>
				  {"Budget":"<?=$values->budget;?>"}</br>
				  {"Family Annual Income":"<?=$values->family_annual_income;?>"}</br>
				  {"Annual Income Bride Groom":"<?=$values->annual_income_bride_groom;?>"}</br>
				  {"Profession":"<?=$values->behalf;?>"}</br>
				  
				  
				  </td>
				  <td>
				  {"As Sun":"<?=$values->as_sun;?>"}</br>
				  {"As Moon":"<?=$values->as_moon ;?>"}</br>
				  {"Time Of Birth":"<?=$values->as_birth ;?>"}</br>
				  {"City Of Of Birth":"<?=$values->as_birth_city ;?>"}</br>
				 
				  
				  
				  </td>
				  <td>
				  {"Height":"<?=$values->height;?>"}</br>
				  {"Weight":"<?=$values->weight;?>"}</br>
				  {"Eye Color":"<?=$values->eye_color;?>"}</br>
				  {"Hair Color":"<?=$values->hair_color ;?>"}</br>
				  {"Complexion":"<?=$values->complexion ;?>"}</br>
				  {"Blood Group":"<?=$values->blood_group ;?>"}</br>
				  {"Body Type":"<?=$values->body_type ;?>"}</br>
				  {"Body Art":"<?=$values->body_art ;?>"}</br>
				  {"Any Disability":"<?=$values->disability ;?>"}</br>
				  </td>
				  
                   <td>

					<a class="btn btn-warning btn-xs" href="javascript:;" data-toggle="modal" data-target="#myModal<?=$values->id;?>" title="View">View</a>
					
					<a class="btn btn-danger btn-xs" href="<?=base_url('cpdadmin/deletewidthfile/'.$values->id);?>/tbl_registration/registration_list/" onclick="return confirm('Are you sure to delete this records')"  title="Delete">Delete</a>
                    
				</td>
                 
                  </tr>
                  <?php $i++; } } ?>
                 
                  </tbody>
                  
                </table>
				
				
			
           
			
              </div>
			  
			  

			</form>				
			  <?php $i=1; if($user) { foreach($user as $values) { ?>
			  <!---Popup Start--->
			  <div class="modal fade" id="myModal<?=$values->id;?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <p>Product Detail</p>
		  <div class="col-md-12">
		  <h3>Language</h3>
		  <hr>
		  <p><strong>Tongue</strong>:<?=$values->tongue;?></br>
		  <strong>Language</strong>:<?=$values->language;?></br>
		  <strong>Speak</strong>:<?=$values->speak;?></br>
		  <strong>Read</strong>:<?=$values->read;?></p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Personal Attitude And Behavior</h3>
		  <hr>
		  <p><strong>Affection</strong>:<?=$values->affection;?></br>
		  <strong>Humor</strong>:<?=$values->humor;?></br>
		  <strong>Political</strong>:<?=$values->political;?></br>
		  <strong>RELIGIOUS Service</strong>:<?=$values->service;?></p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Residency Information</h3>
		  <hr>
		  <p>
		  <strong>Birth Country</strong>:<?=$values->birth_country;?></br>
		  <strong>Residency Country</strong>:<?=$values->residency_country;?></br>
		  <strong>Citizenship Country</strong>:<?=$values->citizenship_country;?></br>
		  <strong>Grow Up Country</strong>:<?=$values->grow_up_country;?></br>
		  <strong>Immigration Status</strong>:<?=$values->immigration;?></br>
		  </p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Spiritual And Social Background</h3>
		  <hr>
		  <p>
		  <strong>Religion</strong>:<?=$values->religion1;?></br>
		  <strong>Cast</strong>:<?=$values->cast;?></br>
		  <strong>Grow Up Country</strong>:<?=$values->grow_up_country1;?></br>
		  <strong>Ethnicity</strong>:<?=$values->ethnicity;?></br>
		  <strong>Personal Value</strong>:<?=$values->personal_value;?></br>
		  <strong>Family Value</strong>:<?=$values->family_value;?></br>
		  <strong>Community Value</strong>:<?=$values->community_value;?></br>
		  <strong>Family Status</strong>:<?=$values->family_status;?></br>
		  <strong>Mangalick</strong>:<?=$values->mangalick1;?></br>
		  </p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Life Style</h3>
		  <hr>
		  <p>
		  <strong>Diet</strong>:<?=$values->ldiet;?></br>
		  <strong>Drink</strong>:<?=$values->ldrink;?></br>
		  <strong>Smoke</strong>:<?=$values->lsmoke;?></br>
		  <strong>Living</strong>:<?=$values->lliving;?></br>
		  </p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Astronomic information</h3>
		  <hr>
		  <p>
		  <strong>As Sun</strong>:<?=$values->as_sun1;?></br>
		  <strong>As Moon</strong>:<?=$values->as_moon1;?></br>
		  <strong>TIME OF BIRTH</strong>:<?=$values->as_birth1;?></br>
		  <strong>CITY OF BIRTH</strong>:<?=$values->as_birth_city1;?></br>
		  </p>
		  </div>
		  <div class="col-md-12">
		  <h3>Permanent Address</h3>
		  <hr>
		  <p>
		  <strong>As Sun</strong>:<?=$values->as_sun2;?></br>
		  <strong>As Moon</strong>:<?=$values->as_moon2;?></br>
		  <strong>TIME OF BIRTH</strong>:<?=$values->as_birth2;?></br>
		  <strong>CITY OF BIRTH</strong>:<?=$values->as_birth_city2;?></br>
		  </p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Additional personal details</h3>
		  <hr>
		  <p>
		  <strong>HOME DISTRICT</strong>:<?=$values->add_home_district;?></br>
		  <strong>FAMILY RESIDENCE</strong>:<?=$values->add_family_residency;?></br>
		  <strong>FATHER'S OCCUPATION</strong>:<?=$values->add_father_occupation;?></br>
		  <strong>SPECIAL CIRCUMSTANCES</strong>:<?=$values->add_special;?></br>
		  </p>
		  </div>
		  
		  <div class="col-md-12">
		  <h3>Partner Expectation</h3>
		  <hr>
		  <p>
		  <strong>GENERAL REQUIREMENT</strong>:<?=$values->perm_general_requir;?></br>
		  <strong>AGE</strong>:<?=$values->perm_age;?></br>
		  <strong>FATHER'S OCCUPATION</strong>:<?=$values->perm_father_occup;?></br>
		  <strong>SPECIAL CIRCUMSTANCES</strong>:<?=$values->perm_special_cir;?></br>
		  <strong>MARITAL STATUS</strong>:<?=$values->perm_marital_status;?></br>
		  <strong>WITH CHILDREN ACCEPTABLES</strong>:<?=$values->perm_children_accep;?></br>
<strong>COUNTRY OF RESIDENCE</strong>:<?=$values->perm_country_of_residency;?></br>
<strong>RELIGION</strong>:<?=$values->perm_religion;?></br>
<strong>CASTE</strong>:<?=$values->perm_cast;?></br>
<strong>EDUCATION</strong>:<?=$values->perm_cast;?></br>
<strong>PROFESSION</strong>:<?=$values->perm_profession;?></br>
<strong>DRINKING HABITS</strong>:<?=$values->perm_drinking_habits;?></br>
<strong>SMOKING HABITS</strong>:<?=$values->perm_smoking_habits;?></br>
<strong>DIET</strong>:<?=$values->perm_diet;?></br>
<strong>BODY TYPE</strong>:<?=$values->perm_body_type;?></br>
<strong>PERSONAL VALUE</strong>:<?=$values->perm_personal_value;?></br>
<strong>MANGLIK</strong>:<?=$values->perm_manglik;?></br>
<strong>ANY DISABILITY</strong>:<?=$values->perm_any_disability;?></br>
<strong>MOTHER TONGUE</strong>:<?=$values->perm_mother_tongue;?></br>
<strong>FAMILY VALUE</strong>:<?=$values->perm_family_value;?></br>
<strong>PREFERED COUNTRY</strong>:<?=$values->perm_prefered_country;?></br>
<strong>PREFERED STATE</strong>:<?=$values->perm_prefered_state;?></br>
<strong>PREFERED STATUS</strong>:<?=$values->perm_prefered_status;?></br>
<strong>COMPLEXION</strong>:<?=$values->perm_complexion;?></br>
<strong>MARRIAGE BUDGET</strong>:<?=$values->perm_budget;?></br>
<strong>FAMILY ANNUAL INCOME</strong>:<?=$values->perm_family_annual_income;?></br>
<strong>ANNUAL INCOME (BRIDE/GROOM)</strong>:<?=$values->perm_annual_income_bride_groom;?></br>
<strong>Profession</strong>:<?=$values->profession01;?></br>
<strong>Profession</strong>:<?=$values->profession02;?></br>
<strong>Profession</strong>:<?=$values->profession03;?></br>
<strong>Profession</strong>:<?=$values->profession04;?></br>
<strong>Profession</strong>:<?=$values->profession05;?></br>
<strong>Profession</strong>:<?=$values->profession06;?></br>
<strong>Profession</strong>:<?=$values->profession07;?></br>
<strong>Profession</strong>:<?=$values->profession08;?></br>
		  </p>
		  </div>
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
   <?php $i++; } } ?>
			  <!---Popup End--->
			  
			  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  