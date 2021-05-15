

<?php  

require('dataco.php');
require('phpopenx.php'); 
include('exit.php');


$d=$_SESSION['numuser'];
$buy=$_POST['mem1'];
$sat=$_POST['mem3'];
$ty=$_POST['mem2'];
$themyx='rgba(255,255,255,0.0)';



switch( $_SESSION['theme'] ){
            case 0:
         $themy='rgba(255,255,255,0.6)'; 
           break;
          default:
             $themy='rgba(000,000,005,0.4)';} 

 



switch($ty){

case 0:
////////0 enter start order
///////click select orderpop
echo'<span   onclick="javascript:kerndy'.$buy.'('.$buy.');" class=" zuzax  buttoncloud" style="border-radius:0px;position:absolute;margin-left:-59px;height:58px; width:118px;padding:0px;" ><p></p><span class="juju zuzax" style="font-size:20px"> 
    <i class="far fa-hand-pointer" aria-hidden="true"></i> </span></span>';
    
  break;
        
case 1:
 ////////1  pop  selected  number
echo'<span   class="zuperxy"  style="border-bottom-left-radius:6px;border-bottom-right-radius:6px;border-top-left-radius:0px;border-top-right-radius:0px;position:absolute;margin-left:-40px;color:#ffffff;height:40px; width:80px;padding:0px;font-size:20px;font-weight:bolder"   id="thand'.$buy.'"   ><p></p> '.$sat.'  </span>';

   break;
            
 case 2:
    ////////2  cancel  order mode    
  echo'<span    onclick="javascript:itemcanvas'.$buy.'('.$buy.');"    class=" zuzax  buttonhideshow"  style="border-radius:0px;position:absolute;margin-left:-59px;height:48px; width:118px;padding:0px;margin-top:10px" ><p></p><span class="juju" style="font-size:20px"> 
    <i class="fas fa-search-plus" aria-hidden="true"></i> </span></span>';
        
        break;
        

        case 3:
    ////////3    
  echo'  ';
        
        break;
        


        case 5:
        
////////5 from undoorder undodetail clicked
///////click select orderpop
echo'<span   onclick="javascript:kerndy'.$buy.'('.$buy.');" class=" zuzax  buttoncloud" style="border-radius:0px;position:absolute;margin-left:-59px;height:58px; width:118px;padding:0px;" ><p></p><span class="juju zuzax" style="font-size:20px"> 
    <i class="far fa-hand-pointer" aria-hidden="true"></i> </span></span>';
    
 echo '
       
 <script>
 var s= "'.$buy.'"; 
 var aa ="'.$sat.'"
 var url="undodetail.php";
$.post(url,{request:"fa",mem1:s,mem2:aa }, function(data){
$("#ref").html(data).show(); }); </script>';




}



?>
    
               
