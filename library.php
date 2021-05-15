

     


  <peterx>
 <peter>






<?php  
    
require('dataco.php');
require('phpopen.php'); 
include('exit.php');

 $_SESSION['theme'] = 0; 


include('theme.php');


$_SESSION['postim']='0';
$_SESSION['postseek']='0';
$_SESSION['postseeklock']='0';
     
//$numi=$_POST['num'];

$usert=$_SESSION['user'];
$num=$_SESSION['numuser'];
$d=$_SESSION['numuser'];      ?>
     

          



        <!-- holds zoom preview text data text upload state and lastviewed theme   --> 
   <input  id="removethistexttheme" value=""  hidden>
   <input  id="textuploadstate" value="0"  hidden>
     <!-- holdszoom  preview text data text upload state and lastviewed theme   --> 

  <!-- holds total items in library   --> 
   <input  id="totalitems" value="0"  hidden>
     <!-- holds total items in library   --> 

   
<input  id="textbackgroundtheme" value="textwhite"    hidden>  
<input  id="textbackgroundthemedone" value="textwhitedone"    hidden> 

  <!-- hold backgroundtext value   --> 
<input  id="textbackgroundhold" value=""    hidden>      
      <!-- hold backgroundtext value   -->  

        <!-- holds drop text value  drop image value in viewitemimage.php   --> 
<input  id="droptextitem" value=""    hidden>      
      <!-- holds drop text value  drop image value in viewitemimage.php   --> 
   
<input  id="showdeletestate" value="0"    hidden>



  <!-- holds item data for final upload   --> 

 <input  id="upload1" value=" " hidden> 
 <input  id="upload2" value=" " hidden> 
 <input  id="upload3" value=" " hidden> 
 <input  id="upload4" value=" " hidden> 
 <input  id="upload5" value=" " hidden> 
 <input  id="upload6" value=" " hidden> 
 <input  id="upload7" value=" " hidden> 
 <input  id="upload8" value=" " hidden> 
 <input  id="upload9" value=" " hidden> 
 <input  id="upload10" value=" " hidden> 
 <input  id="upload11" value=" " hidden> 
 <input  id="upload12" value=" " hidden> 
 <input  id="upload13" value=" " hidden> 
 <input  id="upload14" value=" " hidden> 
 <input  id="upload15" value=" " hidden> 
 <input  id="upload16" value=" " hidden>


  <input  id="uploadtype1" value="0" hidden> 
 <input  id="uploadtype2" value="0" hidden> 
 <input  id="uploadtype3" value="0" hidden> 
 <input  id="uploadtype4" value="0" hidden> 
 <input  id="uploadtype5" value="0" hidden> 
 <input  id="uploadtype6" value="0" hidden> 
 <input  id="uploadtype7" value="0" hidden> 
 <input  id="uploadtype8" value="0" hidden> 
 <input  id="uploadtype9" value="0" hidden> 
 <input  id="uploadtype10" value="0" hidden> 
 <input  id="uploadtype11" value="0" hidden> 
 <input  id="uploadtype12" value="0" hidden> 
 <input  id="uploadtype13" value="0" hidden> 
 <input  id="uploadtype14" value="0" hidden> 
 <input  id="uploadtype15" value="0" hidden> 
 <input  id="uploadtype16" value="0" hidden>

 <!-- holds item data for final upload   --> 


   
    <div class="col-xs-12 "   style="padding:0px"> 




 <!-- holds view item canvas width height -->

