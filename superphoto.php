
 
<?php  
    

require('phpopen.php');


 require('dataco.php');




 include('exit.php');?>


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title> Superphoto   :   <?php echo $_SESSION['user']; ?>  </title>
      
<link rel="icon" href="images/sp2.png" type="image/png" />


 </head>



   





 <link href="tools/css/bootstrap.min.css" rel="stylesheet">
   <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">   
   <link href="css/sn.css" rel="stylesheet">
    <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
     <link href="tools/css/filter.css" rel="stylesheet">
           <link rel="stylesheet" href="tools/css/pick-a-color-1.2.3.min.css">



   <link rel="stylesheet" href="tools/font/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font2/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font3/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font4/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font5/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font6/stylesheet.css" type="text/css" charset="utf-8" />

    

  <script  src="tools/js/camanb.full.js"></script>
<script src="tools/js/bootstrap.min.js"></script>
<script src="tools/js/jquery-3.3.1.min.js"></script>
  <script src="tools/js/pick-a-color-1.2.3.min.js"></script>
   <script src="tools/js/tinycolor-0.9.15.min.js"></script>

   




 


    <script>
 $("#furtext").ready(function(){
     $("#textslot").hide();  
     $("#continueoh").hide(); 
     $("#orderoh").hide();
     $("#canxxt").hide(); 
     $("#recanxxt").hide(); 
     $("#swint").hide(); 
     $("#cover").hide(); 
    
  
}); 
</script>
 


<?php  
    
 ////include('gum2.php');
     
     include('closedesign.php');
     

 include('switchtheme.php');

 
     
    
    //$numi=$_POST['num'];



 include('forceinfont.php');

  
