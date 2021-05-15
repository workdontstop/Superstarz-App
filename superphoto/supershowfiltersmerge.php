
<script type="text/javascript">


/////////merge image selector and uploader////////

    $(function() {
var imagesPreviewmerge = function(input, placeToInsertImagePreview) {
      if (input.files) {
         filesAmount = input.files.length;
         if(filesAmount > 0){
        var clsupercanvasll= document.querySelector("#minicanv");
var clsuperctxll = clsupercanvasll.getContext('2d');
clsuperctxll.clearRect(0,0,clsupercanvasll.width,clsupercanvasll.height); 
clsuperctxll.clearRect(-clsupercanvasll.width/2,-clsupercanvasll.height/2,clsupercanvasll.width,clsupercanvasll.height); 
       $("#showmerge").show();
        $("#superundo").hide(); 
        document.getElementById('supertopbuttons').style.visibility="hidden";
     $("#holdtame").hide();
       $("#turblaaxmini").show(); 
    var wegt=document.getElementById('wprevhold');
        var hhzw= parseInt(window.getComputedStyle(wegt,null).width);
              var gv= Math.min(hhzw ,hhzw);
                 var  nnv = gv ;
      var kkix = document.getElementById('holdmerge');               
            kkix.style.visibility= "visible"; 
              var reader = new FileReader();
        reader.onload = function(event) {
        $($.parseHTML('<img id="prevmerge1">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}
         reader.readAsDataURL(input.files[0]); } }};
        
    let axm= document.querySelector("#imxmerge");     
    axm.addEventListener('change', function() {
        $("#ppggmerge").html("");
     imagesPreviewmerge(this, 'div.prevmerge');
        var url="showpreviewmergecount.php";
     $.post(url,{request:"fa",c:filesAmount}, function(data){
           $("#leftrightprevmerge").html(data).show();
        } ); });        }); 

  /////////merge image selector and uploader////////







/////apply all instances to the merge image +  super canvas/////////////

  function applyimagemerge (xPos,yPos,mmsize){


    supercanvas= document.querySelector("#supersample");
   var maxlimity =  supercanx.height-newHzmini/mmsize + 400;
var maxlimitx =  supercanx.width-newWzmini/mmsize + 400;
if(yPos < -newHzt ){  yPos= maxlimity;    yOffsetmark= maxlimity;    }
  else if(yPos > supercanx.height-newHzmini/mmsize + 400 ){  yPos= supercanx.height-newHzmini/mmsize + 400;    
    yOffsetmark= supercanx.height-newHzmini/mmsize + 400;  }
  else{}
 if(xPos < -newWzt ){  xPos= maxlimitx;   xOffsetmark= maxlimitx;  }
 else if(xPos > supercanx.width-newWzmini/mmsize + 400 ){  xPos= supercanx.width-newWzmini/mmsize + 400;    
  xOffsetmark= supercanx.width-newWzmini/mmsize + 400; }
  else{}
    

superctx = supercanvas.getContext('2d');
superctx.clearRect(0,0,supercanvas.width,supercanvas.height);
supercanvas.width = supercanx.width;  
     supercanvas.height  = supercanx.height;
   supermerge = document.querySelector("#minicanv");
  superctx.drawImage(supercanx,0,0,supercanx.width,supercanx.height,0,0,supercanx.width,supercanx.height);
superctx.drawImage(supermerge,0,0,supermerge.width,supermerge.height,xPos,yPos,newWzmini/mmsize,newHzmini/mmsize);
 supercanvas.style.height=""+newHzt+"px";     supercanvas.style.width=""+newWzt+"px";    }



/////apply all instances to the merge image +  super canvas/////////////






///////////////////////destroy accept mini canvas to supersample///////////

function destroymergecanvas(){
  if( savestate == 0) { $("#superundo").hide();}else{ $("#superundo").show();}
var clsupercanvasll= document.querySelector("#minicanv");
var clsuperctxll = clsupercanvasll.getContext('2d');
clsuperctxll.clearRect(0,0,clsupercanvasll.width,clsupercanvasll.height); 
 document.getElementById('supertopbuttons').style.visibility="visible";
            $("#turblaaxmini").hide(); 
               $("#verminx").show();
               $("#starttextmark").show();
                  $("#destroyminicanvas").hide();
             $("#acceptminicanvas").hide();
            $("#showmerge").hide();
       var kkix = document.getElementById('holdmerge');               
            kkix.style.visibility= "hidden"; }


function startmergecanvas(){
  votatexx=1;
   currentXmark= 0;
    currentYmark= 0;
     xPos = 0;
     yPos = 0;
     xOffsetmark = 0;
   yOffsetmark = 0;
  document.getElementById('supertopbuttons').style.visibility="visible";
   $("#turblaaxmini").hide(); 
  $("#superwatermarkbuttons").hide();
   $("#superuploadholdstep1").hide();
    $("#superuploadholdstep3").show();
     $("#showmerge").hide();
      $("#mergeoptions").show();
      $("#supermergemarksize").show();
   var kkix = document.getElementById('holdmerge');               
            kkix.style.visibility= "hidden";
   dragstate = 4;
xPos=0;  yPos=0;
if(supercanx.height > supercanx.width ){
var mmsizexx=  supercanx.height/supercanx.width;}else{
  var mmsizexx=  supercanx.width/supercanx.height;}
     mmsize =  mmsizexx;
     document.getElementById("mergesizerotate").value= 1;
document.getElementById("mergesizeslider").value= mmsize;
applyimagemerge(xPos,yPos,mmsize);}

///////////////////////destroy accept mini canvas to supersample///////////





//////////start mergeimage sizeer//////////
 
  $('#mergesizeslider').change(mergesizapply);

 function mergesizapply (){
var miniimagesize = $('#mergesizeslider').val();  
mmsize = miniimagesize;
 xPos = currentXmark;
   yPos = currentYmark;
 applyimagemerge(xPos,yPos,mmsize);    };

//////////start mergeimage sizeer//////////





///////////rotate merge functions///////////////


 
  $('#mergesizerotate').change(mergerotateapply);

 function mergerotateapply (){
var miniimagerotate =  parseInt($('#mergesizerotate').val())
votatexx = miniimagerotate;
 rotateminicanvas(votatexx);    };





     function startrotate(){
      document.getElementById('supertopbuttons').style.visibility="hidden";
            $("#supermergemarksize").hide(); 
               $("#supermergemarkrotate").show();
                 $("#turblaaxmini").show(); 
                  $("#showmerge").show(); 
                   iW  = imagey.width;
                  iH =imagey.height;
            sizethisimagezmini();   
               rotateminicanvas(votatexx); }


function finishedrotate(){
  uncroppedCanvasxx = document.querySelector("#minicanv");
  if(imagey.width > imagey.height ){
  iW  = uncroppedCanvasxx.width;
      iH = uncroppedCanvasxx.width;}else{
          iW  = uncroppedCanvasxx.height;
      iH = uncroppedCanvasxx.height;}
 
sizethisimagezmini();
document.getElementById('supertopbuttons').style.visibility="visible";
            $("#supermergemarksize").show(); 
               $("#supermergemarkrotate").hide();
                $("#turblaaxmini").hide(); 
                  $("#showmerge").hide();    
                xPos = currentXmark;
   yPos = currentYmark;
 applyimagemerge(xPos,yPos,mmsize); }




     function rotateminicanvas(votatexx){
uncroppedCanvasxx = document.querySelector("#minicanv");
 uncroppedContextxx =  uncroppedCanvasxx.getContext('2d');
uncroppedContextxx.clearRect(0,0,uncroppedCanvasxx.width,uncroppedCanvasxx.height);
uncroppedContextxx.clearRect(uncroppedCanvasxx.width/2,uncroppedCanvasxx.height/2,uncroppedCanvasxx.width,uncroppedCanvasxx.height);

if(imagey.width > imagey.height ){
 uncroppedCanvasxx.width = newWzmini + 200;
  uncroppedCanvasxx.height  = newWzmini + 200;
  var ggx= newWztmini + 200;
  if(detect == 1){ uncroppedCanvasxx.style.width=""+newWztmini+"px";  uncroppedCanvasxx.style.height="auto";}
  else{  uncroppedCanvasxx.style.width="auto";  uncroppedCanvasxx.style.height=""+ggx+"px"; }


uncroppedContextxx.translate(newWzmini/1.7,newWzmini/1.7);}

else {
 uncroppedCanvasxx.width = newHzmini + 200;
  uncroppedCanvasxx.height  = newHzmini + 200;
  var gg= newHztmini + 200;
  if(detect == 1){uncroppedCanvasxx.style.width=""+newWztmini+"px";  uncroppedCanvasxx.style.height="auto";}
else{uncroppedCanvasxx.style.width="auto";  uncroppedCanvasxx.style.height=""+gg+"px";}
uncroppedContextxx.translate(newHzmini/1.5,newHzmini/1.5);}

uncroppedContextxx.rotate(-votatexx*Math.PI/180);
uncroppedContextxx.drawImage(imagey,-newWzmini/2,-newHzmini/2 ,newWzmini, newHzmini);}


//////////////////rotate merge functions /////////////////////




function  flipbackgroundmini() {
if(flipcontrol == 1){
   $("#turblaaxmini").removeClass('cloudsupersampleminidark'); 
$("#turblaaxmini").addClass('cloudsupersampleminilight');
flipcontrol = 2}
  else{ $("#turblaaxmini").removeClass('cloudsupersampleminilight'); 
$("#turblaaxmini").addClass('cloudsupersampleminidark');
flipcontrol = 1}}


</script>
