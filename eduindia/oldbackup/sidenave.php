<!------ Include the above in your HEAD tag ---------->
<?php $n_b = fs("notice_board",NULL); ?>


<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
   <div class="menu-list" >
       <ul id="menu-content" class="menu-content collapse out">
               <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="http://eduindiafoundation.org"><i class="fa fa-home fa-lg"></i>Home</a>
                </li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="Our-Institutes.php">Courses</a></li>
        <li><a href="show_result.php">Verification</a></li>
                <li><a href="download.php">Download</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="courseoffer.php" style="font-size:14px;">Accreditation &amp; Affiliations</a></li>
        <li><a href="Franchise-Registration.php">Franchise</a></li>
                <li><a href="user/index.php">Student Login</a></li>  
                <li><a href="register-instructions.php">Student Register</a></li>  

        <li><a href="vendor">Branch Login</a></li>
         
          <li><a href="upload/<?php echo @$n_b->img; ?>" download="">Notice Board</a></li>
         <li><a href="https://soft.eduindiafoundation.in/login/userlogin.aspx" target="_blank">Examination</a></li>
                 <li><a href="contact.php">Contact Us</a></li>
            </ul>
     </div>
</div>

<style>

  .nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #1d3970;
    position: absolute;
    top: 60px;
    z-index: 999;
    width: 15%;
    
    color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4670a3;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding: 2px;
  border-left: 3px solid #1d3970;
  border-bottom: 1px solid #ccc;
}
.nav-side-menu li a {
  text-decoration: none;
  font-size:15px;
  color: #fff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #1d3970;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: inherit;
    width: 100%;
    margin-bottom: 0px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

</style>