if($_SESSION['superthemetypevalue'] == 0){

  echo'<style>
.supertheme{background-color:#aa0044;
background:-webkit-linear-gradient(to right bottom,#c83771,#550022);
  background:-moz-linear-gradient(to right bottom,#c83771,#550022);
  background:linear-gradient( to right bottom,#c83771,#550022);
}</style>';}
else if($_SESSION['superthemetypevalue'] == 1){echo'<style>.supertheme{background-color:#162d50;
background:-webkit-linear-gradient(to right bottom,#162d50,#214478);
  background:-moz-linear-gradient(to right bottom,#162d50,#214478);
  background:linear-gradient( to right bottom,#162d50,#214478);
}
 </style>';}
else if($_SESSION['superthemetypevalue'] == 2){echo'<style>.supertheme{background-color:#888888; 
background:-webkit-linear-gradient(to right bottom,#bbbbbb,#555555);
  background:-moz-linear-gradient(to right bottom,#bbbbbb,#555555);
  background:linear-gradient( to right bottom,#bbbbbb,#555555);
}
 </style>';}
else if($_SESSION['superthemetypevalue'] == 3){echo'<style>
.supertheme{background-color:#cccccc;
  background:-webkit-linear-gradient(to right bottom,#888888,#888888,#555555,#888888,#888888,#888888);
  background:-moz-linear-gradient(to right bottom,#888888 ,#888888,#555555,#888888,#888888,#888888);
  background:linear-gradient( to right bottom,#888888,#888888,#555555,#888888,#888888,#888888);
}
 </style>';}
 else if($_SESSION['superthemetypevalue'] == 4){echo'<style>
.supertheme{background-color:#441650; 
 background:-webkit-linear-gradient(to right bottom,#672178,#441650,#672178,#220b28);
  background:-moz-linear-gradient(to right bottom,#672178,#441650,#672178,#220b28);
  background:linear-gradient( to right bottom,#672178,#441650,#672178,#220b28);
}
 </style>';}
 else if($_SESSION['superthemetypevalue'] == 5){echo'<style>
.supertheme{background-color:#cccccc;
  background:-webkit-linear-gradient(to right bottom,#782121,#501616,#782121,#280b0b);
  background:-moz-linear-gradient(to right bottom,#782121,#501616,#782121,#280b0b);
  background:linear-gradient( to right bottom,#782121,#501616,#782121,#280b0b);
}
 </style>';}
  else if($_SESSION['superthemetypevalue'] == 6){echo'
    <style>
.supertheme{background-color:#cccccc;
  background:-webkit-linear-gradient(to right bottom,#80e5ff,#0088aa);
  background:-moz-linear-gradient(to right bottom,#80e5ff,#0088aa);
  background:linear-gradient( to right bottom,#80e5ff,#0088aa);}
 </style>
';}
 else if($_SESSION['superthemetypevalue'] == 7){echo'
     <style>
.supertheme{background-color:#bbbbbb;
  background:-webkit-Radial-gradient(#bbbbbb,#777777);
  background:-moz-Radial-gradient(#bbbbbb,#777777);
  background:Radial-gradient( #bbbbbb,#777777);}
  </style>
';}
 else {echo'    <style>
     .supertheme{background-color:#fff600;
  background:-webkit-linear-gradient(to right bottom,#fff600,#aa8800);
  background:-moz-linear-gradient(to right bottom,#fff600,#aa8800);
  background:linear-gradient( to right bottom,#fff600,#aa8800);} 
     </style>
';}







if($_SESSION['superthemetypevalue'] == 1){ 
echo '<style>.turiconsuperphoto{height: auto;  background-color:rgba(255,255,255,0.2)}</style>';
 }else{ echo '<style>.turiconsuperphoto{}</style>';  }

  
 ?>
       
    

  





      

<style>


.textsupergray{background-color:#cccccc;
  background:-webkit-linear-gradient(to right bottom,#888888,#888888,#555555,#888888,#888888,#888888);
  background:-moz-linear-gradient(to right bottom,#888888 ,#888888,#555555,#888888,#888888,#888888);
  background:linear-gradient( to right bottom,#888888,#888888,#555555,#888888,#888888,#888888);}

  .textsupergraylight{background-color:#888888; 
background:-webkit-linear-gradient(to right bottom,#bbbbbb,#555555);
  background:-moz-linear-gradient(to right bottom,#bbbbbb,#555555);
  background:linear-gradient( to right bottom,#bbbbbb,#555555);}


.aaxx{cursor:pointer}


 

 </style>

     
<!–- this  for  showfilters  ––>


<div id="showthumbnails"   style=" "> </div>
<div id="showthumbnails2"   style=" "></div>
<div id="fullwidth"  class="col-xs-12 col-sm-10"   style="position: fixed;top:9em">  </div>
<div id="wi"   class="col-xs-3"  style="position: fixed;top:9em;"></div>
<div id="findthumbdiffcanv"   style="position: fixed;top:9em ; height:60%;"></div>
<div id="findthumbdiff"   style="position: fixed;top:9em ; height:100%;"></div>
<div id="watermarktextsizer"   style="position: fixed;top:9em ; height:85%;"></div>
<div id="getcanheight"   style="position: fixed;top:9em ; height:40%; "    ></div>
<div id="getcanwidth"   style="position: fixed;top:9em ; width:40%  "    ></div>
<div id="getcanheightphone"   style="position: fixed;top:9em ; height:50%; "    ></div>
<div id="getcanwidthphone"   style="position: fixed;top:9em ; width:50%  "    ></div>



<!--

<div id="getcanheightfinal"   style="position: fixed;top:9em ; height:100%;"></div>
<div id="getcanwidthfinal"   style="position: fixed;top:9em ; width:100%;"></div>

<div id="getcanheightfinished"   style="position: fixed;top:9em ; height:250%;"></div>
<div id="getcanwidthfinished"  class=" "   style="position: fixed;top:9em ;  width:250%"></div>

<div id="getcanheightfinishedwide"   style="position: fixed;top:9em ; height:150%;"></div>


<div id="getcanwidthfinishedpc"  class=" "   style="position: fixed;top:9em ;  width:110%"></div>
<div id="getcanheightfinishedpc"   style="position: fixed;top:9em ; height:150%;"></div>


<div id="getcanheightzxphone"   style="position: fixed;top:9em ; height:65%;"> </div>
<div id="getcanwidthzxphone"  class=" "   style="position: fixed;top:9em ; width:45%"></div>

<div id="getcanwidthzxphonewidehh"  class=" "   style="position: fixed;top:9em ; width:135%"></div>
<div id="getcanwidthzxphonewide"  class=" "   style="position: fixed;top:9em ; width:105%"></div>

<div id="getcanheightzx"   style="position: fixed;top:9em; height:85%;"> </div>
<div id="getcanwidthzx"  class=" "   style="position: fixed;top:9em; width:65%"></div>

<div id="getcanheightzxcrop"   class=""   style="height:65%;position: fixed;top:9em ;"></div>
<div id="getcanwidthzxcrop"   class="col-xs-12   col-sm-4"   style="position: fixed;top:9em ;"></div>

<div id="getcancropwidthzoom"   class=""   style="width:390%;position: fixed;top:9em ;"></div>
<div id="getcancropwidthzoompc"   class=""   style="width:130%;position: fixed;top:9em ;"></div>

 oldnames  -->










<!-- sizethisimagezmini  for merge canvas  -->


<div id="getwidthmini"  class="col-xs-12  col-sm-4"  style="position: fixed;top:9em ;"  > </div>
<div id="getheightmini"    style="height:35%;position: fixed;top:9em ;"> </div>

<div id="getcanheightfinalmobilemini"   style="position: fixed;top:9em ; height:100%;"></div>
<div id="getcanwidthfinalmobilemini"  class=" "   style="position: fixed;top:9em ;  width:100%"></div>
<div id="getcanheightfinalmobilewidemini"   style="position: fixed;top:9em ; height:80%;"></div>
<div id="getcanwidthfinalpcmini"  class=" "   style="position: fixed;top:9em ;  width:32%"></div>
<div id="getcanheightfinalpcmini"   style="position: fixed;top:9em ; height:42%;"></div>


<!-- sizethisimagezmini  for merge canvas  -->





<!-- sizethisimagez  final  super sample  -->

<div id="getcanheightfinal"   style="position: fixed;top:9em ; height:100%;"></div>
<div id="getcanwidthfinal"   style="position: fixed;top:9em ; width:100%;"></div>
<div id="getcanheightfinalmobile"   style="position: fixed;top:9em ; height:250%;"></div>
<div id="getcanwidthfinalmobile"  class=" "   style="position: fixed;top:9em ;  width:250%"></div>
<div id="getcanheightfinalmobilewide"   style="position: fixed;top:9em ; height:150%;"></div>
<div id="getcanwidthfinalpc"  class=" "   style="position: fixed;top:9em ;  width:115%"></div>
<div id="getcanheightfinalpc"   style="position: fixed;top:9em ; height:160%;"></div>

<!-- sizethisimagez  final  super sample  -->






<!-- sizethisimagex  filters  superphoto  -->

<div id="getcanheightfiltersmobile"   style="position: fixed;top:9em ; height:65%;"> </div>
<div id="getcanwidthfiltersmobile"  class=" "   style="position: fixed;top:9em ; width:45%"></div>
<div id="getcanwidthfiltersmobilewideone"  class=" "   style="position: fixed;top:9em ; width:135%"></div>
<div id="getcanwidthfiltersmobilewide"  class=" "   style="position: fixed;top:9em ; width:105%"></div>
<div id="getcanheightfilters"   style="position: fixed;top:9em; height:85%;"> </div>
<div id="getcanwidthfilters"  class=" "   style="position: fixed;top:9em; width:65%"></div>

<!-- sizethisimagex  filters  superphoto  -->








<!-- sizequickview  canvas before crop starts   -->

<div id="getcanheightquick"   style="position: fixed;top:9em ; height:250%;"></div>
<div id="getcanwidthquick"  class=" "   style="position: fixed;top:9em ;  width:250%"></div>
<div id="getcanheightquickcrop"   class=""   style="height:65%;position: fixed;top:9em ;"></div>
<div id="getcanwidthquickcrop"   class="col-xs-12   col-sm-4"   style="position: fixed;top:9em ;"></div>

<!-- sizequickview  canvas before crop starts   -->









<!-- sizecropcanvas  canvas crop    -->

<div id="getcanheightcrop"   style="position: fixed;top:9em ; height:250%;"></div>
<div id="getcanwidthcrop"  class=" "   style="position: fixed;top:9em ;  width:250%"></div>
<div id="getcanheightzxcrop"   class=""   style="height:65%;position: fixed;top:9em ;"></div>
<div id="getcanwidthzxcrop"   class="col-xs-12   col-sm-4"   style="position: fixed;top:9em ;"></div>

<!-- sizecropcanvas  canvas crop    -->









<!-- cropimage  canvas crop image fit    -->

<div id="getcancropimage"   class=""   style="width:390%;position: fixed;top:9em ;"></div>
<div id="getcanheightcropimage"   style="position: fixed;top:9em ; height:250%;"></div>
<div id="getcanwidthcropimage"   class=""   style="width:390%;position: fixed;top:9em ;"></div>
<div id="getcancropimagepc"   class=""   style="width:130%;position: fixed;top:9em ;"></div>

<!-- cropimage  canvas crop image fit    -->










<div id="getcancropheightzoom"   class=""   style="height:500%;position: fixed;top:9em ;"></div>
<div id="getfilterwidth"   style="position: fixed;top:9em ; height:35%; "   class="col-xs-7 col-sm-2  " ></div>
<div id="getfilterwidthreal"   style="position: fixed;top:9em ; height:35%; "   class="col-xs-3 col-sm-1  " ></div>





    <input id="totalimages"   value="0" hidden style="">
     <input id="totalxx"   value="0" hidden style="">
     <input id="current"   value="0" hidden style="">


       <input id="sliderdirection"   value="0" hidden style="">
       <input id="imagecroptype"   value="0" hidden style="">
           

    <input  id="switchcanvas" value="1"    hidden> 
 <input  id="namefilteradjust" value=""    hidden> 
<input  id="finishedfilteradjust" value=""  hidden> 
<input  id="checkfilteradjust" value="" hidden>
<input  id="checkcontrol" value="0" hidden  >
<input  id="checkzoom" value="0" hidden  >
<input  id="zoomprecise" value="0" hidden  >
<input  id="hdcanvas" value="normal" hidden  >
<input  id="hdrebound" value="" hidden  >
<input  id="editstart" value="1" hidden  >






    
<!–- this  for  showfilters  ––>





<div class="col-xs-12 supertheme"   style="padding:0px;height:100%;overflow:hidden;">


<div class="col-xs-12" id="showsupersessionswitch">  </div>





    <div class="col-xs-12 "   style=" "> </div> 
    <div class="col-xs-hidden col-sm-1 col-md-1" > </div>




<div class="  col-xs-12 col-sm-10 col-md-10  " style="">
          
          
         
                     
          
          
          
          
          
            <div class="col-xs-12 zaz   "   style="">  
                    
          </div>
                             
   
          
          
          
          
          
     
          <div class="col-xs-12   zaz"   style=" ">  </div>   
          
          
          <div class="col-xs-12   zaz"   style=" ">  </div>     
          
          <div class="col-xs-12   za"   style=" ">  </div>   
            
   
          
          
        <?php
          
          //////<div class=" col-xs-12 col-sm-6 form-group  "   style="text-align:center;padding:0px">     <div class=" tur "   style="width:210px;text-align:center;margin:auto;border-radius:6px;padding:0px;">    <tr> <td>   <font class=" " color="#000000">  <input type="text"  class="form-control"   style="border:none;border-radius:3px;"   name="tupick" id="tuk" placeholder="TOPIC">    </font></td></tr></div>   </div> 
          
          ?>
          
              <div class="col-xs-12 zaz "   style=" ">  </div>   
          
       
      
         <font size="-1">    
 
                   
 <style>

.yui{cursor:pointer}
                
#lala:hover{background-color:#ffffff; padding: 5px; border-bottom-left-radius:4px; border-top-left-radius:4px; border-bottom-right-radius:4px; border-top-right-radius:4px; color:#000000; -moz-box-shadow: 0 0 3px#cccccc; -webkit-box-shadow: 0 0 3px#cccccc;box-shadow: 0 0 3px#cccccc}

#lala{background-color:<?php echo  $_SESSION['cl']; ?>;color:#000000; padding: 5px; border-bottom-left-radius:4px; border-top-left-radius:4px;  -moz-box-shadow: 0 0 3px<?php echo  $_SESSION['cl']; ?>; -webkit-box-shadow: 0 0 3px<?php echo  $_SESSION['cl']; ?>;box-shadow: 0 0 3px<?php echo  $_SESSION['cl']; ?>; }

              
#superthemebutton:hover{background-color:#ffffff; padding: 5px; border-bottom-left-radius:4px; border-top-left-radius:4px; border-bottom-right-radius:4px; border-top-right-radius:4px; color:#000000; -moz-box-shadow: 0 0 2.5px#cccccc; -webkit-box-shadow: 0 0 2.5px#cccccc;box-shadow: 0 0 2.5px#cccccc;}

#superthemebutton{background-color:<?php echo  $_SESSION['cl']; ?>;color:#000000; padding: 5px; border-bottom-left-radius:4px; border-top-left-radius:4px;  -moz-box-shadow: 0 0 2.5px<?php echo  $_SESSION['cl']; ?>; -webkit-box-shadow: 0 0 2.5px<?php echo  $_SESSION['cl']; ?>;box-shadow: 0 0 2.5px<?php echo  $_SESSION['cl']; ?>; }


</style>

             
 <div  class="col-xs-12  col-sm-4  "   id="wprevhold"   style="visibility:hidden;position:relative;height:0px;padding:0px">
     
             </div> 
             
     
             
 <div  class="col-xs-12  col-sm-4  "   id="wwprevhold"   style="visibility:hidden;position:relative;height:0px;padding:0px">
     
             </div>
             
    <div  class="col-xs-10  col-sm-12    "   id="wprevholdvv"   style="visibility:hidden;position:relative;height:0px;padding:0px">
     
             </div>  
 
             

             
             
                  
 <div id="startuploader">
             
 <div class=" col-xs-12 col-sm-12 za  "  style="padding:0px">  <div class=" "  id="launchbox"
  style="margin:auto;text-align:center;margin-top:11em"> 
              
          
  <div  id="selectholder">
   <form   method="post" id="vermin">   
           <div class="zuperxy" style="text-align:center;margin:auto;">
 <label class="yui " style="margin-top:2px;padding:2px;border-radius:50px;margin-left:3px;text-align:center" 
           id="lala" for="imx">

  <div class="supertheme"   style="width:100px;height:100px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
           
        <div  style="margin-top:36px;font-size:110%;color:#ffffff;font-weight:bold;"> Select</div>  </div>
        
             </label>
           <input type="file"  enctype="multipart/form-data"  method="post" name="re[]" id="imx" accept="image/*" > 
           </div> </form></div>





                    
 <script>
     
    $(function() {
   
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
             filesAmount = input.files.length;
            
                    if (filesAmount > 8){
                        
                      alert(" PLEASE SELECT AT MOST 8 IMAGES , THANK YOU ");  
                    }
                    else if( filesAmount == 0){ }
            else{
           


            var wegt=document.getElementById('wprevhold');
        var hhzw= parseInt(window.getComputedStyle(wegt,null).width);
              var gv= Math.min(hhzw ,hhzw);
                 var  nnv = gv ;
                 
            
             var kki = document.getElementById('hold');               
            kki.style.visibility= "visible"; 
              $("#selectholder").hide();
            $("#suptoptwo").hide();
             $("#suptop").hide();
             $("#hold").show();
              $("#holdo").show();
              $("#holdtop").show();
                
                
             
            for (i = 0; i < filesAmount; i++) {
                
              
                var reader = new FileReader();

                if( filesAmount == 1){
           reader.onload = function(event) {
        $($.parseHTML('<img id="previm1">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}

                else{



  if( i == 0){
             reader.onload = function(event) {
     $($.parseHTML('<img id="previm1">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");  }}

  if( i == 1){
             reader.onload = function(event) {
      $($.parseHTML('<img id="previm2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");  }}


     if( i == 2){
             reader.onload = function(event) {  
      $($.parseHTML('<img id="previm3">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none"); }}


      if( i == 3){
             reader.onload = function(event) {
     $($.parseHTML('<img id="previm4">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}


      if( i == 4){
             reader.onload = function(event) {
      $($.parseHTML('<img id="previm5">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}


      if( i == 5){
             reader.onload = function(event) {
     $($.parseHTML('<img id="previm6">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}


     if( i == 6){
             reader.onload = function(event) {
     $($.parseHTML('<img id="previm7">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}


     if( i == 7){
             reader.onload = function(event) {
     $($.parseHTML('<img id="previm8">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).width(nnv).css("margin-top","0px").css("border-radius","4px").css("display","none");}}

            }

       reader.readAsDataURL(input.files[i]);
            }
      }}
    };
        
      
        
        
        
             
               
                          
    let ax= document.querySelector("#imx");     
    ax.addEventListener('change', function() {
          $("#ppgg").html("");
       imagesPreview(this, 'div.prev');
        var url="showpreviewcount.php";
         $.post(url,{request:"fa",c:filesAmount}, function(data){
           $("#leftrightprev").html(data).show();
        } ); });
      
   
        
     
          }); 
     


     

     
     </script>



       </div>   </div> 
  </div></font>         
</div>











 
   

<div class="col-xs-12 supertheme"   id="hold"  style=" top:0em;position:fixed;visibility:hidden;padding:0px;height:100%;">

      
 <div class="col-xs-12 "  id="holdtop"   style="top:-1px;height:40px;padding:0px;z-index:2;position:fixed;"> 
<div  class="col-xs-3  col-sm-2 "  id="leftrightprev"  style="padding: 0px" >
 <div  class="col-xs-6"   >
<div  onclick="javascript:closepreview();" class="col-xs-12  zuperxy zuzax"  style="font-size:32px;color:#ffffff;margin-top:6px;padding: 0px">  
     <span   class="juju" style="opacity:0.7;position:relative;width:auto">   <i class="fas fa-arrow-left" aria-hidden="true"  style="margin-top:-1.5px"></i>  </span></div></div>
</div><div  class="col-xs-9  col-sm-10 "  style="padding: 0px">
          </div></div>



     <div class="col-xs-12"     id="holdo"  style="padding: 0px">
           <div>
            <div class="col-xs-12   "   style="padding:0px">    
 <div  class="col-xs-12  "   id="hprevhold"   style="padding:0px;margin-top:-6px;padding:0px; overflow-x:hidden; overflow-y:hidden; white-space:nowrap">

  <jon>
    <div class=""  id="prevslidecontrol"><con>
    <div class=" prev  col-xs-12  "   id="ppgg"    style="padding:0px;width:auto;margin:auto;text-align:center;"> 
        </div></con></div></jon>
    </div></div>
        </div></div>


</div>
             
          
     

     

<div id="superphotothemeback" class="col-xs-12 zuzax"   onclick="javascript:closethemeselector();" 
 style="height:100%;z-index:14;display:none;top:0em; position: fixed;">   </div>
      





<div  id="superphototheme"  class="col-xs-12"   
 style="position:fixed;top:8em;padding:0px;z-index:15;height:0px;display:none; ">


 <div  class="col-xs-hidden col-xs-3 "  style="height:0px"></div>


 <div   class="col-xs-12 col-sm-6 tur"  style="padding:0px;height:275px;border-radius:6px; border: solid #cccccc 2px ;
 -moz-box-shadow: 0 0 5px#cccccc; -webkit-box-shadow: 0 0 5px#cccccc;box-shadow: 0 0 5px#cccccc;">


 <div   class="col-xs-12 "  style="padding:0px;"> 



  <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(1);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textblue zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
   </div> </label></div>


  <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(0);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textpink zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
    </div> </label></div>


  <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(2);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textsupergraylight zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
  </div> </label></div>

 </div>



 <div   class="col-xs-12  "  style="padding:0px;margin-top:30px">


<div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(4);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textpurplesuperphoto zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
   </div> </label></div>


  <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(5);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textbloodsuperphoto zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
  </div> </label></div> 

   <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(3);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textsupergray zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
  </div> </label></div>

</div>




<div   class="col-xs-12  "  style="padding:0px;margin-top:25px">

 <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(6);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textlightbluesuperphoto zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
  </div> </label></div>


  <div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(8);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textlightcreamsuperphoto zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
  </div> </label></div> 


<div class="col-xs-4  za2" style="text-align:center;padding:0px;vertical-align:middle;"> 
<label   onclick="javascript:switchthemesuper(7);" style="margin-top:20px;padding:2px;border-radius:50px;background-color:#cccccc">
  <div class="textlightxxsuperphoto zuzax"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
   </div> </label></div>


</div>


</div>


 <div  class="col-xs-hidden col-xs-3"  style="height:0px"></div>


      </div>  

     








<!--spil image data sent here from showpreview count -->
<div  id="spil" class="  col-xs-12 "   style="position: fixed; top:0em;padding:0px;z-index:15;"> </div>  



 <div  id="showcroplockhome">   </div>
                 
       
     
 
       
<div  id="suptop" style="z-index:60;text-align:center;color:#0b1728; width:100%;height:35px; position:fixed;top:0.5%"> 
  <div class="" style="text-align:center;color:#0b1728; width:100%;height:35px; position:fixed;top:0.5%">
            <div class="col-xs-2  za2" style="float:left;text-align:left;padding:0px"> <bottr>  <span  class=" zuperxy za"  style="font-size:20px;font-weight:bolder">
     <img src="images/iconsp.png" class="turiconsuperphoto"  style="border-radius:60px;padding:0px;"  height="auto"  width="41"/> 
                      </span>      </bottr>      </div>
              <a style="color:#0b1728" href="" > 
             <bottr>    <div class="col-xs-8 " style="margin-top:6px">
         <span  class=" zuperxy za"  style="font-size:18px;font-weight:bolder">
         
                    SuperPhotos  </span>            
           </div>  </bottr>  </a> 
        <div class="col-xs-2  za2" style="float:right;text-align:right;padding:0px"> <bottr>  <span  class=" zuperxy za"  style="font-size:18px;font-weight:bolder">
<label class="yui "  onclick="javascript:themeselector();" style="margin-top:2px;padding:2px;border-radius:50px;margin-left:3px;text-align:center" 
id="superthemebutton">
  <div class="supertheme"   style="width:36px;height:36px;border-radius:50px;background-color:#ffffff;padding:4px;text-align:center;color:#ffffff">
          </div> </label>
                      </span>      </bottr>      </div>
              </div></div> 



            

                          
                          
<div id="suptoptwo"  class="" style="z-index:60;text-align:center;overflow:hidden;color:#0b1728; width:100%;height:auto; position:fixed;bottom:1.2%;"> 
      


<div  class="col-xs-12 "  style="padding:0px;">

 <div class="col-xs-2  col-sm-1"   style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:7px;">
<div  class="zuzax col-xs-12 juju  zuperxy"    onclick="javascript:kropstateclearxx();"   id="clearcropstatexx"  style="height:35px;padding:0px;display:none;"> 
 <span   style="padding:0px;margin-left:-35%">
  <i class="fas fa-trash"></i> </span> </div>
 </div> 

<div  class="col-xs-8  col-sm-10"  style="padding:0px">  </div>

 <div class="  col-xs-2   col-sm-1" style="padding:0px;text-align:center;margin:auto;font-size:26px;margin-top:7px;"><div  class=" col-xs-12   zuzax juju zuperxy "   onclick="javascript:kropstaterefreshxx();"  id="refreshcropstatexx"  style="height:35px;padding:0px;display:none;"> 
 <span   id="sslockxx" style="padding:0px;display:none;margin-left:35%"> <i class="fas fa-key"></i>  </span> 
   <span id="sskeyxx"  style="padding:0px;display:none;margin-left:35%"> <i class="fas fa-lock"></i>  </span> </div>
 </div> 

  </div> 


</div>  



</div>





  








<script type="text/javascript">
  



  var state = <?php echo  $_SESSION['supercropstate']; ?>;
  var stateallow = <?php echo  $_SESSION['supercropstateallow']; ?>;

  if(state ==0 && stateallow ==0){}
    else if(state==1 && stateallow==1){  $("#clearcropstatexx").show();
$("#refreshcropstatexx").show(); $("#sslockxx").hide();  $("#sskeyxx").show(); }
   else if(state==1 && stateallow==0){ 
    $("#refreshcropstatexx").show(); $("#sskeyxx").hide();
        $("#sslockxx").show(); $("#clearcropstatexx").show();   }
        else{}


    function kropstaterefreshxx() {
 var wi = 0;
  var  hi =0;
  var ty = 2;
var url="sessionsupercroplock.php";
  $.post(url,{request:"fa",memw:wi,memh:hi,memty:ty}, function(data){
           $("#showcroplockhome").html(data).show();}); }



    function kropstateclearxx() {
 var wi = 0;
  var  hi = 0;
  var ty = 3;
var url="sessionsupercroplock.php";
  $.post(url,{request:"fa",memw:wi,memh:hi,memty:ty}, function(data){
           $("#showcroplockhome").html(data).show();}); }



function switchthemesuper(a){
  var url="sessionsuperphototheme.php";
  $.post(url,{request:"fa",typ:a}, function(data){
           $("#showsupersessionswitch").html(data).show();
            });}



function themeselector(){ 
if($("#superphototheme").is(":hidden")){ 
$("#superphototheme").show();
$("#superphotothemeback").show();
    }else{ 
      $("#superphototheme").hide();
    $("#superphotothemeback").hide(); }}



function closethemeselector(){ 
      $("#superphototheme").hide();
    $("#superphotothemeback").hide(); }
    

</script>

                            