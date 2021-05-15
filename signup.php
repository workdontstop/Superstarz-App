 



<?php   


  $tempusername=$_POST['tempuser']; 
     $state=$_POST['state'];




?>






<?php 


if($state==0){


  echo'
<div class="col-xs-12" id="semiupload"  style="padding:0px">

 <style>
.subgo{ cursor:pointer;color:#000000}
.substall{ color:#cccccc }
  </style>


 <input  id="timerstate"   value="0"   hidden> 
 <div id="usernamepattern" style="padding:0px;">  </div>

<div class="container " >
<div class="row" >
<div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


<div class="tur col-xs-12 col-sm-6 col-md-4"  style="padding:0px;border-radius:10px;
  height:auto;padding-bottom:20px;padding-top:20px">
 <div class=" col-xs-12 " style="padding:0px">


<div class="col-xs-4"   style="padding:0px;text-align:center;font-size:150%;font-weight:bolder;color:#000000;margin-top:-18px"> 
<span   onclick="javascript:closee();"   class="superbuttonshover juju zuzax zuperxy" style="float:left;">
    <i class="fas fa-arrow-left" ></i> </span> </div>


<div class="col-xs-4"   style="padding:0px;text-align:center;font-size:120%;font-weight:bolder;
    color:#000000;padding-bottom:8px"> <vvpandi>  SIGN UP </vvpandi>  </div>



    <div class=" col-xs-4 "  style="padding:0px;font-size:110%;margin-top:-0.5px;" >

<i>
<b style="float:right;margin-right:17px">
<span class="zuzax zuperxy" id="again" onclick="javascript:lear();"  style="display:none;"> In Use <span style="color:red"> <i class="fas fa-sync-alt"></i> </span>  </span>

<span id="okay" class="zuperxy" style="display:none;"> Perfect <span style="color:blue"> <i class="fas fa-check"></i>  </span></span>

<span  class="zuperxya"   id="userloader" style="display:none;"><i class="fas fa-stroopwafel  fa-spin"></i></span>
</b>  </i>

  </div> 



    </div>

<div  class="col-xs-12 za">  </div>

  <form id="usernameking"  action="signup.php"  method="post">
<div class="form-group"  style="padding:10px ">

<input  oninput="javascript:checkus();"  type="text" class="form-control  turtextfield" name="usercheck"  id="myusercheck"  placeholder="Create Username"  style="color:#000000;font-weight:bolder"  required>

</div>    



<div  class="col-xs-4">  </div>
<button type="submit" id="usersubmit" class="superbuttons dontallowselect substall col-xs-4" style="background-color:#ffffff;"> Go  </button>
<div  class="col-xs-4" style="font-size:150%;"> 
<div class="col-xs-11" style="text-align:right;margin-top:4px;position:absolute"><span id="againx"  style="display:none;"> &#128546</span>
       <span id="okayx"  style="display:none;"> &#128514</span> </div> </div>

</form>   </div>

 <div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


     </div> </div>  </div>




<script language="javascript">
     allowusername = 0;

    function checkus(){
       allowusername = 0;
       $("#usersubmit").removeClass("subgo");
         $("#usersubmit").addClass("substall");
        $("#okay").hide();
        $("#okayx").hide();
        $("#again").hide();
      $("#againx").hide();
      var userdata=   $("#myusercheck").val();
   if(userdata == ""){ $("#userloader").hide();  stopcheckustimer(); }
  else{ $("#userloader").show(); resetstartcheckustimer() }  }


function stopcheckustimer(){
var t = $("#timerstate").val();
if(t == 1){ clearTimeout(time);  document.getElementById("timerstate").value=0;  } } 


function resetstartcheckustimer(){
var t = $("#timerstate").val();
if(t == 1){ clearTimeout(time);   document.getElementById("timerstate").value=0; }
   time=setTimeout(function(){ activatecheckus(); },2000);
   document.getElementById("timerstate").value=1; } 





       function  activatecheckus(){
        document.getElementById("timerstate").value=0;
       $.ajax({  type: "POST",
  url: "signup.php",
  data: {tempuser:$("#myusercheck").val(),state:1}, 
 success: function(data){
    $("#usernamepattern").html(data).show(); },
  error: function(){
    $("#errorback").show();
     $("#scripterror").show();}
         });  }

  


  function lear(){
    document.getElementById("myusercheck").value=""; 
    checkus(); }



  function closee(){
    stopcheckustimer();
      $("#indexloader").show();
      $("#popback").hide();
       $("#pop").hide();  }




$(document).ready(function(){
$("#indexloader").hide();
$("#usernameking").submit(function(e) {
 e.preventDefault(); 
if(allowusername == 1){
        var formx = $(this);
var urlx = formx.attr("action");
$.ajax({
  type: "POST",
  url: urlx,
  data: {tempuser:$("#myusercheck").val(),state:2}, 
 success: function(data){
    $("#semiupload").html(data).show(); },
  error: function(){
    $("#errorback").show();
     $("#scripterror").show();}
         });    }
    });  });




</script>



     ';

   }


else if($state == 1){

 require('dataco.php'); 

 $sqlczz="SELECT  count(num) as ud FROM member WHERE user=? "; 
                              $instcz= $super->prepare($sqlczz);
                                 if(false === $instcz){
                              echo'<script>  $("#errorback").show(); 
                               $("#dataerror1").show();
                                    </script>'; }else{
                            $instczlock= $instcz->bind_param("s",$nsscz);
                                  if(false === $instczlock){ 
                             $instcz->close();
                               echo'<script>  $("#errorback").show(); 
                               $("#dataerror2").show();
                                    </script>';  }
                                    else{
                            $nsscz=$tempusername;
                            $instczlock=  $instcz->execute();
                             if(false === $instczlock){ 
                                 $instcz->close();
                                 echo'<script>  $("#errorback").show(); 
                               $("#dataerror1").show();
                                    </script>';  }else{
                              $rescz=$instcz->get_result();
                             $tit= $rescz->num_rows;
                              if($row = $rescz->fetch_assoc() ){
                                $aval= $row['ud'];}
                            $instcz->close(); }  } }

                               if($aval == 0){

                                 echo '
                                <script>
                                 allowusername = 1;
                                $("#userloader").hide();
                                $("#again").hide();
                                 $("#againx").hide();
                                  $("#okay").show();
                                  $("#okayx").show();
                                    $("#usersubmit").removeClass("substall");
                                 $("#usersubmit").addClass("subgo");
                                </script>
                                ';

                              }else{


                                echo '
                                <script>
                                allowusername = 0;
                                $("#userloader").hide();
                                 $("#okay").hide();
                                  $("#okayx").hide();
                                $("#again").show();
                                 $("#againx").show();
                                  $("#usersubmit").removeClass("subgo");
                                 $("#usersubmit").addClass("substall");
                                </script>
                                ';
                               

                             }


}

else if($state ==2){

echo '

 <style>
.subgox{ cursor:pointer;color:#000000}
.substallx{ color:#cccccc }
  </style>


 <input  id="timerstatex"   value="0"   hidden> 
 

<div class="container " >
<div class="row" >
<div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


<div class="tur col-xs-12 col-sm-6 col-md-4"  style="padding:0px;border-radius:10px;
  height:auto;padding-bottom:20px;padding-top:20px">
 <div class=" col-xs-12 " style="padding:0px">

<div class="col-xs-4"   style="padding:0px;text-align:center;font-size:150%;font-weight:bolder;color:#000000;margin-top:-18px"> 
<span   onclick="javascript:closeex();"   class="superbuttonshover juju zuzax zuperxy" style="float:left;">
     <i class="fas fa-arrow-left" ></i> </span> </div>

<div class="col-xs-4"   style="padding:0px;text-align:center;font-size:120%;font-weight:bolder;
    color:#000000;padding-bottom:8px"> <vvpandi>Password & Email </vvpandi>  </div>

<div class=" col-xs-4"  style="padding:0px;font-size:110%;margin-top:-0.5px;" >

<i>
<b style="float:right;margin-right:17px">
<span class="zuzax zuperxy" id="againz" onclick="javascript:xlear();"  style="display:none;">Mismatch<span style="color:red"> <i class="fas fa-sync-alt"></i> </span>  </span>

<span id="okayz" class="zuperxy"  style="display:none;"> Match<span style="color:blue"> <i class="fas fa-check"></i>  </span></span>

<span  class="zuperxya" id="userloaderx" style="display:none;"><i class="fas fa-stroopwafel  fa-spin"></i></span>
</b>  </i>

  </div> 



     </div>

<div  class="col-xs-12 za">  </div>

  <form id="passking"  action="signupsecure.php"  method="post">

<div class="form-group"  style="padding:10px ">

<input  oninput="javascript:checkusx();"  type="password" class="form-control  turtextfield" name="usercheck"  id="pas1"  placeholder="Password"  style="color:#000000;font-weight:bolder"  required>

</div>    


<div class="form-group"  style="padding:10px ">

<input  oninput="javascript:checkusx();"  type="password" class="form-control  turtextfield" name="usercheck"  id="pas2"  placeholder="Re-Enter Password"  style="color:#000000;font-weight:bolder"  required>

<i><div  style="padding-top:12px;" class="zuzax zuperxy dontallowselect juju"  onclick="javascript:paz();"> 
 <small  > <i class="fas fa-eye"></i><span id="newshowpass"> Show Passwords </span> </small> </div></i> 

</div>    



<div  class="col-xs-4">  </div>
<button type="submit" id="passsubmitx" class="superbuttons dontallowselect substallx col-xs-4" style="background-color:#ffffff;"> Go  </button>
<div  class="col-xs-4"> </div>

</form>   </div>

 <div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


     </div> </div> 




<script language="javascript">
     allowpass = 0;

    function checkusx(){
       allowpass = 0;
       $("#passsubmitx").removeClass("subgox");
         $("#passsubmitx").addClass("substallx");
        $("#okayz").hide();
        $("#againz").hide();
      var p1=   $("#pas1").val();
       var p2=   $("#pas2").val();
   if(p1 == "" || p2 == ""){ $("#userloaderx").hide();  stopcheckustimerx(); }
  else{ $("#userloaderx").show(); resetstartcheckustimerx() }  }


function stopcheckustimerx(){
var t = $("#timerstatex").val();
if(t == 1){ clearTimeout(timex);  document.getElementById("timerstatex").value=0;  } } 


function resetstartcheckustimerx(){
var t = $("#timerstatex").val();
if(t == 1){ clearTimeout(timex);   document.getElementById("timerstatex").value=0; }
   timex=setTimeout(function(){ 
    var p1=   $("#pas1").val();
       var p2=   $("#pas2").val();
       if(p1 == p2){
                             allowpass = 1;
                                $("#userloaderx").hide();
                                $("#againz").hide();
                                  $("#okayz").show();
                                    $("#passsubmitx").removeClass("substallx");
                                 $("#passsubmitx").addClass("subgox");
                   }else{

                          allowpass = 0;
                                $("#userloaderx").hide();
                                 $("#okayz").hide();
                                $("#againz").show();
                                  $("#passsubmitx").removeClass("subgox");
                                 $("#passsubmitx").addClass("substallx");
        }
                 },2000);
   document.getElementById("timerstatex").value=1; } 

  


  function xlear(){
    document.getElementById("pas1").value=""; 
     document.getElementById("pas2").value=""; 
    checkusx(); }



  function closeex(){
    stopcheckustimerx();
      $("#indexloader").show();
      $("#popback").hide();
       $("#pop").hide();  }





 function paz(){

    var obj = document.getElementById("pas1");
    var obj2 = document.getElementById("pas2");
    if(obj.type=="text"){
    obj.type="password"; obj2.type="password";
  document.getElementById("newshowpass").innerHTML=" Show Password";
    }else{
    obj.type="text";obj2.type="text";
   document.getElementById("newshowpass").innerHTML=" Hide Password";
    }   } 


$(document).ready(function(){




$("#indexloader").hide();
$("#passking").submit(function(e) {
 e.preventDefault(); 
if(allowpass == 1){
  var u="'.$tempusername.'";
        var formx = $(this);
var urlxa = formx.attr("action");
$.ajax({
  type: "POST",
  url: urlxa,
  data: {user:u,pass:$("#pas1").val(),pass2:$("#pas2").val()}, 
 success: function(data){
    $("#recievelogindata").html(data).show(); },
  error: function(){
    $("#errorback").show();
     $("#scripterror").show();}
         });    }
    });  });




</script>


     ';

}



  ?>


 










