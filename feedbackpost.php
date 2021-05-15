

<?php  
require('dataco.php');
require('phpopenx.php'); 
include('exit.php');
$d=$_SESSION['numuser'];
$_SESSION['postim']="0";
$buy=$_POST['mem1'];
$tuf=$_POST['mem2'];





switch($buy){
case 1: echo'
<script>
 $("#fttis").ready(function(){
  $("#continueoh").show();   
   $("#refreshoh").show();  }); 
</script>
<div id="fttis"> </div>';  

 break;
  
 case 2: echo'
 <script>
 $("#fttisx").ready(function(){
 $("#orderoh").show();}); 
</script>
<div id="fttisx"> </div>';}




echo '
   <script>

function kerndy'.$buy.'(s){
 document.getElementById("startmekey'.$buy.'").innerHTML="";
var a= $("#kkgy'.$buy.'").val(); 
  var b= $("#totalitems").val();
 var url="orderpop.php";
$.post(url,{request:"fa",mem1:s,mem2:a,mem3:b }, function(data){
$("#ref").html(data).show(); 
});} 


function itemcanvas'.$buy.'(s){
var a= $("#tempimage'.$buy.'").val(); 

var ds= $("#showdeletestate").val(); 
if( ds == 0){$("#delicanv").show(); } 
else{$("#delicanv").hide();}

 var url="viewitemimage.php";
$.post(url,{request:"fa",mem1:s,mem2:a}, function(data){
$("#popitemcanvas").html(data).show(); 
});} 

</script>



     <input  id="kkgy'.$buy.'" value="'.$buy.'" hidden>
     <input  id="tempimage'.$buy.'" value="'.$tuf.'" hidden>
      <input  id="temptype'.$buy.'" value="1" hidden>
       <input  id="itemtype'.$buy.'" value="0" hidden>
 

            <br>
    <span  id="startmekey'.$buy.'"    style="position:absolute;margin-left:-59px;height:40px; width:118px;" >
    <span    onclick="javascript:itemcanvas'.$buy.'('.$buy.');"    class=" zuzax  buttonhideshow"  style="border-radius:0px;position:absolute;margin-left:-59px;height:48px; width:118px;padding:0px;margin-top:10px" ><p></p><span class="juju" style="font-size:20px"> 
    <i class="fas fa-search-plus" aria-hidden="true"></i> </span></span></span>';

?>
 

  <img src="images/wall/<?php echo $tuf; ?>"  id="itemdata<?php echo $buy; ?>"  height="120"  title="<?php echo $tuf; ?> " width="auto" class=" img-rounded img-responsive "   style="padding-bottom:1px;background-color:<?php echo  $_SESSION['cl']; ?>; -moz-box-shadow: 0 0 2px<?php echo  $_SESSION['cl']; ?>; -webkit-box-shadow: 0 0 2px<?php echo  $_SESSION['cl']; ?>;box-shadow: 0 0 2px<?php echo  $_SESSION['cl']; ?>;"/>


               