<div id="viewitemdimensionsw"  class="col-xs-12 col-sm-6"  style="position:fixed;top:9em;"></div>
<div id="viewitemdimensionsh"   style="position:fixed;top:9em;height:80%;"></div>

  <!-- holds view item canvas width height -->





       


                   
 <style>  

        progress[value]{ 
           -webkit-appearance:none; 
            -moz-appearance:none;
             appearance:none;
            width:95%;-moz-box-shadow: 0 0 1px#000; -webkit-box-shadow: 0 0 1px#000;box-shadow: 0 2px 5px rgba(0,0,0,0.25)inset; border: 1px solid #cccccc;height:8px;border-radius:4px;color:#0b1728;background-color:#ffffff;border:none;}

        progress[value]::-webkit-progress-bar{
        width:100%;-moz-box-shadow: 0 0 1px#000; -webkit-box-shadow: 0 0 1px#000;box-shadow: 0 2px 5px rgba(0,0,0,0.25)inset; border: 1px solid #cccccc;height:8px;border-radius:4px;color:#ffffff;background-color:#ffffff}  

        
        progress[value]::-moz-progress-bar{
            background-image: -moz-linear-gradient(135deg,transparent 33%,rgba(0,0,0, 0.1) 33%,rgba(0,0,0, 0.1)66%,transparent 66%),
            -moz-linear-gradient(top,rgba(255,255,255, 0.25),rgba(0,0,0, 0.25)),  
          -moz-linear-gradient(left,<?php echo  $_SESSION['cl']; ?>,<?php echo  $_SESSION['cl']; ?>);
               background-size: 35px 20px, 100% 100%,100% 100%; 
              border-radius:4px;} 

          progress[value]::-webkit-progress-value{
            background-image: -webkit-linear-gradient(-45deg,transparent 33%,rgba(0,0,0, 0.1) 33%,rgba(0,0,0, 0.1) 66%,transparent 66%), 
                -webkit-linear-gradient(top,rgba(225,225,225, 0.25),rgba(0,0,0, 0.25) ), 
                -webkit-linear-gradient(left,<?php echo  $_SESSION['cl']; ?>,<?php echo  $_SESSION['cl']; ?>);background-size: 35px 20px, 100% 100%,100% 100%;border-radius:4px;}     
     
      .zuperm{text-shadow: 1px 1px 1px #000000;color: #ffffff;margin-left:17px;padding:3px;}

      #lalax{background-color:#ffffff;color:#000000; padding: 5px; border-bottom-left-radius:4px; border-top-left-radius:4px; -moz-box-shadow: 0 0 5px<?php  echo  $_SESSION['cl'];  ?>; -webkit-box-shadow: 0 0 5px<?php  echo  $_SESSION['cl'];  ?>;box-shadow: 0 0 5px<?php  echo  $_SESSION['cl'];  ?>; }

#lalax:hover{ padding: 5px; color:#555555;}


            .put{background-color:#cccccc}
    
            #ivx{ color: #ffffff}
            
            #zoob{ color: #ffffff}

  </style>
                 
              
           








<div class="col-xs-hidden col-sm-1 col-md-1  "   style=" "> </div>
 
 
<div class="  col-xs-12 col-sm-10 col-md-10  za tur" style="overflow:auto;height:100em;border-top-left-radius:10px;
 border-top-right-radius:10px;padding:0px;">
          
        


     <div class="col-xs-12   "   style="position:absolute;top:0em;z-index:20;padding:0px">  
   <div class="col-xs-2 col-sm-1 boxonhover za zuzax"  onclick="document.getElementById('addpoo').style.display='none'" style="margin-top:3.5px;font-size:150%;float:left;text-align:center;margin-left:4px"><span  class="juju">   <i class="fas fa-arrow-left" aria-hidden="true"></i></span> </div> 
          <div class="col-xs-1 col-sm-3">  </div>
    <div class="col-xs-6  col-sm-4 " style="margin-top:17px;text-align:center;" >  <span  style="font-weight:bold;font-size:120%"><vvpandi>UPLOAD</vvpandi></span> </div> 
            <div class="col-xs-3 col-sm-4">   </div>  
 </div>  


    

        

  <div class="col-xs-12"   style="position:absolute;top:0em;z-index:24;padding:0px;height:0px;margin-left:-4px"> 

   <div class=" col-xs-3  col-sm-1"   id="holdtexttop"  style="padding:0px;text-align:right;float:right;">
      <div class="col-xs-12 "  style="padding:0px;text-align:center;" >   
<span class="underlineimportantbuttons zuzax juju col-xs-12 "   style="padding:0px;left:2.5px"   onclick="javascript:textactivate();"> 
  <div class="col-xs-12"  id="t1hideicon"  style="padding:0px;height:45px;font-size:160%;color:#ffd833;margin-top:5px">
<i class="fas fa-pencil-alt"></i></div>
    <div class="col-xs-12"  id="t1hide" style="padding:0px;display:none;">  
<img src="images/icontext.png"  id="t1" class="turicon" style="border-radius:60px;padding:2px;margin-top:4px"  height="auto" width="45px" /> </div>
         <div class="col-xs-12"   style="padding:0px">  
           <span style="font-weight:bold;font-size:12px;color:#000000">  </span>    </div>
          <div class="col-xs-12"   style="padding:3px"> </div></span>
      </div></div> 


   <div class=" col-xs-3  col-sm-1"   id="holdlogotop"  style="padding:0px;text-align:left;float:left;visibility:hidden;">
      <div class="col-xs-12 "  style="padding:0px;text-align:center;" >   
<span class="underlineimportantbuttons zuzax juju col-xs-12 "   style="padding:10px;left:2.5px"   onclick="javascript:textclear();"> 
    <div class="col-xs-12"   style="padding:0px">  
 <img src="images/sp2.png" class=""     height=24  width=auto/> </div></span>
      </div></div> 

<vvpandi> <div class="col-xs-5 col-sm-3   za " id="pentty"  style="margin-top:16px;font-weight:bold;font-size:90%; text-align:right;float:right;display:none;"> </div> </vvpandi>

      </div>



   <div class="col-xs-12 zaz "   style=" ">  </div>   
              



<!-- + UPLOAD OPTIONS START -->


          
<div class="col-xs-12  " id="uploadoptions"  style="top:6.5em;padding:0px;height:auto" >
<div class="col-xs-hidden col-sm-2 " > </div>
<div class="col-xs-12 col-sm-8 "  style="border-radius:6px;height:20%;padding:0px ">
<vvpandi>
<div class="col-xs-12  col-sm-12"  id="launchbox" style="margin:auto;text-align:center;padding:0px;"> 




  <div class=" col-xs-3  col-sm-3"  style="padding:0px">
<div class="col-xs-12 "  style="padding:0px;"> 
<a  href="superphoto.php"   target="_blank"  class="underlineimportantbuttons zuzax juju col-xs-12"  style="padding:7px;"> 
  <div class="col-xs-12"  id="t2hideicon"  style="padding:0px;height:45px;font-size:160%;color:#10223d;">
<i class="fas fa-star"></i></div>
  <div class="col-xs-12"  id="t2hide" style="padding:0px;margin-top:1px;display:none;">  
      <span  class="zuperxy" style="margin-left:-4px;margin-top:-11px;font-size:12px;border-radius:30px;background-color:#10223d;background-color:<?php echo $back1; ?>;<?php echo $back1shadow; ?>;padding-bottom:2px;padding-left:5px;padding-right:6px;padding-top:5px;position:absolute;"><i class="fas fa-sync-alt"></i></span>
  <img src="images/iconsp.png"  id="t2"  style="border-radius:60px;padding:0px;"  height="auto" width="46px" /> </div>
         <div class="col-xs-12"   style="padding:0px;margin-top:10px">  
           <span  id="editman" style="font-weight:bold;font-size:87%;color:#222222;visibility:hidden;"> Photo editor
               </span>    </div>
           <div class="col-xs-12"   style="padding:0px"> </div>   </a>
      </div></div>





      <div class=" col-xs-3 col-sm-3"  style="padding:0px">
       <form  class=" col-xs-12"  style="padding:7px"  method="post" id="vermin">   
    <div class="col-xs-12"   style="padding:0px;" >
   <span class="col-xs-12 underlineimportantbuttons zuzax juju"   style="padding:0px;" > 
    <label  class="zuzax col-xs-12" for="imx" style="padding:0px">
       <div class="col-xs-12"  id="t3hideicon"  style="padding:0px;height:45px;font-size:160%;color:#57cc94">
<i class="fas fa-image"></i></div>
      <div class="col-xs-12"  id="t3hide"  style="padding:0px;display:none;">  
        <span  class="zuperxy" style="margin-left:-4px;margin-top:-9px;font-size:15px;border-radius:30px;background-color:#57cc94;background-color:<?php echo $back1; ?>;<?php echo $back1shadow; ?>;padding-bottom:1px;padding-left:7px;padding-right:8px;padding-top:1px;position:absolute;">8</span>
      <img src="images/iconimage.png"  id="t3"  class="turicon" style="border-radius:60px;padding:2px;margin-top:4px"  height="auto" width="45px" /></div>
      <div class="col-xs-12"   style="padding:0px;margin-top:11px">  
        <span class="" id="photoman" style="font-weight:bold;font-size:87%;color:#222222;visibility:hidden;">Image upload</span></div></label> </span> 
      </div>
   <input type="file"  enctype="multipart/form-data"  method="post" name="re[]" id="imx"  accept="image/*"   multiple="multiple">   </form></div>
<style type="text/css"> #imx{display:none;}  </style>




  <div class=" col-xs-3  col-sm-3"  style="padding:0px">
      <div class="col-xs-12 "  style="padding:7px;" >   
<span class="underlineimportantbuttons zuzax juju col-xs-12 "   style="padding:0px" onclick="javascript:textactivate();"> 
   <div class="col-xs-12"  id="t4hideicon"  style="padding:0px;height:45px;font-size:160%;color:#8dacff">
<i class="fas fa-video"></i></div>
    <div class="col-xs-12"  id="t4hide" style="padding:0px;display:none;">  
       <img src="images/iconvideo.png" id="t4"  class="turicon" style="border-radius:60px;padding:2px;margin-top:4px"  height="auto" width="45px" /> </div>
         <div class="col-xs-12"   style="padding:0px;margin-top:11.5px">  
           <span id="videoman" style="font-weight:bold;font-size:87%;color:#222222;visibility:hidden;opacity:0.4"> Video</span>    </div>
          <div class="col-xs-12"   style="padding:3px"> </div></span>
      </div></div>



  <div class=" col-xs-3  col-sm-3"  style="padding:0px">
      <div class="col-xs-12 "  style="padding:7px;" >   
<span class="underlineimportantbuttons zuzax juju col-xs-12 "   style="padding:0px"   onclick="javascript:textshoc();"> 
     <div class="col-xs-12"  id="t5hideicon"  style="padding:0px;height:45px;font-size:160%;color:#bd6ae5">
 <i class="fas fa-moon"></i></div>
    <div class="col-xs-12"  id="t5hide"  style="padding:0px;display:none">  
       <span  class="zuperxy" style="margin-left:-4px;margin-top:-9px;font-size:12px;border-radius:30px;background-color:#bd6ae5;background-color:<?php echo $back1; ?>;<?php echo $back1shadow; ?>;padding-bottom:2px;padding-left:6px;padding-right:6px;padding-top:5px;position:absolute;"><i class="fas fa-sync-alt"></i></span>
       <img src="images/icongif.png" id="t5" class="turicon" style="border-radius:60px;padding:2px;margin-top:4px"  height="auto" width="45px" /> </div>

         <div class="col-xs-12"   style="padding:0px;margin-top:11.5px">  
           <span id="gifman" style="font-weight:bold;font-size:87%;color:#222222;visibility:hidden;"> Gif creator</span>    </div>
          <div class="col-xs-12"   style="padding:3px"> </div>  </span>
      </div></div>


   </div></vvpandi></div> </div>






      <div class="col-xs-12 "  id="uploadslider"   style="top:4.5em;padding:0px;display:none;">  
      <div class="col-xs-hidden col-sm-1 " > </div>
      <div class="col-xs-12 col-sm-10 " style="padding:0px;height:20%;border-radius:6px;" > 
     <progress    id="progress" value="0" max="100"  style="margin-top:10%;margin-left:2%"  > </progress>
    <span><vvpandi>
  <div class="col-xs-12" style="height:10px;position:absolute;">
  <div class="col-xs-3  col-sm-4"></div> 
  <div class="col-xs-6  col-sm-4"   style="font-weight:bold;text-align:center; border-radius:4px;margin-top:10px;">
   <span  id="penttclock" style="display:none;font-size:100%;color:<?php echo $_SESSION['cl']; ?>">  
    <i class="fas fa-circle-notch fa-spin"></i>  </span> 
   <span  id="penttdone" style="display:none;font-size:100%;color:<?php echo $_SESSION['cl']; ?>"><i class="fa fa-check" aria-hidden="true"></i></span> 
   <span  id="pentt" style="font-size:90%;">  </span> </div>
   <div class="col-xs-3  col-sm-4"></div></div> 
     </vvpandi></span>
     </div>
      <div class="col-xs-hidden col-sm-1 " > </div>
      </div>
             
             

<!-- + UPLOAD OPTIONS START -->


          
          
           




<!-- + error for uploads  library/ database problems -->         

 <div class="col-xs-12 "  id="errordescribe"   style="display:none;height:auto;position:absolute;top:4em;z-index:32;color:#000000;margin:auto;border-radius:8px;padding:0px"> 
<div class="col-xs-hidden  col-sm-2 "   style=""> </div>

<div class="col-xs-12  col-sm-8 tur"   style="border-radius:8px;padding:0px;background-color:<?php echo $vt;?>;padding-top:10px"> 

<div  class="col-xs-12 za"   style="padding:0px" >
    <div  class="col-xs-10 col-sm-5 zuperxy "   style="font-size:130%;margin-top:3px;padding:0px" >  
          <div style="margin-left:5.5px"> <span  style="color:<?php echo $_SESSION['cl']; ?>;font-weight:bold;">!! <vvpandi>
           <span  style="color:#ffffff;font-weight:bold;"> Something went wrong 
           </span> </vvpandi> </span> </div>
        </div> 
      <div  class="col-xs-hidden  col-sm-6 za zuperxy" >   </div> 
    <div  class="col-xs-2 col-sm-1 zuzax juju  boxonhover"   onclick="javascript:clearerrorscribe();"   style="text-align:center;color:<?php echo $vtb;?>;border-radius:5px;font-size:150%;padding:0px" >  
    <i class="fas fa-window-close"></i> </div></div>  

              <div class="col-xs-12 zaz"> </div>
              <div id="ivx"  class="zuzax  " style="color:#000000;margin:auto"> </div>     
              <div id="ivx1"  class="zuzax  "   style="color:#000000;margin:auto"></div>  
              <div id="ivx2"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx3"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx4"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx5"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx6"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx7"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
              <div id="ivx8"  class="zuzax  "   style="color:#000000;margin:auto"> </div>  
             </div>
    </div>

   <!-- + error for uploads  library/ database problems -->        
         
    

          
          

           <div class="col-xs-12  za"> </div>
         
          
          
          
           <!--
            documentaion for order  because it involves many pages

        **info holder 2 of 7 in orderpop.php && undodetail.php

        ** undo detail back arrow undoorder.php

           documentaion for order  because it involves many pages
            -->
          
      


     <!-- UNDO START UNDO ORDER  START UNDO ORDER  -->
          
    
    <div class="zuperxy col-xs-12 "     id="cover"  style="background-color:#ffffff;padding:0px;text-align:center;position:absolute;z-index:3;width:100%;height:100%">   </div>  
          
     <div class="col-xs-12"   id="killerbeezzzx"> 
             
          <!-- Reset order process  -->
        <div class="zuperxy   col-xs-12   zuzax"    id="recanxxt"   style="color:<?php  echo   $_SESSION['cl'];  ?>;padding:0px;text-align:center;font-size:30px;margin-top:-12px;">
          <span class="juju"   onclick="javascript:zoo(1);">  <i class="fas fa-undo-alt"></i>  </span></div>
       <!-- Reset order process  --> 


                <div class="zuperxy  col-xs-4"    style="margin-top:-10px"> 
                    
             <!-- cancel order process  --> 
            <div class="zuperxy  col-xs-2  zuzax"  onclick="javascript:canzo();" id="canxxt"  style="padding:0px">
             <span  class="juju" style="font-size:30px;margin-left:-25px;"><b> <i class="fas fa-window-close" aria-hidden="true"></i></b> </span> </div>
             <!-- cancel order process  -->  

                  </div> 
               
                
                

      <div class="zuperxy  col-xs-4 "   style="text-align:center;font-size:12px;margin-top:-10px">
              

     <!-- accept order  --> 
 <div class="zuperxy   col-xs-12   zuzax"       id="swint"   style="color:<?php  echo   $_SESSION['cl'];  ?>;padding:10px;text-align:center;font-size:40px;position:absolute;margin-top:-12px;margin-left:-15px;">
          <span class="juju"   onclick="javascript:zoo(0);"   > <i class="fas fa-arrows-alt-h" aria-hidden="true"></i></span></div>
     <!-- accept order  --> 


<style type="text/css">#ref{
   -webkit-touch-callout: none;
   -webkit-user-select: none;
   -khtml-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}
#ref::-moz-selection {
   background: transparent;
}
#ref::selection { 
   background: transparent; 
}</style>
            <!-- info holder --> 
      <div class="zuperxy  col-xs-12 "  id="ref" style="padding:0px;text-align:center;margin-top:5.5px"></div>
            <!-- info holder --> 
                    
                    
        </div></div>



<!-- UNDO START UNDO ORDER  START UNDO ORDER  -->
          
          
          












  <div id="sateout">             
 <div  id="sate" class="col-xs-12 " style="position:relative;margin-top:100px;min-height:180px;border-top-left-radius:8px;
 border-top-right-radius:8px; z-index:0;padding:0px; background-color:transparent; overflow-x:auto; overflow-y:hidden; white-space:nowrap">


<div class="ppe"  style=" display:inline-block; vertical-align:middle;">  
<div id="kung1" class=""   style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
<span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 1 </h4> </span></div> </div>  
     
     
     <div class="ppe"  style=" display:inline-block; vertical-align:middle;"> 
    <div class=""   id="kung2"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center;" > 
      <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 2 </h4></span></div> </div>  
     
     
     
     <div class="ppe"  style=" display:inline-block; vertical-align:middle;">
   <div class=""  id="kung3"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
    <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 3 </h4></span></div> </div>  
     
     
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung4"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
    <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 4 </h4></span></div> </div>  
     
     
    
    <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung5"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
    <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 5 </h4></span></div> </div>  
     
     
     
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung6"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
          <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 6 </h4></span></div> </div> 
     
     
      <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  
      <div class=""   id="kung7"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
          <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 7 </h4></span></div> </div>  
     
     
     
    <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung8"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
      <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 8 </h4></span></div> </div> 
     
     
    
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung9"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
          <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 9 </h4></span></div> </div>   
     
     
    
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung10"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
        <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 10 </h4></span></div> </div>
     
     
     
    <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung11"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
      <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 11 </h4></span></div> </div>  
     
     
     
    <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""  id="kung12"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
          <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 12 </h4></span></div> </div>  
     
     
     
    <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""   id="kung13"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
      <span  style="margin-top:15px;color:#cccccc"> <br>  <br><h4> 13 </h4></span></div> </div> 
     
     

     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""  id="kung14"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
    <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 14 </h4></span></div> </div> 
     
     
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class="" id="kung15"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
      <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 15 </h4></span></div> </div>  
     
     
     
     <div class="ppe "  style=" display:inline-block; vertical-align:middle;">  <div class=""  id="kung16"  style="border-radius:5px;height:auto;width:120px;margin:auto;text-align:center" > 
      <span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> 16 </h4></span></div> </div> 
     
     
     </div>

      <div class="col-xs-12  zazp"   > </div>
        
           <div class="col-xs-4 col-sm-5"> 
<div class="zuperxy zuzax juju"    id="refreshoh"  style="float:left;font-size:25px;margin-left:10px;margin-top:3px">
           <i class="fas fa-sync-alt"></i>  </div>

            <!-- go back undo detailed one post at a time -->
     <div id="manxt"   class="col-xs-2">

  <div class="zuperxy   col-xs-12   "     id="tii1"  style="padding:0px;text-align:center;position:absolute;z-index:3;"> </div>  
          
    <div class="zuperxy   col-xs-12   "     id="tii2"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
      
  <div class="zuperxy   col-xs-12   "     id="tii3"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii4"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
        
  <div class="zuperxy   col-xs-12   "     id="tii5"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii6"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii7"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii8"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii9"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii10"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii11"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii12"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii13"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii14"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii15"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
  <div class="zuperxy   col-xs-12   "     id="tii16"  style="padding:0px;text-align:center;position:absolute;z-index:3;"></div>
           
          </div>
          
           </div>

<div class="col-xs-4 col-sm-2 zuzax superbuttons" onclick="javascript:finishedlibrary();" id="continueoh" style="font-size:100%" >
       Continue </div>

        <div class="col-xs-4 col-sm-5  "   ><div class="zuperxy zuzax juju"  id="orderoh"  onclick="javascript:terdy();" 
 style="float:right;font-size:35px;margin-right:10px;margin-top:-2px">
          <i class="fas fa-arrows-alt-h" aria-hidden="true"></i>  </div>  </div>
        </div>



<div class="col-xs-12  zazp">  </div>
         
     
      </div> 
  <div class="col-xs-hidden col-sm-3  "   style=" ">  </div>   





     
       



                   
            <div class="col-xs-12  zaz"   style="text-align:center "> </div>
          
          <div class="col-xs-12 za  "   id="" style="text-align:center;position:fixed;bottom:2em">
              
                   <div class="col-xs-4 col-sm-5  "   > 
                    <p>  </p>
              
                      <input  name="n" id="ref1"  value="1" hidden >  
                        <input  name="n" id="pos1" value="1" hidden >   
                       <input  name="n" id="des1"  value="1"hidden > 
                       
                       <p>
                             <input  name="n" id="ref2" value="2" hidden >  
                       <input  name="n" id="pos2" value="2" hidden >   
                       <input  name="n" id="des2" value="2" hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref3" value="3" hidden >  
                       <input  name="n" id="pos3" value="3" hidden >   
                       <input  name="n" id="des3" value="3" hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref4" value="4"hidden  >  
                       <input  name="n" id="pos4" value="4"hidden  >   
                       <input  name="n" id="des4" value="4" hidden > 
                       
                       </p>  
              
              
                          <input  name="n" id="ref5" value="5"hidden  >  
                        <input  name="n" id="pos5" value="5"hidden  >   
                       <input  name="n" id="des5" value="5" hidden > 
                       
                       <p>
                             <input  name="n" id="ref6" value="6"hidden  >  
                       <input  name="n" id="pos6" value="6"hidden  >   
                       <input  name="n" id="des6" value="6"hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref7" value="7"hidden  >  
                       <input  name="n" id="pos7" value="7"hidden  >   
                       <input  name="n" id="des7" value="7" hidden> 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref8" value="8"hidden  >  
                       <input  name="n" id="pos8" value="8"hidden  >   
                       <input  name="n" id="des8" value="8" hidden > 
                       
                       </p>  
                       
                      <input  name="n" id="ref9" value="9"hidden  >  
                        <input  name="n" id="pos9" value="9"hidden  >   
                       <input  name="n" id="des9" value="9" hidden> 
                       
                       <p>
                             <input  name="n" id="ref10" value="10"hidden  >  
                       <input  name="n" id="pos10" value="10"hidden  >   
                       <input  name="n" id="des10" value="10" hidden> 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref11" value="11"hidden  >  
                       <input  name="n" id="pos11" value="11" hidden >   
                       <input  name="n" id="des11" value="11"hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref12" value="12"hidden  >  
                       <input  name="n" id="pos12" value="12"hidden  >   
                       <input  name="n" id="des12" value="12"hidden > 
                       
                       </p>  
              
              
                          <input  name="n" id="ref13" value="13" hidden >  
                        <input  name="n" id="pos13" value="13" hidden >   
                       <input  name="n" id="des13" value="13" hidden > 
                       
                       <p>
                             <input  name="n" id="ref14" value="14"hidden  >  
                       <input  name="n" id="pos14" value="14" hidden >   
                       <input  name="n" id="des14" value="14"hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref15" value="15" hidden >  
                       <input  name="n" id="pos15" value="15" hidden >   
                       <input  name="n" id="des15" value="15" hidden > 
                       
                       </p>
                           <p>
                             <input  name="n" id="ref16" value="16" hidden >  
                       <input  name="n" id="pos16" value="16" hidden >   
                       <input  name="n" id="des16" value="16" hidden> 
                       
                       </p>  
                       
              
              
                
                       
                 
                       <div id="tbb"> </div>  
                          <div id="startordersh"> </div>  
                           <div id="canod"> </div>  
                       
     
         
              </div>
              
           
     
          
          
          </div>



  <div  id="textslotholder"  class="col-xs-12"  style="background-color:<?php echo $rijdd; ?>; z-index:23;position:fixed;top:0em;padding:0px;height:100%;visibility:hidden;">
                        

            <div  id="textslot"  class="col-xs-12  tur"   style="height:100%;padding:0px">


          <div   class="col-xs-12"  style="height:15%"></div> 


 <!--   text background selector    text background selector   text background selector-->
<div   class="col-xs-hidden col-sm-3"  style=""></div>   
 <div class=" col-xs-12 col-sm-6 "    style="height:13%;padding:0px">

            
 <div  id="textfate" class="col-xs-12" style="position:relative;height:auto;border-top-left-radius:8px;
 border-top-right-radius:8px;padding:0px; background-color:transparent; overflow-x:auto; overflow-y:hidden; white-space:nowrap;padding-bottom:15px;padding-top:2px ">

     
     <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon zuzax textblue" onclick="javascript:textbackgroundapplyblue();"  style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  

  <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textwhite"  onclick="javascript:textbackgroundapplywhite();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  

 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon zuzax  textblood" onclick="javascript:textbackgroundapplyblood();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  



<div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textlightblue" onclick="javascript:textbackgroundapplylightblue();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  





 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textgray" onclick="javascript:textbackgroundapplygray();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  

 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textpurple" onclick="javascript:textbackgroundapplypurple();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  


 
<div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textlightcream" onclick="javascript:textbackgroundapplycream();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  



 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textpink" onclick="javascript:textbackgroundapplypink();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  



 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textblack" onclick="javascript:textbackgroundapplyblack();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>






 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textorange"  onclick="javascript:textbackgroundapplyorange();"  style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  

 <div   style="display:inline-block;vertical-align:middle;width:20%">  
<div class="turicon  zuzax textlemon" onclick="javascript:textbackgroundapplylemon();" style="border-radius:60px;height:42px;width:42px;margin:auto;text-align:center;">
 </div></div>  









     
     </div>
      </div>  
    <div   class="col-xs-hidden col-sm-3"  style=""></div> 
  <!--   text background selector   text background selector   text background selector -->  


                    <div   class="col-xs-12"></div> 
                                       <div   class="col-xs-hidden col-sm-3"  style=""></div>      
          
          <div class="col-xs-12 col-sm-6 form-group  "   id="tytext"  style="padding:0px;height:auto;border-radius:4px;">
                                  
 

                <div class="tur col-xs-3 col-sm-2 zuzax zuperxy  juju "  onclick="javascript:textactivate();"  style="border-top-right-radius:5px;height:33px;float:right;background-color:<?php echo $rijxx; ?>;text-align:center;font-size:22px;display:none;">  <div style="margin-top:6px">  <i class="far fa-window-close"></i></div>   </div>

                 <div class="tur col-xs-3 col-sm-2  zuzax juju zuperxy"  onclick="javascript:der();"   style="text-align:center;border-radius:0px;height:33px;float:right;background-color:<?php echo $rijxx; ?> ;display: none ">
               <div style="margin-top:5px;font-size:22px">   <i class="fas fa-eraser" aria-hidden="true"></i>
               </div> </div>


        <div  style="height:19em">
  <textarea  class="form-control tur textwhite sliderlook"  spellcheck="false" onkeyup="javascript:pregtext();"   style="border:none;height:100%;width:100%;border-radius:0px;border-top-right-radius:5px;border-top-left-radius:5px;font-size:100%;overflow:auto;padding:0px;font-weight:bold;padding:10px;text-align:center;"  id="talkz" placeholder="Share Your Thoughts "></textarea> </div>

<div id="talkzdone" class="textwhitedone  col-xs-12 zuzax juju  zuperxy "   onclick="javascript:ker();"  style="text-align:center;
       height:38px;float:right;"><div style="margin-top:4.5px;font-size:25px">  <i class="fa fa-check" aria-hidden="true" ></i>  </div> </div> 

      
 
                  
           </div>  <div id="teacher"  style="z-index:3;position:relative;margin-top:180px " >    
                        
                

     </div> </div></div>
          
            <div class="col-xs-12  zazp "   style="text-align:center ">  </div>
         
    
          
        





<style type="text/css">
.turtopic{height: auto; background-color: #ffffff; -moz-box-shadow: 0 0 5px#cccccc;-webkit-box-shadow: 0 0 5px#cccccc;box-shadow: 0 0 5px#cccccc;}
</style>



<!-- Finished post caption ,topic hastags  -->


<div class="col-xs-12"   id="finalfinishpostback"   style="padding:0px;position:fixed;z-index:59;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $libraryitemviewbackground; ?>;display:none"></div>



  <div class=" col-xs-12"  id="finalfinishpost" style="padding:0px;position:fixed;top:7em;z-index:60;display:none">
      <div class="col-xs-hidden col-sm-4"  style="padding:0px"> </div>

<div class="col-xs-12 col-sm-4 tur"  style="padding:0px;border-radius:8px;height:auto;">

<div class=" col-xs-3 "></div>

 <div class=" col-xs-6  form-group  "   style="text-align:center;padding:0px;margin-top:25px">     <div class="turtopic"   style="width:100%;text-align:center;margin:auto;border-radius:6px;padding:0px;">    <input type="text"  class="form-control"   style="border:none;border-radius:3px;text-align:center;padding:0px;font-weight:bold;color:#000000"   name="tupick" id="topicxx" placeholder="TOPIC"> </div></div> 

<div class="col-xs-3"  style="font-size:155%;;margin-top:18px;text-align:center">
         <span class="boxonhover zuperxy zuzax juju"  onclick="javascript:cancelfinishedlibrary();"style="padding:10px;padding-top:5px;padding-bottom:5px"><i class="fas fa-hand-pointer"></i>  </span> </div>

<div class="col-xs-12 zaz" > </div>
<div class="col-xs-12 zaz" > </div>

<textarea  spellcheck="false"  onkeyup="javascript:pregtext();"   style="border:none;height:100px;width:100%;border-radius:0px;border-top-right-radius:5px;border-top-left-radius:5px;font-size:100%;overflow:auto;padding:0px;font-weight:bold;padding:10px;"  id="captionxx" placeholder=" Add Caption "></textarea>

<div class="col-xs-12 zaz" > </div>
<div class="col-xs-12 zazp" > </div>

<div class="col-xs-12"   style="padding:0px">
<div class="col-xs-4" > </div>
<div class="col-xs-4 zuzax superbuttons"  onclick="javascript:postlibrary();"  style="font-size:100%;">Continue</div>
<div class="col-xs-4" > </div></div>

<div class="col-xs-12 zazp" > </div>
</div> 
<div class="col-xs-hidden col-sm-4"  style="padding:0px"></div>

 </div> 


<!-- Finished post caption ,topic hastags  -->











<!-- view image item pop canvas  -->

<div class="col-xs-12 zuzax"   onclick="javascript:clearitemviewtxt();"  id="showviewitembacktext"   style="padding:0px;position:fixed;z-index:49;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $libraryitemviewbackground; ?>;display:none"></div>



<div class="col-xs-12"  id="showviewitemtext"  style="padding:0px;position:fixed;z-index:50;display:none;height:0px;top:0em">

<div  class="col-xs-12"  style="padding:0px;height:50px"> </div>  

   <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  
    <div  class="col-xs-12 col-sm-6 zuzax"  id="delitext"  style="padding:0px" > 
 <div  class="juju zuperxy boxonhover"   onclick="javascript:deleteitem(0);"  style="padding:20px;position:absolute;right:1px;z-index:1;font-size:30px"> 
 <i class="fas fa-trash"></i> </div></div>
 <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  

 <div  class="col-xs-12"  style="padding:0px;"> </div> 


   <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  


<div class="sliderlook col-xs-12 col-sm-6  zuzax"  id="holderadditemtext"  onclick="javascript:clearitemviewtxt();"
style="padding:0px;height:25em;margin-top:50px;text-align:center;overflow:auto;border-radius:6px;justify-content:center;">

<div  id="additemtext"  class="zuzax" onclick="javascript:clearitemviewtxt();"  style="padding:10px;text-align:center;">



 </div></div>
  <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"></div>

   </div> 



<div class="col-xs-12 zuzax"   onclick="javascript:clearitemview();"  id="showviewitemback"   style="padding:0px;position:fixed;z-index:49;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $libraryitemviewbackground; ?>;display:none"></div>


<div class="col-xs-12"  id="showviewitem"  style="padding:0px;position:fixed;z-index:50;display:none;height:0px;top:0em">

<div  class="col-xs-12"  style="padding:0px;height:50px"> </div>  

   <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  
    <div  class="col-xs-12 col-sm-6 zuzax"   style="padding:0px" > 
 <div  class="juju zuperxy boxonhover"  id="delicanv"  onclick="javascript:deleteitem(1);"  style="padding:20px;position:absolute;right:1px;z-index:1;font-size:30px"> 
 <i class="fas fa-trash"></i> </div></div>
 <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  

 <div  class="col-xs-12"  style="padding:0px;"> </div> 

   <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"> </div>  
<div  class="col-xs-12 col-sm-6 zuzax"  onclick="javascript:clearitemview();"  style="padding:0px" > 
<div  style=" width: 100%; text-align: center; padding: 0px ;outline-style: none; ">
<canvas class="zuzax" id="viewitem"  onclick="javascript:clearitemview();"    style="display:inline;" ></canvas> </div></div>
  <div  class="col-xs-hidden  col-sm-3"  style="padding:0px;height:0px"></div>

   </div> 







<div id="popitemcanvas">  </div>


<div id="killitemcanvas">  </div>

<div id="finalspace"> </div>

<!-- view image item pop canvas  -->










   
  <div class="col-xs-12 zuzax"  id="errorinfo" onclick="javascript:cloerrorinfo();" style="display:none;height:25%;position:fixed;z-index:34;padding:0px;top:4em;"> </div> 
<div class="col-xs-12 zuzax "   id="errorinfoback"   onclick="javascript:cloerrorinfo();"   style="padding:0px;position:fixed;z-index:33;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $libraryitemviewbackground; ?>;display:none"></div>

    

<div class="col-xs-12  tur"  id="imageuploadover8" style="display:none;height:0px;position:fixed;z-index:31;padding:0px;top:4em;">

  </div>




  
<div  class="col-xs-12 zuzax"   id="texterrorinfo"  onclick="document.getElementById('texterrorinfo').style.display='none'" 
 style="display:none;height:25%;position:fixed;z-index:42;padding:0px;top:5em;">


<div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"    style="background-color:<?php echo $vt; ?>;border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  <span>  Text Length </span> </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
         <span   style="color:red;font-weight:bolder">Please Reduce Text Length </span>
          <span  style="color:<?php echo $vtb; ?>" ><b> ,Thank You   </b> </span>  
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 



    </div>





 <!-- activates javascript below -->
<div id="furtext"></div> 
<!-- activates javascript below -->

                
</div>      
    


<div class="col-xs-hidden col-sm-1 col-md-1"> </div>
 
                    
           </div> 


      <script src="tools/js/jquery-3.3.1.min.js"></script>      

      <script>
 function cloerrorinfo(){$("#errorinfo").hide();  $("#errorinfoback").hide();}
</script>      
                       
                       <script>function zoo(acc){
    
    
var a= $("#ref1").val(); 
 var b= $("#pos1").val();
var c= $("#des1").val();   
                               
                               
var d= $("#ref2").val(); 
 var e= $("#pos2").val();
var f= $("#des2").val();  
                               
                               
var g= $("#ref3").val(); 
 var h= $("#pos3").val();
var i= $("#des3").val(); 
                                 
var j= $("#ref4").val(); 
 var k= $("#pos4").val();
var l= $("#des4").val();
                   
                               
var aa= $("#ref5").val(); 
 var ba= $("#pos5").val();
var ca= $("#des5").val();   
                               
                               
var da= $("#ref6").val(); 
 var ea= $("#pos6").val();
var fa= $("#des6").val();  
                               
                               
var ga= $("#ref7").val(); 
 var ha= $("#pos7").val();
var ia= $("#des7").val(); 
                                 
var ja= $("#ref8").val(); 
 var ka= $("#pos8").val();
var la= $("#des8").val(); 
                               
                               
var ab= $("#ref9").val(); 
 var bb= $("#pos9").val();
var cb= $("#des9").val();   
                               
                               
var db= $("#ref10").val(); 
 var eb= $("#pos10").val();
var fb= $("#des10").val();  
                               
                               
var gb= $("#ref11").val(); 
 var hb= $("#pos11").val();
var ib= $("#des11").val(); 
                                 
var jb= $("#ref12").val(); 
 var kb= $("#pos12").val();
var lb= $("#des12").val();
                   
                               
var aab= $("#ref13").val(); 
 var bab= $("#pos13").val();
var cab= $("#des13").val();   
                               
                               
var dab= $("#ref14").val(); 
 var eab= $("#pos14").val();
var fab= $("#des14").val();  
                               
                               
var gab= $("#ref15").val(); 
 var hab= $("#pos15").val();
var iab= $("#des15").val(); 
                                 
var jab= $("#ref16").val(); 
 var kab= $("#pos16").val();
var lab= $("#des16").val(); 
                               
     var nmx= $("#totalitems").val();
   
      var url="postorder.php";
    
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c,tem1:d,tem2:e,tem3:f,yem1:g,yem2:h,yem3:i,zem1:j,zem2:k,zem3:l,mem1a:aa,mem2a:ba,mem3a:ca,tem1a:da,tem2a:ea,tem3a:fa,yem1a:ga,yem2a:ha,yem3a:ia,zem1a:ja,zem2a:ka,zem3a:la,mem1b:ab,mem2b:bb,mem3b:cb,tem1b:db,tem2b:eb,tem3b:fb,yem1b:gb,yem2b:hb,yem3b:ib,zem1b:jb,zem2b:kb,zem3b:lb,mem1ab:aab,mem2ab:bab,mem3ab:cab,tem1ab:dab,tem2ab:eab,tem3ab:fab,yem1ab:gab,yem2ab:hab,yem3ab:iab,zem1ab:jab,zem2ab:kab,zem3ab:lab,act:acc,lum:nmx}, function(data){
    
            $("#tbb").html(data).show(); 
   
        } );
    
    
}</script>


