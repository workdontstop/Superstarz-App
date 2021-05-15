



    <?php  
require('phpopenx.php'); 
include('exit.php');
$pun=$_SESSION['numuser'];
$cc="";
$cc=$_POST['c'];
$d=$_SESSION['numuser'];
 include('switchtheme.php');
?>




        <style> 
        input[type=range] {-webkit-appearance : none;background:transparent;}
        input[type=range]::-webkit-slider-thumb{ -webkit-appearance : none;} 
         
          input[type=range]::-ms-track{ background:transparent;border-color:transparent;color:transparent}
          input[type=range]::-webkit-slider-thumb{  cursor:pointer; -webkit-appearance : none; height:35px;width:35px;border-radius:40px;background:rgba(255,255,255,0.8);-moz-box-shadow: 0 0 10px#999999; -webkit-box-shadow: 0 0 10px#999999;box-shadow: 0 0 10px#999999;margin-top:-14px}    
             input[type=range]::-moz-range-thumb{ cursor:pointer;-webkit-appearance : none; height:35px;width:35px;border-radius:40px;background:rgba(255,255,255,0.8);-moz-box-shadow: 0 0 10px#999999; -webkit-box-shadow: 0 0 10px#999999;box-shadow: 0 0 10px#999999;margin-top:-14px}  
            input[type=range]::-ms-thumb{ cursor:pointer;-webkit-appearance : none; height:35px;width:35px;border-radius:40px;background:rgba(255,255,255,0.8);-moz-box-shadow: 0 0 10px#999999; -webkit-box-shadow: 0 0 10px#999999;box-shadow: 0 0 10px#999999;margin-top:-10.5px}    
     input[type=range]::-webkit-slider-runnable-track {height: 8.4px;border-radius:40px;background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]:focus::-webkit-slider-runnable-track {border-radius:2px;
background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]::-moz-range-track {height: 8.4px;border-radius:2px;background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]::-ms-track {height: 8.4px;border-radius:2px;background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]::-ms-fill-lower {height: 8.4px;border-radius:2px;
background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]:focus::-ms-fill-lower {height: 8.4px;border-radius:2px;
background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]::-ms-fill-upper {height: 8.4px;border-radius:2px;background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}
input[type=range]:focus::-ms-fill-upper {height: 8.4px;border-radius:2px;background:rgba(255,255,255,0.6);-moz-box-shadow: 0 0 30px#cccccc; -webkit-box-shadow: 0 0 30px#cccccc;box-shadow: 0 0 30px#cccccc;}

*,*:before,*:after{
      -webkit-user-select:none;/*  safari  */
       -moz-user-select:none; /*  firefox  */
     -ms-user-select:none;/* i.e  / edge */
   }

.turfiltercanvas{border-bottom-right-radius:6px; border-bottom-left-radius:6px;}
.turfiltercanvasnone{border-radius:0px;}


.ram{-Webkit-transform:translateX(-15px);ms-transform:translateX(-15px);transform:translateX(-15px);transition:all 0.0s ease}

.pam{-Webkit-transform:translateX(15px);ms-transform:translateX(15px);transform:translateX(15px);transition:all 0.0s ease}


.ramy{-Webkit-transform:translateX(-15px);ms-transform:translateX(-15px);transform:translateX(-15px);transition:all 0.0s ease}

.coloreddotplacement{padding: 0px;font-size:8px;margin-top: 31px;padding: 0px;position: absolute;color:<?php echo $_SESSION['cl']; ?>}

.coloreddotplacementxx{padding: 4px;font-size:8px;color:<?php echo $_SESSION['cl']; ?>}

.pushalittlemobile{margin-left:-2px}

.pushalittle{margin-left:-6px}

.colorsize{font-size:18px;}   
.colorsizebig{font-size:28px;margin-top:-4px}

.turcropcanvas{ border-radius:8px; -moz-box-shadow: 0 0 20px#ffffff;-webkit-box-shadow: 0 0 20px#ffffff;box-shadow: 0 0 20px#ffffff;}

.turcropcanvascc{ border-radius:0px; border-bottom-right-radius:8px;border-bottom-left-radius:8px;  -moz-box-shadow: 0 0 20px#ffffff;-webkit-box-shadow: 0 0 20px#ffffff;box-shadow: 0 0 20px#ffffff;}


.turcropcanvasbar{ border-radius:0px; -moz-box-shadow: 0 0 20px#ffffff;-webkit-box-shadow: 0 0 20px#ffffff;box-shadow: 0 0 20px#ffffff;}

</style>
          

<style type="text/css">
  

.bordertran{border: solid #ffffff; border:solid rgba(255,255,255,0.1);background-color:; background-color:rgba(255,255,255,0.5);
-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}

.bordertranhov{border: solid #ffffff; border:solid rgba(255,255,255,0.0);background-color:;}
.bordertranhov:hover{background-color:;background-color:rgba(255,255,255,0.4);border-radius:5px;border: solid #ffffff;
 border:solid rgba(255,255,255,0.2); -moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}







 .bordertranhovbar{color:white;text-shadow: 1px 2px 2px #000000;background-color:;background-color:rgba(255,255,255,0.6);border-radius:6px;border: solid #ffffff;
 border:solid rgba(255,255,255,0.6); -moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666}



.bordertranhovbarstick{color:white;text-shadow: 1px 2px 2px #000000;background-color:;background-color:rgba(000,000,005,0.8);border-radius:6px;border: solid #ffffff;border:solid rgba(000,000,005,0.2);-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666}



.bordertransx{border: solid #ffffff; border:solid rgba(255,255,255,0.2);background-color:;
    background-color:rgba(255,255,255,0.5);-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}
.bordertransx:hover{border: solid #ffffff; border:solid rgba(255,255,255,0.0);background-color:;background-color:rgba(255,255,255,0.8);
-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666; }



.bordertransxy{border: solid #ffffff; border:solid rgba(255,255,255,0.4);background-color:;
    background-color:rgba(255,255,255,0.0);-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}
.bordertransxy:hover{border: solid #ffffff; border:solid rgba(255,255,255,0.0);background-color:;background-color:rgba(255,255,255,0.4);-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666; }






.bordertransxinfo{background-color:#cccccc;background-color:rgba(255,255,255,0.8);}





.transparentTextOnly {color: rgba(0,0,0,0);color: rgba(255,255,255,0.0);}
.transparentTextOnly:hover {
 color: white;text-shadow: 1px 2px 2px #000000;}



.transparentallcurvebottomOnly {color: rgba(0,0,0,0);color: rgba(255,255,255,0.0);height:40px;padding:0px}

.transparentallcurvebottomOnly:hover{color: white;text-shadow: 1px 2px 2px #000000;border: solid #ffffff;
 border:solid rgba(255,255,255,0.5);border-bottom-left-radius:8px;border-bottom-right-radius:8px;height:40px;padding:0px;
-moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}

    .transparentfalsecurvebottomOnly{color: white;text-shadow: 1px 2px 2px #000000;border: solid #ffffff;
     border:solid rgba(255,255,255,0.5);border-bottom-left-radius:8px;border-bottom-right-radius:8px;height:40px;padding:0px;
 -moz-box-shadow: 0 0 5px#666666; -webkit-box-shadow: 0 0 5px#666666;box-shadow: 0 0 5px#666666;}




.transparentallzoom {color: rgba(0,0,0,0);color: rgba(255,255,255,0.0);height:40px;padding:0px}
.transparentallzoom:hover{color: white;text-shadow: 1px 2px 2px #000000;padding:0px;}

   
.cloudhighresolution{background-color:rgba(255,255,255,0.8);}
.cloudsupersample{background-color:rgba(255,255,255,0.4);}
.cloudsupersampleminidark{background-color:rgba(000,000,005,0.7);}
.cloudsupersampleminilight{background-color:rgba(255,255,255,0.6);}



</style>



    <?php  

if($cc == 1){
   $bakindicator=' 
<div  onclick="javascript:closefilters();"    class="col-xs-2  col-sm-1 zuzax bordertranhov"  style="padding:0px;border-radius:4px"  >
       <div  class="col-xs-12  "   id="controlx" >
<div    class="col-xs-12  zuperxy "  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;text-align:center">  
     <span   class="juju" style="opacity:0.7;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div></div>
     <div  class="col-xs-1 " ></div>'; 
$cropbakindicator=' ';}
     else{
 $bakindicator='   
<div  onclick="javascript:closefilters();"    class="col-xs-3  col-sm-2 zuzax bordertransx"  style="padding:0px;border-radius:4px"  >  
 <div  class="col-xs-6  "   id="controlx" >
<div    class="col-xs-12  zuperxy "  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;margin-left:-5px">  
     <span   class="juju" style="opacity:0.7;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div>
<div class=" col-xs-6   "    style="color:;padding:0px;text-align:center;margin:auto;margin-top:6px">
<div  class="col-xs-12" style="margin-top:-2px;margin-left:-9px">
  <span    class=" zuperxy " style="opacity:0.7;font-size:18px;font-weight:bold;padding:4px;padding-left:10px;padding-right:10px;border-radius:80px;background-color:rgba(255,255,255,0.6); -moz-box-shadow: 0 0 5px'.$_SESSION['cl'].'; -webkit-box-shadow: 0 0 5px'.$_SESSION['cl'].';box-shadow: 0 0 5px'.$_SESSION['cl'].';margin-top:-1px;"> 
 '.$cc.'</span></div></div></div>';

$cropbakindicator=' <div class=" col-xs-12 "    style="color:;padding:0px;text-align:center;margin:auto;margin-top:10px">
  <span    class=" zuperxy " style="opacity:0.7;font-size:18px;font-weight:bold;padding:6px;padding-left:11px;padding-right:11px;border-radius:80px;background-color:rgba(255,255,255,0.6); -moz-box-shadow: 0 0 5px#333333; -webkit-box-shadow: 0 0 5px#333333;box-shadow: 0 0 5px#333333;margin-top:-1px;"> 
    '.$cc.'</span></div>';}

    ?>



<div id="filterbody">



<?php

/////////////////////////////////supersampling


 include('supershowfilters.php')  




 //////////////////supersampling

 ?>


<script type="text/javascript">
  ///////////// prevent slider call when using oa diffrent slider/////////
allowfilterslider = 0;
alloweditslider = 0;
 ///////////// prevent slider call when using oa diffrent slider/////////

</script>


<input  id="nameEditadjust" value="" hidden  >
<input  id="editremove" value="0" hidden  >
<input  id="editrebound" value="filtertrue" hidden  >
<input  id="editddot" value="0" hidden  >
<input  id="checkcontrolcan" value="0" hidden  >


<input  id="sliderfiltereditactive" value="0" hidden  >


<input  id="finishedEditadjustBrightnessx" value="" hidden  >
<input  id="checkEditadjustBrightnessx" value="" hidden  >


<input  id="finishedEditadjustContrastx" value="" hidden  >
<input  id="checkEditadjustContrastx" value="" hidden  >


<input  id="finishedEditadjustHuex" value="" hidden  >
<input  id="checkEditadjustHuex" value="" hidden  >


<input  id="finishedEditadjustSharpenx" value="" hidden  >
<input  id="checkEditadjustSharpenx" value="" hidden  >



<input  id="finishedEditadjustNoisex" value="" hidden  >
<input  id="checkEditadjustNoisex" value="" hidden  >


<input  id="finishedEditadjustVignettex" value="" hidden  >
<input  id="checkEditadjustVignettex" value="" hidden  >



<input  id="finishedEditadjustColorx" value="" hidden  >
<input  id="checkEditadjustColorx" value="" hidden  >



<input  id="finishedEditadjustSaturationx" value="" hidden  >
<input  id="checkEditadjustSaturationx" value="" hidden  >



<input  id="finishedEditadjustBlurx" value="" hidden  >
<input  id="checkEditadjustBlurx" value="" hidden  >



<input  id="Blurxshine" value="" hidden  >




<input  id="normalvignettetype" value="0"    hidden>
<input  id="lomovignettetype" value="0"    hidden>
<input  id="clarityvignettetype" value="0"    hidden>
<input  id="enhancevignettetype" value="0"    hidden>
<input  id="safarivignettetype" value="0"    hidden>
<input  id="sunrisevignettetype" value="0"    hidden>
<input  id="glowingSunvignettetype" value="0"    hidden>
<input  id="hazyDaysvignettetype" value="0"    hidden>
<input  id="crossProcessvignettetype" value="0"    hidden>
<input  id="jarquesvignettetype" value="0"    hidden>
<input  id="concentratexvignettetype" value="0"    hidden>
<input  id="vintagevignettetype" value="0"    hidden>
<input  id="pinholevignettetype" value="0"    hidden>
<input  id="oldBootvignettetype" value="0"    hidden>
<input  id="MoonShinevignettetype" value="0"    hidden>
<input  id="nostalgiavignettetype" value="0"    hidden>




 <!-- input edit for lomo -->
 <input  id="lomoBrightnessx" value="10000"    hidden> 
 <input  id="lomoContrastx" value="10000"    hidden> 
 <input  id="lomoHuex" value="10000"    hidden> 
 <input  id="lomoSharpenx" value="10000"    hidden> 
 <input  id="lomoNoisex" value="10000"    hidden> 
 <input  id="lomoVignettex" value="1"    hidden> 
 <input  id="lomoColorx" value="10000"    hidden>
  <input  id="lomoColortypex" value="10000"    hidden> 
 <input  id="lomoSaturationx" value="10000"    hidden> 
  <input  id="lomoBlurx" value="10000"    hidden> 
 <!-- input edit for lomo -->




 <!-- input edit for clarity -->
  <input  id="clarityBrightnessx" value="10000"    hidden> 
 <input  id="clarityContrastx" value="10000"    hidden>
 <input  id="clarityHuex" value="10000"    hidden>
 <input  id="claritySharpenx" value="10000"    hidden> 
 <input  id="clarityNoisex" value="10000"    hidden> 
 <input  id="clarityVignettex" value="10000"    hidden> 
 <input  id="clarityColorx" value="10000"    hidden> 
  <input  id="clarityColortypex" value="10000"    hidden> 
 <input  id="claritySaturationx" value="10000"    hidden> 
  <input  id="clarityBlurx" value="10000"    hidden>  
 <!-- input edit for clarity -->
 
 


 <!-- input edit for enhance -->
 <input  id="enhanceBrightnessx" value="10000"    hidden> 
 <input  id="enhanceContrastx" value="10000"    hidden> 
 <input  id="enhanceHuex" value="10000"    hidden> 
 <input  id="enhanceSharpenx" value="10000"    hidden> 
 <input  id="enhanceNoisex" value="10000"    hidden> 
 <input  id="enhanceVignettex" value="1"    hidden> 
 <input  id="enhanceColorx" value="10000"    hidden> 
 <input  id="enhanceColortypex" value="10000"    hidden> 
 <input  id="enhanceSaturationx" value="10000"    hidden> 
  <input  id="enhanceBlurx" value="10000"    hidden> 
<!-- input edit for enhance -->
 




 <!-- input edit for safari -->
 <input  id="safariBrightnessx" value="10000"    hidden> 
 <input  id="safariContrastx" value="10000"    hidden> 
 <input  id="safariHuex" value="10000"    hidden> 
 <input  id="safariSharpenx" value="10000"    hidden> 
 <input  id="safariNoisex" value="10000"    hidden> 
 <input  id="safariVignettex" value="10000"    hidden> 
 <input  id="safariColorx" value="10000"    hidden> 
 <input  id="safariColortypex" value="10000"    hidden> 
 <input  id="safariSaturationx" value="10000"    hidden> 
  <input  id="safariBlurx" value="10000"    hidden> 
<!-- input edit for safari -->
 



 <!-- input edit for sunrise -->
 <input  id="sunriseBrightnessx" value="10000"    hidden> 
 <input  id="sunriseContrastx" value="10000"    hidden> 
 <input  id="sunriseHuex" value="10000"    hidden>
 <input  id="sunriseSharpenx" value="10000"    hidden> 
 <input  id="sunriseNoisex" value="10000"    hidden> 
 <input  id="sunriseVignettex" value="1"    hidden> 
 <input  id="sunriseColorx" value="10000"    hidden> 
 <input  id="sunriseColortypex" value="10000"    hidden> 
 <input  id="sunriseSaturationx" value="10000"    hidden> 
  <input  id="sunriseBlurx" value="10000"    hidden>  
<!-- input edit for sunrise -->
 



 <!-- input edit for glowingSun -->
 <input  id="glowingSunBrightnessx" value="10000"    hidden> 
 <input  id="glowingSunContrastx" value="10000"    hidden>
 <input  id="glowingSunHuex" value="10000"    hidden> 
 <input  id="glowingSunSharpenx" value="10000"    hidden> 
 <input  id="glowingSunNoisex" value="10000"    hidden> 
 <input  id="glowingSunVignettex" value="1"    hidden> 
 <input  id="glowingSunColorx" value="10000"    hidden>
 <input  id="glowingSunColortypex" value="10000"    hidden> 
 <input  id="glowingSunSaturationx" value="10000"    hidden> 
  <input  id="glowingSunBlurx" value="10000"    hidden> 
<!-- input edit for glowingSun -->
 



 <!-- input edit for hazyDays -->
 <input  id="hazyDaysBrightnessx" value="10000"    hidden> 
 <input  id="hazyDaysContrastx" value="10000"    hidden> 
 <input  id="hazyDaysHuex" value="10000"    hidden> 
 <input  id="hazyDaysSharpenx" value="10000"    hidden> 
 <input  id="hazyDaysNoisex" value="10000"    hidden> 
 <input  id="hazyDaysVignettex" value="10000"    hidden> 
 <input  id="hazyDaysColorx" value="10000"    hidden> 
  <input  id="hazyDaysColortypex" value="10000"    hidden> 
 <input  id="hazyDaysSaturationx" value="10000"    hidden> 
  <input  id="hazyDaysBlurx" value="10000"    hidden> 
<!-- input edit for hazyDays -->
 



 <!-- input edit for crossProcess -->
 <input  id="crossProcessBrightnessx" value="10000"    hidden> 
 <input  id="crossProcessContrastx" value="10000"    hidden> 
 <input  id="crossProcessHuex" value="10000"    hidden> 
 <input  id="crossProcessSharpenx" value="10000"    hidden> 
 <input  id="crossProcessNoisex" value="10000"    hidden> 
 <input  id="crossProcessVignettex" value="10000"    hidden> 
 <input  id="crossProcessColorx" value="10000"    hidden> 
 <input  id="crossProcessColortypex" value="10000"    hidden> 
 <input  id="crossProcessSaturationx" value="10000"    hidden> 
  <input  id="crossProcessBlurx" value="10000"    hidden> 
<!-- input edit for crossProcess -->
 



 <!-- input edit for jarques -->
 <input  id="jarquesBrightnessx" value="10000"    hidden> 
 <input  id="jarquesContrastx" value="10000"    hidden> 
 <input  id="jarquesHuex" value="10000"    hidden> 
 <input  id="jarquesSharpenx" value="10000"    hidden> 
 <input  id="jarquesNoisex" value="10000"    hidden> 
 <input  id="jarquesVignettex" value="1"    hidden> 
 <input  id="jarquesColorx" value="10000"    hidden>
 <input  id="jarquesColortypex" value="10000"    hidden> 
 <input  id="jarquesSaturationx" value="10000"    hidden> 
  <input  id="jarquesBlurx" value="10000"    hidden> 
<!-- input edit for jarques -->
 



 <!-- input edit for concentratex -->
 <input  id="concentratexBrightnessx" value="10000"    hidden> 
 <input  id="concentratexContrastx" value="10000"    hidden> 
 <input  id="concentratexHuex" value="10000"    hidden> 
 <input  id="concentratexSharpenx" value="10000"    hidden> 
 <input  id="concentratexNoisex" value="10000"    hidden> 
 <input  id="concentratexVignettex" value="1"    hidden> 
 <input  id="concentratexColorx" value="10000"    hidden> 
 <input  id="concentratexColortypex" value="10000"    hidden> 
 <input  id="concentratexSaturationx" value="10000"    hidden> 
  <input  id="concentratexBlurx" value="10000"    hidden> 
<!-- input edit for concentratex -->
 



 <!-- input edit for vintage -->
 <input  id="vintageBrightnessx" value="10000"    hidden> 
 <input  id="vintageContrastx" value="10000"    hidden> 
  <input  id="vintageHuex" value="10000"    hidden> 
  <input  id="vintageSharpenx" value="10000"    hidden> 
 <input  id="vintageNoisex" value="10000"    hidden> 
 <input  id="vintageVignettex" value="10000"    hidden> 
 <input  id="vintageColorx" value="10000"    hidden> 
 <input  id="vintageColortypex" value="10000"    hidden> 
 <input  id="vintageSaturationx" value="10000"    hidden> 
  <input  id="vintageBlurx" value="10000"    hidden> 
<!-- input edit for vintage -->
 




 <!-- input edit for pinhole -->
 <input  id="pinholeBrightnessx" value="10000"    hidden> 
 <input  id="pinholeContrastx" value="10000"    hidden> 
 <input  id="pinholeHuex" value="10000"    hidden>
 <input  id="pinholeSharpenx" value="10000"    hidden> 
 <input  id="pinholeNoisex" value="10000"    hidden> 
 <input  id="pinholeVignettex" value="10000"    hidden> 
 <input  id="pinholeColorx" value="10000"    hidden> 
 <input  id="pinholeColortypex" value="10000"    hidden> 
 <input  id="pinholeSaturationx" value="10000"    hidden> 
  <input  id="pinholeBlurx" value="10000"    hidden>  
<!-- input edit for pinhole -->





 <!-- input edit for oldBoot-->
 <input  id="oldBootBrightnessx" value="10000"    hidden> 
 <input  id="oldBootContrastx" value="10000"    hidden>
  <input  id="oldBootHuex" value="10000"    hidden> 
  <input  id="oldBootSharpenx" value="10000"    hidden> 
 <input  id="oldBootNoisex" value="10000"    hidden> 
 <input  id="oldBootVignettex" value="10000"    hidden> 
 <input  id="oldBootColorx" value="10000"    hidden> 
 <input  id="oldBootColortypex" value="10000"    hidden>
 <input  id="oldBootSaturationx" value="10000"    hidden> 
  <input  id="oldBootBlurx" value="10000"    hidden>  
<!-- input edit for oldBoot -->
 




 <!-- input edit for MoonShine-->
 <input  id="MoonShineBrightnessx" value="10000"    hidden> 
 <input  id="MoonShineContrastx" value="10000"    hidden> 
 <input  id="MoonShineHuex" value="10000"    hidden> 
 <input  id="MoonShineSharpenx" value="10000"    hidden> 
 <input  id="MoonShineNoisex" value="10000"    hidden> 
 <input  id="MoonShineVignettex" value="10000"    hidden> 
 <input  id="MoonShineColorx" value="10000"    hidden> 
 <input  id="MoonShineColortypex" value="10000"    hidden> 
 <input  id="MoonShineSaturationx" value="10000"    hidden> 
  <input  id="MoonShineBlurx" value="10000"    hidden> 
<!-- input edit for  MoonShine -->
 




 <!-- input edit for nostalgia-->
 <input  id="nostalgiaBrightnessx" value="10000"    hidden> 
 <input  id="nostalgiaContrastx" value="10000"    hidden> 
 <input  id="nostalgiaHuex" value="10000"    hidden> 
 <input  id="nostalgiaSharpenx" value="10000"    hidden> 
 <input  id="nostalgiaNoisex" value="10000"    hidden> 
 <input  id="nostalgiaVignettex" value="10000"    hidden> 
 <input  id="nostalgiaColorx" value="10000"    hidden> 
 <input  id="nostalgiaColortypex" value="10000"    hidden> 
 <input  id="nostalgiaSaturationx" value="10000"    hidden> 
  <input  id="nostalgiaBlurx" value="10000"    hidden> 
<!-- input edit for  nostalgia -->





 <!-- input edit for normal-->
 <input  id="normalBrightnessx" value="10000"    hidden> 
 <input  id="normalContrastx" value="10000"    hidden> 
 <input  id="normalHuex" value="10000"    hidden> 
 <input  id="normalSharpenx" value="10000"    hidden> 
 <input  id="normalNoisex" value="10000"    hidden> 
 <input  id="normalVignettex" value="10000"    hidden> 
 <input  id="normalColorx" value="10000"    hidden> 
 <input  id="normalColortypex" value="10000"    hidden> 
 <input  id="normalSaturationx" value="10000"    hidden> 
  <input  id="normalBlurx" value="10000"    hidden> 
<!-- input edit for  normal -->










<body style="overflow:auto;">
<div   id="" style="height:100%; ">
<container>
<row>







<div  id="pushtopforcropcanvas" > <div class="col-xs-12"  style=" margin-top:0px; padding: 0px;height:43px;"> </div></div>




<script type="text/javascript">
  



function removecancrop(){
   uncroppedCanvas = null;
         var cr= document.querySelector("#canvcrop");
        var crx = cr.getContext('2d');
       crx.clearRect(0,0,cr.width,cr.height);
           $("#canvcrop").remove();
           $("#filterbody").hide();}


           function removecanfilter(){
            imagex=null;
            var willy=['normal','clarity','enhance','lomo','safari','sunrise','glowingSun','hazyDays','crossProcess','jarques','concentratex','vintage','pinhole','oldBoot','MoonShine','nostalgia'];
for ( var i = 0; i < 16; i++) { $("#"+willy[i]+"").remove();}
     originalCanvas= null;
    var crz= document.querySelector("#canv");
        var crxz = crz.getContext('2d');
       crxz.clearRect(0,0,crz.width,crz.height);
       $("#canv").remove();
        var crzz= document.querySelector("#cantoo");
        var crxzz = crzz.getContext('2d');
       crxzz.clearRect(0,0,crzz.width,crzz.height);
          $("#cantoo").remove();
           var crzzx= document.querySelector("#nunu");
        var crxzzx = crzzx.getContext('2d');
       crxzzx.clearRect(0,0,crzzx.width,crzzx.height);
           $("#nunu").remove();}
           


     function closecrop(){
document.getElementById("switchcanvas").value=1; 
 document.getElementById("namefilteradjust").value="";
 document.getElementById("finishedfilteradjust").value="";
  document.getElementById("checkfilteradjust").value="";
   document.getElementById("checkcontrol").value=0;
       document.getElementById("checkzoom").value=0;
        document.getElementById("zoomprecise").value=0;
         document.getElementById("hdcanvas").value="normal";
          document.getElementById("hdrebound").value="";
        document.getElementById("editstart").value=1;
        document.getElementById("imagecroptype").value=0;
        document.getElementById("sliderdirection").value=0;
        image = null;
       removecancrop();
            $("#filterContainerout").hide();
             $("#flame").hide();
        $("#filterbody").hide();
      $("#hold").hide();
      $("#spil").hide();
      if(handpt == 0){   if(pointtime) {clearTimeout(pointtime);}  }
    location.reload(true);   }




         function closefilters(){
document.getElementById("switchcanvas").value=1; 
 document.getElementById("namefilteradjust").value="";
 document.getElementById("finishedfilteradjust").value="";
  document.getElementById("checkfilteradjust").value="";
   document.getElementById("checkcontrol").value=0;
       document.getElementById("checkzoom").value=0;
        document.getElementById("zoomprecise").value=0;
         document.getElementById("hdcanvas").value="normal";
          document.getElementById("hdrebound").value="";
        document.getElementById("editstart").value=1;
        document.getElementById("imagecroptype").value=0;
        document.getElementById("sliderdirection").value=0;
         image = null;
           removecancrop();
           removecanfilter();
            $("#filterContainerout").hide();
             $("#flame").hide();
        $("#filterbody").hide();
      $("#hold").hide();
      $("#spil").hide();  
     location.reload(true);    } 




  var state = <?php echo  $_SESSION['supercropstate']; ?>;
  var stateallow = <?php echo  $_SESSION['supercropstateallow']; ?>;

  if(state ==0 && stateallow ==0){}
    else if(state==1 && stateallow==1){  $("#clearcropstate").show();
$("#refreshcropstate").show(); $("#sslock").hide();  $("#sskey").show(); }
   else if(state==1 && stateallow==0){ 
    $("#refreshcropstate").show(); $("#sskey").hide();
        $("#sslock").show(); $("#clearcropstate").show();   }
        else{}


          function kropstaterefresh() {
             image = null;
              removecancrop();
 var wi = 0;
  var  hi =0;
  var ty = 2;
var url="sessionsupercroplock.php";
  $.post(url,{request:"fa",memw:wi,memh:hi,memty:ty}, function(data){
           $("#showcroplock").html(data).show();}); }



    function kropstateclear() {
       image = null;
       removecancrop();
 var wi = 0;
  var  hi =0;
  var ty = 3;
var url="sessionsupercroplock.php";
  $.post(url,{request:"fa",memw:wi,memh:hi,memty:ty}, function(data){
           $("#showcroplock").html(data).show();});  }


</script>


      <div  id="croptopbuttons"  style="outline-style: none;"   > 
    <div class="  col-xs-12"   style="top:0em;position:fixed;z-index:110; margin-top:0px; padding: 0px;height:50px;"> 

<div  onclick="javascript:closecrop();"    class="col-xs-2  col-sm-1 zuzax bordertranhov"  style="padding:0px;border-radius:4px"  >
       <div  class="col-xs-12">
<div    class="col-xs-12  zuperxy "  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;text-align:center">  
     <span   class="juju" style="opacity:0.9;position:relative;width:auto"> <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div></div>

     <div class="col-xs-2  col-sm-2"   style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:7px;">
<div  class="zuzax col-xs-12 juju  zuperxy"   style="height:35px;padding:0px;display:none;">  </div></div> 

     <div  class="col-xs-2  col-sm-5    " ></div>



 <div class="  col-xs-2  col-sm-2" style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:7px;"><div  class=" col-xs-12   zuzax juju zuperxy "    style="height:35px;padding:0px;display:none;"> </div> </div> 



<div  class="col-xs-4  col-sm-2 "  style="padding: 0px">
   <div  onclick="javascript:startfilters();"  class="col-xs-12  zuperxy zuzax bordertransx  "    style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color: <?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding: 0px " >  
        <i  class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i> 
            </div> </div></div>



<div  class="col-xs-12 "  style="bottom:0em;position:fixed;z-index:110; margin-top:0px; padding: 0px;height:auto;">

 <div class="col-xs-2  col-sm-1"   style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:8px;">
<div  class="zuzax col-xs-12 juju  zuperxy"    onclick="javascript:kropstateclear();"   id="clearcropstate"  style="height:35px;padding:0px;display:none;"> 
 <span   style="padding:0px;margin-left:-35%">
  <i class="fas fa-trash"></i> </span> </div>
 </div> 

<div  class="col-xs-8  col-sm-10"  style="padding:0px">  </div>

 <div class="col-xs-2   col-sm-1"  style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:8px;"><div  class=" col-xs-12   zuzax juju zuperxy "   onclick="javascript:kropstaterefresh();"  id="refreshcropstate"  style="height:35px;padding:0px;display:none;"> 
 <span   id="sslock" style="padding:0px;display:none;margin-left:35%"> <i class="fas fa-key"></i>  </span> 
   <span id="sskey"  style="padding:0px;display:none;margin-left:35%"> <i class="fas fa-lock"></i>  </span> </div>
 </div> 

  </div> 



          </div>






      <div  id="topbuttons" style="visibility:hidden;"> 
    <div class="  col-xs-12"  id="topbuttonsin"   style="top:0em;position:fixed;z-index:110; margin-top:0px; padding: 0px;height:50px;"> 
<?php  echo $bakindicator; ?>
<div class="  col-xs-5  col-sm-8   zuzax"  id="firstcontrolhide"  style="padding:0px; height: 40px;text-align:center;margin: auto;"  >
 <div id="holdtoppointer"  style="display:none">
  <div class=" col-xs-12 zuperxy"  id="handyvan" style="opacity:0.9;position:absolute;height:40px;margin-top:7px;font-size:28px"> <i class="far fa-hand-pointer" aria-hidden="true"></i> </div>
<div class=" col-xs-12 transparentTextOnly"  id="handyopac" style="position:absolute;height:40px;margin-top:7px;font-size:28px"> <i class="far fa-hand-pointer" aria-hidden="true"></i> </div></div></div> 
<div  class="col-xs-4  col-sm-2"   style="padding:0px">
          <div    id="controlz" class="col-xs-12  zuperxy zuzax bordertransx"    style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color: <?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding: 0px " >  
        <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i> 
            </div>  </div></div></div>




      <div  id="topbuttonsnext"   style="display:none" > 
    <div class="  col-xs-12"     style="top:0em;position:fixed;z-index:110; margin-top:0px; padding: 0px;height:50px;"> 
<div class=" col-xs-2 col-sm-4" > </div>
<div id="candyman" class=" col-xs-8 col-sm-4 transparentallcurvebottomOnly " >
<div class=" col-xs-12 zuzax juju "  id="candyopac1" style="text-align:center;font-size:36px;">
 <div  style="font-size:25px;margin-top:4px;opacity:0.8;">  <i class="fas fa-star"></i> </div>  </div>
</div>
<div class=" col-xs-2 col-sm-4" > </div>
</div></div>




  <div  id="topzoombutton"  class="col-xs-12 " style="height:0px;top:40%;text-align:center;position:fixed;z-index:110">
   <span class="zuzax juju  transparentallzoom"  id="candyopac2"  style="font-size:60px;width:auto;height:auto;opacity:0.7;">
 <i class="fas fa-search-plus" aria-hidden="true"></i> </span></div>   






<div id="clozoom"   class="zuperxy col-xs-12  zuzax"  style="height:80px;top:0px;font-size:25px;text-align:center;position:fixed;z-index:150;display:none;opacity:0.8;width:100%">  <div  class="juju" style="margin-top:1%">   <i class="fas fa-star"></i> 
    </div>  </div> 





<div  id="kager" >

 <div class="  col-xs-12 turxx zuperxy zuzax"   id="filteroption"  style="position:fixed;bottom:0em;padding:0px;z-index:10;visibility:hidden;">




 <div  onclick="javascript:afiltersoft();"  class="col-xs-4 juju zuperxy zuzax"    style="padding: 0px ;height:100% " > 
<div class=" col-xs-hidden  col-sm-2" >  </div>
    <div   id="actgosof" class=" col-xs-12   col-sm-8" style="height:6px;border-radius:50px;">   </div> 
<div   style="margin-top:10px">  SOFT</div></div>


  <div  onclick="javascript:afilterloud();"  class="col-xs-4 juju  zuperxy zuzax  "    style="padding: 0px;height:100%" > 
<div class=" col-xs-hidden  col-sm-2" >  </div>
    <div   id="actgo" class="col-xs-12   col-sm-8" style="height:6px;border-radius:50px; background-color:<?php echo $_SESSION['cl']; ?>">   </div> <div   style="margin-top: 10px ">  LOUD </div></div> 




 <div  onclick="javascript:aedit();"  class="col-xs-4 juju zuperxy zuzax   "    style="padding: 0px ;height:100% " > 
<div class=" col-xs-hidden  col-sm-2" >  </div>
    <div   id="actgox" class=" col-xs-12   col-sm-8" style="height:6px;border-radius:50px;">   </div> 
<div   style="margin-top: 10px  ">  EDIT</div></div></div>




 <div  id="slideoption"  class=" turxx  col-xs-12"    style="position:fixed;bottom:0em;  padding: 0px; z-index:10; display:none"> 
     <div  id="acceptfilterslide"   class="col-xs-12 juju zuperxy zuzax"    style=" padding: 0px;height: 100%" > 
      <div   style="margin-top: 10px  "> DONE </div></div> </div>




 <div  id="editoption"  class="turxx   col-xs-12"    style="position:fixed;bottom:0em;  padding: 0px; z-index:10; display:none"> 
      <div  id="backEditslide"    class="col-xs-6 juju zuperxy zuzax   "    style=" padding: 0px;height: 100%" > 
      <div   style="margin-top: 10px  "> REFRESH </div></div>
     <div  id="acceptEditslide"   class="col-xs-6 juju zuperxy zuzax  "    style=" padding: 0px;height: 100%" > 
      <div   style="margin-top: 10px  "> DONE </div></div></div>

</div>






<div id="zaax" class=""    style="background-color:#ffffff;background-color:rgba(255,255,255,0.9);text-align: center;  position: fixed; z-index: 3 ">   </div>






  <div id="holdtame"    class="zuperxy col-xs-12"  style="top:22%;font-size:44px;text-align:center;position:fixed;z-index:150;visibility:hidden;"> <i class="fas fa-stroopwafel fa-spin"></i></div> 



<div id="highresolutionmaker"  style="display:none;">
<div  class="col-xs-12  cloudhighresolution"  style="height:100%;text-align:center;position:fixed;z-index:250 ">  </div>
  <div  class="zuperxy col-xs-12"  style="top:30%;font-size:40px;text-align:center;position:fixed;z-index:252;"><i class="fas fa-stroopwafel fa-spin"></i></div> 
  <bottr>  <div   class="col-xs-12 zuperxy"  style="top:14%;font-size:22px;text-align:center;position:fixed;z-index:252;font-weight:bolder">  
  High Resolution
      </div></bottr></div>





<div id="lowresolution">

<script type="text/javascript"> pointtime=setTimeout(function(){
if(handpt == 0){  $("#holdpoint").hide(); handpt=1;  } },10000);  </script>


  <div id="holdpoint"  class="zuperxy col-xs-12"  style="opacity:0.9;top:22%;font-size:35px;text-align:center;position:fixed;z-index:150;">
   <i class="fas fa-hand-pointer"></i></div> 








<div  class=""    style=" width: 100%; text-align: center;z-index:100;position:relative; padding: 0px ;outline-style: none; ">
<span  id="croporiginal" class="zuzax " >
<canvas id="canvcrop"   style=" display: inline;" data-caman-hidpi-disabled="true" ></canvas></span></div>





<?php  include('cropfilters.php');   ?>





<div  class=""    style=" width: 100%; text-align: center;z-index:100;position:relative;  ">
<span  id="holdoriginal" class=" zuzax">
<canvas id="canv"   style=" display:inline;" data-caman-hidpi-disabled="true" ></canvas>  </span> </div>





<div  class="col-xs-12"  id="filtersspacer"></div>




<div  id="flame" style="">

<div   class="col-xs-12 " ></div> 
<div id="filterContainerout"  class=""></div>
<div  class="col-xs-12 " ></div> 


<div  class="col-xs-12"  id="cropreal"  style="padding:0px;top:75%;position:fixed;z-index:200;outline-style: none;" >
<div   class="col-xs-hidden  col-sm-3" ></div>


<div   id="funcrop"   class="col-xs-12 col-sm-6" style="padding:0px;">
<div  class="col-xs-2  col-sm-2 col-md-4 "  style="">  </div> 

<div  class="col-xs-2  col-sm-2  col-md-1  " style="margin-top:-10px;text-align:center;margin:auto;justify-content:center; display: inline; ">
<div  class="zuzax  juju  zuperxy  bordertransxy" id="crop" style="font-size:26px;height:40px;width:42px;border-radius:60px">  <div   style="margin-top:4.5px">
  <i class="fas fa-crop"></i> </div> </div> </div> 

<div  class="col-xs-4  col-sm-4 col-md-2" ></div>


<div  class="col-xs-2  col-sm-2  col-md-1  " style="margin-top:-10px;text-align:center;margin:auto;justify-content:center; display: inline; ">
<div  class=" zuzax  juju  zuperxy  bordertransxy" id="rotateleft" style="font-size:24px;height:40px;width:42px;border-radius:60px"><div   style="margin-top:4.5px">
 <i class="fas fa-sync-alt"></i> </div>  </div> </div> 


<div  class="col-xs-2  col-sm-2 col-md-4 "  style="">  </div> </div>




<div   class="col-xs-12" ></div>
<div class="  col-xs-1   col-sm-4"  > </div>
<div class="  col-xs-10   col-sm-4"   style="margin-top:30px"> 
<input id="cropzoomwide"  type="range" min="0.7" max="2" step="0.025"  value="1"  style="display: none" />
<input id="cropzoomlong"  type="range" min="0.8" max="2" step="0.025"  value="1"  style="display: none" />
<input id="cropzoomlock"  type="range" min="0.0" max="3" step="0.025"  value="1.5"  style="display: none" />
</div>
<div   class="col-xs-12" ></div>
</div>




<div   class="col-xs-12 za1" ></div> 


<div   class="col-xs-hidden  col-sm-1" ></div>


<div id="filterEdit"  class="col-xs-12 col-sm-10  " style="visibility:hidden; padding: 0px;margin-top:10px" >
    <ul id="orbit"    style="padding-top: 10px" >
   
<div  class="pam">

 

           <li   id="pip0" class=" zuzax juju ram">
    <a  id="Brightnessx"  style="">
      <div  class="ramk col-xs-12"  style="opacity:0.8"> <bottr > Brightness </bottr> </div>
      <div id="Brightnessxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop0"  style="opacity:0.6">  <i class="fas fa-sun"></i></div></a>
          </li>



           <li    id="pip1"  class=" zuzax juju ram">
    <a  id="Contrastx"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Contrast </bottr> </div>
       <div id="Contrastxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop1"  style="opacity:0.6">  <i class="fas fa-adjust"></i></div></a>
          </li>




           <li  id="pip2" class=" zuzax juju ram">
    <a  id="Saturationx"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Saturation </bottr> </div>
       <div id="Saturationxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop2"  style="opacity:0.6">  <i class="fas fa-star-half-alt"></i> </div></a>
          </li>




    <li    id="pip3" class=" zuzax juju ram">
    <a  id="Sharpenx"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Sharpen </bottr> </div>
       <div id="Sharpenxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop3"  style="opacity:0.6">  <i class="fas fa-bullseye"></i> </div></a>
          </li>



 <li   id="pip4" class=" zuzax juju ram">
    <a  id="Noisex"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Noise </bottr> </div>
       <div id="Noisexeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop4"  style="opacity:0.6">  <i class="fas fa-braille"></i> </div></a>
          </li>



           <li    id="pip5"  class=" zuzax juju ram">
    <a  id="Vignettex"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Vignette </bottr> </div>
       <div id="Vignettexeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop5"  style="opacity:0.6">  <i class="fas fa-circle"></i> </div></a>
          </li>



           <li  id="pip6"  class=" zuzax juju ram">
    <a  id="Colorx"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Color </bottr> </div>
       <div id="Colorxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop6"  style="opacity:0.6"> <i class="fas fa-brush"></i> </div></a>
          </li>




           <li   id="pip7" class=" zuzax juju ram">
    <a  id="Huex"  style=""><div  id=""  class="ramk col-xs-12" style="opacity:0.8"> <bottr > Hue </bottr> </div>
       <div id="Huexeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop7"  style="opacity:0.6"><i class="fas fa-cubes"></i> </div></a>
          </li>


           <li  id="pip8"  class=" zuzax juju ram">
    <a  id="Blurx"  style=""><div  id="" class="ramk col-xs-12" style="opacity:0.8"> <bottr > Blur </bottr> </div>
       <div id="Blurxeditdot"  class="col-xs-12 coloreddotplacement visiblehiddenman"  >  <i class="fas fa-circle"></i></div>
    <div class="col-xs-12   wutang"  id="trop8"  style="opacity:0.6"> <i class="fas fa-cloud"></i> </div></a>
          </li>



         </div>  </ul> </div> 




<div  class="col-xs-12 " ></div> 



<div   class="col-xs-hidden  col-sm-1" ></div>


<div id="filterContainer"  class="col-xs-12 col-sm-10"   style="visibility:hidden; padding:0px;" >
    <ul id="filters"  class="ramy "  >
   


   <li id="normal101" class="widthy0 zuzax juju ram"><a  id="normal"  style="">
          <div  id="normal100" class="ramk col-xs-12" style="opacity:0.8"> <bottr> Normal
           <span id="normal504"></span> </bottr> </div>
            <div id="normal600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"> 
  <canvas id="norm"   data-caman-hidpi-disabled="true"   class="rounder0" ></canvas>
        </div></a></li>


        <li  id="clarity101" class="widthy1 zuzax juju ram"><a  id="clarity">
          <div id="clarity100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>Clarity
            <span  id="clarity504"  class="zuperxy" style="font-size:6px;"><i class="fas fa-circle"></i></span></bottr>  </div>
          <div id="clarity600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12">
   <canvas id="clarityx" data-caman-hidpi-disabled="true"   class="rounder1" ></canvas>
    </div></a></li>


          <li id="enhance101" class="widthy2  zuzax juju ram"><a  id="enhance">
            <div id="enhance100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>   Enhance 
             <span  id="enhance504" class="zuperxy" style="font-size:6px;"><i class="fas fa-circle"></i></span> </bottr> </div>
             <div id="enhance600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div>
        <div class="col-xs-12">  
        <canvas id="enhancex"  data-caman-hidpi-disabled="true"  class="rounder2" ></canvas>
      </div></a></li>




 <li id="safari101"  class="widthy3  zuzax juju ram"><a  id="safari"  >
            <div id="safari100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>  Zoidberg
             <span id="safari504"></span> </bottr> </div>
      <div id="safari600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12">
            <canvas id="saf"   data-caman-hidpi-disabled="true"   class="rounder4" ></canvas></div>
        </a></li>





          <li id="concentratex101"  class="widthy4 zuzax juju  ram"><a  id="concentratex"  >
            <div id="concentratex100" class="ramk col-xs-12"  style="opacity:0.8"><bottr> Nebula
             <span id="concentratex504"></span></bottr>  </div>
      <div id="concentratex600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="con"  data-caman-hidpi-disabled="true"   class="rounder10" ></canvas> </div></a></li>






         <li  id="sunrise101" class="widthy5  zuzax juju ram"><a  id="sunrise">
          <div id="sunrise100" class="ramk col-xs-12"  style="opacity:0.8">   <bottr> Lars 
           <span id="sunrise504"></span> </bottr>  </div>
         <div id="sunrise600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12">    <canvas id="sunrisex"    data-caman-hidpi-disabled="true"  class="rounder5" ></canvas> </div>
        </a></li>




           <li  id="hazyDays101" class="widthy6 zuzax juju  ram"><a  id="hazyDays"  >
            <div id="hazyDays100" class="ramk col-xs-12"  style="opacity:0.8"><bottr>  Hazy 
             <span id="hazyDays504"></span> </bottr>  </div>
        <div id="hazyDays600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="hz"   data-caman-hidpi-disabled="true"  class="rounder7" ></canvas> </div>
       </a></li>


          <li id="lomo101" class="widthy7  zuzax juju ram"><a  id="lomo">
            <div id="lomo100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>   Tentacion 
             <span id="lomo504"></span> </bottr>  </div>
 <div id="lomo600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8">  <i class="fas fa-hourglass-half"></i>    </div> 
<div class="col-xs-12">  <canvas id="lomox"  data-caman-hidpi-disabled="true"  class="rounder3" ></canvas>
</div></a></li>



 <li  id="pinhole101"  class="widthy8 zuzax juju  ram"><a  id="pinhole"  >
            <div id="pinhole100" class="ramk col-xs-12"  style="opacity:0.8"><bottr>  Grizzly 
             <span class="zuperxy" id="pinhole504" style="font-size:6px;"><i class="fas fa-circle"></i></span></bottr>  </div>
              <div id="pinhole600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="pin"  data-caman-hidpi-disabled="true"  class="rounder12" ></canvas> </div></a></li>




       
         <li  id="glowingSun101"  class="widthy9 zuzax  juju  ram"><a  id="glowingSun"  >
          <div id="glowingSun100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>   Kiki
           <span id="glowingSun504"></span>  </bottr> </div>
     <div id="glowingSun600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12">    <canvas id="glox"    data-caman-hidpi-disabled="true"  class="rounder6" ></canvas>

           </div>
        </a></li>




          <li  id="crossProcess101" class="widthy10 zuzax juju  ram"><a  id="crossProcess"  >
            <div id="crossProcess100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr> Hype
             <span id="crossProcess504"></span> </bottr>  </div>
      <div id="crossProcess600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"> <canvas id="cross"   data-caman-hidpi-disabled="true"  class="rounder8" ></canvas>

           </div>
        </a></li>


          <li  id="jarques101" class="widthy11 zuzax juju  ram"><a  id="jarques"  >
            <div id="jarques100" class="ramk col-xs-12"  style="opacity:0.8"> <bottr>  Mint
             <span id="jarques504"></span>  </bottr></div>
          <div id="jarques600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="ja"   data-caman-hidpi-disabled="true"  class="rounder9" ></canvas></div></a></li>




            <li  id="oldBoot101" class="widthy12 zuzax juju ram"><a  id="oldBoot"  >
            <div id="oldBoot100" class="ramk col-xs-12" style="opacity:0.8"><bottr>  Old boot
             <span id="oldBoot504" class="zuperxy" style="font-size:6px;"><i class="fas fa-circle"></i></span></bottr>   </div>
          <div id="oldBoot600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="old"   data-caman-hidpi-disabled="true"  class="rounder13" ></canvas> </div></a></li>

         



          <li  id="MoonShine101"  class="widthy13 zuzax juju  ram"><a  id="MoonShine"  >
            <div id="MoonShine100" class="ramk col-xs-12"  style="opacity:0.8"><bottr>  MoonShine 
             <span class="zuperxy" id="MoonShine504" style="font-size:6px;"><i class="fas fa-circle"></i></span></bottr>  </div>
      <div id="MoonShine600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="mon"  data-caman-hidpi-disabled="true"   class="rounder14" ></canvas> </div></a></li>





       
          <li  id="nostalgia101"  class="widthy14 zuzax juju  ram"><a  id="nostalgia"  >
            <div id="nostalgia100" class="ramk col-xs-12"  style="opacity:0.8"><bottr> Nostalgia
             <span class="zuperxy" id="nostalgia504"  style="font-size:6px;"><i class="fas fa-circle"></i></span> </bottr>  </div>
      <div id="nostalgia600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="na"   data-caman-hidpi-disabled="true"  class="rounder15" ></canvas> </div></a></li>
        


 <li  id="vintage101" class="widthy15 zuzax juju  ram"><a  id="vintage"  >
            <div id="vintage100" class="ramk col-xs-12"  style="opacity:0.8"><bottr>  Vintage
             <span class="zuperxy"  id="vintage504" style="font-size:6px;"><i class="fas fa-circle"></i></span> </bottr>  </div>
              <div id="vintage600"   style="font-size:22px;text-align:center;width:auto;opacity:0.8"> <i class="fas fa-hourglass-half"></i>    </div> 
        <div class="col-xs-12"><canvas id="vin"   data-caman-hidpi-disabled="true"  class="rounder11" ></canvas> </div></a></li>



         

    </ul>
  </div> 
 

</div>
</div>

</row></container>
</div> 
</body>






   <script type="text/javascript">
 
 Tamefilters=0;
   Tametop =0; 
controlfixwidthx=0;
superstopper= 1;



document.getElementById("candyopac1").addEventListener('click',function(){
  document.getElementById("checkcontrol").value=0;
if(candybuttons) {clearTimeout(candybuttons); 
 $("#candyman").removeClass('transparentfalsecurvebottomOnly');
  $("#candyman").addClass('transparentallcurvebottomOnly');} 
  $("#topbuttons").show();$("#topbuttonsnext").hide();});




document.getElementById("firstcontrolhide").addEventListener('click',function(){
  document.getElementById("checkcontrol").value=1;
  if(tophandytime){clearTimeout(tophandytime);} 
    $("#handyvan").hide();$("#topbuttons").hide();
   
     $("#topbuttonsnext").show(); 
   $("#candyman").removeClass('transparentallcurvebottomOnly');
  $("#candyman").addClass('transparentfalsecurvebottomOnly');
   candybuttons = setTimeout(function(){
  $("#candyman").removeClass('transparentfalsecurvebottomOnly');
  $("#candyman").addClass('transparentallcurvebottomOnly');},4000);
   
  });


canvaslightpop = 1;

document.getElementById("holdoriginal").addEventListener('click',function(){
      var  checkcon=  $('#checkcontrolcan').val();
var  switchdd = $('#switchcanvas').val();
if( switchdd == 1){ var usdx="cantoo";   var usd="canv";  }else{  var usdx="canv";   var usd="cantoo";}
if(checkcon == 0){
   canvaslightpop = 1;
 $("#"+usdx+"").hide();  $("#"+usd+"").hide(); $("#nunu").show(); 
   document.getElementById("checkcontrolcan").value=1;
normii = setTimeout(function(){
if(canvaslightpop == 1){
    var  switchdd = $('#switchcanvas').val();
    if( switchdd == 1){ var usdx="cantoo";   var usd="canv";  }else{  var usdx="canv";   var usd="cantoo";}
    $("#"+usd+"").show();$("#"+usdx+"").hide();$("#nunu").hide();  document.getElementById("checkcontrolcan").value=0;
  if(detect == 1 && det==1){$("#"+usd+"").addClass('turcropcanvasbar');}else{$("#"+usd+"").addClass('turcropcanvascc');}
    if(detect == 1 && det==1){setTimeout(function(){$("#"+usd+"").removeClass('turcropcanvasbar');},300);}else{
  setTimeout(function(){$("#"+usd+"").removeClass('turcropcanvascc');},300);} canvaslightpop = 0;}
  },10000);  }
else{
   canvaslightpop = 0;
 document.getElementById("checkcontrolcan").value=0; 
if(normii) {clearTimeout(normii);} 
var  switchdd = $('#switchcanvas').val();
    if( switchdd == 1){ var usdx="cantoo";   var usd="canv";  }else{  var usdx="canv";   var usd="cantoo";}
    $("#"+usd+"").show();$("#"+usdx+"").hide();$("#nunu").hide();
    if(detect == 1 && det==1){$("#"+usd+"").addClass('turcropcanvasbar');}else{$("#"+usd+"").addClass('turcropcanvascc');}
if(detect == 1 && det==1){setTimeout(function(){$("#"+usd+"").removeClass('turcropcanvasbar');},300);}else{
  setTimeout(function(){$("#"+usd+"").removeClass('turcropcanvascc');},300);}
     }  });





////////////////pop up soft filters selction ////////////

    function  forcesoftselect(){
      if(editclicked == 0){
       var agx = document.getElementById('actgox'); 
 agx.style.backgroundColor="";
 var ag = document.getElementById('actgo'); 
 ag.style.backgroundColor="";
 var ag = document.getElementById('actgosof'); 
 ag.style.backgroundColor="<?php echo $_SESSION['cl']; ?>";}

 clearloudthumbnails();activatesoftlong=1;}

//////activatesoftlong = activatesoftloud
////////////////pop up soft filters selction ////////////





function clearloudthumbnails (){
$("#clarity101").hide();
$("#clarity100").hide();
$("#clarityx").hide();
$("#enhance101").hide();
$("#enhance100").hide();
$("#enhancex").hide();
$("#pinhole101").hide();
$("#pinhole100").hide();
$("#pin").hide();
$("#oldBoot101").hide();
$("#oldBoot100").hide();
$("#old").hide();
$("#MoonShine101").hide();
$("#MoonShine100").hide();
$("#mon").hide();
$("#nostalgia101").hide();
$("#nostalgia100").hide();
$("#na").hide();
$("#vintage101").hide();
$("#vintage100").hide();
$("#vin").hide();}




function startloudthumbnails (){
$("#clarity101").show();
$("#clarity100").show();
$("#clarityx").show();
$("#enhance101").show();
$("#enhance100").show();
$("#enhancex").show();
$("#pinhole101").show();
$("#pinhole100").show();
$("#pin").show();
$("#oldBoot101").show();
$("#oldBoot100").show();
$("#old").show();
$("#MoonShine101").show();
$("#MoonShine100").show();
$("#mon").show();
$("#nostalgia101").show();
$("#nostalgia100").show();
$("#na").show();
$("#vintage101").show();
$("#vintage100").show();
$("#vin").show();}








 function  afiltersoft(){
  var agx = document.getElementById('actgox'); 
 agx.style.backgroundColor="";
 var ag = document.getElementById('actgo'); 
 ag.style.backgroundColor="";
 var ag = document.getElementById('actgosof'); 
 ag.style.backgroundColor="<?php echo $_SESSION['cl']; ?>";
$('#filterContainer').show();
 $('#filterEdit').hide();
for ( var i = 0; i < 9; i++) {
   kaza= document.querySelector("#trop"+i+"");
  kaza.style.padding="0px";
 kaza.style.paddingTop="0px";
 kaza.style.paddingBottom="0px";  }
 clearloudthumbnails();
 activatesoftlong=1; 
 var filtersh = $('#filters li a');
filtersh.removeClass('active');
    };





 function  afilterloud(){
  var agx = document.getElementById('actgox'); 
 agx.style.backgroundColor="";
  var agx = document.getElementById('actgosof'); 
 agx.style.backgroundColor="";
 var ag = document.getElementById('actgo'); 
 ag.style.backgroundColor="<?php echo $_SESSION['cl']; ?>";
$('#filterContainer').show();
 $('#filterEdit').hide();
for ( var i = 0; i < 9; i++) {
   kaza= document.querySelector("#trop"+i+"");
  kaza.style.padding="0px";
 kaza.style.paddingTop="0px";
 kaza.style.paddingBottom="0px"; }
startloudthumbnails(); 
 activatesoftlong=0; };





 function  aedit(){
  editclicked = 1;
 var ag = document.getElementById('actgo'); 
 ag.style.backgroundColor="";
  var agx = document.getElementById('actgosof'); 
 agx.style.backgroundColor="";
  var agx = document.getElementById('actgox'); 
 agx.style.backgroundColor="<?php echo $_SESSION['cl']; ?>";
 if( detect== 1){  var fixwidthxaaa = fixwidthx /10; var padeditx=5.5;   var padeditxbb="-4";   }else{ var fixwidthxaaa = fixwidthx /6;  var padeditx=30;  var padeditxbb="0"; }
 $('#filterContainer').hide();
  var fee = document.getElementById('filterEdit'); 
 fee.style.visibility="visible";
 $('#filterEdit').show();
  eaza= document.querySelector("#filterEdit");
   eaza.style.marginTop=""+padeditxbb+"px"; 
for ( var i = 0; i < 9; i++){
   kaza= document.querySelector("#trop"+i+"");
  kaza.style.padding=""+padeditx+"px";
 kaza.style.paddingTop=""+fixwidthxaaa+"px"; 
  kaza.style.paddingBottom="auto";} }    
  </script>




<script  defer type="text/javascript">
    uncroppedCanvas= null,
     originalCanvas= null,
    filters = $('#filters li a'),
    filterContainer = $('#filterContainer');
 preventfilterbackwardmove = 0;
     zoomedvalue = 1;
     holdlockw=0;
     holdlockh=0;
 
 
 image = new Image();
image = document.querySelector("#previm1");


  uncroppedCanvas = document.querySelector("#canvcrop");
 uncroppedContext =  uncroppedCanvas.getContext('2d');
  

 originalCanvas = document.querySelector("#canv");
  originalContext =  originalCanvas.getContext('2d');
  imagex= originalCanvas;



  var cancanwcrop = document.querySelector("#getcanwidthcrop");
var cancanhcrop = document.querySelector("#getcanheightcrop");
 var maxWcrop = parseInt(window.getComputedStyle(cancanwcrop,null).width);
  var  maxHcrop = parseInt(window.getComputedStyle(cancanhcrop,null).height);
   var cancanwzitcrop = document.querySelector("#getcanwidthzxcrop");
var cancanhzitcrop = document.querySelector("#getcanheightzxcrop");
 var maxWzitcrop = parseInt(window.getComputedStyle(cancanwzitcrop,null).width);
  var  maxHzitcrop = parseInt(window.getComputedStyle(cancanhzitcrop,null).height);



   var cancanwsim1 = document.querySelector("#getcancropimage");
    var cancanhzsim1 = document.querySelector("#getcanheightcropimage");
  var  maxHsim1 = parseInt(window.getComputedStyle(cancanhzsim1,null).height);
   var maxWsim1 =parseInt(window.getComputedStyle(cancanwsim1,null).width) ; 
var cancanwsim2 = document.querySelector("#getcanwidthcropimage");
    var cancanhzsim2 = document.querySelector("#getcanheightcropimage");
  var  maxHsim2 = parseInt(window.getComputedStyle(cancanhzsim2,null).height);
   var maxWsim2 =parseInt(window.getComputedStyle(cancanwsim2,null).width) ; 
 var cancanwsim3 = document.querySelector("#getcancropimagepc");
    var cancanhzsim3 = document.querySelector("#getcanheightcropimage");
  var  maxHsim3 = parseInt(window.getComputedStyle(cancanhzsim3,null).height);
   var maxWsim3 =parseInt(window.getComputedStyle(cancanwsim3,null).width) ; 





function sizethisimagezmini(){
   var cancanwt = document.querySelector("#getwidthmini");
 var cancanht = document.querySelector("#getheightmini");
 var maxWt = parseInt(window.getComputedStyle(cancanwt,null).width);
  var  maxHt = parseInt(window.getComputedStyle(cancanht,null).height);
if( detect == 1){
  var cancanw = document.querySelector("#getcanwidthfinalmobilemini");
var cancanh = document.querySelector("#getcanheightfinalmobilemini");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
 if (iW > iH ){
  var cancanh = document.querySelector("#getcanheightfinalmobilewidemini");
 var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
 if (iW  < iH + 100 ){ 
  ///////// hd//////////////////
  ratio = iH / maxH;newHzmini = maxH;newWzmini = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHztmini =  iH / ratioht;
        newWztmini = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=3;
        ///alert("wide box");
     }else{
    ///////// hd//////////////////
  ratio = iH / maxH;newHzmini = maxH;newWzmini = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHztmini =  iH / ratioht;
        newWztmini = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=1;
       ///alert("wide");
     }
}else{
    if (iW > iH - 100) { 
      var cancanh = document.querySelector("#getcanheightfinalmobilewidemini");
 var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  ///////// hd//////////////////
  ratio = iH / maxH;newHzmini = maxH;newWzmini = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHztmini =  iH / ratioht;
        newWztmini = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=3;
        ///alert("long box");
     }else{
///////// hd//////////////////
  ratio = iH / maxH;newHzmini = maxH;newWzmini = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHztmini =  iH / ratioht;
        newWztmini = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=2;
        ///alert("long box 2nd");
 var ftd = document.querySelector("#watermarktextsizer");
 var ftdw = parseInt(window.getComputedStyle(ftd,null).height);
 var ftdx = document.querySelector("#findthumbdiff");
 var ftdwx = parseInt(window.getComputedStyle(ftdx,null).height);

 if(newHzt > ftdw){typeofwatermarkscreen=0; 
   ///alert("mobile long");
}
 if(newHzt > ftdwx){
///////////////hd////////////////
      ratioh = iW / maxW;newHzmini =  iH / ratioh;
        newWzmini = maxW;
       ////////hd////////////////
 ///////// real //////////////////
  ratiot = iH / maxHt;newHztmini = maxHt;newWztmini = iW / ratiot; 
     /////////////////// real ////////////////// 
   typeofwatermarkscreen=0;
    ///alert("mobile long");
     }}}
   }else{
        var cancanw = document.querySelector("#getcanwidthfinalpcmini");
var cancanh = document.querySelector("#getcanheightfinalpcmini");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
    if (iW > iH ){
     if (iW  < iH + 100 ){
     ///alert("pcbox");
 ///////////////hd////////////////
      ratioh = iW / maxW;newHzmini =  iH / ratioh;
        newWzmini = maxW;
       ////////hd//////////////// 
        }
     else{ 
      ///alert("pcwide");
///////// hd//////////////////
  ratio = iH / maxH;newHzmini = maxH;newWzmini = iW / ratio; 
     /////////////////// hd//////////////////
     detpc=1;}
                }
 else{ 
   ///alert("pcwlong");
 ///////////////hd////////////////
      ratioh = iW / maxW;newHzmini =  iH / ratioh;
        newWzmini = maxW;
       ////////hd//////////////// 
       }
  ///////// real //////////////////
  ratiot = iH / maxHt;newHztmini = maxHt;newWztmini = iW / ratiot; 
     /////////////////// real //////////////////
               }}






function sizethisimagez(){
   var cancanwt = document.querySelector("#getcanwidthfinal");
 var cancanht = document.querySelector("#getcanheightfinal");
 var maxWt = parseInt(window.getComputedStyle(cancanwt,null).width);
  var  maxHt = parseInt(window.getComputedStyle(cancanht,null).height);
if( detect == 1){
  var cancanw = document.querySelector("#getcanwidthfinalmobile");
var cancanh = document.querySelector("#getcanheightfinalmobile");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
 if (iW > iH ){
  var cancanh = document.querySelector("#getcanheightfinalmobilewide");
 var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
 if (iW  < iH + 100 ){ 
  ///////// hd//////////////////
  ratio = iH / maxH;newHz = maxH;newWz = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHzt =  iH / ratioht;
        newWzt = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=3;
        ///alert("wide box");
     }else{
    ///////// hd//////////////////
  ratio = iH / maxH;newHz = maxH;newWz = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHzt =  iH / ratioht;
        newWzt = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=1;
       ///alert("wide");
     }
}else{
    if (iW > iH - 100) { 
      var cancanh = document.querySelector("#getcanheightfinalmobilewide");
 var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  ///////// hd//////////////////
  ratio = iH / maxH;newHz = maxH;newWz = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHzt =  iH / ratioht;
        newWzt = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=3;
        ///alert("long box");
     }else{
///////// hd//////////////////
  ratio = iH / maxH;newHz = maxH;newWz = iW / ratio; 
     /////////////////// hd//////////////////
       ///////////////real////////////////
      ratioht = iW / maxWt;newHzt =  iH / ratioht;
        newWzt = maxWt;
       ////////real////////////////
       typeofwatermarkscreen=2;
        ///alert("long box 2nd");
 var ftd = document.querySelector("#watermarktextsizer");
 var ftdw = parseInt(window.getComputedStyle(ftd,null).height);
 var ftdx = document.querySelector("#findthumbdiff");
 var ftdwx = parseInt(window.getComputedStyle(ftdx,null).height);

 if(newHzt > ftdw){typeofwatermarkscreen=0; 
   ///alert("mobile long");
}
 if(newHzt > ftdwx){
///////////////hd////////////////
      ratioh = iW / maxW;newHz =  iH / ratioh;
        newWz = maxW;
       ////////hd////////////////
 ///////// real //////////////////
  ratiot = iH / maxHt;newHzt = maxHt;newWzt = iW / ratiot; 
     /////////////////// real ////////////////// 
   typeofwatermarkscreen=0;
    ///alert("mobile long");
     }}}
   }else{
        var cancanw = document.querySelector("#getcanwidthfinalpc");
var cancanh = document.querySelector("#getcanheightfinalpc");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
    if (iW > iH ){
     if (iW  < iH + 100 ){
     ///alert("pcbox");
 ///////////////hd////////////////
      ratioh = iW / maxW;newHz =  iH / ratioh;
        newWz = maxW;
       ////////hd//////////////// 
        }
     else{ 
      ///alert("pcwide");
///////// hd//////////////////
  ratio = iH / maxH;newHz = maxH;newWz = iW / ratio; 
     /////////////////// hd//////////////////
     detpc=1;}
                }
 else{ 
   ///alert("pcwlong");
 ///////////////hd////////////////
      ratioh = iW / maxW;newHz =  iH / ratioh;
        newWz = maxW;
       ////////hd//////////////// 
       }
  ///////// real //////////////////
  ratiot = iH / maxHt;newHzt = maxHt;newWzt = iW / ratiot; 
     /////////////////// real //////////////////
               }}








function sizethisimagex(){
if( detect == 1){
  var cancanw = document.querySelector("#getcanwidthfiltersmobile");
var cancanh = document.querySelector("#getcanheightfiltersmobile");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  if (iW > iH ){
    if (iW  < iH + 100 ){ 
       var cancanw = document.querySelector("#getcanwidthfiltersmobilewideone"); 
      var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
      ratioh = iW / maxW;newHx =  iH / ratioh;
      newWx = maxW; det = 1;
     }else{
         var cancanw = document.querySelector("#getcanwidthfiltersmobilewide"); 
      var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
      ratioh = iW / maxW;newHx =  iH / ratioh;
  newWx = maxW; det = 1;
  controlfixwidthx=1;
  var ddsskk= iW/1.6;
    if (iH > ddsskk){}else{}   }
  }else{
    if(iW > iH - 100){ ratio = iH / maxH;newHx = maxH;newWx = iW / ratio;  det = 0;}
    else{ ratio = iH / maxH;newHx = maxH; newWx = iW / ratio;  det = 0; }}
      }else{
        var cancanw = document.querySelector("#getcanwidthfilters");
var cancanh = document.querySelector("#getcanheightfilters");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  ratio = iH / maxH;newHx = maxH;newWx = iW / ratio;  det = 0;}
   newW =newWx;
  newH = newHx;}










function sizethisimagextoo(){
if( detect == 1){
  var cancanw = document.querySelector("#getcanwidthfiltersmobile");
var cancanh = document.querySelector("#getcanheightfiltersmobile");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  if (iW > iH ){
    if (iW  < iH + 100 ){ 
       var cancanw = document.querySelector("#getcanwidthfiltersmobilewideone"); 
      var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
      ratioh = iW / maxW;newHx =  iH / ratioh;
      newWx = maxW; det = 1;
     }else{
         var cancanw = document.querySelector("#getcanwidthfiltersmobilewide"); 
      var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
      ratioh = iW / maxW;newHx =  iH / ratioh;
  newWx = maxW; det = 1;
  controlfixwidthx=1;
  var ddsskk= iW/1.6;
    if (iH > ddsskk){  }else{
        var newch=document.getElementById("filtersspacer");
      newHxp = newHx / 3;
    newch.style.height=""+newHxp+"px";
    }}
  }else{
    if(iW > iH - 100){ ratio = iH / maxH;newHx = maxH;newWx = iW / ratio;  det = 0;}
    else{ ratio = iH / maxH;newHx = maxH; newWx = iW / ratio;  det = 0; }}
      }else{
        var cancanw = document.querySelector("#getcanwidthfilters");
var cancanh = document.querySelector("#getcanheightfilters");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
  ratio = iH / maxH;newHx = maxH;newWx = iW / ratio;  det = 0;}
   newW =newWx;
  newH = newHx;}






function sizequickview(){
 var cancanw = document.querySelector("#getcanwidthquick");
var cancanh = document.querySelector("#getcanheightquick");
 var maxW = parseInt(window.getComputedStyle(cancanw,null).width);
  var  maxH = parseInt(window.getComputedStyle(cancanh,null).height);
   var cancanwfit = document.querySelector("#getcanwidthquickcrop");
var cancanhfit = document.querySelector("#getcanheightquickcrop");
 var maxWfit = parseInt(window.getComputedStyle(cancanwfit,null).width);
  var  maxHfit = parseInt(window.getComputedStyle(cancanhfit,null).height);
  if (iW > iH ){
      ////////////hd draw///////
      ratioh = iW / maxW;newHc =  iH / ratioh;
      newWc = maxW; 
      //////hd draw//////////
        ////////////fitted draw///////
      ratiohfit = iW / maxWfit;  newHcfit =  iH / ratiohfit;
      newWcfit = maxWfit; 
      //////fitted draw//////////
       }else{
      ////////////hd draw///////
     newHc =  maxH;
 ratio = iH / maxH; newWc = iW / ratio; 
   ////////////hd draw///////
   ////////////fitted draw///////
 newHcfit =  maxHfit;
 ratiofit = iH / maxHfit; newWcfit = iW / ratiofit;
   ////////////fitted draw///////
       }}






function sizecropcanvas(){
    if (iWx > iHx ){
    ////////////large zoom//////////
    newWcx = maxWcrop;
   ratioh = iWx / maxWcrop;
   newHcx =   iHx / ratioh;
   /////////// largezoom /////////////
    /////////// fitted zoom /////////////
newWcxzit =  maxWzitcrop;
   ratiohzit = iWx / maxWzitcrop;
   newHcxzit =   iHx / ratiohzit;
     /////////// fitted zoom /////////////
   }
  else{
     /////////// largezoom /////////////
 newHcx =  maxHcrop;
 ratio = iHx / maxHcrop; 
 newWcx = iWx / ratio; 
 /////////// largezoom /////////////
/////////// fitted zoom /////////////
 newHcxzit =   maxHzitcrop;
 ratiozit = iHx / maxHzitcrop; 
 newWcxzit =  iWx / ratiozit; 
   /////////// fitted zoom /////////////
 }
       }





function sizecropimage(){
  if (iW > iH ){
    
       ratioh = iH / maxHsim1;
      newHcxj = zoomedvalue *  maxHsim1;
      newWcxj = zoomedvalue *  iW / ratioh;
     switchslider=0}
  else{if(detect == 1){
      ratioh = iW / maxWsim2;
      newHcxj = zoomedvalue * iH / ratioh;
      newWcxj =zoomedvalue *  maxWsim2;}else{
  
      ratioh = iW / maxWsim3;
      newHcxj = zoomedvalue *  iH / ratioh;
      newWcxj = zoomedvalue *  maxWsim3;}
      switchslider=1;
        }}




function sizecropimagelock(){

         var  croplockwidthx = <?php echo $_SESSION['supercropwidth']; ?>;
           var croplockheightx= <?php echo $_SESSION['supercropheight']; ?>;


  if (iW > iH ){
    

       ratioh = iH / maxHsim1;
     naaph = zoomedvalue *  maxHsim1;
      nappw = zoomedvalue *  iW / ratioh;
    if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;
      holdlockw=newWcxj;
      holdlockh=newHcxj;}


     switchslider=0}
  else{if(detect == 1){
      ratioh = iW / maxWsim2;
      naaph = zoomedvalue * iH / ratioh;
      nappw =zoomedvalue *  maxWsim2;

     if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;
    holdlockw=newWcxj;
     holdlockh=newHcxj;}

}else{
  
      ratioh = iW / maxWsim3;
      naaph = zoomedvalue *  iH / ratioh;
      nappw = zoomedvalue *  maxWsim3;
    if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;
      holdlockw=newWcxj;
          holdlockh=newHcxj;}}
      switchslider=1;
        }}





function sizecropimagego(){

         var  croplockwidthx = <?php echo $_SESSION['supercropwidth']; ?>;
           var croplockheightx= <?php echo $_SESSION['supercropheight']; ?>;


  if (iW > iH ){
    

       ratioh = iH / maxHsim1;
     naaph = zoomedvalue *  maxHsim1;
      nappw = zoomedvalue *  iW / ratioh;
    if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;}else{
         newWcxj= holdlockw;
           newHcxj = holdlockh;}


     switchslider=0}
  else{if(detect == 1){
      ratioh = iW / maxWsim2;
      naaph = zoomedvalue * iH / ratioh;
      nappw =zoomedvalue *  maxWsim2;

     if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;}else{
         newWcxj= holdlockw;
           newHcxj = holdlockh;}

}else{
  
      ratioh = iW / maxWsim3;
      naaph = zoomedvalue *  iH / ratioh;
      nappw = zoomedvalue *  maxWsim3;
    if( naaph > croplockheightx &&   nappw > croplockwidthx){
      newHcxj = naaph;
      newWcxj = nappw;}else{
         newWcxj= holdlockw;
           newHcxj = holdlockh;}

              }
      switchslider=1;
        }}






//////////////////////crop functions//////////////////////////////


 rotatexx = 0;
 expand = 0;





function  quickview(image) {
   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent) ){ detect=1;  pushzoom=1;  $("#Colorxeditdot").addClass('pushalittlemobile'); }else{ detect=0;  pushzoom=0;  $("#Colorxeditdot").addClass('pushalittle');}

iW  = image.width;
iH = image.height;

if(iW >= 6000 || iH >= 6000){ 
$("#highresolutionmaker").show(); 
setTimeout(function(){ $("#highresolutionmaker").hide();},5000);}
  

 var zoomlockstate= <?php echo $_SESSION['supercropstate']; ?>;
    var zoomlockstateallow= <?php echo $_SESSION['supercropstateallow']; ?>;
  var  croplockwidth = <?php echo $_SESSION['supercropwidth']; ?>;
  var croplockheight= <?php echo $_SESSION['supercropheight']; ?>;
    var  stylewidth = <?php echo $_SESSION['superstylewidth']; ?>;
  var styleheight= <?php echo $_SESSION['superstyleheight']; ?>;


if(zoomlockstate == 1  &&  zoomlockstateallow == 1){
  $("#funcrop").hide();
$("#cropzoomlock").show();
iW  = image.width;
iH = image.height;
if(zoomlockstate == 1  &&  zoomlockstateallow == 1){
if(forcelockcrop==0){
for (var i = 3.01; i > 0.01; i-=0.01) {
     var bb= i.toFixed(2); 
        iWx  = 680;
      iHx =  680;
      zoomedvalue=bb;
 sizecropcanvas();  
sizecropimagelock();
var zv=0;} forcelockcrop=1;  }
else{
   iWx  = 680;
      iHx =  680;
sizecropcanvas();  
sizecropimagego();
var zv=0;}}
else{
iWx  = 680;
      iHx =  680;
sizecropcanvas();  
sizecropimage();
var zv=0; }

//////////////////////////////////////IMAGECANVASFITTER

  var adjustcanvasfitmobile = 0;

   if (iW > iH ){
    ////newWcxj image size
    ///newWcx canvas size
    ////width
    if ( zoomedvalue <= 1){
  var adjustcanvasfitmobile = 1;
  if(newWcx > newWcxj){uncroppedCanvas.width =  newWcxj;
   var  maxlimitx =  newWcxj - newWcxj;}
  else{uncroppedCanvas.width =  newWcx;
   var  maxlimitx =  newWcxj - newWcx;}
  uncroppedCanvas.height  = newHcxj;
  var  maxlimity =  newHcxj - newHcxj;
  }else{uncroppedCanvas.width = newWcx;
    uncroppedCanvas.height  = newHcx;
  var  maxlimity =  newHcxj - newHcx;
   var  maxlimitx =  newWcxj - newWcx;}
    /////width
  }else{
    ////newHcxj image size
    ///newHcx canvas size
      ///height
   if ( zoomedvalue <= 1){
  uncroppedCanvas.width =  newWcxj;
  var  maxlimitx =  newWcxj -  newWcxj;
  if(newHcx > newHcxj){ uncroppedCanvas.height  = newHcxj;
  var  maxlimity =  newHcxj - newHcxj;}
  else{uncroppedCanvas.height  = newHcx; 
  var  maxlimity =  newHcxj - newHcx;} 
  }else{ uncroppedCanvas.width = newWcx;
    uncroppedCanvas.height  = newHcx;
  var  maxlimity =  newHcxj - newHcx;
   var  maxlimitx =  newWcxj - newWcx;}
  ///////height
  }

//////////////////////////////////////IMAGECANVASFITTER
     
if(zoomlockstate == 1  &&  zoomlockstateallow == 1){
newWcxzit = stylewidth;
     newHcxzit =  styleheight;
uncroppedCanvas.width=croplockwidth;  uncroppedCanvas.height=croplockheight;
 var  maxlimity =  newHcxj - croplockheight;
   var  maxlimitx =  newWcxj - croplockwidth;}


if(detect==1 ){$("#canvcrop").addClass('turcropcanvasbar');}
else{$("#canvcrop").addClass('turcropcanvas');}
     

uncroppedContext.drawImage(image, 0,0, image.width,image.height ,reportx,reporty, newWcxj, newHcxj);

if(adjustcanvasfitmobile == 1 && detect == 1){
uncroppedCanvas.style.width=""+newWcxzit+"px";  uncroppedCanvas.style.height="auto";}
else{uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcxzit+"px";}


}
else{
// Set the canvas the same width and height of the image
       iW  = image.width;
      iH = image.height;
      iWx  = 680;
      iHx =  680;
 sizequickview(); 
 sizecropcanvas();  
sizecropimage();
sizethisimagex();
if(detect==1  && det ==1 ){$("#canvcrop").addClass('turcropcanvasbar');}
else{$("#canvcrop").addClass('turcropcanvas');}
uncroppedCanvas.width = newWc;
  uncroppedCanvas.height  = newHc;

   holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;


 uncroppedContext.drawImage(image, 0,0, image.width,image.height ,0,0, newWc, newHc);
 if( det == 1){uncroppedCanvas.style.width="100%";   uncroppedCanvas.style.height="auto";}else{
 uncroppedCanvas.style.height="60%"; uncroppedCanvas.style.width="auto";}


var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);    }

     }




quickview(image);



/////////////////crop functions////////////////////////////////








function  real() {
// Set the canvas the same width and height of the croped canvas (croppedCanvas) or uncrop original (uncroppedCanvas)
      iW  = uncroppedCanvas.width;
      iH = uncroppedCanvas.height;
sizethisimagez();
 sizethisimagextoo();
originalCanvas.width = newWx;
  originalCanvas.height  = newHx;
        originalContext.drawImage(uncroppedCanvas, 0,0, uncroppedCanvas.width,uncroppedCanvas.height ,0,0, newWx, newHx);
if(detect==1 && det==1 ){$("#canv").addClass('turfiltercanvasnone');}
else{$("#canv").addClass('turfiltercanvas');}
if( det == 1){originalCanvas.style.width="100%";   originalCanvas.style.height="auto";}else{
 originalCanvas.style.height="60%"; originalCanvas.style.width="auto";}}









///////////////////////////////////////////////////////////big zoom fulll start/////////////////////////




/////////big zoooom function
function zoomsize(){
/////collect variables

if (Tamefilters > 12){

  var  switchcang = $('#switchcanvas').val();
if( switchcang == 1){ var usg="canv";  }else{  var usg="cantoo";}
var filedyy = $('#editstart').val();
 var  zoomp =  $('#zoomprecise').val();
  var  checkzoom =  $('#checkzoom').val();
  /////collect variables
if(checkzoom == 0){
  /////// if 0 zooom + else zoom - checkzoom
    $("#topzoombutton").hide();
var newc=document.getElementById(""+usg+"");
var norw=document.getElementById("nunu");
////////////from if ereb filterpass else (non attainable but here in case)
////////zooom + start
 if (iW > iH ){
if (iW  < iH + 100 ){
//alert("wide"); 
if(pushzoom == 1){
newc.style.width="140%";
   newc.style.height="auto";
   norw.style.width="140%";
   norw.style.height="auto";
}else{ 
 newc.style.height="100%";
   newc.style.width="auto"; 
 norw.style.height="100%";
   norw.style.width="auto";}
 }else{
//alert("widebox");
if(pushzoom == 1){
newc.style.width="150%";
   newc.style.height="auto";
   norw.style.width="150%";
   norw.style.height="auto";
}else{ 
 newc.style.height="100%";
   newc.style.width="auto";
  norw.style.height="100%";
   norw.style.width="auto";}
}} 
else{
if (iW > iH - 100){
//alert("longbox");
if(pushzoom == 1){
newc.style.width="130%";
   newc.style.height="auto";
   norw.style.width="130%";
   norw.style.height="auto";
}else{ 
 newc.style.height="100%";
   newc.style.width="auto";
   norw.style.height="100%";
   norw.style.width="auto";}
  }else{
//alert("long");
     newc.style.height="100%";
   newc.style.width="auto"; 
  norw.style.height="100%";
   norw.style.width="auto";}}
if(zoomp == 1){ $("#slideoption").hide();}
  else{$("#controlz").hide(); $("#controlx").hide(); 
   if(filedyy == 1){ $("#filteroption").hide(); }else{ $("#editoption").hide();  } }
document.getElementById("checkzoom").value=1;
document.getElementById("zaax").style.width="100%";
document.getElementById("zaax").style.height="100%";
document.getElementById("topbuttonsin").style.zIndex="1";
$("#topbuttonsnext").hide();
$("#clozoom").show();
////////zooom + end
}
////////zooom - start
  else{
var newc=document.getElementById(""+usg+""); 
var norw=document.getElementById("nunu");
 if( det== 1){
 newc.style.width="100%";  newc.style.height="auto";
norw.style.width="100%";  norw.style.height="auto";}else{
 newc.style.height="60%";  newc.style.width="auto";
 norw.style.height="60%";  norw.style.width="auto";}
if(zoomp == 1){ $("#slideoption").show();}
  else{$("#controlz").show(); $("#controlx").show();
    if(filedyy == 1){ $("#filteroption").show();}else{ $("#editoption").show();  }    }
  document.getElementById("checkzoom").value=0; 
  document.getElementById("zaax").style.width="0%";
document.getElementById("zaax").style.height="0%";
document.getElementById("topbuttonsin").style.zIndex="110";
 var checktopxx = $("#checkcontrol").val();
  var sliderfx = $("#sliderfiltereditactive").val();
  if(sliderfx == 0){
if(checktopxx == 0){  $("#topbuttons").show(); }
  else{ $("#topbuttonsnext").show(); } }
$("#clozoom").hide();
$("#topzoombutton").show();
    }
    ////////zooom - end
  }
}
/////////////////big zoooom function



document.getElementById("clozoom").addEventListener('click',function(){requestAnimationFrame(zoomsize);});

document.getElementById("candyopac2").addEventListener('click',function(){requestAnimationFrame(zoomsize);});


///////////////////////////////////////////////////////////big zoom fulll start/////////////////////////













///////////////////////////////////gradient /////////real///////////////

function toasterGradientactive(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  // Fill a Radial Gradient
  // https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/createRadialGradient
  //  createLinearGradient createRadialGradient
  var gradient = ctx.createRadialGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.5);
gradient.addColorStop(0, "#804e0f");
  gradient.addColorStop(1, "#220b28");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




  function toasterGradientactivelow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  // Fill a Radial Gradient
  // https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/createRadialGradient
  //  createLinearGradient createRadialGradient
  var gradient = ctx.createRadialGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.5);
gradient.addColorStop(0, "#552200");
  gradient.addColorStop(1, "#220b28");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}



function toasterGradientlomo(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient = ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#28170b");
  gradient.addColorStop(1, "#552200");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}



  function toasterGradientlomolow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient = ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#241c1c");
  gradient.addColorStop(1, "#2b1100");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




function toasterGradientreal(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#2d1650");
  gradient.addColorStop(1, "#000055");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}


function toasterGradientreallow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#170b28");
  gradient.addColorStop(1, "#00002b");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




function toasterGradientmint(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#002b22");
  gradient.addColorStop(1, "#002b22");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




function toasterGradienthaze(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#333333");
  gradient.addColorStop(1, "#333333");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}



function toasterGradientgriz(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#222222");
  gradient.addColorStop(1, "#000000");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}


function toasterGradientvintage(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#000000");
  gradient.addColorStop(1, "#0b1728");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




function toasterGradientsunrise(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#550044");
  gradient.addColorStop(1, "#280b17");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}

function toasterGradientsunriselow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2, height / 2, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#2b0022");
  gradient.addColorStop(1, "#50162d");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}






  function toasterGradientsummer(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2 , height / 0.5, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#00aa44");
  gradient.addColorStop(1, "#000000");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}


  


 function toasterGradientsummerlow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 2 , height / 0.5, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#008033");
  gradient.addColorStop(1, "#000000");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}





  function toasterGradientsafari(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 73.6, height / 33.4, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#214478");
  gradient.addColorStop(1, "#28170b");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}




  function toasterGradientsafarilow(width, height) {
  var texture = document.createElement('canvas');
  var ctx = texture.getContext('2d');
texture.width = width;
  texture.height = height;
  var gradient =ctx.createLinearGradient(width / 73.6, height / 33.4, 0, width / 2, height / 2, width * 0.6);
gradient.addColorStop(0, "#002255");
  gradient.addColorStop(1, "#28170b");
ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, width, height);
  return ctx;}








///////////gradient real/////////////////////////////////////


  ///////////gradient blend//////////////////////////////



function blend (background, foreground, width, height, transform) {
   var bottom = background.getImageData(0, 0, width, height);
   var top = foreground.getImageData(0, 0, width, height);
   for (var i = 0, size = top.data.length; i < size; i += 4) {
     // red
     top.data[i + 0] = transform(bottom.data[i + 0], top.data[i + 0]);
     // green
     top.data[i + 1] = transform(bottom.data[i + 1], top.data[i + 1]);
     // blue
     top.data[i + 2] = transform(bottom.data[i + 2], top.data[i + 2]);
     // the fourth slot is alpha. We don't need that (so skip by 4)
   }return top;
 }

///////////////gradient blend////////////////////////////




//////////////////hide stuff to start crop function//////////////////

 $(document).ready(function(){

$('#holdtame').hide();
 document.querySelector("#holdtame").style.visibility="visible";
$('#filteroption').hide();
document.querySelector("#filteroption").style.visibility="visible";

$('#filterContainer').hide();

$('#topzoombutton').hide();
$('#topbuttons').hide();  
document.querySelector("#topbuttons").style.visibility="visible"; });


//////////////////hide stuff to start crop function//////////////////












///////////////////////  start thumbalil //////////////////





function startthumbnails(){

 adjfixwidth= fixwidth;
if( detect== 1){ adjfixwidth= fixwidth+3; owlglassup=70; owlglasswidth=130;}
else{ adjfixwidth= fixwidth + 32; owlglassup=53; owlglasswidth=100;}

 fud= document.querySelector("#filterContainer");
 fud.setAttribute("style", "visibility:visible;position:relative");
   $("#filterEdit").hide(); 



  for ( var i = 0; i < 16; i++) {
 wdd= document.querySelector(".widthy"+i+"");
  var saax = document.querySelector(".rounder"+i+"");
 saax.setAttribute("style", "border-radius:6px");
   wdd.setAttribute("style", "width:"+adjfixwidth+"px");  }




/////////////////////thumbnails

var ffw = document.querySelector("#fullwidth");
  var fullwidth = parseInt(window.getComputedStyle(ffw,null).width);
filt= document.querySelector("#filters");
    filt.setAttribute("style", "width: "+fullwidth+"px");

var gfw = document.querySelector("#getfilterwidth");
  var fixwidth = parseInt(window.getComputedStyle(gfw,null).width);
 ///var canvhe = document.querySelector("#canv");
  var canvhe = document.querySelector("#findthumbdiffcanv");
  var findhe = document.querySelector("#findthumbdiff");
   var ch = parseInt(window.getComputedStyle(canvhe,null).height); 
    var fh = parseInt(window.getComputedStyle(findhe,null).height); 

     fixwidthx = fixwidth + 20;
   if(controlfixwidthx == 1){  fixwidthx = fixwidth + 20;}
   else{ if( ch==0 || ch==null || ch==" " ){ fixwidthx = fixwidth + 20;}
   else{ fixwidthx = fh - ch; if(detect == 0){fixwidthx = fixwidthx - 20;} }  } 

  

      iWt  =  originalCanvas.width;
      iHt =  originalCanvas.height;

var scale = Math.max(fixwidth /iWt , fixwidthx/iHt);
var w = iWt * scale;
var h = iHt * scale;
var left =   w /2  - fixwidth / 2;
 if (iWt > iHt ){if (iWt  < iHt + 100 ){ var left = 0 }}
var top = fixwidthx /2 - h /2;

stage4 =imagex; 
 


 o = document.querySelector("#norm");
function norm(imagex) {var ox= o.getContext('2d');
 o.width = fixwidth;o.height  = fixwidthx ;
ox.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
$("#normal600").hide();
Tamefilters++; if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();} }




 lo = document.querySelector("#lomox");
function lomo(imagex) {var lox= lo.getContext('2d');
 lo.width = fixwidth;lo.height  =  fixwidthx;
lox.drawImage(stage4,left,0, stage4.width ,stage4.height,0,-0,w ,h );
Caman("#lomox", function () {
this.lomo();this.render(function() { 
 width = w; hei = fixwidthx; 
toptt = document.querySelector("#lomox");
 var ctop = toptt.getContext('2d');
 var gradient = toasterGradientlomo(width, hei);
    var screen = blend(ctop, gradient, width, hei, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
ctop.putImageData(screen, 0,-1);   $("#lomo600").hide();Tamefilters++; 
if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();}    });  });} 



cla = document.querySelector("#clarityx");
function clar(imagex) {var clax= cla.getContext('2d');
 cla.width = fixwidth;cla.height  =  fixwidthx;
clax.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#clarityx", function () {
this.clarity();this.render(function() {  
 $("#clarity600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();}     });this.revert(false);});}



 clad = document.querySelector("#enhancex");
function enh(imagex) {var claxd= clad.getContext('2d');
 clad.width = fixwidth;clad.height  =  fixwidthx;
claxd.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#enhancex", function () {
this.enhance();this.render(function() {  
 $("#enhance600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}     });this.revert(false);});}



  ssun = document.querySelector("#sunrisex");
function sun(imagex) {var  ssunx= ssun.getContext('2d');
 ssun.width = fixwidth;ssun.height  =  fixwidthx;
ssunx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h );
Caman("#sunrisex", function () {
this.sunrise();this.render(function(){ 
width = w;height  = h;
 sunjj = document.querySelector("#sunrisex");
 var xxsunjj = sunjj.getContext('2d');
 var gradient = toasterGradientsunrise(width, height);
    var screen = blend(xxsunjj, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
xxsunjj.putImageData(screen, 0, 0); $("#sunrise600").hide();Tamefilters++;
if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();}   });
this.revert(false);});}



 gg = document.querySelector("#glox");
function  glo(imagex) {var  ggx= gg.getContext('2d');
 gg.width = fixwidth;gg.height  =  fixwidthx;
ggx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,-0,w ,h);
Caman("#glox", function () {
 this.glowingSun();this.render(function() {  
   width = w;  height  = fixwidthx;
 sfrrigg = document.querySelector("#glox");
 var xxsfrrigg = sfrrigg.getContext('2d');
 var gradient = toasterGradientsummer(width, height);
    var screen = blend(xxsfrrigg, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
xxsfrrigg.putImageData(screen, 0, -1);$("#glowingSun600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();}    });this.revert(false);});}



 srri = document.querySelector("#saf");
function  fari(imagex) {var  srrix= srri.getContext('2d');
 srri.width = fixwidth;srri.height  =  fixwidthx;
srrix.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#saf", function () {
this.safari();
this.render(function() {
 width = w;  height  = h;
 sfrri = document.querySelector("#saf");
 var xxsfrri = sfrri.getContext('2d');
 var gradient = toasterGradientsafari(width, height);
    var screen = blend(xxsfrri, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
xxsfrri.putImageData(screen, 0, 0); $("#safari600").hide();Tamefilters++; 
if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();} });
});}



 ross = document.querySelector("#cross");
function  cro(imagex) {var  rossx= ross.getContext('2d');
 ross.width = fixwidth;ross.height  =  fixwidthx; 
rossx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,-0,w,h);
Caman("#cross", function () {
this.crossProcess();this.render(function(){
 width = w;   height = fixwidthx;
 crr = document.querySelector("#cross");
 var crrrx = crr.getContext('2d');
 var gradient = toasterGradientactivelow(width, height);
    var screen = blend(crrrx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
crrrx.putImageData(screen, 0,-1);  $("#crossProcess600").hide();Tamefilters++;
if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}
 });
this.revert(false);});}




  jjar = document.querySelector("#ja");
function  jar(imagex) {var  jjarx= jjar.getContext('2d');
 jjar.width = fixwidth;jjar.height  =  fixwidthx;
jjarx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h );
Caman("#ja", function () {
this.jarques();this.render(function() {  
 $("#jarques600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}    });this.revert(false);});}



 coo = document.querySelector("#con");
function  caaa(imagex) {var  coox= coo.getContext('2d');
 coo.width = fixwidth;coo.height  =  fixwidthx;
coox.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#con", function () {
this.concentratex();this.render(function() {
width = w;   height = fixwidthx;
 crrp = document.querySelector("#con");
 var crrrxp = crrp.getContext('2d');
 var gradient = toasterGradientreal(width, height);
    var screen = blend(crrrxp, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
crrrxp.putImageData(screen, 0,-1);   
 $("#concentratex600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}       });this.revert(false);});}



 ol = document.querySelector("#old");
function  oldd(imagex) {var  olx= ol.getContext('2d');
 ol.width = fixwidth;ol.height  =  fixwidthx;
olx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#old", function () {
this.oldBoot();this.render(function() {  
 $("#oldBoot600").hide();Tamefilters++; if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
if(Tamefilters>15){forcesoftselect();}     });this.revert(false);});}


 vi = document.querySelector("#vin");
function  vii(imagex) {var  vix= vi.getContext('2d');
 vi.width = fixwidth;vi.height  =  fixwidthx;
vix.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#vin", function () {
this.vintage();this.render(function() {  
   width = w;   height = fixwidthx;
 crry = document.querySelector("#vin");
 var crrrxy = crry.getContext('2d');
 var gradient = toasterGradientvintage(width, height);
    var screen = blend(crrrxy, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
crrrxy.putImageData(screen, 0,-1);$("#vintage600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}     });this.revert(false);});}


 pi = document.querySelector("#pin");
function  pii(imagex) {var  pix= pi.getContext('2d');
 pi.width = fixwidth;pi.height  =  fixwidthx;
pix.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h);
Caman("#pin", function () {
this.pinhole();this.render(function() { 
width = w;   height = fixwidthx;
 gcrrp = document.querySelector("#pin");
 var gcrrrxp = gcrrp.getContext('2d');
 var gradient = toasterGradientgriz(width, height);
    var screen = blend(gcrrrxp, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
gcrrrxp.putImageData(screen, 0,-1);    
 $("#pinhole600").hide();Tamefilters++; if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}} 
   if(Tamefilters>15){forcesoftselect();}    });this.revert(false);});}


 mo = document.querySelector("#mon");
function  moo(imagex) {var  mox= mo.getContext('2d');
 mo.width = fixwidth;mo.height  =  fixwidthx;
mox.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h );
Caman("#mon", function () {
this.MoonShine();this.render(function() {  
 $("#MoonShine600").hide();Tamefilters++;  if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}     });this.revert(false);});}



 hh = document.querySelector("#hz");
function  hoo(imagex) {var  hhx= hh.getContext('2d');
 hh.width = fixwidth;hh.height  =  fixwidthx;
hhx.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h );
Caman("#hz", function () {
this.hazyDays();this.render(function() {  
 $("#hazyDays600").hide();Tamefilters++; 
 if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}
   if(Tamefilters>15){forcesoftselect();}   });this.revert(false);});}



 naa = document.querySelector("#na");
function  noo(imagex) {var  naax= naa.getContext('2d');
 naa.width = fixwidth;naa.height  =  fixwidthx;
naax.drawImage(stage4,left, 0, stage4.width ,stage4.height,0,0,w ,h );
Caman("#na", function () {
this.nostalgia();this.render(function() {  
 $("#nostalgia600").hide();Tamefilters++; if(Tamefilters>12){$("#holdtame").hide();if(Tametop == 0){ $("#holdtoppointer").show();
   tophandytime = setTimeout(function(){$("#handyvan").hide();},10000); Tametop++;}}if(Tamefilters>15){forcesoftselect();}
     });this.revert(false);});}



  norm(imagex);lomo(imagex);clar(imagex);enh(imagex);sun(imagex);glo(imagex);fari(imagex);cro(imagex);jar(imagex);
   caaa(imagex); oldd(imagex); vii(imagex); pii(imagex);  moo(imagex);  hoo(imagex);  noo(imagex);



var owlly=['normal600','clarity600','enhance600','lomo600','safari600','sunrise600','glowingSun600','hazyDays600','crossProcess600','jarques600','concentratex600','vintage600','pinhole600','oldBoot600','MoonShine600','nostalgia600'];

var zilly=['norm','clarityx','enhancex','lomox','saf','sunrisex','glox','hz','cross','ja','con','vin','pin','old','mon','na'];

var fwd = document.querySelector("#getfilterwidthreal");
  var fix = parseInt(window.getComputedStyle(fwd,null).width);
 adjfix= fix;
if( detect== 1){  adjfix= fix + 3;   adjfixe= fix + 3;  adjfixet= fix - 10;}else{ adjfixe= fix + 32; adjfixet= fix + 32; adjfix= fix + 38; }

  
 
 
for ( var i = 0; i < 16; i++) {
  wddx= document.querySelector(".widthy"+i+"");
 wddx.setAttribute("style", "width:"+adjfix+"px");
 dear= document.getElementById(""+zilly[i]+""); 
    dear.style.width= ""+fix+"px";
  dear.style.height= "auto"; 
   jll= document.getElementById(""+owlly[i]+"");
   jll.style.position="absolute";
   jll.style.zIndex= "2";
   jll.style.marginTop=""+owlglassup+"%";
   jll.style.width=""+owlglasswidth+"%";  }



   for ( var i = 0; i < 9; i++) {
    if(i == 7){ 
     pkaza= document.querySelector("#pip"+i+"");
    pkaza.style.width=""+adjfixet+"px";}
      else{
  pkaza= document.querySelector("#pip"+i+"");
    pkaza.style.width=""+adjfixe+"px";
      }} 

 

  }



/////////////////////// start thumbnails//////////////////// 











/////////////////////////////  START  FILTERS ///////////////////////////

 function  startfilters (){


if(handpt == 0){ if(pointtime) {clearTimeout(pointtime);}   $("#holdpoint").hide(); handpt=1; }

$('#canvcrop').hide();
$('#pushtopforcropcanvas').hide();
$('#croptopbuttons').hide();
$('#cropreal').hide();
   

$('#holdtame').show();
$('#filteroption').show();
$('#filterContainer').show();
if(detect == 0 ){ $('#topzoombutton').show();}



real();


var can = document.createElement('canvas');
can.setAttribute("data-caman-hidpi-disabled", "true");
can.id = 'cantoo';
 can.width = newW;
   can.height  = newH;
document.body.appendChild(can); // adds the canvas to the body element
document.getElementById('holdoriginal').appendChild(can); // adds the canvas to #someBox
    var nCanvas = document.querySelector("#cantoo");
    if(detect==1 && det==1 ){$("#cantoo").addClass('turfiltercanvasnone');}
else{$("#cantoo").addClass('turfiltercanvas');}
var cx = nCanvas.getContext('2d');
 cx.drawImage(originalCanvas, 0,0, originalCanvas.width,originalCanvas.height ,0,0, newW, newH);
   $("#cantoo").hide(); 




var pan = document.createElement('canvas');
pan.setAttribute("data-caman-hidpi-disabled", "true");
pan.id = 'nunu';
 pan.width = newWx;
   pan.height  = newHx;
document.body.appendChild(pan); // adds the canvas to the body element
document.getElementById('holdoriginal').appendChild(pan); // adds the canvas to #someBox
    var nCanvasg = document.querySelector("#nunu");
      if(detect==1 && det==1 ){$("#nunu").addClass('turfiltercanvasnone'); }
else{$("#nunu").addClass('turfiltercanvas');}
var cxj = nCanvasg.getContext('2d');
 cxj.drawImage(originalCanvas, 0,0, originalCanvas.width,originalCanvas.height ,0,0, newWx, newHx);
   $("#nunu").hide();
   var yna =document.getElementById("nunu");
if( det== 1){yna.style.width="100%"; yna.style.height="auto";}else{
 yna.style.height="60%";   yna.style.width="auto";}


 var canvhexx = document.querySelector("#canv");
 var checkcanvasheight = parseInt(window.getComputedStyle(canvhexx,null).height); 


////load in filter thumbnails
if( checkcanvasheight==0 || checkcanvasheight ==null || checkcanvasheight ==" "  )
  {setTimeout(function(){startthumbnails();    $('#topbuttons').show(); },2000);}
  else{ setTimeout(function(){startthumbnails();    $('#topbuttons').show(); },500); }
 




};


/////////////////////////////  START  FILTERS ///////////////////////////




///////////gradient filter//////////////////////



 function  sumboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 if(a == 0){  var gradient = toasterGradientsummer(width, height); }
 else{ var gradient = toasterGradientsummerlow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}

 function   sumboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){var boyy="canv"; }  else {  var boyy="cantoo";}
 width = newWz;height  = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 if(a == 0){  var gradient = toasterGradientsummer(width, height); }
 else{ var gradient = toasterGradientsummerlow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}


 
 function  activeboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 if(a == 0){var gradient = toasterGradientactive(width, height);}
 else{var gradient = toasterGradientactivelow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0,0);}

 function  activeboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){var boyy="canv"; }  else {  var boyy="cantoo";}
 width = newWz;height  = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
  if(a == 0){var gradient = toasterGradientactive(width, height);}
 else{var gradient = toasterGradientactivelow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}




 function  lomoboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo";}  else { var boyy="canv";}
 width = newWx;
   height  = newHx ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 if(a == 0){  var gradient = toasterGradientlomo(width, height); }
  else{  var gradient = toasterGradientlomolow(width, height); }
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
 function  lomoboyx(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo";}  else { var boyy="canv";}
 width = newWx;
   height  = newHx ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
if(a == 0){  var gradient = toasterGradientlomo(width, height); }
  else{  var gradient = toasterGradientlomolow(width, height); }
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  lomoboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="canv";}  else {   var boyy="cantoo";}
 width = newWz;
   height  = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 if(a == 0){  var gradient = toasterGradientlomo(width, height); }
  else{  var gradient = toasterGradientlomolow(width, height); }
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}



 function  realboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
  if(a == 0){var gradient = toasterGradientreal(width, height);}
  else{var gradient = toasterGradientreallow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  realboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 if(a == 0){var gradient = toasterGradientreal(width, height);}
  else  {var gradient = toasterGradientreallow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}



 function  jackboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradientmint(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  jackboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradientmint(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}




 function  hazeboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradienthaze(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  hazeboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradienthaze(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}



 function  grizboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradientgriz(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  grizboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradientgriz(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}




 function  vinboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH ;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 var gradient = toasterGradientvintage(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  vinboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
var gradient = toasterGradientvintage(width, height);
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}





 function  sunboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;height  = newH;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
  if(a == 0){var gradient = toasterGradientsunrise(width, height);}
 else {var gradient = toasterGradientsunriselow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  sunboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv"; }  else {  var boyy="cantoo"; }
 width = newWz; height = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 if(a == 0){var gradient = toasterGradientsunrise(width, height);}
 else {var gradient = toasterGradientsunriselow(width, height);}
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}






 function  safariboy(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){ var boyy="cantoo"}  else { var boyy="canv"}
 width = newW;
   height  = newH;
 ctt = document.querySelector("#"+boyy+"");
 var cttx = ctt.getContext('2d');
 if(a == 0){ var gradient = toasterGradientsafari(width, height);}
 else{ var gradient = toasterGradientsafarilow(width, height);}
  var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}
function  safariboyz(a){
var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){  var boyy="canv";  }  else {  var boyy="cantoo"}
 width = newWz;
   height  = newHz;
 ctt = document.querySelector("#supersample");
 var cttx = ctt.getContext('2d');
 if(a == 0){ var gradient = toasterGradientsafari(width, height);}
 else{ var gradient = toasterGradientsafarilow(width, height); }
    var screen = blend(cttx, gradient, width, height, function(bottomPixel, topPixel) {
     return 255 - (255 - topPixel) * (255 - bottomPixel) / 255;})
cttx.putImageData(screen, 0, 0);}

///////////////////gradient filter/////////////////////////////




////////////////////////click filters

filters = $('#filters li a');
 filters.click(function(e){

 if (Tamefilters > 12){

  var f = $(this);
  var effect = $.trim(f[0].id);

var  filterthumbwidth= document.getElementById(""+effect+"101");
var getthumb = document.getElementById(""+effect+"100");
 

if(effect == "normal"  ){ an=0;
}else{      
  if(effect == "clarity"){ an=1;}
else if(effect =="enhance"){ an=2}else if(effect =="safari"){an=3}else if(effect =="concentratex"){an=4}else if(effect =="sunrise"){an=5}else if(effect =="hazyDays"){an=6}else if(effect =="lomo"){an=7}else if(effect =="pinhole"){an=8}else if(effect =="glowingSun"){an=9}else if(effect =="crossProcess"){an=10}else if(effect =="jarques"){an=11}else if(effect =="oldBoot"){an=12}else if(effect =="MoonShine"){an=13}else if(effect =="nostalgia"){an=14}else if(effect =="vintage"){an=15}else{an=1}
var widthuse = parseInt(window.getComputedStyle(filterthumbwidth,null).width);
var ftr = document.getElementById("filters");
var x = ftr.scrollLeft;
if( an > filterbackwardmove ){var xn = x + widthuse;
$("#filters").stop(true, false).animate({scrollLeft:(xn)},300);} 
else{
  var xn = x - widthuse;
$("#filters").stop(true, false).animate({scrollLeft:(xn)},300);
}
filterbackwardmove=an;}


clear();

var ffsiz=21;
if(effect == "MoonShine"){ ffsiz=19;}

getthumb.style.fontSize= ""+ffsiz+"px"; 
getthumb.style.marginTop ="-10px";
getthumb.style.height ="37px";

if(f.is('.active')){
if( effect !="normal"){
var  nfa= document.getElementById("namefilteradjust"); 
nfa.value= effect;
 document.getElementById("zoomprecise").value="1";
var url="filtersliders.php";
$.post(url,{request:"fa" }, function(data){
  allowfilterslider = 1;
    $("#filterContainer").hide(); 
     $("#filterEdit").hide(); 
     document.getElementById("sliderfiltereditactive").value="1";
       var checktopxx = $("#checkcontrol").val();
if(checktopxx == 0){  $("#topbuttons").hide(); }
  else{ $("#topbuttonsnext").hide(); }
        $("#filteroption").hide();
        $("#slideoption").show();
           $("#filterContainerout").html(data).show(); }); }
return false; }

  
  setTimeout(function(){


 $("#"+effect+"504").hide();
 document.getElementById(""+effect+"vignettetype").value="0";

 document.getElementById("checkEditadjustBrightnessx").value=" ";
 document.getElementById("checkEditadjustContrastx").value=" ";
 document.getElementById("checkEditadjustHuex").value=" ";
 document.getElementById("checkEditadjustSharpenx").value=" ";
 document.getElementById("checkEditadjustNoisex").value=" ";
 document.getElementById("checkEditadjustVignettex").value=" ";
 document.getElementById("checkEditadjustColorx").value=" ";
 document.getElementById("checkEditadjustSaturationx").value=" ";
  document.getElementById("checkEditadjustBlurx").value=" ";
  document.getElementById("Blurxshine").value=" ";

 document.getElementById(""+effect+"Brightnessx").value="10000";
  document.getElementById(""+effect+"Contrastx").value="10000";
  document.getElementById(""+effect+"Huex").value="10000";
  document.getElementById(""+effect+"Sharpenx").value="10000";
  document.getElementById(""+effect+"Noisex").value="10000";
   document.getElementById(""+effect+"Vignettex").value="10000";
   document.getElementById(""+effect+"Colorx").value="10000";
  document.getElementById(""+effect+"Colortypex").value="10000";
  document.getElementById(""+effect+"Saturationx").value="10000";
  document.getElementById(""+effect+"Blurx").value="10000";




  
   $("#Brightnessxeditdot").removeClass('visibleshowman');
       $("#Brightnessxeditdot").addClass('visiblehiddenman'); 
       $("#Contrastxeditdot").removeClass('visibleshowman');
       $("#Contrastxeditdot").addClass('visiblehiddenman');
          $("#Huexeditdot").removeClass('visibleshowman');
       $("#Huexeditdot").addClass('visiblehiddenman');
         $("#Sharpenxeditdot").removeClass('visibleshowman');
       $("#Sharpenxeditdot").addClass('visiblehiddenman');
        $("#Noisexeditdot").removeClass('visibleshowman');
       $("#Noisexeditdot").addClass('visiblehiddenman');
        $("#Vignettexeditdot").removeClass('visibleshowman');
       $("#Vignettexeditdot").addClass('visiblehiddenman');
         $("#Colorxeditdot").removeClass('visibleshowman');
       $("#Colorxeditdot").addClass('visiblehiddenman');
       $("#Saturationxeditdot").removeClass('visibleshowman');
       $("#Saturationxeditdot").addClass('visiblehiddenman');
        $("#Blurxeditdot").removeClass('visibleshowman');
       $("#Blurxeditdot").addClass('visiblehiddenman');

       

 $("#"+effect+"600").show();

 document.getElementById("namefilteradjust").value=" ";
document.getElementById("finishedfilteradjust").value=" ";
  document.getElementById("checkfilteradjust").value=0;
 document.getElementById("hdcanvas").value=""+effect+"";
  document.getElementById("editrebound").value="filtertrue";

  superstopper= 0;

  canvaslightpop = 0;
    

var  switchcan=  $('#switchcanvas').val();
if( switchcan == 1){
  var fcantoo=document.getElementById("cantoo");
if(filters.is('.active')){}
filters.removeClass('active');
if(activatesoftlong == 0){
 f.addClass('active'); }
     $("#nunu").hide();
      $("#canv").show();
Caman("#cantoo", function () {
        this.revert();

         if(activatesoftlong == 0){
         if( effect in this){
          this[effect]();}}

          this.render( function() {

  if(effect == "crossProcess"  &&  activatesoftlong == 0) { activeboy(0); }
   else if(effect == "crossProcess"  &&  activatesoftlong == 1) { activeboy(1); }
        else if(effect == "lomo") { lomoboy(0); }
         else if(effect == "sunrise") { sunboy(0); }
     else if(effect == "safari") { safariboy(0); }
     else if(effect == "glowingSun" ) { sumboy(0); }
      else if(effect == "concentratex" ) { realboy(0); }
       else if(effect == "jarques" &&  activatesoftlong == 1) { jackboy(0); }
       else if(effect == "hazyDays" &&  activatesoftlong == 1) { hazeboy(0); }
        else if(effect == "vintage") { vinboy(0); }
         else if(effect == "pinhole") { grizboy(0); }
     else{}
      
        $("#cantoo").show();
   $("#canv").hide(); 
    $("#nunu").hide();  
    document.getElementById("checkcontrolcan").value=0; 
document.getElementById("switchcanvas").value="2";
clear();
 getthumb.style.fontSize= "14px";
        getthumb.style.marginTop ="0px";
getthumb.style.height ="30px"; 
setTimeout(function(){
  getthumb.style.fontSize=""+ffsiz+"px";
  getthumb.style.marginTop ="-10px"; 
  getthumb.style.height ="37px"; },300);
 var  checkzoom =  $('#checkzoom').val();
 if(checkzoom == 1 && detect == 0){
  document.getElementById("checkzoom").value=0;
 zoomsize()}else{
if( det== 1){
 fcantoo.style.width="100%";  fcantoo.style.height="auto";}else{
 fcantoo.style.height="60%";  fcantoo.style.width="auto";}}
 superstopper= 1;
});
        });

}  else {
var fcanv=document.getElementById("canv");
if(filters.is('.active')){}
filters.removeClass('active');
    if(activatesoftlong == 0){
 f.addClass('active'); }
     $("#nunu").hide();
      $("#cantoo").show();
Caman("#canv", function () {
        this.revert();
var effect = $.trim(f[0].id);


        if(activatesoftlong == 0){
         if( effect in this){
          this[effect]();}}

          this.render( function() { 
      if(effect == "crossProcess"  &&  activatesoftlong == 0) { activeboy(0); }
   else if(effect == "crossProcess"  &&  activatesoftlong == 1) { activeboy(1); }
        else if(effect == "lomo") { lomoboy(0); }
         else if(effect == "sunrise") { sunboy(0); }
     else if(effect == "safari") { safariboy(0); }
     else if(effect == "glowingSun") { sumboy(0); }
      else if(effect == "concentratex"  ) { realboy(0); }
       else if(effect == "jarques" &&  activatesoftlong == 1) { jackboy(0); }
       else if(effect == "hazyDays" &&  activatesoftlong == 1) { hazeboy(0); }
       else if(effect == "vintage") { vinboy(0); }
       else if(effect == "pinhole") { grizboy(0); }
     else{}
    $("#canv").show();
   $("#cantoo").hide(); 
    $("#nunu").hide(); 
    document.getElementById("checkcontrolcan").value=0;  
   document.getElementById("switchcanvas").value="1";
clear(); getthumb.style.fontSize= "14px";
        getthumb.style.marginTop ="0px";
getthumb.style.height ="30px"; 
setTimeout(function(){
  getthumb.style.fontSize=""+ffsiz+"px";
  getthumb.style.marginTop ="-10px"; 
  getthumb.style.height ="37px"; },300);
 var  checkzoom =  $('#checkzoom').val();
 if(checkzoom == 1 && detect == 0){
  document.getElementById("checkzoom").value=0;
  zoomsize()}else{
if( det== 1){
 fcanv.style.width="100%";   fcanv.style.height="auto";}else{
 fcanv.style.height="60%";  fcanv.style.width="auto";}}
superstopper= 1;
  });
        });
}



},1000);

}

});  





 function clear(){
var filly=['normal','clarity','enhance','lomo','safari','sunrise','glowingSun','hazyDays','crossProcess','jarques','concentratex','vintage','pinhole','oldBoot','MoonShine','nostalgia'];
for ( var i = 0; i < 16; i++) {
 clear[i]= document.getElementById(""+filly[i]+"100"); 
  clear[i].style.fontSize= "14px";
clear[i].style.marginTop ="0px";
clear[i].style.height ="30px"; 
$("#"+filly[i]+"600").hide();}}





eddy= $('#orbit li a');
 eddy.click(function(e){
  var q = $(this);
  var cast = $.trim(q[0].id);

document.getElementById("nameEditadjust").value= cast;

var url="filteredits.php";
$.post(url,{request:"fa" }, function(data){
  alloweditslider = 1;
    $("#filterEdit").hide(); 
      $("#filterContainer").hide(); 
       var checktopxx = $("#checkcontrol").val();
if(checktopxx == 0){  $("#topbuttons").hide(); }
  else{ $("#topbuttonsnext").hide(); }
        $("#filteroption").hide();
        $("#editoption").show();
        document.getElementById("sliderfiltereditactive").value="1";
        document.getElementById("editstart").value=2;
         document.getElementById("editddot").value=0;
             document.getElementById("editremove").value=0;
           $("#filterContainerout").html(data).show();    }); 
                          });  





  </script>  


</div>
