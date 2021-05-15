



<?php  
    

require('phpopen.php');



$ww=" ";
$hh=" ";


if(isset($_POST['memw'])){

$ww=$_POST['memw'];
$hh=$_POST['memh'];
$ty=$_POST['memty'];


if($ty == 1){
	$sw=$_POST['memsw'];
$sh=$_POST['memsh'];
$_SESSION['supercropstate'] = 1;  
$_SESSION['supercropwidth'] = $ww;
$_SESSION['supercropheight'] = $hh;
$_SESSION['superstylewidth'] = $sw;
$_SESSION['superstyleheight']=$sh;
$_SESSION['supercropstateallow'] = 1;
$reload="";  }


else if($ty == 2){
if($_SESSION['supercropstateallow'] == 0){	$_SESSION['supercropstateallow']=1; }
else{$_SESSION['supercropstateallow']=0;}
 $reload='<script>$("#reloadboy").ready(function(){
 window.location="superphoto.php";});</script>';   }


else if($ty == 3){
$_SESSION['supercropstateallow'] = 0;
$_SESSION['supercropstate'] = 0;
$reload='<script>$("#reloadboy").ready(function(){
 window.location="superphoto.php";});</script>';   }




 	}




 
 

echo $reload;


 ?>



<div    id="reloadboy"> </div>



