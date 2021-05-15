<?PHP
 require('dataco.php');
require('phpopen.php'); 
include('exit.php'); 


      // $eff=$_POST['mem1'];

 ///////// input[type=range]:focus{ outline: none;} 
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
</style>
          



<script>




  $("#activatefilterslide").ready(function(){


var efa= $('#nameEditadjust').val();
var finefa= $("#finishedEditadjust"+efa+"").val();
var chkefa= $("#checkEditadjust"+efa+"").val();



if(efa == "Brightnessx"){document.getElementById("editslidename").innerHTML="Brightness";$("#Brightnessx200").show(); 
                     if(chkefa == 1){ document.getElementById("Brightnessx200").value=finefa }}

else if(efa == "Contrastx"){document.getElementById("editslidename").innerHTML="Contrast";$("#Contrastx200").show(); 
                     if(chkefa == 1){ document.getElementById("Contrastx200").value=finefa }}

  else if(efa == "Huex"){document.getElementById("editslidename").innerHTML="Hue";$("#Huex200").show(); 
                     if(chkefa == 1){ document.getElementById("Huex200").value=finefa }}

  else if(efa == "Sharpenx"){document.getElementById("editslidename").innerHTML="Sharpen";$("#Sharpenx200").show(); 
                     if(chkefa == 1){ document.getElementById("Sharpenx200").value=finefa }}

  else if(efa == "Noisex"){document.getElementById("editslidename").innerHTML="Noise";$("#Noisex200").show(); 
                     if(chkefa == 1){ document.getElementById("Noisex200").value=finefa }}

  else if(efa == "Vignettex"){document.getElementById("editslidename").innerHTML="Vignette";$("#Vignettex200").show(); 
                     if(chkefa == 1){ document.getElementById("Vignettex200").value=finefa }}



    else if(efa == "Colorx"){  $("#bigColorx200").show(); 
                    var kefa = $('#hdcanvas').val();
               var coty= $("#"+kefa+"Colortypex").val();
                if(coty == 10000){}
             else if(coty == "#00ccff"){$("#Colorx200").show();
            $("#callkin1").removeClass('colorsize');$("#callkin1").addClass('colorsizebig');}
               else if(coty == "#ff5555"){ $("#Colorx200").show();
               $("#callkin2").removeClass('colorsize');$("#callkin2").addClass('colorsizebig');}
                else if(coty == "#ff00ff"){$("#Colorx200").show();
                 $("#callkin3").removeClass('colorsize');$("#callkin3").addClass('colorsizebig');}
                 else if(coty == "#00d455"){ $("#Colorx200").show();
                 $("#callkin4").removeClass('colorsize');$("#callkin4").addClass('colorsizebig');}
                  else if(coty == "#9955ff"){$("#Colorx200").show();
                   $("#callkin5").removeClass('colorsize');$("#callkin5").addClass('colorsizebig');}
                   else if(coty == "#0000ff"){$("#Colorx200").show();
                    $("#callkin6").removeClass('colorsize');$("#callkin6").addClass('colorsizebig');}
                   else{};
                 if(chkefa == 1){document.getElementById("Colorx200").value=finefa }}



     else if(efa == "Saturationx"){document.getElementById("editslidename").innerHTML="Saturation";$("#Saturationx200").show(); 
                     if(chkefa == 1){ document.getElementById("Saturationx200").value=finefa }}

   else if(efa == "Blurx"){document.getElementById("editslidename").innerHTML="Blur";$("#Blurx200").show();
                         var bluhh= $('#Blurxshine').val(); 
                          if(bluhh == "  "){}else{ 
               $("#Blurxkin"+bluhh+"").removeClass('visiblehiddenman');
             $("#Blurxkin"+bluhh+"").addClass('visibleshowman'); }
                     if(chkefa == 1){ document.getElementById("Blurx200").value=finefa }}

                         });



    </script>




<container>
  <row>
<div class="  col-xs-12"   style="top:-9px;z-index:1;padding: 0px"> 
  <div   class="   col-xs-hidden   col-sm-2"   style=" "></div>


<div class="  col-xs-12   col-sm-8"   style=" padding: 0px"> 
<bottr>
 <div class="zuperxy col-xs-12 "  id="editslidename" style="font-size: 20px;text-align:center;margin:auto;margin-top:10px" >   </div> </bottr>
</div>


<div class="   col-xs-hidden   col-sm-2"   style=" "></div>




