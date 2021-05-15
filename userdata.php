


     
<script type="text/javascript">

  

 allimageloaded="allowbodyhide";

</script>
     

<?php 

include('exitx.php');


 

  include('forceinfont.php'); 

 include('theme.php');  



 ?>



  <input  id="userdataid"   value="<?php echo $d; ?>" hidden>

<?php

                            $viewuser="";
                               $viewuserpic=""; 
                                $viewuserdetails="";
                                $viewusercolor="";  


///selecting information for this superstar user 
$seluserinfo="SELECT user,imname,name,cl,quote FROM member WHERE num=?  "; 
             $userpack= $super->prepare($seluserinfo);
                if(false === $userpack){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
              $userpacklock = $userpack->bind_param("i",$mynum);
                           $mynum=$d;
                     $userpacklock =   $userpack->execute();
                      if(false === $userpacklock){
                        $userpack->close();
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                              $res=$userpack->get_result();
                               $finalres= $res->num_rows;
                             while($row = $res->fetch_assoc() ){
                                 $viewuser=$row['user'];
                               $viewuserpic=$row['imname']; 
                                $viewuserdetails=$row['name'];
                                   $viewuserquote=$row['quote'];
                                $viewusercolor=$row['cl'];   }  
                                $userpack->close(); }}
        ///selecting information for this superstar user 


if($viewuserdetails == "" ){ $viewuserdata = $viewuserquote;  }else{  $viewuserdata = $viewuserdetails;}



echo'<title> Superstarz : '.$viewuser.' </title>';


 include('unused/tempclear.php'); 


////////if user does not exist ,even thou if== false in the mysql statement above will handle it  jst for redundancy

 if(!$finalres || $finalres=='0'){ 
 //// echo'<script> location.href="social.php";  </script> '; 
   } 

////////if user does not exist ,even thou if== false in the mysql statement above will handle it  jst for redundancy




/////count fav and fans 
$favsum=mysqli_query($super,"SELECT count(id) FROM fav WHERE num='".$d."' " );   
$fansum=mysqli_query($super,"SELECT count(id) FROM fan WHERE num='".$d."' " ); 
           $favoritecount=$favsum->fetch_row();   $fancount=$fansum->fetch_row();
/////count fav and fans 



$fannum = $fancount[0];   
if($fannum == 1){ $fanname="FAN";}
else if($fannum == 0){ $fanname="FAN"; $fannum ="..";}
else{ $fanname="FANS";}

$favnum = $favoritecount[0];   
if($favnum == 1){ $favname="FAVORITE";}
else if($favnum == 0){ $favname="FAVORITE"; $favnum ="..";}
else{ $favname="FAVORITES";}


?>







 <?php  include('userprofileinfo.php');   ?>



  

 <kk  class="col-xs-12"></kk>
<div class="col-xs-12" id="supersort" style="padding:0px">
<div class="col-xs-3  col-sm-5" style="padding:0px" ></div>
<div class="col-xs-6  col-sm-2  "   style="padding:0px;text-align:center;font-size:150%;color:#000000" >
<div class="col-xs-12 superbuttonshover juju zuzax" style="padding:0px">
   <i class=" fa
fa-ellipsis-h" aria-hidden="true"></i>


</div></div>
<div class="col-xs-3  col-sm-5"  style="padding:0px"></div></div>



