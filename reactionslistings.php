
<?php  
require('dataco.php');
require('phpopen.php'); 
include('exit.php');
include('theme.php');




  $nivd=$_POST['postid'];
  $gringo=$_POST['gringo'];
   $total=$_POST['tot'];
    $layout=$_POST['lay'];
    $reactcolor=$_POST['rcolor'];
     $overflowbody=$_POST['body'];
     $com=$_POST['com'];
  


  $mem=$_POST['member'];
    $type=$_POST['typex'];
      $pagenum=$_POST['page'];
      $jump=$_POST['jump'];
       $jumplock=$_POST['jumplock'];

         $pagenumin=$_POST['pagein'];
      $jumpin=$_POST['jumpin'];
       $jumplockin=$_POST['jumplockin'];





 



       ?>









<style type="text/css">
  .transparentbutton{ opacity:0 }
  .transparentbutton:hover{ opacity:1 }
</style>





<input  id="activelayout"  value="<?php echo $layout; ?>"  hidden>
<input  id="finishedreact"  value="0"  hidden>
<input  id="finishedfullview"  value="0"  hidden>
<input  id="countall"  value="<?php echo $total; ?>"  hidden>
<input  id="textareadata"  value=""  hidden>
<input  id="totalcomment"  value="<?php echo $com; ?>"  hidden>




<style type="text/css">
  .superbuttonshoverlucent{border: solid rgba(225,225,225,0.0);border-bottom: solid rgba(225,225,225,0.0);
  border-radius:0px;padding:10px;padding-bottom:5px;}
.superbuttonshoverlucent:hover{border: solid rgba(225,225,225,0.0);border-bottom: solid <?php echo $comtheme3;?>;
  border-radius:3.5px;padding:10px;padding-bottom:5px; }
</style>




<div class="col-xs-12 " id="fullviewarrowsout" style="padding:0px;position:fixed;z-index:5;top:0em;height:0px;margin:auto;text-align:center;"><div class="col-xs-2 col-sm-1 zuzax superbuttonshoverlucent" onclick="javascript:closereact();"  style="font-size:170%;float:left;text-align:center;margin-left:4px;"><span  class="juju zuperxy"  style="color:#ffffff">   <i class="fas fa-arrow-left" aria-hidden="true"></i></span> 
</div> </div>


<div  class="col-xs-12"  id="reactslidebarx" style="display:none;padding:0px;position:fixed;z-index:5;top:0em;height:0px;margin:auto;text-align:center;">
<div  class="col-xs-12  col-sm-6"  style="background-color:#cccccc;height:5px;padding:0px;display:block;border-bottom-right-radius:6px;border-bottom-left-radius:6px"> 
<div  class="col-xs-12 reactstartslidebar"  id="reactactivatebarx"  style="-moz-box-shadow: 0 0 3px#000000;
 -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000;background-color:<?php echo $reactcolor; ?>;height:5px;width:100%;padding:0px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;"></div> 
</div></div> 


<div  class="col-xs-12"  id="reactslidebar" style="display:none;padding:0px;position:fixed;z-index:5;top:0em;height:0px;margin:auto;text-align:center;">
<div  class="col-xs-12"  style="background-color:#cccccc;height:5px;padding:0px;display:block;border-bottom-right-radius:6px;border-bottom-left-radius:6px"> 
<div  class="col-xs-12 reactstartslidebar"  id="reactactivatebar"  style="-moz-box-shadow: 0 0 3px#000000;
 -webkit-box-shadow: 0 0 3px#000000;box-shadow: 0 0 3px#000000;background-color:<?php echo $reactcolor; ?>;height:5px;width:100%;padding:0px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;"></div> 
</div></div> 





<div class="col-xs-12 "   id="reactzoomin" style="display:none;padding:0px;position:fixed;z-index:5;top:0em;height:0px;margin:auto;text-align:center;">
  <div class="col-xs-10"  style="padding:0px;height:0px"></div>
<div class="col-xs-2  zuzax superbuttonshoverlucent"  onclick="javascript:switchreactionlayout<?php echo $nivd; ?><?php echo $gringo; ?>(1);"  style="opacity:0.9;text-align:center;float:right;margin-right:4px;margin-top:4.5px">
<span class="juju  zuperxy" style="font-size:130%;" >  <i class="fas fa-search-plus" aria-hidden="true"></i>  </span>
</div> </div>
 


<div class="col-xs-12  "   id="reactscrollup" style="display:none;padding:0px;position:fixed;z-index:2;top:0em;height:55px;margin:auto;text-align:center;background-color:<?php echo $bcgatecolor; ?>">
  <div class="col-xs-12"  style="padding:0px;background-color:<?php echo $bccolor; ?>">  
  <div class="col-xs-10"  style="padding:0px;height:0px"></div>
<div class="col-xs-2  zuzax superbuttonshoverlucent"    onclick="javascript:shootup();"  style="opacity:0.5;text-align:center;float:right;margin-right:4px;margin-top:1.5px">
<span class="juju  zuperxy" style="font-size:130%;" >  <i class="fas fa-camera"></i>  </span>
</div> </div></div>








  <div  class="col-xs-12"  id="reactcoverfull" style="padding:0px;position:relative;height:100%;width:100%;background-color:<?php echo $comtheme1; ?>;display:none">

<div  class="col-xs-12"  id="reactcoverinsidefull"    style="display:flex;padding:0px;position:relative;height:100%;width:100%;background-color:<?php echo $comtheme2;?>">


   







<div  class="col-xs-12"    id="startfullview" style="display:none;padding:0px;position:relative;height:100%;width:100%;">



<div class="col-xs-12"     id="reactclicktxtout"    style="padding:0px;position:absolute;z-index:1;top:0em;height:0px;margin-top:20px;display:none">
   <div  class="col-xs-12"  id="reactclicktxt"    style="padding:0px;text-align:center;margin:auto;height:0px">
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
<div class="col-xs-2 zuperxy zuzax"  onclick="javascript:reacthashtagmode();" style="padding:0px;text-align:center;opacity:0.7;height:0px">
<span  id="reactthumby"   class="juju " style="border-radius:50%;padding:18px;font-size:145%" >
 <span  id="reactioncircle">   <i class="far fa-circle" ></i>   </span>
   <span  id="reactionhashtag"  style="display:none">   <i class="fas fa-hashtag" ></i>   </span>
  </span></div>
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
</div></div>




<div   class=" col-xs-12 zuperxy "   id="reactionpostnumberout"   style="padding:0px;position:absolute;height:0px;top:1em;z-index:2;display:none">
  <div   class=" col-xs-12"   id="reactionpostnumber"  style="padding:0px;text-align:center;margin:auto;height:0px">
 <div  class="col-xs-10 col-sm-11"  style="padding:0px;height:0px" >   </div>
<div  class="col-xs-2  col-sm-1 zuzax juju dontallowselect"   onmousedown="javascript:playshowhide();"  id="reactionpostnumberin" style="padding:0px;text-align:center;">
  <span  style="background-color:<?php echo $postnumbk;?>;padding:0px;height:auto">
<span  class="zuzax zuperxy  <?php echo $postnumclass;?>"   id="reactionpostnumberinx"   style="<?php echo $postnumbackgtextcolor;?>;
border-radius:6px;font-weight:bold;font-size:100%;padding:5px;opacity:0.9">
 <span id="reactionpostnumberactive">1</span>/<span id="reactionpostnumbertotal"><?php echo $total; ?></span> 
  </span>  </span>  
</div></div> </div> 




<div   class=" col-xs-12 zuperxy"   id="reactionplayout" style="margin-top:11px;padding:0px;position:absolute;height:0px;top:0em;z-index:2;display:none">
  <div   class="col-xs-12"   id="reactionplay"  style="padding:0px;text-align:center;margin:auto;height:0px">
     <div  class="col-xs-10 col-sm-11"  style="padding:0px" >   </div>
      <div  class="col-xs-2 col-sm-1 juju zuzax"  onclick="javascript:play();"  style="padding:0px;font-size:180%" > 
 <span class="transparentbutton boxonhover"  id="reactionplayshow" style="padding:4px" > <i class="far fa-play-circle"></i>  </span>
 <span  class="boxonhover"  id="reactionplayhide" style="padding:4px"> <i class="far fa-play-circle"></i>  </span></div>
