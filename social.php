

<?php require('phpopen.php');?>


<!DOCTYPE html>
<html lang="en"  class="itemcontainer" style="height:auto;overflow-y: scroll !important;"  >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1  ,minimum-scale =1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
      <link rel="icon" href="images/sp2.png" type="image/png" />


       <link href="tools/css/bootstrap.min.css" rel="stylesheet">
   <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">   
   <link href="tools/css/sn.css" rel="stylesheet">
     <link href="tools/css/subcss/start.css" rel="stylesheet">
    <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
    <link href="tools/css/slick.css" rel="stylesheet">



   
      <script src="tools/react/react.min.js"></script>
        <script src="tools/react/react-dom.min.js"></script>
      <script src="tools/react/browser.min.js"></script>



 <link rel="stylesheet" href="tools/fontx/stylesheet.css" type="text/css" charset="utf-8" />
      <link rel="stylesheet" href="tools/font/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font2/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font3/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font4/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font5/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font6/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font7/stylesheet.css" type="text/css" charset="utf-8" />

    </head>
  

<?php 

include('exit.php');

 include('theme.php'); 

 ?>


<body id="gangbody"  >




<style type="text/css">

html::-webkit-scrollbar {width:11px;
scroll-behavior: smooth;}

/* Handle */
html::-webkit-scrollbar-thumb {
width:200px;
padding:60px;
    border-radius: 5.5px;
      background: #ffffff;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.8);
  scroll-behavior: smooth;}

html::-webkit-scrollbar-thumb:window-inactive {
      background: #ffffff;
    scroll-behavior: smooth;}

    html{scroll-behavior: smooth;}

  </style>



  <div class="col-xs-12"     id="feedwait"   style="padding:0px;position:fixed;z-index:110;height:100%;text-align:center;display:none;font-size:270%;<?php echo $feedloadercolor; ?>;margin:auto;background-color:<?php echo $feedloaderbackcolor; ?>"> 
<div  class="col-xs-12 " style="top:82%;position:absolute;text-align:center;padding:0px"  >

<i class="fas fa-circle-notch fa-spin"></i></div> </div> 








        <!-- Feeds -->
  <div id="gotochecker"  class=""  style="position:fixed;top:0em;height:90%"></div>
   <div id="gotocheckermobile"  class=""  style="position:fixed;top:0em;height:88%;"></div>
   <div id="textaddedhcheck"  class=""  style="position:fixed;top:0em;height:10%"></div>
     <div id="txtonlyheight"  class=""  style="position:fixed;top:0em;height:65%"></div>
     <div id="sizefixer"  class=""  style="position:fixed;top:0em;height:65%"></div>
       <div id="datacompress"  class="col-xs-6  col-sm-4"  style="padding:0px"></div>
           <!-- Feeds -->




         <!-- reactions -->
  <div id="fulldimensionswide"   style="position:fixed;top:9em;height:80%;width:100%;"></div>
    <div id="fulldimensions"   style="position:fixed;top:9em;height:100%;width:100%;"></div>
       <div id="fullheight"   style="position:fixed;top:9em;height:100%;width:100%;"></div>
 <div id="fulldimensionswidex" class="col-xs-12 col-sm-6"  style="position:fixed;top:9em;height:100%;"></div>
    <div id="fulldimensionsx" class="col-xs-12 col-sm-6"  style="position:fixed;top:9em;height:100%;"></div>
   <div id="widthplus"   style="position:fixed;top:9em;width:0.8%;"></div>
                  <!-- reactions -->






<style type="text/css">


  

 

.itemcontainer{overflow-y: scroll;overflow-x:hidden;scroll-snap-type: y  none;scroll-snap-type: x none;   padding:0px}

.itemsnap{scroll-snap-stop: always;scroll-snap-align:start;}

.itemsnapx{scroll-snap-stop: always;scroll-snap-align:center;}


@media only screen and (min-width: 768px) {

.itemcontainer{overflow-y: scroll;overflow-x:hidden;scroll-snap-type: y  none;scroll-snap-type: x none; padding:0px  }

.itemsnap{scroll-snap-stop: always;scroll-snap-align:start;}  }






</style>



<div   id="supercontent"   style="padding:0px;">  </div>





  <div  class="col-xs-12" id="pushfunpop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/laugh.png" id="holdfunpop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

 <div  class="col-xs-12" id="pushcarepop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/oo.png" id="holdcarepop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

 <div  class="col-xs-12" id="pushfreshpop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/cool.png" id="holdfreshpop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

<div  class="col-xs-12" id="pushlovelypop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/love.png" id="holdlovelypop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 






<div class="col-xs-12 zuzax "   id="welcomeerrorback"   onclick="javascript:clearwelcomeerrors();"   style="padding:0px;position:fixed;z-index:10000;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $viewbackground; ?>;display:none"> </div>




      <div  class="col-xs-12 zuzax"   id="welcomescripterror"  onclick="javascript:clearwelcomeerrors();" 
 style="height:25%;position:fixed;z-index:10000;padding:20px;top:9em;display:none">
<?php  include('ajaxerror2.php');   ?> </div>


 <div  id="superloader"   class="col-xs-12 stoploader superlocolor"  style="z-index:100;position:fixed;top:0em;"></div>





<input  id="feedstate" value="0"   hidden>


</body>



   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    
<script src="tools/js/bootstrap.min.js"></script>
<script src="tools/js/jquery-3.3.1.min.js"></script>




<script type="text/javascript">
  isMobile(navigator.userAgent || navigator.vendor || window.opera);
function isMobile(a){
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))){   mobileboy=1;        }else{   tabletcheck();     }}
function tabletcheck(){
if(/Mobi|Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)){ mobileboy=1;          }
  else{ mobileboy=0;  }}
</script>



<script src="tools/js/slick.min.js"></script>
<script src="tools/js/isotope-layout3.0.6.min.js"></script>
<script src="tools/js/imagesloaded.pkgd.min.js"></script>




          
<script>

function feedwaithide(){  $("#feedwait").hide();}






$(document).ready(function(){

  me = 0;

  autorun =0;

  layout=0;

  timeoutclear=0;

  reacttimerstate=0;

    reactstate=0;
    
   reactidentity=0;
     reacttype=0;
     reacttotal=0;
     reactpage=0;





if(mobileboy == 1){  var gtcxx = document.getElementById("gotocheckermobile");  }
else{  var gtcxx = document.getElementById("gotochecker"); }
 heightchecker= parseInt(window.getComputedStyle(gtcxx,null).height);

  var txtaddchk= document.getElementById("textaddedhcheck");
  textplusheight= parseInt(window.getComputedStyle(txtaddchk,null).height);

var txtonhe= document.getElementById("txtonlyheight");
  onlytext= parseInt(window.getComputedStyle(txtonhe,null).height);

  var sizefx= document.getElementById("sizefixer");
   fixheight= parseInt(window.getComputedStyle(sizefx,null).height);



   

 
 


$.ajax({
  type: "POST",
  url: "sessionuser.php",
 success: function(data){
    $("#supercontent").html(data).show(); },
  error: function(){
    $("#welcomeerrorback").show();
     $("#welcomescripterror").show();}
         });  })





function clearwelcomeerrors(){
  $("#welcomescripterror").hide();
   $("#welcomeerrorback").hide();   }



  </script>





  <?php include('history.php');?>



</html>       
                          
