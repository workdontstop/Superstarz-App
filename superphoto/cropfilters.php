





<script>
var dragItem = document.querySelector("#canvcrop");
var container = document.querySelector("#canvcrop");

 reporty = 0;
reportx = 0;
switchslider=0;
clearimagesizeloading=0;


 canvaslightpop = 1;

 filterbackwardmove=0;

activatesoftlong=0;

 editclicked = 0;


turlong=0;

handpt=0;

forcelockcrop=0;


 holdcropdatawidth = 0;
    holdcropdataheight = 0;

    styledatawidth =0;
    styledataheight=0;


 ////////////////////////////////////////////////

    var active = false;
    var currentX;
    var currentY;
    var initialX;
    var initialY;
    var xOffset = 0;
    var yOffset = 0;

    container.addEventListener("touchstart", dragStart, false);
    container.addEventListener("touchend", dragEnd, false);
    container.addEventListener("touchmove", drag, false);

    container.addEventListener("mousedown", dragStart, false);
    container.addEventListener("mouseup", dragEnd, false);
    container.addEventListener("mousemove", drag, false);

    function dragStart(e) {
      if (e.type === "touchstart") {
        initialX = e.touches[0].clientX - xOffset;
        initialY = e.touches[0].clientY - yOffset;
      }else{
        initialX = e.clientX - xOffset;
        initialY = e.clientY - yOffset;}
        if (e.target === dragItem) {
            active = true;   } }


    function dragEnd(e) {
      initialX = currentX;
      initialY = currentY;
       active = false;}


    function drag(e) {
      if (active) {
          e.preventDefault();
      if (e.type === "touchmove") {
          currentX = e.touches[0].clientX - initialX;
          currentY = e.touches[0].clientY - initialY;
        } else {
          currentX = e.clientX - initialX;
          currentY = e.clientY - initialY;}

        xOffset = currentX;
        yOffset = currentY;

window.requestAnimationFrame(function() {
        setTranslate(currentX, currentY, dragItem);});}}




    function setTranslate(xPos, yPos, el) {

uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);
document.getElementById("imagecroptype").value=1;


   var zoomlockstate= <?php echo $_SESSION['supercropstate']; ?>;
    var zoomlockstateallow= <?php echo $_SESSION['supercropstateallow']; ?>;
  var  croplockwidth = <?php echo $_SESSION['supercropwidth']; ?>;
  var croplockheight= <?php echo $_SESSION['supercropheight']; ?>;
   var  stylewidth = <?php echo $_SESSION['superstylewidth']; ?>;
  var styleheight= <?php echo $_SESSION['superstyleheight']; ?>;
  

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





if(yPos < -maxlimity ){  yPos= -maxlimity;    yOffset= -maxlimity;    }
  else if(yPos > 0 ){  yPos= 0;    yOffset= 0;  }
  else{}
 if(xPos < -maxlimitx ){  xPos= -maxlimitx;   xOffset= -maxlimitx;  }
 else if(xPos > 0 ){  xPos= 0;    xOffset= 0; }
  else{}

    xPosx = xPos * 2;
    yPosx  = yPos * 2;
    if(yPosx < -maxlimity ){    yPosx= -maxlimity;   yOffset= -maxlimity / 2;    }
  else if(yPosx > 0 ){   yPosx= 0;  yOffset= 0;  }
  else{}
 if(xPosx < -maxlimitx ){   xPosx= -maxlimitx;  xOffset= -maxlimitx / 2;  }
 else if(xPosx > 0 ){     xPosx= 0;  xOffset= 0; }
  else{}

 reporty = yPosx;
reportx = xPosx;



  holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;


uncroppedContext.drawImage(image, 0,0, image.width,image.height ,xPosx,yPosx, newWcxj, newHcxj);

if(zoomlockstate == 1  &&  zoomlockstateallow == 1){
if(detect==1 ){$("#canvcrop").addClass('turcropcanvasbar');}
else{$("#canvcrop").addClass('turcropcanvas');}  }
  else{
if(detect==1 && det==0 && turlong==0){$('#canvcrop').removeClass('turcropcanvas');
  $('#canvcrop').addClass('turcropcanvasbar');   turlong=1}}


