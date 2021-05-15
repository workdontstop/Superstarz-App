<?PHP
 require('dataco.php');
require('phpopen.php'); 
include('exit.php'); 


      // $eff=$_POST['mem1'];

include('timego.php'); 

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
var newnfa= $('#namefilteradjust').val();
var finnfa= $('#finishedfilteradjust').val();
var chknfa= $('#checkfilteradjust').val();



if(newnfa == "lomo"){
document.getElementById("filterslidename").innerHTML="Tentacion";$("#lomo200").show(); 
                           if(chknfa == 1){ document.getElementById("lomo200").value=finnfa }  
                            var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  }

                           document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 60';
                           loat = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000);    }


else if(newnfa == "enhance"){
  document.getElementById("filterslidename").innerHTML="Enhance";$("#enhance200").show();
                        if(chknfa == 1){ document.getElementById("enhance200").value=finnfa }  
                        var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  }}



else if(newnfa == "clarity"){document.getElementById("filterslidename").innerHTML="Clarity";$("#clarity200").show();
                        if(chknfa == 1){ document.getElementById("clarity200").value=finnfa }}


else if(newnfa == "sunrise"){
  document.getElementById("filterslidename").innerHTML="Lars";$("#sunrise200").show();
                        if(chknfa == 1){ document.getElementById("sunrise200").value=finnfa } 
                         var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  }   

                        document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 70';
                           larise = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000);}


else if(newnfa == "glowingSun"){
  document.getElementById("filterslidename").innerHTML="Kiki";$("#glowingSun200").show();
          if(chknfa == 1){ document.getElementById("glowingSun200").value=finnfa }
                         var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  } 

                          document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 65';
                           gloki = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000); }


else if(newnfa == "safari"){document.getElementById("filterslidename").innerHTML="Zoidberg";$("#safari200").show();
                        if(chknfa == 1){ document.getElementById("safari200").value=finnfa } 

                           document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 65';
                           zoidri = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000);   }



 else if(newnfa == "hazyDays"){document.getElementById("filterslidename").innerHTML="Hazy";$("#hazyDays200").show();
                        if(chknfa == 1){ document.getElementById("hazyDays200").value=finnfa }   }


else if(newnfa == "crossProcess"){document.getElementById("filterslidename").innerHTML="Hype";$("#crossProcess200").show();if(chknfa == 1){ document.getElementById("crossProcess200").value=finnfa }

 document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 65';
                           ros = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000); }



else if(newnfa == "jarques"){
  document.getElementById("filterslidename").innerHTML="Mint";$("#jarques200").show();
  if(chknfa == 1){ document.getElementById("jarques200").value=finnfa } 
  var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  } }



else if(newnfa == "concentratex"){
  document.getElementById("filterslidename").innerHTML="Nebula";$("#concentratex200").show();
  if(chknfa == 1){ document.getElementById("concentratex200").value=finnfa } 
 var checkvigstate= $("#"+newnfa+"vignettetype").val();
                            if( checkvigstate == 0){ $("#clickvig").show();}
                          else{  $("#clickvigtrans").show();  } 

                           document.querySelector("#numlit").style.visibility="visible";
                        document.getElementById("numlit").innerHTML='<i class="fas fa-long-arrow-alt-down"></i> 60';
                           conneb = setTimeout(function(){
                      document.querySelector("#numlit").style.visibility="hidden";},2000);  }


else if(newnfa == "oldBoot"){document.getElementById("filterslidename").innerHTML="Old boot";$("#oldBoot200").show();if(chknfa == 1){ document.getElementById("oldBoot200").value=finnfa }   }
else if(newnfa == "vintage"){document.getElementById("filterslidename").innerHTML="Vintage";$("#vintage200").show();if(chknfa == 1){ document.getElementById("vintage200").value=finnfa }   }
else if(newnfa == "pinhole"){document.getElementById("filterslidename").innerHTML="Grizzly";$("#pinhole200").show();if(chknfa == 1){ document.getElementById("pinhole200").value=finnfa }   }
else if(newnfa == "MoonShine"){document.getElementById("filterslidename").innerHTML="Moon Shine";$("#MoonShine200").show();if(chknfa == 1){ document.getElementById("MoonShine200").value=finnfa }   }
else if(newnfa == "nostalgia"){document.getElementById("filterslidename").innerHTML="Nostalgia";$("#nostalgia200").show();if(chknfa == 1){ document.getElementById("nostalgia200").value=finnfa }   }


    else{}



                                     });
        
</script>