<script>     
function textbackgroundapplyblue(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textblue'); 
 $("#talkzdone").addClass('textbluedone');  

 document.getElementById('textbackgroundtheme').value="textblue";
 document.getElementById('textbackgroundthemedone').value="textbluedone"; }   
     
 

function textbackgroundapplywhite(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textwhite'); 
 $("#talkzdone").addClass('textwhitedone');  

 document.getElementById('textbackgroundtheme').value="textwhite";
 document.getElementById('textbackgroundthemedone').value="textwhitedone"; }



function textbackgroundapplyblood(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textblood'); 
 $("#talkzdone").addClass('textblooddone');  

 document.getElementById('textbackgroundtheme').value="textblood";
 document.getElementById('textbackgroundthemedone').value="textblooddone"; }    




function textbackgroundapplylightblue(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textlightblue'); 
 $("#talkzdone").addClass('textlightblueone');  

 document.getElementById('textbackgroundtheme').value="textlightblue";
 document.getElementById('textbackgroundthemedone').value="textlightblueone"; }    






function textbackgroundapplygray(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textgray'); 
 $("#talkzdone").addClass('textgraydone');  

 document.getElementById('textbackgroundtheme').value="textgray";
 document.getElementById('textbackgroundthemedone').value="textgraydone"; } 