if(handpt == 0){ if(pointtime) {clearTimeout(pointtime);}   $("#holdpoint").hide(); handpt=1; }

if(adjustcanvasfitmobile == 1 && detect == 1){
uncroppedCanvas.style.width=""+newWcxzit+"px";  uncroppedCanvas.style.height="auto";}
else{
uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcxzit+"px";}


var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);

}






function  showsliderzoomcrop(czw,ajustzoomedcanvaswidth){
clearimagesizeloading = 0;
zoomedvalue = czw;
uncroppedContext= uncroppedCanvas.getContext('2d');
uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);

 var zoomlockstate= <?php echo $_SESSION['supercropstate']; ?>;
    var zoomlockstateallow= <?php echo $_SESSION['supercropstateallow']; ?>;
  var  croplockwidth = <?php echo $_SESSION['supercropwidth']; ?>;
  var croplockheight= <?php echo $_SESSION['supercropheight']; ?>;
    var  stylewidth = <?php echo $_SESSION['superstylewidth']; ?>;
  var styleheight= <?php echo $_SESSION['superstyleheight']; ?>;
  

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


  var yPos = reporty;
  var xPos = reportx;

   if(yPos < -maxlimity ){  yPos= -maxlimity;    yOffset= -maxlimity;    }
  else if(yPos > 0 ){  yPos= 0;    yOffset= 0;  }
  else{}
 if(xPos < -maxlimitx ){  xPos= -maxlimitx;   xOffset= -maxlimitx;  }
 else if(xPos > 0 ){  xPos= 0;    xOffset= 0; }
  else{}

    xPosx = xPos * 2;
    yPosx  = yPos * 2;
    if(yPosx < -maxlimity ){    yPosx= -maxlimity;   yOffset= -maxlimity / 2;    }
  else if(yPosx > 0 ){   yPosx= 0;  yOffset= 0;  }
  else{}
 if(xPosx < -maxlimitx ){   xPosx= -maxlimitx;  xOffset= -maxlimitx / 2;  }
 else if(xPosx > 0 ){     xPosx= 0;  xOffset= 0; }
  else{}

 reporty = yPos;
reportx = xPos;

 initialX = xPos;
      initialY = yPos;


  holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;


uncroppedContext.drawImage(image, 0,0, image.width,image.height ,reportx,reporty, newWcxj, newHcxj);
if(adjustcanvasfitmobile == 1 && detect == 1){
uncroppedCanvas.style.width=""+newWcxzit+"px";  uncroppedCanvas.style.height="auto";}
else{uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcxzit+"px";}



if(zoomlockstate == 1  &&  zoomlockstateallow == 1){
if(detect==1 ){$("#canvcrop").addClass('turcropcanvasbar');}
else{$("#canvcrop").addClass('turcropcanvas');}  }
  else{
if(detect==1 && det==0 && turlong==0){$('#canvcrop').removeClass('turcropcanvas');
  $('#canvcrop').addClass('turcropcanvasbar');   turlong=1}}


var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);    }



                          
     czwaa= document.querySelector("#cropzoomwide");     
     czwaa.addEventListener('change',function(){
     
   var czwq =$('#cropzoomwide').val(); showsliderzoomcrop(czwq,0);   });


                        
     czlaa= document.querySelector("#cropzoomlong");     
     czlaa.addEventListener('change',function(){
     
       var czw =$('#cropzoomlong').val(); showsliderzoomcrop(czw,1);    });



     czlaaxx= document.querySelector("#cropzoomlock");     
     czlaaxx.addEventListener('change',function(){
     
       var czwx =$('#cropzoomlock').val(); showsliderzoomcrop(czwx,1);    });