<style type="text/css">

  
.zuperxybutt{text-shadow: 0.1px 1.2px 2.4px #000000;color: #ffffff; }

.turflux{height: auto; background-color: rgba(255,255,255,0.49); -moz-box-shadow: 0 0 5px#cccccc;
 -webkit-box-shadow: 0 0 5px#cccccc;box-shadow: 0 0 5px#cccccc;color:#000000;padding-right:1.5px;padding-left:4.5px  };

  @keyframes waveme {
  0% {transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
              }
  10% {
    transform:rotate(10deg);
-webkit-transform: rotate(10deg);
-moz-transform :rotate(10deg);
-ms-transform:rotate(10deg);
-o-transform: rotate(10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);

  }
 20% {
transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
 }
 30% {transform:rotate(10deg);
-webkit-transform: rotate(10deg);
-moz-transform :rotate(10deg);
-ms-transform:rotate(10deg);
-o-transform: rotate(10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
} 
   40% {
transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
   }
  50% {transform:rotate(10deg);
-webkit-transform: rotate(10deg);
-moz-transform :rotate(10deg);
-ms-transform:rotate(10deg);
-o-transform: rotate(10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
}
 60% {
transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
 }
 70% {transform:rotate(10deg);
-webkit-transform: rotate(10deg);
-moz-transform :rotate(10deg);
-ms-transform:rotate(10deg);
-o-transform: rotate(10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
} 
  80% { 
    transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
   }
 90% {
  transform:rotate(10deg);
-webkit-transform: rotate(10deg);
-moz-transform :rotate(10deg);
-ms-transform:rotate(10deg);
-o-transform: rotate(10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);

 }
 100% {  transform:rotate(-10deg);
-webkit-transform: rotate(-10deg);
-moz-transform :rotate(-10deg);
-ms-transform:rotate(-10deg);
-o-transform: rotate(-10deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); }  }





.waveboy { 
-webkit-animation:waveme 5s infinite; /* Safari 4+ */
  -moz-animation:waveme 5s infinite;  /* Fx 5+ */
  -o-animation:waveme 5s infinite;  /* Opera 12+ */
  animation:waveme 5s infinite;   /* IE 10+, Fx 29+ */}









  @keyframes wavemex {
  0% {      }
  50% { margin-top:1.03px;    } 
 50% { margin-top:1.75px;    } 
 100% { margin-top:3px;    }     }





.hopboy { 
-webkit-animation:wavemex 0.3s infinite; /* Safari 4+ */
  -moz-animation:wavemex 0.3s infinite;  /* Fx 5+ */
  -o-animation:wavemex 0.3s infinite;  /* Opera 12+ */
  animation:wavemex 0.3s infinite;   /* IE 10+, Fx 29+ */}




 .connectbutton{background-color:#ffffff;background-color:rgba(255,255,255,0.9);
  border-radius:6px;border:solid rgba(255,255,255,0.5);padding:0px;text-align:center;
    margin:auto;font-weight:bold;-moz-box-shadow:0 0 6px#aaaaaa;-webkit-box-shadow: 0 0 6px#aaaaaa;box-shadow: 0 0 6px#aaaaaa;}

   .connectbuttonx{background-color:#cccccc;background-color:rgba(000,000,005,0.7); border: solid rgba(000,000,005,0.3);
    border-radius:6px;padding:5px;text-align:center;margin:auto;
    font-weight:bold;-moz-box-shadow: 0 0 12px#666666;-webkit-box-shadow: 0 0 12px#666666;box-shadow: 0 0 12px#666666;}






.turlowtiny2dark{height: auto; background-color: #ffffff; -moz-box-shadow: 0 0 2px#000000;
 -webkit-box-shadow: 0 0 2px#000000;box-shadow: 0 0 2px#000000;}

 .pcreacttext{ font-size:102%; }

  .mobilereacttext{ font-size:92%; }




 .connectbuttonplus{background-color:#ffffff;color:#999999;-moz-box-shadow: 0 0 3px#111111;
 -webkit-box-shadow: 0 0 3px#111111;box-shadow: 0 0 3px#111111;border-radius:100%;border: solid 1px #cccccc  } 
 .connectbuttonplus:hover{background-color:#eeeeee;color:#aaaaaa;-moz-box-shadow: 0 0 3px#333333;
 -webkit-box-shadow: 0 0 3px#333333;box-shadow: 0 0 3px#333333;border-radius:100%;border: solid 1px #cccccc  } 

  .connectbuttonplusa{background-color:#eeeeee;color:#999999;-moz-box-shadow: 0 0 3px#111111;
 -webkit-box-shadow: 0 0 3px#111111;box-shadow: 0 0 3px#111111;border-radius:100%;border: solid 1px #cccccc  } 
 .connectbuttonplusa:hover{background-color:#ffffff;color:#aaaaaa;-moz-box-shadow: 0 0 3px#333333;
 -webkit-box-shadow: 0 0 3px#333333;box-shadow: 0 0 3px#333333;border-radius:100%;border: solid 1px #cccccc  } 
  
.mobilepushaddcom{ left:0px }
.pcpushaddcom{ left:-7px }


 .connectbuttonplusx{background-color:#555555;color:#ffffff;-moz-box-shadow: 0 0 2.5px#555555;
 -webkit-box-shadow: 0 0 2.5px#555555;box-shadow: 0 0 2.5px#555555;border-radius:100%; border: solid 1px #555555 } 
 .connectbuttonplusx:hover{ background-color:#0b1728;color:#ffffff;-moz-box-shadow: 0 0 2.5px#555555;
 -webkit-box-shadow: 0 0 2.5px#555555;box-shadow: 0 0 2.5px#555555;border-radius:100%; border: solid 1px #555555  }

 .connectbuttonplusxa{background-color:#555555;color:#ffffff;-moz-box-shadow: 0 0 2.5px#555555;
 -webkit-box-shadow: 0 0 2.5px#555555;box-shadow: 0 0 2.5px#555555;border-radius:100%; border: solid 1px #555555 } 
 .connectbuttonplusxa:hover{ background-color:#0b1728;color:#ffffff;-moz-box-shadow: 0 0 2.5px#555555;
 -webkit-box-shadow: 0 0 2.5px#555555;box-shadow: 0 0 2.5px#555555;border-radius:100%; border: solid 1px #555555  }





 .profileimageinfopc{margin-left:4em;} 
  .profileimageinfo{margin-left:2.6em;}   


  .posttypeszpc{margin-top:1.2em}
.posttypesz{margin-top:6px}


.thumbyzpc{font-size:145%}
.thumbyz{font-size:125%}


.profileimagezpc{padding:12px;margin-top:-5px}
.profileimagez{padding:4px;margin-top:5px}


.profileimagezpcx{padding:20px;margin-top:-5px}
.profileimagezx{padding:8px;margin-top:5px}


.previewimagezpc{bottom:8em}
.previewimagez{bottom:5.5em}

.capypc{font-size:132%}
.capy{font-size:116%;}

.usypc{font-size:109%;}
.usy{font-size:95%}



.motoppc{font-size:108%}
.motop{font-size:86%}

.datausernamezpc{margin-top:15px;font-size:201%}
.datausernamez{margin-top:12px;font-size:88%}

.postfunctionszpc{margin-top:5.25px}
.postfunctionsz{margin-top:1px}


.postscrollloaderzpc{margin-top:2em}
.postscrollloaderz{mmargin-top:1.5em}




.firstimpc{border-radius:6px}
.firstim{border-radius:0px}

.clicktxtzpc{margin-top:1.4em}
.clicktxtz{margin-top:0.9em}


.profileimageinfoinsidezpc{margin-left:-0.1em;margin-top:2.25px}
.profileimageinfoinsidez{margin-top:0.2em;margin-top:2.25px;}


.postnumberinzpc{left:-0.4em}
.postnumberinz{left:0.5em;}


.postnumberinxzpc{padding-bottom:6px}
.postnumberinxz{padding-bottom:4px}

.postnumberzpc{top:1em}
.postnumberz{top:1.1em}


 .themelayerx{color:#ffffff;border: solid #cccccc;background-color:#cccccc;border: solid rgba(000,000,005,0.3);
    background-color:rgba(000,000,005,0.6); border-radius:7px;padding:5px;text-align:center;margin:auto;
    font-weight:bold;-moz-box-shadow: 0 0  3px#333333;-webkit-box-shadow: 0 0 3px#333333;box-shadow: 0 0  3px#333333;
    color:#ffffff;text-shadow: 1.2px 2px 2.4px #000000;padding-left:10px;padding-right:10px;}

.themelayer{color:#000000;border: solid #ffffff;background-color:#ffffff;border: solid rgba(255,255,255,0.5);
    background-color:rgba(255,255,255,0.9); border-radius:7px;padding:5px;text-align:center;margin:auto;font-weight:bold;
    -moz-box-shadow:0 0 6px#cccccc;-webkit-box-shadow: 0 0 6px#cccccc;box-shadow: 0 0 6px#cccccc;
    color:#000000;text-shadow: 1.2px 2px 2.4px #aaaaaa;padding-left:10px;padding-right:10px;}


.themepostlayerx{color:#ffffff;text-shadow: 1.2px 2px 2.4px #000000;font-weight:bolder}
.themepostlayer{color:#ffffff;background-color:#ffffff;
    background-color:rgba(255,255,255,0.6);text-shadow: 0.5px 0.25px 3px #ffffff;font-weight:bolder}



.topcloud{   border-radius: 0px;background-color:rgba(255,255,255,0.5);color:#0b1728; width:100%;height:37px;
 position:fixed;top:0em;-moz-box-shadow: 0 0 7px#cccccc; -webkit-box-shadow: 0 0 7px#cccccc;box-shadow: 0 0 7px#cccccc;  }    
.topcloudgate{ color: #0b1728; z-index:100; width:100%;height:37px; position:fixed;top: 0em; }  
.bottomcloud{  border-radius: 0px;background-color:rgba(255,255,255,0.5);color:#0b1728; width:100%;height:34px;
 position:fixed;bottom:0em;-moz-box-shadow: 0 0 7px#333333; -webkit-box-shadow: 0 0 7px#333333;box-shadow: 0 0 7px#333333; } 
.bottomcloudgate{  color: #0b1728; z-index:100; width:100%;height:34px; position:fixed;bottom:0em; }  






.bottomcloudwhite{  border-radius: 0px;color:#0b1728; width:100%;height:34px;
 position:fixed;bottom:0em; } 
.bottomcloudgatewhite{ color: #0b1728; z-index:100; width:100%;height:34px; position:fixed;bottom:0em; }  

.bottomcloudblack{  border-radius: 0px;background-color:rgba(225,225,225,0.3);color:#0b1728; width:100%;height:34px;
 position:fixed;bottom:0em;-moz-box-shadow: 0 0 1px#777777; -webkit-box-shadow: 0 0 1px#777777;box-shadow: 0 0 1px#777777; } 
.bottomcloudgateblack{ background-color:rgba(000,000,005,0.5); color: #0b1728; z-index:100; width:100%;height:34px; position:fixed;bottom:0em; }  


.superlocolor{background-color:<?php echo $viewusercolor; ?>;height:2.8px;width:100%;padding:0px;display:none;moz-box-shadow: 0 0 4px<?php echo $viewusercolor; ?>;-webkit-box-shadow: 0 0 4px<?php echo $viewusercolor; ?>;box-shadow: 0 0 4px<?php echo $viewusercolor; ?>;}





.emodeactive{border:solid 1px rgba(255,255,255,0.0);}

   .emoactivekey4{ -moz-box-shadow: 0 0 4px#666666;
    -webkit-box-shadow: 0 0 4px#666666;box-shadow: 0 0 4px#666666;border:solid #ff2a7f;margin-top:-4.6px;}

    .emoactivekey3{ -moz-box-shadow: 0 0 4px#666666;
    -webkit-box-shadow: 0 0 4px#666666;box-shadow: 0 0 4px#666666;border:solid #14cefc;margin-top:-4.6px;}

     .emoactivekey2{  -moz-box-shadow: 0 0 1px#666666;
    -webkit-box-shadow: 0 0 1px#666666;box-shadow: 0 0 1px#666666;border:solid #888888;margin-top:-4.6px;}

    .emoactivekey1{ -moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;border:solid #ffe700;margin-top:-4.6px;}

.numdeactive{color: #aaaaaa}
.numactivekey{ color:#000000 }







</style>




 <div  class="col-xs-12"  style="padding:0px;">
<div class="col-xs-hidden  col-sm-hidden  col-md-1" style="padding:0px"> </div>
<div class="col-xs-12  col-sm-12  col-md-12" style="padding:0px">
<div  id="supershow"   class="col-xs-12 "  style="padding:0px;">
</div></div>
<div class="col-xs-hidden  col-sm-hidden  col-md-1" style="padding:0px"> </div>
</div>



        <div  class="col-xs-12 zazp"></div>
        <div  class="col-xs-12 zazp"></div>
         <div  class="col-xs-12 zazp"></div>
          <div  class="col-xs-12 zazp"></div>
           <div  class="col-xs-12 zazp"></div>
             <div  class="col-xs-12 zazp"></div>
        <div  class="col-xs-12 zazp"></div>
         <div  class="col-xs-12 zazp"></div>
          <div  class="col-xs-12 zazp"></div>
           <div  class="col-xs-12 zazp"></div>




<div class="col-xs-12 zuzax"  id="profileerrorback"  onclick="javascript:clearerr();"   style="padding:0px;position:fixed;
z-index:550;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $viewbackground; ?>;display:none"></div>



      <div  class="col-xs-12 zuzax"   id="profilescripterror"  onclick="javascript:clearerr();" 
 style="height:25%;position:fixed;z-index:552;padding:20px;top:9em;display:none">
<?php  include('ajaxerror2.php');   ?>
</div>




 <div  class="col-xs-12 zuzax"   id="profiledataerror1"  onclick="javascript:clearerr();" 
 style="height:25%;position:fixed;z-index:552;padding:20px;top:9em;display:none">
    <?php  include('dataerror1x.php');   ?></div>




    <div  class="col-xs-12 zuzax"   id="profiledataerror2"  onclick="javascript:clearerr();" 
 style="height:25%;position:fixed;z-index:552;padding:20px;top:9em;display:none">
   <?php  include('dataerror2x.php');   ?></div>





      <style type="text/css">
#downsparowright{
    border-top: 10px solid <?php echo $viewusercolor; ?>;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: -12px;
    right: 2px;}

    #downsparowleft{
    border-top: 10px solid <?php echo $viewusercolor; ?>;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: -12px;
    left: 2px;}

 
 @keyframes fontbulger {
  0% {margin-top:-4.5px;
      margin-right:4px;
    font-size: 250%;}
 30% {margin-top:-2px;
    font-size: 200%;}
 100% {font-size: 160%;}}


.startbeat { 
-webkit-animation:fontbulger 0.5s infinite; /* Safari 4+ */
  -moz-animation:fontbulger 0.5s infinite;  /* Fx 5+ */
  -o-animation:fontbulger 0.5s infinite;  /* Opera 12+ */
  animation:fontbulger 0.5s infinite;   /* IE 10+, Fx 29+ */
}
.stopbeat { }




.fadeboyreact {
    -webkit-animation:vadeinreact 0.9s infinite; /* Safari 4+ */
  -moz-animation:vadeinreact 0.9s infinite;  /* Fx 5+ */
  -o-animation:vadeinreact 0.9s infinite;  /* Opera 12+ */
  animation:vadeinreact 0.9s infinite;   /* IE 10+, Fx 29+ */
}





.fadeboyreactfail {
    -webkit-animation:vadeinreactfa 0.3s infinite; /* Safari 4+ */
  -moz-animation:vadeinreactfa 0.3s infinite;  /* Fx 5+ */
  -o-animation:vadeinreactfa 0.3s infinite;  /* Opera 12+ */
  animation:vadeinreactfa 0.3s infinite;   /* IE 10+, Fx 29+ */
}




.fadeboyinfeedpop {
   -webkit-animation:vadeinx 0.6s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 0.6s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 0.6s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 0.6s linear 1 forwards;   /* IE 10+, Fx 29+ */   }



.fadeboyinfeed1 {
   -webkit-animation:vadeinx 3s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 3s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 3s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 3s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed2 {
   -webkit-animation:vadeinx 7s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 7s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 7s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 7s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

  .fadeboyinfeed3 {
   -webkit-animation:vadeinx 9s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 9s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 9s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 9s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed4 {
   -webkit-animation:vadeinx 12s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx12 linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 12s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 12s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed5 {
   -webkit-animation:vadeinx 14s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 14s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 14s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 14s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed6 {
   -webkit-animation:vadeinx 14s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 14s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 14s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 14s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed7 {
   -webkit-animation:vadeinx  14s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx  14s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx  14s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx  14s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed8 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed9 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed10 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed11 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed12 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed13 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed14 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed15 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed16 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed17 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed18 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed19 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed20 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

.fadeboyinfeed21 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

  .fadeboyinfeed22 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

  .fadeboyinfeed23 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

  .fadeboyinfeed24 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }

  .fadeboyinfeed25 {
   -webkit-animation:vadeinx 15s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeinx 15s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeinx 15s linear 1 forwards;  /* Opera 12+ */
  animation:vadeinx 15s linear 1 forwards;   /* IE 10+, Fx 29+ */   }











.fadeboyin {
  -webkit-animation:vadein 4s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadein 4s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadein 4s linear 1 forwards;  /* Opera 12+ */
  animation:vadein 4s linear 1 forwards;   /* IE 10+, Fx 29+ */
}


.fadeboyout {
    -webkit-animation:vadeout 4s linear 1 forwards; /* Safari 4+ */
  -moz-animation:vadeout 4s linear 1 forwards;  /* Fx 5+ */
  -o-animation:vadeout 4s linear 1 forwards;  /* Opera 12+ */
  animation:vadeout 4s linear 1 forwards;   /* IE 10+, Fx 29+ */}



 
 @keyframes streamline {
  0% {width:0%;}
  10% {width:0%;}
 30% {width:100%;}
 100% {width:100%;}  }


  @keyframes barline {
  0% {width:0%;border-top-right-radius:0px;}
  10% {width:10%;border-top-right-radius:0px;}
 20% {width:20%;border-top-right-radius:0px;}
 30% {width:30%;border-top-right-radius:0px;} 
   40% {width:40%;border-top-right-radius:0px;}
  50% {width:50%;border-top-right-radius:0px;}
 60% {width:60%;border-top-right-radius:0px;}
 70% {width:70%;border-top-right-radius:0px;} 
  80% {width:80%;border-top-right-radius:0px;}
 90% {width:90%;border-top-right-radius:0px;}
 100% {width:100%;border-top-right-radius:6px;}  }


  @keyframes reactbarline {
  0% {width:0%;border-bottom-right-radius:0px;}
  10% {width:10%;border-bottom-right-radius:0px;}
 20% {width:20%;border-bottom-right-radius:0px;}
 30% {width:30%;border-bottom-right-radius:0px;} 
   40% {width:40%;border-bottom-right-radius:0px;}
  50% {width:50%;border-bottom-right-radius:0px;}
 60% {width:60%;border-bottom-right-radius:0px;}
 70% {width:70%;border-bottom-right-radius:0px;} 
  80% {width:80%;border-bottom-right-radius:0px;}
 90% {width:90%;border-bottom-right-radius:0px;}
 100% {width:100%;border-bottom-right-radius:6px;}  }



  @keyframes smoothroll {
0%{ transform: translateY(-40px);}
100%{ transform: translateY(0px); }
}





@keyframes vadeinx {
   0% { opacity: 0 }
   10% { opacity: 0 }
     20% { opacity: 0 }
      60% { opacity: 0 }
      80% { opacity: 0.2 }
       90% { opacity: 0.4 }
   100% { opacity: 1 }  }



@keyframes vadein {
   0% { opacity: 0 }
  50% { opacity: 1 }
   100% { opacity: 1 }  }



@keyframes vadeinreact {
   0% { opacity: 0 }
  50% { opacity: 1 ;color:<?php echo $_SESSION['cl'];  ?>}
   100% { opacity: 1 }  }



@keyframes vadeinreactfa {
   0% { opacity: 0 }
  50% { opacity: 1 ;color:red}
   100% { opacity: 1 }  }



   @keyframes vadeout {
   0% { opacity:1}
     12.5% {opacity:0.25 }
    25% {opacity:0}
  50% {opacity:0}
   100% {opacity:0}  }




.startloader { 
-webkit-animation:streamline 0.5s; /* Safari 4+ */
 -webkit-animation-duration: 4s;
  -moz-animation:streamline 0.5s;  /* Fx 5+ */
   -moz-animation-duration: 4s;
  -o-animation:streamline 0.5s;  /* Opera 12+ */
  -o-animation-duration: 4s;
  animation:streamline 0.5s;   /* IE 10+, Fx 29+ */
   animation-duration: 4s;}

   .stoploader { }


   .startslidebar { 
-webkit-animation:barline 6s; /* Safari 4+ */
 -webkit-animation-duration:6s;
  -moz-animation:barline 6s;  /* Fx 5+ */
   -moz-animation-duration:6s;
  -o-animation:barline 6s;  /* Opera 12+ */
  -o-animation-duration:6s;
  animation:barline 6s;   /* IE 10+, Fx 29+ */
   animation-duration:6s;}

   .stopslidebar { }


.reactstartslidebar { 
-webkit-animation:reactbarline 6s; /* Safari 4+ */
 -webkit-animation-duration:6s;
  -moz-animation:reactbarline 6s;  /* Fx 5+ */
   -moz-animation-duration:6s;
  -o-animation:reactbarline 6s;  /* Opera 12+ */
  -o-animation-duration:6s;
  animation:reactbarline 6s;   /* IE 10+, Fx 29+ */
   animation-duration:6s;}

   .reactstopslidebar { }


.turlowtiny2{height: auto; background-color: #ffffff; -moz-box-shadow: 0 0 2px#cccccc;
 -webkit-box-shadow: 0 0 2px#cccccc;box-shadow: 0 0 2px#cccccc;}



 .pushtopimg{ padding:0px;height:15px }

 .indeximg{margin:auto;padding:0px;border-radius:0px;border-bottom-right-radius:4px;border-bottom-left-radius:4px}


.pushindexinfo{padding:5px;text-align:center;margin-top:10px}

.pushindexinfoafter{margin-top:40px}



.floatpushbutt{text-align:center}




.floatpush{text-align:center;padding:0px;margin-top:0.1em;} 


.floaticonpush{margin-top:-0.45em;}




.topspan{font-size:165%;margin-top:0.1em;}
.topspanheart{font-size:160%;margin-top:0.15em;}
.topspanxx{font-size:173%;margin-top:0.08em;}
.topspanyy{font-size:160%;margin-top:0.17em;}
.topspanplus{font-size:140%;margin-top:0.3em;}

.topspanmobile{font-size:145%;margin-top:0.31em;}
.topspanmobileheart{font-size:142%;margin-top:0.345em;}
.topspanmobilexx{font-size:153%;margin-top:0.25em;}
.topspanmobileyy{font-size:145%;margin-top:0.36em;}
.topspanmobileplus{font-size:115%;margin-top:0.6em;}

 .topmid{font-size:150%;}
 .topmidmobile{font-size:125%;}
 .topicon{height:25px;margin-top:-0.7em;}
  .topiconmobile{height:24px}

.bottomspan{margin-top:-0.37px;font-size:170%;}
.bottomspanmobile{font-size:160%;margin-top:2px;}
.botmid{font-size:150%;}
.botmidx{margin-top:-0.12em}
.botmidmobile{font-size:155%;}


 
 .zuperxyplusbottom:hover{text-shadow: 1.2px 2px 2.4px #000000;color: #dddddd;   } 
 .zuperxyplusbottom{text-shadow:0.2px 1px 2.5px  #111111, 0.2px 0.25px 2.5px #111111;color: #ffffff; } 

      </style>



 <div class="topcloudgate"   id="toploadgate"  style="visibility:hidden" > 
        <div class="topcloud"   id="topload">

  <div class="col-xs-3  col-sm-2  col-md-2  col-lg-1  floatpush juju zuzax zuperxyplus" >
    <span id="topleft"  class="topspan" style="margin-left:8px;float:left;"><i class="fas fa-th-large" aria-hidden="true"></i>
          </span></div>
 <div  id="uploadholderout"  class="col-xs-6  col-sm-8  col-md-8  col-lg-10 floatpush"   style="text-align:center;margin-top:0.14em" >
     <bottrslim class="smoothfont">  <span  class=" za  "  style="font-weight:bolder;padding-left:10px;padding-right:10px">    
      <img src="images/sp2.png"   id="uploadholdericon"   class="floaticonpush topicon"      width="auto"/> 
      <span  id="uploadholder" class="juju zuperxyloud3d zuzax  topmid"  style=" -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;text-rendering: optimizeLegibility;"> SuperstarZ </span>  </span>      </bottrslim>       
          </div>
  <div class="col-xs-3  col-sm-2  col-md-2  col-lg-1  floatpush juju zuzax zuperxyplus"   onclick="javascript:topgoto()">
  <span id="topbarh" class="topspan" style="margin-right:8px;float:right;display:none;"><i class="fas fa-bars"></i> </span>
    <span id="topuserd" class="topspan" style="margin-right:8px;float:right;display:none;"> <i class="fas fa-user-circle"></i>
      </span>
     </div>
        </div></div>


 






      <div class="col-xs-12 " style="bottom:6em;position:fixed;padding:0px;height:0px;visibility:hidden;"  >
  
<div class="col-xs-12  " style="padding:0px;opacity:1;height:0px">
<div class="col-xs-12 " style="padding:0px;opacity:1;height:0px"> 

<span   onclick="javascript:balldetails()"  id="feedsholdercase" class="zuperxybutt zuzax  juju" style="float:right;margin-right:2px;padding:3px;">
<span id="dotdetails" class="" style="border-radius:5%;opacity:0.7;padding:20px;padding-right:10px;padding-left:16px;font-size:90%;padding-top:0px;">  <i class="fas fa-circle" aria-hidden="true"></i>     </span>

<span class="<?php echo $joinbuttonb; ?>  tur" id="feedsholder" style="padding:1px;padding-left:20px;padding-right:20px;
font-size:110%;padding-bottom:9px;padding-top:8px;border:solid 1px rgba(000,000,000,0.095)"> 
   </span>

    </span>



</div>
</div> </div>








      <div class="<?php echo $bcgate; ?>" style="height:3em"  >
       <div class="<?php echo $bc; ?>"  style="height:3em;

text-shadow: 0px 0px 10.5px  #ffffff, 0px 0px 10.5px #ffffff; 0px 0px 10.5px #ffffff;color:#000000;

 background:-webkit-linear-gradient( to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.1),rgba(255,255,255,0.25),rgba(255,255,255,0.4),rgba(255,255,255,0.6),rgba(255,255,255,0.75),rgba(255,255,255,0.8),rgba(255,255,255,0.9));

  background:-moz-linear-gradient(to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.1),rgba(255,255,255,0.25),rgba(255,255,255,0.4),rgba(255,255,255,0.6),rgba(255,255,255,0.75),rgba(255,255,255,0.8),rgba(255,255,255,0.9));

  background:linear-gradient( to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.1),rgba(255,255,255,0.25),rgba(255,255,255,0.4),rgba(255,255,255,0.6),rgba(255,255,255,0.75),rgba(255,255,255,0.8),rgba(255,255,255,0.9)"  >

<div class="col-xs-12  " style="padding:0px;padding:0.2% 0;opacity:0.8" >


  <div class="col-xs-5   col-sm-4    " style="padding:0px" >
     <div class="col-xs-6 " style="padding:0px;text-align:left" >   <div id="topmenu" class="topspanmobile" >
    <span class="juju zuzax zuperxyplusbottom   " 
        style="padding:8px;padding-left:15px;padding-right:15px">
     <i class="fas fa-th-large" aria-hidden="true"></i> </span> </div></div>

      <div class="col-xs-6 " id="covtop1" style="padding:0px;text-align:left" >  
       <div id="topbar" class="topspanmobile" style="display:none;">
        <span class="juju zuzax zuperxyplusbottom   " 
        style="padding:8px;padding-left:15px;padding-right:15px" onclick="javascript:topgoto()" >
         <i class="fas fa-align-left"></i> </span> </div>
    <div id="topuser" class="topspanmobilexx" style="display:;"> 
      <span class="juju zuzax zuperxyplusbottom   " 
        style="padding:8px;padding-left:15px;padding-right:15px"  onclick="javascript:topgoto()">
          
<i class="fas fa-user-circle" aria-hidden="true"></i>  


        </span></div></div>
    </div>


  <div class="col-xs-2   col-sm-4  " style="padding:0px;" >
     <div class="col-xs-12" style="padding:0px;text-align:center" >
       <div id="topplus" class="topspanmobileplus col-xs-12"  style="   "  > 
       <span class="juju zuzax zuperxyplusbottom"  onclick="javascript:topupload()"
        style="padding:0px;padding-left:0px;padding-right:0px">
        <i class="fa fa-circle" aria-hidden="true"></i> </span> </div>
     </div></div>


  <div class="col-xs-5  col-sm-4    " style="padding:0px" >
     <div class="col-xs-6 " id="covtop2" style="padding:0px;text-align:right" >
       <div   id="datanotify"  class="stopbeat topspanmobileheart "  >
       <span class="juju zuzax zuperxyplusbottom " style="padding:8px;padding-left:15px;padding-right:15px;color:<?php echo $viewusercolor; ?>;">  <?php echo $bcheart; ?>  </span>
          </div></div>


      <div class="col-xs-6 " style="padding:0px;text-align:right;" > 
     <div id="topmusic" class="topspanmobileyy" > 
             <span class="juju zuzax zuperxyplusbottom   " 
        style="padding:8px;padding-left:15px;padding-right:15px"> <i class="fas fa-music" aria-hidden="true"></i>
        </span> </div></div>
  </div>
</div>

         </div></div>

    





 <?php include('heartbeat.php');?>


  <div class="col-xs-12    smoothscroll fadeboyinfeedpop "   id="superpop"  style="-webkit-overflow-scrolling:touch;overflow:auto;height:100%;display:none;z-index:110;position:fixed;bottom:0em; padding: 0px;background-color:<?php echo $backpad; ?>;">  </div> 





 <div class="col-xs-12 zuzax"   id="userpop"   onclick="javascript:closehandlex()"   style="-webkit-overflow-scrolling:touch;overflow:auto;height:100%;display:none;z-index:110;position:fixed;top:0em; padding: 0px;background-color:<?php echo $backpad2; ?>;text-align:center;margin:auto;"> 

<div  id="profilepopout"   class=" col-xs-12 juju zuzax" style="padding:0px;text-align:center;margin:auto;margin-top:15em"> 


  




</div></div> 








 <div  class="col-xs-12"  id="superemoticoninteract">  </div> 



 <div  class="col-xs-12"  id="windowcoverback"  
 style="width:100%;height:100%;z-index:1800;position:fixed;padding:0px;display:none">  </div> 





<?php

if($type == 1){
   echo'
   <script>
  $(document).ready(function(){
      var nm="'.$viewuser.'";
       var pg="'.$page.'";
        var jp="'.$jump.'";
        var lok ="'.$jumplock.'";

         var actty ="'.$activatein.'";
          var paggyin ="'.$pagein.'";
          var juppyin ="'.$jumpin.'";
          var juppyinlock ="'.$jumpinlock.'";
           var xup1 ="'.$xtra1.'";
            var xup2 ="'.$xtra2.'";
             var xup3 ="'.$xtra3.'";
              var xup4 ="'.$xtra4.'";
               var xup5 ="'.$xtra5.'";

    $.ajax({
  type: "POST",
  url: "userfeedsgate.php",
  data: {member:'.$d.',name:nm,scroll:0,page:pg,jump:jp,jumplock:lok,activatein:actty,pagein:paggyin,jumpin:juppyin,jumpinlock:juppyinlock,xtra1:xup1,xtra2:xup2,xtra3:xup3,xtra4:xup4,xtra5:xup5},
 success: function(data){
    $("#supershow").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }); </script> ';  }


         else if($type == 2){
             echo'
             <script>
  $(document).ready(function(){
     var nm="'.$viewuser.'";
       var pg="'.$page.'";
        var jp="'.$jump.'";
        var lok ="'.$jumplock.'";

        var actty ="'.$activatein.'";
          var paggyin ="'.$pagein.'";
          var juppyin ="'.$jumpin.'";
          var juppyinlock ="'.$jumpinlock.'";
           var xup1 ="'.$xtra1.'";
            var xup2 ="'.$xtra2.'";
             var xup3 ="'.$xtra3.'";
              var xup4 ="'.$xtra4.'";
               var xup5 ="'.$xtra5.'";
    $.ajax({
  type: "POST",
  url: "userpagegate.php",
   data: {member:'.$d.',name:nm,scroll:0,page:pg,jump:jp,jumplock:lok,activatein:actty,pagein:paggyin,jumpin:juppyin,jumpinlock:juppyinlock,xtra1:xup1,xtra2:xup2,xtra3:xup3,xtra4:xup4,xtra5:xup5}, 
 success: function(data){
    $("#supershow").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }); </script> ';   }


           else if($type == 3){
             echo'
             <script>
  $(document).ready(function(){
      var nm="'.$viewuser.'";
       var pg="'.$page.'";
        var jp="'.$jump.'";
        var lok ="'.$jumplock.'";

         var actty ="'.$activatein.'";
          var paggyin ="'.$pagein.'";
          var juppyin ="'.$jumpin.'";
          var juppyinlock ="'.$jumpinlock.'";
           var xup1 ="'.$xtra1.'";
            var xup2 ="'.$xtra2.'";
             var xup3 ="'.$xtra3.'";
              var xup4 ="'.$xtra4.'";
               var xup5 ="'.$xtra5.'";

    $.ajax({
  type: "POST",
  url: "usertagsgate.php",
  data: {member:'.$d.',name:nm,scroll:0,page:pg,jump:jp,jumplock:lok,activatein:actty,pagein:paggyin,jumpin:juppyin,jumpinlock:juppyinlock,xtra1:xup1,xtra2:xup2,xtra3:xup3,xtra4:xup4,xtra5:xup5},
 success: function(data){
    $("#supershow").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }); </script> ';    }



?>





     
<script type="text/javascript">



  function closehandlex(){

 $("#userpop").hide()

  }




ballstate=0;

  function balldetails(){
    var ffhss = document.getElementById("feedsholdercase");

    if(ballstate == 0){
$("#feedsholder").hide();
document.getElementById("dotdetails").style.fontSize="135%";

if(mobileboy == 0){ ffhss.style.marginRight="-4px"; }else{ffhss.style.marginRight="-7px";}

ballstate = 1;
    }else{
      document.getElementById("dotdetails").style.fontSize="100%";
      $("#feedsholder").show();
      ballstate = 0;}}




 function topupload (){
         var url="library.php";
         $("body").css("overflow","hidden");
        $.post(url,{request:"fa"}, function(data){
           $("#superpop").html(data).slideDown(1000);
          
        });
      }





   $(document).ready(function(){

       $("html,body").animate({
               scrollTop:$("#supercontent").offset().top},"fast"); 
       
    setTimeout(function(){
     $("#superloader").hide();
      $("#superloader").addClass('stoploader'); 
    $("#superloader").removeClass('startloader');  },2000);  

  var m ="<?php echo $d; ?>";
  var co ="<?php echo $viewusercolor; ?>";

   $.ajax({   type: "POST",
  url: "connect.php",
  data: {database:0,id:m,pagenum:0,gringo:0,datasrc:0,color:co,respon:0,source:0,postid:0,type:0}, 
 success: function(data){
    $("#superconnect").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  });


       })



  


 function  topgoto(){
   
    $("#superloader").show();
      $("#superloader").removeClass('stoploader'); 
    $("#superloader").addClass('startloader'); 

   
   var checkuser="<?php echo $_SESSION['numuser']; ?>";
     var nm="<?php echo  $viewuser; ?>";
    var clicked="<?php echo $d; ?>";
    var  state = $("#feedstate").val();
  

 if( checkuser == clicked){ 

  if(state== 1){ var  gtopag="userfeedsgate.php";var stx="1";}
    else  if(state== 2){  var  gtopag="userpagegate.php";  var stx="2";}
    $.ajax({
  type: "POST",
  url: ""+gtopag+"",
  data: {member:checkuser,name:nm,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
    var spec = {member:""+checkuser+"",name:""+nm+"",typex:""+stx+"",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL);
      $("#supershow").html(data).show();   },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  }); 


   } else{
    var typ="1";
   $.ajax({
  type: "POST",
  url: "datauser.php",
  data: {member:checkuser,ty:typ,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
  var spec = {member:""+checkuser+"",name:""+nm+"",typex:"1",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL); 
     $("#supercontent").html(data).show();   },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         }); }


      };







  /////clear error pop ups
function clearerr(){
   $("#profileerrorback").hide(); 
    $("#profilescripterror").hide(); 
   $("#profiledataerror1").hide();   
   $("#profiledataerror2").hide();}
   /////clear error pop ups



  $(document).ready(function(){


   if(mobileboy==0){ 
 ///////top
  $("#topmenu").removeClass('topspanmobile');
$("#topmenu").addClass('topspan');
  $("#datanotify").removeClass('topspanmobileheart');
$("#datanotify").addClass('topspanheart');
 $("#topbar").removeClass('topspanmobile');
$("#topbar").addClass('topspan');
  $("#topuser").removeClass('topspanmobilexx');
$("#topuser").addClass('topspanxx');
$("#topplus").removeClass('topspanmobileplus');
$("#topplus").addClass('topspanplus');
$("#topmusic").removeClass('topspanmobileyy');
$("#topmusic").addClass('topspanyy');
document.getElementById('covtop1').style.textAlign="center";
document.getElementById('covtop2').style.textAlign="center";
  ////bottom  
}





 if(mobileboy==1){


  /////// clear radius for wide pic  mobile
 var wpc1 = document.getElementById("widecurvecloud1");
 wpc1.style.borderRadius="0px";
/////// clear radius for wide pic  mobile

///// adding some text size to user name on profile info wide mobile
 var usrnz = document.getElementById("usernamesize");
  var ffh = document.getElementById("infodetailshold");
  var stz = document.getElementById("starsize");
  var usrdet = document.getElementById("userdetailsize");
  var uex = document.getElementById("userexpand");
  var ucom = document.getElementById("usercomment");
    var wptot = document.getElementById("wideposttotalin");
       var wfvt = document.getElementById("widefavtotalin");
         var wfnt = document.getElementById("widefantotalin");
         var woo = document.getElementById("wideposttotalinname");
           var wnn = document.getElementById("widefantotalinname");
             var wvv = document.getElementById("widefavtotalinname");
  usrnz.style.fontSize="95%";
    ffh.style.marginTop="5%";
  stz.style.fontSize="85%";
   usrdet.style.fontSize="70%";
     usrdet.style.marginTop="1.3em";
   uex.style.marginTop="0px";
   ucom.style.marginTop="0px";
   uex.style.fontSize="135%";
   ucom.style.fontSize="135%";
   wptot.style.fontSize="120%";
    wfvt.style.fontSize="120%";
     wfnt.style.fontSize="120%";
       woo.style.fontSize="80%";
       wnn.style.fontSize="80%";
       wvv.style.fontSize="80%";
///// adding some text size to user name on profile info wide mobile
////  padding profile pic more for mobile
var pp = document.getElementById("profilepadding");
pp.style.padding="5px";

  
  $("#widecurvecloud1").removeClass('padcolor'); 
 $("#widecurvecloud1").addClass('padcolormobile'); 

////  padding profile pic more for mobile

///top bottom 
 
 var uph = document.getElementById("uploadholder");
 var upho = document.getElementById("uploadholderout");
 var uphic = document.getElementById("uploadholdericon");
 uph.style.fontSize="125%";
 upho.style.marginTop="0.40em";
 uphic.style.marginTop="-0.6em";

 var ffh = document.getElementById("feedsholder");
  var ffhx = document.getElementById("feedsholderout");
  var ffhss = document.getElementById("feedsholdercase");
  var ffhxx = document.getElementById("dotdetails");
 ffh.style.fontSize="95%";
 ffh.style.paddingTop="7.5px";
 ffh.style.paddingBottom="7px";
 ffhss.style.marginRight="2px";
 ffhxx.style.fontSize="85%";
 


////top bottom


///emotion pop up
 var wntzi = document.getElementById("holdfunpop");
 wntzi.style.height="80px";
  wntzi.style.width="auto";
 var wntz = document.getElementById("holdcarepop");
 wntz.style.height="80px";
 wntz.style.width="auto";
  var wntx = document.getElementById("holdfreshpop");
 wntx.style.height="80px";
 wntx.style.width="auto";
 var wnt = document.getElementById("holdlovelypop");
 wnt.style.height="80px";
  wnt.style.width="auto";
////emotion pop up
}
else{}
  






}


)



</script>