<div   class="col-xs-12 "  id="activatefilterslide"> </div>




<container>
  <row>
<div class="  col-xs-12"   style="top:-9px;z-index:1;padding: 0px"> 
  <div   class="   col-xs-hidden   col-sm-2"   style=" "></div>


<div class="  col-xs-12   col-sm-8"   style=" padding: 0px"> 
<bottr>
 <div class="zuperxy col-xs-12 "  style="font-size: 20px;text-align:center;margin:auto;margin-top:10px;height:auto;" >

  <span id="filterslidename">  </span> 

  <span class="zuzax juju"  style="font-size:28px;margin-left:1px;position:relative;top:3.5px"> 
<span  id="clickvig"  style="opacity:0.6;display:none">   <i class="fas fa-circle"></i> </span>
 <span  id="clickvigtrans"  style="opacity:0.2;display:none;">   <i class="fas fa-circle"></i> </span>
</span>

   </div> 
</bottr>
</div>
<div class="   col-xs-hidden   col-sm-2"   style=" "></div>



<div class="  col-xs-12"  > </div>
<div  class="  col-xs-1   col-sm-4"  > </div>
<div class="  col-xs-10   col-sm-4 "  style="margin-top:30px "> 
 <div id="numlit"  class="zuperxy" style="text-align:right; width:100%;opacity:0.6; font-weight: bolder; visibility: hidden;">100</div></div>

 <div class="  col-xs-12"  > </div>
<div class="  col-xs-1   col-sm-4"  > </div>
<div class="  col-xs-10   col-sm-4"   style="margin-top:30px"> 

       <input id="lomo200" name="" type="range" min="50"  max="180" value="180"  style="display:none" />

          <input id="enhance200" name="" type="range" min="180"  max="220" value="220"  style="display:none" />

            <input id="clarity200" name="" type="range" min="140"  max="220" value="220"  style="display:none" />

        <input id="sunrise200" name="" type="range" min="115"  max="220" value="220"  style="display:none" />

           <input id="glowingSun200" name="" type="range" min="1"  max="132" value="132"  style="display:none" />

            <input id="safari200" name="" type="range" min="100"  max="200" value="200"  style="display:none" />

          <input id="hazyDays200" name="" type="range" min="80"  max="220" value="220"  style="display:none" />

           <input id="crossProcess200" name="" type="range" min="60"  max="220" value="220"  style="display:none" />

              <input id="jarques200" name="" type="range" min="170"  max="220" value="220"  style="display:none" />


              <input id="concentratex200" name="" type="range" min="100"  max="230" value="230"  style="display:none" />


              <input id="oldBoot200" name="" type="range" min="80"  max="210" value="210"  style="display:none" />

                <input id="vintage200" name="" type="range" min="90"  max="170" value="170"  style="display:none" />

      <input id="pinhole200" name="" type="range" min="50"  max="220" value="220"  style="display:none" />

        <input id="MoonShine200" name="" type="range" min="20"  max="220" value="220"  style="display:none" />

          <input id="nostalgia200" name="" type="range" min="100"  max="220" value="220"  style="display:none" />


     </div></div></row></container>


        <script type="text/javascript">
    
       var  afs= document.getElementById("acceptfilterslide"); 
              var  nfa= document.getElementById("namefilteradjust"); 




           afs.addEventListener('click',function(){ 
              if(superstopper==0){  $("#holdtame").show();}
            allowfilterslider = 0;
              var newnfa = $('#namefilteradjust').val();
                 var ccon = $('#checkcontrol').val();
      var actbb =$("#"+newnfa+"200").val(); document.getElementById("finishedfilteradjust").value=actbb;
       $("#filterContainer").show(); 
    $("#filterContainerout").hide();
if(ccon == 0){  $("#topbuttons").show(); }
  else{ $("#topbuttonsnext").show(); }
     document.getElementById("checkfilteradjust").value=1;
     document.getElementById("sliderfiltereditactive").value="0";
      $("#filteroption").show();
        $("#slideoption").hide();   
         document.getElementById("zoomprecise").value="0";                 });



 

 

document.getElementById("lomo200").addEventListener('input',function(){ 
  if(loat) {clearTimeout(loat);}

var lomx = parseInt($('#lomo200').val());
        var dirif = lomx - 50;
       var ditot = 180 - 50;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
       if(di == 0){ var dicc ="Tentacion";}
        else if(  di == 64 || di == 63 || di == 62 || di == 61 ){ var dicc ="Tentacion";}
         else { var dicc = di; }
        nl.style.visibility="visible";
         document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});





