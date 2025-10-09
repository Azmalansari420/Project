<?php include ('header.php');?>
<link rel="stylesheet" type="text/css" href="css/datepicker.css">

<div class="container"style="margin-top:20px;margin-bottom:20px;">
  

<div class="row">
    <div class="col-md-6">
         <img class="img-responsive"src="imge/result2.jpg">
    </div>
    <div class="col-md-6">
      <div class="contact-page-form " style="background:black">
      <form action="result-view.php" method="post">
        <div class="form-group">
          <label for="reg_id"  style="color: #fff;">Please Enter Your Registration  Or Enrollment Number :</label>
          <input type="text" class="form-control" id="reg_id" placeholder="Enrolment No" name="reg_id" required="">
        </div>
        <div class="form-group">
          <label for="pwd" style="color: #fff;">Date of Birth:</label>
          <input type="date" class="form-control" placeholder="Date Of Birth" name="dob" required="">
        </div>
        <button type="submit" name="submit" class="btn btn-default">Get  Result</button>
      </form>
    </div>
    </div>
</div>

</div>
 </div>
</div>

<?php include ('footer.php');?>

<script type="text/javascript">
 $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd-mm-yy"
        ,   duration: "fast"
    });
} );
</script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>
function CreatePDFfromHTML() {
    var HTML_Width = 550;  
    var HTML_Height = 460; 
    var top_left_margin = 5;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#dvContainer")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("<?php e($fs->reg_id);?>");

    });
}
</script>
<script src="https://sgmtc.co.in/admin/assets/print/dist/jQuery.print.min.js"></script>
<script type='text/javascript'>

        jQuery(function($) { 'use strict';
         
     
            $('#btnPrint').on('click', function() {
                //Print ele4 with custom options
                $("#dvContainer").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
        });
        //]]>
        </script>