function textbackgroundapplypurple(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textpurple'); 
 $("#talkzdone").addClass('textpurpledone');  

 document.getElementById('textbackgroundtheme').value="textpurple";
 document.getElementById('textbackgroundthemedone').value="textpurpledone"; } 




function textbackgroundapplypink(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textpink'); 
 $("#talkzdone").addClass('textpinkdone');  

 document.getElementById('textbackgroundtheme').value="textpink";
 document.getElementById('textbackgroundthemedone').value="textpinkdone"; } 



function textbackgroundapplyblack(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textblack'); 
 $("#talkzdone").addClass('textblackdone');  

 document.getElementById('textbackgroundtheme').value="textblack";
 document.getElementById('textbackgroundthemedone').value="textblackdone"; } 



function textbackgroundapplycream(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textlightcream'); 
 $("#talkzdone").addClass('textlightcreamone');  

 document.getElementById('textbackgroundtheme').value="textlightcream";
 document.getElementById('textbackgroundthemedone').value="textlightcreamone"; }    






function textbackgroundapplyorange(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textorange'); 
 $("#talkzdone").addClass('textorangedone');  

 document.getElementById('textbackgroundtheme').value="textorange";
 document.getElementById('textbackgroundthemedone').value="textorangedone"; } 



function textbackgroundapplylemon(){
  var from= $("#textbackgroundtheme").val(); 
  var fromd= $("#textbackgroundthemedone").val();
 $("#talkz").removeClass(''+from+''); 
 $("#talkzdone").removeClass(''+fromd+''); 

 $("#talkz").addClass('textlemon'); 
 $("#talkzdone").addClass('textlemondone');  

 document.getElementById('textbackgroundtheme').value="textlemon";
 document.getElementById('textbackgroundthemedone').value="textlemondone"; } 



 
     </script>

  <script type="text/javascript">


  function clearitemviewtxt(){ 
      $("#showviewitembacktext").hide();
          $("#showviewitemtext").hide();}



 function deleteitem(q){ 

  if(q == 1){ 
    clearitemview(); 
   var a= $("#dropimageitem").val(); }
  else{ 
    clearitemviewtxt();
   var a= $("#droptextitem").val(); }

        var b= $("#totalitems").val(); 
 var url="dropitemimage.php";
$.post(url,{request:"fa",mem1:a,mem2:b}, function(data){
$("#killitemcanvas").html(data).show(); }); }



    function clearitemview(){ 
       var itemcanvas= document.querySelector("#viewitem");
        var itemcontext = itemcanvas.getContext('2d');
       itemcontext.clearRect(0,0,itemcanvas.width,itemcanvas.height);
      $("#showviewitemback").hide();
          $("#showviewitem").hide();
         dimage = null;
         itemcanvas = null;}