document.getElementById("clarity200").addEventListener('input',function(){ 
var lomx = parseInt($('#clarity200').val());
        var dirif = lomx - 140;
       var ditot = 220 - 140;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
          if(di == 0){ var dicc ="Clarity";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




document.getElementById("enhance200").addEventListener('input',function(){ 
var lomx = parseInt($('#enhance200').val());
        var dirif = lomx - 180;
       var ditot = 220 - 180;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
       if(di == 0){ var dicc ="Enhance";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});





document.getElementById("safari200").addEventListener('input',function(){                     
if(zoidri) {clearTimeout(zoidri);}

var lomx = parseInt($('#safari200').val());
        var dirif = lomx - 100;
       var ditot = 200 - 100;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
        if(di == 0){ var dicc ="Zoidberg";} 
         else if(  di == 69 || di == 68 || di == 67 || di == 66 ){ var dicc ="Zoidberg";}
         else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});





document.getElementById("sunrise200").addEventListener('input',function(){ 
  if(larise) {clearTimeout(larise);}

var lomx = parseInt($('#sunrise200').val());
        var dirif = lomx - 115;
       var ditot = 220 - 115;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
          if(di == 0){ var dicc ="Lars";}
  else if(  di == 74 || di == 73 || di == 72 || di == 71 ){ var dicc ="Lars";}
           else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});





document.getElementById("glowingSun200").addEventListener('input',function(){ 
   if(gloki) {clearTimeout(gloki);}

var lomx = parseInt($('#glowingSun200').val());
        var dirif = lomx - 1;
       var ditot = 132 - 1;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="Kiki";} 
             else if(  di == 69 || di == 68 || di == 67 || di == 66 ){ var dicc ="Kiki";}
             else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});







document.getElementById("hazyDays200").addEventListener('input',function(){ 
var lomx = parseInt($('#hazyDays200').val());
        var dirif = lomx - 80;
       var ditot = 220 - 80;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
          if(di == 0){ var dicc ="Hazy";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});


document.getElementById("crossProcess200").addEventListener('input',function(){ 
   if(ros) {clearTimeout(ros);}

var lomx = parseInt($('#crossProcess200').val());
        var dirif = lomx - 60;
       var ditot = 220 - 60;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="Hype";}
            else if(  di == 69 || di == 68 || di == 67 || di == 66 ){ var dicc ="Hype";}
             else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});


document.getElementById("jarques200").addEventListener('input',function(){ 
var lomx = parseInt($('#jarques200').val());
        var dirif = lomx - 170;
       var ditot = 220 - 170;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="Mint";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});



document.getElementById("concentratex200").addEventListener('input',function(){ 
  if(conneb) {clearTimeout(conneb);}

var lomx = parseInt($('#concentratex200').val());
        var dirif = lomx - 100;
       var ditot = 230 - 100;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
         if(di == 0){ var dicc ="Nebula";}
          else if(  di == 64 || di == 63 || di == 62 || di == 61 ){ var dicc ="Nebula";}
           else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




document.getElementById("oldBoot200").addEventListener('input',function(){ 
var lomx = parseInt($('#oldBoot200').val());
        var dirif = lomx - 80;
       var ditot = 210 - 80;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="OldBoot";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});


document.getElementById("vintage200").addEventListener('input',function(){ 
var lomx = parseInt($('#vintage200').val());
        var dirif = lomx - 90;
       var ditot = 170 - 90;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="Vintage";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});



document.getElementById("pinhole200").addEventListener('input',function(){ 
var lomx = parseInt($('#pinhole200').val());
        var dirif = lomx - 50;
       var ditot = 220 - 50;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
         if(di == 0){ var dicc ="Grizzly";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});

  
document.getElementById("MoonShine200").addEventListener('input',function(){ 
var lomx = parseInt($('#MoonShine200').val());
        var dirif = lomx - 20;
       var ditot = 220 - 20;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
           if(di == 0){ var dicc ="MoonShine";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




document.getElementById("nostalgia200").addEventListener('input',function(){ 
var lomx = parseInt($('#nostalgia200').val());
        var dirif = lomx - 100;
       var ditot = 220 - 100;
       var di =parseInt( dirif / ditot * 100);
         nl = document.querySelector("#numlit");
         if(di == 0){ var dicc ="Nostalgia";} else { var dicc = di; }
        nl.style.visibility="visible";
       document.getElementById("numlit").innerHTML=""+dicc+"";
       nl.style.width=""+di+"%";
        if(di > 70){nl.style.marginLeft="0px"}
      else if(di > 50){nl.style.marginLeft="7px"}
        else if (di < 30){nl.style.marginLeft="15px"} 
           else{nl.style.marginLeft="10px"}});




 
  $('input[type=range]').change(slideapplyFilters);





 function slideapplyFilters() {   if(allowfilterslider == 1){applyFilters();}  }


 
 var  cliv= document.getElementById("clickvig"); 
 cliv.addEventListener('click',function(){ 
  var  setter= $('#namefilteradjust').val();
          document.getElementById(""+setter+"vignettetype").value=1;
            $("#clickvig").hide();
              $("#clickvigtrans").show();
              $("#holdtame").show();
       applyFilters();  
    });


 var  clivt= document.getElementById("clickvigtrans"); 
 clivt.addEventListener('click',function(){ 
  var  setter= $('#namefilteradjust').val();
          document.getElementById(""+setter+"vignettetype").value=0;
            $("#clickvig").show();
              $("#clickvigtrans").hide();
              $("#holdtame").show();
       applyFilters();  
    });




 function applyFilters() {

   canvaslightpop = 0;

var  switchcanc= $('#switchcanvas').val();
if( switchcanc == 1){var ku= "cantoo";var kuk= "canv";var kui= "canv";var knum = "2";}
else {var ku= "canv";var kuk= "cantoo";var kui= "cantoo";var knum = "1";}

var  setter= $('#namefilteradjust').val();

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

 document.getElementById(""+setter+"Brightnessx").value="10000";
  document.getElementById(""+setter+"Contrastx").value="10000";
  document.getElementById(""+setter+"Huex").value="10000";
  document.getElementById(""+setter+"Sharpenx").value="10000";
  document.getElementById(""+setter+"Noisex").value="10000";
  document.getElementById(""+setter+"Vignettex").value="10000";
  document.getElementById(""+setter+"Colorx").value="10000";
  document.getElementById(""+setter+"Colortypex").value="10000";
  document.getElementById(""+setter+"Saturationx").value="10000";
  document.getElementById(""+setter+"Blurx").value="10000";

  
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

 document.getElementById("editrebound").value="filtertrue";




superstopper= 0;

$("#nunu").hide();
$("#"+kuk+"").show(); 
 Caman("#"+ku+"",  function() {

      this.revert();

 if(setter == "lomo"){
var  clearvig= $("#"+setter+"vignettetype").val();
    if(clearvig == "0"){ 
       var lomxd = parseInt($('#lomo200').val());  
        document.getElementById("finishedfilteradjust").value=lomxd;
          this.lomob(lomxd,0); }else{
 document.getElementById(""+setter+"Vignettex").value=1;
 var lomxd = parseInt($('#lomo200').val());  
        document.getElementById("finishedfilteradjust").value=lomxd;
          this.lomob(lomxd,1); }   }


 else if(setter == "clarity"){ 
       var clx = parseInt($('#clarity200').val());
        document.getElementById("finishedfilteradjust").value=clx;
             this.clarityb(clx);}



  else  if(setter == "enhance"){ 
var  clearvig= $("#"+setter+"vignettetype").val();
    if(clearvig == "0"){
       var enx = parseInt($('#enhance200').val());
       document.getElementById("finishedfilteradjust").value=enx;
           this.enhanceb(enx,0);}
           else{ document.getElementById(""+setter+"Vignettex").value=1;
            var enx = parseInt($('#enhance200').val());
       document.getElementById("finishedfilteradjust").value=enx;
           this.enhanceb(enx,1);}}



   else if(setter == "sunrise"){ 
var  clearvig= $("#"+setter+"vignettetype").val();
      if(clearvig == "0"){
       var snrx = parseInt($('#sunrise200').val());
        document.getElementById("finishedfilteradjust").value=snrx;
           this.sunriseb(snrx,0);}else{ 
                 document.getElementById(""+setter+"Vignettex").value=1;
               var snrx = parseInt($('#sunrise200').val());
        document.getElementById("finishedfilteradjust").value=snrx;
           this.sunriseb(snrx,1); }}




  else if(setter == "glowingSun"){ 
var  clearvig= $("#"+setter+"vignettetype").val();
     if(clearvig == "0"){
       var glwx = parseInt($('#glowingSun200').val());
        document.getElementById("finishedfilteradjust").value=glwx;
          this.glowingSunb(glwx,0);}
           else{document.getElementById(""+setter+"Vignettex").value=1;
          var glwx = parseInt($('#glowingSun200').val());
        document.getElementById("finishedfilteradjust").value=glwx;
          this.glowingSunb(glwx,1);}}



  else if(setter == "safari"){ 
       var sfrx = parseInt($('#safari200').val());
        document.getElementById("finishedfilteradjust").value=sfrx;
            this.safarib(sfrx);}


  else if(setter == "hazyDays"){ 
     $("#holdtame").show();
       var hzdx = parseInt($('#hazyDays200').val());
        document.getElementById("finishedfilteradjust").value=hzdx;
         this.hazyDaysb(hzdx);}


  else if(setter == "crossProcess"){ 
       var cpx = parseInt($('#crossProcess200').val());
        document.getElementById("finishedfilteradjust").value=cpx;
         this.crossProcessb(cpx);}



  else if(setter == "jarques"){ 
var  clearvig= $("#"+setter+"vignettetype").val();
     if(clearvig == "0"){
       var jrrx = parseInt($('#jarques200').val());
        document.getElementById("finishedfilteradjust").value=jrrx;
           this.jarquesb(jrrx,0);}
           else{
            document.getElementById(""+setter+"Vignettex").value=1;
           var jrrx = parseInt($('#jarques200').val());
        document.getElementById("finishedfilteradjust").value=jrrx;
           this.jarquesb(jrrx,1);}}


  else if(setter == "concentratex"){ 
var  clearvig= $("#"+setter+"vignettetype").val();
    if(clearvig == "0"){
       var concx = parseInt($('#concentratex200').val());
        document.getElementById("finishedfilteradjust").value=concx;
        this.concentratexb(concx,0);}
        else{document.getElementById(""+setter+"Vignettex").value=1;
       var concx = parseInt($('#concentratex200').val());
        document.getElementById("finishedfilteradjust").value=concx;
        this.concentratexb(concx,1);}}



  else if(setter == "oldBoot"){ 
       var oldbx = parseInt($('#oldBoot200').val());
        document.getElementById("finishedfilteradjust").value=oldbx;
            this.oldBootb(oldbx);}


  else if(setter == "vintage"){ 
       var vinx = parseInt($('#vintage200').val());
        document.getElementById("finishedfilteradjust").value=vinx;
            this.vintageb(vinx);}


 else if(setter == "pinhole"){ 
       var pinx = parseInt($('#pinhole200').val());
        document.getElementById("finishedfilteradjust").value=pinx;
           this.pinholeb(pinx);}


 else if(setter == "MoonShine"){ 
       var msx = parseInt($('#MoonShine200').val());
        document.getElementById("finishedfilteradjust").value=msx;
          this.MoonShineb(msx);}


 else if(setter == "nostalgia"){ 
       var nosx = parseInt($('#nostalgia200').val());
        document.getElementById("finishedfilteradjust").value=nosx;
         this.nostalgiab(nosx);}

         else{}


    this.render(function() { 

      ctt = document.querySelector("#"+ku+"");

    if(setter == "lomo"){ if(130 <= lomxd){ lomoboy(0); }else{  lomoboy(1); }}



else if( setter == "sunrise"){ 
if(190 <= snrx){ sunboy(0); }
 else{ sunboy(1); }   } 


else if(setter == "safari"){ if(166 <= sfrx){ safariboy(0); }else{  safariboy(1); }}

else if(setter == "crossProcess"){   if(165 <= cpx){ activeboy(0); }else{  activeboy(1); }}


else if(setter == "glowingSun"){ if(88<= glwx){ sumboy(0);}else{  sumboy(1); } }

 else if(setter == "concentratex") { if(180<= concx){realboy(0);}else{realboy(1);} }

   else if(setter == "pinhole") { grizboy(0); }

  else if(setter == "vintage") { vinboy(0); }


else{}

     $("#"+ku+"").show();
   $("#"+kuk+"").hide(); 
   $("#nunu").hide();  
   document.getElementById("checkcontrolcan").value=0; 
document.getElementById("switchcanvas").value=""+knum+"";
 nl = document.querySelector("#numlit");
             nl.style.visibility="hidden"; 

           var  checkzoom =  $('#checkzoom').val();
      if(checkzoom == 1 && detect == 0){
       document.getElementById("checkzoom").value=0; zoomsize(); }else{
if( det== 1){ ctt.style.width="100%";ctt.style.height="auto";}else{
   ctt.style.height="60%"; ctt.style.width="auto";} }

    $("#holdtame").hide();
   superstopper= 1;
   });
    
    }); 



}
   
         


    </script>