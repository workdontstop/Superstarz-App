
<?php





if($_SESSION['theme']=='0'){ 

$feelingspad='rgba(000,000,005,0.1)';
$highlightbutton='whitehighlight';  
$userbuttonid='usernamethemewhite'.$ivd.''.$gringo.'';
$userbuttonid2='usernamethemewhite2'.$ivd.''.$gringo.'';
echo'<style>  
.activefun{background-color:#ffff00;-moz-box-shadow: 0 0 3px#000000;
    -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000; }
.activecare{background-color:#ff0000;-moz-box-shadow: 0 0 3px#000000;
    -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000; }
.activefresh{background-color:#00ccff;-moz-box-shadow: 0 0 3px#000000;
    -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000; }
.activelovely{background-color:#ff0066;-moz-box-shadow: 0 0 3px#000000;
    -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000; }

  .ballfun{-moz-box-shadow: 0 0 3px#999999;
    -webkit-box-shadow: 0 0 3px#999999;box-shadow: 0 0 3px#999999;}
.ballcare{-moz-box-shadow: 0 0 3px#999999;
    -webkit-box-shadow: 0 0 3px#999999;box-shadow: 0 0 3px#999999;}
.ballfresh{-moz-box-shadow: 0 0 3px#999999;
    -webkit-box-shadow: 0 0 3px#999999;box-shadow: 0 0 3px#999999;}
.balllovely{-moz-box-shadow: 0 0 3px#999999;
    -webkit-box-shadow: 0 0 3px#999999;box-shadow: 0 0 3px#999999;}
</style>';
}else{

$feelingspad='rgba(255,255,255,0.2)';
$highlightbutton='darkhighlight';
$userbuttonid='usernamethemedark'.$ivd.''.$gringo.'';
$userbuttonid2='usernamethemedark2'.$ivd.''.$gringo.'';
echo'<style>  
.activefun{background-color:#ffff00;-moz-box-shadow: 0 0 6px#ffff00;
    -webkit-box-shadow: 0 0 6px#ffff00;box-shadow: 0 0 6px#ffff00; }
.activecare{background-color:#ff0000;-moz-box-shadow: 0 0 6px#ff0000;
    -webkit-box-shadow: 0 0 6px#ff0000;box-shadow: 0 0 6px#ff0000; }
.activefresh{background-color:#00ccff;-moz-box-shadow: 0 0 6px#00ccff;
    -webkit-box-shadow: 0 0 6px#00ccff;box-shadow: 0 0 6px#00ccff; }
.activelovely{background-color:#ff0066;-moz-box-shadow: 0 0 6px#ff0066;
    -webkit-box-shadow: 0 0 6px#ff0066;box-shadow: 0 0 6px#ff0066; }

    .ballfun{-moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;}
.ballcare{-moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;}
.ballfresh{-moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;}
.balllovely{-moz-box-shadow: 0 0 3px#cccccc;
    -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc;}
</style>';}




 $usernamedata='

 <style>





#usernamethemewhite'.$ivd.''.$gringo.'{color:#000000;text-shadow: 1.2px 2px 2.4px #aaaaaa;}
   #usernamethemewhite'.$ivd.''.$gringo.':active,#usernamethemewhite'.$ivd.''.$gringo.':hover,#usernamethemewhite'.$ivd.''.$gringo.':target{color: #000000;text-shadow: 0.8px 1px 0.5px #000000;}
   
   
    #usernamethemewhite2'.$ivd.''.$gringo.'{color:#000000; text-shadow: 1.2px 2px 2.4px #aaaaaa;}
   #usernamethemewhite2'.$ivd.''.$gringo.':active,#usernamethemewhite2'.$ivd.''.$gringo.':hover,#usernamethemewhite2'.$ivd.''.$gringo.':target{color: #000000;text-shadow: 0.8px 1px 0.5px #000000;}
    
    
whitehighlight {
 outline:none;
     border: 5px solid transparent;color: #000000;border-radius: 5px;
     padding: 2px;
  overflow:auto;width:auto;transition: all        1.2s, border     0.5s 1.2s, box-shadow 0.3s 1.5s;white-space: nowrap;text-indent: 23px;font-weight:bolder;text-align: center;
}whitehighlight span {
 color:#ffffff;
  display: inline-block;
  -webkit-transform: translateX(300px);
          transform: translateX(300px);
  font-weight: normal;opacity: 0;transition: opacity 0.1s 0.5s, -webkit-transform 0.4s 0.5s;transition: opacity 0.1s 0.5s, transform 0.4s 0.5s; transition: opacity 0.1s 0.5s, transform 0.4s 0.5s, -webkit-transform 0.4s 0.5s;
}whitehighlight:active,whitehighlight:hover,whitehighlight:target{
  text-indent: 0;
  background-color: rgba(000,000,005,0.1);
   padding:6px;
  overflow:auto;
  color:#000000;
  width:auto;
 -moz-box-shadow: 0 0 5px#cccccc;-webkit-box-shadow: 0 0 5px#cccccc;box-shadow: 0 0 5px#cccccc;}whitehighlight:hover span {-webkit-transform: translateX(0);transform: translateX(0);opacity:1;}</style>
 
 
 <style>
    
    #usernamethemedark'.$ivd.''.$gringo.'{color:#ffffff; text-shadow: 0.8px 1px 0.5px #ffffff; }
   #usernamethemedark'.$ivd.''.$gringo.':active,#usernamethemedark'.$ivd.''.$gringo.':hover,#usernamethemedark'.$ivd.''.$gringo.':target{color: #ffffff;text-shadow: 0.8px 1px 0.5px #ffffff;}  
   
   
    #usernamethemedark2'.$ivd.''.$gringo.'{color:#ffffff; text-shadow: 1.2px 2px 2.4px #000000; }
   #usernamethemedark2'.$ivd.''.$gringo.':active,#usernamethemedark2'.$ivd.''.$gringo.':hover,#usernamethemedark2'.$ivd.''.$gringo.':target{color: #ffffff;text-shadow: 0.8px 1px 0.5px #ffffff;}
    
    
darkhighlight {
 outline:none;
     border: 5px solid transparent;color: #000000;border-radius: 5px;
     padding: 2px;
  overflow:auto;width:auto;transition: all        1.2s, border     0.5s 1.2s, box-shadow 0.3s 1.5s;white-space: nowrap;text-indent: 23px;font-weight:bolder;text-align: center;
}darkhighlight span {
 color:#ffffff;
  display: inline-block;
  -webkit-transform: translateX(300px);
          transform: translateX(300px);
  font-weight: normal;opacity: 0;transition: opacity 0.1s 0.5s, -webkit-transform 0.4s 0.5s;transition: opacity 0.1s 0.5s, transform 0.4s 0.5s; transition: opacity 0.1s 0.5s, transform 0.4s 0.5s, -webkit-transform 0.4s 0.5s;
}darkhighlight:active,darkhighlight:hover,darkhighlight:target{
  text-indent: 0;
 background-color: rgba(000,000,005,0.3);
   border:2px solid rgba(255,255,255,0.6);
   padding:6px;
  overflow:auto;
  color:#000000;
  width:auto;
 -moz-box-shadow: 0 0 4px#cccccc;-webkit-box-shadow: 0 0 4px#cccccc;box-shadow: 0 0 4px#cccccc;}darkhighlight:hover span {-webkit-transform: translateX(0);transform: translateX(0);opacity:1;}</style>
 
 
                          
 <script>
function userbuttonover'.$ivd.''.$gringo.'(){
  var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
  var layo = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
if(checkinfofate == 1 || layo==1 ){
  var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="hidden"; 
 $("#'.$userbuttonid2.'").hide(); 
  $("#'.$userbuttonid.'").show(); } } 

  function userbuttonout'.$ivd.''.$gringo.'(){
      var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
       var layo = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
if(checkinfofate == 1 || layo==1 ){
  var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="visible"; 
  $("#'.$userbuttonid2.'").show(); 
  $("#'.$userbuttonid.'").hide();} }
 </script>
     


 
  <vvpandi >
 <'.$highlightbutton.'  onmouseover="javascript:userbuttonover'.$ivd.''.$gringo.'();"  onmouseout="javascript:userbuttonout'.$ivd.''.$gringo.'();"  style="margin-left:5px;"   class="zuzax">

<iif style="font-size:130%" id="'.$userbuttonid2.'">  '.$puser.' </iif>

  <span   id="datausername'.$ivd.''.$gringo.'"  style="margin-top:15px">
 <iif  onclick="javascript:gotopage'.$ivd.''.$gringo.'();"   class="juju" style="font-size:110%" id="'.$userbuttonid.'">  '.$puser.'  </iif>
  
  <iif class="zuperxy juju"  ><iif  style="color:'.$pcl.';"><i  class="fa fa-star" aria-hidden="true"></i></iif><kka style="font-size:110%">   '.$pname.'  </kka></iif></span>
  
  </'.$highlightbutton.' > 
</vvpandi>';




  



 $dme=hashtagplay($dme);



$dme=usertagplay($dme);

















  
$datalayout ='

<div id="sizefixer'.$ivd.''.$gringo.'"  class=""  style="position:fixed;top:9em;height:65%"></div>
<div id="gotochecker'.$ivd.''.$gringo.'"  class=""  style="position:fixed;top:9em;height:90%"></div>
<div id="txtonlyheight'.$ivd.''.$gringo.'"  class=""  style="position:fixed;top:9em;height:65%"></div>
<div id="textaddedhcheck'.$ivd.''.$gringo.'"  class=""  style="position:fixed;top:9em;height:10%"></div>



  <input  id="checkzoom'.$ivd.''.$gringo.'" value="0" hidden>
   <input  id="holdrealwidth'.$ivd.''.$gringo.'" value="0" hidden>
   <input  id="holdrealheight4txt'.$ivd.''.$gringo.'" value="1" hidden>
    <input  id="checkinfostate'.$ivd.''.$gringo.'" value="0" hidden>
     <input  id="checkondivscroll'.$ivd.''.$gringo.'" value="0" hidden>
     <input  id="checkscrolltimeout'.$ivd.''.$gringo.'" value="0" hidden>
      <input  id="saveinfowidth'.$ivd.''.$gringo.'" value="0" hidden>
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





  <div   id="superbody'.$ivd.''.$pagenum.''.$gringo.'"    class="superpostitem'.$pagenum.''.$gringo.'  col-xs-12 col-sm-6"    style="padding:0px;overflow:hidden;">




<div   class=" col-xs-12 zuperxy"   id="clone'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;margin-top:1.5em;z-index:1;display:none">
<div  class="col-xs-3  col-sm-2 zuzax"   style="padding:0px;text-align:center;font-size:150%;" > 
    <span    class="zuzax  zuperxy" style="padding:5px;opacity:0.9">
    <i class="fas fa-clone"></i>  </span> </div> 
 <div  class="col-xs-10"  style="padding:0px"></div>
</div>  



 <div class="superpocket'.$pagenum.'"> 


<div  class="col-xs-12" id="acceptemotionpop'.$ivd.''.$gringo.'" style="position:absolute;top:1em;z-index:1;text-align:center;height:0px;">
 </div> 






<div   class=" col-xs-12 zuperxy"   id="postnumber'.$ivd.''.$gringo.'" style="padding:0px;position:absolute;height:0px;top:0.2em;z-index:1;visibility:hidden">
 <div  class="col-xs-10 col-sm-11"  style="padding:0px" >   </div>
<div  class="col-xs-2  col-sm-1 zuzax"    id="postnumberin'.$ivd.''.$gringo.'" style="padding:0px;text-align:center;font-size:180%;left:-0.4em;">
<span  class="zuzax zuperxy"   id="postnumberinx'.$ivd.''.$gringo.'"   style="background-color:rgba(000,000,005,0.4);
border-radius:6px;font-weight:bold;font-size:50%;padding:5px;opacity:0.8">
 <span id="postnumberactive'.$ivd.''.$gringo.'">1</span>/<span id="postnumbertotal'.$ivd.''.$gringo.'">'.$totalsets.'</span>  </span> 
</div></div>  







<div class="col-xs-12"     id="clicktxt'.$ivd.''.$gringo.'"    style="padding:0px;position:absolute;z-index:1;left:0px;margin-top:1.4em;height:0px;display:none">
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
<div class="col-xs-2  zuperxy zuzax"   onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="padding:0px;text-align:center;opacity:0.7;height:0px">
<span  id="thumby'.$ivd.''.$gringo.'"   class="juju " style="border-radius:50%;padding:18px;font-size:145%" >
<i class="fas fa-ellipsis-h"></i>  </span></div>
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
</div>


<div id="arrowsout'.$ivd.''.$gringo.'">
<div class="col-xs-12"   id="arrows'.$ivd.''.$gringo.'"   style="padding:0px;position:absolute;z-index:1;left:0px;top:42.5%;height:0px;display:none;">
  
 <div class=" col-xs-2  zuperxy zuzax" id="superplayleft'.$ivd.''.$pagenum.''.$gringo.'"  " style="padding:0px;text-align:center;font-size:140%;opacity:0.9;height:0px">
  <span  class="juju" style="border-radius:50%;padding:15px" ><i class="far fa-arrow-alt-circle-left"></i> </span> </div>

  <div class="col-xs-8" style="padding:0px;height:0px"></div>

<div class=" col-xs-2  zuperxy zuzax" id="superplayright'.$ivd.''.$pagenum.''.$gringo.'"  " style="padding:0px;text-align:center;font-size:140%;opacity:0.9;height:0px">
<span  class="juju" style="border-radius:50%;padding:15px" ><i class="far fa-arrow-alt-circle-right"></i></span></div>
  
</div>
</div>







<div class="col-xs-12"  id="arrowsshift'.$ivd.''.$gringo.'"   style="padding:0px;position:absolute;z-index:1;left:0px;top:3em;height:0px">
  <div class="col-xs-7" style="padding:0px;height:0px"></div>
<div class="col-xs-4"  id="arrowsshiftin'.$ivd.''.$gringo.'"   style="padding:0px;height:0px"></div>
  
</div>








<div   class=" col-xs-12 zuperxy"   id="posttypes'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;margin-top:1.2em;z-index:1">

  <div  class="col-xs-2  col-sm-2 zuzax"   onclick="javascript:popupinfocontrol'.$ivd.''.$pagenum.''.$gringo.'();"   id="expandtype'.$ivd.''.$gringo.'"  style="padding:0px;text-align:center;font-size:150%;visibility:hidden" >
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






<div   class=" col-xs-12 zuperxy"   id="previewimage'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:0px;bottom:8em;z-index:1">

<div class="col-xs-2"  id="pushprofileimage'.$ivd.''.$gringo.'" 
  onclick="javascript:hidepropreview'.$ivd.''.$pagenum.''.$gringo.'();"  style="padding:0px;margin-left:5px">
</div>

<div class="col-xs-8" style="padding:0px;height:0px">  </div>

<div class="col-xs-2 zuperxy"  id="postscrollloader'.$ivd.''.$gringo.'" style="font-size:150%;text-align:center;padding:0px;margin-left:-5px;
opacity:0.8;margin-top:2em;visibility:hidden">
 <i class="fas fa-circle-notch fa-spin"></i>
</div>    </div> 



 </div> 


<div  class="col-xs-12"  id="goto'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-25px;">
</div>

<div  class="col-xs-12"  id="gotom'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-36px;">
</div>






<div   class="col-xs-12 "  id="datauniverse'.$ivd.''.$gringo.'"   style="padding:10px;border-top-right-radius:6px;border-top-left-radius:6px;margin:0px;margin-bottom:-1px">

<div  class="col-xs-12"   id="dataspacetop'.$ivd.''.$gringo.'"  style="padding:0px;height:10px;display:none"></div> 


<div  class="col-xs-12 turlow"  id="collecttopdata'.$ivd.''.$gringo.'"   style="font-weight:bolder;padding:0px;border-top-right-radius:15px;border-top-left-radius:15px;display:none"></div> 


 <div  class="col-xs-12"  id="datacase'.$ivd.''.$gringo.'"   style="margin:0px;padding:0px;overflow:hidden;position:relative;outline:none;">
    '.$data1.'</div> 


<div  class="col-xs-12"  id="slidebar'.$ivd.''.$gringo.'" style="z-index:1;display:none;position:relative;margin-top:-5px">
<div  class="col-xs-2"  style="padding:0px;"></div> 
<div  class="col-xs-8"  style="background-color:#cccccc;height:5px;padding:0px;display:block;border-top-right-radius:6px;border-top-left-radius:6px"> 
<div  class="col-xs-12 stopslidebar"   id="activatebar'.$ivd.''.$gringo.'"  style="-moz-box-shadow: 0 0 3px#000000;
 -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000;background-color:'.$pcl.';height:5px;width:100%;padding:0px;border-top-left-radius:6px;border-top-right-radius:6px;"></div> 
</div></div> 


<div  class="col-xs-12 turlow"  id="collectbottomdata'.$ivd.''.$gringo.'"   style="font-weight:bolder;padding:0px;border-bottom-right-radius:15px;border-bottom-left-radius:15px;display:none"></div> 

<div  class="col-xs-12"   id="dataspacebottom'.$ivd.''.$gringo.'"  style="padding:0px;height:10px;display:none"></div> 

               
 </div> 





<div   class="superpocket'.$pagenum.'  col-xs-12 '.$posttheme.'"  id="postinfo'.$ivd.''.$gringo.'" style="padding:0px;overflow:hidden;position:absolute; border-bottom-left-radius:4px;  border-bottom-right-radius:4px; height:auto;bottom:0;visibility:hidden">
<div   class=" col-xs-12"  style="padding:0px; background-color:rgba(000,000,005,0.05);">



<div  class="col-xs-12"  id="gotolong'.$ivd.''.$gringo.'"  style="padding:0px;position:absolute;height:auto;top:-400px;">
</div>






             <div  class="col-xs-12"   id="holdtopdata'.$ivd.''.$gringo.'"    style="padding:0px;overflow:hidden;">

             <div  class="col-xs-12"   id="topdata'.$ivd.''.$gringo.'"    style="padding:0px;overflow:hidden;">

<div class="col-xs-2 dontallowselect zuzax juju"  onclick="javascript:gotopage'.$ivd.''.$gringo.'();"   id="acceptprofileimage'.$ivd.''.$gringo.'"  style="padding:0px;">
<div class="col-xs-12"  id="profileimage'.$ivd.''.$gringo.'"  style="padding:12px;padding-bottom:0px;text-align:center;">


<div class="zuperxyinfo dontallowselect"  id="profileimageinfo'.$ivd.''.$gringo.'"  style="height:22px;width:22px;background-color:'.$pcl.';position:absolute;margin-top:-5px;border-radius:50%;margin-left:3em;text-align:center;font-size:12px;">  
   <div style="margin-top:2.25px;margin-left:-1.5px"> '.$infoicon.' </div></div>

<img src="images/profilemini/'.$pim.'"   id="profileimagefile'.$ivd.''.$gringo.'"  class="img-rounded img-responsive dontallowselect" style="padding-bottom:1px;-moz-box-shadow: 0 0 2px'.$pcl.';-webkit-box-shadow: 0 0 2px'.$pcl.';box-shadow: 0 0 2px'.$pcl.'; background-color:'.$pcl.';border-radius:50%;"  title="'.$puser.'"/> </div> </div>  


  <div  class="col-xs-10"   style="padding:0px;">
<div  class="col-xs-7 col-sm-5 dontallowselect"  id="namebutton'.$ivd.''.$gringo.'"     style="padding:0px;">'.$usernamedata.'  </div> 

<div  class="col-xs-hidden   col-sm-3   "   style="padding:0px">   </div>  

<div   id="postfunctions'.$ivd.''.$gringo.'"   class="col-xs-5  col-sm-4  zuzax  zuperxy" 
 style="padding:6px;position:relative;z-index:1;margin-top:5.25px">
<div class="col-xs-4 col-sm-2 col-md-4 "  style="text-align:center;font-size:100%;padding:0px;"></div>

<div  class="col-xs-4 col-sm-5 col-md-4 zuzax  zuperxy boxonhoverclear"  style="text-align:center;padding:1px;">
 <span  title="Fullview" id="zoomer'.$ivd.''.$gringo.'"  onclick="javascript:zoomclick'.$ivd.''.$pagenum.''.$gringo.'();"     style="opacity:0.9;font-size:100%;"><i class="fas fa-search-plus" aria-hidden="true"></i></span>  
 <span title="Play" id="playtypeinsx'.$ivd.''.$gringo.'"   onclick="javascript:startplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="zuzax  zuperxy" style="padding:5px;display:none;font-size:130%;"><i class="far fa-play-circle"></i>  </span> 
    <span title="Stop" id="pausetypeinsx'.$ivd.''.$gringo.'"  onclick="javascript:endplay'.$ivd.''.$pagenum.''.$gringo.'();"  class="zuzax  zuperxy" style="padding:5px;display:none;font-size:130%;margin-top:-5px">
    <i class="far fa-stop-circle"></i>  </span> </div>

<div  id="more'.$ivd.''.$gringo.'"   class="col-xs-4 col-sm-5 col-md-4 zuzax  zuperxy boxonhoverclear"  style="text-align:center;font-size:100%;padding:1px;">
          <span title="More" style="opacity:0.9"> <i class=" fa fa-ellipsis-v" aria-hidden="true"></i></span>  </div></div>


<div  class="col-xs-12"  style="padding:0px;"></div>

<div  class="col-xs-12"  id="topic'.$ivd.''.$gringo.'"  style="padding:0px;text-align:center;font-size:100%;"> <bottr>'.$dtup.'</bottr></div></div>  

                   </div>     </div>  









             <div  class="col-xs-12"   id="holdbottomdata'.$ivd.''.$gringo.'"    style="padding:0px;">

             <div  class="col-xs-12"   id="bottomdata'.$ivd.''.$gringo.'"    style="padding:0px;">

<div  class="col-xs-12 y"></div>

     <div class="col-xs-12" id="caption'.$ivd.''.$gringo.'" style="padding-left:15px;padding-right:15px;padding:0px;font-size:115%;text-align:center" >
                          <vvpandi> '.$dme.' </vvpandi>  </div>

<div  class="col-xs-12 zz"></div> 



<div  class="col-xs-12"  style="padding:0px;position:relative">
<vvpandi>

<input  id="feelstate'.$ivd.''.$gringo.'" value="'.$feelstate.'" hidden>


<div  class="col-xs-3"  style="padding:0px;text-align:center;">
<span class="col-xs-12" id="emotioncount1'.$ivd.''.$gringo.'"  style="padding:1px">'.$fun.'</span>
<input  id="holdemotioncount1'.$ivd.''.$gringo.'" value="'.$fun.'" hidden>
 <br> 
<div  class="col-xs-12"   style="">
<div class="'.$act1.'"   id="activeemotion1'.$ivd.''.$gringo.'"  style="height:0.1em;width:0.1em;border-radius:50em;margin:0 auto;padding:5px">   </div>
</div></div> 



<div  class="col-xs-3"  style="padding:0px;text-align:center;">
<span class="col-xs-12"  id="emotioncount2'.$ivd.''.$gringo.'"  style="padding:1px">'.$care.'</span>
<input  id="holdemotioncount2'.$ivd.''.$gringo.'" value="'.$care.'" hidden>
 <br> 
<div  class="col-xs-12"   style="">
<div class="'.$act2.'"   id="activeemotion2'.$ivd.''.$gringo.'"  style="height:0.1em;width:0.1em;border-radius:50em;margin:0 auto;padding:5px">   </div>
</div></div>  




<div  class="col-xs-3"  style="padding:0px;text-align:center;">
<span class="col-xs-12"  id="emotioncount3'.$ivd.''.$gringo.'"  style="padding:1px">'.$fresh.'</span>
<input  id="holdemotioncount3'.$ivd.''.$gringo.'" value="'.$fresh.'" hidden>
 <br> 
<div  class="col-xs-12"   style="">
<div class="'.$act3.'"   id="activeemotion3'.$ivd.''.$gringo.'"  style="height:0.1em;width:0.1em;border-radius:50em;margin:0 auto;padding:5px">   </div>
</div></div> 




<div  class="col-xs-3"  style="padding:0px;text-align:center;">
<span class="col-xs-12" id="emotioncount4'.$ivd.''.$gringo.'"  style="padding:1px">'.$lovely.'</span>
 <input  id="holdemotioncount4'.$ivd.''.$gringo.'" value="'.$lovely.'" hidden>
 <br> 
<div  class="col-xs-12"   style="">
<div class="'.$act4.'"   id="activeemotion4'.$ivd.''.$gringo.'"  style="height:0.1em;width:0.1em;border-radius:50em;margin:0 auto;padding:5px">   </div>
</div></div> 


</vvpandi>
 </div> 


<div  class="col-xs-12 y"></div> 


<div  class="col-xs-12"  style="padding:0px">

<div  class="col-xs-3"  style="padding:0px;text-align:center">
<img src="images/laugh2.png" class="zuzax juju '.$activepad1.'" onmousedown="javascript:emote'.$ivd.''.$gringo.'(1);"  id="emotion1'.$ivd.''.$gringo.'" height="23.25em" width="auto"
 style="padding:1px;border-radius:20px"/>  </div> 

<div  class="col-xs-3"  style="padding:0px;text-align:center">
<img src="images/oo2.png"  class="zuzax juju '.$activepad2.'" onmousedown="javascript:emote'.$ivd.''.$gringo.'(2);"  id="emotion2'.$ivd.''.$gringo.'"  height="23.25em" width="auto"  
style="padding:1px;border-radius:20px"/></div> 

<div  class="col-xs-3"  style="padding:0px;text-align:center">
<img src="images/cool2.png"  class="zuzax juju '.$activepad3.'" onmousedown="javascript:emote'.$ivd.''.$gringo.'(3);"  id="emotion3'.$ivd.''.$gringo.'"   height="23.25em" width="auto" 
style="padding:1px;border-radius:20px"/></div> 

<div  class="col-xs-3"  style="padding:0px;text-align:center">
<img src="images/love2.png" class="zuzax juju '.$activepad4.'" onmousedown="javascript:emote'.$ivd.''.$gringo.'(4);"   id="emotion4'.$ivd.''.$gringo.'"  height="23.25em"  width="auto"
 style="padding:1px;border-radius:20px"/></div> 

 </div> 


<div  class="col-xs-12 za"></div> 
<div  class="col-xs-12 za"></div> 


<div  class="col-xs-12 "  style="padding:0px">

<div class="col-xs-4"  style="font-size:90%;margin-top:0.32em;text-align:left;margin-left:-6px;">'.$dti.'</div>  

<div class="col-xs-4" style="font-size:140%;text-align:center;margin-top:0.1em;">'.$commentscount.'<i class="far fa-comment-alt" aria-hidden="true"></i></div>  
    

<div class="col-xs-4"   style="font-size:120%;padding:0px;margin-top:0.15em;">
<div class="col-xs-6"  style="padding:0px;text-align:left">
<span title="Compress"   id="compressa'.$ivd.''.$gringo.'"  class="zuzax juju" onclick="javascript:compressor'.$pagenum.''.$gringo.'('.$ivd.');"  style="padding:13px"><i class="fas fa-compress-arrows-alt"></i></span></div>
<div class="col-xs-6"   style="padding:0px;text-align:right">
<span title="Switch" class="zuzax juju"   onclick="javascript:swint'.$ivd.''.$pagenum.''.$gringo.'();"  style="padding:13px"><i class="fas fa-sync"></i></span></div></div>     
</div> 


<div  class="col-xs-12 zaz"  > </div>  


   </div></div>  
   






              </div></div>  
   




                </div>
            






  <script> 


 function swint'.$ivd.''.$pagenum.''.$gringo.'(){

switchlayout'.$ivd.''.$pagenum.''.$gringo.'();       }








 function emote'.$ivd.''.$gringo.'(a){
if(a == 1){ document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'").innerHTML="";
$("#acceptemotionpop'.$ivd.''.$gringo.'").append($("#holdfunpop").clone());}
else if(a == 2){ document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'").innerHTML="";
$("#acceptemotionpop'.$ivd.''.$gringo.'").append($("#holdcarepop").clone());}
else if(a == 3){ document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'").innerHTML="";
$("#acceptemotionpop'.$ivd.''.$gringo.'").append($("#holdfreshpop").clone());}
else if(a == 4){ document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'").innerHTML="";
$("#acceptemotionpop'.$ivd.''.$gringo.'").append($("#holdlovelypop").clone());}
 var aepp = document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'");
setTimeout(function(){  aepp.style.opacity="0.4"; },300);
setTimeout(function(){  document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'").innerHTML=""; 
                        aepp.style.opacity="1"; },400);

       

var checkfeel = $("#feelstate'.$ivd.''.$gringo.'").val();


    if(checkfeel == 1){
       var rollerx1=document.getElementById("emotion1'.$ivd.''.$gringo.'");
      rollerx1.style.transition="all 4s ease";
      rollerx1.style.transform="rotate(-360deg)";
     $("#emotion1'.$ivd.''.$gringo.'").removeClass("ballfun"); }


    if(checkfeel == 2){
     var rollerx2=document.getElementById("emotion2'.$ivd.''.$gringo.'");
      rollerx2.style.transition="all 4s ease"; 
    rollerx2.style.transform="rotate(-360deg)";
     $("#emotion2'.$ivd.''.$gringo.'").removeClass("ballcare");   }


    if(checkfeel == 3){
      var rollerx3=document.getElementById("emotion3'.$ivd.''.$gringo.'");
      rollerx3.style.transition="all 4s ease"; 
    rollerx3.style.transform="rotate(-360deg)";
     $("#emotion3'.$ivd.''.$gringo.'").removeClass("ballfresh");   }


     if(checkfeel == 4){
      var rollerx4=document.getElementById("emotion4'.$ivd.''.$gringo.'");
      rollerx4.style.transition="all 4s ease"; 
    rollerx4.style.transform="rotate(-360deg)";
      $("#emotion4'.$ivd.''.$gringo.'").removeClass("balllovely");  }

    
       
     if(a == 1 && checkfeel != 1){$("#emotion1'.$ivd.''.$gringo.'").addClass("ballfun");}
     else if(a == 2 && checkfeel != 2){$("#emotion2'.$ivd.''.$gringo.'").addClass("ballcare");}
     else  if(a == 3 && checkfeel != 3){$("#emotion3'.$ivd.''.$gringo.'").addClass("ballfresh");}
      else if(a == 4 && checkfeel != 4){$("#emotion4'.$ivd.''.$gringo.'").addClass("balllovely");}





var b="'.$ivd.'";
var c="'.$gringo.'";
 $.ajax({
  type: "POST",
  url: "emotions.php",
  data: {emotion:a,postid:b,gringo:c}, 
 success: function(data){
  $("#superemoticoninteract").html(data).show();  },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 


    }









 function  gotopage'.$ivd.''.$gringo.'(){

  $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 


   var typ="2";
   var checkuser="'.$_SESSION['numuser'].'";
    var clicked="'.$userid.'";
    var usr ="'.$puser.'";

 if( checkuser == clicked){ 
  var  gtopag="userpagegate.php";
 var  gtocon="supershow";
 $.ajax({
  type: "POST",
  url: ""+gtopag+"",
  data: {member:'.$userid.',name:usr,scroll:1,page:0,jump:0}, 
 success: function(data){
    $("#"+gtocon+"").html(data).show(); 
    var spec = {member:""+checkuser+"",name:""+usr+"",scroll:"0",logged:"1",typex:"2"};
      history.pushState(spec,null,document.URL); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 

     } else{
      powerframe = 0;
     clearTimeout(timewideframe);
var  gtopag="datauser.php";
 var  gtocon="supercontent";
 $.ajax({
  type: "POST",
  url: ""+gtopag+"",
  data: {member:'.$userid.',ty:typ,page:0,jump:0}, 
 success: function(data){
   
      if(clickedfrompost == 1){
         jump2 ="'.$ivd.'";
          page2="'.$pagenum.'";
        clickpostuser2="'.$d.'";
      clickposttype2="'.$gringo.'";
      clickedfrompost2 =1; }
      else{
        jump ="'.$ivd.'";
      page="'.$pagenum.'";
        clickpostuser="'.$d.'";
      clickposttype="'.$gringo.'";
      clickedfrompost =1;   }

    $("#"+gtocon+"").html(data).show();
    var spec = {member:""+clicked+"",name:""+usr+"",scroll:"0",logged:"1",typex:"2"};
      history.pushState(spec,null,document.URL); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });  }

                };





  function hidepropreview'.$ivd.''.$pagenum.''.$gringo.'(){
    var checktimoxf = $("#checkproimtimout'.$ivd.''.$gringo.'").val();
if(checktimoxf == 1){    clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); }
document.getElementById("checkproimtimout'.$ivd.''.$gringo.'").value=100;  
var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="hidden";}






var firstimx'.$ivd.' = $("#heightstate'.$ivd.''.$gringo.'").val();







  function padmobile'.$ivd.''.$pagenum.''.$gringo.'(){
if(mobileboy == 1){
   var imagevar = document.getElementById("image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");
var casevar = document.getElementById("datauniverse'.$ivd.''.$gringo.'");
   imagevar.style.borderRadius="0px";
  casevar.style.padding="0px";
  casevar.style.paddingTop="0px";
   casevar.style.paddingBottom="0px";
   var postty = document.getElementById("posttypes'.$ivd.''.$gringo.'");
   var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
     var previmxx = document.getElementById("previewimage'.$ivd.''.$gringo.'");
    var datusenm = document.getElementById("datausername'.$ivd.''.$gringo.'");
     var posfunc = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
     var psl = document.getElementById("postscrollloader'.$ivd.''.$gringo.'");
      var pnn = document.getElementById("postnumber'.$ivd.''.$gringo.'");
        var pnnin = document.getElementById("postnumberin'.$ivd.''.$gringo.'");
         var pnninx = document.getElementById("postnumberinx'.$ivd.''.$gringo.'");
          var clickthum = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
            var xthum = document.getElementById("thumby'.$ivd.''.$gringo.'");
               var xrr = document.getElementById("arrowsshift'.$ivd.''.$gringo.'");
               var proimimfo = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
                var sllbrr = document.getElementById("slidebar'.$ivd.''.$gringo.'");
                sllbrr.style.bottom="0.005em";
               proimimfo.style.marginLeft="2.6em";
               var chkxrr = "'.$totalsets.'";
          if(chkxrr > 5){  xrr.style.top="2em";}else{
            xrr.style.top="0.7em";}
            xthum.style.fontSize="125%";
           clickthum.style.marginTop="0.9em";
         pnn.style.top="-0.5em";
          pnnin.style.left="0.4em";
          pnninx.style.padding="4px";      
  postty.style.marginTop="6px";
   proim.style.padding="4px";
   proim.style.marginTop="5px";
   datusenm.style.marginTop="12px";
  posfunc.style.marginTop="1px"; 
  previmxx.style.bottom="5.5em";
  psl.style.marginTop="1.5em";  }
else{   var xrr = document.getElementById("arrowsshift'.$ivd.''.$gringo.'");
               var chkxrr = "'.$totalsets.'";
          if(chkxrr > 5){}else{
            xrr.style.top="1.5em";}} }













 function profpadsmall'.$ivd.''.$pagenum.''.$gringo.'(){
  var proimx = document.getElementById("profileimage'.$ivd.''.$gringo.'");
  var proimxx = document.getElementById("profileimagefile'.$ivd.''.$gringo.'");
if(mobileboy == 1){
  proimx.style.padding="8px"; }else{
  proimx.style.padding="20px"; }}




 function profpadlarge'.$ivd.''.$pagenum.''.$gringo.'(){
  var proimx = document.getElementById("profileimage'.$ivd.''.$gringo.'");
  var proimxx = document.getElementById("profileimagefile'.$ivd.''.$gringo.'");
if(mobileboy == 1){
  proimx.style.padding="4px"; }else{
  proimx.style.padding="15px"; }}














function endplay'.$ivd.''.$pagenum.''.$gringo.'(){
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslide'.$ivd.''.$gringo.'();
   var zay = $("#zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").val();
if(zay == 1){ $("#pausetypeinsx'.$ivd.''.$gringo.'").hide(); 
 $("#playtypeinsx'.$ivd.''.$gringo.'").show();}
$("#pausetypein'.$ivd.''.$gringo.'").hide();
$("#playtypein'.$ivd.''.$gringo.'").show();
$("#arrows'.$ivd.''.$gringo.'").show();
var actin = $("#activeindex'.$ivd.''.$gringo.'").val();
var typxv = $("#type"+actin+"'.$ivd.''.$gringo.'").val();
if(typxv == 0 ||  typxv == 100){ }else{
  var innum="'.$totalsets.'";
if(innum > 5){
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="visible";}  }

$("#slidebar'.$ivd.''.$gringo.'").hide();
 $("#activatebar'.$ivd.''.$gringo.'").addClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("startslidebar");

var sem = document.getElementById("playtype'.$ivd.''.$gringo.'");
sem.style.visibility="hidden";
document.getElementById("allowshortimage'.$ivd.''.$gringo.'").value=0;
document.getElementById("playkey'.$pagenum.''.$gringo.'").value=0;
textnotifyplay(0);}








function startplay'.$ivd.''.$pagenum.''.$gringo.'(){
      var pk = $("#playkey'.$pagenum.''.$gringo.'").val();
 if(pk != 0 &&  pk != "'.$ivd.'"){
    $("#datacase"+pk+"'.$gringo.'").slick("unslick");
     var idexn = $("#activeindex"+pk+"'.$gringo.'").val();
    var idexnreal = idexn - 1;
    $("#datacase"+pk+"'.$gringo.'").slick({ 
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
   swipe:true,
    lazyLoad: "ondemand",
arrows:true,
  slidesToScroll: 1,
  slidesToShow: 1,
speed:600,
fade:true,
  cssEase: "linear",
dots: true,
  infinite: true,
prevArrow: $("#superplayleft"+pk+"'.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright"+pk+"'.$pagenum.''.$gringo.'"),
adaptiveHeight: false  });
 var zay = $("#zoominshortlockup"+pk+"'.$pagenum.''.$gringo.'").val();
if(zay == 1){ $("#pausetypeinsx"+pk+"'.$gringo.'").hide(); 
 $("#playtypeinsx"+pk+"'.$gringo.'").show();}
$("#pausetypein"+pk+"'.$gringo.'").hide();
$("#playtypein"+pk+"'.$gringo.'").show();
$("#arrows"+pk+"'.$gringo.'").show();
var actin = $("#activeindex"+pk+"'.$gringo.'").val();
var typxv = $("#type"+actin+""+pk+"'.$gringo.'").val();
if(typxv == 0 ||  typxv == 100){ }else{
  var innum="'.$totalsets.'";
if(innum > 5){
var pstnub = document.getElementById("postnumber"+pk+"'.$gringo.'");
pstnub.style.visibility="visible";}  }

$("#slidebar"+pk+"'.$gringo.'").hide();
 $("#activatebar"+pk+"'.$gringo.'").addClass("stopslidebar");
 $("#activatebar"+pk+"'.$gringo.'").removeClass("startslidebar");

var semx = document.getElementById("playtype"+pk+"'.$gringo.'");
semx.style.visibility="hidden";
document.getElementById("allowshortimage"+pk+"'.$gringo.'").value=0;
    document.getElementById("playkey'.$pagenum.''.$gringo.'").value="'.$ivd.'"; } 


var zay = $("#zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").val();
if(zay == 1){ 
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslideplay'.$ivd.''.$gringo.'();
   $("#playtypeinsx'.$ivd.''.$gringo.'").hide();
      $("#pausetypeinsx'.$ivd.''.$gringo.'").show();
    }else{
zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,1,0);   }
$("#playtypein'.$ivd.''.$gringo.'").hide();
$("#slidebar'.$ivd.''.$gringo.'").show();
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").addClass("startslidebar");
document.getElementById("allowshortimage'.$ivd.''.$gringo.'").value=1;
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=0;
textnotifyplay(1);

if(pk == 0){document.getElementById("playkey'.$pagenum.''.$gringo.'").value="'.$ivd.'"; }}










function popupinfocontrol'.$ivd.''.$pagenum.''.$gringo.'(){
var dinfostate = $("#displayinfostate'.$pagenum.''.$gringo.'").val();
if(dinfostate == 0){ 
  textnotifyauto(1);
document.getElementById("displayinfostate'.$pagenum.''.$gringo.'").value=1;
$(".scrollpoptoggleoff").hide();
$(".scrollpoptoggleon").show();
document.getElementById("scrollpoptoggleonx'.$ivd.''.$pagenum.''.$gringo.'").style.color="'.$pcl.'"; 
setTimeout(function(){ 
 document.getElementById("scrollpoptoggleonx'.$ivd.''.$pagenum.''.$gringo.'").style.color="#ffffff";   },500);
}else{ 
  textnotifyauto(0);
document.getElementById("displayinfostate'.$pagenum.''.$gringo.'").value=0;
$(".scrollpoptoggleoff").show();
 $(".scrollpoptoggleon").hide();}}



















function popupinfo'.$ivd.''.$pagenum.''.$gringo.'(){
  if(autorun == 1){
var checkdiv = $("#checkondivscroll'.$ivd.''.$gringo.'").val();
var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
var cc = $("#displayinfostate'.$pagenum.''.$gringo.'").val();
if(cc == 1){
if(checkdiv == 0  &&  checkinfofate == 0){
document.getElementById("activedisplayinfostate'.$pagenum.''.$gringo.'").value="'.$ivd.'";
var pscrol = document.getElementById("postscrollloader'.$ivd.''.$gringo.'");
pscrol.style.visibility="visible";
document.getElementById("checkscrolltimeout'.$ivd.''.$gringo.'").value=100;
poptim'.$ivd.''.$pagenum.''.$gringo.'= setTimeout(function(){
if(mobileboy == 0 || mobileboy == 1  ){
var  mib = $("#activedisplayinfostate'.$pagenum.''.$gringo.'").val();
var gib ="'.$ivd.'";
var pscrollh = document.getElementById("postscrollloader'.$ivd.''.$gringo.'");
pscrollh.style.visibility="hidden";}
else{  
var  mib = "'.$ivd.'";
var gib ="'.$ivd.'";
document.getElementById("checkondivscroll'.$ivd.''.$gringo.'").value=1;
var pscrollh = document.getElementById("postscrollloader'.$ivd.''.$gringo.'");
pscrollh.style.visibility="hidden";}
if( gib == mib){
zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(1,0,0);}
},6000);} }          }   }












function   profileimageclock'.$ivd.''.$gringo.'(){
var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="hidden";
 document.getElementById("checkproimtimout'.$ivd.''.$gringo.'").value=1;
profileimagetimeout'.$ivd.''.$gringo.'=setTimeout(function(){
  document.getElementById("checkproimtimout'.$ivd.''.$gringo.'").value=0;
  proim.style.visibility="visible";},10000);}








function forcearrowtop'.$ivd.''.$gringo.'(){
var pres = $("#checkpress'.$pagenum.''.$gringo.'").val();
   if(pres == 1){     
 expand'.$pagenum.''.$gringo.'('.$ivd.');}else{

var checkinfofatez = $("#checkinfostate'.$ivd.''.$gringo.'").val();
var playk = $("#playkey'.$gringo.'").val();
if(checkinfofatez == 1 ){
var zay = $("#zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").val();
if(zay == 1){
 var allp = $("#allowpauseimage'.$ivd.''.$gringo.'").val();
if(allp == 0 ){zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);  }  
 }else{ zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0); }

}else{ 
var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
if(allow == 1){
var allp = $("#allowpauseimage'.$ivd.''.$gringo.'").val();
if(allp == 0 ){
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
$("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslide'.$ivd.''.$gringo.'();
    var innum="'.$totalsets.'";
if(innum > 5){
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="hidden";}
   $("#arrows'.$ivd.''.$gringo.'").hide();
$("#pausetypein'.$ivd.''.$gringo.'").show();
$("#slidebar'.$ivd.''.$gringo.'").hide();
 $("#activatebar'.$ivd.''.$gringo.'").addClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("startslidebar");
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=1;
textnotifyplay(2);}}
else{ arrowtxttimepop'.$ivd.''.$gringo.'(); }

        }      
        }}







function arrowtxttime'.$ivd.''.$gringo.'(){
  document.getElementById("checkarrtxtimout'.$ivd.''.$gringo.'").value=1;
     arrtoptimeout'.$ivd.''.$gringo.'=setTimeout(function(){
var adjlongp = $("#adjustarrowlongpost'.$ivd.''.$gringo.'").val();
       if(adjlongp == 1){
        var arrzw = document.getElementById("arrows'.$ivd.''.$gringo.'");
        arrzw.style.top="15%";}else{
         $("#arrows'.$ivd.''.$gringo.'").appendTo("#arrowsshiftin'.$ivd.''.$gringo.'");}
    document.getElementById("checkarrtxtimout'.$ivd.''.$gringo.'").value=0; },4000);}




function arrowtxttimepop'.$ivd.''.$gringo.'(){
  document.getElementById("checkarrtxtimoutx'.$ivd.''.$gringo.'").value=1;
     arrtoptimeoutx'.$ivd.''.$gringo.'=setTimeout(function(){
var arrzw = document.getElementById("arrows'.$ivd.''.$gringo.'");
     arrzw.style.opacity="0.7";
var adjlongp = $("#adjustarrowlongpost'.$ivd.''.$gringo.'").val();
       if(adjlongp == 1){arrzw.style.top="15%";}else{
       $("#arrows'.$ivd.''.$gringo.'").appendTo("#arrowsshiftin'.$ivd.''.$gringo.'");  }
    document.getElementById("checkarrtxtimoutx'.$ivd.''.$gringo.'").value=0; },5);}










function startsingle'.$ivd.''.$gringo.'(){
   var idexn = $("#activeindex'.$ivd.''.$gringo.'").val();
    var idexnreal = idexn - 1;
  $("#datacase'.$ivd.''.$gringo.'").slick({ 
  initialSlide:idexnreal,
   swipe:false,
    lazyLoad: "ondemand",
arrows:false,
  slidesToScroll: 1,
  slidesToShow: 1,
speed: 600,
fade: true,
  cssEase: "linear",
dots: false,
  infinite: true,

prevArrow: $("#superplayleft'.$ivd.''.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright'.$ivd.''.$pagenum.''.$gringo.'"),
adaptiveHeight: false }); }



function startslide'.$ivd.''.$gringo.'(){
   var idexn = $("#activeindex'.$ivd.''.$gringo.'").val();
    var idexnreal = idexn - 1;
$("#datacase'.$ivd.''.$gringo.'").slick({ 
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
   swipe:true,
    lazyLoad:"ondemand",
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
speed:600,
fade:true,
  cssEase:"linear",
dots:true,
  infinite:true,

prevArrow: $("#superplayleft'.$ivd.''.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright'.$ivd.''.$pagenum.''.$gringo.'"),
adaptiveHeight: false  }); }







function startslideplay'.$ivd.''.$gringo.'(){
   var idexn = $("#activeindex'.$ivd.''.$gringo.'").val();
    var idexnreal = idexn - 1;
$("#datacase'.$ivd.''.$gringo.'").slick({ 
  pauseOnFocus:false,
  pauseOnHover:false,
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
 autoplay:true,
  autoplaySpeed:6000,
speed:600,
   swipe:false,
    lazyLoad:"ondemand",
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
fade: true,
  cssEase:"linear",
dots: true,
  infinite:true,

prevArrow: $("#superplayleft'.$ivd.''.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright'.$ivd.''.$pagenum.''.$gringo.'"),
adaptiveHeight: false  }); }







function haltplay'.$ivd.''.$pagenum.''.$gringo.'(){
  var allp = $("#allowpauseimage'.$ivd.''.$gringo.'").val();
if(allp == 0 ){
$("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslide'.$ivd.''.$gringo.'();
   $("#arrows'.$ivd.''.$gringo.'").hide();
   var innum="'.$totalsets.'";
     if(innum > 5){
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="hidden";}
$("#pausetypein'.$ivd.''.$gringo.'").show();
$("#slidebar'.$ivd.''.$gringo.'").hide();
 $("#activatebar'.$ivd.''.$gringo.'").addClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("startslidebar");
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=1;
textnotifyplay(2);
}else{
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslideplay'.$ivd.''.$gringo.'();
$("#pausetypein'.$ivd.''.$gringo.'").hide();
  $("#arrows'.$ivd.''.$gringo.'").show();
var actin = $("#activeindex'.$ivd.''.$gringo.'").val();
var typxv = $("#type"+actin+"'.$ivd.''.$gringo.'").val();
if(typxv == 0 || typxv == 100){ }else{
  var innum="'.$totalsets.'";
if(innum > 5){
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="visible";}  }
  $("#slidebar'.$ivd.''.$gringo.'").show();
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").addClass("startslidebar");
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=0;
textnotifyplay(1);}    }






function zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(a,b,c){

var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();

var zay = $("#zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").val();
if(zay == 1){


if(allow == 1){  haltplay'.$ivd.''.$pagenum.''.$gringo.'();   }else{  alert("zoom"); }


}
else{   



   var pres = $("#checkpress'.$pagenum.''.$gringo.'").val();

   if(pres == 1){   
 expand'.$pagenum.''.$gringo.'('.$ivd.');
    }else{


if(allow == 1){

haltplay'.$ivd.''.$pagenum.''.$gringo.'();

}else{

$("#emotion1'.$ivd.''.$gringo.'").show(); 
     $("#emotion2'.$ivd.''.$gringo.'").show(); 
      $("#emotion3'.$ivd.''.$gringo.'").show(); 
       $("#emotion4'.$ivd.''.$gringo.'").show(); 

var cdss = $("#checkscrolltimeout'.$ivd.''.$gringo.'").val();
if(cdss == 100){   clearTimeout(poptim'.$ivd.''.$pagenum.''.$gringo.');  }
document.getElementById("checkondivscroll'.$ivd.''.$gringo.'").value=1;
var pscrollh = document.getElementById("postscrollloader'.$ivd.''.$gringo.'");
pscrollh.style.visibility="hidden";
var expandvar = document.getElementById("expandtype'.$ivd.''.$gringo.'");
var playvar = document.getElementById("playtype'.$ivd.''.$gringo.'");
var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
var firstim = $("#heightstate'.$ivd.''.$gringo.'").val();
var imagevar = document.getElementById("image"+idex+"'.$ivd.''.$gringo.'");
var imagevarx = document.getElementById("image"+firstim+"'.$ivd.''.$gringo.'");
var casevar = document.getElementById("datacase'.$ivd.''.$gringo.'");
var infovar = document.getElementById("postinfo'.$ivd.''.$gringo.'");
var iw = parseInt(window.getComputedStyle(imagevar,null).width);
   var ih = parseInt(window.getComputedStyle(imagevar,null).height);
   var infoh = parseInt(window.getComputedStyle(infovar,null).height);
   var proimimfox = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");

var siwidth = $("#saveinfowidth'.$ivd.''.$gringo.'").val();
   if(siwidth == 0){  var iv'.$ivd.''.$gringo.'= iw;
document.getElementById("saveinfowidth'.$ivd.''.$gringo.'").value=iw;
    }else{ 
 var iv'.$ivd.''.$gringo.'= siwidth;}

var checktimo = $("#checkproimtimout'.$ivd.''.$gringo.'").val();


var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
if(checkinfofate == 0  || a == 1){
 

var cctyp = $("#type"+idex+"'.$ivd.''.$gringo.'").val();
if(cctyp==0 || cctyp==100){}else{
$("#image"+idex+"inside'.$ivd.''.$gringo.'").addClass("blurplaceholder");}

var innum="'.$totalsets.'";
if(innum > 5){
var pstnu = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnu.style.visibility="hidden";}

profpadlarge'.$ivd.''.$pagenum.''.$gringo.'();


var totsetsx'.$ivd.''.$gringo.' = $("#totalallsets'.$ivd.''.$gringo.'").val();
if(totsetsx'.$ivd.''.$gringo.' == 1){}else{
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
startsingle'.$ivd.''.$gringo.'();
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="none";}

if(checktimo == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); }

var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="visible";
$("#profileimage'.$ivd.''.$gringo.'").appendTo("#acceptprofileimage'.$ivd.''.$gringo.'");
if(mobileboy == 1){ proimimfox.style.marginLeft="3.1em"; }else{
  proimimfox.style.marginLeft="3.5em";}
var prvv = document.getElementById("previewimage'.$ivd.''.$gringo.'");
prvv.style.display="none";
if(mobileboy == 1){var per=65;}else{ var per=65; }
var hcap= per/ 100 * ih;

if( infoh > hcap   ){ 
  document.getElementById("holdrealwidth'.$ivd.''.$gringo.'").value=iw;
   document.getElementById("holdrealheight4txt'.$ivd.''.$gringo.'").value=ih;
  document.getElementById("checkzoom'.$ivd.''.$gringo.'").value=1;
var sizfixvar = document.getElementById("sizefixer'.$ivd.''.$gringo.'");
 var fixw = parseInt(window.getComputedStyle(sizfixvar,null).width);
 var fixh = parseInt(window.getComputedStyle(sizfixvar,null).height);

      imagevarx.style.height=+fixh+"px"; 
      imagevarx.style.width="auto"; 

      imagevar.style.height=+fixh+"px"; 
      imagevar.style.width="auto"; 

  if(mobileboy == "slickslidersolvedthisbutleavingcodestill" ){
casevar.style.paddingLeft="20px";
   casevar.style.paddingRight="20px";
      casevar.style.left="-10px";}

 if(mobileboy == "0" ){
    var postin = document.getElementById("postinfo'.$ivd.''.$gringo.'");
    postin.style.borderRadius="0px";
    imagevar.style.borderRadius="0px";}    }
  if(mobileboy == 0){
var postin = document.getElementById("postinfo'.$ivd.''.$gringo.'");
iwn = iv'.$ivd.''.$gringo.';
  iwin = iwn- 0.5;
 postin.style.width=+iwin+"px"; 
 postin.style.left="10px";
 postin.style.bottom="9px";}   
 var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="visible";
 $("#namebutton'.$ivd.''.$gringo.'").show(); 
playvar.style.visibility="visible";  
 expandvar.style.visibility="visible";  
var infoccvar = document.getElementById("postinfo'.$ivd.''.$gringo.'");
      infoccvar.style.visibility="visible";
 document.getElementById("checkinfostate'.$ivd.''.$gringo.'").value=1;
var gtc = document.getElementById("gotochecker'.$ivd.''.$gringo.'");
var gtcheight = parseInt(window.getComputedStyle(gtc,null).height);
if(a == 0) {
if(ih > gtcheight) {
 $("html,body").animate({
  scrollTop:$("#gotolong'.$ivd.''.$gringo.'").offset().top},"fast");
}else{

if(mobileboy == 1){
  $("html,body").animate({
  scrollTop:$("#gotom'.$ivd.''.$gringo.'").offset().top},"fast");}
  else{
 $("html,body").animate({
  scrollTop:$("#goto'.$ivd.''.$gringo.'").offset().top},"fast");}

}}


}else{


var cctyp = $("#type"+idex+"'.$ivd.''.$gringo.'").val();

  var lay = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
   if(lay == 0){
    $("#emotion1'.$ivd.''.$gringo.'").hide(); 
     $("#emotion2'.$ivd.''.$gringo.'").hide(); 
      $("#emotion3'.$ivd.''.$gringo.'").hide(); 
       $("#emotion4'.$ivd.''.$gringo.'").hide();
profpadsmall'.$ivd.''.$pagenum.''.$gringo.'();
if(cctyp==0 || cctyp==100){
profileimageclock'.$ivd.''.$gringo.'();}
else{ var proims = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proims.style.visibility="visible"; 
$("#image"+idex+"inside'.$ivd.''.$gringo.'").removeClass("blurplaceholder"); }  
  $("#profileimage'.$ivd.''.$gringo.'").appendTo("#pushprofileimage'.$ivd.''.$gringo.'");
  if(mobileboy == 1){ proimimfox.style.marginLeft="2.6em"; }else{
  proimimfox.style.marginLeft="3em";}
    var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="hidden";
    $("#namebutton'.$ivd.''.$gringo.'").hide();   }





var rollerx1=document.getElementById("emotion1'.$ivd.''.$gringo.'");
      rollerx1.style.transition="all 4s ease"; 
    rollerx1.style.transform="rotate(-360deg)";
var rollerx2=document.getElementById("emotion2'.$ivd.''.$gringo.'");
      rollerx2.style.transition="all 4s ease"; 
    rollerx2.style.transform="rotate(-360deg)";
var rollerx3=document.getElementById("emotion3'.$ivd.''.$gringo.'");
      rollerx3.style.transition="all 4s ease"; 
    rollerx3.style.transform="rotate(-360deg)";
var rollerx4=document.getElementById("emotion4'.$ivd.''.$gringo.'");
      rollerx4.style.transition="all 4s ease"; 
    rollerx4.style.transform="rotate(-360deg)";




if(cctyp==0 || cctyp==100){}
else{ $("#image"+idex+"inside'.$ivd.''.$gringo.'").removeClass("blurplaceholder"); }  



  var innum="'.$totalsets.'";
if(innum > 5){
var pstnu = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnu.style.visibility="visible";}


  var totsetsx'.$ivd.''.$gringo.' = $("#totalallsets'.$ivd.''.$gringo.'").val();
if(totsetsx'.$ivd.''.$gringo.' == 1){}else{
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
  if(b == 1){ startslideplay'.$ivd.''.$gringo.'();}
  else{startslide'.$ivd.''.$gringo.'(); }
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="block";}



  document.getElementById("checkinfostate'.$ivd.''.$gringo.'").value=0;
  var prvv = document.getElementById("previewimage'.$ivd.''.$gringo.'");
  prvv.style.display="block";
  var checkzoomfate = $("#checkzoom'.$ivd.''.$gringo.'").val();
var getwidthdata = $("#holdrealwidth'.$ivd.''.$gringo.'").val();

if(checkzoomfate == 1){ 

if(cctyp==0 || cctyp==100){
imagevarx.style.width=+getwidthdata+"px";
 imagevarx.style.height="auto"; 
imagevar.style.width=+getwidthdata+"px";
 imagevar.style.height="auto";}
 else{
var getheightdata = $("#holdrealheight4txt'.$ivd.''.$gringo.'").val();
  imagevarx.style.width=+getwidthdata+"px";
 imagevarx.style.height="auto"; 
 imagevar.style.height=+getheightdata+"px"; 
 imagevar.style.width="auto"; }
if(mobileboy == 0){
       imagevar.style.borderRadius="6px";}  }



    expandvar.style.visibility="hidden"; 
     if(b == 0){ playvar.style.visibility="hidden"; }
     else{ }  
var infoccvar = document.getElementById("postinfo'.$ivd.''.$gringo.'");
      infoccvar.style.visibility="hidden";  }


     
  $("#superpostdatago'.$pagenum.''.$gringo.'").imagesLoaded( function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'" });});



var waypoint'.$ivd.''.$pagenum.''.$gringo.' = new Waypoint({
element: document.getElementById("image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'"),
  handler: function() {
   popupinfo'.$ivd.''.$pagenum.''.$gringo.'();
  },
   offset:"15%" })   }  }


   }  }













function processzero'.$ivd.''.$pagenum.''.$gringo.'(){

  var innumx="'.$totalsets.'";
if(innumx == 1){
var pfi = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
pfi.style.visibility="hidden";}

var chkfirstx="'.$sim1ty.'";
if( chkfirstx ==0 || chkfirstx==100 ){}else{
arrowtxttimepop'.$ivd.''.$gringo.'(); }

  if(mobileboy == 1){
    var casevarx = document.getElementById("datauniverse'.$ivd.''.$gringo.'");
  casevarx.style.padding="0px";
var casevar = document.getElementById("datacase'.$ivd.''.$gringo.'");
  casevar.style.padding="0px";
  casevar.style.paddingTop="0px";
   casevar.style.paddingBottom="0px";}else{

   $("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
  $("#superpostdatago'.$pagenum.''.$gringo.'").imagesLoaded(function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"
    });});    });    
   }

      }







function processultra'.$ivd.''.$pagenum.''.$gringo.'(){


padmobile'.$ivd.''.$pagenum.''.$gringo.'();


  var appp = document.getElementById("acceptprofileimage'.$ivd.''.$gringo.'");
var ahh = parseInt(window.getComputedStyle(appp,null).height);
 appp.style.height=+ahh+"px";
 profpadsmall'.$ivd.''.$pagenum.''.$gringo.'();
$("#profileimage'.$ivd.''.$gringo.'").appendTo("#pushprofileimage'.$ivd.''.$gringo.'");




 var capp = document.getElementById("caption'.$ivd.''.$gringo.'");
  var topp = document.getElementById("topic'.$ivd.''.$gringo.'");
  if(mobileboy == 1){
capp.style.fontSize="115%";
topp.style.fontSize="97%";
    }else{ 
    capp.style.fontSize="130%";
topp.style.fontSize="110%"; }

var dinfostate = $("#displayinfostate'.$pagenum.''.$gringo.'").val();
if(dinfostate == 0){ 
    $(".scrollpoptoggleoff").show();
     $(".scrollpoptoggleon").hide(); }
else{  $(".scrollpoptoggleoff").hide();
     $(".scrollpoptoggleon").show();}


 var waypoint'.$ivd.''.$pagenum.''.$gringo.' = new Waypoint({
element: document.getElementById("image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'"),
  handler: function() {
   popupinfo'.$ivd.''.$pagenum.''.$gringo.'();
  },offset:"15%" })  

   


    $(document).ready(function(){



var innum="'.$totalsets.'";
if(innum > 5){
var pstnu = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnu.style.visibility="visible";}




var chkfirstx="'.$sim1ty.'";
if( chkfirstx ==0 || chkfirstx==100 ){}else{
var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
if(mobileboy == 1 ){var imagevarxx = document.getElementById("image1'.$ivd.''.$gringo.'");
  imagevarxx.style.borderRadius="0px";}  }




var myfirstim'.$ivd.''.$gringo.'= $("#heightstate'.$ivd.''.$gringo.'").val();
var myimagevar'.$ivd.''.$gringo.'= document.getElementById("image"+myfirstim'.$ivd.''.$gringo.'+"'.$ivd.''.$gringo.'");
var usedheight'.$ivd.''.$gringo.'= parseInt(window.getComputedStyle(myimagevar'.$ivd.''.$gringo.',null).height) + 1;
var txtheightadd= document.getElementById("textaddedhcheck'.$ivd.''.$gringo.'");
var plusheight= parseInt(window.getComputedStyle(txtheightadd,null).height);
var canout = document.querySelector("#datacase'.$ivd.''.$gringo.'");


 var checktxt1'.$ivd.''.$gringo.' = "'.$sim1ty.'";
 if( checktxt1'.$ivd.''.$gringo.' > 0){ 
  var intxt1'.$ivd.''.$gringo.'= document.getElementById("image1'.$ivd.''.$gringo.'");
      intxt1'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
var cankk1 = document.querySelector("#image1inside'.$ivd.''.$gringo.'");
   var cankkb1 = document.querySelector("#image1'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin1 = parseInt(window.getComputedStyle(cankk1,null).height);  
   var  checkin2 = parseInt(window.getComputedStyle(cankkb1,null).height); 
if(checkin1 + plusheight > checkin2){ cankkb1.style.display="block"; cankkb1.style.alignItems=" "; 
cankk1.style.paddingBottom="50px";cankk1.style.paddingTop="60px";cankk1.style.marginTop="0px";}}
var checktxt2'.$ivd.''.$gringo.' = "'.$sim2ty.'";
 if( checktxt2'.$ivd.''.$gringo.' > 0){ 
  var intxt2'.$ivd.''.$gringo.'= document.getElementById("image2'.$ivd.''.$gringo.'");
      intxt2'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px";
       var cankk2 = document.querySelector("#image2inside'.$ivd.''.$gringo.'");
   var cankkb2 = document.querySelector("#image2'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin2 = parseInt(window.getComputedStyle(cankk2,null).height);  
if(checkin2 + plusheight > checkout){ cankkb2.style.display="block"; cankkb2.style.alignItems=" "; cankk2.style.paddingBottom="50px";cankk2.style.paddingTop="60px";cankk2.style.marginTop="0px";}}
      var checktxt3'.$ivd.''.$gringo.' = "'.$sim3ty.'";
 if( checktxt3'.$ivd.''.$gringo.' > 0){ 
  var intxt3'.$ivd.''.$gringo.'= document.getElementById("image3'.$ivd.''.$gringo.'");
      intxt3'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk3 = document.querySelector("#image3inside'.$ivd.''.$gringo.'");
   var cankkb3 = document.querySelector("#image3'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin3 = parseInt(window.getComputedStyle(cankk3,null).height);  
if(checkin3 + plusheight > checkout){ cankkb3.style.display="block"; cankkb3.style.alignItems=" "; cankk3.style.paddingBottom="50px";cankk3.style.paddingTop="60px";cankk3.style.marginTop="0px";}}
      var checktxt4'.$ivd.''.$gringo.' = "'.$sim4ty.'";
 if( checktxt4'.$ivd.''.$gringo.' > 0){ 
  var intxt4'.$ivd.''.$gringo.'= document.getElementById("image4'.$ivd.''.$gringo.'");
      intxt4'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk4 = document.querySelector("#image4inside'.$ivd.''.$gringo.'");
   var cankkb4 = document.querySelector("#image4'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin4 = parseInt(window.getComputedStyle(cankk4,null).height);  
if(checkin4 + plusheight > checkout){ cankkb4.style.display="block"; cankkb4.style.alignItems=" "; cankk4.style.paddingBottom="50px";cankk4.style.paddingTop="60px";cankk4.style.marginTop="0px";}}
      var checktxt5'.$ivd.''.$gringo.' = "'.$sim5ty.'";
 if( checktxt5'.$ivd.''.$gringo.' > 0){ 
  var intxt5'.$ivd.''.$gringo.'= document.getElementById("image5'.$ivd.''.$gringo.'");
      intxt5'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk5 = document.querySelector("#image5inside'.$ivd.''.$gringo.'");
   var cankkb5 = document.querySelector("#image5'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin5 = parseInt(window.getComputedStyle(cankk5,null).height);  
if(checkin5 + plusheight  > checkout){ cankkb5.style.display="block"; cankkb5.style.alignItems=" "; cankk5.style.paddingBottom="50px";cankk5.style.paddingTop="60px";cankk5.style.marginTop="0px";}}
      var checktxt6'.$ivd.''.$gringo.' = "'.$sim6ty.'";
 if( checktxt6'.$ivd.''.$gringo.' > 0){ 
  var intxt6'.$ivd.''.$gringo.'= document.getElementById("image6'.$ivd.''.$gringo.'");
      intxt6'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk6 = document.querySelector("#image6inside'.$ivd.''.$gringo.'");
   var cankkb6 = document.querySelector("#image6'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin6 = parseInt(window.getComputedStyle(cankk6,null).height);  
if(checkin6 + plusheight > checkout){ cankkb6.style.display="block"; cankkb6.style.alignItems=" "; cankk6.style.paddingBottom="50px";cankk6.style.paddingTop="60px";cankk6.style.marginTop="0px";}}
      var checktxt7'.$ivd.''.$gringo.' = "'.$sim7ty.'";
 if( checktxt7'.$ivd.''.$gringo.' > 0){ 
  var intxt7'.$ivd.''.$gringo.'= document.getElementById("image7'.$ivd.''.$gringo.'");
      intxt7'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk7 = document.querySelector("#image7inside'.$ivd.''.$gringo.'");
   var cankkb7 = document.querySelector("#image7'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin7 = parseInt(window.getComputedStyle(cankk7,null).height);  
if(checkin7 + plusheight > checkout){ cankkb7.style.display="block"; cankkb7.style.alignItems=" "; cankk7.style.paddingBottom="50px";cankk7.style.paddingTop="60px";cankk7.style.marginTop="0px";}}
      var checktxt8'.$ivd.''.$gringo.' = "'.$sim8ty.'";
 if( checktxt8'.$ivd.''.$gringo.' > 0){ 
  var intxt8'.$ivd.''.$gringo.'= document.getElementById("image8'.$ivd.''.$gringo.'");
      intxt8'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk8 = document.querySelector("#image8inside'.$ivd.''.$gringo.'");
   var cankkb8 = document.querySelector("#image8'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin8 = parseInt(window.getComputedStyle(cankk8,null).height);  
if(checkin8 + plusheight > checkout){ cankkb8.style.display="block"; cankkb8.style.alignItems=" "; cankk8.style.paddingBottom="50px";cankk8.style.paddingTop="60px";cankk8.style.marginTop="0px";}}
      var checktxt9'.$ivd.''.$gringo.' = "'.$sim9ty.'";
 if( checktxt9'.$ivd.''.$gringo.' > 0){ 
  var intxt9'.$ivd.''.$gringo.'= document.getElementById("image9'.$ivd.''.$gringo.'");
      intxt9'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk9 = document.querySelector("#image9inside'.$ivd.''.$gringo.'");
   var cankkb9 = document.querySelector("#image9'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin9 = parseInt(window.getComputedStyle(cankk9,null).height);  
if(checkin9 + plusheight > checkout){ cankkb9.style.display="block"; cankkb9.style.alignItems=" "; cankk9.style.paddingBottom="50px";cankk9.style.paddingTop="60px";cankk9.style.marginTop="0px";}}
      var checktxt10'.$ivd.''.$gringo.' = "'.$sim10ty.'";
 if( checktxt10'.$ivd.''.$gringo.' > 0){ 
  var intxt10'.$ivd.''.$gringo.'= document.getElementById("image10'.$ivd.''.$gringo.'");
      intxt10'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk10 = document.querySelector("#image10inside'.$ivd.''.$gringo.'");
   var cankkb10 = document.querySelector("#image10'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin10 = parseInt(window.getComputedStyle(cankk10,null).height);  
if(checkin10 + plusheight > checkout){ cankkb10.style.display="block"; cankkb10.style.alignItems=" "; cankk10.style.paddingBottom="50px";cankk10.style.paddingTop="60px";cankk10.style.marginTop="0px";}}
      var checktxt11'.$ivd.''.$gringo.' = "'.$sim11ty.'";
 if( checktxt11'.$ivd.''.$gringo.' > 0){ 
  var intxt11'.$ivd.''.$gringo.'= document.getElementById("image11'.$ivd.''.$gringo.'");
      intxt11'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk11 = document.querySelector("#image11inside'.$ivd.''.$gringo.'");
   var cankkb11 = document.querySelector("#image11'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin11 = parseInt(window.getComputedStyle(cankk11,null).height);  
if(checkin11 + plusheight > checkout){ cankkb11.style.display="block"; cankkb11.style.alignItems=" "; cankk11.style.paddingBottom="50px";cankk11.style.paddingTop="60px";cankk11.style.marginTop="0px";}}
      var checktxt12'.$ivd.''.$gringo.' = "'.$sim12ty.'";
 if( checktxt12'.$ivd.''.$gringo.' > 0){ 
  var intxt12'.$ivd.''.$gringo.'= document.getElementById("image12'.$ivd.''.$gringo.'");
      intxt12'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk12 = document.querySelector("#image12inside'.$ivd.''.$gringo.'");
   var cankkb12 = document.querySelector("#image12'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin12 = parseInt(window.getComputedStyle(cankk12,null).height);  
if(checkin12 + plusheight > checkout){ cankkb12.style.display="block"; cankkb12.style.alignItems=" "; cankk12.style.paddingBottom="50px";cankk12.style.paddingTop="60px";cankk12.style.marginTop="0px";}}
      var checktxt13'.$ivd.''.$gringo.' = "'.$sim13ty.'";
 if( checktxt13'.$ivd.''.$gringo.' > 0){ 
  var intxt13'.$ivd.''.$gringo.'= document.getElementById("image13'.$ivd.''.$gringo.'");
      intxt13'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk13 = document.querySelector("#image13inside'.$ivd.''.$gringo.'");
   var cankkb13 = document.querySelector("#image13'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin13 = parseInt(window.getComputedStyle(cankk13,null).height);  
if(checkin13 + plusheight > checkout){ cankkb13.style.display="block"; cankkb13.style.alignItems=" "; cankk13.style.paddingBottom="50px";cankk13.style.paddingTop="60px";cankk13.style.marginTop="0px";}}
      var checktxt14'.$ivd.''.$gringo.' = "'.$sim14ty.'";
 if( checktxt14'.$ivd.''.$gringo.' > 0){ 
  var intxt14'.$ivd.''.$gringo.'= document.getElementById("image14'.$ivd.''.$gringo.'");
      intxt14'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk14 = document.querySelector("#image14inside'.$ivd.''.$gringo.'");
   var cankkb14 = document.querySelector("#image14'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin14 = parseInt(window.getComputedStyle(cankk14,null).height);  
if(checkin14 + plusheight > checkout){ cankkb14.style.display="block"; cankkb14.style.alignItems=" "; cankk14.style.paddingBottom="50px";cankk14.style.paddingTop="60px";cankk14.style.marginTop="0px";}}
      var checktxt15'.$ivd.''.$gringo.' = "'.$sim15ty.'";
 if( checktxt15'.$ivd.''.$gringo.' > 0){ 
  var intxt15'.$ivd.''.$gringo.'= document.getElementById("image15'.$ivd.''.$gringo.'");
      intxt15'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk15 = document.querySelector("#image15inside'.$ivd.''.$gringo.'");
   var cankkb15 = document.querySelector("#image15'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin15 = parseInt(window.getComputedStyle(cankk15,null).height);  
if(checkin15 + plusheight > checkout){ cankkb15.style.display="block"; cankkb15.style.alignItems=" "; cankk15.style.paddingBottom="50px";cankk15.style.paddingTop="60px";cankk15.style.marginTop="0px";}}
      var checktxt16'.$ivd.''.$gringo.' = "'.$sim16ty.'";
 if( checktxt16'.$ivd.''.$gringo.' > 0){ 
  var intxt16'.$ivd.''.$gringo.'= document.getElementById("image16'.$ivd.''.$gringo.'");
      intxt16'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk16 = document.querySelector("#image16inside'.$ivd.''.$gringo.'");
   var cankkb16 = document.querySelector("#image16'.$ivd.''.$gringo.'");
var checkout = parseInt(window.getComputedStyle(canout,null).height);
  var  checkin16 = parseInt(window.getComputedStyle(cankk16,null).height);  
if(checkin16 + plusheight > checkout){ cankkb16.style.display="block"; cankkb16.style.alignItems=" "; cankk16.style.paddingBottom="50px";cankk16.style.paddingTop="60px";cankk16.style.marginTop="0px";}}




var totsets'.$ivd.''.$gringo.' = $("#totalallsets'.$ivd.''.$gringo.'").val();
if(totsets'.$ivd.''.$gringo.' == 1){
startsingle'.$ivd.''.$gringo.'();
}else{
  $("#playtypein'.$ivd.''.$gringo.'").show();
  var arrx = document.getElementById("arrows'.$ivd.''.$gringo.'");
   arrx.style.display="block";
startslide'.$ivd.''.$gringo.'();}


var gtcxx = document.getElementById("gotochecker'.$ivd.''.$gringo.'");
var gtcheightxxk = parseInt(window.getComputedStyle(gtcxx,null).height);
if(usedheight'.$ivd.''.$gringo.' > gtcheightxxk){
 document.getElementById("adjustarrowlongpost'.$ivd.''.$gringo.'").value=1;
if( chkfirstx ==0 || chkfirstx==100 ){}else{
  $("#arrows'.$ivd.''.$gringo.'").appendTo("#arrowsout'.$ivd.''.$gringo.'");
arrowtxttimepop'.$ivd.''.$gringo.'(); }     }



var last ="'.$countfinished.'";



     if(last == 1000 ){  

setTimeout(function(){

swkkint'.$pagenum.''.$gringo.'();

      },1000);

        }   




 


});    }
















var txtonly'.$ivd.''.$gringo.' ="'.$textonly.'";

if(txtonly'.$ivd.''.$gringo.' == 1){ 
var txtheig = document.getElementById("txtonlyheight'.$ivd.''.$gringo.'");
 var txtheight = parseInt(window.getComputedStyle(txtheig,null).height);
var tintxt1'.$ivd.''.$gringo.'= document.getElementById("image1'.$ivd.''.$gringo.'");
      tintxt1'.$ivd.''.$gringo.'.style.height=+txtheight+"px"; 
  processzero'.$ivd.''.$pagenum.''.$gringo.'();
      processultra'.$ivd.''.$pagenum.''.$gringo.'();}


      else{

 $("#thumb"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'").imagesLoaded(function(){ 
  if(mobileboy == 1){
  var thumbimagevar = document.getElementById("thumb"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");
 thumbimagevar.style.borderRadius="0px";}
  processzero'.$ivd.''.$pagenum.''.$gringo.'();});
  
$("#image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'").imagesLoaded(function(){
setTimeout(function(){
    var thumbvar = document.getElementById("thumb"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");
   var imagevar = document.getElementById("image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");
   thumbvar.style.position="absolute";
   thumbvar.style.visibility="hidden";
  imagevar.style.position="relative";
   imagevar.style.visibility="visible";
processultra'.$ivd.''.$pagenum.''.$gringo.'();


var last ="'.$countfinished.'";
  if(last == 1 ){ 
$("#superpostdatago'.$pagenum.''.$gringo.'").imagesLoaded( function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'" });}); }


},4000);   });          }










$("#datacase'.$ivd.''.$gringo.'").on("afterChange", function(event, slick, currentSlide, nextSlide){
  var dataid = $(slick.$slides[currentSlide]).data("index");  
  document.getElementById("activeindex'.$ivd.''.$gringo.'").value=dataid;
  var ppnum = document.getElementById("postnumberactive'.$ivd.''.$gringo.'");
  ppnum.innerHTML=""+dataid+"";

var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
var allpx = $("#allowpauseimage'.$ivd.''.$gringo.'").val(); 
if(allow == 1  &&   allpx == 0){
  $("#slidebar'.$ivd.''.$gringo.'").hide();
$("#activatebar'.$ivd.''.$gringo.'").addClass("stopslidebar");
  $("#activatebar'.$ivd.''.$gringo.'").removeClass("startslidebar");
  $("#slidebar'.$ivd.''.$gringo.'").show();
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("stopslidebar");
  $("#activatebar'.$ivd.''.$gringo.'").addClass("startslidebar");}

 if(mobileboy == 1){
var imagevarpro = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarpro.style.borderRadius="0px";}

var arrcleartx = $("#checkarrtxtimoutx'.$ivd.''.$gringo.'").val();
if(arrcleartx == 1){ clearTimeout(arrtoptimeoutx'.$ivd.''.$gringo.'); }

var arrcleart = $("#checkarrtxtimout'.$ivd.''.$gringo.'").val();
if(arrcleart == 1){ clearTimeout(arrtoptimeout'.$ivd.''.$gringo.'); }

var lay = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();

 var typx = $("#type"+dataid+"'.$ivd.''.$gringo.'").val();

if(typx == 0 ||  typx == 100){

 var innum="'.$totalsets.'";
if(innum > 5){
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="visible";
var checkpnum = $("#checkpostnumbertimout'.$ivd.''.$gringo.'").val();
if(checkpnum == 1){  clearTimeout(postnuumtimeout'.$ivd.''.$gringo.');  }
document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=1;
postnuumtimeout'.$ivd.''.$gringo.' = setTimeout(function(){
 document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=0;
var pstnua = document.getElementById("postnumber'.$ivd.''.$gringo.'");
  pstnua.style.visibility="hidden";},3600); }


  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
var arrzw = document.getElementById("arrows'.$ivd.''.$gringo.'");
     arrzw.style.opacity="0.9";
     var adjlongp = $("#adjustarrowlongpost'.$ivd.''.$gringo.'").val();
       if(adjlongp == 1){arrzw.style.top="42.5%";}
    $("#arrows'.$ivd.''.$gringo.'").appendTo("#arrowsout'.$ivd.''.$gringo.'");
if(lay == 0){
    var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
  proim.style.visibility="hidden";
      var checktimox = $("#checkproimtimout'.$ivd.''.$gringo.'").val();
if(checktimox == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); 
profileimageclock'.$ivd.''.$gringo.'(); }else if(checktimox == 0){
 profileimageclock'.$ivd.''.$gringo.'(); }else{}  
if(mobileboy == 0){ var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px"; }     }
 else{
  var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="0px";}

}else{

var innum="'.$totalsets.'";
if(innum > 5){
var checkpnum = $("#checkpostnumbertimout'.$ivd.''.$gringo.'").val();
if(checkpnum == 1){ clearTimeout(postnuumtimeout'.$ivd.''.$gringo.');
document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=0; }
var pstnub = document.getElementById("postnumber'.$ivd.''.$gringo.'");
pstnub.style.visibility="visible";}

  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
  var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
  proim.style.visibility="visible";
  var arrzw = document.getElementById("arrows'.$ivd.''.$gringo.'");
     arrzw.style.opacity="0.7";
      var asx = $("#allowshortimage'.$ivd.''.$gringo.'").val();
    if(asx == 1){ 
    arrowtxttimepop'.$ivd.''.$gringo.'();
       }else{arrowtxttime'.$ivd.''.$gringo.'();} 
        if(lay == 0){
if(mobileboy == 0){ var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px"; } 
        } else{
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
  var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="0px";}

   }

});












var last ="'.$countfinished.'";
var sll ="'.$scroll.'";
var jum ="'.$jump.'";

     if(last == 1 ){  

 
if(jum !=0 ){ 


$(document).ready(function(){
  setTimeout(function(){
if(mobileboy == 1){
 $("html,body").animate({scrollTop:$("#gotom"+jum+"'.$gringo.'").offset().top},"fast");}
 else{
  $("html,body").animate({scrollTop:$("#goto"+jum+"'.$gringo.'").offset().top},"fast");}   },1000);})

}

else if(sll ==1){
$(document).ready(function(){
setTimeout(function(){
 $("html,body").animate({
scrollTop:$("#supersort").offset().top},"fast"); },1000);}) }

else{ }           }











  function switchlayout'.$ivd.''.$pagenum.''.$gringo.'(){


var checktimo = $("#checkproimtimout'.$ivd.''.$gringo.'").val();
if(checktimo == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); }
var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="visible";
var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
var chkxrr = "'.$totalsets.'";
  var xrr = document.getElementById("arrowsshift'.$ivd.''.$gringo.'");
   var pnn = document.getElementById("postnumber'.$ivd.''.$gringo.'");
    var abb = document.getElementById("arrows'.$ivd.''.$gringo.'");
    var empop = document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'");
    var clicknn = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
     var ivar = document.getElementById("image"+idex+"'.$ivd.''.$gringo.'");
      var mmr = document.getElementById("more'.$ivd.''.$gringo.'");


    var lay = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();

   if(lay == 0){

  document.getElementById("layout'.$ivd.''.$pagenum.''.$gringo.'").value=1;


 var ttz = $("#checkinfostate'.$ivd.''.$gringo.'").val();
 if(ttz == 0){  profpadlarge'.$ivd.''.$pagenum.''.$gringo.'();
 $("#profileimage'.$ivd.''.$gringo.'").appendTo("#acceptprofileimage'.$ivd.''.$gringo.'");    }

  document.getElementById("checkinfostate'.$ivd.''.$gringo.'").value=1;

    zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);

  th="'.$_SESSION['theme'].'";
  if(th==0){$(".hightext").removeClass("hashtag");}else{
    $(".hightext").removeClass("hashtagdark");}
      $(".hightext").addClass("underxx");
  var ppfi = document.getElementById("profileimage'.$ivd.''.$gringo.'");
     ppfi.style.paddingBottom="3px";
$("#dataspacetop'.$ivd.''.$gringo.'").show(); 
$("#dataspacebottom'.$ivd.''.$gringo.'").show();
$("#collecttopdata'.$ivd.''.$gringo.'").show(); 
$("#collectbottomdata'.$ivd.''.$gringo.'").show();
 $("#topdata'.$ivd.''.$gringo.'").appendTo("#collecttopdata'.$ivd.''.$gringo.'");
   $("#bottomdata'.$ivd.''.$gringo.'").appendTo("#collectbottomdata'.$ivd.''.$gringo.'"); 
   var proimimfox = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
if(mobileboy == 1){ proimimfox.style.marginLeft="3.1em"; }else{
  proimimfox.style.marginLeft="3.5em";}


    mmr.style.marginTop="1.6px";  
  $("#compressa'.$ivd.''.$gringo.'").hide();
   $("#posttypes'.$ivd.''.$gringo.'").hide(); 
   $("#previewimage'.$ivd.''.$gringo.'").hide(); 
    $("#zoomer'.$ivd.''.$gringo.'").hide(); 
     $("#playtypeinsx'.$ivd.''.$gringo.'").show();
     

    if(mobileboy == 1){ 
       if(chkxrr > 5){ xrr.style.top="7.25em";}else{xrr.style.top="5.95em";}
         pnn.style.top="4.8em"; 
          abb.style.top="39%";
           empop.style.top="6.5em";
         clicknn.style.marginTop="6.15em";  
             }else{  
      if(chkxrr > 5){ xrr.style.top="9.5em";  }else{ xrr.style.top="8em";} 
      pnn.style.top="6.6em";
      abb.style.top="39%"; 
      empop.style.top="8em";
    clicknn.style.marginTop="7.85em";
    ivar.style.borderRadius="0px"; }

   
     clicknn.style.display="none";

     var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
      pfun.style.visibility="visible";
    $("#namebutton'.$ivd.''.$gringo.'").show();

     document.getElementById("zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").value=1;
  


   }else{ 

    document.getElementById("layout'.$ivd.''.$pagenum.''.$gringo.'").value=0;

    th="'.$_SESSION['theme'].'";
     $(".hightext").removeClass("underxx");
  if(th==0){$(".hightext").addClass("hashtag");}else{
    $(".hightext").addClass("hashtagdark");}
    var ppfi = document.getElementById("profileimage'.$ivd.''.$gringo.'");
     ppfi.style.paddingBottom="0px";

     $("#dataspacetop'.$ivd.''.$gringo.'").hide(); 
$("#dataspacebottom'.$ivd.''.$gringo.'").hide();
$("#collecttopdata'.$ivd.''.$gringo.'").hide(); 
$("#collectbottomdata'.$ivd.''.$gringo.'").hide();
 $("#topdata'.$ivd.''.$gringo.'").appendTo("#holdtopdata'.$ivd.''.$gringo.'");
   $("#bottomdata'.$ivd.''.$gringo.'").appendTo("#holdbottomdata'.$ivd.''.$gringo.'"); 
   var proimimfox = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
if(mobileboy == 1){ proimimfox.style.marginLeft="2.6em"; }else{
  proimimfox.style.marginLeft="3.1em";}

    mmr.style.marginTop="0px";  
  $("#compressa'.$ivd.''.$gringo.'").show();
   $("#posttypes'.$ivd.''.$gringo.'").show(); 
   $("#previewimage'.$ivd.''.$gringo.'").show(); 
   $("#playtypeinsx'.$ivd.''.$gringo.'").hide();
      $("#pausetypeinsx'.$ivd.''.$gringo.'").hide();
    $("#zoomer'.$ivd.''.$gringo.'").show(); 
     
   
   var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
     if(allow == 1){  endplay'.$ivd.''.$pagenum.''.$gringo.'(); 
     $("#playtypeinsx'.$ivd.''.$gringo.'").hide();
      $("#pausetypeinsx'.$ivd.''.$gringo.'").hide(); }

    if(mobileboy == 1){ 
       if(chkxrr > 5){ xrr.style.top="2em";}else{xrr.style.top="0.7em";}
         pnn.style.top="-0.5em"; 
          abb.style.top="42.5%";
           empop.style.top="1em";
         clicknn.style.marginTop="0.9em";  
             }else{  
      if(chkxrr > 5){ xrr.style.top="3em";  }else{ xrr.style.top="1.5em";} 
      pnn.style.top="0.2em";
      abb.style.top="42.5%"; 
      empop.style.top="1em";
    clicknn.style.marginTop="1.4em";
      ivar.style.borderRadius="6px";}

var cctyp = $("#type"+idex+"'.$ivd.''.$gringo.'").val();
     $("#emotion1'.$ivd.''.$gringo.'").hide(); 
     $("#emotion2'.$ivd.''.$gringo.'").hide(); 
      $("#emotion3'.$ivd.''.$gringo.'").hide(); 
       $("#emotion4'.$ivd.''.$gringo.'").hide();
profpadsmall'.$ivd.''.$pagenum.''.$gringo.'();
if(cctyp==0 || cctyp==100){
   var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
profileimageclock'.$ivd.''.$gringo.'();}
else{ 
   var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
  var proims = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proims.style.visibility="visible";  }  
  $("#profileimage'.$ivd.''.$gringo.'").appendTo("#pushprofileimage'.$ivd.''.$gringo.'");
  if(mobileboy == 1){ proimimfox.style.marginLeft="2.6em"; }else{
  proimimfox.style.marginLeft="3em";}
    var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="hidden";
    $("#namebutton'.$ivd.''.$gringo.'").hide(); 

    document.getElementById("zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").value=0;


     $("#superpostdatago'.$pagenum.''.$gringo.'").imagesLoaded( function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"});});  

   } 



        }









function zoomclick'.$ivd.''.$pagenum.''.$gringo.'(){   alert("zoom");  }





  </script>';




                     
                   

?>                          
