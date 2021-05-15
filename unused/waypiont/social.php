

<?php require('phpopen.php');?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
      <link rel="icon" href="images/sp2.png" type="image/png" />


       <link href="tools/css/bootstrap.min.css" rel="stylesheet">
   <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">   
   <link href="tools/css/sn.css" rel="stylesheet">
    <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
    <link href="tools/css/slick.css" rel="stylesheet">

    </head>
  

<?php 

include('exit.php');

 include('theme.php'); 

 include('forceinfont.php');  ?>


<body id="gangbody">


<div id="supercontent">  </div>


</body>


  <div  class="col-xs-12" id="pushfunpop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/laugh.png" id="holdfunpop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

 <div  class="col-xs-12" id="pushcarepop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/oo.png" id="holdcarepop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

 <div  class="col-xs-12" id="pushfreshpop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/cool.png" id="holdfreshpop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 

<div  class="col-xs-12" id="pushlovelypop"   style="position:fixed;top:-10em;z-index:0;text-align:center;height:0px;visibility:hidden;">
<img src="images/love.png" id="holdlovelypop" class="floaticonpush" height="100px" width="auto" style="margin:0 auto;opacity:0.9"/> </div> 






<div class="col-xs-12 zuzax "   id="welcomeerrorback"   onclick="javascript:clearwelcomeerrors();"   style="padding:0px;position:fixed;z-index:10000;height:100%;top:0em;background-color:#cccccc;background-color:<?php echo $viewbackground; ?>;display:none">
</div>


      <div  class="col-xs-12 zuzax"   id="welcomescripterror"  onclick="javascript:clearwelcomeerrors();" 
 style="height:25%;position:fixed;z-index:10000;padding:20px;top:9em;display:none">
<?php  include('ajaxerror2.php');   ?>
</div>


 <div  id="superloader"   class="col-xs-12 stoploader"  style="z-index:100;position:fixed;top:2.5em;background-color:<?php echo $_SESSION['cl']; ?>;height:4px;width:100%;padding:0px;display:none"></div>




   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    
<script src="tools/js/bootstrap.min.js"></script>
<script src="tools/js/jquery-3.3.1.min.js"></script>
<script src="tools/js/twemoji.js"></script>   
<script type="text/javascript">if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent) ){ mobileboy=1; }else{ mobileboy=0; }</script>


<script src="tools/js/slick.min.js"></script>
<script src="tools/js/isotope-layout3.0.6.min.js"></script>
<script src="tools/js/imagesloaded.pkgd.min.js"></script>
<script src="tools/js/noframework.waypoints.min.js"></script>



          
<script>










$(document).ready(function(){
  me = 0;

  autorun =0;

  layout=0;

  jump =0;
  page= 0;
  clickedfrompost =0;
  clickpostuser=0;
   clickposttype=0;

   jump2 =0;
  page2= 0;
  clickedfrompost2 =0;
  clickpostuser2=0;
   clickposttype2=0;






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












window.addEventListener('popstate', function(e) {
var poppy = e.state; 
var memmy =poppy.member;
var nammy =poppy.name;
var scrolly =poppy.scroll;
var loggy =poppy.logged;
var typpy =poppy.typex;

$("#superloader").show();
      $("#superloader").removeClass('stoploader'); 
    $("#superloader").addClass('startloader'); 

 var loguserx="<?php echo $_SESSION['numuser']; ?>";
 if(loguserx == memmy &&  me == 1){ 
  if(typpy== 1){ 
   var  gotopag="userfeedsgate.php";}
else  if(typpy== 2){  var  gotopag="userpagegate.php";}
  $.ajax({
  type: "POST",
  url: ""+gotopag+"",
  data: {member:memmy,name:nammy,scroll:1,page:0,jump:0}, 
 success: function(data){
    $("#supershow").html(data).show();},
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  }); 
    }else{
      powerframe = 0;
     clearTimeout(timewideframe);

 if (clickedfrompost2 == 1 && clickpostuser2 ==memmy && clickposttype2==typpy){ppx=page2; jjx=jump2;}
else if(clickedfrompost == 1 && clickpostuser ==memmy && clickposttype==typpy){ppx=page; jjx=jump}
     else{ppx=0; jjx=0;}

   $.ajax({
  type: "POST",
  url: "datauser.php",
  data: {member:memmy,ty:typpy,page:ppx,jump:jjx}, 
 success: function(data){

 if(clickedfrompost2 == 1 && clickpostuser2 ==memmy && clickposttype2==typpy){
   clickedfrompost2 = 0; clickpostuser2=0;  clickposttype2=0; }
 else if(clickedfrompost == 1 && clickpostuser ==memmy && clickposttype==typpy){
   clickedfrompost = 0; clickpostuser=0;  clickposttype=0; }
   

    $("#supercontent").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show();}  }); }


       });



  </script>




</html>       
                          
