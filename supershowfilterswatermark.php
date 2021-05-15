<script type="text/javascript">
  




////////////  This Draws On the Canvas Using All Instances //////////

function applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate){

  supercanvas= document.querySelector("#supersample");
var maxlimity =  supercanvas.height/0.3;
var maxlimitx =  supercanvas.width/0.3;

if(ttrotate == 0){
if(yPos < -supercanvas.height  ){  yPos= maxlimity;    yOffsetmark= maxlimity;    }
  else if(yPos > 0 ){  yPos= 0;    yOffsetmark= 0;  }
  else{}
 if(xPos < -supercanvas.width  ){  xPos= maxlimitx;   xOffsetmark= maxlimitx;  }
 else if(xPos > 100 ){  xPos= 100;    xOffsetmark= 100; }
  else{}}

    else if(ttrotate == 1){
     if(yPos < -supercanvas.height - 450 ){  yPos= maxlimity;    yOffsetmark= maxlimity;    }
  else if(yPos > 450 ){  yPos= 0;    yOffsetmark= 0;  }
  else{}
 if(xPos < -supercanvas.width - 450 ){  xPos= maxlimitx;   xOffsetmark= maxlimitx;  }
 else if(xPos > 100 ){  xPos= 100;    xOffsetmark= 100; }
  else{}  }

    else{
    if(yPos < -supercanvas.height - 450 ){  yPos= maxlimity;    yOffsetmark= maxlimity;    }
  else if(yPos > 0 ){  yPos= 0;    yOffsetmark= 0;  }
  else{}
 if(xPos < -supercanvas.width - 450 ){  xPos= maxlimitx;   xOffsetmark= maxlimitx;  }
 else if(xPos > 500 ){  xPos= 100;    xOffsetmark= 100; }
  else{}
  }

  

superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanx.width;
     supercanvas.height  = supercanx.height;
        superctx.drawImage( supercanx, 0,0,  supercanx.width, supercanx.height ,0,0, supercanx.width, supercanx.height); 
     supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px"; 


var cw,ch;
  cw=supercanvas.width;
  ch=supercanvas.height;

if(detect == 1){
  
 if(typeofwatermarkscreen == 1){ 
var fovv= 28;
var textpush= -1;
var textWidthcut= 43;
}
else if(typeofwatermarkscreen == 3){ 
var fovv= 18;
var textpush= 4;
var textWidthcut= 48;
}
else if(typeofwatermarkscreen == 2){ 
var fovv= 25;
var textpush= 1;
var textWidthcut= 45;
}else{
var fovv= 27;
var textpush= 4;
var textWidthcut= 45;
}}
else{ 

if(detpc == 1){
var fovv= 28;
var textpush= -8;
var textWidthcut= 50;}
else{
var fovv= 35;
var textpush= -1;
var textWidthcut= 47
}   }


if(ttrotate == 1 || ttrotate == 2 ){  var textrotate=  parseInt($('#textrotateslider').val());   }
else{ }



var text = $('#addtextwatermarktextarea').val(); 

if(text == ""){ text = "Superstarz";  }
 

 var fontlayer = cw/12 +textsizer;
 var fontsiz = cw/12  +textsizer;
if(textsizer < -30) { var line = 24;  var dine = 27;  }
  else{ var line = 17;  var dine = 20;}

if(detect == 1) {var set1=dine ; var set2=line;}
    else{ var set1= 210; var set2=200; }


if(textmarktheme == 0){  var textlayer="#ffffff";   var textcolor="rgba(000,000,005,0.5)";   var alp=0.9; }
else if(textmarktheme == 1){ var textlayer="#000000";   var textcolor="rgba(255,255,255,0.5)";   var alp=0.8; }
else if(textmarktheme == 2){ var textlayer="";   var textcolor="";   var alp=" ";  } 


if(textmarktheme == 0  || textmarktheme == 1  ){
  superctx.font = ""+fontlayer+"px sans-serif" ;
  var textWidth= superctx.measureText(text).width;
 superctx.globalAlpha=0.5;
   superctx.fillStyle = ""+textlayer+"";
  var  font =  superctx.font;
 superctx.fillRect(cw-textWidth-60+xPos,ch-parseInt(font, 10)+popup+yPos,textWidth+80+layerx,parseInt(font, 10)+fovv+layery);
  superctx.globalAlpha=1;
   superctx.fillStyle = ""+textcolor+"";
  superctx.font = "italic bold "+fontsiz+"px sans-serif" ;
   superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+textpush+texty);
}
else if( textmarktheme == 2){

  

  if(textmarkthemefont == 0){ var markitalics= "italic";  var markfont= "sans-serif"; var zine=dine;}
   else if(textmarkthemefont == 1){  var markitalics= "italic";  var markfont= "aleobold"; var zine=dine;}
    else if(textmarkthemefont == 2){   var markitalics= " ";  var markfont= "kingthings_exeterregular"; var zine=set1;}
    else if(textmarkthemefont == 3){   var markitalics= " ";  var markfont= "kaushan_scriptregular";var zine=set1;}
     else if(textmarkthemefont == 4){ var markitalics= " ";  var markfont= " black_jackregular";var zine=set1;}
     else{ var markitalics= "italic";  var markfont= "sans-serif";  var zine=dine;}


     if(textmarkshadowstate == 1){
var shad ="#000000";}else if (textmarkshadowstate == 2){var shad ="#ffffff";}
else{}


if(textmarkthemecolor == 0){  

  if(textmarkweaktype == 0){     
superctx.font = ""+fontlayer+"px "+markfont+"" ;
  var textWidth= superctx.measureText(text).width;
 superctx.font = ""+markitalics+" bold "+fontsiz+"px  "+markfont+"" ;

if(ttrotate == 0){  }
  else{superctx.translate(xPos,yPos);
 superctx.rotate(Math.PI/textrotate);}

     superctx.fillStyle ='rgba(000,000,005,0.5)';
    superctx.strokeStyle ='rgba(255,255,255,0.9)';
    superctx.shadowColor ='rgba(255,255,255,0.9)';
    superctx.shadowBlur =""+textshine+"";
  superctx.lineWidth =cw/zine/zine;
  superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty);
superctx.strokeText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty);}

