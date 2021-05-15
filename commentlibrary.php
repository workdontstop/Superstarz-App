














<?php 


require('dataco.php');
require('phpopen.php'); 
include('exit.php');
include('theme.php');


$d=$_SESSION['numuser'];

$comtext=$_POST['cap'];
$poss=$_POST['postid'];

$pag=$_POST['pag'];
$nex=$_POST['nex'];




  if($_SESSION['quoteuser']==""){ $myname=$_SESSION['nameuser']; }
 else{ $myname=$_SESSION['quoteuser']; }


 echo '




<script type="text/javascript">
	
	
  adclerstate'.$pag.'="0";
 adpassclerstate'.$pag.'="0";


	function addcomfailed'.$pag.'(){
       var dtel=document.querySelector("#reactionflash'.$pag.'");
        dtel.classList.remove("fadeboyreact");
     dtel.classList.add("fadeboyreactfail");
      document.getElementById("reactionflash'.$pag.'").innerHTML=" Try Again!";
      adclerstate'.$pag.'="1";
     adcler'.$pag.'= setTimeout(function(){   
      adclerstate'.$pag.'="0";   $("#tempreaction'.$pag.'").hide();  
         var ctot=$("#totalcomment").val();
         if(ctot == 0){
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.visibility="visible"; }
},10000);   }






 function addcompass'.$pag.'(){
  $("#reactionflash'.$pag.'").hide(); 
        $("#reactionflashtoo'.$pag.'").show();
        adpassclerstate'.$pag.'="1";
     adpasscler'.$pag.'= setTimeout(function(){  
        adpassclerstate'.$pag.'="0";
       $("#reactionflashtoo'.$pag.'").hide();
        $("#reactionflash'.$pag.'").hide();
         $("#reactionflash3'.$pag.'").show();
            },3000);
            	var hh ="'.$pag.'"; }



  $("#reactionflashtoo'.$pag.'").hide();
        $("#reactionflash3'.$pag.'").hide();
         $("#reactionflash'.$pag.'").show();
          if( adpassclerstate'.$pag.' == 1){    clearTimeout(adpasscler'.$pag.');  }
  if( adclerstate'.$pag.' == 1){    clearTimeout(adcler'.$pag.');  }
     $("#tempreaction'.$pag.'").show();
   var dtel=document.querySelector("#reactionflash'.$pag.'");
    dtel.classList.remove("fadeboyreactfail");
     document.getElementById("reactionflash'.$pag.'").innerHTML=" Posting!";
var rtxtsrc= "'.$comtext.'";
 document.getElementById("putmyreacttext'.$pag.'").innerHTML=rtxtsrc; 
 dtel.classList.add("fadeboyreact");
 showcomment();



 


</script>




<div class="col-xs-12"  id="reactpost'.$nex.'"  style="display:none;padding:0px;">   </div>




<div class="col-xs-12"  id="tempreaction'.$pag.'"  style="display:none;padding:0px;height:auto;border-radius:4px;'.$commenttextcolor.'">
<div  class="col-xs-hidden col-sm-1"    style="padding:0px;height:auto;">
</div>
<div class="col-xs-12 col-sm-10"  style="padding:0px;">



<div class="col-xs-12 "  style="padding:0px;top:5px;left:-5px">  
<div class="col-xs-2 "  style="padding:0px;padding-top:0px;"> </div>
<div class="col-xs-10"  style="padding:0px;text-align:right;font-weight:normal;">  
<vvpandi><span class="juju zuzax dontallowselect" style="font-size:90%;">'.$myname.'</span><span class="juju zuperxy zuzax dontallowselect"  style="color:'.$_SESSION['cl'].'"> <i class=" fa fa-ellipsis-h" aria-hidden="true"></i></span>
</vvpandi>
</div></div>



           <div class="col-xs-12 "  style="padding:0px;padding-bottom:0px;">  

 <div class="col-xs-2"   style="padding-top:0px;padding:2px;margin:auto;text-align:center;margin-top:-5.5px">
      <img src="images/profilemini/'.$_SESSION['profilepic'].'"  onclick="javascript:listtopagexx();"
         id="profileimagefilexx"  class="zuzax juju img-rounded  dontallowselect " style="width:auto;height:3.4em;padding:3px;-moz-box-shadow: 0 0 2px'.$_SESSION['cl'].';-webkit-box-shadow: 0 0 2px '.$_SESSION['cl'].';box-shadow: 0 0 2px '.$_SESSION['cl'].'; border:2px solid '.$_SESSION['cl'].';border-radius:50%;"  title="'.$_SESSION['user'].'"/>
          </div>


<div class="col-xs-10"  style="padding:0px;padding-top:0px;">

<div class="col-xs-12 "  style="padding:0px;font-weight:bolder;">  
<vvpandi style="font-size:130%;margin-left:2px;padding:0px">'.$_SESSION['user'].'</vvpandi>
<span class="'.$commentspace.'" style="color:'.$_SESSION['cl'].';font-size:50%;margin-left:3px;padding:0px"><i class="fas fa-circle"></i></span>  <aleob id="putmyreacttext'.$pag.'" style="padding:1px;"> </aleob></div>

<div class="col-xs-12 "  style="padding:0px;padding-top:5px">  
<div class="col-xs-4"  style="padding:0px;text-align:left"><vvpandi>
<span   class="fadeboyreactfail"  id="reactionflash'.$pag.'" style="padding-left:4px;font-size:120%;"> Posting... </span>
<span   id="reactionflash3'.$pag.'" style="padding-left:4px;font-size:110%;display:none"> Just Now </span>
<span   class="fadeboyreactfailtoo"  id="reactionflashtoo'.$pag.'" style="padding-left:4px;display:none">
<span style="font-size:115%">Done </span>
<span  style="font-size:100%;color:'.$_SESSION['cl'].'"  class="zuperxy"> <i  class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i>   </span> </span></vvpandi></div>
</div>

</div>


            </div>



  </div></div>';








  $sqladdcom=" INSERT INTO comment (num,post,time,com) VALUES (?,?,now(),?) "; 
    $sqladdcominstb= $super->prepare($sqladdcom);  
                              ///prepare can fail because of syntax errors,missing privilages
                              if(false === $sqladdcominstb){
                              echo'<script> 
                                     addcomfailed'.$pag.'();
                                    </script>'; }
                                else{
    $sqladdcominstblock= $sqladdcominstb->bind_param("iis",$jum,$post,$cap);
           if(false === $sqladdcominstblock){ 
                              $sqladdcominstb->close();
                               echo'<script> 
                                     addcomfailed'.$pag.'();
                                    </script>';  }
                                else{
                              $jum=$d; 
             $cap=$comtext; $post=$poss;
                           $instraplock= $sqladdcominstb->execute();
                                if(false === $instraplock){ 
                               $sqladdcominstb->close();
                                 echo'<script> 
                                     addcomfailed'.$pag.'();
                                    </script>';  }
                                else{
                                    echo'<script> 
                                   addcompass'.$pag.'();
                                   afterreactionaddded();
                                    </script>'; 
                              $sqladdcominstb->close();}}}




  ?>


