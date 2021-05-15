
<input  id="undowatermarktext" value="Superstarz"    hidden>

<script src="tools/js/FileSaver.js"></script>

<script type="text/javascript">


///////var for merge image///
flipcontrol=1;
mmsize=1;
votatexx=360;
///////var for merge image///




/////////dont reset this  var

activatecolorpicker=0;

////// ring1 not used left it anyway might  be in code some where remove this later
ring1 =0;
////// ring1 not used left it anyway might  be in code some where remove this later

textmarkshadowstate=0;
textsizer=0;
textmarktheme=0;
textmarkthemecolor=0;
textmarkweaktype = 0;
textshine =0;
textmarkcolor="<?php echo $_SESSION['cl']; ?>";

savestate=0;
supercount=0;
undostate=0;

/////////dont reset this  var





/////reset all these



function   resetsupervar(){
 typeofwatermarkscreen=0;
 detpc=0;
realtextadjust= 0;
dragstate=0;
xpausedrag=0;
ypausedrag=0;
layerx=0;
layery=0;
textx=0;
texty=0;
textsizercontrol = 0;
colortextmark=0;
fonttextmark=0;
textmarkthemefont=0;
ttrotate=0; }

resetsupervar();

/////reset all these



  
////////////////// drag watermark text////////////////////


  var dragItemmark = document.querySelector("#supersample");
var containermark = document.querySelector("#supersample");

switchslidermark=0;
clearimagesizeloadingmark=0;

    var activemark = false;
    var currentXmark;
    var currentYmark;
    var initialXmark;
    var initialYmark;
    var xOffsetmark = 0;
    var yOffsetmark = 0;

    containermark.addEventListener("touchstart", dragStartmark, false);
    containermark.addEventListener("touchend", dragEndmark, false);
    containermark.addEventListener("touchmove", dragmark, false);

    containermark.addEventListener("mousedown", dragStartmark, false);
    containermark.addEventListener("mouseup", dragEndmark, false);
    containermark.addEventListener("mousemove", dragmark, false);



    function dragStartmark(e) {
      if (e.type === "touchstart") {
        initialXmark = e.touches[0].clientX - xOffsetmark;
        initialYmark = e.touches[0].clientY - yOffsetmark;
      }else{
        initialXmark = e.clientX - xOffsetmark;
        initialYmark = e.clientY - yOffsetmark;}
        if (e.target === dragItemmark) {
            activemark = true;   }
            $("#supertopbuttons").hide();
             $("#seealloncanvas").hide(); }


    function dragEndmark(e) {
      initialXmark = currentXmark;
      initialYmark = currentYmark;
       activemark = false;
       $("#supertopbuttons").show();
        $("#seealloncanvas").show(); }


    function dragmark(e) {
      if (activemark) {
          e.preventDefault();
      if (e.type === "touchmove") {
          currentXmark = e.touches[0].clientX - initialXmark;
          currentYmark = e.touches[0].clientY - initialYmark;
        } else {
          currentXmark = e.clientX - initialXmark;
          currentYmark = e.clientY - initialYmark;}
         xOffsetmark = currentXmark;
        yOffsetmark = currentYmark;
window.requestAnimationFrame(function() {
        textsetTranslate(currentXmark, currentYmark, dragItemmark);});     }}




    function textsetTranslate(xPos, yPos, el){  

if(dragstate == 1){var popup = 0;applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate); }

else if(dragstate == 2){
 var popup = 0;
  layerx = xPos; 
  layery = yPos; 
xPos = xpausedrag;
   yPos = ypausedrag;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);}

 else if(dragstate == 3){
 var popup = 0;
  textx = xPos; 
  texty = yPos; 
xPos = xpausedrag;
   yPos = ypausedrag;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);}

else if(dragstate == 4){  

applyimagemerge(xPos,yPos,mmsize);  }

else{  }

     }

//////////////////// drag watermark text//////////////////////////




function starttimer(){    

var secztotal = 1800;
var secz= 0;
 timerz = setInterval(function(){
  $("#smallstar").show(); 
secz++;
if(secz > 60){ 
  ////////////// for minutes 1.25///////
  var seczx =  parseInt(secz / 60); var newsec = secz - seczx * 60;
  /////////////converting 1.5 to 1.05/////////
  if(newsec.toString().length == 1){ newsec ="0"+newsec+""; }
   /////////////converting 1.5 to 1.05/////////
  document.getElementById('supertame').innerHTML="SuperSampling";  
  document.getElementById('supertame').innerHTML="" +seczx+"."+newsec+"";
   ////////////// for minutes 1.25///////
     }
  else{
  ///////for seconds//////////
   if(secz.toString().length == 1){secz ="0"+secz+""; }
   document.getElementById('supertame1').innerHTML="SuperSampling";
    document.getElementById('supertame2').innerHTML=""+secz+"";  
   //////////////// secs   40///////////////
 }
if(secz > secztotal){clearInterval(timerz);}    },1000)

  }




/////////////////destroy/cancel  supersample////////////////////

function clearsupersample(){

 var clsupercanvas= document.querySelector("#supersample");
var clsuperctx = clsupercanvas.getContext('2d');
clsuperctx.clearRect(0,0,clsupercanvas.width,clsupercanvas.height);

var clsupercanvaszz= document.querySelector("#supersampleoriginal");
var clsuperctxzz = clsupercanvaszz.getContext('2d');
clsuperctxzz.clearRect(0,0,clsupercanvaszz.width,clsupercanvaszz.height);

var clsupercanvaszzon= document.querySelector("#supersampleaddon");
var clsuperctxzzon = clsupercanvaszzon.getContext('2d');
clsuperctxzzon.clearRect(0,0,clsupercanvaszzon.width,clsupercanvaszzon.height);}



 function closesupersample(){
clearsupersample();
 $("#superwatermarkbuttonsxtra").hide(); 
 $("#supertopbuttons").hide(); 
   $("#superwatermarkbuttons").hide();
   $("#turblaax").hide(); 
      $("#lowresolution").show(); 
        $("#kager").show();
        $("#topbuttons").show();
         $("#topzoombutton").show();
         $("#highdef").hide(); 
          $("#supertame").hide(); 
          $("#holdtame").hide(); 
       resetsupervar();
       savestate = 0;
        $("#superundo").hide();  
       clearunusedundo();   };


