
<?php  
require('dataco.php');
require('phpopen.php'); 
include('exit.php');
include('theme.php');



 $ty=$_POST['typ'];
  $d=$_POST['mem'];

    $imy=$_POST['im'];
      $namy=$_POST['name'];
        $coly=$_POST['col'];

        $favy=$_POST['fav'];
            $fany=$_POST['fan'];



  $typhist=$_POST['typat'];




         $pagenumin=$_POST['pagein'];
      $jumpin=$_POST['jumpin'];
       $jumplockin=$_POST['jumplockin'];





       ?>





     
<script type="text/javascript">
var typ="<?php echo $ty; ?>";
 if( typ == 2 ){ $("#fanlisttop").show(); }
else if( typ == 1 ){ $("#favlisttop").show(); }
else{  }
</script>
     








<input  id="activecon"  value="<?php echo $ty; ?>"  hidden>





<div class="col-xs-12"  id="holdcontactstopcontrol" style="width:100%;top:0em;padding-right:35px;position:absolute;z-index:2">  

  <div class="col-xs-hidden col-sm-1 col-md-1"   style=""> </div>
  <div class="col-xs-12 col-sm-10 col-md-10"   style="background-color:#ffffff;padding:0px;overflow:hidden;">  



  <div class="col-xs-12"   style="padding:0px;">  
    <div class="col-xs-12"   style="padding:0px;">  </div>
   <div class="col-xs-2 col-sm-1 superbuttonshover zuzax" onclick="javascript:contactarrow();"  style="margin-top:3.5px;font-size:140%;float:left;text-align:center;margin-left:4px"><span  class="juju">   <i class="fas fa-arrow-left" aria-hidden="true"></i></span> </div> 
     <div class="col-xs-1 col-sm-3">  </div>
        
    <div class="col-xs-6  col-sm-4  zuperxyloud3d  dontallowselect" style="margin-top:16px;text-align:center;margin-left:-4px;margin-top:13px;" > 
      <span  class="zuzax juju"  onmousedown="javascript:switchcontact();" >
         <span id="fanlisttop" style="font-weight:bold;font-size:140%;color:#eeeeee;display:none"><bottr>Fans</bottr></span>
            <span id="favlisttop" style="font-weight:bold;font-size:140%;color:#eeeeee;display:none"><bottr>Favorites</bottr></span>
          </span>
       </div> 


       <div class="col-xs-3 col-sm-4 "  id="outmycontact<?php echo $namy; ?>"  style="padding:0px;margin-top:11px;"> 
     <div class="col-xs-hidden col-sm-3"  id="extraoutmycontact<?php echo $namy; ?>"  style="height:0px;display:none"> </div>
  <div class="col-xs-12 col-sm-12"   id="extra2outmycontact<?php echo $namy; ?>" style="padding:0px;"> 





 <div class="col-xs-12 col-sm-11"    id="imdatamycontact<?php echo $namy; ?>" style="padding:0px;margin-top:-3px;"> 

<div class="col-xs-12 col-sm-12"  id="mycontactpic" style="padding:0px"> 

<div style="float:right">

  <div class="col-xs-4" style="padding:0px;margin-top:6px">
<i><div class="col-xs-12" id="allcon" style="padding:0px;height:auto;font-weight:bolder;font-size:70%;color:#aaaaaa"> </div></i>
<div class="col-xs-12 " style="padding:0px;height:auto;text-align:center;font-size:100%;left:-2.5px;color:#aaaaaa"><i class="fas fa-search" aria-hidden="true"></i></div>
   </div>

       <div class="col-xs-4" style="padding:0px;">
       <img src="images/profilemini/<?php echo $imy; ?>"  
         id="profileimagefilecon"  class="zuzax juju img-rounded  dontallowselect " style="width:auto;height:2.7em;padding:0px;border-radius:50%;-moz-box-shadow: 0 0 2px #cccccc;-webkit-box-shadow: 0 0 2px #cccccc;box-shadow: 0 0 2px #cccccc; border:2px solid #cccccc;background-color:#cccccc;border-radius:50%;"  title="<?php echo $namy; ?>"/>
        </div>


      </div></div></div>


      </div></div>   



     </div>  



  



 