else  if(textmarkweaktype == 1){

 superctx.font = ""+fontlayer+"px "+markfont+"" ;
  var textWidth= superctx.measureText(text).width;
 superctx.font = ""+markitalics+" bold "+fontsiz+"px "+markfont+"" ;

 if(ttrotate == 0){  }
  else{superctx.translate(xPos,yPos);
 superctx.rotate(Math.PI/textrotate);}

     superctx.fillStyle ="rgba(255,255,255,0.8)";
      superctx.shadowColor ="rgba(255,255,255,0.8)";
    superctx.shadowBlur =""+textshine+"";
  superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty); }

  else  if(textmarkweaktype == 2){
  
 superctx.font = ""+fontlayer+"px "+markfont+"" ;
  var textWidth= superctx.measureText(text).width;
 superctx.font = ""+markitalics+" bold "+fontsiz+"px "+markfont+"" ;

 if(ttrotate == 0){  }
  else{superctx.translate(xPos,yPos);
 superctx.rotate(Math.PI/textrotate);}

     superctx.fillStyle ="rgba(000,000,005,0.7)";
      superctx.shadowColor ="rgba(000,000,005,0.7)";
    superctx.shadowBlur =""+textshine+"";
  superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty); }

}
else{

if(textmarkshadowstate == 0){

  superctx.font = ""+fontlayer+"px "+markfont+"" ;
  var textWidth= superctx.measureText(text).width;
  superctx.font = ""+markitalics+" bold "+fontsiz+"px "+markfont+"" ;

  if(ttrotate == 0){  }
  else{superctx.translate(xPos,yPos);
 superctx.rotate(Math.PI/textrotate);}

 superctx.fillStyle =""+textmarkcolor+"";
  superctx.shadowColor =""+textmarkcolor+"";
    superctx.shadowBlur =""+textshine+"";
  superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty);
}
  else{
     
      
superctx.font = ""+fontlayer+"px "+markfont+"" ;
  var textWidth= superctx.measureText(text).width;
  superctx.font = ""+markitalics+" bold "+fontsiz+"px "+markfont+"" ;

  if(ttrotate == 0){  }
  else{superctx.translate(xPos,yPos);
 superctx.rotate(Math.PI/textrotate);}

 superctx.fillStyle =""+textmarkcolor+"";
 superctx.strokeStyle =""+shad+"";
  superctx.shadowColor =""+textmarkcolor+"";
    superctx.shadowBlur =""+textshine+"";

  if(textmarkthemefont == 0 || textmarkthemefont == 1){  superctx.lineWidth =cw/line/line; }
    else { superctx.lineWidth =cw/set2/set2; }
   
  superctx.fillText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty);