</div></div>


<div   class=" col-xs-12 zuperxy"   id="reactionpauseout" style="margin-top:11px;padding:0px;position:absolute;height:0px;top:0em;z-index:2;display:none">
  <div   class="col-xs-12"   id="reactionpause"  style="padding:0px;text-align:center;margin:auto;height:0px;display:none;">
     <div  class="col-xs-10 col-sm-11"  style="padding:0px;height:0px" >   </div>
      <div  class="col-xs-2 col-sm-1 juju zuzax"   onclick="javascript:endplay();"   style="padding:0px;font-size:180%" > 
    <span class="boxonhover" style="padding:4px">  <i class="far fa-stop-circle"></i>   </span>
 </div>
</div></div>







<div class="col-xs-12"   id="reactarrowsout"   style="padding:0px;position:absolute;z-index:1;top:0em;height:0px;display:none">
  <div  class="col-xs-12"  id="reactarrows"    style="padding:0px;text-align:center;margin:auto;height:0px">
 <div class=" col-xs-2  zuperxy zuzax" id="reactplayleft"   style="padding:0px;height:100rem;"></div>
  <div class="col-xs-8" style="padding:0px;height:0px"></div>
<div class=" col-xs-2  zuperxy zuzax" id="reactplayright"   style="padding:0px;height:100rem;">  </div>
</div></div>


<div class="zuperxya col-xs-12"  id="reactloader" style="position:absolute;top:42.5%;text-align:center;font-size:200%;"> 
 <i class="fas fa-stroopwafel  fa-spin"></i></div>

<div   class="col-xs-12"  id="reactcase"   style="border-radius:6px;margin:auto;padding:0px"> 
<?php     $totalx=$total + 1;  for($i= 1;  $i < $totalx; $i++) { 
echo'<div  data-index="'.$i.'"  id="fullview'.$i.'"   style="border-radius:6px;margin:auto;display:none"> </div>'; }   ?></div>


</div>


</div></div>



















  <div  class="col-xs-12"  id="reactcover"  style="padding:0px;position:relative;min-height:100%;min-height:100vh;width:100%;background-color:<?php echo $comtheme1; ?>;display:none">



<div  class="col-xs-12"  id="reactcoverinside"    style="display:flex;padding:0px;position:relative;min-height:100%;min-height:100vh;width:100%;background-color:<?php echo $comtheme2;?>">


   



<div  class="col-xs-12"  id="startreactview"  style="padding:0px;display:none">


<div  class="col-xs-12  col-sm-6 "   id="startreactviewinholder"  style="padding:0px;overflow-y:auto;overflow-x:hidden;display:flex;padding:0px;position:fixed;height:100%;z-index:1; ">


<div class="col-xs-12"     id="reactclicktxtoutx"    style="padding:0px;position:absolute;z-index:1;top:0em;height:0px;margin-top:12px;display:none">
   <div  class="col-xs-12"  id="reactclicktxtx"    style="padding:0px;text-align:center;margin:auto;height:0px">
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
<div class="col-xs-2 zuperxy zuzax"  onclick="javascript:reacthashtagmodex();" style="padding:0px;text-align:center;opacity:0.7;height:0px">
<span  id="reactthumbyx"   class="juju " style="border-radius:50%;padding:18px;font-size:145%" >
 <span  id="reactioncirclex">   <i class="far fa-circle" ></i>   </span>
   <span  id="reactionhashtagx"  style="display:none">   <i class="fas fa-hashtag" ></i>   </span>
  </span></div>
  <div class="col-xs-5" style="padding:0px;height:0px"></div>
</div></div>








<div   class=" col-xs-12 zuperxy "   id="reactionpostnumberxout"   style="margin-top:16px;padding:0px;position:absolute;height:0px;top:0em;z-index:2;display:none;left:0.4em">
  <div   class=" col-xs-12"   id="reactionpostnumberx"  style="padding:0px;text-align:center;margin:auto;height:0px">
 <div  class="col-xs-10 col-sm-5"  style="padding:0px;height:0px" >   </div>
<div  class="col-xs-2  col-sm-1 zuzax juju dontallowselect"   onmousedown="javascript:playshowhide();"  id="reactionpostnumberinx" style="padding:0px;text-align:center;">
  <span  style="background-color:<?php echo $postnumbk;?>;padding:0px;height:auto">
<span  class="zuzax zuperxy  <?php echo $postnumclass;?>"   id="reactionpostnumberinxx"   style="<?php echo $postnumbackgtextcolor;?>;
border-radius:6px;font-weight:bold;font-size:100%;padding:5px;opacity:0.9">
 <span id="reactionpostnumberactivex">1</span>/<span id="reactionpostnumbertotalx"><?php echo $total; ?></span> 
  </span>  </span>  
</div></div> </div> 




<div   class=" col-xs-12 zuperxy"   id="reactionplayxout" style="margin-top:11px;padding:0px;position:absolute;height:0px;top:0em;z-index:2;display:none;">
  <div   class="col-xs-12"   id="reactionplayx"  style="padding:0px;text-align:center;margin:auto;height:0px">
     <div  class="col-xs-10 col-sm-5"  style="padding:0px;height:0px" >   </div>
      <div  class="col-xs-2 col-sm-1 juju zuzax"  onclick="javascript:playx();"  style="font-size:180%;" > 
 <span class="transparentbutton boxonhover"  id="reactionplayxshow"  style="padding:4px" > <i class="far fa-play-circle"></i>  </span>
 <span  class="boxonhover"  id="reactionplayxhide" style="padding:4px" > <i class="far fa-play-circle"></i></span>  </span></div>
</div></div>



<div   class=" col-xs-12 zuperxy"   id="reactionpausexout" style="margin-top:11px;padding:0px;position:absolute;height:0px;top:0em;z-index:2;display:none">
  <div   class="col-xs-12"   id="reactionpausex"  style="padding:0px;text-align:center;margin:auto;height:0px;display:none;">
     <div  class="col-xs-10 col-sm-5"  style="padding:0px;height:0px" >   </div>
      <div  class="col-xs-2 col-sm-1 juju zuzax"   onclick="javascript:endplayx();"    style="font-size:180%;" > 
   <span class="boxonhover" style="padding:4px">   <i class="far fa-stop-circle"></i>   </span> 
 </div>
</div></div>





<div class="col-xs-12"   id="reactarrowsoutx"   style="padding:0px;position:absolute;z-index:1;top:0em;height:0px;display:none">
  <div  class="col-xs-12"  id="reactarrowsx"    style="padding:0px;text-align:center;margin:auto;height:0px">
 <div class=" col-xs-2  zuperxy zuzax" id="reactplayleftx"   style="padding:0px;height:100rem;"></div>
  <div class="col-xs-8" style="padding:0px;height:0px"></div>
<div class=" col-xs-2  zuperxy zuzax" id="reactplayrightx"   style="padding:0px;height:100rem;">  </div>
</div></div>


<div class="zuperxya col-xs-12"  id="reactloaderx" 
style="z-index:1;padding:0px;position:absolute;top:42.5%;text-align:center;font-size:200%;height:0px;"> 
 <div  class=" waveboy"  ><i class="far fa-hand-paper"></i> </div> </div>
 

<div   class="col-xs-12"  id="reactcasex"   style="border-radius:6px;margin:auto;padding:0px;"> 
<?php     $totalx=$total + 1;  for($i= 1;  $i < $totalx; $i++) { 
echo'<div   data-index="'.$i.'"   id="xfullview'.$i.'"   style="border-radius:6px;margin:auto;display:none;padding:0px"> </div>'; }   ?>
</div>


</div>    




<div  class="col-xs-hidden col-sm-6">

</div>


<div  class="col-xs-12  col-sm-6 "  id="startreacttext"  style="padding:0px;position:relative;min-height:100%;min-height:100vh;">
<div class="col-xs-12"   id="startreacttextinside"    style="padding:0px;min-height:100%;min-height:100vh;">

