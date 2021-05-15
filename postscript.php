
<?php

echo'

  <script> 



function maketopiclick'.$ivd.''.$gringo.'(a,b){ 
 
  var  hashtags="'.$dtup.'";
  var   postid= a;
  var   gringo= b;



   var clicked="'.$userid.'";
    var usr ="'.$puser.'";
     var lock ="'.$idlock.'";
       var p="'.$pagenum.'";
      var j ="'.$ivd.'";
      var nowtag ="'.$xtra5.'";

     



var userx="'.$d.'";
     var namex="'.$name.'"; 
      var typxx="'.$gringo.'"; 
    
    
 $.ajax({
  type: "POST",
  url: "usertupgate.php",
         data: {member:userx,name:usr,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:hashtags}, 
   success: function(data){


var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+nowtag+""};
     history.replaceState(spex,null,document.URL); 

    var spec = {member:""+userx+"",name:""+usr+"",typex:"4",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:j};
      history.pushState(spec,null,document.URL); 

      $("#supershow").html(data).show();    },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 

 
 
  }






 function swint'.$ivd.''.$pagenum.''.$gringo.'(){

switchlayout'.$ivd.''.$pagenum.''.$gringo.'();  }





 function emotelist'.$ivd.''.$gringo.'(a,b,c,d,e,f,x){
  var userx="'.$d.'";
      var typxx="'.$gringo.'"; 
      var lock ="'.$idlock.'";
       var p="'.$pagenum.'";
      var j ="'.$ivd.'";

         var k1="'.$fun.'"; 
         var k2="'.$care.'";    
         var k3="'.$fresh.'";    
         var k4="'.$lovely.'";        
           
  if(timeoutclear == 1){ clearTimeout(toptime); }
 $.ajax({
  type: "POST",
  url: "emotionlistings.php",
   data: {fun:k1,care:k2,cool:k3,lovely:k4,emotion:a,postid:b,gringo:c,member:userx,typex:typxx,page:p,jump:j,jumplock:lock,pagein:d,jumpin:e,jumplockin:f}, 
 success: function(data){
   popup=1;
  poptype = 1;
   var spec = {member:"0",name:"0",typex:"0",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};

if( allimageloaded'.$pagenum.'=="allowbodyhide" ){  if(mobileboy == 0){   
 $("body").css("overflow","auto");  document.documentElement.style.overflow="hidden"; } } 

 if(x == 0){
  var userx="'.$d.'";
      var typxx="'.$gringo.'"; 
  var spec = {member:""+userx+"",name:"0",typex:""+typxx+"",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
   history.pushState(spec,null,document.URL);   
      $("#superpop").html(data).slideDown(1000); }
     else{  $("#superpop").html(data).show();  }
   
     },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });  }









 function react'.$ivd.''.$gringo.'(a,b,c,d,e,f,g,x){
        var chpo= $("#checkpostfunc'.$ivd.''.$gringo.'").val();
        if(chpo == 0){
  var commy = $("#totalreactions'.$ivd.''.$gringo.'").val()

  var userx="'.$d.'";
      var typxx="'.$gringo.'"; 
      var lock ="'.$idlock.'";
       var p="'.$pagenum.'";
      var j ="'.$ivd.'";    
       var cul ="'.$pcl.'";  
        var bodyflo=0;
  if(allimageloaded=="allowbodyhide" ){ var bodyflo=1; }  

  if(timeoutclear == 1){ clearTimeout(toptime); }
 $.ajax({
  type: "POST",
  url: "reactionslistings.php",
   data: {com:commy,rcolor:cul,body:bodyflo,lay:a,tot:g,postid:b,gringo:c,member:userx,typex:typxx,page:p,jump:j,jumplock:lock,pagein:d,jumpin:e,jumplockin:f}, 
 success: function(data){

 if(x == 0){
    var layx = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
   if(layx == 0){ zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);} }

   reactplay'.$ivd.''.$gringo.'(1);
   reactstate=1;

    reactidentity=b;
     reacttype=c;
        reacttotal='.$totalsets.';
     reactpage='.$pagenum.';
     if(mobileboy == 0){
     document.getElementById("supershow").style.left="-5px";}
   popup=1;
  poptype = 1;
   var spec = {member:"0",name:"0",typex:"0",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};

 if(x == 0){ history.pushState(spec,null,document.URL); 
  $("#superpop").html(data).slideDown("slow"); }else{
  
     

     
    $("#superpop").html(data).fadeOut(2000);
    $("#superpop").fadeOut(4000);
      $("#superpop").fadeIn(12000); 

  }  
         },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); } }







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
     $("#emotion1'.$ivd.''.$gringo.'").removeClass("emoactivekey1x");
       $("#emotion1'.$ivd.''.$gringo.'").addClass("emodeactivex"); 
    document.getElementById("emotion1'.$ivd.''.$gringo.'").style.height="23px";
   document.getElementById("emotion1'.$ivd.''.$gringo.'").style.width="auto";}


    if(checkfeel == 2){
     var rollerx2=document.getElementById("emotion2'.$ivd.''.$gringo.'");
      rollerx2.style.transition="all 4s ease"; 
    rollerx2.style.transform="rotate(-360deg)";
     $("#emotion2'.$ivd.''.$gringo.'").removeClass("emoactivekey2x"); 
       $("#emotion2'.$ivd.''.$gringo.'").addClass("emodeactivex"); 
       document.getElementById("emotion2'.$ivd.''.$gringo.'").style.height="23px"; 
        document.getElementById("emotion2'.$ivd.''.$gringo.'").style.width="auto"; }


    if(checkfeel == 3){
      var rollerx3=document.getElementById("emotion3'.$ivd.''.$gringo.'");
      rollerx3.style.transition="all 4s ease"; 
    rollerx3.style.transform="rotate(-360deg)";
     $("#emotion3'.$ivd.''.$gringo.'").removeClass("emoactivekey3x");  
       $("#emotion3'.$ivd.''.$gringo.'").addClass("emodeactivex"); 
      document.getElementById("emotion3'.$ivd.''.$gringo.'").style.height="23px"; 
     document.getElementById("emotion3'.$ivd.''.$gringo.'").style.width="auto";}


     if(checkfeel == 4){
      var rollerx4=document.getElementById("emotion4'.$ivd.''.$gringo.'");
      rollerx4.style.transition="all 4s ease"; 
    rollerx4.style.transform="rotate(-360deg)";
      $("#emotion4'.$ivd.''.$gringo.'").removeClass("emoactivekey4x"); 
       $("#emotion4'.$ivd.''.$gringo.'").addClass("emodeactivex"); 
   document.getElementById("emotion4'.$ivd.''.$gringo.'").style.height="23px";
   document.getElementById("emotion4'.$ivd.''.$gringo.'").style.width="auto"; }

    
       
  

var b="'.$ivd.'";
var c="'.$gringo.'";
 var d = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();
 $.ajax({
  type: "POST",
  url: "emotions.php",
  data: {emotion:a,postid:b,gringo:c,lay:d}, 
 success: function(data){
  $("#superemoticoninteract").html(data).show();  },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });   }












 function  gotopage'.$ivd.''.$gringo.'(){

  $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 

 
   var checkuser="'.$_SESSION['numuser'].'";
    var clicked="'.$userid.'";
    var usr ="'.$puser.'";

 if(checkuser == clicked){ 

 $.ajax({
  type: "POST",
  url: "userpagegate.php",
         data: {member:'.$userid.',name:usr,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
   success: function(data){
    var spec = {member:""+checkuser+"",name:""+usr+"",typex:"2",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL); 
      $("#supershow").html(data).show();    },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 

     } else{

 $.ajax({
  type: "POST",
  url: "datauser.php",
  data: {member:'.$userid.',ty:2,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
  
var userx="'.$d.'";
     var namex="'.$name.'"; 
      var typxx="'.$gringo.'"; 
      var lock ="'.$idlock.'";
       var p="'.$pagenum.'";
      var j ="'.$ivd.'";
        var tx5 ="'.$xtra5.'";


var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+tx5+""};
      history.replaceState(spex,null,document.URL); 

var spec = {member:""+clicked+"",name:""+usr+"",typex:"2",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL); 
        $("#supercontent").html(data).show();     },
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
if(mobileboy == 0){
  document.getElementById("postnumber'.$ivd.''.$gringo.'").style.fontSize="'.$txfsizepc.'";
   var atel=document.querySelector("#datacase'.$ivd.''.$gringo.'");
 atel.classList.remove("turmid");
   var casevar = document.getElementById("superbody'.$ivd.''.$pagenum.''.$gringo.'");  
   casevar.style.paddingRight="1.5px";
    var sarow = document.getElementById("arrows'.$ivd.''.$gringo.'");
   sarow.style.padding="0px";
 var tel=document.querySelector("#profileimageinfo'.$ivd.''.$gringo.'");
 tel.classList.remove("profileimageinfo");
 tel.classList.add("profileimageinfopc");
 var btel=document.querySelector("#posttypes'.$ivd.''.$gringo.'");
 btel.classList.remove("posttypesz");
 btel.classList.add("posttypeszpc");
 var ctel=document.querySelector("#thumby'.$ivd.''.$gringo.'");
 ctel.classList.remove("thumbyz");
 ctel.classList.add("thumbyzpc");
 var dtel=document.querySelector("#profileimage'.$ivd.''.$gringo.'");
 dtel.classList.remove("profileimagez");
 dtel.classList.add("profileimagezpc");
  var dtel=document.querySelector("#profileimagex'.$ivd.''.$gringo.'");
 dtel.classList.remove("profileimagezx");
 dtel.classList.add("profileimagezpcx");
  var etel=document.querySelector("#previewimage'.$ivd.''.$gringo.'");
 etel.classList.remove("previewimagez");
 etel.classList.add("previewimagezpc");
   var ftel=document.querySelector("#datausername'.$ivd.''.$gringo.'");
 ftel.classList.remove("datausernamez");
 ftel.classList.add("datausernamezpc");
   var gtel=document.querySelector("#postfunctions'.$ivd.''.$gringo.'");
 gtel.classList.remove("postfunctionsz");
 gtel.classList.add("postfunctionszpc");
       var htel=document.querySelector("#postscrollloader'.$ivd.''.$gringo.'");
 htel.classList.remove("postscrollloaderz");
 htel.classList.add("postscrollloaderzpc");
 var itel=document.querySelector("#postnumber'.$ivd.''.$gringo.'");
 itel.classList.remove("postnumberz");
 itel.classList.add("postnumberzpc");
  var itel=document.querySelector("#postnumberin'.$ivd.''.$gringo.'");
 itel.classList.remove("postnumberinz");
 itel.classList.add("postnumberinzpc");
  var jtel=document.querySelector("#postnumberinx'.$ivd.''.$gringo.'");
 jtel.classList.remove("postnumberinxz");
 jtel.classList.add("postnumberinxzpc");
  var ktel=document.querySelector("#clicktxt'.$ivd.''.$gringo.'");
 ktel.classList.remove("clicktxtz");
 ktel.classList.add("clicktxtzpc");
   var ltel=document.querySelector("#profileimageinfoinside'.$ivd.''.$gringo.'");
 ltel.classList.remove("profileimageinfoinsidez");
 ltel.classList.add("profileimageinfoinsidezpc");
   var hhk=document.querySelector("#midspace'.$ivd.''.$gringo.'");
     hhk.classList.remove("za");
 hhk.classList.add("zazp");
    var hhkq=document.querySelector("#caption'.$ivd.''.$gringo.'");
     hhkq.classList.remove("capy");
 hhkq.classList.add("capypc");
  var hhkc=document.querySelector("#'.$userbuttonid2.'");
     hhkc.classList.remove("usy");
 hhkc.classList.add("usypc");
  var hhka=document.querySelector("#topic'.$ivd.''.$gringo.'");
     hhka.classList.remove("motop");
 hhka.classList.add("motoppc");



    var mtel=document.querySelector("#image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");

    var mtelx=document.querySelector("#datte'.$ivd.''.$gringo.'");
     mtelx.style.fontSize="85%";
      var mtelxz=document.querySelector("#postfunctions'.$ivd.''.$gringo.'");
     mtelxz.style.marginTop="6px";
      var mtelxzj=document.querySelector("#profileimagefile'.$ivd.''.$gringo.'");
     mtelxzj.style.width="4.5em";


     
     
} }







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
if(innum > 5){  $("#postnumber'.$ivd.''.$gringo.'").show();   }  }

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
     focusOnSelect:true,
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
if(innum > 1){  $("#postnumber"+pk+"'.$gringo.'").show();    }  }

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
var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").addClass("startslidebar");
document.getElementById("allowshortimage'.$ivd.''.$gringo.'").value=1;
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=0;
textnotifyplay(1);

if(pk == 0){document.getElementById("playkey'.$pagenum.''.$gringo.'").value="'.$ivd.'"; }}










function popupinfo'.$ivd.''.$pagenum.''.$gringo.'(){

var dinfostate = $("#autorollstate'.$pagenum.''.$gringo.'").val();
if(dinfostate == 0){ 
    $("#windowcoverback").show();
  $("#windowcover'.$pagenum.''.$gringo.'").show();
  textnotifyauto(1);
document.getElementById("autorollstate'.$pagenum.''.$gringo.'").value=1;
$(".scrollpoptoggleoff").hide();
$(".scrollpoptoggleon").show();
document.getElementById("scrollpoptoggleonx'.$ivd.''.$pagenum.''.$gringo.'").style.color="'.$pcl.'"; 
setTimeout(function(){ 
 document.getElementById("scrollpoptoggleonx'.$ivd.''.$pagenum.''.$gringo.'").style.color="#ffffff";   },500);
 var y="'.$auto.'";
auto'.$pagenum.''.$gringo.'(y); 
}else{ 
  $("#windowcoverback").hide();
        $("#windowcover'.$pagenum.''.$gringo.'").hide();
  textnotifyauto(0);
document.getElementById("autorollstate'.$pagenum.''.$gringo.'").value=0;
$(".scrollpoptoggleoff").show();
 $(".scrollpoptoggleon").hide();
 autostop'.$pagenum.''.$gringo.'();  }  }












function   profileimageclock'.$ivd.''.$gringo.'(){
var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="hidden";
 document.getElementById("checkproimtimout'.$ivd.''.$gringo.'").value=1;
profileimagetimeout'.$ivd.''.$gringo.'=setTimeout(function(){
  document.getElementById("checkproimtimout'.$ivd.''.$gringo.'").value=0;
  proim.style.visibility="visible";},10000);}














function arrowtxttime'.$ivd.''.$gringo.'(){alert("jh");
  document.getElementById("checkarrtxtimout'.$ivd.''.$gringo.'").value=1;
     arrtoptimeout'.$ivd.''.$gringo.'=setTimeout(function(){
var adjlongp = $("#adjustarrowlongpost'.$ivd.''.$gringo.'").val();
       if(adjlongp == 1){
        var arrzw = document.getElementById("arrows'.$ivd.''.$gringo.'");
        arrzw.style.top="15%";}else{
         $("#arrows'.$ivd.''.$gringo.'").appendTo("#arrowsshiftin'.$ivd.''.$gringo.'");}
    document.getElementById("checkarrtxtimout'.$ivd.''.$gringo.'").value=0; },4000);}




function arrowtxttimepop'.$ivd.''.$gringo.'(){alert("jh");
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

initialSlide:idexnreal,
   swipe:true,
    lazyLoad:"ondemand",
     focusOnSelect:true,
      waitForAnimate:false,
      touchThreshold:50,
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
dots:true,
  infinite:true,
  speed:600,
  fade: true,
  cssEase:"linear",

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






function reactplay'.$ivd.''.$gringo.'(a){
  if(a==0){ $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
  document.getElementById("reactplaystate'.$ivd.''.$pagenum.''.$gringo.'").value=0;
    var too="'.$totalsets.'";
    if(too ==1 ){   startsingle'.$ivd.''.$gringo.'();  }
    else{    startslide'.$ivd.''.$gringo.'();  }
    }else{
     $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
     document.getElementById("reactplaystate'.$ivd.''.$pagenum.''.$gringo.'").value=1;
   var idexn = $("#activeindex'.$ivd.''.$gringo.'").val();
    var idexnreal = idexn - 1;
$("#datacase'.$ivd.''.$gringo.'").slick({ 
  pauseOnFocus:false,
  pauseOnHover:false,
  waitForAnimate:false,
  touchThreshold:35,
initialSlide:idexnreal,
 autoplay:true,
  autoplaySpeed:300,
speed:30,
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
adaptiveHeight: false  }); } }












function haltplay'.$ivd.''.$pagenum.''.$gringo.'(){
  var allp = $("#allowpauseimage'.$ivd.''.$gringo.'").val();
if(allp == 0 ){
$("#datacase'.$ivd.''.$gringo.'").slick("unslick");
   startslide'.$ivd.''.$gringo.'();
   $("#arrows'.$ivd.''.$gringo.'").hide();
   var innum="'.$totalsets.'";
     if(innum > 1){
$("#postnumber'.$ivd.''.$gringo.'").hide();}
$("#pausetypein'.$ivd.''.$gringo.'").show();
$("#slidebar'.$ivd.''.$gringo.'").hide();
var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
 var typx = $("#type"+idex+"'.$ivd.''.$gringo.'").val();
if(typx == 0 ||  typx == 100){}else{
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";}
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
if(innum > 1){
$("#postnumber'.$ivd.''.$gringo.'").show();}  }
  $("#slidebar'.$ivd.''.$gringo.'").show();
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
 $("#activatebar'.$ivd.''.$gringo.'").removeClass("stopslidebar");
 $("#activatebar'.$ivd.''.$gringo.'").addClass("startslidebar");
document.getElementById("allowpauseimage'.$ivd.''.$gringo.'").value=0;
textnotifyplay(1);}    }










  

function viewhelp'.$ivd.''.$pagenum.''.$gringo.'(){

  $("#pagepost'.$ivd.''.$pagenum.''.$gringo.'").show();
}







function pagego'.$ivd.''.$pagenum.''.$gringo.'(){
 $("#pagepost'.$ivd.''.$pagenum.''.$gringo.'").hide();

  $("#optionsx'.$ivd.''.$pagenum.''.$gringo.'").show();
 $("#setx'.$ivd.''.$pagenum.''.$gringo.'").show();
  
}






function hashtagmode'.$ivd.''.$gringo.'(){
var hashstatik=$("#hashtagactivated'.$ivd.''.$gringo.'").val();
if(hashstatik == 0){
  var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
   if(allow == 1){ $("#pausetypein'.$ivd.''.$gringo.'").hide();  }
  var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
  $("#image"+idex+"'.$ivd.''.$gringo.'").removeClass("juju");
  $(".textpostclickable'.$ivd.''.$gringo.'").addClass("textpostundeline");
  document.getElementById("hashtagactivated'.$ivd.''.$gringo.'").value="1";
  $("#clcircle'.$ivd.''.$gringo.'").hide();
  $("#clhash'.$ivd.''.$gringo.'").show();
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
startsingle'.$ivd.''.$gringo.'();
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="none";}
  else{
     var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
   if(allow == 1){ $("#pausetypein'.$ivd.''.$gringo.'").show();  }
 $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
  var totsetsx'.$ivd.''.$gringo.' ="'.$totalsets.'";
if(totsetsx'.$ivd.''.$gringo.' == 1){}else{
     startslide'.$ivd.''.$gringo.'(); 
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="block";}
  var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
  $("#image"+idex+"'.$ivd.''.$gringo.'").addClass("juju");
  $(".textpostclickable'.$ivd.''.$gringo.'").removeClass("textpostundeline");
   $("#clhash'.$ivd.''.$gringo.'").hide();
   $("#clcircle'.$ivd.''.$gringo.'").show();
 document.getElementById("hashtagactivated'.$ivd.''.$gringo.'").value="0";} 
                                  }








function zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(a,b,c){

  var hashstatik=$("#hashtagactivated'.$ivd.''.$gringo.'").val();
  if(hashstatik == 0){


if(reactstate == 1){ 
    switchreactionlayout'.$ivd.''.$gringo.'(0);
  }
else{
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


var checktimo = $("#checkproimtimout'.$ivd.''.$gringo.'").val();


var checkinfofate = $("#checkinfostate'.$ivd.''.$gringo.'").val();
if(checkinfofate == 0  || a == 1){


  var cctyp = $("#type"+idex+"'.$ivd.''.$gringo.'").val();
if(cctyp==0 || cctyp==100){}else{
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
$("#image"+idex+"inside'.$ivd.''.$gringo.'").addClass("blurplaceholder");}

var innum="'.$totalsets.'";
if(innum > 1){
    var checkpnum = $("#checkpostnumbertimout'.$ivd.''.$gringo.'").val();
if(checkpnum == 1){  clearTimeout(postnuumtimeout'.$ivd.''.$gringo.');  }
$("#postnumber'.$ivd.''.$gringo.'").hide();}

profpadlarge'.$ivd.''.$pagenum.''.$gringo.'();


var totsetsx'.$ivd.''.$gringo.' = "'.$totalsets.'";
if(totsetsx'.$ivd.''.$gringo.' == 1){}else{
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
startsingle'.$ivd.''.$gringo.'();
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="none";}

if(checktimo == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); }



var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="visible";
$("#profileimage'.$ivd.''.$gringo.'").appendTo("#acceptprofileimage'.$ivd.''.$gringo.'");
if(mobileboy == 1){ proimimfox.style.marginLeft="3.1em";   }else{
  proimimfox.style.marginLeft="3.5em";}
var prvv = document.getElementById("previewimage'.$ivd.''.$gringo.'");
prvv.style.display="none";
if(mobileboy == 1){var per=65;}else{ var per=60; }
var hcap= per/ 100 * ih;

if( infoh > hcap   ){ 
  document.getElementById("holdrealwidth'.$ivd.''.$gringo.'").value=iw;
   document.getElementById("holdrealheight4txt'.$ivd.''.$gringo.'").value=ih;
  document.getElementById("checkzoom'.$ivd.''.$gringo.'").value=1;


 var fixh = fixheight;

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


if(mobileboy == "0" ){
    var postin = document.getElementById("postinfo'.$ivd.''.$gringo.'");
    postin.style.width="99.80%";
  }
  
 var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
   pfun.style.visibility="visible";
 $("#namebutton'.$ivd.''.$gringo.'").show(); 
playvar.style.visibility="visible";  
 expandvar.style.visibility="visible";  
var infoccvar = document.getElementById("postinfo'.$ivd.''.$gringo.'");
      infoccvar.style.visibility="visible";
 document.getElementById("checkinfostate'.$ivd.''.$gringo.'").value=1;
var gtcheight = heightchecker;
if(a == 0) {
if(ih > gtcheight){

  if(mobileboy == 1){
  $("html,body").animate({
  scrollTop:$("#gotolongm'.$ivd.''.$gringo.'").offset().top},1);}
  else{  $("html,body").animate({
  scrollTop:$("#gotolong'.$ivd.''.$gringo.'").offset().top},1); }

}else{

if(mobileboy == 1){
  $("html,body").animate({
  scrollTop:$("#gotom'.$ivd.''.$gringo.'").offset().top},1);}
  else{
 $("html,body").animate({
  scrollTop:$("#goto'.$ivd.''.$gringo.'").offset().top},1);}

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
else{ var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
  var proims = document.getElementById("profileimage'.$ivd.''.$gringo.'");
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
if(innum > 1){
if(cctyp==0 || cctyp==100){
$("#postnumber'.$ivd.''.$gringo.'").show();
  document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=1;
  postnuumtimeout'.$ivd.''.$gringo.' = setTimeout(function(){
 document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=0;
$("#postnumber'.$ivd.''.$gringo.'").hide();},3600);}
  else{$("#postnumber'.$ivd.''.$gringo.'").show(); }   }



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
 imagevar.style.height="auto";
  
 }
 else{
var getheightdata = $("#holdrealheight4txt'.$ivd.''.$gringo.'").val();
  imagevarx.style.width=+getwidthdata+"px";
 imagevarx.style.height="auto"; 
 imagevar.style.height=+getheightdata+"px"; 
 imagevar.style.width="auto"; }
if(mobileboy == 0){
       imagevar.style.borderRadius="6px";}  }



  var totsetsx'.$ivd.''.$gringo.' = $("#totalallsets'.$ivd.''.$gringo.'").val();
if(totsetsx'.$ivd.''.$gringo.' == 1){}else{
  $("#datacase'.$ivd.''.$gringo.'").slick("unslick");
  if(b == 1){ startslideplay'.$ivd.''.$gringo.'();}
  else{startslide'.$ivd.''.$gringo.'(); }
var arrz = document.getElementById("arrows'.$ivd.''.$gringo.'");
arrz.style.display="block";}




    expandvar.style.visibility="hidden"; 
     if(b == 0){ playvar.style.visibility="hidden"; }
     else{ }  
var infoccvar = document.getElementById("postinfo'.$ivd.''.$gringo.'");
      infoccvar.style.visibility="hidden";   }


     
    if(a != 5){   $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
          itemSelector : ".superpostitem'.$pagenum.''.$gringo.'", });}
  


var waypointhere = 0000;

}

    }  }


   }  }  }















