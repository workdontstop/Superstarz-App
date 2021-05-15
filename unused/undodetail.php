

<?php  


   require('dataco.php');
require('phpopenx.php'); 
include('exit.php');

   
   $d=$_SESSION['numuser'];
    $guy=$_POST['mem1'];
$seeksubtractcheck=$_POST['mem2'];



if($seeksubtractcheck ==  $_SESSION['postseek']){  $_SESSION['postseek']=$_SESSION['postseek'] - 1; }



switch($_SESSION['postseek']){
                             
    case 0:
    break;

    default:
         
echo'<span  style="height:20px;padding:8px;text-align:center;border-radius:3px;font-size:15px;font-weight:bold">'.$_SESSION['postseek'].'  <i class="fas fa-arrows-alt-h" aria-hidden="true"></i> '.$_SESSION['postseeklock'].'  </span>';  }


?>           

<script type="text/javascript">  $("#manxt").show();   </script>


