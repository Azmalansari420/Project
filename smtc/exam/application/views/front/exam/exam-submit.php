<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<script type="text/javascript">


$(document).ready(function() {

        $('#myModal').modal({
      backdrop: 'static'
    });
    
});
</script>

<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

<div id="myModal" class="modal fade">
   <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
            
            <div class="modal-body text-center">

                    <h3> <?php echo $exam['title'] ; ?></h3>

                    <h4 class="text-center">Your Exam Submit Successfully </h4>

                    <hr>
               
                 <center>
                   <a href="<?php echo base_url('exam-responce'); ?>">  <button type="submit" class="btn btn-lg btn-primary"> Submit </button> </a>

                 </center> 
              
            </div>
        </div>
    </div>
</div>

</body>
</html>
