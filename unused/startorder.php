

<?php  
require('dataco.php');
require('phpopenx.php'); 
include('exit.php');
$d=$_SESSION['numuser'];
$totalitems=$_POST['mem1'];




for($i= 0;  $i <= $totalitems; $i++) { 

 $buy=$i;
      
   echo '<script>
   var s="'.$buy.'"; 
   var sb= "0";
   var sbb= "0";
  var url="feedbkstartorder.php";
$.post(url,{request:"fa",mem1:s,mem2:sb,mem3:sbb}, function(data){
$("#startmekey'.$buy.'").html(data).show(); 
   $("#canxxt").show(); 
   $("#launchbox").hide();
   $("#orderoh").hide(); 
    $("#refreshoh").hide(); 
         $("#continueoh").hide(); 
          $("#manxt").show(); 
          $("#tii'.$buy.'").hide(); }); 
          </script>';     }





?>
    
               



