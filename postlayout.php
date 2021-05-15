
<?php

echo'<style>

.hashtag{color:#782144;text-shadow: 0px 0px 3.5px  #ffffff, 0px 0px 3.5px #ffffff; 0px 0px 3.5px #ffffff;}
      .hashtagdark{color:#e9ddaf;text-shadow:1.2px 2px 2.4px #333333;}


.boldtext{font-weight:bold}
.normaltext{font-weight:normal}
 .ballx{-moz-box-shadow: 0 0 3px#888888;
    -webkit-box-shadow: 0 0 3px#888888;box-shadow: 0 0 3px#888888;}
.zupergray{text-shadow: 1px 2px 2px #666666;color: #ffffff; }



.emodeactivex{border:solid 1px rgba(255,255,255,0.0);}

   .emoactivekey4x{ -moz-box-shadow: 0 0 4px#666666;
    -webkit-box-shadow: 0 0 4px#666666;box-shadow: 0 0 4px#666666;border:solid #ff2a7f;margin-top:-2.5px;}

    .emoactivekey3x{ -moz-box-shadow: 0 0 4px#666666;
    -webkit-box-shadow: 0 0 4px#666666;box-shadow: 0 0 4px#666666;border:solid #14cefc;margin-top:-2.5px;}

     .emoactivekey2x{  -moz-box-shadow: 0 0 1px#666666;
    -webkit-box-shadow: 0 0 1px#666666;box-shadow: 0 0 1px#666666;border:solid #888888;margin-top:-2.5px;}

    .emoactivekey1x{ -moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;border:solid #ffe700;margin-top:-2.5px;}


  </style>';


if($totalsets > 9){

  $txfsize="87%";
  $txfsizepc="97%";
  $txfrad="20px";
  $txfmargin="0px";

}else{

 $txfsize="86%";
  $txfsizepc="103%";
  $txfrad="20px";
   $txfmargin="3px";
}

if($_SESSION['theme']=='0'){ 

$postthemeinside="rgba(000,000,000,0.01)";
$feelingspad='rgba(000,000,005,0.1)';
$highlightbutton='whitehighlight';  
$userbuttonid='usernamethemewhite'.$ivd.''.$gringo.'';
$userbuttonid2='usernamethemewhite2'.$ivd.''.$gringo.'';
$userbuttonidx='usernamethemewhitex'.$ivd.''.$gringo.'';
$userbuttonid2x='usernamethemewhite2x'.$ivd.''.$gringo.'';
echo'<style>  
 .pageuser{color:#000000;text-shadow:;}
  .ball{-moz-box-shadow: 0 0 9px#666666;
    -webkit-box-shadow: 0 0 9px#666666;box-shadow: 0 0 9px#666666;}

</style>';
}else{

$postthemeinside="rgba(225,225,225,0.04)";
$feelingspad='rgba(255,255,255,0.2)';
$highlightbutton='darkhighlight';
$userbuttonid='usernamethemedark'.$ivd.''.$gringo.'';
$userbuttonid2='usernamethemedark2'.$ivd.''.$gringo.'';
$userbuttonidx='usernamethemedarkx'.$ivd.''.$gringo.'';
$userbuttonid2x='usernamethemedark2x'.$ivd.''.$gringo.'';
echo'<style>  
.pageuser{color:#000000;text-shadow:;}
 .ball{-moz-box-shadow: 0 0 9px#eeeeee;
    -webkit-box-shadow: 0 0 9px#eeeeee;box-shadow: 0 0 9px#eeeeee;}


   

 
</style>';}




 $usernamedata='

 <style>





.usernamethemewhitex'.$ivd.''.$gringo.'{color: #000000;text-shadow: 0px 0px 3.5px  #ffffff, 0px 0px 3.5px #ffffff; 0px 0px 3.5px #ffffff;color:#000000;font-weight:bold}
   .usernamethemewhitex'.$ivd.''.$gringo.':active,.usernamethemewhitex'.$ivd.''.$gringo.':hover,.usernamethemewhitex'.$ivd.''.$gringo.':target{color: #000000;text-shadow: 0.8px 1px 0.5px #bbbbbb;}
   
   
    .usernamethemewhite2x'.$ivd.''.$gringo.'{color:#000000;
text-shadow: 0px 0px 3.5px  #ffffff, 0px 0px 3.5px #ffffff; 0px 0px 3.5px #ffffff;color:#000000;}
   .usernamethemewhite2x'.$ivd.''.$gringo.':active,.usernamethemewhite2x'.$ivd.''.$gringo.':hover,.usernamethemewhite2x'.$ivd.''.$gringo.':target{color: #000000;text-shadow: 0.8px 1px 0.5px #dddddd;}
    
    
whitehighlight {
 outline:none;
     border: 5px solid transparent;color: #000000;border-radius: 5px;
     padding: 2px;
  overflow:auto;width:auto;transition: all        1.2s, border     0.5s 1.2s, box-shadow 0.3s 1.5s;white-space: nowrap;text-indent: 23px;font-weight:bolder;text-align: center;
}whitehighlight span {
  display: inline-block;
  -webkit-transform: translateX(300px);
          transform: translateX(300px);
  font-weight: normal;opacity: 0;transition: opacity 0.1s 0.5s, -webkit-transform 0.4s 0.5s;transition: opacity 0.1s 0.5s, transform 0.4s 0.5s; transition: opacity 0.1s 0.5s, transform 0.4s 0.5s, -webkit-transform 0.4s 0.5s;
}whitehighlight:active,whitehighlight:hover,whitehighlight:target{
  text-indent: 0;
  background-color: rgba(000,000,000,0.1);
   border:2px solid #aaaaaa;
   padding:6px;
  overflow:auto;
  width:auto;
 -moz-box-shadow: 0 0 0.5px#cccccc;-webkit-box-shadow: 0 0 0.5px#cccccc;box-shadow: 0 0 0.5px#cccccc;}whitehighlight:hover span {-webkit-transform: translateX(0);transform: translateX(0);opacity:1;}</style>
 
 
 <style>
    
    .usernamethemedarkx'.$ivd.''.$gringo.'{color:#ffffff; text-shadow: 0.8px 1px 0.5px #ffffff; }
   .usernamethemedarkx'.$ivd.''.$gringo.':active,.usernamethemedarkx'.$ivd.''.$gringo.':hover,.usernamethemedarkx'.$ivd.''.$gringo.':target{color: #ffffff;text-shadow: 0.8px 1px 0.5px #ffffff;}  
   
   
    .usernamethemedark2x'.$ivd.''.$gringo.'{color:#ffffff; text-shadow: 1.2px 2px 2.4px #000000; }
   .usernamethemedark2x'.$ivd.''.$gringo.':active,.usernamethemedark2x'.$ivd.''.$gringo.':hover,.usernamethemedark2x'.$ivd.''.$gringo.':target{color: #ffffff;text-shadow: 0.8px 1px 0.5px #ffffff;}
    
    
darkhighlight {
 outline:none;
     border: 5px solid transparent;color: #000000;border-radius: 5px;
     padding: 2px;
  overflow:auto;width:auto;transition: all        1.2s, border     0.5s 1.2s, box-shadow 0.3s 1.5s;white-space: nowrap;text-indent: 23px;font-weight:bolder;text-align: center;
}darkhighlight span {
  display: inline-block;
  -webkit-transform: translateX(300px);
          transform: translateX(300px);
  font-weight: normal;opacity: 0;transition: opacity 0.1s 0.5s, -webkit-transform 0.4s 0.5s;transition: opacity 0.1s 0.5s, transform 0.4s 0.5s; transition: opacity 0.1s 0.5s, transform 0.4s 0.5s, -webkit-transform 0.4s 0.5s;
}darkhighlight:active,darkhighlight:hover,darkhighlight:target{
  text-indent: 0;
  text-shadow: 2px 2px 2px #000000;color: #ffffff;
 background-color: rgba(000,000,005,0.5);
   border:2px solid rgba(255,255,255,0.3);
   padding:6px;
  overflow:auto;
  width:auto;
 -moz-box-shadow: 0 0 4px#cccccc;-webkit-box-shadow: 0 0 4px#cccccc;box-shadow: 0 0 4px#cccccc;}darkhighlight:hover span {-webkit-transform: translateX(0);transform: translateX(0);opacity:1;}</style>
 
 
                          
 <script>
function userbuttonover'.$ivd.''.$gringo.'(){
  var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
  var layo = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
if(checkinfofate == 1 || layo==1 ){
  document.getElementById("checkpostfunc'.$ivd.''.$gringo.'").value=1;
   var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="hidden"; 
 $("#'.$userbuttonid2.'").hide(); 
  $("#'.$userbuttonid.'").show(); } }      


  function userbuttonout'.$ivd.''.$gringo.'(){
      var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
       var layo = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
if(checkinfofate == 1 || layo==1 ){
  $("#'.$userbuttonid.'").hide();
   setTimeout(function(){
    document.getElementById("checkpostfunc'.$ivd.''.$gringo.'").value=0;
   var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="visible"; 
     $("#'.$userbuttonid2.'").show(); },1000); } }
 </script>
     

 
  <vvpa >
 <'.$highlightbutton.'  onmouseenter="javascript:userbuttonover'.$ivd.''.$gringo.'();"  onmouseleave="javascript:userbuttonout'.$ivd.''.$gringo.'();"  style="margin-left:5px;"   class="zuzax">

<iif class="turflux" style="font-weight:bold"  class="'.$userbuttonid2x.'  usy"  id="'.$userbuttonid2.'">  '.$puser.' </iif>

  <span   id="datausername'.$ivd.''.$gringo.'"  style="font-size:88%"   class="datausernamez"  >
 <iif  onclick="javascript:gotopage'.$ivd.''.$gringo.'();"   class="zuperxxtext juju '.$userbuttonidx.'" >  '.$puser.'  </iif>
  
  <iif class="zuperxxtext juju"  ><iif  style="color:'.$pcl.';"><i  class="fa fa-star" aria-hidden="true"></i></iif><kka style="font-weight:bold">   '.$pname.'  </kka></iif></span>
  
  </'.$highlightbutton.'> 
</vvpa>';





 $dme=hashtagplay($dme,$ivd,$gringo,$userid,$puser,$idlock,$pagenum,$ivd,$d,$name,$gringo,$xtra5);



$dme=usertagplay($dme,$ivd,$gringo,$userid,$puser,$idlock,$pagenum,$ivd,$d,$name,$gringo,$xtra5,$pim,$pcl);

















  
$datalayout ='



  <input  id="checkzoom'.$ivd.''.$gringo.'" value="0" hidden>
   <input  id="holdrealwidth'.$ivd.''.$gringo.'" value="0" hidden>
   <input  id="holdrealheight4txt'.$ivd.''.$gringo.'" value="1" hidden>
    <input  id="checkinfostate'.$ivd.''.$gringo.'" value="0" hidden>
     <input  id="checkondivscroll'.$ivd.''.$gringo.'" value="0" hidden>
     <input  id="checkscrolltimeout'.$ivd.''.$gringo.'" value="0" hidden>
      <input  id="checkproimtimout'.$ivd.''.$gringo.'" value="0" hidden>
       <input  id="totalallsets'.$ivd.''.$gringo.'" value="'.$totalsets.'" hidden>
       <input  id="activeindex'.$ivd.''.$gringo.'" value="1" hidden>
         <input  id="checkarrtxtimout'.$ivd.''.$gringo.'" value="0" hidden>
         <input  id="checkarrtxtimoutx'.$ivd.''.$gringo.'" value="0" hidden>
          <input  id="allowshortimage'.$ivd.''.$gringo.'" value="0" hidden>
           <input  id="holdexpandtxt'.$ivd.''.$gringo.'" value="0" hidden>
            <input  id="holdexpandimage'.$ivd.''.$gringo.'" value="0" hidden>
            <input  id="allowpauseimage'.$ivd.''.$gringo.'" value="0" hidden>
             <input  id="checkpostnumbertimout'.$ivd.''.$gringo.'" value="0" hidden>
             <input  id="adjustarrowlongpost'.$ivd.''.$gringo.'"  value="0" hidden>
              <input  id="zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'"  value="0" hidden>
                <input  id="layout'.$ivd.''.$pagenum.''.$gringo.'"   value="0"   hidden> 
                  <input  id="autoguy'.$ivd.''.$pagenum.''.$gringo.'"   value="0"   hidden> 
                    <input  id="reactplaystate'.$ivd.''.$pagenum.''.$gringo.'"   value="0"   hidden> 
                     <input  id="hashtagactivated'.$ivd.''.$gringo.'"   value="0"   hidden> 
                        <input  id="mylongpost'.$ivd.''.$gringo.'"   value="0"   hidden> 
                            <input  id="totalreactions'.$ivd.''.$gringo.'"   value="'.$commentscountreal.'"   hidden>
                              <input  id="checkpostfunc'.$ivd.''.$gringo.'"   value="0"   hidden>  
                    





  <div   id="superbody'.$ivd.''.$pagenum.''.$gringo.'"    class=" fadeboyinfeed'.$count.'  superpostitem'.$pagenum.''.$gringo.'  col-xs-12 col-sm-6"    style="padding:0px;margin-bottom:-1px;">





 <div   class=" col-xs-12 zuperxy"   id="clone'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;margin-top:0.9em;z-index:1;display:none">
<div  class="col-xs-12 zuzax"   style="padding:0px;text-align:center;font-size:210%;opacity:0.6" > 
    <span    class="zuzax  zuperxy" style="padding:0px;">
    <i class="fas fa-clone"></i>  </span> </div> 
 
</div>  



 <div class="superpocket'.$pagenum.'"> 


<div  class="col-xs-12" id="acceptemotionpop'.$ivd.''.$gringo.'" style="position:absolute;top:1em;z-index:1;text-align:center;height:0px;">
 </div> 






<div   class=" col-xs-12 postnumberz"   id="postnumber'.$ivd.''.$gringo.'" style="padding:0px;position:absolute;height:0px;z-index:1;display:none;font-size:'.$txfsize.';margin-left:'.$txfmargin.'">
 <div  class="col-xs-10 col-sm-11"  style="padding:0px" >   </div>
<div  class="col-xs-2  col-sm-1 zuzax postnumberinz"    id="postnumberin'.$ivd.''.$gringo.'" style="padding:0px;text-align:center;">
<span  style="background-color:'.$postnumbk.';padding:0px;height:auto">
<span  class="zuzax zuperxy '.$postnumclass.'  postnumberinxz"   id="postnumberinx'.$ivd.''.$gringo.'"   style="'.$postnumbackgtextcolor.';
border-radius:'.$txfrad.';font-weight:bolder;padding:6px;opacity:0.9;">
 <span id="postnumberactive'.$ivd.''.$gringo.'">1</span>/<span id="postnumbertotal'.$ivd.''.$gringo.'">'.$totalsets.'</span> 
  </span> 
    </span> 
</div></div>  

        





 


<div class="col-xs-12 clicktxtz"     id="clicktxt'.$ivd.''.$gringo.'"    style="padding:0px;position:absolute;z-index:1;left:0px;height:0px;display:none;visibility:hidden">
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
<div class="col-xs-2  zuperxy zuzax"     onclick="javascript:hashtagmode'.$ivd.''.$gringo.'();"   style="padding:0px;text-align:center;opacity:0.7;height:0px">
<span  id="thumby'.$ivd.''.$gringo.'"   class="juju thumbyz"   style="border-radius:50%;padding:18px;" >
  <span id="clcircle'.$ivd.''.$gringo.'"   style="opacity:0.65">  <i class="fas fa-circle" ></i>   </span>
    <span  id="clhash'.$ivd.''.$gringo.'"  style="display:none"> <i class="fas fa-hashtag" ></i>   </span>
  </span></div>
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
</div>







<div class="col-xs-12"   id="arrows'.$ivd.''.$gringo.'" 
  style="padding:0px;position:absolute;z-index:1;top:0.5%;height:0px;display:none">
  
 <div class=" col-xs-2   zuperxy zuzax" id="superplayleft'.$ivd.''.$pagenum.''.$gringo.'"   style="padding:0px;height:100rem;margin-top:1%;left:-10px"></div>

  <div class="col-xs-8" style="padding:0px;height:0px"></div>

<div class=" col-xs-2  zuperxy zuzax" id="superplayright'.$ivd.''.$pagenum.''.$gringo.'"   style="padding:0px;height:100rem;margin-top:1%;right:-10px">  </div>

</div>










 

<div   class=" col-xs-12 zuperxy posttypesz"   id="posttypes'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;z-index:1;opacity:0.0">

  <div  class="col-xs-2  col-sm-2 zuzax"   onclick="javascript:popupinfo'.$ivd.''.$pagenum.''.$gringo.'();"   id="expandtype'.$ivd.''.$gringo.'"  style="padding:0px;text-align:center;font-size:150%;visibility:hidden" >
<span  class="boxonhover zuzax scrollpoptoggleoff zuperxy" style="padding:5px;display:none"> 
<i class="fas fa-toggle-off"></i></span> 
<span id="scrollpoptoggleonx'.$ivd.''.$pagenum.''.$gringo.'" class="boxonhover zuzax scrollpoptoggleon zuperxy" style="padding:5px;display:none;"> <i class="fas fa-toggle-on"></i></span> 
</div>

 <div  class="col-xs-8  col-sm-8"  style="padding:0px" >   </div>

  <div  class="col-xs-2  col-sm-2 zuzax"  id="playtype'.$ivd.''.$gringo.'" style="padding:0px;text-align:center;font-size:150%;visibility:hidden" > 
  <span id="playtypein'.$ivd.''.$gringo.'" onclick="javascript:startplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="boxonhover zuzax  zuperxy" style="padding:5px;display:none"><i class="far fa-play-circle"></i>  </span> 
    <span id="pausetypein'.$ivd.''.$gringo.'"  onclick="javascript:endplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="boxonhover zuzax  zuperxy" style="padding:5px;display:none">
    <i class="far fa-stop-circle"></i>  </span> 
  </div> 

</div>  








<div   class=" col-xs-12 zuperxy previewimagez"   id="previewimage'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;z-index:1">

<div class="col-xs-2"  id="pushprofileimage'.$ivd.''.$gringo.'" 
  onclick="javascript:hidepropreview'.$ivd.''.$pagenum.''.$gringo.'();"  style="padding:0px;margin-left:5px">
<div class="col-xs-12 profileimagezx"  id="profileimagex'.$ivd.''.$gringo.'"  style="padding-bottom:4px;text-align:center;">
<div class="zuperxyinfo dontallowselect profileimageinfo"  id="profileimageinfox'.$ivd.''.$gringo.'"  style="height:1.7em;width:1.7em;background-color:'.$pcl.';position:absolute;margin-top:-5px;border-radius:50%;text-align:center;font-size:90%;">  
   <div class="profileimageinfoinsidez"  id="profileimageinfoinsidex'.$ivd.''.$gringo.'" > '.$infoicon.' </div></div>
<img src="images/profilemini/'.$pim.'"   id="profileimagefilex'.$ivd.''.$gringo.'"  class="img-rounded img-responsive dontallowselect " style="width:4.8em;height:auto;padding:2px;-moz-box-shadow: 0 0 2px'.$pcl.';-webkit-box-shadow: 0 0 2px'.$pcl.';box-shadow: 0 0 2px'.$pcl.'; border:2px solid'.$pcl.';border-radius:50%"  title="'.$puser.'"/> </div></div>

<div class="col-xs-8" style="padding:0px;height:0px">  </div>

<div class="col-xs-2 zuperxy postscrollloaderz"  id="postscrollloader'.$ivd.''.$gringo.'" style="font-size:150%;text-align:center;padding:0px;margin-left:-5px;
opacity:0.8;visibility:hidden">
 <i class="fas fa-circle-notch fa-spin"></i> </div> 

    </div> 








    </div> 







 

<div  class="col-xs-12"  id="goto'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-2.6em;">
</div>
<div  class="col-xs-12"  id="pressgoto'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-3em;">
</div>

<div  class="col-xs-12"  id="gotom'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-2.5em;">
</div>
<div  class="col-xs-12"  id="pressgotom'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-3.8em;">
</div>






<div   class="col-xs-12  "  id="datauniverse'.$ivd.''.$gringo.'"   style="padding:0px;border-top-right-radius:6px;border-top-left-radius:6px;margin:0px;-webkit-transition: all 500ms cubic-bezier(0.250, 0.250, 0.750, 0.750); -moz-transition: all 500ms cubic-bezier(0.250, 0.250, 0.750, 0.750); -o-transition: all 500ms cubic-bezier(0.250, 0.250, 0.750, 0.750);transition: all 500ms cubic-bezier(0.250, 0.250, 0.750, 0.750);">

<div  class="col-xs-12"   id="dataspacetop'.$ivd.''.$gringo.'"  style="padding:0px;height:0px;display:none"></div> 


<div  class="col-xs-12 turlow"  id="collecttopdata'.$ivd.''.$gringo.'"   style="
background-color:rgba(192,192,192,0.15);color:#000000;font-weight:bolder;padding:0px;border-top-right-radius:15px;border-top-left-radius:15px;display:none; border-top: solid 1px  #eeeeee;"></div> 


 <div  class="col-xs-12 turmidtiny"    id="datacase'.$ivd.''.$gringo.'"     style="margin:0px;padding:0px;overflow:hidden">
    '.$data1.'</div> 


<div  class="col-xs-12"  id="slidebar'.$ivd.''.$gringo.'" style="z-index:1;display:none;position:relative;margin-top:-5px">
<div  class="col-xs-1"  style="padding:0px;"></div> 
<div  class="col-xs-10"  style="background-color:;height:5px;padding:0px;display:block;border-top-right-radius:6px;border-top-left-radius:6px"> 
<div  class="col-xs-12 stopslidebar"   id="activatebar'.$ivd.''.$gringo.'"  style="-moz-box-shadow: 0 0 4px'.$pcl.';
 -webkit-box-shadow: 0 0 4px'.$pcl.';box-shadow: 0 0 4px'.$pcl.';background-color:'.$pcl.';height:5px;width:100%;padding:0px;border-top-left-radius:6px;border-top-right-radius:6px;border:"></div> 
</div></div> 


<div  class="col-xs-12 turlow "  id="collectbottomdata'.$ivd.''.$gringo.'"   style="
border-bottom-right-radius:20px;border-bottom-left-radius:20px;color:#000000;font-weight:bolder;padding:0px;display:none;"></div> 



<div  class="col-xs-12"   id="dataspacebottom'.$ivd.''.$gringo.'"  style="display:none;height:0px;padding:0px"></div> 


               
 </div> 





<div   class="superpocket'.$pagenum.'  col-xs-12 "  id="postinfo'.$ivd.''.$gringo.'" style="padding:0px;overflow:hidden;position:absolute;  height:auto;bottom:0;visibility:hidden;">
<div   class=" col-xs-12"  style="padding:0px; 
text-shadow: 0px 0px 10.5px  #ffffff, 0px 0px 10.5px #ffffff; 0px 0px 10.5px #ffffff;color:#000000;

 background:-webkit-linear-gradient( to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.05),rgba(255,255,255,0.1),rgba(255,255,255,0.35),rgba(255,255,255,0.55),rgba(255,255,255,0.65),rgba(255,255,255,0.7),rgba(255,255,255,0.75));

  background:-moz-linear-gradient(to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.05),rgba(255,255,255,0.1),rgba(255,255,255,0.35),rgba(255,255,255,0.55),rgba(255,255,255,0.65),rgba(255,255,255,0.7),rgba(255,255,255,0.75));

  background:linear-gradient( to  bottom,rgba(255,255,255,0.0),rgba(255,255,255,0.05),rgba(255,255,255,0.1),rgba(255,255,255,0.35),rgba(255,255,255,0.55),rgba(255,255,255,0.65),rgba(255,255,255,0.7),rgba(255,255,255,0.75))">



<div  class="col-xs-12"  id="gotolong'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-29.5em">
</div>

<div  class="col-xs-12"  id="gotolongm'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-20em">
</div>

<div class="zazp col-xs-12">  </div>
<div class="zaz col-xs-12">  </div>

             <div  class="col-xs-12"   id="holdtopdata'.$ivd.''.$gringo.'"    style="padding:0px;overflow:hidden;">

             <div  class="col-xs-12"   id="topdata'.$ivd.''.$gringo.'"    style="padding:0px;overflow:hidden;">

<div class="col-xs-2 dontallowselect zuzax juju"  onclick="javascript:gotopage'.$ivd.''.$gringo.'();"   id="acceptprofileimage'.$ivd.''.$gringo.'"  style="padding:0px;margin-top:-5px">


<div class="col-xs-12 profileimagez"  id="profileimage'.$ivd.''.$gringo.'"  style="padding-bottom:4px;text-align:center;">
<div class="zuperxyinfo dontallowselect profileimageinfo"  id="profileimageinfo'.$ivd.''.$gringo.'"  style="height:1.7em;width:1.7em;background-color:'.$pcl.';position:absolute;margin-top:-5px;border-radius:50%;text-align:center;font-size:90%;">  
   <div class="profileimageinfoinsidez"  id="profileimageinfoinside'.$ivd.''.$gringo.'" > '.$infoicon.' </div></div>
<img src="images/profilemini/'.$pim.'"   id="profileimagefile'.$ivd.''.$gringo.'"  class="img-rounded img-responsive dontallowselect " style="width:4.8em;height:auto;padding:2px;-moz-box-shadow: 0 0 2px'.$pcl.';-webkit-box-shadow: 0 0 2px'.$pcl.';box-shadow: 0 0 2px'.$pcl.'; border:2px solid'.$pcl.';border-radius:50%"  title="'.$puser.'"/> </div>



 </div>  





  <div  class="col-xs-10"   style="padding:0px;">

<div  class="col-xs-8 col-sm-9 dontallowselect"  id="namebutton'.$ivd.''.$gringo.'"     style="margin-top:-3px;padding:0px;transition: all .5s linear;"> '.$usernamedata.'  </div> 

<div   id="postfunctions'.$ivd.''.$gringo.'"   class="col-xs-4  col-sm-3   zuzax   postfunctionsz" 
 style="padding:6px;padding-right:0px;padding-left:0px;position:relative;z-index:1;margin-top:1px;">



<div  class="col-xs-9  col-md-8  zuzax juju boxonhover  "   id="dattex'.$ivd.''.$gringo.'"
onmousedown="javascript:reactxxxxxxxxxxx'.$ivd.''.$gringo.'(0,'.$ivd.','.$gringo.',0,0,0,'.$totalsets.',0);"
    style="text-align:center;padding:1px;margin-top:-4px;text-align:right">

    <span class="turflux" title="Fullview" id="datte'.$ivd.''.$gringo.'"    style="padding:0px;font-size:68%;font-weight:bolder;opacity:1;padding-right:3px;padding-left:3px">
           '.$dti.'
   </span>  

 <span title="Play" id="playtypeinsx'.$ivd.''.$gringo.'"   onclick="javascript:startplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="zuzax  zupergray" style="padding:5px;display:none;font-size:130%;visibility:hidden"><i class="far fa-play-circle"></i>  </span> 

    <span title="Stop" id="pausetypeinsx'.$ivd.''.$gringo.'"  onclick="javascript:endplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="zuzax  zupergray" style="padding:5px;display:none;font-size:130%;margin-top:-5px">
    <i class="far fa-stop-circle"></i>  </span> 

    </div>


<div  id="more'.$ivd.''.$gringo.'"   class="col-xs-2 col-sm-4  zuzax 
boxonhover "  style="text-align:center;padding:0px;margin-top:-1px">
 <span
id="optionsx'.$ivd.''.$pagenum.''.$gringo.'" title="Options"
style="padding:0px;opacity:0.8;font-size:90%;display:"> <i class=" fa
fa-ellipsis-v" aria-hidden="true"></i> </span>  </div>




          </div>






<div  class="col-xs-12"  style="padding:0px;"></div>

<div  class="col-xs-12 smoothfont  boldtext motop"  id="topic'.$ivd.''.$gringo.'"  style="padding:0px;text-align:center;right:28px">
<span   class=" juju zuzax" onmousedown="javascript:maketopiclick'.$ivd.''.$gringo.'('.$ivd.','.$gringo.');"   style="paddding:6px">
<bottr   class="turflux"   style="padding:0px;padding-right:4px;padding-left:4.5px ">'.$dtup.'</bottr></span>

<div  class="col-xs-12 zaz" ></div>

</div></div>  

                </div> </div>  








             <div  class="col-xs-12"   id="holdbottomdata'.$ivd.''.$gringo.'"    style="padding:0px;">

             <div  class="col-xs-12"   id="bottomdata'.$ivd.''.$gringo.'"    style="padding:0px;">

<div  class="col-xs-12 y"></div>




<div  class="col-xs-hidden col-sm-1"  style="padding:0px"></div>
     <div class="col-xs-12 col-sm-10 capy" id="caption'.$ivd.''.$gringo.'" style="font-weight:bolder;padding:0px;padding-left:10px;padding-right:10px;text-align:center;" >
                 <span class="turflux">  <i>'.$dme.' 
                   <span class="zuzax juju"  onmousedown="javascript:react'.$ivd.''.$gringo.'(1,'.$ivd.','.$gringo.',0,0,0,'.$totalsets.',0);"  style="padding:6px"><vvpa>
                    <span  style="font-size:90%"><i class="far fa-comment-alt" aria-hidden="true"></i> </span>
<span   class="hashtag" id="reactioncounthold'.$ivd.''.$gringo.'"  style="font-size:62%;left:-2px;position:relative;top:-2.5px">'.$commentscount.'  </span> 
</vvpa></i>
 </span>  </span> </div>





<div  class="col-xs-12 zaz"  style=""> </div> 


<div  class="col-xs-12 zaz"  style=""> </div> 

<div  class="col-xs-12 za"  style="text-align:center"></div> 




<vvo>
<div class="col-xs-12 "  id="setx'.$ivd.''.$pagenum.''.$gringo.'"  style="display; padding:1px">


<input  id="feelstate'.$ivd.''.$gringo.'" value="'.$feelstate.'" hidden>




<div  class="col-xs-hidden  col-sm-1"  style="padding:0px">
</div>







<input  id="feelstate'.$ivd.''.$gringo.'" value="'.$feelstate.'" hidden>



<div id="midspace'.$ivd.''.$gringo.'" class="col-xs-12  za" ></div> 



<div  class="col-xs-hidden  col-sm-1"  style="padding:0px;">

</div>
<div  class="col-xs-12  col-sm-12 "  style="padding:0px;margin-top:18px;height:30px;font-size:84%">


<div  class="col-xs-3"    style="padding:0px;text-align:center;">

<span class="  zuzax juju '.$act1.' '.$act1x.'"    onmousedown="javascript:emotelist'.$ivd.''.$gringo.'(1,'.$ivd.','.$gringo.',0,0,0,0);"   id="emotioncount1'.$ivd.''.$gringo.'"  style="padding:10px;padding-left:21px;padding-right:3px;'.$act1y.';font-weight:bold">'.$fun.'</span>
<input  id="holdemotioncount1'.$ivd.''.$gringo.'" value="'.$fun.'" hidden>

<span style="padding:10px;padding-left:4px;padding-right:18px"  onmousedown="javascript:emote'.$ivd.''.$gringo.'(1);"   class="">
<img src="images/laugh.png"  class="zuzax juju '.$activepad1.'  '.$activepad1x.'"   id="emotion1'.$ivd.''.$gringo.'"  height="'.$activepad1z.'px"; width="auto" 
 style="padding:2px;border-radius:20px;opacity:0.94"/> </span>


  </div> 





<div  class="col-xs-3"   style="padding:0px;text-align:center">

<span class=" zuzax juju '.$act2.' '.$act2x.'"   onmousedown="javascript:emotelist'.$ivd.''.$gringo.'(2,'.$ivd.','.$gringo.',0,0,0,0);"    id="emotioncount2'.$ivd.''.$gringo.'"  style="padding:10px;padding-left:21px;padding-right:3px;'.$act2y.';font-weight:bold">'.$care.'</span>
<input  id="holdemotioncount2'.$ivd.''.$gringo.'" value="'.$care.'" hidden>

<span style="padding:10px;padding-left:4px;padding-right:18px"  onmousedown="javascript:emote'.$ivd.''.$gringo.'(2);"   class="">
<img src="images/oo.png"  class="zuzax juju '.$activepad2.'  '.$activepad2x.'"   id="emotion2'.$ivd.''.$gringo.'"     height="'.$activepad2z.'px";   width="auto"  
style="padding:2px;border-radius:20px;opacity:0.94"/></div></span> 




<div  class="col-xs-3"     style="padding:0px;text-align:center">
<span class="  zuzax juju  '.$act3.'  '.$act3x.'"   onmousedown="javascript:emotelist'.$ivd.''.$gringo.'(3,'.$ivd.','.$gringo.',0,0,0,0);"   id="emotioncount3'.$ivd.''.$gringo.'"  style="padding:10px;padding-left:21px;padding-right:3px;'.$act3y.';font-weight:bold">'.$fresh.'</span>
<input  id="holdemotioncount3'.$ivd.''.$gringo.'" value="'.$fresh.'" hidden>


<span style="padding:10px;padding-left:4px;padding-right:18px"  onmousedown="javascript:emote'.$ivd.''.$gringo.'(3);"   class="">
<img src="images/cool.png"  class="zuzax juju '.$activepad3.'  '.$activepad3x.'" id="emotion3'.$ivd.''.$gringo.'"    height="'.$activepad3z.'px";   width="auto"
style="padding:2px;border-radius:20px;opacity:0.94"/></div></span> 





<div  class="col-xs-3"   style="padding:0px;text-align:center">
<span class="  zuzax juju  '.$act4.'  '.$act4x.'"  onmousedown="javascript:emotelist'.$ivd.''.$gringo.'(4,'.$ivd.','.$gringo.',0,0,0,0);"  id="emotioncount4'.$ivd.''.$gringo.'"  style="padding:10px;padding-left:18px;padding-right:3px;'.$act4y.';font-weight:bold">'.$lovely.'</span>
<input  id="holdemotioncount4'.$ivd.''.$gringo.'" value="'.$lovely.'" hidden>


<span style="padding:10px;padding-left:4px;padding-right:18px"  onmousedown="javascript:emote'.$ivd.''.$gringo.'(4);"   class="">
<img src="images/love.png" class="zuzax juju '.$activepad4.'  '.$activepad4x.'"    id="emotion4'.$ivd.''.$gringo.'"     height="'.$activepad4z.'px";   width="auto"
 style="padding:2px;border-radius:20px;opacity:0.94"/></div> </span>

 </div> 




<div  id="spacelast3'.$ivd.''.$gringo.'"  class="col-xs-12 za"   > </div>  



<div  class="col-xs-12"  style="padding-left:2px;padding-right:2px;position:relative;z-index:1;top:16px;display:none">

<div class="col-xs-4"  onmousedown="compressor'.$pagenum.''.$gringo.'();"   style="font-weight:normal;font-size:80%;margin-top:1.1em;text-align:left;padding:2px"><vvpa>
<div style="margin-left:8px;opacity:0.75"></div></vvpa></div>  

<div class="col-xs-4 "  style="text-align:center;margin-top:0.95em;"> 
   </div>  
    


<div class="col-xs-4 "   style="padding:0px;margin-top:0.7em;left:-8px;opacity:0.5">

<div class="col-xs-4  col-sm-6  "  style="padding:0px;text-align:right;">
 </div> 

<div class="col-xs-4  col-sm-3"  style="font-size:105%;padding:0px;text-align:right;">
<div style="margin-right:5px;">
<span title="Compress"   id="compressa'.$ivd.''.$gringo.'"  class="zuzax juju"
 onclick="javascript:switchlayout'.$ivd.''.$pagenum.''.$gringo.'();"  style="padding:13px"><i class="fas fa-compress"></i></span>
 </div></div>


<div class="col-xs-4  col-sm-3"  style="font-size:120%;padding:0px;text-align:right;">
<div style="margin-right:5px;">
<span title="Compress"   id="compressa'.$ivd.''.$gringo.'"  class="zuzax juju"
 onclick="javascript:switchlayout'.$ivd.''.$pagenum.''.$gringo.'();"  style="padding:13px"><i class="fas fa-sort"></i></span>
 </div></div>
 
</div>  


</div>
</vvo>






</div> 



<div  id="spacelast1'.$ivd.''.$gringo.'" class="col-xs-12 "  style="padding:2px" > </div>  


   </div></div>  
   






              </div></div>  
   




                </div>
            


';

include("postscript.php");

?>                          
