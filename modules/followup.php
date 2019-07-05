<?php
include('navbar.php');
if(!isset($_SESSION['id'])){
    echo"<script>
    alert('Please Login in');
    document.location.href = 'login.php';
    </script>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Followup Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        
    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/followup.php?pid=<?php echo $_GET['pid'];?>">
                
               
                <h3>
                    <span class="title_text">Follow-up Form</span>
                </h3>
                <fieldset>
                      <div class="form-group">
                                <label  class="form-label">Skin Smears</label>
                                 <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                    <tbody>
                                          <tr class="tr-header">
                                            <th>Site</th>
                                            <th>Mi</th>
                                            <th>Bi</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>   
                                          </tr> 
                                          <tr style="padding: 2px;" >
                                            <td><input type="text" name="Site[]" class="valid"></td>
                                            <td><input type="text" name="Mi[]" class="valid"></td>
                                            <td ><input type="text" name="Bi[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>                                            
                                          </tr>                                                   
                                    </tbody>
                                    <tr>                                                                            
                                        <td><a href='javascript:void(0);' style="font-size:18px;" id='avg'>Average</a></td>
                                         <td ><p id="average">Averages Mi:</p></td>
                                         <td ><p id="average1">Average Bi:</p></td>
                                    </tr>
                                 </table>                                                     
                            </div>

                        <div class="form-textarea">
                            <label for="Complaint" class="form-label">Present Complaint</label>
                            <textarea name="Complaint" id="Complaint" placeholder=""  ></textarea>
                        </div>

                        <div class="form-group">
                            <label  class="form-label" style="align-self: flex-start;padding-top: 40px;">Notes and Prescription</label>
                            <table style="padding-left: 34px ;margin-top: 9px" id="tb2" class="form-label">
                            <tbody>
                                <tr class="tr-header"><th>Date</th></tr>
                                <tr class="form-textarea"><th><input style="width: 165px" type="date" name="name[]" class="valid"></th></tr>
                                
                                <tr><th>Clinical Notes</th></tr>
                                <tr><th><div class="form-textarea">
                                            <textarea name="Cnotes[]" class="valid"></textarea>
                                        </div></th></tr>
                                
                                <tr><th>Prescription</th></tr>
                                <tr><th><div class="form-textarea">
                                            <textarea name="Prescription[]" class="valid"></textarea>
                                        </div></th></tr>
                            </tbody>    
                           </table>
                        </div>

                       <div class="form-group">
                          <label for="dp" class="form-label" style=" padding-bottom: 6em;">Drug Prescription</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Used</th>
                                            <th>Drug Dosage</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_used[]" class="valid"></td>
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_first_treatment[]" class="valid"></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_first_treatment[]" class="valid"></td> 
                                        </tr>

                                    </tbody>

                            </table>
                        
                        </div>
                        <div class="form-group">
                                <label for="Examiner" class="form-label">Examiner</label>
                                <input type="text" name="Examiner" id="Examiner" />
                            </div>
                        <div class="form-group">

                                <label  class="form-label">Appointment </label>
                            <table style="padding-left: 34px ;margin-top: 9px;" id="tb4" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Next Appointment For:</th>
                                            <th>Next Appoinment Date:</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore4" title="Add More Appoinment"><span class="fa fa-plus"></span></a></th>
                                        <tr>
                                            <td><input type="text" name="appoinment_for[]" placeholder="Appoinment for..."></td>
                                            <td><input style="margin-left: 16px;" type="date" name="date_of_next_appoinment[]"></td>
                                            
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove2' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>

                                    </tbody>
                            </table>
                        </div>

                        <div>
                            <div class="form-group">
                       <label  class="form-label">Upload Image </label>
                            <input type="file" name="file">
                        </div>
                    </div>
                    
                    
                </fieldset>
                <div class="fieldset-footer" style="padding: 40px 0px;">
                        <span></span>
                    </div>
                    <input type="submit" name="submit">
            </form>
        <div>
            

        </div>
        <div class="copy w3ls">
               <p>&copy; 2018  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
        
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
              var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
              var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
              var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1-1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
          } 
      });
});      
</script>
<script type="text/javascript">
  $(function(){
    $('#avg').on('click', function() {
      var tbl = document.getElementById('tb6');
      var count = 0;
      var total = 0;
      for(var i= 1; i<tbl.rows.length-1; i++){
        var num = Number(tbl.rows[i].cells[1].children[0].value);
        total += num;
        count++;
    }
      var count1 = 0;
      var total1 = 0;
      for(var i= 1; i<tbl.rows.length-1; i++){
        var num1 = Number(tbl.rows[i].cells[2].children[0].value);
        total1 += num1;
        count1++;
    }
    console.log(total/count);
    console.log(total1/count1);
    document.getElementById("average").innerHTML = "Average MI &ensp;"+(total/count).toFixed(2);
    document.getElementById("average1").innerHTML = "Average BI &ensp;"+(total1/count1).toFixed(2);
  });
});
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore2').on('click', function() {
              var data = $("#tb2 tr:eq(1)").clone(true).appendTo("#tb2");
              data.find("input").val('');
     });
     $(document).on('click', '.remove2', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore4').on('click', function() {
              var data = $("#tb4 tr:eq(1)").clone(true).appendTo("#tb4");
              data.find("input").val('');
     });
     $(document).on('click', '.remove4', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>

</html>