<div  class="col-xs-12  zuzax juju  zuperxy "   style="padding:5px;text-align:center;margin-top:6px"> 
  <span  onclick="javascript:hidezoomboy();"  style="font-weight:bold;color:#eeeeee;">
    <bottr>
       <div  id="reactone"  style="display:none;font-size:117%;margin-top:4px;">  React To This </div>
   <span  id="reacttwo"  style="display:none;font-size:135%;"> Reaction </span>
    <span  id="reactthree"  style="display:none;font-size:135%;"> Reactions </span>
    </bottr></span>   </div>


<div  class="col-xs-12"   style="padding:5px;margin-top:-2.9em;z-index:2;"> 
<div  class="col-xs-11"   style="padding:0px;height:0px"> 
</div>
<div  class="col-xs-1  zuperxy"   style="padding:0px;color:#eeeeee;">  <bottr>
<div  class="zuzax juju" 
 style="padding:6px;text-align:center;margin:0 auto;" > 
   <div  id="reactcountme"  style="margin-top:2px;font-size:100%;font-weight:bolder">   </div>  </div>  </bottr>
</div></div>





<div  class="col-xs-12 col-sm-12"  id="reactpost1"  style="padding:0px;height:auto;">


 </div>



<div  class="col-xs-12 col-sm-12 pcreacttext"  id="superreactlist<?php echo $nivd; ?><?php echo $gringo; ?>"  style="padding:0px;height:auto;">


  </div>









<div  class="col-xs-12 zuperxya"   id="textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;z-index:12;position:absolute;top:45%;padding:0px;text-align:center;font-size:200%;color:#ffffff">
 <div  class=" waveboy"  > <i class="fas fa-clock"></i> </div>
 </div> 


<div  class="col-xs-12 juju zuzax zuperxy hopboy"  onmousedown="javascript:showcomment();"  id="textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>"   style="display:none;z-index:7;position:absolute;top:45%;padding:0px;text-align:center;font-size:180%;color:<?php echo $_SESSION['cl'];  ?>">
 <i class="fas fa-comment-alt"></i> 
 </div> 


</div>
</div>


</div>

</div></div>