function sizecanvasitem(){
  var it = document.querySelector("#viewitem");

var dimw = document.querySelector("#viewitemdimensionsw");
  var dimh = document.querySelector("#viewitemdimensionsh");
var maxW = parseInt(window.getComputedStyle(dimw,null).width);
  var  maxH = parseInt(window.getComputedStyle(dimh,null).height);
  

   if (iWi == iHi ){ 

it.style.borderRadius="6px";
if(mobileboy == 1){ratioh = iWi / maxW;newHi =  iHi / ratioh;
      newWi = maxW; }
else{newHi =  maxH;
 ratio = iHi / maxH; newWi = iWi/ ratio; }

        }
 else if (iWi > iHi ){
    
      ratioh = iWi / maxW;newHi =  iHi / ratioh;
      newWi = maxW; 
       if(mobileboy == 1){it.style.borderRadius="0px"}
        else{it.style.borderRadius="6px"}
    
       }else{
     
     newHi =  maxH;
 ratio = iHi / maxH; newWi = iWi/ ratio; 
 it.style.borderRadius="6px"
  
       }    }
 


 function hideuploadbuttons(){ $('#plusshow').show();document.getElementById('uploadoptions').style.visibility="hidden";}

stopholderhiderunagain=0;

function textactivate(){ 
if($("#textslotholder").is(":hidden")){
   stopholderhiderunagain=0;
document.getElementById('holdlogotop').style.visibility="visible";
   $("#textslotholder").show(); 
      $("#textslot").show(); 
        }else{
     $("#textslot").hide(); 
     document.getElementById('holdlogotop').style.visibility="hidden";
     if( stopholderhiderunagain==0){
 setTimeout(function(){ $("#textslotholder").hide();   },1300);}
     stopholderhiderunagain=1;
     }} 