document.getElementById("rotateleft").addEventListener('click',function(){
 var croptype = parseInt($("#imagecroptype").val()); 

if(croptype == 0){

  if (rotatexx == 360){ rotatexx = 90}else{ rotatexx = rotatexx + 90}

    uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);
if( rotatexx=="90" ||  rotatexx =="270"){
 uncroppedCanvas.width = newHc;
  uncroppedCanvas.height  = newWc;

 holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;

   uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newWcfit+"px";
uncroppedContext.translate(newHc/2,newWc/2);}
else if( rotatexx=="180" ||  rotatexx =="360"){
 uncroppedCanvas.width = newWc;
  uncroppedCanvas.height  = newHc;

   holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;

   uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcfit+"px";
uncroppedContext.translate(newWc/2,newHc/2);}
uncroppedContext.rotate(-rotatexx*Math.PI/180);



 uncroppedContext.drawImage(image,-newWc/2,-newHc/2,newWc,newHc);



var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);

}else{

if (rotatexx == 360){ rotatexx = 90}else{ rotatexx = rotatexx + 90}

    uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);

 var  crotH = newHcx;
 var  crotW = newWcx;

if( zoomedvalue <= 1 ){ 
 iW  = image.width;
      iH = image.height;
      iWx  = 680;
      iHx =  680;
 sizecropcanvas();  
sizecropimage();
 var  crotH = newHcxj;
 var  crotW = newWcxj;}



if( rotatexx=="90" ||  rotatexx =="270"){
 uncroppedCanvas.width = crotH;
  uncroppedCanvas.height  = crotW;

 holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;


if( zoomedvalue <= 1  && detect==1 && det==0 ){ uncroppedCanvas.style.width=""+newHcxzit+"px";  uncroppedCanvas.style.height="auto"; } else{
   uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newWcxzit+"px";}
uncroppedContext.translate(crotH/2,crotW/2);}
else if( rotatexx=="180" ||  rotatexx =="360"){
 uncroppedCanvas.width = crotW;
  uncroppedCanvas.height  = crotH;

 holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;


  if( zoomedvalue <= 1 && detect==1 && det==1 ){ uncroppedCanvas.style.width=""+newWcxzit+"px";  uncroppedCanvas.style.height="auto"; }else{
   uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcxzit+"px";}
uncroppedContext.translate(crotW/2,crotH/2);}

uncroppedContext.rotate(-rotatexx*Math.PI/180);

 uncroppedContext.drawImage(image, -crotW/2,-crotH/2, newWcxj, newHcxj);


var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);

}     });




      
   

document.getElementById("crop").addEventListener('click',function(){

 
if(handpt == 0){   if(pointtime) {clearTimeout(pointtime);}   $("#holdpoint").hide(); handpt=1; }

 if(detect==1 && det==0 && turlong==0){$('#canvcrop').removeClass('turcropcanvas');
  $('#canvcrop').addClass('turcropcanvasbar');   turlong=1}

   clearimagesizeloading = 0;
    if(expand == 0){
uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);


iW  = image.width;
iH = image.height;

iWx  = 680;
      iHx =  680;
sizecropcanvas();  
sizecropimage();
var zv=0; 

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
     
      holdcropdatawidth = uncroppedCanvas.width;
    holdcropdataheight = uncroppedCanvas.height;

uncroppedContext.drawImage(image, 0,0, image.width,image.height ,reportx,reporty, newWcxj, newHcxj);
if(adjustcanvasfitmobile == 1 && detect == 1){
uncroppedCanvas.style.width=""+newWcxzit+"px";  uncroppedCanvas.style.height="auto";}
else{
uncroppedCanvas.style.width="auto";  uncroppedCanvas.style.height=""+newHcxzit+"px";}


var cancanwcrop = document.querySelector("#canvcrop");
var cancanhcrop = document.querySelector("#canvcrop");
  styledatawidth = parseInt(window.getComputedStyle(cancanwcrop,null).width);
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);


     expand = 1;
      document.getElementById("imagecroptype").value=1;
   if(switchslider==0){ $('#cropzoomwide').show();}else{ $('#cropzoomlong').show();}
}else{

  if(detect==1 && det==0 && turlong==1){$('#canvcrop').removeClass('turcropcanvasbar');
  $('#canvcrop').addClass('turcropcanvas'); turlong=0}

  uncroppedContext.clearRect(0,0,uncroppedCanvas.width,uncroppedCanvas.height);
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
    styledataheight = parseInt(window.getComputedStyle(cancanhcrop,null).height);

    expand = 0;
     document.getElementById("imagecroptype").value=0;
      if(switchslider==0){ $('#cropzoomwide').hide();}else{ $('#cropzoomlong').hide();}
       }






  });











  </script>