superctx.strokeText(text,cw-textWidth-textWidthcut+xPos+textx,ch-10+popup+yPos+texty);}

    }

}}

////////////  This Draws On the Canvas Using All Instances //////////









///////////////  start watermark///////////////////

document.getElementById("starttextmark").addEventListener('click',function(){
  var kol = document.getElementById('addtextwatermarktextarea');
    kol.value="Superstarz";
   $("#superwatermarkbuttons").hide();
   $("#superwatermarkbuttonsxtra").show();
   dragstate = 1; 
   var  chb=supercanvas.height;
   currentXmark=0;
currentYmark= -chb/1.5;
xOffsetmark = 0;
   yOffsetmark = -chb/1.5;
   xPos= 0;
   yPos= 0;
 var popup = -chb/1.5;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);
 $("#superuploadholdstep1").hide(); 
 $("#superuploadholdstep2").show();    });

///////////////  start watermark///////////////////





/////////// switch between strong / first text layers//////////////

document.getElementById("switchtextmarktheme").addEventListener('click',function(){
if(textmarktheme == 0 ||  textmarktheme == 1 ){ textmarktheme++; } else{textmarktheme = 0;  $("#marktextcolor").hide(); 
              $("#marktextadjust").show();}
if(textmarktheme == 2 ){ $("#marktextcolor").show();  $("#marktextadjust").hide(); }else{ttrotate=0;}
 var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);  });

/////////// switch between strong / first text layers//////////////







//////////  adjust layer or text background size /////////////////

document.getElementById("marktextadjust").addEventListener('click',function(){

if( realtextadjust == 0){
   $("#switchtextmarktheme").hide();
   $("#marktextcolor").hide(); 
     $("#marktextedit").hide();
      $("#marktextsize").hide();
    $("#marktextdrag").show();
     $("#marktextadjuston").hide();
      $("#marktextadjustoff").show();
      document.getElementById('supertopbuttons').style.visibility="hidden";
     realtextadjust=1;
    dragstate = 2; 
   xpausedrag = currentXmark;
   ypausedrag = currentYmark;

  currentXmark = 0;
   currentYmark = 0;
    xOffsetmark = 0;
  yOffsetmark = 0;
 initialXmark = 0;
     initialYmark = 0;}

     else{
      $("#switchtextmarktheme").show();
   if(textmarktheme == 2 ){ $("#marktextcolor").show(); }
     $("#marktextedit").show();
     $("#marktextsize").show();
    $("#marktextdrag").hide();
     $("#marktextadjuston").show();
      $("#marktextadjustoff").hide();
      document.getElementById('supertopbuttons').style.visibility="visible";
     realtextadjust=0; 
      dragstate = 1; 
       currentXmark = xpausedrag;
   currentYmark = ypausedrag;
    xOffsetmark = xpausedrag;
  yOffsetmark = ypausedrag;
  $("#markholder").removeClass('bordertranhovbarstick');
      $("#markholder").addClass('bordertranhovbar');
       document.getElementById('mtdcolor').style.color='<?php echo $_SESSION['cl']; ?>';
    } });

//////////  adjust layer or text background size /////////////////







//////////  adjust actual text position /////////////////