function processzero'.$ivd.''.$pagenum.''.$gringo.'(){

var pa="'.$pagenum.'";
var la="'.$last.'";
var jum ="'.$jump.'";
var fir ="'.$count.'";
var fc ="'.$feedcounter.'";



var pfi = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
pfi.style.visibility="hidden";

allthumbloaded'.$pagenum.'++;
var coun="'.$count.'";
var countthis ="'.$gan.'";
var alx =  allthumbloaded'.$pagenum.' ;
var tots="'.$gan.'";
var averagemark = tots/2;


if(alx == 1){   
if(fc == 1 ){ 
$(document).ready(function(){
 $("html,body").animate({
scrollTop:$("#newpagesnapto'.$pagenum.''.$gringo.'").offset().top},"fast"); }) }}

       var hh = 0;

       if(alx < averagemark  && hh == 3){   
setTimeout(function(){  
  $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'" });

  $("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'" });});
 },+alx+"00")   }


if(jum !=0 ){  $("#feedwait").show();  }else{ $("#feedwait").hide();}

if(fir == 1 ){ 
 if(pa !== la){setTimeout(function(){document.getElementById("plusiconout'.$pagenum.''.$gringo.'").style.visibility="visible";},2000)}}






if(allthumbloaded'.$pagenum.' == countthis){  
if(jum !=0 ){

if(mobileboy == 1){
 $("html,body").animate({scrollTop:$("#gotom"+jum+"'.$gringo.'").offset().top},10,historypopups'.$ivd.''.$pagenum.''.$gringo.'());}
 else{
  $("html,body").animate({scrollTop:$("#goto"+jum+"'.$gringo.'").offset().top},10,historypopups'.$ivd.''.$pagenum.''.$gringo.'());}   

}}

      }






