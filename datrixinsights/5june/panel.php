<?php include 'header.php';?>
<style>
    label {
    display: inline-block;
    font-size: 13px;
}
.btn-check:active+.btn-primary, .btn-check:checked+.btn-primary, .btn-primary.active, .btn-primary:active, .show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}
</style>

<section id="panel" class="panel">
   <div class="container">
       <div class="section-title">
          <h2>Join Our Panel</h2>
        </div>
        <div class="row">
            <div class="form">
			<form id="contactForm" action="https://www.voicalresearch.com/ajaxlib/member.php" method="post" class="cform" role="form" data-toggle="validator">
				<h3>Your Self</h3>			
					<div class="row">				 
						<div class="col form-group">
							<label>Enter Full Name *</label>
							<input class="form-control" name="memberName" type="text" id="memberName" placeholder="Name" required>
						</div>
						<div class="col form-group">
							<label>Email Address</label>
							<input class="form-control" name="email" type="email" id="email" placeholder="Email Address">
						</div>
						<div class="col form-group">
							<label>Date Of Birth *</label>
							<input class="form-control" type="date" name="dob" type="text" id="dob" placeholder="Age" required>
						</div>
					</div>
				<br>
					<div class="row">
						<div class="col form-group">
							<label>Gender *</label>
							<select class="form-control" name="gender" id="gender" required>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="col form-group">
							<label>Mobile Number *</label>
							<input type="text" minlength="10" maxlength="10" pattern="[0-9]{10}" class="form-control" name="mobileNo"  id="mobileNo" placeholder="Mobile" required>
						</div>
						<div class="col form-group">
							<label>Primary Language </label>
							<input class="form-control" name="primaryLanguage" type="text" id="primaryLanguage" placeholder="Primary Language" required>
						</div>
					</div>
				<br>
					<div class="row">
						<div class="col form-group">
							<label>Country *</label>
							<input class="form-control" type="text" name="country" id="country" required>
						</div>
						<div class="col form-group">
							<label>State *</label>
							<input class="form-control" type="text" name="State" id="State" required> 
						</div>
						<div class="col form-group">
							<label>City *</label>
							<input class="form-control" name="city" type="text" id="city" placeholder="City" required>
						</div>				
					</div>
				<br>			
					<div class="row">
						<div class="col form-group">
							<label>Street address *</label>
							<input class="form-control" name="address" type="text" id="address" placeholder="Street address" required>
						</div>				
						<div class="col form-group">
							<label>Zip code *</label>
							<input class="form-control" name="zipCode" type="text" id="zipCode" placeholder="Zip code" required> 
						</div>
						<div class="col form-group">
							<label>Please specify your ethnicity *</label>
								<select class="form-control" name="ethnicity" id="ethnicity" required>
									<option value="Select One">Select One</option>
									<option value="White">White</option>
									<option value="Hispanic or Latino">Hispanic or Latino</option>
									<option value="Black or African American">Black or African American</option>
									<option value="Native American or American Indian">Native American or American Indian</option>
									<option value="Asian / Pacific Islander">Asian / Pacific Islander</option>								
								</select>
						</div>
					</div>
				<br>				
					<h3>Education Details</h3>
					<div class="row justify-content-center">
						<div class="col-sm-12 form-group">
							<label>What is the highest degree or level of school you have completed?&nbsp;If currently enrolled, highest degree received.</label>
								<select class="form-control" name="education" id="education">
									<option value="Select One">Select One</option>
									<option value="Nursery school to 8th&nbsp;grade">Nursery school to 8th&nbsp;grade</option>
									<option value="Some high school, no diploma">Some high school, no diploma</option>
									<option value="High school graduate, diploma or the equivalent (for example: GED)">High school graduate, diploma or the equivalent (for example: GED)</option>
									<option value="Some college credit, no degree">Some college credit, no degree</option>
									<option value="Trade/technical/vocational training">Trade/technical/vocational training</option>
									<option value="Associate degree">Associate degree</option>
									<option value="Bachelor’s degree">Bachelor’s degree</option>
									<option value="Master’s degree">Master’s degree</option>
									<option value="Professional degree">Professional degree</option>
									<option value="Doctorate degree">Doctorate degree</option>
								</select>
						</div>				
					</div>
				<br>
					<h3>Household Composition</h3>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label>What is your marital status? </label>
								<select class="form-control" name="maritalStatus" id="maritalStatus">
									<option value="Select One">Select One</option>
									<option value="Single, never married">Single, never married</option>
									<option value="Married or domestic partnership">Married or domestic partnership</option>
									<option value="Widowed">Widowed</option>
									<option value="Divorced">Divorced</option>
									<option value="Separated">Separated</option>						
								</select>
						</div>
					</div>
				<br>
					<div class="row justify-content-center">
						<div class="col-sm-6 form-group">
							<label>Household Income</label>
							<input class="form-control" name="houseIncome" type="text" id="houseIncome" placeholder="Household Income">
						</div>
						<div class="col-sm-6 form-group">
							<label>Total number of Children</label>
							<input class="form-control" name="noOfChildren" type="text" id="noOfChildren" placeholder="Total number of Children">
						</div>
					</div>
				<br>			
					<h3>Professional Details</h3>			
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Employment Status</label>
							<select class="form-control" name="empStatus" id="empStatus">
								<option value="Select One">Select One</option>
								<option value="Employed for wages">Employed for wages</option>
								<option value="Self-employed">Self-employed</option>
								<option value="Employed full-time">Employed full-time</option>
								<option value="Employed part-time">Employed part-time</option>
								<option value="Contract, Freelance or Temporary Employee">Contract, Freelance or Temporary Employee</option>
								<option value="Out of work and looking for work">Out of work and looking for work</option>
								<option value="Out of work but not currently looking for work">Out of work but not currently looking for work</option>
								<option value="A homemaker">A homemaker</option>
								<option value="A student">A student</option>
								<option value="Military">Military</option>
								<option value="Retired">Retired</option>
								<option value="Unable to work">Unable to work</option>							
							</select>
						</div>
						<div class="col-sm-6 form-group">
							<label>Occupation</label>
							<input class="form-control" name="occupation" type="text" id="occupation" placeholder="Occupation">
						</div>
					</div>			          
						
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Annual income before taxes ?</label>
							<select class="form-control" name="incomeTax" id="incomeTax">
								<option value="Select One">Select One</option>
								<option value="Less than 15,000">Less than 15,000</option>
								<option value="15,000-24,999">15,000-24,999</option>
								<option value="25,000-49,999">25,000-49,999</option>
								<option value="50,000-74,999">50,000-74,999</option>
								<option value="75,000-99,999">75,000-99,999</option>
								<option value="100,000-149,999">100,000-149,999</option>
								<option value="150,000-199,999">150,000-199,999</option>
								<option value="200,000-249,999">200,000-249,999</option>
								<option value="250,000 or greater">250,000 or greater</option>								
							</select>
						</div>
						<div class="col-sm-6 form-group">
							<label>What is your job title, level or respnosibility ?</label>
							<select class="form-control" name="jobtitle" id="jobtitle">
								<option value="Select One">Select One</option>
								<option value="Company Owner/Founder">Company Owner/Founder</option>
								<option value="Partner">Partner</option>
								<option value="Board Director">Board Director</option>
								<option value="C-Level Executive">C-Level Executive</option>
								<option value="Senior Manager">Senior Manager</option>
								<option value="Middle Manager/Department Manager">Middle Manager/Department Manager</option>
								<option value="Junior Manager/Supervisor/Team Leader">Junior Manager/Supervisor/Team Leader</option>
								<option value="Non-Managerial Employee">Non-Managerial Employee</option>
								<option value="None of the above">None of the above</option>														
							</select>
						</div>
					</div>          			             
					<div class="row">
						<div class="col-sm-6 form-group">
                            <label>Which of the following best describes the industry that you, parsonally, work in ?</label>
                            <select class="form-control" name="industry" id="industry">
									<option value="Select One">Select One</option>
								<option value="Carpenting/Electrical Installations/VVS">Carpenting/Electrical Installations/VVS</option>
								<option value="Banking/Financial">Banking/Financial</option>
								<option value="Consumer Packaged Goods">Consumer Packaged Goods</option>
								<option value="Government/Public Sector">Government/Public Sector</option>
								<option value="Healthcare">Healthcare</option>
								<option value="Hospitality/Tourism">Hospitality/Tourism</option>
								<option value="Human Resources">Human Resources</option>
								<option value="Energy/Utilities/Oil and Gas">Energy/Utilities/Oil and Gas</option>
								<option value="Legal/Law">Legal/Law</option>
								<option value="Advertising">Advertising</option>
								<option value="Accounting">Accounting</option>
								<option value="Manufacturing">Manufacturing</option>
								<option value="Real Estate/Property">Real Estate/Property</option>
								<option value="Food/Beverage">Food/Beverage</option>
								<option value="Retail/Wholesale Trade">Retail/Wholesale Trade</option>
								<option value="Environmnetal Services">Environmnetal Services</option>
								<option value="Computer Reseller (Software/Hardware)">Computer Reseller (Software/Hardware)</option>
								<option value="Telecommunications">Telecommunications</option>
								<option value="Transportation">Transportation</option>
								<option value="Information Technology/IT">Information Technology/IT</option>
								<option value="Agriculture/Fishing">Agriculture/Fishing</option>
								<option value="Consumer Electronics">Consumer Electronics</option>
								<option value="Architecture">Architecture</option>
								<option value="Automotive">Automotive</option>
								<option value="Computer Hardware">Computer Hardware</option>
								<option value="Pharmaceuticals">Pharmaceuticals</option>
								<option value="Fashion/Apparel">Fashion/Apparel</option>
								<option value="Education">Education</option>
								<option value="Marketing/Sales">Marketing/Sales</option>
								<option value="Bio-Tech">Bio-Tech</option>
								<option value="Media/Entertainment">Media/Entertainment</option>
								<option value="Military">Military</option>
								<option value="Non Profit/Social Services">Non Profit/Social Services</option>
								<option value="Personal Services">Personal Services</option>
								<option value="Printing Publishing">Printing Publishing</option>
								<option value="Public Relation">Public Relation</option>
								<option value="Security">Security</option>
								<option value="Shipping/Distribution">Shipping/Distribution</option>
								<option value="Sales">Sales</option>
								<option value="Aviation">Aviation</option>
								<option value="Brokerage">Brokerage</option>
								<option value="Chemicals/Plastics/Rubber">Chemicals/Plastics/Rubber</option>
								<option value="Communication/Information">Communication/Information</option>
								<option value="Computer Software">Computer Software</option>
								<option value="Construction">Construction</option>
								<option value="Consulting">Consulting</option>
								<option value="Engineering">Engineering</option>
								<option value="Insurance">Insurance</option>
								<option value="Internet">Internet</option>
								<option value="Market Research">Market Research</option>
								<option value="Other">Other</option>
								<option value="I don't work">I don't work</option>									
							</select>
						</div>                                           
						<div class="col-sm-6 form-group">
                        <label>Approximately how many employees work at your organization (all locations) ?</label>
                            <select class="form-control" name="employeesNo" id="employeesNo">
								<option value="Select One">Select One</option>
								<option value="1 to 49 employees">1 to 49 employees</option>
								<option value="50 to 249 employees">50 to 249 employees</option>
								<option value="250 to 499 employees">250 to 499 employees</option>
								<option value="500 to 999 employees">500 to 999 employees</option>
								<option value="1,000 to 1,999 employees">1,000 to 1,999 employees</option>
								<option value="2,000 to 4,999 employees">2,000 to 4,999 employees</option>
								<option value="5,000 to 9,999 employees">5,000 to 9,999 employees</option>
								<option value="10,000 to 49,999 employees">10,000 to 49,999 employees</option>
								<option value="50,000+ employees">50,000+ employees</option>								
							</select>
						</div>  
					</div>                                               
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Please choose in which departments you work within your organization?</label>
							<select class="form-control" name="departments" id="departments">
								<option value="Select One">Select One</option>
								<option value="IT Hardware">IT Hardware</option>
								<option value="IT Software">IT Software</option>
								<option value="Printers and Coplers">Printers and Coplers</option>
								<option value="Financial Department">Financial Department</option>
								<option value="Human Resources">Human Resources</option>
								<option value="Office Supplies">Office Supplies</option>
								<option value="Corporate Travel">Corporate Travel</option>
								<option value="Telecommunication">Telecommunication</option>
								<option value="Sales">Sales</option>
								<option value="Shipping">Shipping</option>
								<option value="Operations">Operations</option>
								<option value="Legal Services">Legal Services</option>
								<option value="Marketing/Advertising">Marketing/Advertising</option>
								<option value="Security">Security</option>
								<option value="Food Service">Food Service</option>
								<option value="Auto leasing/Purchasing">Auto leasing/Purchasing</option>
								<option value="Other">Other</option>								
							</select>
						</div>
						<div class="col-sm-6 form-group">	                      
                            <label class="pt-4">Approximately what is the annual revenue for your organization ?</label>
                            <select class="form-control" name="revenue" id="revenue">
								<option value="Select One">Select One</option>
								<option value="Under 100,000">Under 100,000</option>
								<option value="100,000-249,999">100,000-249,999</option>
								<option value="250,000-499,999">250,000-499,999</option>
								<option value="500,000-999,999">500,000-999,999</option>
								<option value="1 Million-4.99 Million">1 Million-4.99 Million</option>
								<option value="5 Million-9.99 Million">5 Million-9.99 Million</option>
								<option value="10 Million-24.99 Million">10 Million-24.99 Million</option>
								<option value="25 Million-49.99 Million">25 Million-49.99 Million</option>
								<option value="50 Million-99.99 Million">50 Million-99.99 Million</option>
								<option value="100 Million-249.99 Million">100 Million-249.99 Million</option>
								<option value="250 Million-499.99 Million">250 Million-499.99 Million</option>
								<option value="500 Million-999.99 Million">500 Million-999.99 Million</option>
								<option value="1 Billion or more">1 Billion or more</option>
								<option value="I don't work">I don't work</option>								
							</select>
						</div>
					</div>
                    
						<button type="submit" class="btn btn-primary btn-block">Send Message</button>
			</form>		
	</div>
            </div>
        </div>
       </section>
   
   <?php include 'footer.php';?>
   