function textclear(){ 
   var backtalkvalue=$("#textbackgroundhold").val();
  var talkvalue=$("#talkz").val();
  if(talkvalue == ""){
  document.getElementById('talkz').value=backtalkvalue;
        }else{
 document.getElementById('textbackgroundhold').value=talkvalue;
 document.getElementById('talkz').value="";}}


     function pregtext(){
      var textfield=document.getElementById('talkz');
       var rgx=/www\.|http:|https:|ftp:|\.com|\.net|\.org|\.gov/gi; 
       textfield.value=textfield.value.replace(rgx,"");
       if (textfield.value.length > 200) {
        textfield.value = textfield.value.slice(0, 200);}

var can = document.querySelector("#talkz");
can.style.fontWeight="bold";

var tt =textfield.value; 
if( tt.length <= 0) { can.style.fontSize="100%";  }
        else if(  tt.length <= 25) { can.style.fontSize="320%";  }
 else if(  tt.length <= 60) { can.style.fontSize="240%";  }
 else if( tt.length <= 135 ){  can.style.fontSize="190%"; }
 else{ can.style.fontSize="150%"; }


 }


function ker(){
  var a=  $("#talkz").val(); 
  a=a.replace(/\s+/g," ");
 if (a.length > 0) { 
    if (a.length > 200) { 
     $("#texterrorinfo").show();
       }else{  var url="servtext.php";
$.post(url,{request:"fa" ,mem1:a}, function(data){
$("#teacher").html(data).show(); 
setTimeout(function(){ $("#textslotholder").hide();   },1300);
document.getElementById('holdlogotop').style.visibility="hidden";}); }}}

     