function historypopups'.$ivd.''.$pagenum.''.$gringo.'(){ setTimeout(function(){
  var actzz ="'.$activatein.'";



     if(actzz == 0){  $("#feedwait").hide(); }

  else if(actzz == 1){
    emotelist'.$jump.''.$gringo.'('.$xtra1.','.$jump.','.$gringo.','.$pagein.','.$jumpin.','.$jumpinlock.',1);}  

else  if(actzz == 3){
   
   react'.$jump.''.$gringo.'(1,'.$jump.','.$gringo.','.$pagein.','.$jumpin.','.$jumpinlock.','.$totalsets.',1);   }  
    
    else{ }

   },1500); }















function processultra'.$ivd.''.$pagenum.''.$gringo.'(){

padmobile'.$ivd.''.$pagenum.''.$gringo.'();

  

var dinfostate = $("#autorollstate'.$pagenum.''.$gringo.'").val();
if(dinfostate == 0){ 
    $(".scrollpoptoggleoff").show();
     $(".scrollpoptoggleon").hide(); }
else{  $(".scrollpoptoggleoff").hide();
     $(".scrollpoptoggleon").show();}




var waypointhere = 0000;

   


    $(document).ready(function(){



var innum="'.$totalsets.'";
if(innum > 1){
$("#postnumber'.$ivd.''.$gringo.'").show();}




var chkfirstx="'.$sim1ty.'";
if( chkfirstx ==0 || chkfirstx==100 ){}else{
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";
if(mobileboy == 1 ){var imagevarxx = document.getElementById("image1'.$ivd.''.$gringo.'");
  imagevarxx.style.borderRadius="0px";}  }




var myfirstim'.$ivd.''.$gringo.'= $("#heightstate'.$ivd.''.$gringo.'").val();
var myimagevar'.$ivd.''.$gringo.'= document.getElementById("image"+myfirstim'.$ivd.''.$gringo.'+"'.$ivd.''.$gringo.'");

var usedheight'.$ivd.''.$gringo.'= parseInt(window.getComputedStyle(myimagevar'.$ivd.''.$gringo.',null).height) + 1;


var plusheight= textplusheight;
var canout = document.querySelector("#datacase'.$ivd.''.$gringo.'");
var caseheight = parseInt(window.getComputedStyle(canout,null).height);
var longpost'.$ivd.''.$gringo.'= 0; 
if(usedheight'.$ivd.''.$gringo.' > heightchecker){
   document.getElementById("mylongpost'.$ivd.''.$gringo.'").value=1;
  longpost'.$ivd.''.$gringo.'= 1;  }


 var intxt1'.$ivd.''.$gringo.'= document.getElementById("image1'.$ivd.''.$gringo.'");
var iw = parseInt(window.getComputedStyle(intxt1'.$ivd.''.$gringo.',null).width);
   var ih = parseInt(window.getComputedStyle(intxt1'.$ivd.''.$gringo.',null).height);
   var tt=ih/iw;
 
  if(tt <= 0.82){    var hhkzz=document.querySelector("#datauniverse'.$ivd.''.$gringo.'");
     hhkzz.classList.remove("itemsnap");
 hhkzz.classList.add("itemsnapx");    }



 var checktxt1'.$ivd.''.$gringo.' = "'.$sim1ty.'";
 if( checktxt1'.$ivd.''.$gringo.' > 0  && checktxt1'.$ivd.''.$gringo.' < 100){ 
 

      intxt1'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
var cankk1 = document.querySelector("#image1inside'.$ivd.''.$gringo.'");
   var cankkb1 = document.querySelector("#image1'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin1 = parseInt(window.getComputedStyle(cankk1,null).height);  
   var  checkin2 = parseInt(window.getComputedStyle(cankkb1,null).height); 
if(checkin1 + plusheight > checkin2){ cankkb1.style.display="block"; cankkb1.style.alignItems=" "; 
cankk1.style.paddingBottom="50px";cankk1.style.paddingTop="60px";cankk1.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image1inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image1'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image1'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
var checktxt2'.$ivd.''.$gringo.' = "'.$sim2ty.'";
 if( checktxt2'.$ivd.''.$gringo.' > 0){ 
  var intxt2'.$ivd.''.$gringo.'= document.getElementById("image2'.$ivd.''.$gringo.'");
      intxt2'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px";
       var cankk2 = document.querySelector("#image2inside'.$ivd.''.$gringo.'");
   var cankkb2 = document.querySelector("#image2'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin2 = parseInt(window.getComputedStyle(cankk2,null).height);  
if(checkin2 + plusheight > checkout){ cankkb2.style.display="block"; cankkb2.style.alignItems=" "; cankk2.style.paddingBottom="50px";cankk2.style.paddingTop="60px";cankk2.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image2inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image2'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image2'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt3'.$ivd.''.$gringo.' = "'.$sim3ty.'";
 if( checktxt3'.$ivd.''.$gringo.' > 0){ 
  var intxt3'.$ivd.''.$gringo.'= document.getElementById("image3'.$ivd.''.$gringo.'");
      intxt3'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk3 = document.querySelector("#image3inside'.$ivd.''.$gringo.'");
   var cankkb3 = document.querySelector("#image3'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin3 = parseInt(window.getComputedStyle(cankk3,null).height);  
if(checkin3 + plusheight > checkout){ cankkb3.style.display="block"; cankkb3.style.alignItems=" "; cankk3.style.paddingBottom="50px";cankk3.style.paddingTop="60px";cankk3.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image3inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image3'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image3'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt4'.$ivd.''.$gringo.' = "'.$sim4ty.'";
 if( checktxt4'.$ivd.''.$gringo.' > 0){ 
  var intxt4'.$ivd.''.$gringo.'= document.getElementById("image4'.$ivd.''.$gringo.'");
      intxt4'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk4 = document.querySelector("#image4inside'.$ivd.''.$gringo.'");
   var cankkb4 = document.querySelector("#image4'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin4 = parseInt(window.getComputedStyle(cankk4,null).height);  
if(checkin4 + plusheight > checkout){ cankkb4.style.display="block"; cankkb4.style.alignItems=" "; cankk4.style.paddingBottom="50px";cankk4.style.paddingTop="60px";cankk4.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image4inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image4'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image4'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt5'.$ivd.''.$gringo.' = "'.$sim5ty.'";
 if( checktxt5'.$ivd.''.$gringo.' > 0){ 
  var intxt5'.$ivd.''.$gringo.'= document.getElementById("image5'.$ivd.''.$gringo.'");
      intxt5'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk5 = document.querySelector("#image5inside'.$ivd.''.$gringo.'");
   var cankkb5 = document.querySelector("#image5'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin5 = parseInt(window.getComputedStyle(cankk5,null).height);  
if(checkin5 + plusheight  > checkout){ cankkb5.style.display="block"; cankkb5.style.alignItems=" "; cankk5.style.paddingBottom="50px";cankk5.style.paddingTop="60px";cankk5.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image5inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image5'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image5'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt6'.$ivd.''.$gringo.' = "'.$sim6ty.'";
 if( checktxt6'.$ivd.''.$gringo.' > 0){ 
  var intxt6'.$ivd.''.$gringo.'= document.getElementById("image6'.$ivd.''.$gringo.'");
      intxt6'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk6 = document.querySelector("#image6inside'.$ivd.''.$gringo.'");
   var cankkb6 = document.querySelector("#image6'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin6 = parseInt(window.getComputedStyle(cankk6,null).height);  
if(checkin6 + plusheight > checkout){ cankkb6.style.display="block"; cankkb6.style.alignItems=" "; cankk6.style.paddingBottom="50px";cankk6.style.paddingTop="60px";cankk6.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image6inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image6'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image6'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt7'.$ivd.''.$gringo.' = "'.$sim7ty.'";
 if( checktxt7'.$ivd.''.$gringo.' > 0){ 
  var intxt7'.$ivd.''.$gringo.'= document.getElementById("image7'.$ivd.''.$gringo.'");
      intxt7'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk7 = document.querySelector("#image7inside'.$ivd.''.$gringo.'");
   var cankkb7 = document.querySelector("#image7'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin7 = parseInt(window.getComputedStyle(cankk7,null).height);  
if(checkin7 + plusheight > checkout){ cankkb7.style.display="block"; cankkb7.style.alignItems=" "; cankk7.style.paddingBottom="50px";cankk7.style.paddingTop="60px";cankk7.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image7inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image7'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image7'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt8'.$ivd.''.$gringo.' = "'.$sim8ty.'";
 if( checktxt8'.$ivd.''.$gringo.' > 0){ 
  var intxt8'.$ivd.''.$gringo.'= document.getElementById("image8'.$ivd.''.$gringo.'");
      intxt8'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk8 = document.querySelector("#image8inside'.$ivd.''.$gringo.'");
   var cankkb8 = document.querySelector("#image8'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin8 = parseInt(window.getComputedStyle(cankk8,null).height);  
if(checkin8 + plusheight > checkout){ cankkb8.style.display="block"; cankkb8.style.alignItems=" "; cankk8.style.paddingBottom="50px";cankk8.style.paddingTop="60px";cankk8.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image8inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image8'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image8'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt9'.$ivd.''.$gringo.' = "'.$sim9ty.'";
 if( checktxt9'.$ivd.''.$gringo.' > 0){ 
  var intxt9'.$ivd.''.$gringo.'= document.getElementById("image9'.$ivd.''.$gringo.'");
      intxt9'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk9 = document.querySelector("#image9inside'.$ivd.''.$gringo.'");
   var cankkb9 = document.querySelector("#image9'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin9 = parseInt(window.getComputedStyle(cankk9,null).height);  
if(checkin9 + plusheight > checkout){ cankkb9.style.display="block"; cankkb9.style.alignItems=" "; cankk9.style.paddingBottom="50px";cankk9.style.paddingTop="60px";cankk9.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image9inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image9'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image9'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt10'.$ivd.''.$gringo.' = "'.$sim10ty.'";
 if( checktxt10'.$ivd.''.$gringo.' > 0){ 
  var intxt10'.$ivd.''.$gringo.'= document.getElementById("image10'.$ivd.''.$gringo.'");
      intxt10'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk10 = document.querySelector("#image10inside'.$ivd.''.$gringo.'");
   var cankkb10 = document.querySelector("#image10'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin10 = parseInt(window.getComputedStyle(cankk10,null).height);  
if(checkin10 + plusheight > checkout){ cankkb10.style.display="block"; cankkb10.style.alignItems=" "; cankk10.style.paddingBottom="50px";cankk10.style.paddingTop="60px";cankk10.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image10inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image10'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image10'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt11'.$ivd.''.$gringo.' = "'.$sim11ty.'";
 if( checktxt11'.$ivd.''.$gringo.' > 0){ 
  var intxt11'.$ivd.''.$gringo.'= document.getElementById("image11'.$ivd.''.$gringo.'");
      intxt11'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk11 = document.querySelector("#image11inside'.$ivd.''.$gringo.'");
   var cankkb11 = document.querySelector("#image11'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin11 = parseInt(window.getComputedStyle(cankk11,null).height);  
if(checkin11 + plusheight > checkout){ cankkb11.style.display="block"; cankkb11.style.alignItems=" "; cankk11.style.paddingBottom="50px";cankk11.style.paddingTop="60px";cankk11.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image11inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image11'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image11'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt12'.$ivd.''.$gringo.' = "'.$sim12ty.'";
 if( checktxt12'.$ivd.''.$gringo.' > 0){ 
  var intxt12'.$ivd.''.$gringo.'= document.getElementById("image12'.$ivd.''.$gringo.'");
      intxt12'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk12 = document.querySelector("#image12inside'.$ivd.''.$gringo.'");
   var cankkb12 = document.querySelector("#image12'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin12 = parseInt(window.getComputedStyle(cankk12,null).height);  
if(checkin12 + plusheight > checkout){ cankkb12.style.display="block"; cankkb12.style.alignItems=" "; cankk12.style.paddingBottom="50px";cankk12.style.paddingTop="60px";cankk12.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image12inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image12'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image12'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt13'.$ivd.''.$gringo.' = "'.$sim13ty.'";
 if( checktxt13'.$ivd.''.$gringo.' > 0){ 
  var intxt13'.$ivd.''.$gringo.'= document.getElementById("image13'.$ivd.''.$gringo.'");
      intxt13'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk13 = document.querySelector("#image13inside'.$ivd.''.$gringo.'");
   var cankkb13 = document.querySelector("#image13'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin13 = parseInt(window.getComputedStyle(cankk13,null).height);  
if(checkin13 + plusheight > checkout){ cankkb13.style.display="block"; cankkb13.style.alignItems=" "; cankk13.style.paddingBottom="50px";cankk13.style.paddingTop="60px";cankk13.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image13inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image13'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image13'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt14'.$ivd.''.$gringo.' = "'.$sim14ty.'";
 if( checktxt14'.$ivd.''.$gringo.' > 0){ 
  var intxt14'.$ivd.''.$gringo.'= document.getElementById("image14'.$ivd.''.$gringo.'");
      intxt14'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk14 = document.querySelector("#image14inside'.$ivd.''.$gringo.'");
   var cankkb14 = document.querySelector("#image14'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin14 = parseInt(window.getComputedStyle(cankk14,null).height);  
if(checkin14 + plusheight > checkout){ cankkb14.style.display="block"; cankkb14.style.alignItems=" "; cankk14.style.paddingBottom="50px";cankk14.style.paddingTop="60px";cankk14.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image14inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image14'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image14'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt15'.$ivd.''.$gringo.' = "'.$sim15ty.'";
 if( checktxt15'.$ivd.''.$gringo.' > 0){ 
  var intxt15'.$ivd.''.$gringo.'= document.getElementById("image15'.$ivd.''.$gringo.'");
      intxt15'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk15 = document.querySelector("#image15inside'.$ivd.''.$gringo.'");
   var cankkb15 = document.querySelector("#image15'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin15 = parseInt(window.getComputedStyle(cankk15,null).height);  
if(checkin15 + plusheight > checkout){ cankkb15.style.display="block"; cankkb15.style.alignItems=" "; cankk15.style.paddingBottom="50px";cankk15.style.paddingTop="60px";cankk15.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image15inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image15'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image15'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}
      var checktxt16'.$ivd.''.$gringo.' = "'.$sim16ty.'";
 if( checktxt16'.$ivd.''.$gringo.' > 0){ 
  var intxt16'.$ivd.''.$gringo.'= document.getElementById("image16'.$ivd.''.$gringo.'");
      intxt16'.$ivd.''.$gringo.'.style.height=+usedheight'.$ivd.''.$gringo.'+"px"; 
      var cankk16 = document.querySelector("#image16inside'.$ivd.''.$gringo.'");
   var cankkb16 = document.querySelector("#image16'.$ivd.''.$gringo.'");
var checkout = caseheight;
  var  checkin16 = parseInt(window.getComputedStyle(cankk16,null).height);  
if(checkin16 + plusheight > checkout){ cankkb16.style.display="block"; cankkb16.style.alignItems=" "; cankk16.style.paddingBottom="50px";cankk16.style.paddingTop="60px";cankk16.style.marginTop="0px";}
 if(longpost'.$ivd.''.$gringo.' == 1){ 
      document.getElementById("image16inside'.$ivd.''.$gringo.'").style.padding="50px";
      var oldll = parseInt($("#image16'.$ivd.''.$gringo.'").css("font-size"));
    var  oldllx = oldll + 3;
      $("#image16'.$ivd.''.$gringo.'").css("font-size", ""+oldllx+"px");}}




var totsets'.$ivd.''.$gringo.' = $("#totalallsets'.$ivd.''.$gringo.'").val();
if(totsets'.$ivd.''.$gringo.' == 1){
startsingle'.$ivd.''.$gringo.'();
}else{
  $("#playtypein'.$ivd.''.$gringo.'").show();
  var arrx = document.getElementById("arrows'.$ivd.''.$gringo.'");
   arrx.style.display="block";
startslide'.$ivd.''.$gringo.'();}





var f="100";
if(f == "10"){swint'.$ivd.''.$pagenum.''.$gringo.'();}

allimageloaded'.$pagenum.'++;
var countthis ="'.$gan.'";
var coun="'.$count.'";
var accin ="'.$activatein.'";
if(allimageloaded'.$pagenum.' == countthis){ 
 allimageloaded'.$pagenum.'="allowbodyhide"; 
 setTimeout(function(){  if(popup==1){ $("body").css("overflow","hidden");}   },500);  }


var leftrow'.$ivd.''.$gringo.'= document.getElementById("superplayleft'.$ivd.''.$pagenum.''.$gringo.'");
var rightrow'.$ivd.''.$gringo.'= document.getElementById("superplayright'.$ivd.''.$pagenum.''.$gringo.'");
var nhh =usedheight'.$ivd.''.$gringo.' -20 ;
 leftrow'.$ivd.''.$gringo.'.style.height=+nhh+"px"; 
 rightrow'.$ivd.''.$gringo.'.style.height=+nhh+"px"; 



if(gg == 2){

zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(1,0,0);
}

 
if(allimageloaded'.$pagenum.' == "allowbodyhide"  ||  allimageloaded'.$pagenum.' == countthis){ 
  setTimeout(   function(){ 
    $("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"
    });});  },3000)}
 


  

    

    

});    }







var txtonly'.$ivd.''.$gringo.' ="'.$textonly.'";

if(txtonly'.$ivd.''.$gringo.' == 1){ 

 var txtheight = onlytext;
var tintxt1'.$ivd.''.$gringo.'= document.getElementById("image1'.$ivd.''.$gringo.'");
      tintxt1'.$ivd.''.$gringo.'.style.height=+txtheight+"px"; 
  processzero'.$ivd.''.$pagenum.''.$gringo.'();
      processultra'.$ivd.''.$pagenum.''.$gringo.'();


    }else{

 $("#thumb"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'").imagesLoaded(function(){ 
  if(mobileboy == 1){
  var thumbimagevar = document.getElementById("thumb"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'");
 thumbimagevar.style.borderRadius="0px";}
  processzero'.$ivd.''.$pagenum.''.$gringo.'();});
  

$("#image"+firstimx'.$ivd.'+"'.$ivd.''.$gringo.'").imagesLoaded(function(){

processultra'.$ivd.''.$pagenum.''.$gringo.'();

  });          }


  viewhelp'.$ivd.''.$pagenum.''.$gringo.'();
















$("#datacase'.$ivd.''.$gringo.'").on("afterChange", function(event, slick, currentSlide, nextSlide){
  var dataid = $(slick.$slides[currentSlide]).data("index");  
    var rply = $("#reactplaystate'.$ivd.''.$pagenum.''.$gringo.'").val();
    if(rply == 0){  document.getElementById("activeindex'.$ivd.''.$gringo.'").value=dataid; }
  var ppnum = document.getElementById("postnumberactive'.$ivd.''.$gringo.'");
  ppnum.innerHTML=""+dataid+"";

document.getElementById("view"+dataid+"'.$ivd.''.$gringo.'").value=1;

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



var lay = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();

 var typx = $("#type"+dataid+"'.$ivd.''.$gringo.'").val();

if(typx == 0 ||  typx == 100){

 var innum="'.$totalsets.'";
if(innum > 1){
$("#postnumber'.$ivd.''.$gringo.'").show();
var checkpnum = $("#checkpostnumbertimout'.$ivd.''.$gringo.'").val();
if(checkpnum == 1){  clearTimeout(postnuumtimeout'.$ivd.''.$gringo.');  }
document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=1;
postnuumtimeout'.$ivd.''.$gringo.' = setTimeout(function(){
 document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=0;
$("#postnumber'.$ivd.''.$gringo.'").hide();},3600); }


  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";

if(lay == 0){
    var proim'.$ivd.''.$gringo.'= document.getElementById("profileimage'.$ivd.''.$gringo.'");
  proim'.$ivd.''.$gringo.'.style.visibility="hidden";
      var checktimox = $("#checkproimtimout'.$ivd.''.$gringo.'").val();
if(checktimox == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); 
profileimageclock'.$ivd.''.$gringo.'(); }else if(checktimox == 0){
 profileimageclock'.$ivd.''.$gringo.'(); }else{}  
if(mobileboy == 0){ var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px"; }     }
 else{
  var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px";}

}else{

var innum="'.$totalsets.'";
if(innum > 1){
var checkpnum = $("#checkpostnumbertimout'.$ivd.''.$gringo.'").val();
if(checkpnum == 1){ clearTimeout(postnuumtimeout'.$ivd.''.$gringo.');
document.getElementById("checkpostnumbertimout'.$ivd.''.$gringo.'").value=0; }
$("#postnumber'.$ivd.''.$gringo.'").show();}

 if(rply == 0){
 var allow = $("#allowshortimage'.$ivd.''.$gringo.'").val();
   if(allow == 1){var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";}else{
     var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="block";}}  


  var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
  proim.style.visibility="visible";
 
        if(lay == 0){
if(mobileboy == 0){ var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px"; } 
        } else{
  var clickhnd = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
  clickhnd.style.display="none";
  if(mobileboy == 0){ 
  var imagevarproa = document.getElementById("image"+dataid+"'.$ivd.''.$gringo.'");
     imagevarproa.style.borderRadius="6px";}  }

   }
     var tly=1;
    if(rply == 1 && tly == dataid){  setTimeout(function(){  reactplay'.$ivd.''.$gringo.'(0);  },1000);   }

});












var last ="'.$countfinished.'";
var sll ="'.$scroll.'";
var jum ="'.$jump.'";


 if(last == 1 ){  
 if(sll ==1){
$(document).ready(function(){
 $("html,body").animate({
scrollTop:$("#supersort").offset().top},"fast");}) }

else{ }  }













  function switchlayout'.$ivd.''.$pagenum.''.$gringo.'(){


var checktimo = $("#checkproimtimout'.$ivd.''.$gringo.'").val();
if(checktimo == 1){ clearTimeout(profileimagetimeout'.$ivd.''.$gringo.'); }
var proim = document.getElementById("profileimage'.$ivd.''.$gringo.'");
proim.style.visibility="visible";
var idex = $("#activeindex'.$ivd.''.$gringo.'").val();
var chkxrr = "'.$totalsets.'";
   var pnn = document.getElementById("postnumber'.$ivd.''.$gringo.'");
    var abb = document.getElementById("arrows'.$ivd.''.$gringo.'");
    var empop = document.getElementById("acceptemotionpop'.$ivd.''.$gringo.'");
    var clicknn = document.getElementById("clicktxt'.$ivd.''.$gringo.'");
     var ivar = document.getElementById("image"+idex+"'.$ivd.''.$gringo.'");
      var mmr = document.getElementById("more'.$ivd.''.$gringo.'");
      var datauni = document.getElementById("superbody'.$ivd.''.$pagenum.''.$gringo.'");

    var lay = $("#layout'.$ivd.''.$pagenum.''.$gringo.'").val();

   if(lay == 0){

    var checkfeel = $("#feelstate'.$ivd.''.$gringo.'").val();
$("#emotion1'.$ivd.''.$gringo.'").removeClass("ball");
$("#emotion2'.$ivd.''.$gringo.'").removeClass("ball");
$("#emotion3'.$ivd.''.$gringo.'").removeClass("ball");
$("#emotion4'.$ivd.''.$gringo.'").removeClass("ball");
 if(checkfeel == 1){$("#emotion1'.$ivd.''.$gringo.'").addClass("ballx");}
     else if(checkfeel == 2){$("#emotion2'.$ivd.''.$gringo.'").addClass("ballx");}
     else  if(checkfeel == 3){$("#emotion3'.$ivd.''.$gringo.'").addClass("ballx");}
      else if( checkfeel== 4){$("#emotion4'.$ivd.''.$gringo.'").addClass("ballx");}

  document.getElementById("layout'.$ivd.''.$pagenum.''.$gringo.'").value=1;


 var ttz = $("#checkinfostate'.$ivd.''.$gringo.'").val();
 if(ttz == 0){  profpadlarge'.$ivd.''.$pagenum.''.$gringo.'();
 $("#profileimage'.$ivd.''.$gringo.'").appendTo("#acceptprofileimage'.$ivd.''.$gringo.'");    }

  document.getElementById("checkinfostate'.$ivd.''.$gringo.'").value=1;

    zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);

  th="'.$_SESSION['theme'].'";
  if(th==0){
    $(".hightext'.$ivd.''.$gringo.'").removeClass("hashtag");
     $("#usernamethemewhite'.$ivd.''.$gringo.'").removeClass("usernamethemewhitex'.$ivd.''.$gringo.'");
   $("#usernamethemewhite2'.$ivd.''.$gringo.'").removeClass("usernamethemewhite2x'.$ivd.''.$gringo.'");
    $("#usernamethemewhite'.$ivd.''.$gringo.'").addClass("pageuser");
     $("#usernamethemewhite2'.$ivd.''.$gringo.'").addClass("pageuser");
    }else{
    $(".hightext'.$ivd.''.$gringo.'").removeClass("hashtagdark");
   $("#usernamethemedark2'.$ivd.''.$gringo.'").removeClass("usernamethemedark2x'.$ivd.''.$gringo.'");
     $("#usernamethemedark2'.$ivd.''.$gringo.'").addClass("pageuser");}
      
     

      $(".hightext'.$ivd.''.$gringo.'").addClass("underxx");

  var ppfi = document.getElementById("profileimage'.$ivd.''.$gringo.'");
     ppfi.style.paddingBottom="3px";
$("#dataspacetop'.$ivd.''.$gringo.'").show(); 
$("#dataspacebottom'.$ivd.''.$gringo.'").show();
$("#collecttopdata'.$ivd.''.$gringo.'").show(); 
$("#collectbottomdata'.$ivd.''.$gringo.'").show();
 $("#topdata'.$ivd.''.$gringo.'").appendTo("#collecttopdata'.$ivd.''.$gringo.'");
   $("#bottomdata'.$ivd.''.$gringo.'").appendTo("#collectbottomdata'.$ivd.''.$gringo.'"); 
   var proimimfox = document.getElementById("profileimageinfo'.$ivd.''.$gringo.'");
if(mobileboy == 1){ proimimfox.style.marginLeft="3.1em"; }else{ }


    mmr.style.marginTop="1.6px";  
    
       $("#spacelast3'.$ivd.''.$gringo.'").hide();
     
   $("#posttypes'.$ivd.''.$gringo.'").hide(); 
   $("#previewimage'.$ivd.''.$gringo.'").hide(); 
    $("#zoomer'.$ivd.''.$gringo.'").hide(); 
     $("#playtypeinsx'.$ivd.''.$gringo.'").show();
     

    if(mobileboy == 1){ 
         pnn.style.top="4.8em"; 
          abb.style.top="5em";
           empop.style.top="6.5em";
         clicknn.style.marginTop="6.15em";  
         datauni.style.marginBottom="0px";
             }else{  
      pnn.style.top="6.6em";
      abb.style.top="6.2em"; 
      empop.style.top="8em";
    clicknn.style.marginTop="7.85em";
    ivar.style.borderRadius="6px"; 
    datauni.style.padding="2px";
    datauni.style.marginBottom="-4px";  }
   
     clicknn.style.display="none";

     var pfun = document.getElementById("postfunctions'.$ivd.''.$gringo.'");
      pfun.style.visibility="visible";
    $("#namebutton'.$ivd.''.$gringo.'").show();

     document.getElementById("zoominshortlockup'.$ivd.''.$pagenum.''.$gringo.'").value=1;
  

   }else{ 

    document.getElementById("layout'.$ivd.''.$pagenum.''.$gringo.'").value=0;

      var checkfeel = $("#feelstate'.$ivd.''.$gringo.'").val();
$("#emotion1'.$ivd.''.$gringo.'").removeClass("ballx");
$("#emotion2'.$ivd.''.$gringo.'").removeClass("ballx");
$("#emotion3'.$ivd.''.$gringo.'").removeClass("ballx");
$("#emotion4'.$ivd.''.$gringo.'").removeClass("ballx");
 if(checkfeel == 1){$("#emotion1'.$ivd.''.$gringo.'").addClass("ball");}
     else if(checkfeel == 2){$("#emotion2'.$ivd.''.$gringo.'").addClass("ball");}
     else  if(checkfeel == 3){$("#emotion3'.$ivd.''.$gringo.'").addClass("ball");}
      else if( checkfeel== 4){$("#emotion4'.$ivd.''.$gringo.'").addClass("ball");}


    th="'.$_SESSION['theme'].'";
     $(".hightext'.$ivd.''.$gringo.'").removeClass("underxx");
  if(th==0){ $("#usernamethemewhite'.$ivd.''.$gringo.'").removeClass("pageuser");
     $("#usernamethemewhite2'.$ivd.''.$gringo.'").removeClass("pageuser");
     $("#usernamethemewhite'.$ivd.''.$gringo.'").addClass("usernamethemewhitex'.$ivd.''.$gringo.'");
   $("#usernamethemewhite2'.$ivd.''.$gringo.'").addClass("usernamethemewhite2x'.$ivd.''.$gringo.'");
   $(".hightext'.$ivd.''.$gringo.'").addClass("hashtag");}else{
     $("#usernamethemedark2'.$ivd.''.$gringo.'").removeClass("pageuser");
   $("#usernamethemedark2'.$ivd.''.$gringo.'").addClass("usernamethemedark2x'.$ivd.''.$gringo.'");
    $(".hightext'.$ivd.''.$gringo.'").addClass("hashtagdark");}

      
      


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
    
      $("#spacelast3'.$ivd.''.$gringo.'").show();
   
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
      
         pnn.style.top="-0.5em"; 
          abb.style.top="0.5%";
           empop.style.top="1em";
         clicknn.style.marginTop="0.9em";  
         datauni.style.marginBottom="-1px";
             }else{  
    
      pnn.style.top="0.2em";
      abb.style.top="0.5%"; 
      empop.style.top="1em";
    clicknn.style.marginTop="1.4em";
      ivar.style.borderRadius="6px";
      datauni.style.padding="0px";
     datauni.style.marginBottom="-1px";}

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

   }    

   $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"});  

    }









function zoomclick'.$ivd.''.$pagenum.''.$gringo.'(){   alert("zoom");  }





  </script>
';

?>