<div class="  col-xs-12"  > </div>
 <div class="  col-xs-hidden   col-sm-4"  > </div>
<div id="bigColorx200"  class=" col-xs-12   col-sm-4" style="display:none;margin-top:8px;padding:0px" >
   <div id="callkin1"  class="col-xs-2  zuzax  zuperxy juju  colorsize" style="color:#00ccff">  <i class="fas fa-circle"></i></div>
    <div id="callkin2"  class="col-xs-2  zuzax zuperxy juju colorsize" style="color:#ff5555">  <i class="fas fa-circle"></i></div>
    <div id="callkin3"  class="col-xs-2  zuzax zuperxy juju colorsize" style="color:#ff00ff">  <i class="fas fa-circle"></i></div>
   <div id="callkin4"  class="col-xs-2  zuzax zuperxy juju colorsize" style="color:#00d455">  <i class="fas fa-circle"></i></div>
   <div id="callkin5"  class="col-xs-2  zuzax zuperxy juju colorsize" style="color:#9955ff">  <i class="fas fa-circle"></i></div>
  <div id="callkin6"  class="col-xs-2  zuzax zuperxy juju colorsize" style="color:#0000ff">  <i class="fas fa-circle"></i></div>

  </div>
<div class="  col-xs-12"  > </div>



<div class="  col-xs-12"  > </div>
<div  class="  col-xs-1   col-sm-4"  > </div>
<div class="  col-xs-10   col-sm-4 "   style="margin-top:20px "> 
 <div id="ednumlit"  class="zuperxy" style="text-align:right; width:100%;opacity:0.6; font-weight: bolder; visibility: hidden;">
 100</div>
</div>




 <div class="  col-xs-12"  > </div>
<div class="  col-xs-1   col-sm-4"  > </div>
<div class="  col-xs-10   col-sm-4"   style="margin-top:30px"> 

       <input id="Brightnessx200"  type="range" min="-20" max="20"  value="0"  style="display:none" />

        <input id="Contrastx200"  type="range" min="-20" max="20"  value="0"  style="display:none" />

          <input id="Huex200"  type="range" min="0" max="100"   value="0"  style="display:none" />

              <input id="Sharpenx200"  type="range" min="0" max="120"   value="0"  style="display:none" />

               <input id="Noisex200"  type="range" min="0" max="40"   value="0"  style="display:none" />

                 <input id="Vignettex200"  type="range" min="0" max="35"   value="0"  style="display:none" />

                    <input id="Colorx200"  type="range" min="0" max="55"   value="0"  style="display:none" />

            <input id="Saturationx200"  type="range" min="-100" max="70"  value="-15"  style="display:none" />


     </div>




 <div class="  col-xs-12"  > </div>
 <div class="  col-xs-hidden   col-sm-3"  > </div>
<div id="Blurx200"  class=" col-xs-12   col-sm-6" style="display:none;margin-top:-56px;padding:0px" >
<div  id="glurgxx"  class=" col-xs-4 zuzax juju  zuperxy" style="text-align:center;padding: 0px;font-weight:bolder;font-size: 12px"  >Gaussian   <div class="za"> </div>
    <div class="col-xs-12  wutang"> <i class="fas fa-square"></i> </div>
     <div id="Blurxkin1"  class="col-xs-12 coloreddotplacementxx visiblehiddenman">  <i class="fas fa-circle"></i></div></div>   

    <div   id="glurrxx"  class=" col-xs-4 zuzax juju  zuperxy" style="text-align:center;padding: 0px;font-weight:bolder;font-size: 12px">Radial <div class="za"> </div> 
    <div class="col-xs-12  wutang"> <i class="far fa-circle"></i> </div>
     <div id="Blurxkin2"  class="col-xs-12 coloreddotplacementxx visiblehiddenman">  <i class="fas fa-circle"></i></div></div>   

    <div  id="glurlxx"  class=" col-xs-4 zuzax juju  zuperxy" style="text-align:center;padding: 0px;font-weight:bolder;font-size: 12px"  >Tilt <div class="za"> </div>
    <div class="col-xs-12  wutang"> <i class="fas fa-bacon"></i> </div>
     <div id="Blurxkin3"  class="col-xs-12 coloreddotplacementxx visiblehiddenman">  <i class="fas fa-circle"></i></div></div>   
   </div>