document.getElementById("marktextdrag").addEventListener('click',function(){
  if( dragstate == 2){
   dragstate = 3; 
  currentXmark = 0;
   currentYmark = 0;
    xOffsetmark = 0;
  yOffsetmark = 0;
 initialXmark = 0;
     initialYmark = 0;
      $("#markholder").removeClass('bordertranhovbar');
  $("#markholder").addClass('bordertranhovbarstick');
   document.getElementById('mtdcolor').style.color='#ffffff';  }
else{ 
  dragstate = 2; 
  currentXmark = 0;
   currentYmark = 0;
    xOffsetmark = 0;
  yOffsetmark = 0;
 initialXmark = 0;
     initialYmark = 0;
$("#markholder").removeClass('bordertranhovbarstick');
      $("#markholder").addClass('bordertranhovbar'); 
     document.getElementById('mtdcolor').style.color='<?php echo $_SESSION['cl']; ?>';   }  });

//////////  adjust actual text position /////////////////




/////////////  adjust text size //////////

document.getElementById("marktextsize").addEventListener('click',function(){
$("#superwatermarkbuttonsxtra").hide();$("#superwatermarkbuttonsxtratext").show();
document.getElementById('supertopbuttons').style.visibility="hidden";   });


document.getElementById("accepttextsize").addEventListener('click',function(){
$("#superwatermarkbuttonsxtra").show();$("#superwatermarkbuttonsxtratext").hide();
document.getElementById('supertopbuttons').style.visibility="visible";  });
 
  $('#textsizerslider').change(textsizapply);


 function textsizapply (){
var txtz = parseInt($('#textsizerslider').val());  
txtz= txtz - 75;
textsizer= txtz;
var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);   };

/////////////  adjust text size //////////







 function startcolorpick(){
$("#superwatermarkbuttonsxtra").hide();
$("#supercolormarktextselector").show();  
document.getElementById('supertopbuttons').style.visibility="hidden";

if(activatecolorpicker == 0){
 $("#supercolormarktextselector").ready(function(){
   setTimeout(function(){
 $(".pick-a-color").pickAColor({
      showHexInput:false,
    saveColorsPerElement:false,
    inlineDropdown:true   }); 
document.getElementById('pikincolortextmark').style.visibility="visible";
activatecolorpicker++;
},1000); }); }  };




 function endcolorpick(){
document.getElementById('supertopbuttons').style.visibility="visible";
$("#rotatetextsliderstypes").hide();
    $("#textrotatesliderright").hide();
    $("#textrotatesliderleft").hide();
  $("#startrotatetext").show();
$("#superwatermarkbuttonsxtra").show();
$("#supercolormarktextselector").hide();
 $("#helptextrotateright").hide();
     $("#helptextrotateleft").hide();
      $("#helptextrotate").hide(); };



 function applythiscolortext(){
  textmarkthemecolor = 1; 
   textmarkweaktype=2;
var  nettextcolor=  $('#pikincolortextmark').val(); 
   textmarkcolor="#"+nettextcolor+""; 
   var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate); };





/////////// switch between weak / second text types//////////////

 function applyweaktypetext(){
  textmarkthemecolor = 0; 
  if(textmarkweaktype  <= 1  ){ textmarkweaktype++; }
      else{ textmarkweaktype = 0 }
  var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate); };

/////////// switch between weak / second text types//////////////




 function applyfontthiscolortext(){

  if(textmarkthemecolor == 0){ 
  
  /////switch between font types based on weak  text types ////////

  if(textmarkweaktype == 0){
if(textmarkthemefont <= 3  ){ textmarkthemefont++; }
      else{ textmarkthemefont = 0 }}

  else if(textmarkweaktype == 1  ||  textmarkweaktype == 2){  
if(textmarkthemefont <= 3  ){ textmarkthemefont++; }
      else{ textmarkthemefont = 0 }    }

 }else{
  var  nettextcolor= $('#pikincolortextmark').val(); 
   textmarkcolor="#"+nettextcolor+""; 
if(textmarkthemefont <= 3  ){ textmarkthemefont++; }
      else{ textmarkthemefont = 0 }}

  /////switch between font types based on weak  text types ////////


/////show font result/////

  var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);

/////show font result/////


};




 function starttextarea(){
  var chektext = $("#addtextwatermarktextarea").val();
document.getElementById('supertopbuttons').style.visibility="hidden";
$("#superwatermarkbuttonsxtra").hide();
$("#supertextareamarktextselector").show();
if( chektext == "Superstarz"){ var kol = document.getElementById('addtextwatermarktextarea'); kol.value="";} }