$('#appendnoc').click(function() {
   jQuery('#kung1a')
        .detach()
       .appendTo('#kung1a');});

 function showupload(){ $('#plusshow').hide();document.getElementById('uploadoptions').style.visibility="visible";}


function clearerrorscribe(){   document.getElementById('ivx').innerHTML="";  
 for ( var i = 1; i < 9; i++) { document.getElementById("ivx"+i+"").innerHTML="";   }
  $("#errordescribe").hide();
   $("#errorinfo").hide(); } 


  </script> 











    <script>
      /////// calls on page load  adjust gif/iamge/video/superphoto text icon visible

   loadedimage=0;

   function visibleicons(){

document.getElementById('t1hideicon').style.display="none"; 
  document.getElementById('t2hideicon').style.display="none"; 
  document.getElementById('t3hideicon').style.display="none"; 
  document.getElementById('t4hideicon').style.display="none"; 
  document.getElementById('t5hideicon').style.display="none";     
 document.getElementById('t1hide').style.display="block"; 
  document.getElementById('t2hide').style.display="block"; 
  document.getElementById('t3hide').style.display="block"; 
  document.getElementById('t4hide').style.display="block"; 
  document.getElementById('t5hide').style.display="block";  }


 $(document).ready(function(){

 $("#t1").on('load',function(){  
  loadedimage++;
 if(loadedimage == 5){ visibleicons(); }  }).attr('src','images/icontext.png');
 $("#t2").on('load',function(){  
  loadedimage++;
 if(loadedimage == 5){ visibleicons(); }  }).attr('src','images/iconsp.png');
  $("#t3").on('load',function(){  
  loadedimage++;
 if(loadedimage == 5){ visibleicons(); }  }).attr('src','images/iconimage.png');
   $("#t4").on('load',function(){  
  loadedimage++;
 if(loadedimage == 5){ visibleicons(); }  }).attr('src','images/iconvideo.png');
    $("#t5").on('load',function(){  
  loadedimage++;
 if(loadedimage == 5){ visibleicons(); }  }).attr('src','images/icongif.png');

  })




 $("#furtext").ready(function(){
  document.getElementById('textslotholder').style.visibility="visible";  
      $("#textslotholder").hide();
       $("#textslot").hide();  
     $("#continueoh").hide(); 
     $("#orderoh").hide();
      $("#refreshoh").hide();
     $("#canxxt").hide(); 
     $("#recanxxt").hide(); 
     $("#swint").hide(); 
     $("#cover").hide(); 

     if(mobileboy == 1){ 
      document.getElementById('editman').style.fontSize="74%";  
      document.getElementById('photoman').style.fontSize="74%";  
      document.getElementById('videoman').style.fontSize="74%";  
      document.getElementById('gifman').style.fontSize="74%"; 
        document.getElementById('editman').style.visibility="visible";
         document.getElementById('photoman').style.visibility="visible";
         document.getElementById('videoman').style.visibility="visible";
         document.getElementById('gifman').style.visibility="visible";
      }else{
         document.getElementById('editman').style.visibility="visible";
         document.getElementById('photoman').style.visibility="visible";
         document.getElementById('videoman').style.visibility="visible";
         document.getElementById('gifman').style.visibility="visible";}  

}); 
    /////// calls on page load  adjust gif/iamge/video/superphoto text icon visible