<div class="  col-xs-12"  > </div>







   </div></row></container>







<script type="text/javascript">
var  bbafs= document.getElementById("backEditslide"); 
    var  ddafs= document.getElementById("acceptEditslide"); 
var qq = 1;  //////makes applyedit work only once



  
  bbafs.addEventListener('click',function(){ 
    document.getElementById("sliderfiltereditactive").value="0";
document.getElementById("editremove").value=1;
 document.getElementById("editstart").value=1;
var tefa = $('#nameEditadjust').val();
var kefa = $('#hdcanvas').val();
if(tefa == "Blurx"){ document.getElementById("Blurxshine").value="";}
else if(tefa == "Colorx"){ 
document.getElementById(""+kefa+"Colortypex").value="10000";}
  else{}
 document.getElementById("checkEditadjust"+tefa+"").value=0;
     document.getElementById("finishedEditadjust"+tefa+"").value=" ";
     if( qq==1 ){  $("#holdtame").show();  qq++; applyEdit();}
      $("#"+tefa+"editdot").removeClass('visibleshowman');
       $("#"+tefa+"editdot").addClass('visiblehiddenman'); 
$("#filterEdit").show(); 
 $("#filterContainerout").hide();
 var ccona = $('#checkcontrol').val();
if(ccona == 0){  $("#topbuttons").show(); }
  else{ $("#topbuttonsnext").show(); }
  $("#filteroption").show();
 $("#editoption").hide(); });



      ddafs.addEventListener('click',function(){ 
          if(superstopper==0){  $("#holdtame").show();}
        alloweditslider = 0;
        document.getElementById("sliderfiltereditactive").value="0";
var doggx = $('#editddot').val();
        var newnfa = $('#nameEditadjust').val();
        if(doggx == 1){
       $("#"+newnfa+"editdot").removeClass('visiblehiddenman');
       $("#"+newnfa+"editdot").addClass('visibleshowman'); } 
  var actbb =$("#"+newnfa+"200").val();  document.getElementById("finishedEditadjust"+newnfa+"").value=actbb;
document.getElementById("editremove").value=0;
 document.getElementById("editstart").value=1;
  document.getElementById("checkEditadjust"+newnfa+"").value=1;
   $("#filterEdit").show(); 
    $("#filterContainerout").hide();
    var ccona = $('#checkcontrol').val();
if(ccona == 0){  $("#topbuttons").show(); }
  else{ $("#topbuttonsnext").show(); }
     $("#filteroption").show();
    $("#editoption").hide(); });






document.getElementById("Brightnessx200").addEventListener('input',function(){ 
var briix = parseInt($('#Brightnessx200').val());
        var dirif = briix -  -20;
       var ditot = 20 -  -20;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
         if(di == 50){  var dinx ="Mid"}else{  var dinx = di - 50;}
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dinx+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});






