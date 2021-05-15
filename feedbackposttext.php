

<?php  


require('dataco.php');
require('phpopenx.php'); 
include('exit.php');
$d=$_SESSION['numuser'];
$buy=$_POST['mem1'];
$txt=$_POST['mem2'];





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
var tt= $("#tempimage'.$buy.'").val(); 

var ds= $("#showdeletestate").val(); 
if( ds == 0){$("#delitext").show(); } 
else{$("#delitext").hide();}

 document.getElementById("droptextitem").value='.$buy.';


 $("#showviewitemtext").show();
 $("#showviewitembacktext").show();
  var hushtheme=$("#temptheme'.$buy.'").val();

  var can = document.querySelector("#additemtext");
var canxx = document.querySelector("#holderadditemtext");
can.style.fontWeight="bold";
document.getElementById("additemtext").innerHTML=tt;



 if(  tt.length <= 25) { can.style.fontSize="320%";  canxx.style.display="flex";  canxx.style.alignItems="center";   }
 else if(  tt.length <= 60) { can.style.fontSize="240%";  canxx.style.display="flex";  canxx.style.alignItems="center";  }
 else if( tt.length <= 135 ){  can.style.fontSize="190%";  canxx.style.display="flex"; canxx.style.alignItems="center"; }
 else{  can.style.fontSize="150%";  canxx.style.display="flex"; canxx.style.alignItems="center";  }
 var holdth = document.querySelector("#holderadditemtext");
 var th = document.querySelector("#additemtext");
 var checkout = parseInt(window.getComputedStyle(holdth,null).height);
  var  checkin = parseInt(window.getComputedStyle(th,null).height);  
if(checkin > checkout){canxx.style.display="block"; canxx.style.alignItems=" "; can.style.marginTop="0px";} 
else{ can.style.marginTop="-50px";  }     

  var textupstate= $("#textuploadstate").val(); 
  var textthemeremove= $("#removethistexttheme").val();
  if( textupstate== 1 ){ $("#holderadditemtext").removeClass(""+textthemeremove+"");  }   
   $("#holderadditemtext").addClass(""+hushtheme+"");

document.getElementById("textuploadstate").value=1;
document.getElementById("removethistexttheme").value= hushtheme;   } 
</script>



     <input  id="kkgy'.$buy.'" value="'.$buy.'" hidden>
     <input  id="tempimage'.$buy.'" value="'.$txt.'" hidden>
     <input  id="temptheme'.$buy.'" value="tur" hidden>
     <input  id="temptype'.$buy.'" value="0" hidden>
      <input  id="itemtype'.$buy.'" value=" " hidden>

            <br>
    <span  id="startmekey'.$buy.'"    style="position:absolute;margin-left:-59px;height:40px; width:118px;" >
    <span    onclick="javascript:itemcanvas'.$buy.'('.$buy.');"    class=" zuzax  buttonhideshow"  style="border-radius:0px;position:absolute;margin-left:-59px;height:48px; width:118px;padding:0px;margin-top:10px" ><p></p><span class="juju" style="font-size:20px"> 
    <i class="fas fa-search-plus" aria-hidden="true"></i> </span></span></span>';

?>



  <div  class="tur"  id="itemdata<?php echo $buy; ?>"  style="border-radius:5px;height:140px;width:115px;margin:auto;text-align:center;overflow:hidden" > 
  <span>  <br>  <br><h4 style="font-weight:bold;"> <?php   $txtd= substr($txt,0,30); echo $txtd; ?>  </h4>  </span></div>



    <script>$("#furtextj").ready(function(){
  var pushtheme=$("#textbackgroundtheme").val();

 if( pushtheme == "textblue" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 1; }
 else if( pushtheme == "textwhite" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 2; }
 else if( pushtheme == "textblood" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 3; }
 else if( pushtheme == "textlightblue" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 4; }
 else if( pushtheme == "textgray" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 5; }
  else if( pushtheme == "textpurple" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 6; }
   else if( pushtheme == "textpink" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 7; }
   else if( pushtheme == "textblack" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 8; }
      else if( pushtheme == "textlightcream" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 9; }
      else if( pushtheme == "textorange" ){ document.getElementById("itemtype<?php echo $buy;?>").value= 10; }
       else{ ////textlemon  
        document.getElementById("itemtype<?php echo $buy;?>").value= 11; }


   $("#itemdata<?php echo $buy;?>").addClass(''+pushtheme+''); 
   document.getElementById("temptheme<?php echo $buy;?>").value= pushtheme;
  var kol = document.getElementById('talkz');
   $("#textslot").hide(); 
    kol.value="";
    var can = document.querySelector("#talkz");
   can.style.fontSize="100%";
               });</script>
          
  <div id="furtextj">      </div> 

    
               
