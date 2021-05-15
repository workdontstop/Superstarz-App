<style type="text/css">


  </style>



<?php  
require('dataco.php');
require('phpopen.php'); 
include('exit.php');
include('theme.php');



  $emo=$_POST['emotion']; 
  $nivd=$_POST['postid'];
  $gringo=$_POST['gringo'];
  $fun=$_POST['fun'];
   $care=$_POST['care'];
    $cool=$_POST['cool'];
     $lovely=$_POST['lovely'];
  


  $mem=$_POST['member'];
    $type=$_POST['typex'];
      $pagenum=$_POST['page'];
      $jump=$_POST['jump'];
       $jumplock=$_POST['jumplock'];

         $pagenumin=$_POST['pagein'];
      $jumpin=$_POST['jumpin'];
       $jumplockin=$_POST['jumplockin'];




$f1="hidden";   
$f2="hidden";   
$f3="hidden";   
$f4="hidden";   

if($emo == 1){ $f1="visible";  }
  else if( $emo == 2){ $f2="visible";   }
    else if( $emo == 3){ $f3="visible";   }
      else if( $emo == 4){ $f4="visible";   }
      else{ }

       ?>



     
<script type="text/javascript">
var typ="<?php echo $emo; ?>";
if(typ == 4){ $("#lovelylisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show();}
else if( typ == 3 ){ $("#freshlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show(); }
else if( typ == 2 ){ $("#carelisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show(); }
else if( typ == 1 ){ $("#funlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show(); }
else{  }
</script>
     




<input  id="activelisting<?php echo $nivd; ?><?php echo $gringo; ?>"  value="<?php echo $emo; ?>"  hidden>









<div class="col-xs-12  "  id="holdtopcontrol" style="text-shadow: 0px 0px 10.5px  #ffffff, 0px 0px 10.5px #ffffff; 0px 0px 10.5px #ffffff;color:#000000;background-color:rgb(202,202,202,0.3);
padding:0px;background:-webkit-linear-gradient( to  bottom,rgba(255,255,255,0.85),rgba(255,255,255,0.75),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.65));

  background:-moz-linear-gradient(to  bottom,rgba(255,255,255,0.85),rgba(255,255,255,0.75),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.65));

  background:linear-gradient( to  bottom,rgba(255,255,255,0.85),rgba(255,255,255,0.75),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.7),rgba(255,255,255,0.65));top:0em;padding-right:35px;position:absolute;z-index:2">  


<div class="col-xs-12  "   style="padding:0px;"> 

   <div class="col-xs-hidden col-sm-1 col-md-1"   style="padding:0px"> </div>
     <div class="col-xs-12 col-sm-12 col-md-12 "   style="padding:0px;">  

      
      <style>
        
        .superbuttonshoverxx{
border: solid rgba(255,255,255,0.0);border-bottom: solid rgba(005,005,005,0.0);
  border-radius:0px;padding:10px;padding-bottom:5px;color:rgba(005,005,005,0.4);}

.superbuttonshoverxx:hover{
border: solid rgba(255,255,255,0.0);border-bottom: solid #000000;
  border-radius:0.5px;padding:10px;padding-bottom:5px; }


      </style>

     <div class="col-xs-12 "   style="padding:0px;height:50px">  
     

   <div   id="emoarrow<?php echo $nivd; ?><?php echo $gringo; ?>"  class="col-xs-2  col-sm-2 superbuttonshoverxx zuzax " onclick="javascript:blackarrow();"  style="margin-top:1.5px;font-size:126%;float:left;text-align:center;left:15px;color:#000000;opacity:0.9; "><span  class="juju">   <i class="fas fa-arrow-left" aria-hidden="true"></i></span> </div> 
          <div class="col-xs-1 col-sm-2">  </div>


    <div  id="emoparent<?php echo $nivd; ?><?php echo $gringo; ?>" class=" col-xs-6  col-sm-4  dontallowselect" style="margin-top:11px;text-align:center;font-size:140%;margin-left:-4px;font-weight:bolder;color: #ffffff; text-shadow:0.5px 2px 0.5px  #222222, 0.5px 0.25px 0.5px #222222;" > 

<span  class="zuzax juju"  onmousedown="javascript:switchtop<?php echo $nivd; ?><?php echo $gringo; ?>();" >
     <span id="lovelylisttop<?php echo $nivd; ?><?php echo $gringo; ?>" style="color:#ff2a7f;display:none">
      <bottr>Love</bottr></span>

      <span id="freshlisttop<?php echo $nivd; ?><?php echo $gringo; ?>" style="color:#14cefc;display:none"><bottr>Cool</bottr></span>

       <span id="carelisttop<?php echo $nivd; ?><?php echo $gringo; ?>" style="color:#eeeeee;display:none"><bottr>Care</bottr></span>

        <span id="funlisttop<?php echo $nivd; ?><?php echo $gringo; ?>" style="color:#ffcc00;display:none"><bottr>Fun</bottr></span>

      </span>

           </div> 
            <div class="col-xs-3 col-sm-4">   </div>  
                     </div>  




 <div  id="q6<?php echo $nivd; ?><?php echo $gringo; ?>"  class="col-xs-12 z"  style="padding:0px">
   </div>
    <div  id="q2<?php echo $nivd; ?><?php echo $gringo; ?>"  class="col-xs-12 z"  style="padding:0px">
   </div>
 

    <div class="col-xs-12" id="q1<?php echo $nivd; ?><?php echo $gringo; ?>"  style="padding:0px;">

        


   <div class="col-xs-12 "   style="padding:5px;"></div>


    <div class="col-xs-hidden col-sm-2"   style="padding:0px;"></div>
  <div class="col-xs-12 col-sm-8 "   style="padding:0px;margin-top:-7px">
<div  class="col-xs-3 zuzax dontallowselect"    onmousedown="javascript:fun<?php echo $nivd; ?><?php echo $gringo; ?>();"  style="padding:0px;text-align:center;padding-bottom:4px;padding-top:6px">
   <span id="k1<?php echo $nivd; ?><?php echo $gringo; ?>" class="numdeactive" style="display:inline-block">
   <?php echo $fun; ?>
 </span>
  <img src="images/laugh.png"  id="emy1<?php echo $nivd; ?><?php echo $gringo; ?>" class="zuzax juju emodeactive "    height="23px" width="auto" 
style="border-radius:20px;padding:2px"/></div>

<div  class="col-xs-3 zuzax dontallowselect "   onmousedown="javascript:care<?php echo $nivd; ?><?php echo $gringo; ?>();" style="padding:0px;text-align:center;padding-bottom:4px;padding-top:6px">
   <span id="k2<?php echo $nivd; ?><?php echo $gringo; ?>"  class="numdeactive" style="display:inline-block">
      <?php echo $care; ?>
  </span>
 <img src="images/oo.png"  id="emy2<?php echo $nivd; ?><?php echo $gringo; ?>" class="zuzax juju emodeactive "      height="23px" width="auto" 
style="border-radius:20px;padding:2px"/></div>

<div  class="col-xs-3  zuzax dontallowselect"  onmousedown="javascript:fresh<?php echo $nivd; ?><?php echo $gringo; ?>();" style="padding:0px;text-align:center;padding-bottom:4px;padding-top:6px">
   <span id="k3<?php echo $nivd; ?><?php echo $gringo; ?>" class="numdeactive" style="display:inline-block">
      <?php echo $cool; ?>
  </span> 
 <img src="images/cool.png"  id="emy3<?php echo $nivd; ?><?php echo $gringo; ?>" class="zuzax juju emodeactive"     height="23px" width="auto" 
style="border-radius:20px;padding:2px"/></div>



<div  class="col-xs-3 zuzax dontallowselect"  onmousedown="javascript:lovely<?php echo $nivd; ?><?php echo $gringo; ?>();"  style="padding:0px;text-align:center;padding-bottom:4px;padding-top:6px">
  <span id="k4<?php echo $nivd; ?><?php echo $gringo; ?>" class="numdeactive" style="display:inline-block">
    <?php echo $lovely; ?>
</span>
 <img src="images/love.png"  id="emy4<?php echo $nivd; ?><?php echo $gringo; ?>"  height="23px" width="auto"   class="zuzax juju emodeactive"   
style="border-radius:20px;padding:2px"/></div>

</div>


 <div class="col-xs-hidden col-sm-2"   style="padding:0px;"></div>





  

   <div class="col-xs-12 "   style="padding:0px">
     <div class="col-xs-hidden col-sm-2"   style="padding:0px;"></div>
     <div class="col-xs-12 col-sm-8"   style="padding:0px;">

 <div class="col-xs-3"   style="padding:0px;">
   <div class="col-xs-hidden col-sm-3"   style="padding:0px;"> </div>
    <div class="col-xs-12  col-sm-6 " id="emy1x<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;border: solid rgba(255,255,255,0.0);border-bottom: solid #000000;border-radius:0px;height:4px">  </div> 
  </div>

    <div class="col-xs-3"   style="padding:0px;">
        <div class="col-xs-hidden col-sm-3"   style="padding:0px;"> </div>
    <div class="col-xs-12  col-sm-6" id="emy2x<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;border: solid rgba(255,255,255,0.0);border-bottom: solid #000000;border-radius:0px;height:4px">  </div> 
  </div>
     
      <div class="col-xs-3"   style="padding:0px;">
          <div class="col-xs-hidden col-sm-3"   style="padding:0px;"> </div>
    <div class="col-xs-12 col-sm-6 " id="emy3x<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;border: solid rgba(255,255,255,0.0);border-bottom: solid #000000;border-radius:0px;height:4px">  </div> 
  </div>

     
      <div class="col-xs-3"   style="padding:0px;">
          <div class="col-xs-hidden col-sm-3"   style="padding:0px;"> </div>
    <div class="col-xs-12 col-sm-6 " id="emy4x<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;border: solid rgba(255,255,255,0.0);border-bottom: solid #000000;border-radius:0px;height:4px">  </div> 
  </div>

       
   </div>

 </div>

  

   <div class="col-xs-12 "   style="padding:0.5px;background-color: rgba(000,000,000,0.09);"></div>

         </div>  


  
</div>  
</div>
</div>

















   
    <div class="col-xs-12"   style="padding:0px;background-color:<?php echo $comtheme1; ?>;min-height:100%;min-height:100vh;"> 
  <div class="col-xs-hidden col-sm-1 col-md-1  "   style=" "> </div>
 <div  class="col-xs-12  za"   style="background-color:<?php echo $comtheme2; ?>;min-height:100%;min-height:100vh;border-top-left-radius:10px;border-top-right-radius:10px;padding:0px;">
          
        

<div id="q3<?php echo $nivd; ?><?php echo $gringo; ?>" class="col-xs-12 zazp"></div>
<div id="q4<?php echo $nivd; ?><?php echo $gringo; ?>" class="col-xs-12 zazp"></div>
<div id="q5<?php echo $nivd; ?><?php echo $gringo; ?>"  class="col-xs-12 zau"></div>
<div id="qx<?php echo $nivd; ?><?php echo $gringo; ?>"  class="col-xs-12 zaz"  style="display:none"></div>
<div class="col-xs-12 za"></div>
<div class="col-xs-12 zazp2"></div>


<div class="col-xs-hidden  col-sm-1"  style=""></div>

 <div class="col-xs-12  col-sm-12"  id="superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>"  style="padding:0px;">




</div>
</div>




<div  class="col-xs-12 "   id="pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;z-index:2;position:absolute;top:45%;padding:0px;text-align:center;font-size:210%;color:#cccccc">
 <div  class=" waveboy"  ><i class="far fa-hand-paper"></i> </div>
 </div> 





<div  class="col-xs-12 zuperxya"   id="pageempty<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;z-index:2;position:absolute;top:45%;padding:0px;text-align:center;font-size:200%;color:#ffffff">
 <i class="fas fa-folder"></i> 
 </div> 








<script type="text/javascript">

   function golist(a,x){ 
var b ="<?php echo $nivd; ?>";
var c ="<?php echo $gringo; ?>";

   
        var e ="<?php echo $mem; ?>";
          var f ="<?php echo $type; ?>";
           var g ="<?php echo $pagenum; ?>";
            var h ="<?php echo $jump; ?>";
             var i ="<?php echo $jumplock; ?>";
              var j ="<?php echo $pagenumin; ?>";
              if(x == 0){  var k ="<?php echo $jumpin; ?>"; }
                 else{ var k = 0;  }
                  var l ="<?php echo $jumplockin; ?>";
           
              
    $.ajax({
  type: "POST",
  url: "emotionlistingsgate.php",
  data: {emotion:a,postid:b,gringo:c,member:e,typex:f,page:g,jump:h,jumplock:i,pagein:j,jumpin:k,jumplockin:l},
 success: function(data){

  document.getElementById("activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").value=a;

 var aax=document.querySelector("#k"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numdeactive");
  aax.classList.add("numactivekey"+a+"");
    var aa1=document.querySelector("#emy"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emodeactive");
   aa1.classList.add("emoactivekey"+a+"");
    aa1.style.marginTop="-7px";
    aa1.style.height="28px";
     aa1.style.width="auto";
     $("#emy"+a+"x<?php echo $nivd; ?><?php echo $gringo; ?>").show();

$("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
$("#superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }

    




 function switchtop<?php echo $nivd; ?><?php echo $gringo; ?>(){ 
   if(poptypetop==1){   $("#q1<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
  $("#q3<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
  $("#q4<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
   $("#q5<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
   $("#qx<?php echo $nivd; ?><?php echo $gringo; ?>").show();  
    poptypetop=0; }else{ 
      $("#q1<?php echo $nivd; ?><?php echo $gringo; ?>").show();
  $("#q3<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
  $("#q4<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
   $("#q5<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
   $("#qx<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
    poptypetop=1;  }       }


  
  $(document).ready(function(){

    $("#feedwait").hide();

    if(mobileboy == 0){  
var htopx=document.getElementById("emoparent<?php echo $nivd; ?><?php echo $gringo; ?>");
        htopx.style.fontSize="158%";
            var aae=document.querySelector("#emoarrow<?php echo $nivd; ?><?php echo $gringo; ?>");
             aae.style.fontSize="140%";
        var htopa=document.getElementById("superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>");
        htopa.style.padding="0px";
        htopa.style.paddingLeft="60px";
        htopa.style.paddingRight="60px";
      $("#superpop").addClass('sliderlook');  }
    else{  
     var htop=document.getElementById("holdtopcontrol");
        htop.style.padding="0px";   htop.style.marginTop="-1px";    htop.style.paddingRight="0px";    }


timeoutclear=1;
toptime=setTimeout(function(){  var htop=document.getElementById("holdtopcontrol");
     htop.style.position="fixed";   timeoutclear=0;},4000);

$("#pageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
$("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 



 if(poptypetop==0){   $("#q1<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
  $("#q3<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
  $("#q4<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
   $("#q5<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
   $("#qx<?php echo $nivd; ?><?php echo $gringo; ?>").show(); }


var aa="<?php echo $emo; ?>";
  var aax=document.querySelector("#k"+aa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numdeactive");
  aax.classList.add("numactivekey"+aa+"");
    var aa1=document.querySelector("#emy"+aa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emodeactive");
   aa1.classList.add("emoactivekey"+aa+"");


   golist(<?php echo $emo; ?>,0);

  }); 



  




  
 function blackarrow(){ history.back(); }



    

     function removeactive<?php echo $nivd; ?><?php echo $gringo; ?>(){
  var listactive = $("#activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(listactive == 1){ 
$("#funlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").hide();}
else if(listactive == 2){ 
$("#carelisttop<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); }
else if(listactive == 3){ 
$("#freshlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").hide();}
else if(listactive == 4){ 
$("#lovelylisttop<?php echo $nivd; ?><?php echo $gringo; ?>").hide();}  }







      function lovely<?php echo $nivd; ?><?php echo $gringo; ?>(){
        document.getElementById("superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>").innerHTML="";
        $("#pageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
        $("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
     removeactive<?php echo $nivd; ?><?php echo $gringo; ?>();
    $("#lovelylisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show();
var xa = $("#activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").val();
  var aax=document.querySelector("#k"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numactivekey"+xa+"");
 aax.classList.add("numdeactive");
  var aa1=document.querySelector("#emy"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emoactivekey"+xa+"");
 aa1.classList.add("emodeactive");
  aa1.style.marginTop="0px";
 aa1.style.height="23px";
     aa1.style.width="auto";
      $("#emy"+xa+"x<?php echo $nivd; ?><?php echo $gringo; ?>").hide();


           golist(4,1);}




      function fresh<?php echo $nivd; ?><?php echo $gringo; ?>(){
        document.getElementById("superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>").innerHTML="";
        $("#pageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
        $("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
     removeactive<?php echo $nivd; ?><?php echo $gringo; ?>();
    $("#freshlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
    var xa = $("#activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").val();
      var aax=document.querySelector("#k"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numactivekey"+xa+"");
 aax.classList.add("numdeactive");
  var aa1=document.querySelector("#emy"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emoactivekey"+xa+"");
 aa1.classList.add("emodeactive");
 aa1.style.marginTop="0px";
 aa1.style.height="23px";
     aa1.style.width="auto";
      $("#emy"+xa+"x<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
         golist(3,1);}




    function care<?php echo $nivd; ?><?php echo $gringo; ?>(){
      document.getElementById("superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>").innerHTML="";
      $("#pageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
      $("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
     removeactive<?php echo $nivd; ?><?php echo $gringo; ?>();
    $("#carelisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show();
     var xa = $("#activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").val();
       var aax=document.querySelector("#k"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numactivekey"+xa+"");
 aax.classList.add("numdeactive");
  var aa1=document.querySelector("#emy"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emoactivekey"+xa+"");
 aa1.classList.add("emodeactive");
 aa1.style.marginTop="0px";
 aa1.style.height="23px";
     aa1.style.width="auto";
      $("#emy"+xa+"x<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
           golist(2,1);}




     function fun<?php echo $nivd; ?><?php echo $gringo; ?>(){
      document.getElementById("superemotionlist<?php echo $nivd; ?><?php echo $gringo; ?>").innerHTML="";
      $("#pageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
      $("#pagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
     removeactive<?php echo $nivd; ?><?php echo $gringo; ?>();
     $("#funlisttop<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
         var xa = $("#activelisting<?php echo $nivd; ?><?php echo $gringo; ?>").val();
  var aax=document.querySelector("#k"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aax.classList.remove("numactivekey"+xa+"");
 aax.classList.add("numdeactive");
  var aa1=document.querySelector("#emy"+xa+"<?php echo $nivd; ?><?php echo $gringo; ?>");
 aa1.classList.remove("emoactivekey"+xa+"");
 aa1.classList.add("emodeactive");
 aa1.style.marginTop="0px";
 aa1.style.height="23px";
     aa1.style.width="auto";


      $("#emy"+xa+"x<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
          golist(1,1);}




</script>








