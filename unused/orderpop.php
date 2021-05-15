



<?php  

require('dataco.php');
require('phpopenx.php'); 
include('exit.php');



   $d=$_SESSION['numuser'];
   $guy=$_POST['mem1'];
   $tuy=$_POST['mem2'];
   $totalitems=$_POST['mem3'];
   $buy=$guy;







switch($tuy){
    
    case 0:
    break;
        
    default:
   




/////set seek lock
$_SESSION['postseeklock']=$totalitems;



        
        
if($_SESSION['postseek'] > $_SESSION['postseeklock'] ){}
  else{$_SESSION['postseek']=$_SESSION['postseek'] + 1;
  $ffa= $_SESSION['postseek'];}
     





/////if finished order pop swint button
if($_SESSION['postseek'] == $_SESSION['postseeklock']){
  
  echo '<script>
   var pol = document.getElementById("des'.$guy.'");
    pol.value="'.$_SESSION['postseek'].'";
      $("#thand'.$guy.'").hide(); 
       $("#swint").show();
       </script>';}

else{
//////else send data to destination  show info

echo '<script>
 var pol = document.getElementById("des'.$guy.'");
    pol.value="'.$ffa.'";
    </script>


<span  style="height:20px;padding:8px;text-align:center;border-radius:3px;font-size:15px;font-weight:bold">'.$_SESSION['postseek'].'  <i class="fas fa-arrows-alt-h" aria-hidden="true"></i> '.$_SESSION['postseeklock'].'  </span>';}
        
       




        
        
if($ffa > $_SESSION['postseeklock'] ||  $ffa < 1 ){

  ////////if overincrement cancel/clear order
           
    $ffan=16;

   for($i= 0;  $i <= $ffan; $i++) { 
     $buy=$i;
      
  echo'

     
      <script>
      
 var pol = document.getElementById("des'.$buy.'");
  pol.value="'.$buy.'";
    
  var polf = document.getElementById("kkgy'.$buy.'");
    polf.value="'.$buy.'";
    
    var x= "'.$buy.'"; 
   var sxx="2";
   var oxx= "0";
    
var url="feedbkstartorder.php";
$.post(url,{request:"fa",mem1:x,mem2:sxx,mem3:oxx}, function(data){

$("#startmekey'.$buy.'").html(data).show(); 
  $("#tii'.$buy.'").hide(); }); 

   cancelgo();

</script>  ';}
           
       
            $_SESSION['postseek']='0';
    ////////if overincrement cancel/clear order

              }else{
      //////popup  select number 
            
echo'<script>
   var x= "'.$guy.'"; 
   var sxx="1";
   var cxx= "'.$ffa.'";
   
   var polv = document.getElementById("kkgy'.$guy.'");
    polv.value="0";
   
var url="feedbkstartorder.php";
$.post(url,{request:"fa",mem1:x,mem2:sxx,mem2:sxx,mem3:cxx}, function(data){

$("#startmekey'.$guy.'").html(data).show();    }); </script>';  

    //////popup  select number
              }
        
//////start undo arrow detailed  undodetailed
echo' <script>

   var x= "'.$ffa.'";
   var xc= "'.$buy.'"; 
  
  var url="undoorder.php";
$.post(url,{request:"fa",mem1:x,mem2:xc}, function(data){

$("#tii'.$ffa.'").html(data).show();  });  

</script>';
   //////start undo arrow detailed  undodetailed      
        
        
        
     }
  

?>           