document.getElementById("Contrastx200").addEventListener('input',function(){ 
var conntx = parseInt($('#Contrastx200').val());
        var dirif = conntx -  -20;
       var ditot = 20 -  -20;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
         if(di == 50){  var dinx ="Mid"}else{  var dinx = di - 50;}
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dinx+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




 

document.getElementById("Huex200").addEventListener('input',function(){ 
var hjjx = parseInt($('#Huex200').val());
        var dirif = hjjx - 0;
       var ditot = 100 - 0;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
       if(di == 0){ var dicc ="Min";} else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});



document.getElementById("Sharpenx200").addEventListener('input',function(){ 
var shyyy = parseInt($('#Sharpenx200').val());
        var dirif = shyyy - 0;
       var ditot = 120 - 0;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
       if(di == 0){ var dicc ="Min";} else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});



document.getElementById("Noisex200").addEventListener('input',function(){ 
var noo = parseInt($('#Noisex200').val());
        var dirif = noo - 0;
       var ditot = 40 - 0;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
       if(di == 0){ var dicc ="Min";} else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




document.getElementById("Vignettex200").addEventListener('input',function(){ 
var vuuu = parseInt($('#Vignettex200').val());
        var dirif = vuuu - 0;
       var ditot = 35 - 0;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
       if(di == 0){ var dicc ="Min";} else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});


document.getElementById("Colorx200").addEventListener('input',function(){ 
var vivv = parseInt($('#Colorx200').val());
        var dirif = vivv - 0;
       var ditot = 55 - 0;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
       if(di == 0){ var dicc ="Min";} else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});






document.getElementById("Saturationx200").addEventListener('input',function(){ 
var sastx = parseInt($('#Saturationx200').val());
        var dirif = sastx -  -100;
       var ditot = 70 -  -100;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#ednumlit");
         if(di == 50){  var dinx ="Mid"}else{  var dinx = di - 50;}
        nl.style.visibility="visible";
         document.getElementById("ednumlit").innerHTML=""+dinx+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});






var  bbbga = document.getElementById("glurgxx"); 
bbbga.addEventListener('click',function(){ 
    var kefa = $('#hdcanvas').val();
    document.getElementById("Blurxshine").value=1;
$("#Blurxkin2").removeClass('visibleshowman');
  $("#Blurxkin2").addClass('visiblehiddenman');
  $("#Blurxkin3").removeClass('visibleshowman');
  $("#Blurxkin3").addClass('visiblehiddenman');
   $("#Blurxkin1").removeClass('visiblehiddenman');
  $("#Blurxkin1").addClass('visibleshowman');
document.getElementById(""+kefa+"Blurx").value=1;
  $("#holdtame").show();
applyEdit();});



var  bbbr = document.getElementById("glurrxx"); 
bbbr.addEventListener('click',function(){ 
    var kefa = $('#hdcanvas').val();
    document.getElementById("Blurxshine").value=2;
$("#Blurxkin1").removeClass('visibleshowman');
  $("#Blurxkin1").addClass('visiblehiddenman');
  $("#Blurxkin3").removeClass('visibleshowman');
  $("#Blurxkin3").addClass('visiblehiddenman');
   $("#Blurxkin2").removeClass('visiblehiddenman');
  $("#Blurxkin2").addClass('visibleshowman');
document.getElementById(""+kefa+"Blurx").value=2;
  $("#holdtame").show();
applyEdit();});





var  bbbla = document.getElementById("glurlxx"); 
bbbla.addEventListener('click',function(){ 
    var kefa = $('#hdcanvas').val();
    document.getElementById("Blurxshine").value=3;
$("#Blurxkin1").removeClass('visibleshowman');
  $("#Blurxkin1").addClass('visiblehiddenman');
  $("#Blurxkin2").removeClass('visibleshowman');
  $("#Blurxkin2").addClass('visiblehiddenman');
   $("#Blurxkin3").removeClass('visiblehiddenman');
  $("#Blurxkin3").addClass('visibleshowman');
document.getElementById(""+kefa+"Blurx").value=3;
  $("#holdtame").show();
applyEdit();});





var  kallk1 = document.getElementById("callkin1"); 
kallk1.addEventListener('click',function(){ 
   $("#callkin6").removeClass('colorsizebig');
  $("#callkin6").addClass('colorsize');
   $("#callkin5").removeClass('colorsizebig');
  $("#callkin5").addClass('colorsize');
   $("#callkin4").removeClass('colorsizebig');
  $("#callkin4").addClass('colorsize');
   $("#callkin3").removeClass('colorsizebig');
  $("#callkin3").addClass('colorsize');
   $("#callkin2").removeClass('colorsizebig');
  $("#callkin2").addClass('colorsize');
  $("#callkin1").removeClass('colorsize');
  $("#callkin1").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#00ccff";
document.getElementById("Colorx200").value=27.5;
applyEdit();});




var  kallk2 = document.getElementById("callkin2"); 
kallk2.addEventListener('click',function(){ 
   $("#callkin6").removeClass('colorsizebig');
  $("#callkin6").addClass('colorsize');
   $("#callkin5").removeClass('colorsizebig');
  $("#callkin5").addClass('colorsize');
   $("#callkin4").removeClass('colorsizebig');
  $("#callkin4").addClass('colorsize');
   $("#callkin3").removeClass('colorsizebig');
  $("#callkin3").addClass('colorsize');
   $("#callkin1").removeClass('colorsizebig');
  $("#callkin1").addClass('colorsize');
  $("#callkin2").removeClass('colorsize');
  $("#callkin2").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#ff5555";
document.getElementById("Colorx200").value=27.5;
applyEdit();});





var  kallk3 = document.getElementById("callkin3"); 
kallk3.addEventListener('click',function(){ 
   $("#callkin6").removeClass('colorsizebig');
  $("#callkin6").addClass('colorsize');
   $("#callkin5").removeClass('colorsizebig');
  $("#callkin5").addClass('colorsize');
   $("#callkin4").removeClass('colorsizebig');
  $("#callkin4").addClass('colorsize');
   $("#callkin2").removeClass('colorsizebig');
  $("#callkin2").addClass('colorsize');
   $("#callkin1").removeClass('colorsizebig');
  $("#callkin1").addClass('colorsize');
  $("#callkin3").removeClass('colorsize');
  $("#callkin3").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#ff00ff";
document.getElementById("Colorx200").value=27.5;
applyEdit();});





var  kallk4 = document.getElementById("callkin4"); 
kallk4.addEventListener('click',function(){ 
   $("#callkin6").removeClass('colorsizebig');
  $("#callkin6").addClass('colorsize');
   $("#callkin5").removeClass('colorsizebig');
  $("#callkin5").addClass('colorsize');
   $("#callkin3").removeClass('colorsizebig');
  $("#callkin3").addClass('colorsize');
   $("#callkin2").removeClass('colorsizebig');
  $("#callkin2").addClass('colorsize');
   $("#callkin1").removeClass('colorsizebig');
  $("#callkin1").addClass('colorsize');
  $("#callkin4").removeClass('colorsize');
  $("#callkin4").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#00d455";
document.getElementById("Colorx200").value=27.5;
applyEdit();});





var  kallk5 = document.getElementById("callkin5"); 
kallk5.addEventListener('click',function(){ 
   $("#callkin6").removeClass('colorsizebig');
  $("#callkin6").addClass('colorsize');
   $("#callkin4").removeClass('colorsizebig');
  $("#callkin4").addClass('colorsize');
   $("#callkin3").removeClass('colorsizebig');
  $("#callkin3").addClass('colorsize');
   $("#callkin2").removeClass('colorsizebig');
  $("#callkin2").addClass('colorsize');
   $("#callkin1").removeClass('colorsizebig');
  $("#callkin1").addClass('colorsize');
  $("#callkin5").removeClass('colorsize');
  $("#callkin5").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#9955ff";
document.getElementById("Colorx200").value=27.5;
applyEdit();});






var  kallk6 = document.getElementById("callkin6"); 
kallk6.addEventListener('click',function(){ 
   $("#callkin4").removeClass('colorsizebig');
  $("#callkin4").addClass('colorsize');
   $("#callkin5").removeClass('colorsizebig');
  $("#callkin5").addClass('colorsize');
   $("#callkin3").removeClass('colorsizebig');
  $("#callkin3").addClass('colorsize');
   $("#callkin2").removeClass('colorsizebig');
  $("#callkin2").addClass('colorsize');
   $("#callkin1").removeClass('colorsizebig');
  $("#callkin1").addClass('colorsize');
  $("#callkin6").removeClass('colorsize');
  $("#callkin6").addClass('colorsizebig');
    var kefa = $('#hdcanvas').val();
      $('#Colorx200').show();
    document.getElementById(""+kefa+"Colortypex").value="#0000ff";
document.getElementById("Colorx200").value=27.5;
applyEdit();});






   
$('input[type=range]').change(applyEdit);


  function applyEdit() {


   
if(alloweditslider == 1){

    canvaslightpop = 0;
   
    document.getElementById("editrebound").value="true";
      document.getElementById("editddot").value=1;

var  switchcanx = $('#switchcanvas').val();
if( switchcanx == 1){   var zzxx="cantoo";   var azxx="canv"; var vnum=2; }else{   var zzxx ="canv";   var azxx="cantoo"; var vnum=1; }

var efa= $('#nameEditadjust').val();
  var zin = $('#finishedfilteradjust').val();
var teff = $('#hdcanvas').val();
var  decide = $('#editremove').val();
  
  superstopper= 0;

$("#nunu").hide();
$("#"+azxx+"").show();     
Caman("#"+zzxx+"", function () {
   this.revert();

////////////////brightness
if(efa == "Brightnessx" ){
if(decide == 0){var br = parseInt($('#Brightnessx200').val());}else{ var br = 10000;}
document.getElementById(""+teff+"Brightnessx").value=br;
 var con = parseInt($("#"+teff+"Contrastx").val()); 
  var hu = parseInt($("#"+teff+"Huex").val());
  var sh = parseInt($("#"+teff+"Sharpenx").val());
    var nn = parseInt($("#"+teff+"Noisex").val());
     var vii = parseInt($("#"+teff+"Vignettex").val()); 
      var vib = parseInt($("#"+teff+"Colorx").val());
       var sat = parseInt($("#"+teff+"Saturationx").val());
         var blu = parseInt($("#"+teff+"Blurx").val());
          var vibty  = $("#"+teff+"Colortypex").val(); 
  }
///////////////brightness

///////////contrast
else if(efa == "Contrastx" ){
  if(decide == 0){var con = parseInt($('#Contrastx200').val());}else{ var con = 10000;}
 document.getElementById(""+teff+"Contrastx").value=con;
   var br = parseInt($("#"+teff+"Brightnessx").val()); 
     var hu = parseInt($("#"+teff+"Huex").val()); 
     var sh = parseInt($("#"+teff+"Sharpenx").val()); 
       var nn = parseInt($("#"+teff+"Noisex").val());
        var vii = parseInt($("#"+teff+"Vignettex").val()); 
         var vib = parseInt($("#"+teff+"Colorx").val());
          var sat = parseInt($("#"+teff+"Saturationx").val());
            var blu = parseInt($("#"+teff+"Blurx").val());
             var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////contrast

///////////Hue
else if(efa == "Huex" ){
   if(decide == 0){  var hu = parseInt($('#Huex200').val());}else{ var  hu = 10000;}
 document.getElementById(""+teff+"Huex").value=hu;
   var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val()); 
    var sh = parseInt($("#"+teff+"Sharpenx").val()); 
      var nn = parseInt($("#"+teff+"Noisex").val()); 
       var vii = parseInt($("#"+teff+"Vignettex").val()); 
        var vib = parseInt($("#"+teff+"Colorx").val());
         var sat = parseInt($("#"+teff+"Saturationx").val());
           var blu = parseInt($("#"+teff+"Blurx").val());
            var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////Hue

///////////Sharpen
else if(efa == "Sharpenx" ){
   if(decide == 0){  var sh = parseInt($('#Sharpenx200').val());}else{ var  sh = 10000;}
 document.getElementById(""+teff+"Sharpenx").value=sh;
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var nn = parseInt($("#"+teff+"Noisex").val()); 
        var vii = parseInt($("#"+teff+"Vignettex").val());
         var vib = parseInt($("#"+teff+"Colorx").val()); 
          var sat = parseInt($("#"+teff+"Saturationx").val());
            var blu = parseInt($("#"+teff+"Blurx").val());
            var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////Sharpen

///////////Noise
else if(efa == "Noisex" ){
   if(decide == 0){  var nn = parseInt($('#Noisex200').val());}else{ var  nn = 10000;}
 document.getElementById(""+teff+"Noisex").value=nn;
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var sh = parseInt($("#"+teff+"Sharpenx").val()); 
        var vii = parseInt($("#"+teff+"Vignettex").val());
         var vib = parseInt($("#"+teff+"Colorx").val());
          var sat = parseInt($("#"+teff+"Saturationx").val()); 
            var blu = parseInt($("#"+teff+"Blurx").val());
            var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////Noise


///////////Vignette
else if(efa == "Vignettex" ){
   if(decide == 0){  var vii = parseInt($('#Vignettex200').val());}else{ 
    var  clearvigc= $("#"+teff+"vignettetype").val();
    if(clearvigc == 0){var vii = 10000;}else{ var vii = 1;} }
 document.getElementById(""+teff+"Vignettex").value=vii;
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var sh = parseInt($("#"+teff+"Sharpenx").val());
        var nn = parseInt($("#"+teff+"Noisex").val()); 
         var vib = parseInt($("#"+teff+"Colorx").val()); 
          var sat = parseInt($("#"+teff+"Saturationx").val()); 
            var blu = parseInt($("#"+teff+"Blurx").val()); 
              var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////Vignette



///////////Vibrance
else if(efa == "Colorx" ){
   if(decide == 0){  var vib = parseInt($('#Colorx200').val());}else{ var  vib = 10000;}
 document.getElementById(""+teff+"Colorx").value=vib;
 var vibty = $("#"+teff+"Colortypex").val(); 
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var sh = parseInt($("#"+teff+"Sharpenx").val());
        var nn = parseInt($("#"+teff+"Noisex").val()); 
         var vii = parseInt($("#"+teff+"Vignettex").val()); 
          var sat = parseInt($("#"+teff+"Saturationx").val());
            var blu = parseInt($("#"+teff+"Blurx").val()); 
             $("#holdtame").show(); 
}
//////////////Vibrance


///////////Saturation
else if(efa == "Saturationx" ){
   if(decide == 0){  var sat = parseInt($('#Saturationx200').val());}else{ var  sat = 10000;}
 document.getElementById(""+teff+"Saturationx").value=sat;
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var sh = parseInt($("#"+teff+"Sharpenx").val());
        var nn = parseInt($("#"+teff+"Noisex").val()); 
         var vii = parseInt($("#"+teff+"Vignettex").val());  
       var vib = parseInt($("#"+teff+"Colorx").val()); 
        var blu = parseInt($("#"+teff+"Blurx").val());
          var vibty  = $("#"+teff+"Colortypex").val(); 
}
//////////////Saturation


///////////Blur
else if(efa == "Blurx" ){
   if(decide == 0){ var blu = parseInt($("#"+teff+"Blurx").val());}else{ var   blu = 10000;}
  document.getElementById(""+teff+"Blurx").value=blu;
var br = parseInt($("#"+teff+"Brightnessx").val()); 
    var con = parseInt($("#"+teff+"Contrastx").val());  
      var hu = parseInt($("#"+teff+"Huex").val()); 
       var sh = parseInt($("#"+teff+"Sharpenx").val());
        var nn = parseInt($("#"+teff+"Noisex").val()); 
         var vii = parseInt($("#"+teff+"Vignettex").val());  
       var vib = parseInt($("#"+teff+"Colorx").val()); 
         var sat = parseInt($("#"+teff+"Saturationx").val());
        var vibty  = $("#"+teff+"Colortypex").val(); 
         
}
//////////////Blur



else{}

if(activatesoftlong == 0){
if(teff == "lomo" ){if(zin == " "){ zin = "180" }this.lomoc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "clarity" ){if(zin == " "){ zin = "220" }this.clarityc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "enhance" ){if(zin == " "){ zin = "220" }this.enhancec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "safari" ){if(zin == " "){ zin = "200" }this.safaric(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "sunrise" ){if(zin == " "){ zin = "220" }this.sunrisec(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "glowingSun" ){if(zin == " "){ zin = "132" }this.glowingSunc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
else if(teff == "hazyDays" ){  $("#holdtame").show(); 
if(zin == " "){ zin = "220" }this.hazyDaysc(zin,br,con,hu,sh,nn,vii,vib,sat,blu,vibty);}
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
  
  att = document.querySelector("#"+zzxx+"");

     if(teff == "lomo" ){if(130 <= zin){lomoboyx(0); }else{ lomoboyx(1);}}
else if(teff == "safari" ){if(166 <= zin){ safariboy(0); }else{  safariboy(1); }}
else if(teff == "sunrise" ){ if(190 <= zin){ sunboy(0); }else { sunboy(1); } }
else if(teff == "crossProcess"  &&  activatesoftlong == 0 ){if(165 <= zin){ activeboy(0); }else{  activeboy(1); }}
else if(teff == "crossProcess"  &&  activatesoftlong == 1 ) { activeboy(1);} 
else if(teff == "glowingSun"){ if(88<=zin){ sumboy(0);}else{  sumboy(1); } }
else if(teff == "concentratex"  ) { if(180<=zin){realboy(0);}else{realboy(1);} }
  else if(teff == "jarques" &&  activatesoftlong == 1) { jackboy(0); }
         else if(teff == "hazyDays" &&  activatesoftlong == 1) { hazeboy(0); }
         else if(teff == "pinhole") { grizboy(0); }
          else if(teff == "vintage") { vinboy(0); }

      else{}

    
     $("#"+zzxx+"").show();
       $("#"+azxx+"").hide(); 
         $("#nunu").hide();
         document.getElementById("checkcontrolcan").value=0; 
  document.getElementById("switchcanvas").value=""+vnum+"";
   nlxj = document.querySelector("#ednumlit");
             nlxj.style.visibility="hidden"; 

      var  checkzoom =  $('#checkzoom').val();
    if(checkzoom == 1 && detect == 0){
     document.getElementById("checkzoom").value=0; zoomsize(); }else{
if( det== 1){att.style.width="100%";att.style.height="auto";}else{
  att.style.height="60%"; att.style.width="auto";} }

                    $("#holdtame").hide();

   superstopper= 1;
}); })


}

                     }

</script>