<style type="text/css">
  .turtrans{height: auto;-moz-box-shadow: 0 0 15px#cccccc;
 -webkit-box-shadow: 0 0 15px#cccccc;box-shadow: 0 0 15px#cccccc;}

 textarea {
    resize: none;
    overflow: hidden;
    min-height:60px; }
</style>


<script type="text/javascript">
  
  function auto_grow(element) {
    if(mobileboy ==0){
    element.style.height = "60px";
    element.style.height = (element.scrollHeight)+"px";
    document.getElementById("reacttextarea").style.bottom = (element.scrollHeight)+210+"px";}
    else{
    element.style.height = "60px";
    element.style.height = (element.scrollHeight)+"px";
    document.getElementById("reacttextarea").style.bottom = (element.scrollHeight)+90+"px";
    }
}



</script>




              






<div class="col-xs-12  "  id="reacttextarea"  style="padding:0px;z-index:51;bottom:38%;position:fixed;padding:0px;height:0px;display:none;">
<div class="col-xs-hidden  col-sm-6"   style="padding:0px;height:0px "></div>


<div  class="col-xs-12  col-sm-6 "  style="padding:0px;padding-top:50px;padding-bottom:120px;">


<div  class="col-xs-12 zuperxya"   id="textreactclock<?php echo $nivd; ?><?php echo $gringo; ?>"   
  style="opacity:0.6;display:none;z-index:515;position:absolute;bottom:90%;padding:0px;text-align:center;font-size:240%;color:#ffffff">
 <div  class=" waveboy"  ><i class="fas fa-clock"></i> </div>
 </div> 



<div  class="col-xs-12"  style="padding:0px;">  
<div  class="col-xs-5"  style="padding:0px;">  
</div>
<div  class="col-xs-2"  style="padding:0px;background-color:<?php echo $toptextareacolor; ?> ;height:2.5px;">  
</div>
</div>



  <div  class="col-xs-12"  style="padding:3px;">
  <div class="col-xs-hidden  col-sm-1"   style="padding:0px;height:0px "></div>
 <div class="col-xs-12  col-sm-10"   style="padding:0px;height:0px ">

 <div class="col-xs-2 col-sm-2"   style="padding-top:0px;padding:0px;margin:auto;text-align:center;margin-top:0.5%;">
      <img    onclick="javascript:cleartextareashow();"    src="images/profilemini/<?php echo  $_SESSION['profilepic'];?>"  onclick="javascript:listtopage();"
         id="addcomprofileimagefile"  class="zuzax juju img-rounded  dontallowselect " style="width:auto;height:4em;padding:4px;-moz-box-shadow: 0 0 2px<?php echo $_SESSION['cl'];?>;-webkit-box-shadow: 0 0 2px<?php echo $_SESSION['cl'];?>;box-shadow: 0 0 2px<?php echo $_SESSION['cl'];?>; border:2px solid<?php echo $_SESSION['cl'];?>;border-radius:50%;float:left;text-align:left"  title="<?php echo $_SESSION['user'];?>"/>
          </div>
<div class="col-xs-8 col-sm-8 " style="padding:0px;left:0.3em">
<textarea   oninput="auto_grow(this)"   id="reacttextareasource" class="sliderlook dontallowselect" spellcheck="false" 
  style="background-color:<?php echo $xtextareabackcolor; ?>;border:none;height:60px;width:100%;border-radius:6.5px;font-size:100%;overflow:auto;font-weight:bold;padding:0px;color:<?php echo $xtextareacolor; ?>; <?php echo $reacttextareashadow; ?>"  id="captionxx"
 placeholder="      Share Your Thoughts"></textarea>
</div>
<div class=" col-xs-2 col-sm-2 zuzax juju  zuperxy "   style="padding:0px;text-align:center;border-top-left-radius:5px;height:auto;margin-top:0.7%;">
  <div  class=" <?php  echo $joinbuttonplusa; ?>   juju zuzax <?php echo $clickaddcomtur; ?>"   onmousedown="javascript:addreaction();"      style="padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;float:right;-moz-box-shadow: 0 0 7.5px#cccccc;
 -webkit-box-shadow: 0 0 7.5px#cccccc;box-shadow: 0 0 7.5px#cccccc;text-align:center;border-radius:50%; padding:0.4em;margin-top:4px;color:<?php echo $_SESSION['cl']; ?>;font-size:120%" > 
   <div  class="" style="font-weight:bolder;margin-top:0.35em;"> <i class="fa fa-check" aria-hidden="true" ></i>   </div>  </div> 


   </div>    </div> 
  </div> </div>

</div>
 </div>




<div class="col-xs-12   zuzax"  onclick="javascript:allowcancelwithme();"  id="addcomback"   onclick="javascript:showcomment();"   style="height:0px;padding:0px;position:fixed;z-index:50;top:0em;display:none">
<div class="col-xs-hidden col-sm-6" style="height:0px">  </div>
  <div class="col-xs-12 col-sm-6 "    style="padding:0px;height:30000px;background-color:<?php echo $reactaddbackcolor; ?>">
  </div>
</div>


  <div class="col-xs-12 mobilepushaddcom"  id="addcom" 
   style="opacity:0.9;padding:4px;z-index:10;height:0px;padding-bottom:5px;bottom:4em;position:fixed;display:none;">
     <div class="col-xs-11"    style="padding:0px;height:0px">  </div>
  <div class="col-xs-1"    style="padding:0px;height:0px;left:3.5px">  
<div  class="zuperxya <?php  echo $joinbuttonplusa; ?> juju zuzax <?php echo $clickaddcomtur; ?>"   onmousedown="javascript:showcomment();"   style="font-size:120%;padding:0px;width:3.1em;height:3.1em;border-radius:50%;margin:0 auto;float:right;-moz-box-shadow: 0 0 5.5px#cccccc;
 -webkit-box-shadow: 0 0 5.5px#cccccc;box-shadow: 0 0 5.5px#cccccc;text-align:center;" > 
   <div  class="" style="font-weight:bolder;margin-top:0.9em;color:<?php echo $_SESSION['cl']; ?>"> <i class="far fa-comment-alt"></i>  </div>  </div> 
 </div> </div>





<div   id="collectfromcommentlibrary">

</div>




<script type="text/javascript">

     reactionpag="0";
      reactionnex="1";
      adpassclerstate="0";
       adclerstate="0";


function reacttop(d){     
 document.getElementById("totalcomment").value=d;
 if(d == 0){  $("#reactone").show(); $("#reacttwo").hide(); $("#reactthree").hide();
       document.getElementById("reactcountme").innerHTML=" ";
       showcomment();  
   $("#addcom").hide(); 
 }  else if (d == 1){  $("#reactone").hide(); $("#reacttwo").show(); $("#reactthree").hide();
  document.getElementById("reactcountme").innerHTML=d;   $("#addcom").show();  }
 else{   $("#reactone").hide();  $("#reacttwo").hide();  $("#reactthree").show();   
    document.getElementById("reactcountme").innerHTML=d;    $("#addcom").show();  } }





function afterreactionaddded(){
   var newcom=$("#totalcomment").val();
   newcom++;
   document.getElementById("totalreactions<?php echo $nivd; ?><?php echo $gringo; ?>").value=newcom;
  document.getElementById("reactioncounthold<?php echo $nivd; ?><?php echo $gringo; ?>").innerHTML= newcom+" ";
   document.getElementById("reactcountme").innerHTML=newcom; 
    reacttop(newcom); 
     document.getElementById("totalcomment").value=newcom; }



 



  function cleartextareashow(){
   var tt = $("#reacttextareasource").val();
   if(tt == "" ||  tt == null){
      var ta = $("#textareadata").val();
  document.getElementById("reacttextareasource").value=ta;
   }else{
    document.getElementById("textareadata").value=tt;
     document.getElementById("reacttextareasource").value=" ";}}


  
  
function closereact(){  history.back(); }


    function shootup(){   $("#superpop").animate({ scrollTop:(0)},'fast'); }



function  allowcancelwithme(){
if (commentclicked == 1){    showcomment();  }}



function  showcommentkid(){

$("#startreacttext").addClass("blurplaceholder"); $("#addcomback").show(); 
   $("#addcom").hide(); $("#reacttextarea").show();   commentclicked=1;   
  $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
}



function  showcomment(){
if(commentclicked == 0){
  
   showcommentkid();
   } else{ 
    $("#textreactclock<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
$("#startreacttext").removeClass("blurplaceholder");  $("#addcomback").hide();  
  var ctot=$("#totalcomment").val();

  if(ctot == 0){ $("#addcom").hide();
  $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").show();
     $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").show();
  }else{   $("#addcom").show();
    $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide();
    $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); } 
    $("#reacttextarea").hide();   commentclicked=0; 
           } 

            }







  function addreaction(){ 
    $("#textreactclock<?php echo $nivd; ?><?php echo $gringo; ?>").show();
var a ="<?php echo $nivd; ?>";
var c =$("#reacttextareasource").val();
 reactionpag++;
  reactionnex++;
 document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.visibility="hidden";
    $.ajax({
  type: "POST",
  url: "commentlibraryincreament.php",
  data: {postid:a,cap:c,pag:reactionpag,nex:reactionnex},
 success: function(data){
  $("#collectfromcommentlibrary").html(data).show();
  document.getElementById("reacttextareasource").value="";
 },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }

    





function hidezoomboy(){ 
if(mobileboy == 1){ 
      if(timereact2xxstate==1){ clearTimeout(timereact2xx);  timereact2xxstate=0; }
  $("#reactzoomin").hide();
$("#reactscrollup").show();
  playshowhidex();
   timereact2xxstate=0; }  }




  function play(){  
   $("#reactcase").slick("unslick");    
   startreactslideplay();
$("#reactionplay").hide(); 
$("#reactionpause").hide();
$("#reactslidebar").show();
 $("#reactclicktxt").hide();
$("#reactactivatebar").removeClass("reactstopslidebar");
 $("#reactactivatebar").addClass("reactstartslidebar");
     reactionplaying=1;  }


 function endplay(){
  reactionplaying = 0;
     $("#reactcase").slick("unslick");
    startreactslide();
$("#reactionplay").show(); 
$("#reactionpause").hide();
 $("#reactarrows").show();  
$("#reactslidebar").hide();
$("#reactactivatebar").removeClass("reactstartslidebar");
  $("#reactactivatebar").addClass("reactstopslidebar");}




  function playx(){  
   $("#reactcasex").slick("unslick");    
   startreactslideplayx();
$("#reactionplayx").hide(); 
$("#reactionpausex").hide();
$("#reactslidebarx").show();
 $("#reactclicktxtx").hide();
$("#reactactivatebarx").removeClass("reactstopslidebar");
 $("#reactactivatebarx").addClass("reactstartslidebar");
     reactionplayingx=1;  }


 function endplayx(){
  reactionplayingx = 0;
     $("#reactcasex").slick("unslick");
    startreactslidex();
$("#reactionplayx").show(); 
$("#reactionpausex").hide();
 $("#reactarrowsx").show();  
$("#reactslidebarx").hide();
$("#reactactivatebarx").removeClass("reactstartslidebar");
  $("#reactactivatebarx").addClass("reactstopslidebar");}







   function  playshowhide(){ 
    $("#reactionpostnumber").hide();
   document.getElementById("reactionplayout").style.display="flex";
     if(timereactplaystate==1){ clearTimeout(timereactplaybb);}  
   $("#reactionplayshow").hide();
       $("#reactionplayhide").show();
       timereactplaystate=1;  
   timereactplaybb =setTimeout(function(){
              $("#reactionplayhide").hide();
    $("#reactionplayshow").show();
    timereactplaystate=0;
                },10000);  }




    function  playshowhidex(){ 
      $("#reactionpostnumberx").hide();
   document.getElementById("reactionplayxout").style.display="flex";
     if(timereactplaystatex==1){ clearTimeout(timereactplaybbx);}  
   $("#reactionplayxshow").hide();
       $("#reactionplayxhide").show();
       timereactplaystatex=1;  
   timereactplaybbx =setTimeout(function(){
              $("#reactionplayxhide").hide();
    $("#reactionplayxshow").show();
    timereactplaystatex=0;
                },10000);  }





function reacthashtagmode(){
var hashstatik=$("#hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(hashstatik == 0){
  document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="1";
  $("#reactioncircle").hide();
  $("#reactionpause").hide();
    $("#reactionhashtag").show();
  $("#reactcase").slick("unslick");
     startreactsingle();
var arrz = document.getElementById("reactarrows");
arrz.style.display="none";}
  else{

   if(reactionplaying == 0){
  $("#reactcase").slick("unslick");
  var totsets ="<?php echo $total; ?>";
if(totsets == 1){}else{
    startreactslide();
 $("#reactarrows").show();}
    $("#reactionhashtag").hide();
     $("#reactioncircle").show();
 document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="0"; }
else{
   reactionplayinghalt = 0; 
       $("#reactionhashtag").hide();
     $("#reactioncircle").show();
     document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="0";
     switchreactionlayout<?php echo $nivd; ?><?php echo $gringo; ?>();  }

  }}




function reacthashtagmodex(){
var hashstatik=$("#hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(hashstatik == 0){
  document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="1";
  $("#reactioncirclex").hide();
  $("#reactionpausex").hide();
    $("#reactionhashtagx").show();
  $("#reactcasex").slick("unslick");
     startreactsinglex();
var arrz = document.getElementById("reactarrowsx");
arrz.style.display="none";}
  else{
    if(reactionplayingx == 0){
  $("#reactcasex").slick("unslick");
  var totsetsx ="<?php echo $total; ?>";
if(totsetsx == 1){}else{
    startreactslidex();
 $("#reactarrowsx").show();}
    $("#reactionhashtagx").hide();
     $("#reactioncirclex").show();
 document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="0"; }
   else{  
     reactionplayinghaltx = 0; 
       $("#reactionhashtagx").hide();
     $("#reactioncirclex").show();
     document.getElementById("hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").value="0";
     switchreactionlayout<?php echo $nivd; ?><?php echo $gringo; ?>(); }

  }}



 



function startreactsingle(){
 var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
  var cctyp = $("#type"+idexn+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(cctyp==0 || cctyp==100){  $("#reactclicktxtout").hide(); $("#reactclicktxtoutx").hide();  }
else{  $("#reactclicktxtout").show(); $("#reactclicktxtoutx").show();  }
    var idexnreal = idexn - 1;
  $("#reactcase").slick({ 
  initialSlide:idexnreal,
   swipe:false,
arrows:false,
  slidesToScroll: 1,
  slidesToShow: 1,
dots: false,
  infinite: true,

prevArrow: $("#reactplayleft"),
nextArrow: $("#reactplayright"),
adaptiveHeight: false }); }



function startreactslide(){
   var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
    var ppnum = document.getElementById("reactionpostnumberactive");
  ppnum.innerHTML=""+idexn+"";
    var cctyp = $("#type"+idexn+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(cctyp==0 || cctyp==100){  $("#reactclicktxtout").hide();  $("#reactclicktxtoutx").hide();  }
else{  $("#reactclicktxtout").show();  $("#reactclicktxtoutx").show();  }
    var idexnreal = idexn - 1;
$("#reactcase").slick({ 
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
   swipe:true,
    lazyLoad:"ondemand",
     focusOnSelect:true,
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
speed:600,
fade:true,
  cssEase:"linear",
dots:true,
  infinite:true,

prevArrow: $("#reactplayleft"),
nextArrow: $("#reactplayright"),
adaptiveHeight: false  }); }




function startreactsinglex(){
 var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
  var cctyp = $("#type"+idexn+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(cctyp==0 || cctyp==100){  $("#reactclicktxtout").hide();  $("#reactclicktxtoutx").hide();  }
else{  $("#reactclicktxtout").show();   $("#reactclicktxtoutx").show(); }
if( hideclickmobile==1){ $("#reactclicktxtoutx").hide();  }
    var idexnreal = idexn - 1;
  $("#reactcasex").slick({ 
  initialSlide:idexnreal,
   swipe:false,
arrows:false,
  slidesToScroll: 1,
  slidesToShow: 1,
dots: false,
  infinite: true,

prevArrow: $("#reactplayleftx"),
nextArrow: $("#reactplayrightx"),
adaptiveHeight: false }); }



function startreactslidex(){
   var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
   var ppnum = document.getElementById("reactionpostnumberactivex");
  ppnum.innerHTML=""+idexn+"";
   var cctyp = $("#type"+idexn+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(cctyp==0 || cctyp==100){  $("#reactclicktxtout").hide();  $("#reactclicktxtoutx").hide(); }
else{  $("#reactclicktxtout").show();   $("#reactclicktxtoutx").show();  }
if( hideclickmobile==1){ $("#reactclicktxtoutx").hide();  }
    var idexnreal = idexn - 1;
$("#reactcasex").slick({ 
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
   swipe:true,
    lazyLoad:"ondemand",
     focusOnSelect:true,
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
speed:600,
fade:true,
  cssEase:"linear",
dots:true,
  infinite:true,

prevArrow: $("#reactplayleftx"),
nextArrow: $("#reactplayrightx"),
adaptiveHeight: false  }); }





function startreactslideplayx(){
   var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
    var idexnreal = idexn - 1;
$("#reactcasex").slick({ 
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

prevArrow: $("#reactplayleftx"),
nextArrow: $("#reactplayrightx"),
adaptiveHeight: false  }); }








function startreactslideplay(){
   var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
    var idexnreal = idexn - 1;
$("#reactcase").slick({ 
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

prevArrow: $("#reactplayleft"),
nextArrow: $("#reactplayright"),
adaptiveHeight: false  }); }





  

$("#reactcase").on("afterChange", function(event, slick, currentSlide, nextSlide){
  var dataidx = $(slick.$slides[currentSlide]).data("index"); 
  if(reactstate==1){ 
document.getElementById("activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").value=dataidx
var cctyp = $("#type"+dataidx+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();}
else{  $("#reactcase").slick("unslick");      }
if(reactionplaying==1){
$("#reactslidebar").hide();
 $("#reactactivatebar").addClass("reactstopslidebar");
$("#reactactivatebar").removeClass("reactstartslidebar");
$("#reactslidebar").show();
  $("#reactactivatebar").removeClass("reactstopslidebar");
  $("#reactactivatebar").addClass("reactstartslidebar");}
var ppnum = document.getElementById("reactionpostnumberactive");
  ppnum.innerHTML=""+dataidx+"";
if(cctyp==0 || cctyp==100){   $("#reactclicktxtoutx").hide();  $("#reactclicktxtout").hide();  }
else{ $("#reactclicktxtoutx").show();   $("#reactclicktxtout").show();  } 
if(reactnumtotstate==1){ clearTimeout(timereactnumbb);}
 document.getElementById("reactionplayout").style.display="none";
reactnumtotstate=1; 
$("#reactionpostnumberx").show();  $("#reactionpostnumber").show(); $("#reactzoomin").hide();
 timereactnumbb =setTimeout(function(){ $("#reactionpostnumberx").hide(); 
  $("#reactionpostnumber").hide(); reactnumtotstate=0; playshowhide();  },2000);  });





$("#reactcasex").on("afterChange", function(event, slick, currentSlide, nextSlide){
  var dataidxx = $(slick.$slides[currentSlide]).data("index"); 
if(reactstate==1){document.getElementById("activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").value=dataidxx;
var cctyp = $("#type"+dataidxx+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();}
else{   $("#reactcasex").slick("unslick");     }
if(reactionplayingx==1){
$("#reactslidebarx").hide();
 $("#reactactivatebarx").addClass("reactstopslidebar");
$("#reactactivatebarx").removeClass("reactstartslidebar");
$("#reactslidebarx").show();
  $("#reactactivatebarx").removeClass("reactstopslidebar");
  $("#reactactivatebarx").addClass("reactstartslidebar");}
var ppnum = document.getElementById("reactionpostnumberactivex");
  ppnum.innerHTML=""+dataidxx+"";
if(cctyp==0 || cctyp==100){   $("#reactclicktxtoutx").hide(); $("#reactclicktxtout").hide();  }
else{  $("#reactclicktxtoutx").show();   $("#reactclicktxtout").show();  } 
if(reactnumtotstate==1){ clearTimeout(timereactnumbb);}
 document.getElementById("reactionplayxout").style.display="none";
reactnumtotstate =1; 
 $("#reactionpostnumberx").show();  $("#reactionpostnumber").show(); $("#reactzoomin").hide();
timereactnumbb =setTimeout(function(){ $("#reactionpostnumberx").hide(); 
 $("#reactionpostnumber").hide(); reactnumtotstate=0;  playshowhidex(); },2000);  });




 


function  reacttextlayout1push<?php echo $nivd; ?><?php echo $gringo; ?>(){ 
    document.getElementById("reactcover").style.backgroundColor="";
     document.getElementById("reactcoverinside").style.backgroundColor="";
            var wonne ="<?php echo $comtheme1; ?>";
         var wonne2 ="<?php echo $comtheme2; ?>";
      document.getElementById("startreacttext").style.backgroundColor=""+wonne+"";
     document.getElementById("startreacttextinside").style.backgroundColor=""+wonne2+"";
  document.getElementById("reactclicktxtoutx").style.visibility="hidden";
         hideclickmobile=1;
  document.getElementById("startreactviewinholder").style.height="15%"; 
        document.getElementById("startreactviewinholder").style.zIndex="4";
        document.getElementById("startreactviewinholder").style.width="100%";
         document.getElementById("startreactviewinholder").style.position="fixed";
        document.getElementById("startreacttext").style.position="absolute";    
        document.getElementById("startreacttext").style.zIndex="2";
        document.getElementById("startreacttext").style.top="6em";
        document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.top="100px"; 
document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.position="relative";
document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.paddingBottom="0px";
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.top="100px"; 
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.position="relative";
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.paddingBottom="0px";
             $("#startreactviewinholder").animate({ scrollTop:(200)},'fast');
            document.getElementById("reacttextarea").style.bottom="48%";  }



function  reacttextlayout2push<?php echo $nivd; ?><?php echo $gringo; ?>(){ 
  document.getElementById("startreacttext").style.backgroundColor="";
     document.getElementById("startreacttextinside").style.backgroundColor="";
        var wonne ="<?php echo $comtheme1; ?>";
         var wonne2 ="<?php echo $comtheme2; ?>";
      document.getElementById("reactcover").style.backgroundColor=""+wonne+"";
     document.getElementById("reactcoverinside").style.backgroundColor=""+wonne2+"";
  document.getElementById("reactclicktxtoutx").style.visibility="visible";
   hideclickmobile=0;
  var idexn = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
var tiyp = $("#type"+idexn+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if( tiyp == 0 || tiyp == 100 ){     }else{  $("#reactclicktxtoutx").show(); }
       document.getElementById("startreactviewinholder").style.height="auto"; 
       document.getElementById("startreactviewinholder").style.zIndex="4";
      document.getElementById("startreactviewinholder").style.width="100%";
      document.getElementById("startreactviewinholder").style.position="relative";
       document.getElementById("startreacttext").style.position="relative";    
          document.getElementById("startreacttext").style.zIndex="1";
          document.getElementById("startreacttext").style.top="0em";
           document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.top="50px"; 
document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.position="relative";
document.getElementById("textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").style.paddingBottom="100px";
          document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.top="50px"; 
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.position="relative";
document.getElementById("textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").style.paddingBottom="100px";  
document.getElementById("reacttextarea").style.bottom="48%";  }









function  switchreactionlayout<?php echo $nivd; ?><?php echo $gringo; ?>(a){ 
  if(reactionplayingx == 1){
           
            if(reactionplayinghaltx == 0){
        $("#reactcasex").slick("unslick");
            startreactslidex();
       $("#reactarrowsx").hide();
   var innum="<?php echo $total; ?>";
     if(innum > 1){  $("#reactionpostnumberx").hide(); }
   $("#reactionpausex").show(); 
$("#reactslidebarx").hide();
var idex = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
 var typx = $("#type"+idex+"").val();
if(typx == 0 ||  typx == 100){}else{  $("#reactclicktxtx").show();}
$("#reactactivatebarx").removeClass("reactstartslidebar");
  $("#reactactivatebarx").addClass("reactstopslidebar");
      reactionplayinghaltx = 1; }
       else{  $("#reactarrowsx").show();
        playx();    reactionplayinghaltx = 0;  }


          }


 else if(reactionplaying == 1){
           
            if(reactionplayinghalt == 0){
        $("#reactcase").slick("unslick");
            startreactslide();
       $("#reactarrows").hide();
   var innum="<?php echo $total; ?>";
     if(innum > 1){  $("#reactionpostnumber").hide(); }
   $("#reactionpause").show(); 
$("#reactslidebar").hide();
var idex = $("#activeindex<?php echo $nivd; ?><?php echo $gringo; ?>").val();
 var typx = $("#type"+idex+"").val();
if(typx == 0 ||  typx == 100){}else{  $("#reactclicktxt").show();}
$("#reactactivatebar").removeClass("reactstartslidebar");
  $("#reactactivatebar").addClass("reactstopslidebar");
      reactionplayinghalt = 1; }
       else{  $("#reactarrows").show();
        play();    reactionplayinghalt = 0;  }


          }



          else{

  var hashstatik=$("#hashtagactivated<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(hashstatik == 0){

if(allreactimageloaded  == 1){   
  
  $("#reactionpostnumberx").hide();
   var actlay = $("#activelayout").val();
   if(actlay == 0){ 
      var coo =$("#totalcomment").val();
         if(coo == 0){ showcommentkid();    }
          else{   commentclicked=0;  $("#reacttextarea").hide(); $("#addcom").show();   }
if(mobileboy== 1 ){  if(timereact2xxstate==1){ clearTimeout(timereact2xx);  timereact2xxstate=0; }
   $("#reactzoomin").hide();
$("#reactscrollup").hide();
reacttextlayout1push<?php echo $nivd; ?><?php echo $gringo; ?>();   reactmobilestate=0; }
    document.getElementById("activelayout").value=1;
     $("#reactcoverfull").hide(); 
     document.getElementById("startfullview").style.display="none"; 
      $("#reactcover").show();
    document.getElementById("startreactview").style.display="block";  
     var fff = $("#finishedreact").val(); 
     if(fff == 0){
      reactiongolist();
    imagepresentx=0; 
var tox ="<?php echo $totalx; ?>";
var tob ="<?php echo $total; ?>";
  for( var i=1; i<tox; i++){ 
   var tiyp = $("#type"+i+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
 if(tiyp == 0 || tiyp == 100){ 
   imagepresentx=1; } 
if(i == tob){  if(imagepresentx==0){ gofinale(1,1); }else{ gofinale(0,0); } }  } }
 else{   var to = $("#countall").val();
    $("#reactcasex").slick("unslick");         
    if(to == 1){ startreactsinglex();  }else{ startreactslidex();}   } 


                    }
                    else{

       $(addcomback).hide();
    if(mobileboy == 0){
     $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide();   
    $("#addcom").hide(); 
     commentclicked=0;  $("#reacttextarea").hide();}

    $("#reactionpostnumber").hide();
if(mobileboy== 1 && a==0){
if(reactmobilestate==0){ 
  if(timereact2xxstate==1){ clearTimeout(timereact2xx);  timereact2xxstate=0; }
  if(reactnumtotstate== 1){  $("#reactionpostnumberx").hide();  $("#reactionpostnumber").hide(); }
    if(timereactplaystatex==1){ clearTimeout(timereactplaybbx);    $("#reactionplayxhide").hide();
    $("#reactionplayxshow").show();}   $("#reactionplayxhide").hide(); 
    if(reactnumtotstate==1){ clearTimeout(timereactnumbb); 
     document.getElementById("reactionplayxout").style.display="flex";
 $("#reactionplayxhide").hide();
    $("#reactionplayxshow").show();}
  $("#reactzoomin").show();
$("#reactscrollup").hide();
   timereact2xxstate=1;
timereact2xx =setTimeout(function(){ 
  $("#reactzoomin").hide();
$("#reactscrollup").show();
  playshowhidex();
   timereact2xxstate=0;
    },3500);
commentclicked=0;  $("#reacttextarea").hide();
 reacttextlayout2push<?php echo $nivd; ?><?php echo $gringo; ?>();   reactmobilestate=1; }
else{  if(timereact2xxstate==1){ clearTimeout(timereact2xx);  timereact2xxstate=0; }
  $("#reactzoomin").hide();
$("#reactscrollup").hide();
 reacttextlayout1push<?php echo $nivd; ?><?php echo $gringo; ?>();   reactmobilestate=0;     }
 }else{  if(timereact2xxstate==1){ clearTimeout(timereact2xx);  timereact2xxstate=0; }
  $("#reactzoomin").hide();
$("#reactscrollup").hide();
 document.getElementById("activelayout").value=0; 
  $("#reactcover").hide(); 
     document.getElementById("startreactview").style.display="none"; 
      $("#reactcoverfull").show(); 
    document.getElementById("startfullview").style.display="flex"; 
      var ffr = $("#finishedfullview").val(); 
     if(ffr == 0){gofinale(0,0);} 
       else{  var to = $("#countall").val();   
    $("#reactcase").slick("unslick");         
    if(to == 1){ startreactsingle();  }else{ startreactslide(); }   }  } } } } } }






function  startsizerreact(a,b,c,d){
   var cancanx = document.querySelector("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>");
   var iW = parseInt(window.getComputedStyle(cancanx,null).width);
    var iH = parseInt(window.getComputedStyle(cancanx,null).height);
     var resetx =0;
      document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.borderRadius="0px";
if(mobileboy == 1){
  var srhold = document.querySelector("#startreactviewinholder");
     srhold.style.display="block";
 var cancanw = document.querySelector("#fulldimensionsx");
var cancanh = document.querySelector("#fulldimensionsx");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
    }else{
       var wp = document.querySelector("#widthplus");
var wpw = parseInt(window.getComputedStyle(wp,null).width);
 var cancanw = document.querySelector("#fulldimensionsx");
var maxW = parseInt(window.getComputedStyle(cancanw,null).width)+wpw;
  var tiyp = $("#type"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(iW > iH  ||  tiyp != 0 && tiyp != 100 ){  
  document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.width=""+maxW+"px";
 if(d == 0){  document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height="auto";}
 else{
   var mylp = $("#mylongpost<?php echo $nivd; ?><?php echo $gringo; ?>").val();
   if(mylp == 0){
  var oldfont = parseInt($("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size"));
  newfont = oldfont + 4;
  $("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size", ""+newfont+"px");}
  document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height=""+newtextheight+"px"; 
    } resetx =1; } } 
    document.getElementById("xfullview"+a+"").style.width=""+maxW+"px";  
    document.getElementById("xfullview"+a+"").style.height="auto"; 
    $("#xfullview"+a+"").show();
    document.getElementById("xfullview"+a+"").innerHTML="";   
$("#xfullview"+a+"").append($("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").clone());
if(d == 0){ var tiyp = $("#type"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(tiyp == 0 || tiyp == 100){  var zancanx = document.querySelector("#xfullview"+a+"");
     newtextheight = parseInt(window.getComputedStyle(zancanx,null).height); }  }
    if(resetx == 1){ 
    $("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size", ""+oldfont+"px"); 
    document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height=""+iH+"px";
     document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.width="auto";  }
  if(a == b){ 
   if(d == 0){  gofinale(1,2);}
  else{
     $("#superpostdatago<?php echo $pagenum; ?><?php echo $gringo; ?>").isotope({
      itemSelector : ".superpostitem<?php echo $pagenum; ?><?php echo $gringo; ?>" });
   document.getElementById("reactcasex").style.width=""+maxW+"px";  
        $("#reactloaderx").hide();
    document.getElementById("reactcasex").style.height="auto";  
if(hidebodyslider== 1 ){  $("body").css("overflow","hidden");  } 
     if(b == 1){  startreactsinglex();  $("#reactarrowsoutx").hide();
     var zan = document.getElementById("reactcasex");
           var fullh = document.getElementById("fullheight");
      var imagenhei = parseInt(window.getComputedStyle(zan,null).height);
        var scren = parseInt(window.getComputedStyle(fullh,null).height);
         var pusharrow= scren - imagenhei;
         pusharrow = pusharrow/2;
        if(imagenhei < scren && mobileboy == 0){
           document.getElementById("reactclicktxtoutx").style.top=""+pusharrow+"px";}
            }else{ startreactslidex(); 
       var zan = document.getElementById("reactcasex");
           var fullh = document.getElementById("fullheight");
      var imagenhei = parseInt(window.getComputedStyle(zan,null).height);
        var scren = parseInt(window.getComputedStyle(fullh,null).height);
         var pusharrow= scren - imagenhei;
         pusharrow = pusharrow/2;
       document.getElementById("reactplayrightx").style.height=""+imagenhei+"px"; 
         document.getElementById("reactplayleftx").style.height=""+imagenhei+"px"; 
         if(imagenhei < scren && mobileboy == 0){
           document.getElementById("reactionpostnumberxout").style.top=""+pusharrow+"px";
            document.getElementById("reactionplayxout").style.top=""+pusharrow+"px";
            document.getElementById("reactionpausexout").style.top=""+pusharrow+"px";
           document.getElementById("reactclicktxtoutx").style.top=""+pusharrow+"px";
          document.getElementById("reactplayrightx").style.top=""+pusharrow+"px";
          document.getElementById("reactplayleftx").style.top=""+pusharrow+"px";}
            document.getElementById("reactionpostnumberxout").style.display="flex";
            document.getElementById("reactarrowsoutx").style.display="flex";
    document.getElementById("reactarrowsx").style.width=""+maxW+"px";
     document.getElementById("reactionplayxout").style.display="none";
        document.getElementById("reactionpausexout").style.display="flex";
    reactnumtotstate =1;   
 $("#reactionpostnumberx").show();  $("#reactionpostnumber").show();
timereactnumbb =setTimeout(function(){ $("#reactionpostnumberx").hide();
  $("#reactionpostnumber").hide(); reactnumtotstate=0; $("#reactzoomin").hide(); playshowhidex();  },2000); } 
  if(mobileboy == 1){ $("#startreactviewinholder").animate({ scrollTop:(200)},'fast'); } 
    document.getElementById("finishedreact").value=1;}   }
   if(mobileboy ==1){   $("#reactclicktxtoutx").hide();  }}  









function  startsizerfullview(a,b,c){
  if(c == 0){ $("#fullview"+a+"").show(); }else{
   var cancanx = document.querySelector("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>");
   var iW = parseInt(window.getComputedStyle(cancanx,null).width);
    var iH = parseInt(window.getComputedStyle(cancanx,null).height);
     var reset =0;
if(mobileboy == 1){
 var cancanw = document.querySelector("#fulldimensions");
var cancanh = document.querySelector("#fulldimensions");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
ratio = iW / maxW; 
   finW = maxW;
  finH = iH / ratio;
  if(iW > iH){  
 document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height=""+finH+"px";
    document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.width=""+finW+"px";
    reset =1;}
}else{
var tan = iW / iH; 
if(tan >= 2){  
    var cancanw = document.querySelector("#fulldimensionswide");
var cancanh = document.querySelector("#fulldimensionswide");}
else{ var cancanw = document.querySelector("#fulldimensions");
var cancanh = document.querySelector("#fulldimensions");}
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
ratio = iH / maxH; 
   finH = maxH;
  finW = iW / ratio;
  var tiyp = $("#type"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").val(); 
if(iW > iH || tiyp != 0 && tiyp != 100){
 var mylp = $("#mylongpost<?php echo $nivd; ?><?php echo $gringo; ?>").val();
   if(mylp == 0){
  var oldfont = parseInt($("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size"));
  newfont = oldfont + 5;
  $("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size", ""+newfont+"px");}  
 document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height=""+finH+"px";
    document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.width=""+finW+"px";
    if(mobileboy == 0){ document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.borderRadius="6px";}
    reset =1;} } 
    if(a == 1){ H=finH;  W=finW; }
 document.getElementById("fullview"+a+"").style.height=""+finH+"px";
    document.getElementById("fullview"+a+"").style.width=""+finW+"px";
    $("#fullview"+a+"").show();
    document.getElementById("fullview"+a+"").innerHTML="";
$("#fullview"+a+"").append($("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").clone());
if(reset == 1){ 
if(mobileboy == 0){   document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.borderRadius="0px";} 
  $("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").css("font-size", ""+oldfont+"px");
 document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.height=""+iH+"px";
    document.getElementById("image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").style.width="auto";}}
  if(a == b){ 
       $("#superpostdatago<?php echo $pagenum; ?><?php echo $gringo; ?>").isotope({
      itemSelector : ".superpostitem<?php echo $pagenum; ?><?php echo $gringo; ?>" });
       $("#reactloader").hide(); document.getElementById("reactcase").style.height=""+H+"px";
    document.getElementById("reactcase").style.width=""+W+"px";  
   if(hidebodyslider== 1 ){  $("body").css("overflow","hidden");  } 
    if(b == 1){  startreactsingle();  $("#reactarrowsout").hide(); }
    else{ startreactslide(); 
      var zan = document.getElementById("reactcase");
           var fullh = document.getElementById("fullheight");
      var imagenhei = parseInt(window.getComputedStyle(zan,null).height);
        var scren = parseInt(window.getComputedStyle(fullh,null).height);
         var pusharrow= scren - imagenhei;
         pusharrow = pusharrow/2;
       document.getElementById("reactplayright").style.height=""+imagenhei+"px"; 
         document.getElementById("reactplayleft").style.height=""+imagenhei+"px"; 
         if(imagenhei < scren){
         if(mobileboy == 0){
          document.getElementById("reactionpostnumberout").style.top=""+pusharrow+"px";
            document.getElementById("reactionplayout").style.top=""+pusharrow+"px";
            document.getElementById("reactionpauseout").style.top=""+pusharrow+"px";
            document.getElementById("reactclicktxtout").style.top=""+pusharrow+"px";}
          document.getElementById("reactplayright").style.top=""+pusharrow+"px";
          document.getElementById("reactplayleft").style.top=""+pusharrow+"px";}
    document.getElementById("reactionpostnumberout").style.display="flex";
     document.getElementById("reactionpostnumber").style.width=""+W+"px"; 
        document.getElementById("reactionplay").style.width=""+W+"px"; 
        document.getElementById("reactionpause").style.width=""+W+"px"; 
        document.getElementById("reactarrowsout").style.display="flex";
    document.getElementById("reactarrows").style.width=""+W+"px";
    document.getElementById("reactionpauseout").style.display="flex";
     document.getElementById("reactionplayout").style.display="none";
  reactnumtotstate =1; 
 $("#reactionpostnumberx").show();  $("#reactionpostnumber").show();
timereactnumbb =setTimeout(function(){ $("#reactionpostnumberx").hide();
  $("#reactionpostnumber").hide(); reactnumtotstate=0; playshowhide();  },2000);} 
     document.getElementById("finishedfullview").value=1;} }




function gofinale(a,b){
  if(b == 0){ newtextheight=0; }
  else if(b == 1){ var cancanh = document.querySelector("#fulldimensions");
  newtextheight = parseInt(window.getComputedStyle(cancanh,null).height); }
var tox ="<?php echo $totalx; ?>";
var tob ="<?php echo $total; ?>";
  for( var i=1; i<tox; i++){ 
    var la = $("#activelayout").val();
  if(la == 0){  startsizerfullview(i,tob,1); allreactimageloaded ="1"; }
    else{  startsizerreact(i,tob,1,a); allreactimageloaded ="1"; }  }}



function imageloadedchecker(a,b){
var tiyp = $("#type"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
if(tiyp == 0 || tiyp == 100){ 
   imagepresent=1; 
  countloadedlock++; 
 $("#image"+a+"<?php echo $nivd; ?><?php echo $gringo; ?>").imagesLoaded(function(){ 
   countloaded++;  if(countloaded == countloadedlock){ gofinale(0,0); }  }) } 
if(a == b && imagepresent==0 ){  gofinale(1,1);   }}



function checkifimageloaded(){
  countloadedlock=0; 
   countloaded=0; 
    imagepresent=0; 
     reactionplayingx=0;
var tox ="<?php echo $totalx; ?>";
var tob ="<?php echo $total; ?>";
  for( var i=1; i<tox; i++){ 
  imageloadedchecker(i,tob); }}



$(document).ready(function(){

   if(mobileboy == 0){$("#supershow").addClass("blurplaceholdermid");}

$("#feedwait").hide();
     hidebodyslider ="<?php echo $overflowbody; ?>";
      allreactimageloaded ="0";
        timereact2xxstate=0;
        reactnumtotstate=0;
        timereactplaystate=0;
        timereactplaystatex=0;
         reactionplayingx=0;
         reactionplayinghaltx=0;
         reactionplaying=0;
         reactionplayinghalt=0;
         hideclickmobile=0;
         commentclicked=0;
          var la = $("#activelayout").val();
      if(la == 1){ $("#addcom").show();}  
         
        


  var la = $("#activelayout").val();
  if(la == 1){
         $("#textreactpageempty<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
$("#textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
   reactiongolist();}


  if(mobileboy == 1){  
 $("#superreactlist<?php echo $nivd; ?><?php echo $gringo; ?>").removeClass("pcreacttext");
$("#superreactlist<?php echo $nivd; ?><?php echo $gringo; ?>").addClass("mobilereacttext");

  var rec1 = document.getElementById("reactionpostnumberinx");
     rec1.style.paddingBottom="4px";
  var rec1 = document.getElementById("reactionpostnumberinxx");
     rec1.style.paddingBottom="4px";

       reactmobilestate=0;
   reacttextlayout1push<?php echo $nivd; ?><?php echo $gringo; ?>();
   var xthum = document.getElementById("reactthumbyx");
       xthum.style.fontSize="125%";
  var xthumz = document.getElementById("reactthumby");
       xthumz.style.fontSize="125%";
     document.getElementById("reactionpostnumberout").style.marginTop="7px";
   var xthumaa = document.getElementById("reactionplayxout");
       xthumaa.style.marginTop="14px";
         var xthumaaxx = document.getElementById("reactionplayout");
       xthumaaxx.style.marginTop="13px";
          var xthumaa = document.getElementById("reactionpausexout");
       xthumaa.style.marginTop="14px";
         var xthumaaxx = document.getElementById("reactionpauseout");
       xthumaaxx.style.marginTop="13px";

    }else{


$("#addcom").removeClass("mobilepushaddcom");
$("#addcom").addClass("pcpushaddcom");

var rnumx=document.getElementById("reactionpostnumberxout");
rnumx.style.position="fixed";   rnumx.style.left="1.2em";  rnumx.style.top="0.2em";
var repause=document.getElementById("reactionpausexout");
repause.style.position="fixed";   repause.style.left="1.2em";  repause.style.top="0.1em";
var replay=document.getElementById("reactionplayxout");
replay.style.position="fixed";  replay.style.left="1.2em";  replay.style.top="0.1em";




     $("#superpop").addClass('sliderlook'); 
           $("#startreactviewinholder").addClass('sliderlook'); }




  var  la = $("#activelayout").val();
  if(la == 0){ $("#reactcoverfull").show();  document.getElementById("startfullview").style.display="flex";    }
    else{ $("#reactcover").show();   document.getElementById("startreactview").style.display="block";   }
var tox ="<?php echo $totalx; ?>";
var tob ="<?php echo $total; ?>";
set = 1;
  countreactx=0;
  for( var i=1; i<tox; i++){ 
  var vw = $("#view"+i+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
 if(vw == 1){  countreactx++; 
  if(countreactx == tob){ set = 0; checkifimageloaded(); } }}
if(set == 1){
if(tob >= 4){ var intervals = 4 * 500; }else{ var intervals = tob * 500; }  
reacttimerstate=1;
reacttimer=setInterval(function(){
  countreact=0;
  for( var i=1; i<tox; i++){ 
  var vw = $("#view"+i+"<?php echo $nivd; ?><?php echo $gringo; ?>").val();
 if(vw == 1){  countreact++; 
  if(countreact == tob){
   checkifimageloaded(); clearInterval(reacttimer); reacttimerstate=0;  } 
   }  }
},intervals)}  })





  function reactiongolist(){ 
var a ="<?php echo $nivd; ?>";
var c ="<?php echo $gringo; ?>";

   
        var e ="<?php echo $mem; ?>";
          var f ="<?php echo $type; ?>";
           var g ="<?php echo $pagenum; ?>";
            var h ="<?php echo $jump; ?>";
             var i ="<?php echo $jumplock; ?>";
              var j ="<?php echo $pagenumin; ?>";
             var k ="<?php echo $jumpin; ?>"; 
                  var l ="<?php echo $jumplockin; ?>";

                  $("#textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").show(); 
              
    $.ajax({
  type: "POST",
  url: "reactionslistingsgate.php",
  data: {postid:a,gringo:c,member:e,typex:f,page:g,jump:h,jumplock:i,pagein:j,jumpin:k,jumplockin:l},
 success: function(data){
$("#textreactpagespinner<?php echo $nivd; ?><?php echo $gringo; ?>").hide(); 
$("#superreactlist<?php echo $nivd; ?><?php echo $gringo; ?>").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         });   }

    




</script>