</script>



   
        <script type="text/javascript">  

          /////imageuploader
 
  $(document).ready(function(){ 

   var ajax=new XMLHttpRequest();
      
      $('#imx').change(function(){ $('#vermin').change(); })

               $('#vermin').on('change',function(e){

                 e.preventDefault();
                  $('#uploadoptions').hide();
                  $('#uploadslider').show();
                  $('#holdtexttop').hide();
                  $('#pentty').show();
                   $("#imageuploadover8").hide();

                 document.getElementById("progress").value= 0;
 
               $.ajax({ xhr:function(){
                           var xhr = new window.XMLHttpRequest();
                           xhr.upload.addEventListener("progress",proghand, false);
                           xhr.addEventListener("load", completehand, false);
                           return xhr;},
                    
                       url: "serv.php",
                       method:"POST",
                       data: new FormData(this),
                       contentType:false,
                       processData:false,
                     
                success: function (data){
                $("#ivx").html(data).show();  }

                   })  })  })
            
            
            
        function proghand(e){ 
              var percy= (e.loaded /e.total) * 100;
                document.getElementById("progress").value= Math.round(percy);
        if(percy == 100){
            $('#penttclock').show();
          document.getElementById("pentt").innerHTML="Building";}
            else{
                //document.getElementById("pentt").innerHTML=Math.round(percy)+"%";
              }
               
            var pejrcy= (e.total /1024 /1024) ;  
            var pe= Math.round(pejrcy * 100)/ 100; 
            var pek= (e.loaded /1024 /1024) ;  
            var pem= Math.round(pek * 100)/ 100; 
            document.getElementById("pentty").innerHTML=pem+"MB / "+ pe+"MB";}


            
            function completehand(e){ 
                       $('#penttclock').hide(); 
                         $('#penttdone').show();   
                 document.getElementById("pentt").innerHTML="DONE"; 
                
                 setTimeout(function(){  
             $('#uploadoptions').show();
                 $('#uploadslider').hide();
                    $('#penttdone').hide(); 
                  document.getElementById("pentt").innerHTML=" ";
               document.getElementById("pentty").innerHTML="";  
                 $('#holdtexttop').show();
                  $('#pentty').hide();
                   },1300);} 

                  /////imageuploader

 </script>

                    
         
<script>
/////undo - order functions

     function terdy(){
 var a= $("#totalitems").val(); 
 var url="startorder.php";
$.post(url,{request:"fa",mem1:a}, function(data){
$("#startordersh").html(data).show(); 
} );} 

     function canzo(){
 var url="cancelorder.php";
$.post(url,{request:"fa"}, function(data){
$("#canod").html(data).show(); 
} );} 

function cancelgo(){
     $("#ref").hide();    
      $("#swint").hide();   
      $("#canxxt").hide(); 
      $("#orderoh").show(); 
       $("#refreshoh").show(); 
      $("#launchbox").show();
      $("#continueoh").show(); }


hashtagsholder = [];

      function finishedlibrary(){
var ittot= $("#totalitems").val();


for(var i= 0;  i <= ittot; i++) { 

    var destination= $("#des"+i+"").val();
       var position= $("#tempimage"+i+"").val();
      var postype= $("#itemtype"+i+"").val();

        var type= $("#temptype"+i+"").val();
   if(type == 0){ hashtagsholder.push(position); }


if(destination == 1){ document.getElementById('upload1').value=position;
                     document.getElementById('uploadtype1').value=postype;}
else if(destination == 2){ document.getElementById('upload2').value=position; 
                      document.getElementById('uploadtype2').value=postype;}
  else if(destination == 3){ document.getElementById('upload3').value=position;
                          document.getElementById('uploadtype3').value=postype; }
  else if(destination == 4){ document.getElementById('upload4').value=position; 
                              document.getElementById('uploadtype4').value=postype; }
    else if(destination == 5){ document.getElementById('upload5').value=position;
                                document.getElementById('uploadtype5').value=postype; }
    else if(destination == 6){ document.getElementById('upload6').value=position;
                                  document.getElementById('uploadtype6').value=postype; }
  else if(destination == 7){ document.getElementById('upload7').value=position; 
                           document.getElementById('uploadtype7').value=postype; }
  else if(destination == 8){ document.getElementById('upload8').value=position; 
                              document.getElementById('uploadtype8').value=postype; }
  else if(destination == 9){ document.getElementById('upload9').value=position;
                         document.getElementById('uploadtype9').value=postype; }
  else if(destination == 10){ document.getElementById('upload10').value=position;
                                  document.getElementById('uploadtype10').value=postype; }
  else if(destination == 11){ document.getElementById('upload11').value=position; 
                          document.getElementById('uploadtype11').value=postype;}
  else if(destination == 12){ document.getElementById('upload12').value=position;  
                           document.getElementById('uploadtype12').value=postype;}
  else if(destination == 13){ document.getElementById('upload13').value=position; 
                               document.getElementById('uploadtype13').value=postype;}
  else if(destination == 14){ document.getElementById('upload14').value=position; 
                             document.getElementById('uploadtype14').value=postype;}
  else if(destination == 15){ document.getElementById('upload15').value=position; 
                             document.getElementById('uploadtype15').value=postype;}
 else if(destination == 16){  document.getElementById('upload16').value=position;
                     document.getElementById('uploadtype16').value=postype; }
                     else{}  } 

     $("#finalfinishpost").show(); 
     $("#finalfinishpostback").show();      }






       function cancelfinishedlibrary(){
      $("#finalfinishpost").hide(); 
     $("#finalfinishpostback").hide();  }

      

/////undo - order functions
</script>
     
   
          
   <script type="text/javascript">
  
  function  postlibrary(){


     var jupic=  $("#topicxx").val(); 
      var zaption=  $("#captionxx").val(); 

 var file1= $("#upload1").val();
 var file2= $("#upload2").val();
 var file3= $("#upload3").val();
 var file4= $("#upload4").val();
 var file5= $("#upload5").val();
 var file6= $("#upload6").val();
 var file7= $("#upload7").val();
 var file8= $("#upload8").val();
 var file9= $("#upload9").val();
 var file10= $("#upload10").val();
 var file11= $("#upload11").val();
 var file12= $("#upload12").val();
 var file13= $("#upload13").val();
 var file14= $("#upload14").val();
 var file15= $("#upload15").val();
 var file16= $("#upload16").val();

 var filetype1= $("#uploadtype1").val();
 var filetype2= $("#uploadtype2").val();
 var filetype3= $("#uploadtype3").val();
 var filetype4= $("#uploadtype4").val();
 var filetype5= $("#uploadtype5").val();
 var filetype6= $("#uploadtype6").val();
 var filetype7= $("#uploadtype7").val();
 var filetype8= $("#uploadtype8").val();
 var filetype9= $("#uploadtype9").val();
 var filetype10= $("#uploadtype10").val();
 var filetype11= $("#uploadtype11").val();
 var filetype12= $("#uploadtype12").val();
 var filetype13= $("#uploadtype13").val();
 var filetype14= $("#uploadtype14").val();
 var filetype15= $("#uploadtype15").val();
 var filetype16= $("#uploadtype16").val();

 var totalfin= $("#totalitems").val();
var allhastags = hashtagsholder.join();



setTimeout(function(){  
 var url="postlibrary.php";
$.post(url,{request:"fa",up1:file1,up2:file2,up3:file3,up4:file4,up5:file5,up6:file6,up7:file7,up8:file8,up9:file9,up10:file10,up11:file11,up12:file12,up13:file13,up14:file14,up15:file15,up16:file16,uptype1:filetype1,uptype2:filetype2,uptype3:filetype3,uptype4:filetype4,uptype5:filetype5,uptype6:filetype6,uptype7:filetype7,uptype8:filetype8,uptype9:filetype9,uptype10:filetype10,uptype11:filetype11,uptype12:filetype12,uptype13:filetype13,uptype14:filetype14,uptype15:filetype15,uptype16:filetype16,total:totalfin,alltags:allhastags,ddtop:jupic,ddcap:zaption}, function(data){
$("#finalspace").html(data).show();});   },2000);   




    }

   </script>      




</peter></peterx>