</div>
</div>
















   
    <div class="col-xs-12"   style="padding:0px;background-color:rgba(255,255,255,0.3);min-height:100%;min-height:100vh;"> 
  <div class="col-xs-hidden col-sm-1 col-md-1  "   style=" "> </div>
 <div  class="col-xs-12 col-sm-10 col-md-10 za tur"   style="min-height:100%;min-height:100vh;border-top-left-radius:10px;border-top-right-radius:10px;padding:0px;">
          
<div  class="col-xs-12 zaz" ></div>
<div class="col-xs-12 zau"></div>
<div class="col-xs-12 zazp2"></div>






 <div class="col-xs-12"  id="contactsuperlist"  style="padding:0px;">
 </div>



</div>
</div>



<div  class="col-xs-12 zuperxya"   id="contactpagespinner"   style="display:none;z-index:2;position:absolute;top:45%;padding:0px;text-align:center;font-size:200%;color:#ffffff">
 <i class="fas fa-stroopwafel  fa-spin"></i> 
 </div> 


<div  class="col-xs-12 zuperxya"   id="contactpageempty"   style="display:none;z-index:2;position:absolute;top:45%;padding:0px;text-align:center;font-size:200%;color:#ffffff">
 <i class="fas fa-folder"></i> 
 </div> 






<script type="text/javascript">
  
stateusername=0;




   function gocontact(a,x){ 


if( a== 1){
var fv="<?php echo $favy; ?>";
     if(fv == 1){$("#y1").show(); $("#z1").hide(); $("#z").hide(); $("#y").hide();
   }else{$("#y").show(); $("#z1").hide(); $("#y1").hide(); $("#z").hide();}
     $("#zfan").hide();   $("#yfav").show();}
     else{
var fn="<?php echo $fany; ?>";
     if(fn == 1){$("#z1").show(); $("#y1").hide(); $("#z").hide(); $("#y").hide();}
     else{$("#z").show();  $("#y1").hide(); $("#z1").hide(); $("#y").hide();}
     $("#zfan").show();   $("#yfav").hide();}

var b ="<?php echo $d; ?>";

     var c ="<?php echo $pagenumin; ?>";
              if(x == 0){  var d ="<?php echo $jumpin; ?>"; }
                 else{ var d = 0;  }
                  var e ="<?php echo $jumplockin; ?>";
                  var f ="<?php echo $typhist; ?>";
     $.ajax({
  type: "POST",
  url: "contactlistingsgate.php",
  data: {type:a,user:b,pagein:c,jumpin:d,jumplockin:e,gri:f},
 success: function(data){
$("#contactpagespinner").hide(); 
$("#contactsuperlist").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }





  $(document).ready(function(){

    if(mobileboy == 0){  $("#superpop").addClass('sliderlook');  }
    else{   var htop=document.getElementById("holdcontactstopcontrol");
        htop.style.padding="0px";   htop.style.marginTop="-1px";    htop.style.paddingRight="0px"; }

timeoutclear=1;
toptime=setTimeout(function(){  var htop=document.getElementById("holdcontactstopcontrol");
     htop.style.position="fixed";   timeoutclear=0;},4000);

$("#contactpageempty").hide(); 
$("#contactpagespinner").show(); 

   gocontact(<?php echo $ty; ?>,0);

  }); 





  
 function contactarrow(){  history.back(); }


  
 function switchcontact(){   var aactive = $("#activecon").val(); 
              if(aactive == 1){ fancontact();  } else{   favcontact(); }       }







 function fancontact(){ document.getElementById("activecon").value=2; 
                     $("#fanlisttop").show();   $("#favlisttop").hide(); 
                      document.getElementById("contactsuperlist").innerHTML="";
                      $("#contactpageempty").hide();
                     $("#contactpagespinner").show();   gocontact(2,1);    }


 function favcontact(){ document.getElementById("activecon").value=1; 
                     $("#favlisttop").show();   $("#fanlisttop").hide(); 
                      document.getElementById("contactsuperlist").innerHTML="";
                      $("#contactpageempty").hide(); 
                     $("#contactpagespinner").show();  gocontact(1,1);    }



</script>















