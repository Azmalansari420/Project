

<?php if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success alert-dismissible" id="alert"> <?= $this->session->flashdata('category_success') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
    <?php  $this->session->unset_userdata('category_success'); 
  } ?>
    <?php if ($this->session->flashdata('category_error')) { ?>
<div class="alert alert-danger alert-dismissible" id="alert"> <?= $this->session->flashdata('category_error') ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
 </div>
<?php  $this->session->unset_userdata('category_error');
 } ?>
<script>
/*setInterval(function()
{
  var id = $('#id').val();
  var type = $('#type').val();
    $.ajax({
      type:"post",
      url: '<?php echo base_url(); ?>notification/get_notification_notify',
     data: {'type' : type, 'id' : id,'<?php echo $this->security->get_csrf_token_name(); ?>':
              '<?php echo $this->security->get_csrf_hash(); ?>'},
      success:function(data)
      {
        data = jQuery.parseJSON(data); // <-- *** ADD THIS LINE ***
         
          
			  $.each(data, function(i, item) {
			
			  showNotification(item.subject,item.msg);
			  });
      }
    });
}, 50000);//time in milliseconds
</script>

<script>
/*Notification.requestPermission();
function showNotification(sub,msg) {
	
  			if(window.Notification) {
  				Notification.requestPermission(function(status) {
  					//console.log('Status: ', status); // show notification permission if permission granted then show otherwise message will not show
 const audio = new Audio("http://localhost/gifgor/uploads/default/noti.mp3");
      audio.play();             
			 var options = {
                  body: msg, // body part of the notification
                  dir: 'auto', // use for direction of message
                  icon:'<?php echo base_url();?>uploads/default/gifgorlogo.png', // use for show image
				  badge:'<?php echo base_url();?>uploads/default/ico.png'
 
                }
 
    					var n = new Notification(sub, options);
  				});
  			}
  			else {
  				alert('Your browser doesn\'t support notifications.');
  			}
  		}*/
$(document).ready(function () {
setTimeout(function(){
    $('#alert').hide(500);
}, 5000);
});
</script>
<div class="msgggg"></div>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/offline.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/themes/offline-theme-slide.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/themes/offline-language-english.min.css" />
<script type="text/javascript">
//Offline.options = {checks: {xhr: {url: 'https://d220lq6zcuj7hx.cloudfront.net/tiny-image.gif'}}};
</script>-->
<script>
/*setInterval(function()
{
  var id = $('#id').val();
  var type = $('#type').val();
    $.ajax({
      type:"post",
      url: '<?php echo base_url(); ?>notification/get_notification_count',
     data: {'type' : type, 'id' : id,'<?php echo $this->security->get_csrf_token_name(); ?>':
              '<?php echo $this->security->get_csrf_hash(); ?>'},
      success:function(data)
      {
        $('#total-notify').html(data);
          //do something with response data
      }
    });
}, 30000);//time in milliseconds
</script>

<script>
/*$(document).ready(function () {
   $('.noti-icon').click(function () {
     var id = $('#id').val();
     var type = $('#type').val();
       $.ajax({
         type:"post",
         url: '<?php echo base_url(); ?>notification/get_notifications',
        data: {'type' : type, 'id' : id,'<?php echo $this->security->get_csrf_token_name(); ?>':
                 '<?php echo $this->security->get_csrf_hash(); ?>'},
         success:function(data)
         {
           $('#notify-main').html(data);
             //do something with response data
         }
       });
        });
      });
</script>

<style>

.alert-success {
    width: 35%;
    background-color: #07841c;
    background: rgb(0,147,61);
    background: linear-gradient(103deg, rgb(3 193 82) 0%, rgb(11 177 13) 54%, rgba(0,214,32,1) 100%);
    color: #fff;
    position: fixed;
    right: 0px;
    z-index: 999999;
    top: 10%;
    border: 1px solid #05c04a;
    border-radius: 10px 0px 0px 10px;
    box-shadow: 2px 2px 20px #2b2b2b;
  }
  .alert-danger{
    width: 35%;
    background-color: #07841c;
    background: rgb(0,147,61);
    background: linear-gradient(103deg, rgb(255 200 0) 0%, rgb(255 142 0) 54%, rgb(255 39 4) 100%);
    color: #fff;
    position: fixed;
    right: 0px;
    z-index: 999999;
    top: 10%;
    border: 1px solid #ffc400;
    border-radius: 10px 0px 0px 10px;
    box-shadow: 2px 2px 20px #2b2b2b;
  }
  [data-letters]:before {
  content:attr(data-letters);
  display:inline-block;
  font-size:1em;
  width:2.5em;
  height:2.5em;
  line-height:2.5em;
  text-align:center;
  border-radius:50%;
  background:plum;
  vertical-align:middle;
  margin-right:1em;
  color:white;
  }
  .noti-icon .noti-dot {
    position: absolute;
    display: inline-block;
    height: 20px;
    width: 20px;
    background-color: #ff3d60;
    border-radius: 50%;
    top: 10px;
    right: 5px;
    color: #fff;
}
.img-notify{
  max-width:2.5em;
}
</style>