////////////////////destroy/cancel  supersample///////////////////





//////////////creating supersamples//////////////////

document.getElementById("controlz").addEventListener('click',function(){

if(superstopper == 0){  alert("Hold On Filter Still Rendering");   }
  else{
     alloweditslider = 0;
      allowfilterslider = 0;
     $("#turblaax").show(); 
      $("#lowresolution").hide(); 
        $("#kager").hide();
        $("#topbuttons").hide();
         $("#topzoombutton").hide();
         $("#highdef").show(); 
          $("#supertame").show(); 
          $("#holdtame").show(); 
          starttimer(); 
      supercanvas= document.querySelector("#supersample");
      superctx= supercanvas.getContext('2d');
     supercanvas.width = newWz;
     supercanvas.height  = newHz;
        superctx.drawImage(uncroppedCanvas, 0,0, uncroppedCanvas.width,uncroppedCanvas.height ,0,0, newWz, newHz); 




     supercanvas.style.height=""+newHzt+"px";    supercanvas.style.width=""+newWzt+"px"; 
         supercanvas.style.display="block";
         supercanvas.style.display="inline";  


Caman("#supersample", function () {
    this.revert();

       var zin = $('#finishedfilteradjust').val();
        var teff = $('#hdcanvas').val();
var br = parseInt($("#"+teff+"Brightnessx").val()); 
 var con = parseInt($("#"+teff+"Contrastx").val()); 
  var hu = parseInt($("#"+teff+"Huex").val());
  var sh = parseInt($("#"+teff+"Sharpenx").val());
    var nn = parseInt($("#"+teff+"Noisex").val());
     var vii = parseInt($("#"+teff+"Vignettex").val()); 
      var vib = parseInt($("#"+teff+"Colorx").val());
       var sat = parseInt($("#"+teff+"Saturationx").val());
         var blu = parseInt($("#"+teff+"Blurx").val());
          var vibty  = $("#"+teff+"Colortypex").val(); 

if(activatesoftlong == 0){
   if(teff == "lomo"){  if(zin == " "){ zin = "180" }this.lomoc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty); }
  else if(teff == "clarity" ){if(zin == " "){ zin = "220" }this.clarityc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "enhance" ){if(zin == " "){ zin = "220" }this.enhancec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "safari" ){if(zin == " "){ zin = "200" }this.safaric(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "sunrise" ){if(zin == " "){ zin = "220" }this.sunrisec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "glowingSun" ){if(zin == " "){ zin = "132" }this.glowingSunc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "hazyDays" ){ if(zin == " "){ zin = "220" }this.hazyDaysc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "crossProcess" ){if(zin == " "){ zin = "180" }this.crossProcessc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "jarques" ){if(zin == " "){ zin = "220" }this.jarquesc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "concentratex" ){if(zin == " "){ zin = "230" }this.concentratexc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "vintage" ){if(zin == " "){ zin = "170" }this.vintagec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "pinhole" ){if(zin == " "){ zin = "220" }this.pinholec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "oldBoot" ){if(zin == " "){ zin = "210" }this.oldBootc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "MoonShine" ){if(zin == " "){ zin = "220" }this.MoonShinec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "nostalgia" ){if(zin == " "){ zin = "220" }this.nostalgiac(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "normal" ){this.normalc(br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else{}}
else{
  if(teff == "lomo" ){if(zin == " "){ zin = "180" }}
else if(teff == "clarity" ){if(zin == " "){ zin = "220" }}
else if(teff == "enhance" ){if(zin == " "){ zin = "220" }}
else if(teff == "safari" ){if(zin == " "){ zin = "200" }}
else if(teff == "sunrise" ){if(zin == " "){ zin = "220" }}
else if(teff == "glowingSun" ){if(zin == " "){ zin = "132" }}
else if(teff == "hazyDays" ){ if(zin == " "){ zin = "220" }}
else if(teff == "crossProcess" ){if(zin == " "){ zin = "180" }}
else if(teff == "jarques" ){if(zin == " "){ zin = "220" }}
else if(teff == "concentratex" ){if(zin == " "){ zin = "230" }}
else if(teff == "vintage" ){if(zin == " "){ zin = "170" }}
else if(teff == "pinhole" ){if(zin == " "){ zin = "220" }}
else if(teff == "oldBoot" ){if(zin == " "){ zin = "210" }}
else if(teff == "MoonShine" ){if(zin == " "){ zin = "220" }}
else if(teff == "nostalgia" ){if(zin == " "){ zin = "220" }}
this.normalc(br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
    
    this.render( function() {

  

  if(teff == "lomo" ){if(130 <= zin){lomoboyz(0); }else{ lomoboyz(1);}}
else if(teff == "safari" ){if(166 <= zin){ safariboyz(0); }else{  safariboyz(1); }}
else if(teff == "sunrise" ){ if(190 <= zin){ sunboyz(0); }else { sunboyz(1); } }
else if(teff == "crossProcess"   &&  activatesoftlong == 0){if(165 <= zin){ activeboyz(0); }else{  activeboyz(1); }}
else if(teff == "crossProcess"  &&  activatesoftlong == 1 ) { activeboyz(1);} 
else if(teff == "glowingSun"){ if(88<=zin){ sumboyz(0);}else{  sumboyz(1); } }
else if(teff == "concentratex"  ) { if(180<=zin){realboyz(0);}else{realboyz(1);} }
  else if(teff == "jarques" &&  activatesoftlong == 1) { jackboyz(0); }
         else if(teff == "hazyDays" &&  activatesoftlong == 1) { hazeboyz(0); }
          else if(teff == "pinhole") { grizboyz(0); }
          else if(teff == "vintage") { vinboyz(0); }

      else{}

      clearInterval(timerz);
       $("#turblaax").hide(); 
        $("#smallstar").hide(); 
           document.getElementById('supertame1').innerHTML=" "; 
            document.getElementById('supertame2').innerHTML=" "; 
      $("#supertame").hide(); 
          $("#holdtame").hide();  
             $("#supertopbuttons").show(); 
               $("#superwatermarkbuttons").show();

  

  ///////////////supersample addon//////////////
 supercanx = document.getElementById("supersampleaddon");
   supercanx.width = supercanvas.width;
   supercanx.height  = supercanvas.height;
var supercanxctx = supercanx.getContext('2d');
  supercanxctx.drawImage(supercanvas, 0,0,supercanvas.width,supercanvas.height,0,0, supercanvas.width,supercanvas.height);
 $("#supersampleaddon").hide(); 
///////////////supersample addon//////////////



//////////////////super sample original holds original image data//////
supercan = document.getElementById("supersampleoriginal");
 supercan.width = supercanvas.width;
   supercan.height  = supercanvas.height;
var cxsu = supercan.getContext('2d');
cxsu.drawImage(supercanvas, 0,0,supercanvas.width,supercanvas.height,0,0, supercanvas.width, supercanvas.height);
 $("#supersampleoriginal").hide(); 
//////////////////super sample original holds original image data//////

 });}); } });

/////////////////hd supersample canvas end//////////////////










/////////////// top accept , clear button and undo buttons ///////////////////



/////////////clear canvas revert to default supersample//////

function  clearcanvas(){
 supercanvas= document.querySelector("#supersample");
superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanx.width;
supercanvas.height  = supercanx.height;
superctx.drawImage( supercanx, 0,0, supercanx.width, supercanx.height ,0,0, supercanx.width, supercanx.height); 
  supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";  }

/////////////clear canvas revert to default supersample//////





////////////////update  super addon  canvas//////////////

function  updatesuperaddon(){

 $("#superundo").show(); 

var name= "supersampleaddon";
supercanvas= document.querySelector("#supersample");
  supercanx = document.getElementById("supersampleaddon");

if(savestate <= 4){ savestate++;
  if(savestate <= 4){
  var  supercanxundo = document.getElementById(""+name+""+savestate+"");
var supercanxctxundo = supercanxundo.getContext('2d');
  supercanxctxundo.clearRect(0,0,supercanxundo.width,supercanxundo.height);
   supercanxundo.width = supercanvas.width;
   supercanxundo.height  = supercanvas.height;
  supercanxctxundo.drawImage(supercanvas, 0,0,supercanvas.width,supercanvas.height,0,0, supercanvas.width, supercanvas.height);
 $("#"+name+""+savestate+"").hide(); 
     } undostate = savestate; }

 var supercanxctx = supercanx.getContext('2d');
  supercanxctx.clearRect(0,0,supercanx.width,supercanx.height);
   supercanx.width = supercanvas.width;
   supercanx.height  = supercanvas.height;
  supercanxctx.drawImage(supercanvas, 0,0,supercanvas.width,supercanvas.height,0,0, supercanvas.width, supercanvas.height);
 $("#supersampleaddon").hide();   }

////////////////update  super addon  canvas//////////////





///////////////  accept watermark///////////////////

function accepttextwrite(){  
  $("#superwatermarkbuttonsxtra").hide();
   $("#superwatermarkbuttons").show();
   updatesuperaddon();
 $("#superuploadholdstep2").hide(); 
 $("#superuploadholdstep1").show(); 
 resetsupervar(); };

///////////////  accept watermark///////////////////




///////////////  back arrow clear watermark///////////////////

function  closesupersampletextwrite(){  
  $("#superwatermarkbuttonsxtra").hide();
   $("#superwatermarkbuttons").show();
clearcanvas();
 $("#superuploadholdstep2").hide(); 
 $("#superuploadholdstep1").show(); 
 resetsupervar(); };

///////////////  back arrow clear watermark///////////////////






///////////////  back arrow clear merge ///////////////////

function  closesupersamplemerge(){  
   $("#superwatermarkbuttons").show();
clearcanvas();
 $("#superuploadholdstep3").hide(); 
 $("#superuploadholdstep1").show(); 
 destroymergecanvas();
 $("#mergeoptions").hide();
      $("#supermergemarksize").hide();
  dragstate = 0;  };

///////////////  back arrow clear merge ///////////////////



///////////////  accept canvas image merge///////////////////

function acceptmerge(){  
   $("#superwatermarkbuttons").show();
   updatesuperaddon();
 $("#superuploadholdstep3").hide(); 
 $("#superuploadholdstep1").show(); 
 destroymergecanvas();
    $("#mergeoptions").hide();
      $("#supermergemarksize").hide();
  dragstate = 0;  };

///////////////  accept canvas image merge///////////////////




/////////////// top accept , clear button and undo buttons ///////////////////



</script>








<?php include('supershowfiltersmerge.php'); ?>


<?php include('supershowfilterswatermark.php'); ?>






<script type="text/javascript">

/////////save Image////////////////
function savephotoxx() {
   $('#saveone').hide();
  $('#savewait').show();
  setTimeout(function(){ $('#saveone').show(); $('#savewait').hide(); $('#finishedrefresh').show();  },9000); 
 var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+'-';
var time = today.getHours() + "-" + today.getMinutes() + "-" + today.getSeconds();
var dateime = date+''+time;

   var canvasa = document.getElementById("supersample");
canvasa.toBlob(function(blob) {
    saveAs(blob,"Superstarz"+dateime+".jpg");
},"image/jpeg", 1.0);


 var zoomlockstatezz= <?php echo $_SESSION['supercropstate']; ?>;
  var zoomlockstatezzallow= <?php echo $_SESSION['supercropstateallow']; ?>;


  
if(zoomlockstatezz == 0 && zoomlockstatezzallow == 0){
 var wi = holdcropdatawidth;
  var  hi =  holdcropdataheight;
   var wis = styledatawidth;
  var  his =  styledataheight;
  var ty = 1;
var url="sessionsupercroplock.php";
  $.post(url,{request:"fa",memw:wi,memh:hi,memty:ty,memsw:wis,memsh:his}, function(data){
           $("#showcroplock").html(data).show();});}  }

/////////save Image////////////////







///////////done options////////////////


lookrefresh=0;
function superphotorefresh(){
         if(lookrefresh==0){
          lookrefresh=1;
   document.getElementById("suprefreshidentity").style.color="<?php echo $_SESSION['cl']; ?>";
   supfresh = setTimeout(function(){  
      lookrefresh=0;
   document.getElementById("suprefreshidentity").style.color="#ffffff";  },3000);
            }else{
        ///////////////refresh superphoto
         lookrefresh=0;
        if(supfresh) {clearTimeout(supfresh);}
           image = null;
           supercanvas=null;
           supercan=null;
           supercanx=null;
           clearsupersample();
           removecancrop();
           removecanfilter();
       location.reload(true);}} 



lookclose=0;
 function superphotoclose(){
         if(lookclose==0){
          lookclose=1;
   document.getElementById("supcloseidentity").style.color="<?php echo $_SESSION['cl']; ?>";
   supclose = setTimeout(function(){  
      lookclose=0;
   document.getElementById("supcloseidentity").style.color="#ffffff";  },3000);
            }else{
        ///////////////refresh superphoto
         lookclose=0;
        if(supclose) {clearTimeout(supclose);}
          image = null;
       supercanvas=null;
       supercan=null;
       supercanx=null;
          clearsupersample();
           removecancrop();
           removecanfilter();
        window.close();}} 


////////////done options////////////////////




</script>












<div id="highdef"  style="display:none;z-index:110;">





  <div  id="helptextrotate"  class="col-xs-12 "   style="height:0px;top:27%;text-align:center;position:fixed;z-index:120;display:none;">
<div    class="col-xs-6"  >
  <span   onclick="javascript:finishedtextrotate();"   id="helptextrotateleft"  class="zuzax juju zuperxy"  style="font-size:70px;width:auto;height:auto;opacity:0.8;display:none">
   <i class="fas fa-long-arrow-alt-up"></i> </span>
 <span   onclick="javascript:finishedtextrotate();"   id="helptextrotateright"  class="zuzax juju zuperxy"  style="font-size:70px;width:auto;height:auto;opacity:0.8;display:none">
<i class="fas fa-long-arrow-alt-left"></i> </span>
</div>
<div  class="col-xs-6"></div> </div>   






  <div  id="finishedrefresh"  class="col-xs-12 "   style="height:0px;top:30%;text-align:center;position:fixed;z-index:120;display:none;">
<div  class="col-xs-6">
  <span  onclick="javascript:superphotorefresh();"  id="suprefreshidentity" class="zuzax juju zuperxy"   style="font-size:60px;width:auto;height:auto;opacity:0.9;">
 <i class="fas fa-sync-alt"></i> </span>
</div>
<div  class="col-xs-6">
  <span  onclick="javascript:superphotoclose();"  id="supcloseidentity" class="zuzax juju zuperxy"   style="font-size:60px;width:auto;height:auto;opacity:0.9;">
 <i class="far fa-hand-paper"></i> </span>
</div></div>   



<div class="col-xs-12" id="supertopbuttons" style="display:none;position:fixed;z-index:120;margin-top:0px;padding:0px;height:50px;">



  <div id="superuploadholdstep1">
<div  class="col-xs-2  col-sm-1 zuzax bordertranhov"  onclick="javascript:closesupersample();"  style="padding:0px;border-radius:4px">
  <div  class="col-xs-12">
    <div  class="col-xs-12  zuperxy"  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;text-align:center">  
     <span   class="juju" style="opacity:0.9;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div></div>
     <div  class="col-xs-1 " ></div>
<div class="  col-xs-5  col-sm-8   zuzax"    style="padding:0px; height: 40px;text-align:center;margin:auto;"></div> 
<div  class="col-xs-4  col-sm-2"   style="padding:0px"> 
<bottr> 


  <div  id="saveone" class="col-xs-12  zuperxy zuzax bordertransx"   onclick="javascript:savephotoxx();" 
   style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:36px;padding:0px " >  
    <span> <i class="fas fa-save"  style="margin-top:-1px"></i></span>
            </div>  

             <div  id="savewait" class="col-xs-12  zuperxy zuzax bordertransx"    style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;display:none" >  
    <span> <i class="fas fa-hourglass-half" style="margin-top:2px"></i></span>
            </div>    </bottr>     </div></div>







  <div id="superuploadholdstep2"  style="display:none">
<div  class="col-xs-2  col-sm-1 zuzax bordertranhov"  onclick="javascript:closesupersampletextwrite();"  style="padding:0px;border-radius:4px">
  <div  class="col-xs-12">
    <div  class="col-xs-12  zuperxy"  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;text-align:center">  
     <span   class="juju" style="opacity:0.7;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div></div>
     <div  class="col-xs-1 " ></div>
<div class="  col-xs-5  col-sm-8   zuzax"    style="padding:0px; height: 40px;text-align:center;margin:auto;"></div> 
<div  class="col-xs-4  col-sm-2"   style="padding:0px"> <bottr> 
 <div   class="col-xs-12  zuperxy zuzax bordertransx"  onclick="javascript:accepttextwrite();"   style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px " >  
     <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i>
            </div> </bottr> </div></div>



  <div id="superuploadholdstep3"  style="display:none">
<div  class="col-xs-2  col-sm-1 zuzax bordertranhov"  onclick="javascript:closesupersamplemerge();"  style="padding:0px;border-radius:4px">
  <div  class="col-xs-12">
    <div  class="col-xs-12  zuperxy"  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px;text-align:center">  
     <span   class="juju" style="opacity:0.7;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-5.5px"></i>  </span></div></div></div>
     <div  class="col-xs-1 " ></div>
<div class="  col-xs-5  col-sm-8   zuzax"    style="padding:0px; height: 40px;text-align:center;margin:auto;"></div> 
<div  class="col-xs-4  col-sm-2"   style="padding:0px"> <bottr> 
 <div   class="col-xs-12  zuperxy zuzax bordertransx"  onclick="javascript:acceptmerge();"   style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px " >  
     <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i>
            </div> </bottr> </div></div>



          </div>







      <div   id="seealloncanvas">



<!-- text merge undo start  -->

<div class="col-xs-12"  id="superwatermarkbuttons"  style="position:fixed;bottom:1em;padding:0px;z-index:122;display:none">
 <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>

<div  class="col-xs-12  col-sm-8  col-md-4  bordertranhovbar"  style="padding:0px;height:52px" >  
<div class="col-xs-12 "  style="padding:0px;margin-top:4.5px" > 

 <div  class="col-xs-4"  id="selectholderx" style="padding:0px;">

<form  class="col-xs-12"  method="post" id="verminx" style="padding:0px;">   
  <label class="zuzax col-xs-12" style="padding:0px;margin-left:32px;"  for="imxmerge">
    <div class="col-xs-12" style="height:52px;font-size:35px;color:<?php echo $_SESSION['cl'];?>;margin:auto;padding:0px">
    <span class="juju col-xs-12" style="position:relative;width:auto;padding:0px"> 
    <i class="fas fa-images"></i> </span>  </div> </label>
<input type="file" enctype="multipart/form-data" method="post" name="redd[]" id="imxmerge" accept="image/*" style="display:none"> </form>  


<div class="col-xs-12 zuperxy zuzax"  id="acceptminicanvas"  onclick="javascript:startmergecanvas();"  style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;display:none;" >  
     <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i> </div> 

</div>


<div class="col-xs-4"    style="padding:0px"> 

<div class="col-xs-12 zuperxy zuzax"   id="superundo"  onclick="javascript:startundo();"   style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px;display:none;" >  
    <i class="fas fa-undo-alt"></i> </div> 

       </div> 


<div class="col-xs-4"    style="padding:0px"> 

<div  class="zuperxy zuzax col-xs-12"  id="starttextmark"   style="text-align:center;margin:auto;height:52px;
font-size:45px;padding:0px"> 
    <div style="height:auto;color:<?php echo $_SESSION['cl']; ?>;margin-top:-14px">
    <span class="juju" style="position:relative;width:auto;"><aleob>  
      <font face="Times New Roman">   <span class="juju" style="position:relative;width:auto;font-weight:bolder;">T</span>
       </font></aleob> </span></div> </div>


<div class="col-xs-12 zuperxy zuzax " id="destroyminicanvas" 
onclick="javascript:destroymergecanvas();"   style="border-radius:0px;display:none;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:1px" >  
     <i class="far fa-window-close"></i>  </div> 

       </div> 

</div></div>
<div class="col-xs-hidden  col-sm-2  col-md-4" ></div>

       </div>



<!-- text merge undo start  -->




<script type="text/javascript">
  


///////start undo///////////////

function clearunusedundo(){
   var temperase = savestate + 1;
  for ( var i = temperase; i < 5; i++) {
var superdel= document.querySelector("#supersampleaddon"+i+"");
var superctxdel = superdel.getContext('2d');
superctxdel.clearRect(0,0,superdel.width,superdel.height);}}


function startundo(){
     $("#superwatermarkbuttons").hide(); 
               $("#supercanundoreset").show();}


function endundo(){
  supercanvas = document.querySelector("#supersample");
   var supercanxundoapply = document.getElementById("supersampleaddon");
superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanxundoapply.width;
supercanvas.height  = supercanxundoapply.height;
superctx.drawImage( supercanxundoapply, 0,0, supercanxundoapply.width, supercanxundoapply.height ,0,0, supercanxundoapply.width, supercanxundoapply.height); 
  supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";
   undostate = savestate;
     $("#superwatermarkbuttons").show(); 
               $("#supercanundoreset").hide();}



function  superundoaccept(){

 var supercanxnewstate = document.getElementById("supersample");
var supercanxworkbench = document.getElementById("supersampleaddon");
superctxworkbench = supercanxworkbench.getContext('2d');
superctxworkbench.clearRect(0,0,supercanxworkbench.width,supercanxworkbench.height);
supercanxworkbench.width = supercanxnewstate.width;
supercanxworkbench.height  = supercanxnewstate.height;
superctxworkbench.drawImage( supercanxnewstate, 0,0, supercanxnewstate.width, supercanxnewstate.height ,0,0, supercanxnewstate.width, supercanxnewstate.height); 
  supercanxworkbench.style.height=""+newHzt+"px";     supercanxworkbench.style.width=""+newWzt+"px";
if(undostate == 1000){   savestate = 0;  $("#superundo").hide(); }else{savestate =  undostate;    }

if(savestate < 4){ clearunusedundo();}


 $("#superwatermarkbuttons").show(); 
  $("#supercanundoreset").hide();  }




function  superreset(){
 supercanvas = document.querySelector("#supersample");
var supercanxoriginal = document.getElementById("supersampleoriginal");
superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanxoriginal.width;
supercanvas.height  = supercanxoriginal.height;
superctx.drawImage( supercanxoriginal, 0,0, supercanxoriginal.width, supercanxoriginal.height ,0,0, supercanxoriginal.width, supercanxoriginal.height); 
  supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";
  undostate = 1000;}






function  undowheel(){
 supercanvas= document.querySelector("#supersample");
 var name= "supersampleaddon";
 if(undostate == 1000){ undostate=1; }
     undostate--; 
if(undostate  != 0){
var supercanxundoapply = document.getElementById(""+name+""+undostate+"");
superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanxundoapply.width;
supercanvas.height  = supercanxundoapply.height;
superctx.drawImage( supercanxundoapply, 0,0, supercanxundoapply.width, supercanxundoapply.height ,0,0, supercanxundoapply.width, supercanxundoapply.height); 
  supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";
 }
  else{
    var supercanxundoapplyxx = document.getElementById("supersampleaddon");
superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width =  supercanxundoapplyxx.width;
supercanvas.height  = supercanxundoapplyxx.height;
superctx.drawImage( supercanxundoapplyxx, 0,0, supercanxundoapplyxx.width, supercanxundoapplyxx.height ,0,0, supercanxundoapplyxx.width, supercanxundoapplyxx.height); 
  supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";
  undostate = savestate;
  }}

///////start undo/////////////


</script>





<!-- Undo options  -->

<div class="col-xs-12"  id="supercanundoreset"  style="position:fixed;bottom:1em;padding:0px;z-index:122;display:none">
 <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>

<div  class="col-xs-12  col-sm-8  col-md-4  bordertranhovbar"  style="padding:0px;height:52px" >  
<div class="col-xs-12 "  style="padding:0px;margin-top:4.5px" > 


 

<div class="col-xs-3"    style="padding:0px"> 

<div class="col-xs-12 zuperxy zuzax"  onclick="javascript:superundoaccept();"  style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px" >  
    <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i>   </div> 

       </div> 



<div class="col-xs-3"    style="padding:0px"> 

<div class="col-xs-12 zuperxy zuzax"  onclick="javascript:superreset();"    style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px" >  
    <i class="fas fa-sync-alt"></i>   </div> 

       </div> 



<div class="col-xs-3"    style="padding:0px;"> 

<div class="col-xs-12 zuperxy zuzax " 
onclick="javascript:undowheel();"   style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px;">  
    <i class="fas fa-undo-alt"></i> </div> 

       </div> 

       <div class="col-xs-3"    style="padding:0px"> 

<div class="col-xs-12 zuperxy zuzax " 
onclick="javascript:endundo();"   style="border-radius:0px;border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px" >  
   <i class="far fa-window-close"></i>  </div> 

       </div> 


</div></div>
<div class="col-xs-hidden  col-sm-2  col-md-4" ></div>

       </div>



<!-- Undo options  -->












<!-- slider text sizeer  -->

      <div class="col-xs-12"  id="superwatermarkbuttonsxtratext"    style="position:fixed;bottom:3em;padding:0px;z-index:120;display:none"> 
               <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>


    <div class="col-xs-9  col-sm-6  col-md-3  zuperxy" style="background-color:rgba(000,000,005,0.1); border-radius:6px;text-align:center;margin:auto;height:52px;padding:10px">  

         <input id="textsizerslider"  type="range"  min="0"   max="225" value="75"  style="margin-top:13px"  /> </div>

         <div class="col-xs-3  col-sm-2  col-md-1 " > 
           <div   id="accepttextsize"   class=" bordertranhovbar zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;margin-top:4.2px">
    <span class="juju" style="position:relative;width:auto;"> <i class="fa fa-check" aria-hidden="true" ></i>  </span>  
      </div> </div> </div></div>

<!-- slider text sizeer  -->



<!-- slider shadow blur  -->

      <div class="col-xs-12"  id="superwatermarkbuttonsxtrashadow"    style="position:fixed;top:3em;padding:0px;z-index:120;display:none"> 
               <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>


    <div class="col-xs-9  col-sm-6  col-md-3  zuperxy" style="background-color:rgba(000,000,005,0.1); border-radius:6px;text-align:center;margin:auto;height:52px;padding:10px">  

         <input id="ttextshadowslider"  type="range"  min="0"   max="100" value="0"  style="margin-top:13px"  /> </div>

         <div class="col-xs-3  col-sm-2  col-md-1 " > 
           <div   onclick="javascript:endtextshadow();"   class=" bordertranhovbar zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;margin-top:4.2px">
    <span class="juju" style="position:relative;width:auto;"> <i class="fa fa-check" aria-hidden="true" ></i>  </span>  
      </div> </div> </div></div>

<!-- slider shadow blur  -->




<div class="col-xs-12"  id="superwatermarkbuttonsxtra"    style="position:fixed;bottom:1em;padding:0px;z-index:120;display:none"> 
               <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>


        <div id="markholder" class="col-xs-12  col-sm-8  col-md-4  bordertranhovbar"  style="padding:0px;height:52px" >  

 <div class="col-xs-12 "  style="padding:0px;margin-top:4.5px" > 

        <div class="col-xs-3  "   style="padding:0px">  
  <div   id="switchtextmarktheme"   class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-layer-group" aria-hidden="true" ></i> </span>  
      </div> </div>  </div> 

       <div class="col-xs-3  "   style="padding:0px">  

  <div   id="marktextcolor"   onclick="javascript:startcolorpick();"  class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;display:none"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-palette"></i> </span>  
      </div> </div> 

       <div   id="marktextadjust"   class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;">
    <span class="juju" style="position:relative;width:auto;">
     <span  id="marktextadjuston"> <i class="fas fa-arrows-alt"></i></span>
     <span  id="marktextadjustoff"  style="display:none"> <i class="fa fa-check" aria-hidden="true" ></i></span>
      </span>  
      </div> </div> 

 

       </div> 

    <div class="col-xs-3  "  style="padding:0px" >   

   <div   id="marktextsize"   class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-text-height"></i> </span>  
      </div> </div> 


        <div   id="marktextdrag"   class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;display:none;padding:0px"> 
    <div id="mtdcolor" style="height:52px;color:<?php echo $_SESSION['cl']; ?>;padding:0px">
    <span class="juju" style="position:relative;width:auto;padding:0px"> <i class="fas fa-text-width"></i> </span>  
      </div> </div> 



  </div> 


   <div class="col-xs-3 "   style="padding:0px">  
  <div   id="marktextedit"  onclick="javascript:starttextarea();"  class="  zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-edit"></i> </span>  
      </div> </div>  </div> 

</div>
</div>


   <div class="col-xs-hidden  col-sm-2  col-md-4" ></div>
       </div>
        






<!-- color picker -->

 <div class="col-xs-12"   id="supercolormarktextselector" style="height:0px;text-align:center;position:fixed;top:0em;z-index:120;padding:0px;display:none"> 
 
 <div class="col-xs-hidden  col-sm-4"  style="height:0px;"> 
  </div>

<div class="col-xs-12  col-sm-4 bordertransxinfo"    style="border-radius:4px;padding-bottom:5px;padding-top:10px" > 


  


<div class="col-xs-6"   style="text-align:center;padding:0px;padding-bottom:15px;" >
 <input type="text"   onchange="javascript:applythiscolortext();"  id="pikincolortextmark"  style="visibility:hidden;" value="<?php echo $_SESSION['cl']; ?>"  name="backgound-color"    class="pick-a-color">
   </div>


 
<div class="col-xs-3"> 
<div   onclick="javascript:addshadow();"  class="zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:38px;margin-top:5px"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-cloud-showers-heavy"></i> </span>  
      </div> </div>
  </div>

   
<div class="col-xs-3"> 
<div   onclick="javascript:starttextshadow();"  class="zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:35px;margin-top:5px"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-lightbulb"></i> </span>  
      </div> </div>
  </div>

 



 <div class="col-xs-12 za"  style=""> </div>


 <div class="col-xs-12"  style="padding:0px;position:relative;z-index:1"> 

  <div   id="applymarkcolor"    onclick="javascript:applythiscolortext();"  class=" col-xs-3  btn  zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:31px"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-arrow-down"></i> </span>  
      </div> </div> 

  <div   id="clearmarkcolor"   onclick="javascript:applyweaktypetext();"  class="col-xs-3  btn  zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:31px;"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-layer-group" aria-hidden="true" ></i> </span>  
      </div> </div> 

  <div   id="fontmarkcolor"  onclick="javascript:applyfontthiscolortext();"  class="col-xs-3  btn  zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:31px;"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
    <span class="juju" style="position:relative;width:auto;"> <i class="fas fa-font"></i> </span>  
      </div> </div> 

  <div   id="finishedmarkcolor"   onclick="javascript:endcolorpick();"  class="col-xs-3  btn  zuperxy zuzax"  style="border-radius:6px;color:#ffffff;text-align:center;margin:auto;height:42px;font-size:31px;"> 
    <div style="height:42px;color:<?php echo $_SESSION['cl']; ?>">
  <span class="juju" style="position:relative;width:auto;"> <i class="fa fa-check" aria-hidden="true" style="margin-top:1px"></i>  </span>    </div> </div> </div>
</div>  




  <div class="col-xs-12"  id="startrotatetext"   style="position:fixed;bottom:1em;padding:0px;z-index:120">
<div class="col-xs-2  col-sm-5" ></div>

<div  class="col-xs-8  col-sm-2  bordertranhovbar"  style="padding:0px;height:52px" >  
<div class="col-xs-12 "  style="padding:0px;margin-top:4.5px" > 

<div class="col-xs-6"    style="padding:0px"> 
<div class="col-xs-12 zuperxy zuzax"  onclick="javascript:starttextrotateoptions();"    style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px" >  <i class="fas fa-sync-alt"></i>  </div> </div>

 
<div class="col-xs-6"    style="padding:0px"> 
<div class="col-xs-12 zuperxy zuzax"  onclick="javascript:endcolorpick();"    style="border-radius:0px;
  border-top-left-radius:4px;border-bottom-left-radius:4px;color:<?php echo $_SESSION['cl']; ?>;text-align:center;margin:auto;height:40px;font-size:30px;padding:0px;margin-top:2px" > <i class="fa fa-check" aria-hidden="true" ></i> </div> </div>

</div></div> 

 <div class="col-xs-2  col-sm-5" ></div>
  </div>


</div>


<!-- color picker -->





<!-- textrotate options controls -->


<div class="col-xs-12"  id="rotatetextsliderstypes"  style="position:fixed;bottom:3em;padding:0px;z-index:120;display:none;">
<div class="col-xs-hidden  col-sm-2  col-md-4" ></div>
<div class="col-xs-9  col-sm-6  col-md-3  zuperxy" style="background-color:rgba(000,000,005,0.1); border-radius:6px;text-align:center;margin:auto;height:52px;padding:10px">  

<input id="textrotateslider"  type="range"  min="-30"  max="30"  step="0.5"   value="0"   style="margin-top:13px;display:none;"  />

</div>
<div class="col-xs-3  col-sm-2  col-md-1 " > 
  <div     onclick="javascript:finishedtextrotate();"   class=" bordertranhovbar zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;margin-top:4.2px">
    <span class="juju" style="position:relative;width:auto;"> <i class="fa fa-check" aria-hidden="true" ></i>  </span>  
      </div> </div> </div>
 </div>



<!-- textrotate options controls -->





<!-- add text  textarea -->

 <div class="col-xs-12"   id="supertextareamarktextselector"  style="position:fixed;top:8em;padding:3px;z-index:120;display:none;padding:0px"> 
 <div class="col-xs-hidden col-sm-3 col-lg-4"></div>
  <div class="col-xs-12 col-sm-6 col-lg-4 form-group  "   id="tytext"  style="padding:0px;height:80px;border-radius:4px">


               <div class="tur col-xs-3 col-sm-2 zuzax zuperxy  juju "  onclick="javascript:undostarttextarea();"  style="border-top-right-radius:5px;height:33px;float:right;background-color:<?php echo $rijxx; ?>;text-align:center;font-size:22px">  <div style="margin-top:6px">  <i class="far fa-window-close"></i></div>   </div>
              
     <div class="tur col-xs-3 col-sm-2  zuzax juju zuperxy"  onclick="javascript:clearstarttextarea();"   style="text-align:center;border-radius:0px;height:33px;float:right;background-color:<?php echo $rijxx; ?>  ">
               <div style="margin-top:5px;font-size:22px">   <i class="fas fa-eraser" aria-hidden="true"></i>
               </div> </div>   
              
              <div class="tur col-xs-3 col-sm-2 zuzax juju  zuperxy "   onclick="javascript:confirmstarttextarea();" style="text-align:center;border-top-left-radius:5px;height:33px;float:right;background-color:<?php echo $rijxxn; ?>"><div style="margin-top:4px;color:<?php echo $_SESSION['cl']; ?>;font-size:25px">  <i class="fa fa-check" aria-hidden="true" ></i>  </div> </div> 
              


  <textarea  class="form-control tur "   oninput="javascript:addmarktocanvas();"  style="border:none;font-size:16px;min-height:120px;width:100%;border-radius:4px;border-top-right-radius:0px;color:#000000;padding:0px"  id="addtextwatermarktextarea"  placeholder="Add a watermark">Superstarz</textarea> 
          
  </div></div>
    
<!-- add text  textarea -->








<!-- start supermergeimage  stuffs  -->



<!-- loads up a preview image which gets converted to canvas data then wiped off -->

<div class="col-xs-12 "   id="holdmerge" 
style="padding:0px;position:fixed;z-index:120;top:1em;visibility:hidden;height:0px">
 <div class="col-xs-hidden  col-sm-4"   style="padding:0px;height:0px"> </div> 
<div class="col-xs-12  col-sm-4 "   style="padding:0px;height:35%;border-radius:6px">
<div class="col-xs-12"  id="leftrightprevmerge"  style="padding:0px;height:0px"> </div> 
<div class="col-xs-12 prevmerge" id="ppggmerge"  style="padding:0px;height:0px">    </div> 
</div>
<div class="col-xs-hidden  col-sm-4"   style="padding:0px;height:0px">  </div> 
</div> 

<!-- loads up a preview image which gets converted to canvas data then wiped off -->

    



<!-- empty minicanvas waiting for data --> 

<div class="col-xs-12 "  id="showmerge"   style="padding:0px;position:fixed;z-index:120;top:1em;display:none;height:0px">
 <div class="col-xs-hidden  col-sm-2"   style="padding:0px;height:0px"> </div> 
<div class="col-xs-12  col-sm-8"   style="height:35%;padding:0px;border-radius:6px;padding-bottom:150px">
<canvas id="minicanv"  class="col-xs-12 "  style="display:inline;position:fixed;padding:0px" data-caman-hidpi-disabled="true" > </canvas>  </div>
<div class="col-xs-hidden  col-sm-2"   style="padding:0px;height:0px">  </div> 
</div> 

<!-- empty minicanvas waiting for data  -->




<!-- collects minicanvas data from the php showpreviewmergecount script  -->

<div  id="spilmerge" class="  col-xs-12 "   style="position:fixed; top:0em;padding:0px;z-index:115;height:0px"> </div> 

<!-- collects minicanvas data from the php showpreviewmergecount script  -->




<!-- slider merged image sizer  -->
<style type="text/css">
   #mergesizeslider{ direction:rtl }
</style>

<div id="mergeoptions"  style="display:none;"> 


  <div class="col-xs-12"  id="supermergemarksize"  style="position:fixed;bottom:3em;padding:0px;z-index:120;display:none">
<div class="col-xs-hidden  col-sm-2  col-md-4" ></div>
<div class="col-xs-9  col-sm-6  col-md-3  zuperxy" style="background-color:rgba(000,000,005,0.1); border-radius:6px;text-align:center;margin:auto;height:52px;padding:10px">  
<input id="mergesizeslider"  type="range"  min="0.0005"  max="3.5555"  step="0.0001"   style="margin-top:13px"  />
</div>
<div class="col-xs-3  col-sm-2  col-md-1 " > 
  <div   id="acceptmergesizeslider"   onclick="javascript:startrotate();"   class=" bordertranhovbar zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;margin-top:4.2px">
    <span class="juju" style="position:relative;width:auto;">  <i class="fas fa-sync-alt"></i>  </span>  
      </div> </div> </div>
 </div>



  <div class="col-xs-12"  id="supermergemarkrotate"  style="position:fixed;bottom:3em;padding:0px;z-index:120;display:none">
<div class="col-xs-hidden  col-sm-2  col-md-4" ></div>
<div class="col-xs-9  col-sm-6  col-md-3  zuperxy" style="background-color:rgba(000,000,005,0.1); border-radius:6px;text-align:center;margin:auto;height:52px;padding:10px">  
<input id="mergesizerotate"  type="range"  min="1"  max="360"  value="1"  style="margin-top:13px"  />
</div>
<div class="col-xs-3  col-sm-2  col-md-1 " > 
  <div   id="acceptmergesizerotate"  onclick="javascript:finishedrotate();"   class=" bordertranhovbar zuperxy zuzax"  style="color:#ffffff;text-align:center;margin:auto;height:52px;font-size:35px;"> 
    <div style="height:52px;color:<?php echo $_SESSION['cl']; ?>;margin-top:4.2px">
    <span class="juju" style="position:relative;width:auto;">   <i class="fa fa-check" aria-hidden="true" ></i>   </span>  
      </div> </div> </div>
 </div>



     </div>

<!-- slider merged image sizer  -->





<!-- start supermergeimage  stuffs  -->






</div>









<!-- super sample loader-->


<div id="turblaaxmini" class="col-xs-12 cloudsupersampleminidark  zuzax"  onclick="javascript:flipbackgroundmini();"  style="height:100%;text-align:center;position:fixed;z-index:115;display:none ">  </div>


<div id="turblaax" class="col-xs-12 cloudsupersample"  style="height:100%;text-align:center;position:fixed;z-index:115;display:none "> 
 </div>


 <bottr>  <div id="supertame"    class="col-xs-12 zuperxy"  style="top:14%;font-size:22px;text-align:center;position:fixed;z-index:120;font-weight:bolder;">  <span  id="supertame1">  </span> 
   <span id="smallstar" style="font-size:20px;display:none"> <i class="far fa-star" aria-hidden="true"></i> </span> 
    <span id="supertame2">  </span>   </div>   </bottr>

<!-- super sample loader-->







<!-- super sample canvas-->

<div  class=""    style="width:100%; text-align: center;position:relative;  ">
<span  id="holdfinalhd" class=" zuzax">
<canvas id="supersample"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>

<canvas id="supersampleaddon"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>

<canvas id="supersampleaddon1"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>
<canvas id="supersampleaddon2"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>
<canvas id="supersampleaddon3"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>
<canvas id="supersampleaddon4"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>

<canvas id="supersampleoriginal"   style="display:none"   data-caman-hidpi-disabled="true" ></canvas>
  </span> </div>




<div id="showcroplock" style=""></div>




<!-- super sample canvas-->




<!--
  supersample   canvas being worked on > visible canvas !!!! cant be used to constaly redraw itself !!!!!!! 
                      for redraws addon is used for reset original is used visible is a work bench

supersampleoriginal  holds all  orignal canvas data > to visible canvas

supersampleaddon   holds all additions to visible canvas !! visible canvas > to addon canvas 
-->




  
</div>