function addmarktocanvas(){
   var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);}   
 
 


 function clearstarttextarea(){
var kol = document.getElementById('addtextwatermarktextarea');
    kol.value="";}



     function undostarttextarea(){
var kol = document.getElementById('addtextwatermarktextarea');
var oldtexttt = $("#undowatermarktext").val();
    kol.value=""+oldtexttt+"";
  document.getElementById('supertopbuttons').style.visibility="visible";
$("#superwatermarkbuttonsxtra").show();
$("#supertextareamarktextselector").hide();
var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);}




 function confirmstarttextarea(){
var pol = document.getElementById('undowatermarktext');
var nnewtexttt = $("#addtextwatermarktextarea").val();
    pol.value=""+nnewtexttt+"";
  document.getElementById('supertopbuttons').style.visibility="visible";
$("#superwatermarkbuttonsxtra").show();
$("#supertextareamarktextselector").hide();}


////////////////////text shadow text shine///////////////

 function starttextshadow(){
$("#superwatermarkbuttonsxtrashadow").show(); 
$("#supercolormarktextselector").hide();   }



 function endtextshadow(){
$("#superwatermarkbuttonsxtrashadow").hide();  
$("#supercolormarktextselector").show();  }


  $('#ttextshadowslider').change(textshineapplyzz);

  
 function textshineapplyzz (){

  var shad = parseInt($('#ttextshadowslider').val());  
  textshine= shad;
var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);   };



////////////////////text shadow text shine///////////////



////////////////text strike black white///////////

 function addshadow(){
  textmarkshadowstate++; 
 if(textmarkshadowstate > 2){  textmarkshadowstate = 0;}

   textmarkthemecolor = 1; 
   textmarkweaktype=2;
var  nettextcolor=  $('#pikincolortextmark').val(); 
   textmarkcolor="#"+nettextcolor+""; 

var popup = 0;
  xPos = currentXmark;
   yPos = currentYmark;
applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);}


////////////////text strike black white///////////



//////////////////////////////// start text rotate  all functions involved/////////////////


  function starttextrotateoptions(){
     $("#startrotatetext").hide();
    $("#rotatetextsliderstypes").show();
    $("#textrotateslider").show();
     $("#supercolormarktextselector").hide();}




     function finishedtextrotate (){ 
      $("#supercolormarktextselector").show();
  $("#rotatetextsliderstypes").hide();
    $("#textrotateslider").hide();
    $("#startrotatetext").show(); 
    $("#helptextrotateright").hide();
     $("#helptextrotateleft").hide();
      $("#helptextrotate").hide(); }



  $('#textrotateslider').change(textrotateapplyxx);




 function textrotateapplyxx (){
  var dig =  parseInt($('#textrotateslider').val())
supercanvas= document.querySelector("#supersample");
var  chb=supercanvas.height;

if(dig <= 30 && dig >=7){
   currentXmark=100;
currentYmark= 100;
xOffsetmark = chb/20 + dig;
   yOffsetmark = -chb/20 + dig;
   xPos= 0;
   yPos= 0;
 var popup = -chb/1.9;
   ttrotate = 2;
 $("#helptextrotate").show(); $("#helptextrotateleft").show();  $("#helptextrotateright").hide();}

  else if( dig <= 6 && dig >=-6){
      currentXmark=0;
currentYmark= -chb/1.5;
xOffsetmark = 0;
   yOffsetmark = -chb/1.5;
   xPos= 0;
   yPos= 0;
 var popup = -chb/1.5;
   ttrotate = 0;
    $("#helptextrotate").hide();
    $("#helptextrotateleft").hide();  $("#helptextrotateright").hide();
    }


else { currentXmark=100;
currentYmark= 100;
xOffsetmark = -chb/20 + dig;
   yOffsetmark = chb/20 + dig;
   xPos= 0;
   yPos= 0;
 var popup = -chb/1.9;
   ttrotate = 1;
$("#helptextrotate").show(); $("#helptextrotateright").show(); $("#helptextrotateleft").hide();}






applytextmark(xPos,yPos,popup,layerx,layery,textx,texty,textsizer,ttrotate);   };






//////////////////////////////// start text rotate  all functions involved/////////////////

</script>