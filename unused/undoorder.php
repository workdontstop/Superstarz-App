

<?php  


   require('dataco.php');
require('phpopenx.php'); 
include('exit.php');

   

   $d=$_SESSION['numuser'];
   $des=$_POST['mem1'];
   $buy=$_POST['mem2'];


echo' <script>
function bboo'.$buy.'(){  
$("#ref").hide();
$("#manxt").hide();  
 
   
    var ggpol = document.getElementById("des'.$buy.'");
    ggpol.value="'.$buy.'";
    
    var ggpolf = document.getElementById("kkgy'.$buy.'");
    ggpolf.value="'.$buy.'";
    
    var x= "'.$buy.'"; 
   var sxx= "5";
   var oxx= "'.$_SESSION['postseek'].'";
    
  var url="feedbkstartorder.php";
$.post(url,{request:"fa",mem1:x,mem2:sxx,mem3:oxx}, function(data){

$("#startmekey'.$buy.'").html(data).show(); 
$("#tii'.$des.'").hide(); 


$("#swint").hide();  });   }</script>   <b>  
              
    
    <span class="zuzax zazp"   style="background-color:#ffffff;font-size:30px;padding:2px;position:absolute;margin-top:-2px"  onclick="javascript:bboo'.$buy.'();">   <i class="fas fa-arrow-left" aria-hidden="true"></i>   </span>  </b>
          ';




?>





