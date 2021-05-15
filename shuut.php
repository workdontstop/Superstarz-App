


<script type="text/javascript">
     $(document).ready(function(){
     $("#superloader").hide();
      $("#superloader").addClass('stoploader'); 
    $("#superloader").removeClass('startloader');    })
</script>

<script src="tools/js/twimoji.js"></script> 



     

<style type="text/css">

/* startsingle */
/* startslide */
/* startslideplay */
/* duplicates in startplay and compress function */


/* slick slider Dots */
.slick-dotted .slick-slider {margin-bottom:0px;}



.slick-dots{position: absolute;
    bottom: -25px;
   display: block;
   width: 100%;
    padding: 0;
    margin: 0;
  list-style: none; 
  text-align: center; }





.slick-dots li button{ 
  font-size: 0;
    line-height: 0;
   display: block;
   width: 10px;
    height: 20px;
    padding: 2.5px;
   cursor: pointer;
   color: transparent;
    border: 0;
    outline: none;
    background: transparent;}




/* hiding all bullets by default */
.slick-dots li {
    display: none}


/* only displaying the active bullets and the 2 bullets next to it */
.slick-dots li.slick-active,
.slick-dots li.slick-active + li{
    display: block;
position: relative;
display: inline-block;
width: 10px;
    height: 20px;
    margin: 0 5px;
    padding: 0;
cursor: pointer;}




/* displaying the last three bullets when slick-active class isn't applied to any li before them  */
.slick-dots li:nth-last-child(1),
.slick-dots li:nth-last-child(2),
.slick-dots li:nth-last-child(3),
.slick-dots li:nth-last-child(4),
.slick-dots li:nth-last-child(5),
.slick-dots li:nth-last-child(6),
.slick-dots li:nth-last-child(7){
     display: block;
position: relative;
display: inline-block;
width: 10px;
    height: 20px;
    margin: 0 5px;
    padding: 0;
cursor: pointer;
}


/* hiding the last three bullets if slick-active exist before them */
.slick-dots li.slick-active ~ li:nth-last-child(16),
.slick-dots li.slick-active ~ li:nth-last-child(15),
.slick-dots li.slick-active ~ li:nth-last-child(14),
.slick-dots li.slick-active ~ li:nth-last-child(13),
.slick-dots li.slick-active ~ li:nth-last-child(12),
.slick-dots li.slick-active ~ li:nth-last-child(11),
.slick-dots li.slick-active ~ li:nth-last-child(10),
.slick-dots li.slick-active ~ li:nth-last-child(9),
.slick-dots li.slick-active ~ li:nth-last-child(8),
.slick-dots li.slick-active ~ li:nth-last-child(7) {
    display: none;
}







.slick-dots li button:hover,
.slick-dots li button:focus
{outline: none;}


.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{opacity: 1;}


.slick-dots li button:before
{font-size: 0px;
line-height: 20px;
position: absolute;
    top: 0;
    left: 0;
    width: 10px;
    height: 20px;
  content: '•';
    text-align: center;
   opacity: .25;
    color: black;}


.slick-dots li.slick-active button:before
{opacity: .75;color: black;}


.slick-dots{position: absolute;bottom:1em;}


.slick-dots li button{
  opacity:0.5;
  width:0.8rem;
height:0.8rem; 
background-color:#ffffff;
border-radius:50%;
-moz-box-shadow: 0 0 6px#000000;
 -webkit-box-shadow: 0 068px#000000;box-shadow: 0 0 6px#000000;}


li.slick-active button{
  opacity:0.8;
  width:1rem;
height:1rem;}


/* slick slider Dots */

</style>

<?php    



    require('phpopen.php');
   require('dataco.php');       
     include('hashat.php');//////////hashtags  art
    include('timego.php');//////////time agoo
include('exitx.php');
include('theme.php');
      
       
$loggeduser=$_SESSION['numuser']; 


 $favi=array();
$famsg=array();  
$fatim=array();  
$fanu=array();
 $fatp=array(); 
 $fawi=array(); 
  $uuuk=array();  
   $uuut=array(); 
    $uuuy=array(); 
  $nam=array();
  $coun=array();
   $fasm1=array();
   $fasm1ty=array();
$fasm2=array(); 
$fasm2ty=array();     
 $fasm3=array(); 
 $fasm3ty=array(); 
  $fasm4=array(); 
 $fasm4ty=array(); 
  $fasm5=array(); 
 $fasm5ty=array();
  $fasm6=array(); 
 $fasm6ty=array();  
  $fasm7=array(); 
 $fasm7ty=array(); 
  $fasm8=array(); 
 $fasm8ty=array();
  $fasm9=array(); 
 $fasm9ty=array();
  $fasm10=array(); 
 $fasm10ty=array();  
  $fasm11=array(); 
 $fasm11ty=array();  
  $fasm12=array(); 
 $fasm12ty=array(); 
  $fasm13=array(); 
 $fasm13ty=array(); 
  $fasm14=array(); 
 $fasm14ty=array(); 
  $fasm15=array(); 
 $fasm15ty=array();
  $fasm16=array(); 
 $fasm16ty=array(); 
  $feely1=array();  
  $feely2=array(); 
  $feely3=array(); 
  $feely4=array(); 
   $feelychek=array(); 



   

 
$feedlimit='2015-02-01 04:00:00';
$feedlock="1000000000000000000";
   
$dato="1";

 

 if($feedcounter==0){
  echo'<script>    $("#feedbuild").show();   </script>';
  $idlock="";
   ///count posts   
if($gringo == 1){ $sqlef=mysqli_query($super,"SELECT count(id) FROM wall  WHERE  time1 >='".$feedlimit."' LIMIT 2000 ");  }
else if($gringo == 2){
$sqlef=mysqli_query($super,"SELECT count(id) FROM wall,member  WHERE  time1 >='".$feedlimit."' AND  member.num='".$d."'  AND  member.num=wall.num   LIMIT 2000 ");}
else{  }
   ///count posts   

//////////if clickmemeberfrompostwasactivatedbyhistory
   if($jump != 0){$pagenum=$page; $idlock=$idlockxx;  $feedlock = $idlockxx;}else{$pagenum=1;} 
 ////////////////

 $totalfeed=$sqlef->fetch_row();
 ////page getting num rows
      $datacount=$totalfeed[0];
      if($datacount == 0){  echo'<script>       </script>'; }
      $dato=$datacount;
  $pager=21; ///page number of results to be showm
       $last= ceil($datacount/$pager);/// tells page number of our last page
       if($last < 1){
           $last='1'; // make sure last cannot be less than 1
                      } 


                      echo ' <script>
 
    function refreshfeed(){

       $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 

      var gr ="'.$gringo.'";

      if(gr == 1){var goy ="userfeedsgate.php";}
     else if(gr == 2){var goy ="userpagegate.php";}
       var naa="'.$name.'";

    $.ajax({
  type: "POST",
  url: ""+goy+"",
        data: {member:'.$d.',name:naa,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
    $("#supershow").html(data).show();},
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  }); 
      


           }</script> ';



             if($gringo == 1){
              echo '<script> 
           $("#topuser").show();
           $("#topbar").hide();
        document.getElementById("feedsholder").innerHTML="Discover";
        var wt = document.getElementById("wideposttotal");
            wt.style.visibility="hidden";
               </script>';  }
      else if($gringo == 2){
              echo '<script> 
           $("#topuser").hide();
           $("#topbar").show();
            document.getElementById("feedsholder").innerHTML="'.$name.'";
               </script>';
            if($datacount > 1){echo '<script> 
            var wt = document.getElementById("wideposttotal");
            wt.style.visibility="visible";
             document.getElementById("wideposttotalin").innerHTML="'.$datacount.'";
               </script>';} } }
               else{

               $feedlock = $idlock;

               }


             if($gringo == 1){   echo' <script>document.getElementById("feedstate").value="2";  </script>';}
             else if($gringo == 2 ){   echo' <script>document.getElementById("feedstate").value="1";  </script>'; } 
             else{ }
       
         
       
     ///establish $pagenum var
     
       if($pagenum < 1){
        $pagenum='1';
       }else if($pagenum > $last){
          $pagenum=$last;
       }//// make sure the page number is not below 1 and more than our last page
       



echo'





<div id="superpostdatago'.$pagenum.''.$gringo.'" class="col-xs-12"  style="padding:0px;transition: all .5s linear;">

   <div id="newpagesnapto'.$pagenum.''.$gringo.'" class="col-xs-12"  style="padding:0px;height:0px;position:absolute;margin-top:-2.5em">
    </div>
              
          <input  id="checkpress'.$pagenum.''.$gringo.'"   value="0"   hidden> 

           <input  id="autorollstate'.$pagenum.''.$gringo.'"  value="'.$instate.'"   hidden>
      <input  id="playkey'.$pagenum.''.$gringo.'"   value="0"   hidden> 
        <input  id="zoominshortlockup'.$pagenum.''.$gringo.'"  value="0" hidden> 

  <div  class="col-xs-12 zuzax"   onmousedown="javascript:forcestopauto'.$pagenum.''.$gringo.'();"   id="windowcover'.$pagenum.''.$gringo.'"  style="width:100%;height:100%;z-index:2000;position:fixed;padding:0px;display:none;top:0em">  </div>    ';

      

         $next = $pagenum + 1;

    $limit='LIMIT ' .($pagenum -1) * $pager .',' .$pager;
       ///selects range of rows for choosen $pagenum





if($gringo == 1){
  $pik="SELECT wall.id,member.name,member.user, member.cl,member.imname, wall.num,wall.cap,wall.tup,wall.time1,wall.count,wall.sim1,wall.sim1ty,wall.sim2,wall.sim2ty,wall.sim3,wall.sim3ty,wall.sim4,wall.sim4ty,wall.sim5,wall.sim5ty,wall.sim6,wall.sim6ty,wall.sim7,wall.sim7ty,wall.sim8,wall.sim8ty,wall.sim9,wall.sim9ty,wall.sim10,wall.sim10ty,wall.sim11,wall.sim11ty,wall.sim12,wall.sim12ty,wall.sim13,wall.sim13ty,wall.sim14,wall.sim14ty,wall.sim15,wall.sim15ty,wall.sim16,wall.sim16ty FROM wall,member  WHERE  member.num=wall.num  AND time1>='".$feedlimit."'   AND id<='".$feedlock."'  ORDER BY id DESC $limit" ; 
}else if($gringo == 2){ 
 $pik="SELECT wall.id,member.name,member.user, member.cl,member.imname, wall.num,wall.cap,wall.tup,wall.time1,wall.count,wall.sim1,wall.sim1ty,wall.sim2,wall.sim2ty,wall.sim3,wall.sim3ty,wall.sim4,wall.sim4ty,wall.sim5,wall.sim5ty,wall.sim6,wall.sim6ty,wall.sim7,wall.sim7ty,wall.sim8,wall.sim8ty,wall.sim9,wall.sim9ty,wall.sim10,wall.sim10ty,wall.sim11,wall.sim11ty,wall.sim12,wall.sim12ty,wall.sim13,wall.sim13ty,wall.sim14,wall.sim14ty,wall.sim15,wall.sim15ty,wall.sim16,wall.sim16ty FROM wall,member  WHERE  member.num='".$d."'  AND  member.num=wall.num  AND time1>='".$feedlimit."'   AND id<='".$feedlock."'    ORDER BY id DESC $limit";}
else{ }



 ///selecting information for supertarz all feeds 
        $selfeedinfo=$pik; 
    $feedpack= $super->prepare($selfeedinfo);
      if(false === $feedpack){
      echo'<script>  $("#profileerrorback").show(); 
          $("#profiledataerror1").show();
          </script>'; }
              else{
       $feedpack->execute();
        $deedres=$feedpack->get_result();
        $finaldeedres= $deedres->num_rows;
          while($row = $deedres->fetch_assoc() ){
               array_push($favi,$row['id']);
      array_push($famsg,$row['cap']); 
          array_push($nam,$row['name']);
      array_push($fatim,$row['time1']);
       array_push($fanu,$row['num']);
      array_push($fatp,$row['tup']);
       array_push($uuuk,$row['user']);  
         array_push($uuut,$row['cl']); 
           array_push($uuuy,$row['imname']);
            array_push($coun,$row['count']);
       array_push($fasm1,$row['sim1']);
         array_push($fasm1ty,$row['sim1ty']);
      array_push($fasm2,$row['sim2']);
       array_push($fasm2ty,$row['sim2ty']);
      array_push($fasm3,$row['sim3']);
      array_push($fasm3ty,$row['sim3ty']);  
       array_push($fasm4,$row['sim4']);
      array_push($fasm4ty,$row['sim4ty']); 
       array_push($fasm5,$row['sim5']);
      array_push($fasm5ty,$row['sim5ty']); 
       array_push($fasm6,$row['sim6']);
      array_push($fasm6ty,$row['sim6ty']); 
       array_push($fasm7,$row['sim7']);
      array_push($fasm7ty,$row['sim7ty']); 
       array_push($fasm8,$row['sim8']);
      array_push($fasm8ty,$row['sim8ty']); 
       array_push($fasm9,$row['sim9']);
      array_push($fasm9ty,$row['sim9ty']); 
       array_push($fasm10,$row['sim10']);
      array_push($fasm10ty,$row['sim10ty']); 
       array_push($fasm11,$row['sim11']);
      array_push($fasm11ty,$row['sim11ty']); 
       array_push($fasm12,$row['sim12']);
      array_push($fasm12ty,$row['sim12ty']); 
       array_push($fasm13,$row['sim13']);
      array_push($fasm13ty,$row['sim13ty']); 
       array_push($fasm14,$row['sim14']);
      array_push($fasm14ty,$row['sim14ty']); 
       array_push($fasm15,$row['sim15']);
      array_push($fasm15ty,$row['sim15ty']); 
       array_push($fasm16,$row['sim16']);
      array_push($fasm16ty,$row['sim16ty']);
       if($feedcounter==0 && $jump == 0 ){  $idlock=$favi[0];  }
        }  
                                $feedpack->close(); }
        ///selecting information for supertarz all feeds 


 



    $gan=count($favi);


 
          $sqlcom="SELECT count(id) as tak FROM comment WHERE post= ? ";  
         $commentstrap= $super->prepare($sqlcom);
           $commentstrap->bind_param("i",$r);
        for($i= 0;  $i < $gan; $i++) { 
                $r=$favi[$i]; 
          $commentstrap->execute();
        $res=$commentstrap->get_result();
           $numro= $res->num_rows;
       if($numro > 0){
      if($row = $res->fetch_assoc() ){
        $te= $row['tak'];
      array_push($fawi,$te);}}}
        $commentstrap->close();



 $sqlfeel1="SELECT count(id) as jak1 FROM feel WHERE post= ?  and react=1";  
         $feelstrap1= $super->prepare($sqlfeel1);
           $feelstrap1->bind_param("i",$ax);
        for($i= 0;  $i < $gan; $i++) { 
                $ax=$favi[$i]; 
          $feelstrap1->execute();
        $resfeel1=$feelstrap1->get_result();
           $numrofeel1= $resfeel1->num_rows;
       if($numrofeel1 > 0){
      if($row = $resfeel1->fetch_assoc() ){
        $fu= $row['jak1'];
      array_push($feely1,$fu);}}}
        $feelstrap1->close();




         $sqlfeel2="SELECT count(id) as jak2 FROM feel WHERE post= ?  and react=2";  
         $feelstrap2= $super->prepare($sqlfeel2);
           $feelstrap2->bind_param("i",$bx);
        for($i= 0;  $i < $gan; $i++) { 
                $bx=$favi[$i]; 
          $feelstrap2->execute();
        $resfeel2=$feelstrap2->get_result();
           $numrofeel2= $resfeel2->num_rows;
       if($numrofeel2 > 0){
      if($row = $resfeel2->fetch_assoc() ){
        $cr= $row['jak2'];
      array_push($feely2,$cr);}}}
        $feelstrap2->close();


 $sqlfeel3="SELECT count(id) as jak3 FROM feel WHERE post= ?  and react=3";  
         $feelstrap3= $super->prepare($sqlfeel3);
           $feelstrap3->bind_param("i",$cx);
        for($i= 0;  $i < $gan; $i++) { 
                $cx=$favi[$i]; 
          $feelstrap3->execute();
        $resfeel3=$feelstrap3->get_result();
           $numrofeel3= $resfeel3->num_rows;
       if($numrofeel3 > 0){
      if($row = $resfeel3->fetch_assoc() ){
        $ce= $row['jak3'];
      array_push($feely3,$ce);}}}
        $feelstrap3->close();


        $sqlfeel4="SELECT count(id) as jak4 FROM feel WHERE post= ?  and react=4";  
         $feelstrap4= $super->prepare($sqlfeel4);
           $feelstrap4->bind_param("i",$dx);
        for($i= 0;  $i < $gan; $i++) { 
                $dx=$favi[$i]; 
          $feelstrap4->execute();
        $resfeel4=$feelstrap4->get_result();
           $numrofeel4= $resfeel4->num_rows;
       if($numrofeel4 > 0){
      if($row = $resfeel4->fetch_assoc() ){
        $le= $row['jak4'];
      array_push($feely4,$le);}}}
        $feelstrap4->close();




        
        $sqlfeelchek="SELECT react FROM feel WHERE post= ?  and  num='$loggeduser' ";  
         $feelstrapchek= $super->prepare($sqlfeelchek);
           $feelstrapchek->bind_param("i",$uuc);
        for($i= 0;  $i < $gan; $i++) { 
                $uuc=$favi[$i]; 
          $feelstrapchek->execute();
        $resfeelchek=$feelstrapchek->get_result();
           $numrofeelchek= $resfeelchek->num_rows;
       if($numrofeelchek > 0){
      if($row = $resfeelchek->fetch_assoc() ){
        $jez= $row['react'];
      array_push($feelychek,$jez);}}else{
        array_push($feelychek,0);
      }}
        $feelstrapchek->close();







 echo '

  <script type="text/javascript">



 function forcestopauto'.$pagenum.''.$gringo.'(){
   $("#windowcoverback").hide();
        $("#windowcover'.$pagenum.''.$gringo.'").hide();
   textnotifyauto(0);
document.getElementById("autorollstate'.$pagenum.''.$gringo.'").value=0;
$(".scrollpoptoggleoff").show();
 $(".scrollpoptoggleon").hide();
 autostop'.$pagenum.''.$gringo.'();   }



 function auto'.$pagenum.''.$gringo.'(z){
var jivd='.json_encode($favi).';
var u =0;
for( var i=z; i<jivd.length; i++){ 
var x = u+u+u+u+u+u;
 u++;
 var p=""+x+"000";
go'.$pagenum.''.$gringo.'(jivd[i],p,i);}}


function  animo'.$pagenum.''.$gringo.'(a,c){ 
  if(mobileboy == 1){
 $("html,body").animate({scrollTop:$("#gotom"+a+"'.$gringo.'").offset().top},"fast");}
 else{
  $("html,body").animate({scrollTop:$("#goto"+a+"'.$gringo.'").offset().top},"fast");}  
document.getElementById("autoguy"+a+"'.$pagenum.''.$gringo.'").value=0;
var all="'.$gan.'";
var allx= all -1 ;
if(allx == c){   forcestopauto'.$pagenum.''.$gringo.'();  } }

  
function  go'.$pagenum.''.$gringo.'(a,b,c){ 
 document.getElementById("autoguy"+a+"'.$pagenum.''.$gringo.'").value=1;

 if(c == 0){ hime0= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
 else if(c == 1){ hime1= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
  else if(c == 2){ hime2= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
 else if(c == 3){ hime3= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
 else if(c == 4){ hime4= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
 else if(c == 5){ hime5= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
  else if(c == 6){ hime6= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
   else if(c == 7){ hime7= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
    else if(c == 8){ hime8= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
     else if(c == 9){ hime9= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
      else if(c == 10){ hime10= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
       else if(c == 11){ hime11= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
        else if(c == 12){ hime12= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
         else if(c == 13){ hime13= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
          else if(c == 14){ hime14= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
           else if(c == 15){ hime15= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
            else if(c == 16){ hime16= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
             else if(c == 17){ hime17= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
              else if(c == 18){ hime18= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
               else if(c == 19){ hime19= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
                else if(c == 20){ hime20= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
                 else if(c == 21){ hime21= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
                  else if(c == 22){ hime22= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
                   else if(c == 23){ hime23= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);}
                    else if(c == 24){ hime24= setTimeout(function(){animo'.$pagenum.''.$gringo.'(a,c);},b);} }



 function autostop'.$pagenum.''.$gringo.'(){
var jivd='.json_encode($favi).';
for( var i=0; i<jivd.length; i++){ 
 gooff'.$pagenum.''.$gringo.'(jivd[i],i); }}


 function autozero'.$pagenum.''.$gringo.'(a){ 
  document.getElementById("autoguy"+a+"'.$pagenum.''.$gringo.'").value=0; }


function  gooff'.$pagenum.''.$gringo.'(a,b){
   var ag = $("#autoguy"+a+"'.$pagenum.''.$gringo.'").val();
if(ag == 1){ 
  if(b == 0){ clearTimeout(hime0);  autozero'.$pagenum.''.$gringo.'(a)} 
 else if(b == 1){ clearTimeout(hime1);  autozero'.$pagenum.''.$gringo.'(a)}
  else if(b == 2){ clearTimeout(hime2);  autozero'.$pagenum.''.$gringo.'(a)}
   else if(b == 3){ clearTimeout(hime3);  autozero'.$pagenum.''.$gringo.'(a)}
    else if(b == 4){ clearTimeout(hime4);  autozero'.$pagenum.''.$gringo.'(a)}
     else if(b == 5){ clearTimeout(hime5);  autozero'.$pagenum.''.$gringo.'(a)}
      else if(b == 6){ clearTimeout(hime6);  autozero'.$pagenum.''.$gringo.'(a)}
       else if(b == 7){ clearTimeout(hime7);  autozero'.$pagenum.''.$gringo.'(a)}
        else if(b == 8){ clearTimeout(hime8);  autozero'.$pagenum.''.$gringo.'(a)}
         else if(b == 9){ clearTimeout(hime9);  autozero'.$pagenum.''.$gringo.'(a)}
          else if(b == 10){ clearTimeout(hime10);  autozero'.$pagenum.''.$gringo.'(a)}
           else if(b == 11){ clearTimeout(hime11);  autozero'.$pagenum.''.$gringo.'(a)}
            else if(b == 12){ clearTimeout(hime12);  autozero'.$pagenum.''.$gringo.'(a)}
             else if(b == 13){ clearTimeout(hime13);  autozero'.$pagenum.''.$gringo.'(a)}
              else if(b == 14){ clearTimeout(hime14);  autozero'.$pagenum.''.$gringo.'(a)}
               else if(b == 15){ clearTimeout(hime15);  autozero'.$pagenum.''.$gringo.'(a)}
                else if(b == 16){ clearTimeout(hime16);  autozero'.$pagenum.''.$gringo.'(a)}
                 else if(b == 17){ clearTimeout(hime17);  autozero'.$pagenum.''.$gringo.'(a)}
                  else if(b == 18){ clearTimeout(hime18);  autozero'.$pagenum.''.$gringo.'(a)}
                   else if(b == 19){ clearTimeout(hime19);  autozero'.$pagenum.''.$gringo.'(a)}
                    else if(b == 20){ clearTimeout(hime20);  autozero'.$pagenum.''.$gringo.'(a)} 
                     else if(b == 21){ clearTimeout(hime21);  autozero'.$pagenum.''.$gringo.'(a)} 
                      else if(b == 22){ clearTimeout(hime22);  autozero'.$pagenum.''.$gringo.'(a)} 
                       else if(b == 23){ clearTimeout(hime23);  autozero'.$pagenum.''.$gringo.'(a)} 
                        else if(b == 24){ clearTimeout(hime24);  autozero'.$pagenum.''.$gringo.'(a)}   }}












 function swint'.$pagenum.''.$gringo.'(){
var fadd = '.json_encode($favi).'; 
var gy = JSON.stringify(fadd);
var toty ="'.$gan.'";
var grin="'.$gringo.'";
var pg ="'.$pagenum.'";
  $.ajax({
  type: "POST",
  url: "switch.php",
  data: {ivd:gy,total:toty,gringo:grin,pager:pg}, 
 success: function(data){
  $("#superemoticoninteract").html(data).show();  },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });         }








function  expand'.$pagenum.''.$gringo.'(a){
     $("#feedwait").show();
   document.getElementById("checkpress'.$pagenum.''.$gringo.'").value=0;
   $("#supershow").addClass("blurplaceholderall");
  $(".superpocket'.$pagenum.'").show();
var jivd='.json_encode($favi).';
for( var i=0; i<jivd.length; i++){
$("#datacase"+jivd[i]+"'.$gringo.'").slick("unslick");
 var idexnxx = $("#activeindex"+jivd[i]+"'.$gringo.'").val();
    var idexnrealxx = idexnxx - 1;
var totsetsx = $("#totalallsets"+jivd[i]+"'.$gringo.'").val();
var checkinfofatex = $("#checkinfostate"+jivd[i]+"'.$gringo.'").val();
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("col-xs-6");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("col-xs-12");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("col-sm-4");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("col-sm-6");
var dcc = document.getElementById("datauniverse"+jivd[i]+"'.$gringo.'");
var imagevarc = document.getElementById("image1"+jivd[i]+"'.$gringo.'");
if(mobileboy == 1){ $("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("teramobile");}
else{$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("tera");}
 var checkzoomfatex = $("#checkzoom"+jivd[i]+"'.$gringo.'").val();
 var cctypx = $("#type1"+jivd[i]+"'.$gringo.'").val();

 if(mobileboy == 1)
 {document.getElementById("superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").style.padding="0px";
imagevarc.style.borderRadius="0px";}
else{ document.getElementById("superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").style.padding="3px";}

 if(cctypx==0 || cctypx==100){
 var tixhx =   $("#holdexpandtxt"+jivd[i]+"'.$gringo.'").val();
imagevarc.style.height=+tixhx+"px";
if(checkzoomfatex == 1){imagevarc.style.width="auto";}else{imagevarc.style.width="100%";}
}else{
if(checkinfofatex == 1  &&  idexnxx== 1 ){ $("#image1inside"+jivd[i]+"'.$gringo.'").addClass("blurplaceholder"); }
 var tixhx =   $("#holdexpandtxt"+jivd[i]+"'.$gringo.'").val();
 imagevarc.style.overflow="auto";
 imagevarc.style.height=+tixhx+"px";
 imagevarc.style.width="auto";}

   $("#clone"+jivd[i]+"'.$gringo.'").hide();
if(totsetsx == 1  ||  checkinfofatex == 1){
  $("#datacase"+jivd[i]+"'.$gringo.'").slick({ 
   initialSlide:idexnrealxx,
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
prevArrow: $("#superplayleft"+jivd[i]+"'.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright"+jivd[i]+"'.$pagenum.''.$gringo.'"),
adaptiveHeight: false });
}else{
$("#arrows"+jivd[i]+"'.$gringo.'").show();
$("#datacase"+jivd[i]+"'.$gringo.'").slick({ 
 initialSlide:idexnrealxx,
   swipe:true,
    lazyLoad:"ondemand",
     focusOnSelect:true,
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
dots:true,
  infinite:true,
prevArrow: $("#superplayleft"+jivd[i]+"'.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright"+jivd[i]+"'.$pagenum.''.$gringo.'"),
adaptiveHeight: false  });   }
$("#datacase"+jivd[i]+"'.$gringo.'").addClass("turmid");
 }
$("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"});
if(mobileboy == 1){
     $("html,body").animate({scrollTop:$("#gotom"+a+"'.$gringo.'").offset().top},"fast");
     setTimeout(function(){
      $("html,body").animate({scrollTop:$("#gotom"+a+"'.$gringo.'").offset().top},"fast");
       $("#supershow").removeClass("blurplaceholderall");
      },1200);   }else{
          $("html,body").animate({scrollTop:$("#goto"+a+"'.$gringo.'").offset().top},"fast");
     setTimeout(function(){
      $("html,body").animate({scrollTop:$("#goto"+a+"'.$gringo.'").offset().top},"fast");
       $("#supershow").removeClass("blurplaceholderall");
      },1200);   }   $("#feedwait").hide();   });     }



function compressor'.$pagenum.''.$gringo.'(a){
  $("#feedwait").show();
   document.getElementById("checkpress'.$pagenum.''.$gringo.'").value=1;
  $("#supershow").addClass("blurplaceholderall");
  $(".superpocket'.$pagenum.'").hide();
   var jivd='.json_encode($favi).';
   var compsizefix = document.getElementById("datacompress");
 var fixwx = parseInt(window.getComputedStyle(compsizefix,null).width);
for( var i =0; i<jivd.length; i++){
   var imagevarc = document.getElementById("image1"+jivd[i]+"'.$gringo.'");
  var iutxt = parseInt(window.getComputedStyle(imagevarc,null).width);
 document.getElementById("holdexpandimage"+jivd[i]+"'.$gringo.'").value=iutxt;
   var ddu = parseInt(window.getComputedStyle(imagevarc,null).height);
  document.getElementById("holdexpandtxt"+jivd[i]+"'.$gringo.'").value=ddu;
$("#datacase"+jivd[i]+"'.$gringo.'").slick("unslick");
var acslide = $("#allowshortimage"+jivd[i]+"'.$gringo.'").val();
if(acslide  ==  1) { 
document.getElementById("allowshortimage"+jivd[i]+"'.$gringo.'").value=0;
document.getElementById("playkey'.$gringo.'").value=0;  }
  $("#datacase"+jivd[i]+"'.$gringo.'").slick({ 
  initialSlide:0,
   swipe:false,
    lazyLoad: "ondemand",
arrows:false,
  slidesToScroll: 1,
  slidesToShow: 1,
speed: 600,
fade: true,
  cssEase: "linear",
dots: false,
  infinite: false,
prevArrow: $("#superplayleft"+jivd[i]+"'.$pagenum.''.$gringo.'"),
nextArrow: $("#superplayright"+jivd[i]+"'.$pagenum.''.$gringo.'"),
adaptiveHeight: false });
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("col-xs-12");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("col-xs-6");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").removeClass("col-sm-6");
$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("col-sm-4");
if(mobileboy == 1){ $("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("teramobile"); }
else{$("#superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").addClass("tera");  }
var checkinfofatex = $("#checkinfostate"+jivd[i]+"'.$gringo.'").val();
 var checkzoomfatex = $("#checkzoom"+jivd[i]+"'.$gringo.'").val();
 var cctypx = $("#type1"+jivd[i]+"'.$gringo.'").val();
 
 if(cctypx==0 || cctypx==100){
  var fixwxm=fixwx-6;
  if(mobileboy == 1){ imagevarc.style.width=+fixwxm+"px";  }
  else{  imagevarc.style.width=+fixwxm+"px";  }
 imagevarc.style.height="auto";}else{
  if(checkinfofatex == 1  ){ $("#image1inside"+jivd[i]+"'.$gringo.'").removeClass("blurplaceholder"); }
  imagevarc.style.overflow="hidden";
 imagevarc.style.height="20em";
 imagevarc.style.width="auto";}

var tset = $("#totalallsets"+jivd[i]+"'.$gringo.'").val();
if(tset > 1){ $("#clone"+jivd[i]+"'.$gringo.'").show(); }
$("#datacase"+jivd[i]+"'.$gringo.'").removeClass("turmid");
document.getElementById("superbody"+jivd[i]+"'.$pagenum.''.$gringo.'").style.padding="3px";
imagevarc.style.borderRadius="6px";} 
$("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'" });
if(mobileboy == 1){
     $("html,body").animate({scrollTop:$("#pressgotom"+a+"'.$gringo.'").offset().top},"fast");
     setTimeout(function(){
      $("html,body").animate({scrollTop:$("#pressgotom"+a+"'.$gringo.'").offset().top},"fast");
       $("#supershow").removeClass("blurplaceholderall");
      },1000);} else{
   $("html,body").animate({scrollTop:$("#pressgoto"+a+"'.$gringo.'").offset().top},"fast");
     setTimeout(function(){
      $("html,body").animate({scrollTop:$("#pressgoto"+a+"'.$gringo.'").offset().top},"fast");
       $("#supershow").removeClass("blurplaceholderall");
      },1000);   }   $("#feedwait").hide();    });
        }










checkoverflowtim'.$pagenum.'=0;
allthumbloaded'.$pagenum.'=0;
  allimageloaded'.$pagenum.'=0;
  var dct="'.$dato.'";
if(dct == 0) {
  allimageloaded'.$pagenum.'="allowbodyhide";  $("#feedwait").hide();  }
  else{  $("#feedwait").show();  }


var tel'.$pagenum.'=document.querySelector("#superpostdatago'.$pagenum.''.$gringo.'");
     tel'.$pagenum.'.classList.add("fadeboyinfeed");
      tt'.$pagenum.'=  setTimeout(function(){
        tel'.$pagenum.'.classList.remove("fadeboyinfeed");},8000)

$(".superinfopocket'.$pagenum.'").hide();
var dct="'.$dato.'";
if(dct == 0) { $("#feedwait").hide();  }else{ $("#feedwait").show(); }
   $("#supershow").isotope("destroy");


      </script>';





$count= 0;   $auto= -1;
$countfinished=0;

 for($i= 0;  $i < $gan; $i++) { 
  $feelstate=$feelychek[$i];
  $fun=$feely1[$i];
  $care=$feely2[$i];
  $fresh=$feely3[$i];
  $lovely=$feely4[$i];
 $commentscount=$fawi[$i];
   $ivd=$favi[$i];
      $dme=$famsg[$i]; 
         $tim=$fatim[$i]; 
     $dti = timeago($tim);
      $pname=$nam[$i];  
       $userid=$fanu[$i];
      $dtup=$fatp[$i];
         $puser=$uuuk[$i]; 
              $pcl=$uuut[$i];  
                $pim=$uuuy[$i];
                  $totalsets=$coun[$i];
        $sim1=$fasm1[$i];
         $sim1ty=$fasm1ty[$i];
         $sim2=$fasm2[$i];
         $sim2ty=$fasm2ty[$i];
         $sim3=$fasm3[$i];
          $sim3ty=$fasm3ty[$i];
           $sim4=$fasm4[$i];
          $sim4ty=$fasm4ty[$i];
            $sim5=$fasm5[$i];
          $sim5ty=$fasm5ty[$i];
            $sim6=$fasm6[$i];
          $sim6ty=$fasm6ty[$i];
            $sim7=$fasm7[$i];
          $sim7ty=$fasm7ty[$i];
            $sim8=$fasm8[$i];
          $sim8ty=$fasm8ty[$i];
            $sim9=$fasm9[$i];
          $sim9ty=$fasm9ty[$i];
            $sim10=$fasm10[$i];
          $sim10ty=$fasm10ty[$i];
            $sim11=$fasm11[$i];
          $sim11ty=$fasm11ty[$i];
            $sim12=$fasm12[$i];
          $sim12ty=$fasm12ty[$i];
            $sim13=$fasm13[$i];
          $sim13ty=$fasm13ty[$i];
            $sim14=$fasm14[$i];
          $sim14ty=$fasm14ty[$i];
            $sim15=$fasm15[$i];
          $sim15ty=$fasm15ty[$i];
            $sim16=$fasm16[$i];
          $sim16ty=$fasm16ty[$i];
           
          
 if($_SESSION['theme']=='0'){ $myemotion="hashtag"; }
    else{ $myemotion="hashtagdark";}  

    
$count++;  $auto++;
if($count == $gan){  $countfinished=1;  }


if($pim == ""){ $pim="blank.png";}

$commentscountreal = $commentscount;
if($commentscount == 0){ $commentscount=""; }

if($fun == 0){ $fun=""; }
if($care == 0){ $care=""; }
if($fresh == 0){ $fresh=""; }
if($lovely == 0){ $lovely=""; }


$act1=" ";
$act2=" ";
$act3=" ";
$act4=" ";


$act1x=" ";
$act2x=" ";
$act3x=" ";
$act4x=" ";


$act1y="opacity:0.6";
$act2y="opacity:0.6";
$act3y="opacity:0.6";
$act4y="opacity:0.6";



$activepad1x=" ";
$activepad2x=" ";
$activepad3x=" ";
$activepad4x=" ";


$activepad1=" ";
$activepad2=" ";
$activepad3=" ";
$activepad4=" ";

 

  $activepad1z="23";
  $activepad2z="23";
   $activepad3z="23";
    $activepad4z="23";


if($feelstate == 1){ 
   $activepad1="ball";  $activepad1z="25";    $act1=$myemotion;  $act1x='hightext'.$ivd.''.$gringo.'';  $act1y="";}
else if($feelstate == 2){ 
   $activepad2="ball"; $act2=$myemotion;   $activepad2z="25";  $act2x='hightext'.$ivd.''.$gringo.'';    $act2y="";}
else if($feelstate == 3){
    $activepad3="ball";  $act3=$myemotion;  $activepad3z="25";  $act3x='hightext'.$ivd.''.$gringo.'';  $act3y="";}
else if($feelstate == 4){
    $activepad4="ball";  $act4=$myemotion;   $activepad4z="25";  $act4x='hightext'.$ivd.''.$gringo.'';  $act4y="";}



$set1="";
$set2="";
$set3="";
$set4="";
$set5="";
$set6="";
$set7="";
$set8="";
$set9="";
$set10="";
$set11="";
$set12="";
$set13="";
$set14="";
$set15="";
$set16="";




$timh1="height:0px";$tims1="data-lazy";$timv1=" ";
$timh2="height:0px";$tims2="data-lazy";$timv2=" ";
$timh3="height:0px";$tims3="data-lazy";$timv3=" ";
$timh4="height:0px";$tims4="data-lazy";$timv4=" ";
$timh5="height:0px";$tims5="data-lazy";$timv5=" ";
$timh6="height:0px";$tims6="data-lazy";$timv6=" ";
$timh7="height:0px";$tims7="data-lazy";$timv7=" ";
$timh8="height:0px";$tims8="data-lazy";$timv8=" ";
$timh9="height:0px";$tims9="data-lazy";$timv9=" ";
$timh10="height:0px";$tims10="data-lazy";$timv10=" ";
$timh11="height:0px";$tims11="data-lazy";$timv11=" ";
$timh12="height:0px";$tims12="data-lazy";$timv12=" ";
$timh13="height:0px";$tims13="data-lazy";$timv13=" ";
$timh14="height:0px";$tims14="data-lazy";$timv14=" ";
$timh15="height:0px";$tims15="data-lazy";$timv15=" ";
$timh16="height:0px";$tims16="data-lazy";$timv16=" ";




echo '
<input  id="type1'.$ivd.''.$gringo.'"  value="'.$sim1ty.'"  hidden>
<input  id="type2'.$ivd.''.$gringo.'"  value="'.$sim2ty.'"  hidden>
<input  id="type3'.$ivd.''.$gringo.'"  value="'.$sim3ty.'"  hidden>
<input  id="type4'.$ivd.''.$gringo.'"  value="'.$sim4ty.'"  hidden>
<input  id="type5'.$ivd.''.$gringo.'"  value="'.$sim5ty.'"  hidden>
<input  id="type6'.$ivd.''.$gringo.'"  value="'.$sim6ty.'"  hidden>
<input  id="type7'.$ivd.''.$gringo.'"  value="'.$sim7ty.'"  hidden>
<input  id="type8'.$ivd.''.$gringo.'"  value="'.$sim8ty.'"  hidden>
<input  id="type9'.$ivd.''.$gringo.'"  value="'.$sim9ty.'"  hidden>
<input  id="type10'.$ivd.''.$gringo.'"  value="'.$sim10ty.'"  hidden>
<input  id="type11'.$ivd.''.$gringo.'"  value="'.$sim11ty.'"  hidden>
<input  id="type12'.$ivd.''.$gringo.'"  value="'.$sim12ty.'"  hidden>
<input  id="type13'.$ivd.''.$gringo.'"  value="'.$sim13ty.'"  hidden>
<input  id="type14'.$ivd.''.$gringo.'"  value="'.$sim14ty.'"  hidden>
<input  id="type15'.$ivd.''.$gringo.'"  value="'.$sim15ty.'"  hidden>
<input  id="type16'.$ivd.''.$gringo.'"  value="'.$sim16ty.'"  hidden>
';


echo '
<input  id="view1'.$ivd.''.$gringo.'"  value="1"  hidden>
<input  id="view2'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view3'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view4'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view5'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view6'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view7'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view8'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view9'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view10'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view11'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view12'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view13'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view14'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view15'.$ivd.''.$gringo.'"  value="0"  hidden>
<input  id="view16'.$ivd.''.$gringo.'"  value="0"  hidden>
';






echo'<script>





function  sizetextitem(a,b,c) {
 
var tt =""+a+"";
  var can = document.querySelector("#"+b+"");
  var canxx = document.querySelector("#"+c+"");
   can.style.fontWeight="bold";
if(mobileboy == 1){
   if(tt.length <= 25) { can.style.fontSize="135%";  canxx.style.display="flex";  canxx.style.alignItems="center";   }
 else if(tt.length <= 60) { can.style.fontSize="125%";  canxx.style.display="flex";  canxx.style.alignItems="center";  }
 else if( tt.length <= 135 ){  can.style.fontSize="120%";  canxx.style.display="flex"; canxx.style.alignItems="center"; }
 else{  can.style.fontSize="120%";  canxx.style.display="flex"; canxx.style.alignItems="center";  } 
}
else{
 if(  tt.length <= 25) { can.style.fontSize="195%";  canxx.style.display="flex";  canxx.style.alignItems="center";   }
 else if(  tt.length <= 60) { can.style.fontSize="170%";  canxx.style.display="flex";  canxx.style.alignItems="center";  }
 else if( tt.length <= 135 ){  can.style.fontSize="160%";  canxx.style.display="flex"; canxx.style.alignItems="center"; }
 else{  can.style.fontSize="159%";  canxx.syle.display="flex"; canxx.style.alignItems="center";  } 
}
}   </script>';





$textonly=0;


if($sim1ty == 0 && $sim1 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="1" hidden>';
$timh1=" ";$tims1="src";$timv1="visibility:hidden";}
else if($sim2ty == 0 && $sim2 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="2" hidden>';
$timh2=" ";$tims2="src";$timv2="visibility:hidden";}
else if($sim3ty == 0 && $sim3 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="3" hidden>';
$timh3=" ";$tims3="src";$timv3="visibility:hidden";}
else if($sim4ty == 0 && $sim4 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="4" hidden>';
$timh4=" ";$tims4="src";$timv4="visibility:hidden";}
else if($sim5ty == 0 && $sim5 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="5" hidden>';
$timh5=" ";$tims5="src";$timv5="visibility:hidden";}
else if($sim6ty == 0 && $sim6 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="6" hidden>';
$timh6=" ";$tims6="src";$timv6="visibility:hidden";}
else if($sim7ty == 0 && $sim7 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="7" hidden>';
$timh7=" ";$tims7="src";$timv7="visibility:hidden";}
else if($sim8ty == 0 && $sim8 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="8" hidden>';
$timh8=" ";$tims8="src";$timv8="visibility:hidden";}
 else if($sim9ty == 0 && $sim9 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="9" hidden>';
$timh9=" ";$tims9="src";$timv9="visibility:hidden";}
 else if($sim10ty == 0 && $sim10 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="10" hidden>';
$timh10=" ";$tims10="src";$timv10="visibility:hidden";}
 else if($sim11ty == 0 && $sim11 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="11" hidden>';
$timh11=" ";$tims11="src";$timv11="visibility:hidden";}
 else if($sim12ty == 0 && $sim12 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="12" hidden>';
$timh12=" ";$tims12="src";$timv12="visibility:hidden";}
 else if($sim13ty == 0 && $sim13 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="13" hidden>';
$timh13=" ";$tims13="src";$timv13="visibility:hidden";}
 else if($sim14ty == 0 && $sim14 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="14" hidden>';
$timh14=" ";$tims14="src";$timv14="visibility:hidden";}
 else if($sim15ty == 0 && $sim15 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="15" hidden>';
$timh15=" ";$tims15="src";$timv15="visibility:hidden";}
 else if($sim16ty == 0 && $sim16 != " "){ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="16" hidden>';
$timh16=" "; $tims16="src"; $timv16="visibility:hidden";}

else{ echo'<input  id="heightstate'.$ivd.''.$gringo.'" value="1" hidden>'; $textonly=1;  }




$profileinfostate=0;

 if($sim2ty == 0 && $sim2 != " "){ $profileinfostate=1;}
else if($sim3ty == 0 && $sim3 != " "){ $profileinfostate=1;}
else if($sim4ty == 0 && $sim4 != " "){$profileinfostate=1;}
else if($sim5ty == 0 && $sim5 != " "){ $profileinfostate=1;}
else if($sim6ty == 0 && $sim6 != " "){$profileinfostate=1;}
else if($sim7ty == 0 && $sim7 != " "){ $profileinfostate=1;}
else if($sim8ty == 0 && $sim8 != " "){ $profileinfostate=1;}
 else if($sim9ty == 0 && $sim9 != " "){ $profileinfostate=1;}
 else if($sim10ty == 0 && $sim10 != " "){ $profileinfostate=1;}
 else if($sim11ty == 0 && $sim11 != " "){$profileinfostate=1;}
 else if($sim12ty == 0 && $sim12 != " "){$profileinfostate=1;}
 else if($sim13ty == 0 && $sim13 != " "){$profileinfostate=1;}
 else if($sim14ty == 0 && $sim14 != " "){ $profileinfostate=1;}
 else if($sim15ty == 0 && $sim15 != " "){$profileinfostate=1;}
 else if($sim16ty == 0 && $sim16 != " "){ $profileinfostate=1;}

if($totalsets == 1){ $infoicon=""; }else{
  if($profileinfostate==0){ $infoicon='<i class="far fa-comment-dots"></i>';}
  else if($profileinfostate==1){$infoicon='<i class="fas fa-camera"></i>';} }




 if($sim1 != " "){  
if($sim1ty == 0){  
$set1=' <div data-index="1" class="col-xs-12" style="outline:none;padding:0px;'.$timh1.';">
<img  '.$tims1.'="images/thumb/thumb'.$sim1.'"  class="blurplaceholder"    id="thumb1'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims1.'="images/wall/'.$sim1.'"  class="zuzax juju firstim"  id="image1'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;padding:0px;'.$timv1.'"  height="auto" width="100%" />
        </div>';  }
    else{
 if($sim1ty == 1){$texttheme1="textblue";}
else if($sim1ty == 2){$texttheme1="textwhite";}
else if($sim1ty == 3){$texttheme1="textblood";}
else if($sim1ty == 4){$texttheme1="textlightblue";}
else if($sim1ty == 5){$texttheme1="textgray";}
else if($sim1ty == 6){$texttheme1="textpurple";}
else if($sim1ty == 7){$texttheme1="textpink";}
else if($sim1ty == 8){$texttheme1="textblack";}
else if($sim1ty == 9){$texttheme1="textlightcream";}
else if($sim1ty == 10){$texttheme1="textorange";}
else {$texttheme1="textlemon";}
 $sim1hot=hashtagplayx($sim1,$ivd,$gringo);
 $sim1hot=usertagplayx($sim1hot,$ivd,$gringo);
$set1='
<div  data-index="1"  style="outline:none;">
<div  id="image1'.$ivd.''.$gringo.'"  onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);" class="zuzax juju '.$texttheme1.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px;">
<div  id="image1inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px;"><mando  class="smoothfont">
'.$sim1hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim1.'","image1inside'.$ivd.''.$gringo.'","image1'.$ivd.''.$gringo.'");</script>';}}








       if($sim2 != " "){  
     if($sim2ty == 0){  
$set2=' <div data-index="2" class="col-xs-12 " style="outline:none;padding:0px;'.$timh2.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims2.'="images/thumb/thumb'.$sim2.'"  class="blurplaceholder"    id="thumb2'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims2.'="images/wall/'.$sim2.'"  class="zuzax juju"  id="image2'.$ivd.''.$gringo.'" 
  onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;border-radius:0px;padding:0px;'.$timv2.'"  height="auto" width="100%" />
         </div> </div>'; }
         else{
 if($sim2ty == 1){$texttheme2="textblue";}
else if($sim2ty == 2){$texttheme2="textwhite";}
else if($sim2ty == 3){$texttheme2="textblood";}
else if($sim2ty == 4){$texttheme2="textlightblue";}
else if($sim2ty == 5){$texttheme2="textgray";}
else if($sim2ty == 6){$texttheme2="textpurple";}
else if($sim2ty == 7){$texttheme2="textpink";}
else if($sim2ty == 8){$texttheme2="textblack";}
else if($sim2ty == 9){$texttheme2="textlightcream";}
else if($sim2ty == 10){$texttheme2="textorange";}
else {$texttheme2="textlemon";}
 $sim2hot=hashtagplayx($sim2,$ivd,$gringo);  
 $sim2hot=usertagplayx($sim2hot,$ivd,$gringo);
$set2='
<div  data-index="2"  style="outline:none;" >
<div  id="image2'.$ivd.''.$gringo.'"   onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme2.' superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image2inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px;font-weight:400"><mando class="smoothfont">
'.$sim2hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim2.'","image2inside'.$ivd.''.$gringo.'","image2'.$ivd.''.$gringo.'");</script>';}}









     if($sim3 != " "){  
      if($sim3ty == 0){  
$set3=' <div  data-index="3"  class="col-xs-12" style="outline:none;padding:0px;'.$timh3.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims3.'="images/thumb/thumb'.$sim3.'"  class="blurplaceholder"    id="thumb3'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims3.'="images/wall/'.$sim3.'"  class="zuzax juju"  id="image3'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;border-radius:0px;padding:0px;'.$timv3.'"  height="auto" width="100%" />
         </div> </div>';
         }
 else{
 if($sim3ty == 1){$texttheme3="textblue";}
else if($sim3ty == 2){$texttheme3="textwhite";}
else if($sim3ty == 3){$texttheme3="textblood";}
else if($sim3ty == 4){$texttheme3="textlightblue";}
else if($sim3ty == 5){$texttheme3="textgray";}
else if($sim3ty == 6){$texttheme3="textpurple";}
else if($sim3ty == 7){$texttheme3="textpink";}
else if($sim3ty == 8){$texttheme3="textblack";}
else if($sim3ty == 9){$texttheme3="textlightcream";}
else if($sim3ty == 10){$texttheme3="textorange";}
else {$texttheme3="textlemon";}
 $sim3hot=hashtagplayx($sim3,$ivd,$gringo);
 $sim3hot=usertagplayx($sim3hot,$ivd,$gringo);
$set3='
<div  data-index="3"  style="outline:none;">
<div  id="image3'.$ivd.''.$gringo.'"   onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme3.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image3inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim3hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim3.'","image3inside'.$ivd.''.$gringo.'","image3'.$ivd.''.$gringo.'");</script>';}}






     if($sim4 != " "){  
      if($sim4ty == 0){  
$set4=' <div  data-index="4"  class="col-xs-12" style="outline:none;padding:0px;'.$timh4.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims4.'="images/thumb/thumb'.$sim4.'"  class="blurplaceholder"    id="thumb4'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims4.'="images/wall/'.$sim4.'"  class="zuzax juju"  id="image4'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;border-radius:0px;padding:0px;'.$timv4.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim4ty == 1){$texttheme4="textblue";}
else if($sim4ty == 2){$texttheme4="textwhite";}
else if($sim4ty == 3){$texttheme4="textblood";}
else if($sim4ty == 4){$texttheme4="textlightblue";}
else if($sim4ty == 5){$texttheme4="textgray";}
else if($sim4ty == 6){$texttheme4="textpurple";}
else if($sim4ty == 7){$texttheme4="textpink";}
else if($sim4ty == 8){$texttheme4="textblack";}
else if($sim4ty == 9){$texttheme4="textlightcream";}
else if($sim4ty == 10){$texttheme4="textorange";}
else {$texttheme4="textlemon";}
 $sim4hot=hashtagplayx($sim4,$ivd,$gringo);
 $sim4hot=usertagplayx($sim4hot,$ivd,$gringo);
$set4='
<div  data-index="4"  style="outline:none;">
<div  id="image4'.$ivd.''.$gringo.'"  onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme4.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image4inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim4hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim4.'","image4inside'.$ivd.''.$gringo.'","image4'.$ivd.''.$gringo.'");</script>';}}




     if($sim5 != " "){  
      if($sim5ty == 0){  
$set5=' <div  data-index="5"  class="col-xs-12" style="outline:none;padding:0px;'.$timh5.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims5.'="images/thumb/thumb'.$sim5.'"  class="blurplaceholder"    id="thumb5'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims5.'="images/wall/'.$sim5.'"  class="zuzax juju"  id="image5'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;border-radius:0px;padding:0px;'.$timv5.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim5ty == 1){$texttheme5="textblue";}
else if($sim5ty == 2){$texttheme5="textwhite";}
else if($sim5ty == 3){$texttheme5="textblood";}
else if($sim5ty == 4){$texttheme5="textlightblue";}
else if($sim5ty == 5){$texttheme5="textgray";}
else if($sim5ty == 6){$texttheme5="textpurple";}
else if($sim5ty == 7){$texttheme5="textpink";}
else if($sim5ty == 8){$texttheme5="textblack";}
else if($sim5ty == 9){$texttheme5="textlightcream";}
else if($sim5ty == 10){$texttheme5="textorange";}
else {$texttheme5="textlemon";}
 $sim5hot=hashtagplayx($sim5,$ivd,$gringo);
 $sim5hot=usertagplayx($sim5hot,$ivd,$gringo);
$set5='
<div  data-index="5"  style="outline:none;">
<div  id="image5'.$ivd.''.$gringo.'"   onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme5.' superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image5inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><span class="smoothfont">
'.$sim5hot.'</span></div> </div> </div>';
echo '<script>sizetextitem("'.$sim5.'","image5inside'.$ivd.''.$gringo.'","image5'.$ivd.''.$gringo.'");</script>';}}




     if($sim6 != " "){  
      if($sim6ty == 0){  
$set6=' <div  data-index="6"  class="col-xs-12" style="outline:none;padding:0px;'.$timh6.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims6.'="images/thumb/thumb'.$sim6.'"  class="blurplaceholder"    id="thumb6'.$ivd.''.$gringo.'"  style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims6.'="images/wall/'.$sim6.'"  class="zuzax juju"  id="image6'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  style="position:relative;border-radius:0px;padding:0px;'.$timv6.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim6ty == 1){$texttheme6="textblue";}
else if($sim6ty == 2){$texttheme6="textwhite";}
else if($sim6ty == 3){$texttheme6="textblood";}
else if($sim6ty == 4){$texttheme6="textlightblue";}
else if($sim6ty == 5){$texttheme6="textgray";}
else if($sim6ty == 6){$texttheme6="textpurple";}
else if($sim6ty == 7){$texttheme6="textpink";}
else if($sim6ty == 8){$texttheme6="textblack";}
else if($sim6ty == 9){$texttheme6="textlightcream";}
else if($sim6ty == 10){$texttheme6="textorange";}
else {$texttheme6="textlemon";}
 $sim6hot=hashtagplayx($sim6,$ivd,$gringo);
 $sim6hot=usertagplayx($sim6hot,$ivd,$gringo);
$set6='
<div  data-index="6"  style="outline:none;">
<div  id="image6'.$ivd.''.$gringo.'"  onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"    class="zuzax juju '.$texttheme6.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image6inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim6hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim6.'","image6inside'.$ivd.''.$gringo.'","image6'.$ivd.''.$gringo.'");</script>';}}






     if($sim7 != " "){  
      if($sim7ty == 0){  
$set7=' <div  data-index="7"  class="col-xs-12" style="outline:none;padding:0px;'.$timh7.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims7.'="images/thumb/thumb'.$sim7.'"  class="blurplaceholder"    id="thumb7'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims7.'="images/wall/'.$sim7.'"  class="zuzax juju"  id="image7'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv7.'"  height="auto" width="100%" />
   </div> </div>'; }
 else{
 if($sim7ty == 1){$texttheme7="textblue";}
else if($sim7ty == 2){$texttheme7="textwhite";}
else if($sim7ty == 3){$texttheme7="textblood";}
else if($sim7ty == 4){$texttheme7="textlightblue";}
else if($sim7ty == 5){$texttheme7="textgray";}
else if($sim7ty == 6){$texttheme7="textpurple";}
else if($sim7ty == 7){$texttheme7="textpink";}
else if($sim7ty == 8){$texttheme7="textblack";}
else if($sim7ty == 9){$texttheme7="textlightcream";}
else if($sim7ty == 10){$texttheme7="textorange";}
else {$texttheme7="textlemon";}
 $sim7hot=hashtagplayx($sim7,$ivd,$gringo);
 $sim7hot=usertagplayx($sim7hot,$ivd,$gringo);
$set7='
<div  data-index="7"  style="outline:none;">
<div  id="image7'.$ivd.''.$gringo.'"   onclick="javascript:zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme7.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image7inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim7hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim7.'","image7inside'.$ivd.''.$gringo.'","image7'.$ivd.''.$gringo.'");</script>';}}








     if($sim8 != " "){  
      if($sim8ty == 0){  
$set8=' <div  data-index="8"  class="col-xs-12" style="outline:none;padding:0px;'.$timh8.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims8.'="images/thumb/thumb'.$sim8.'"  class="blurplaceholder"    id="thumb8'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims8.'="images/wall/'.$sim8.'"  class="zuzax juju"  id="image8'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv8.'"  height="auto" width="100%" />
         </div> </div>';}
 else{
 if($sim8ty == 1){$texttheme8="textblue";}
else if($sim8ty == 2){$texttheme8="textwhite";}
else if($sim8ty == 3){$texttheme8="textblood";}
else if($sim8ty == 4){$texttheme8="textlightblue";}
else if($sim8ty == 5){$texttheme8="textgray";}
else if($sim8ty == 6){$texttheme8="textpurple";}
else if($sim8ty == 7){$texttheme8="textpink";}
else if($sim8ty == 8){$texttheme8="textblack";}
else if($sim8ty == 9){$texttheme8="textlightcream";}
else if($sim8ty == 10){$texttheme8="textorange";}
else {$texttheme8="textlemon";}
 $sim8hot=hashtagplayx($sim8,$ivd,$gringo);
 $sim8hot=usertagplayx($sim8hot,$ivd,$gringo);
$set8='
<div  data-index="8"  style="outline:none;">
<div  id="image8'.$ivd.''.$gringo.'"   onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme8.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image8inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim8hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim8.'","image8inside'.$ivd.''.$gringo.'","image8'.$ivd.''.$gringo.'");</script>';}}











     if($sim9 != " "){  
      if($sim9ty == 0){  
$set9=' <div  data-index="9"  class="col-xs-12" style="outline:none;padding:0px;'.$timh9.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims9.'="images/thumb/thumb'.$sim9.'"  class="blurplaceholder"    id="thumb9'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims9.'="images/wall/'.$sim9.'"  class="zuzax juju"  id="image9'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv9.'"  height="auto" width="100%" />
         </div> </div>';}
 else{
 if($sim9ty == 1){$texttheme9="textblue";}
else if($sim9ty == 2){$texttheme9="textwhite";}
else if($sim9ty == 3){$texttheme9="textblood";}
else if($sim9ty == 4){$texttheme9="textlightblue";}
else if($sim9ty == 5){$texttheme9="textgray";}
else if($sim9ty == 6){$texttheme9="textpurple";}
else if($sim9ty == 7){$texttheme9="textpink";}
else if($sim9ty == 8){$texttheme9="textblack";}
else if($sim9ty == 9){$texttheme9="textlightcream";}
else if($sim9ty == 10){$texttheme9="textorange";}
else {$texttheme9="textlemon";}
 $sim9hot=hashtagplayx($sim9,$ivd,$gringo);
 $sim9hot=usertagplayx($sim9hot,$ivd,$gringo);
$set9='
<div  data-index="9"  style="outline:none;">
<div  id="image9'.$ivd.''.$gringo.'"   onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"   class="zuzax juju '.$texttheme9.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image9inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim9hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim9.'","image9inside'.$ivd.''.$gringo.'","image9'.$ivd.''.$gringo.'");</script>';}}







     if($sim10 != " "){  
      if($sim10ty == 0){  
$set10=' <div  data-index="10"  class="col-xs-12" style="outline:none;padding:0px;'.$timh10.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims10.'="images/thumb/thumb'.$sim10.'"  class="blurplaceholder"    id="thumb10'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims10.'="images/wall/'.$sim10.'"  class="zuzax juju"  id="image10'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv10.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim10ty == 1){$texttheme10="textblue";}
else if($sim10ty == 2){$texttheme10="textwhite";}
else if($sim10ty == 3){$texttheme10="textblood";}
else if($sim10ty == 4){$texttheme10="textlightblue";}
else if($sim10ty == 5){$texttheme10="textgray";}
else if($sim10ty == 6){$texttheme10="textpurple";}
else if($sim10ty == 7){$texttheme10="textpink";}
else if($sim10ty == 8){$texttheme10="textblack";}
else if($sim10ty == 9){$texttheme10="textlightcream";}
else if($sim10ty == 10){$texttheme10="textorange";}
else {$texttheme10="textlemon";}
 $sim10hot=hashtagplayx($sim10,$ivd,$gringo);
 $sim10hot=usertagplayx($sim10hot,$ivd,$gringo);
$set10='
<div  data-index="10"  style="outline:none;">
<div  id="image10'.$ivd.''.$gringo.'"  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme10.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image10inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim10hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim10.'","image10inside'.$ivd.''.$gringo.'","image10'.$ivd.''.$gringo.'");</script>';}}











     if($sim11 != " "){  
      if($sim11ty == 0){  
$set11=' <div  data-index="11"  class="col-xs-12" style="outline:none;padding:0px;'.$timh11.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims11.'="images/thumb/thumb'.$sim11.'"  class="blurplaceholder"    id="thumb11'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims11.'="images/wall/'.$sim11.'"  class="zuzax juju"  id="image11'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv11.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim11ty == 1){$texttheme11="textblue";}
else if($sim11ty == 2){$texttheme11="textwhite";}
else if($sim11ty == 3){$texttheme11="textblood";}
else if($sim11ty == 4){$texttheme11="textlightblue";}
else if($sim11ty == 5){$texttheme11="textgray";}
else if($sim11ty == 6){$texttheme11="textpurple";}
else if($sim11ty == 7){$texttheme11="textpink";}
else if($sim11ty == 8){$texttheme11="textblack";}
else if($sim11ty == 9){$texttheme11="textlightcream";}
else if($sim11ty == 10){$texttheme11="textorange";}
else {$texttheme11="textlemon";}
 $sim11hot=hashtagplayx($sim11,$ivd,$gringo);
 $sim11hot=usertagplayx($sim11hot,$ivd,$gringo);
$set11='
<div  data-index="11"  style="outline:none;">
<div  id="image11'.$ivd.''.$gringo.'"  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme11.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image11inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim11hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim11.'","image11inside'.$ivd.''.$gringo.'","image11'.$ivd.''.$gringo.'");</script>';}}









     if($sim12 != " "){  
      if($sim12ty == 0){  
$set12=' <div  data-index="12"  class="col-xs-12" style="outline:none;padding:0px;'.$timh12.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims12.'="images/thumb/thumb'.$sim12.'"  class="blurplaceholder"    id="thumb12'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims12.'="images/wall/'.$sim12.'"  class="zuzax juju"  id="image12'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv12.'"  height="auto" width="100%" />
         </div> </div>';}
 else{
 if($sim12ty == 1){$texttheme12="textblue";}
else if($sim12ty == 2){$texttheme12="textwhite";}
else if($sim12ty == 3){$texttheme12="textblood";}
else if($sim12ty == 4){$texttheme12="textlightblue";}
else if($sim12ty == 5){$texttheme12="textgray";}
else if($sim12ty == 6){$texttheme12="textpurple";}
else if($sim12ty == 7){$texttheme12="textpink";}
else if($sim12ty == 8){$texttheme12="textblack";}
else if($sim12ty == 9){$texttheme12="textlightcream";}
else if($sim12ty == 10){$texttheme12="textorange";}
else {$texttheme12="textlemon";}
 $sim12hot=hashtagplayx($sim12,$ivd,$gringo);
 $sim12hot=usertagplayx($sim12hot,$ivd,$gringo);
$set12='
<div  data-index="12"  style="outline:none;">
<div  id="image12'.$ivd.''.$gringo.'"   onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);" class="zuzax juju '.$texttheme12.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image12inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim12hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim12.'","image12inside'.$ivd.''.$gringo.'","image12'.$ivd.''.$gringo.'");</script>';}}








     if($sim13 != " "){  
      if($sim13ty == 0){  
$set13=' <div  data-index="13"  class="col-xs-12" style="outline:none;padding:0px;'.$timh13.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims13.'="images/thumb/thumb'.$sim13.'"  class="blurplaceholder"    id="thumb13'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims13.'="images/wall/'.$sim13.'"  class="zuzax juju"  id="image13'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv13.'"  height="auto" width="100%" />
       </div> </div>';}
 else{
 if($sim13ty == 1){$texttheme13="textblue";}
else if($sim13ty == 2){$texttheme13="textwhite";}
else if($sim13ty == 3){$texttheme13="textblood";}
else if($sim13ty == 4){$texttheme13="textlightblue";}
else if($sim13ty == 5){$texttheme13="textgray";}
else if($sim13ty == 6){$texttheme13="textpurple";}
else if($sim13ty == 7){$texttheme13="textpink";}
else if($sim13ty == 8){$texttheme13="textblack";}
else if($sim13ty == 9){$texttheme13="textlightcream";}
else if($sim13ty == 10){$texttheme13="textorange";}
else {$texttheme13="textlemon";}
 $sim13hot=hashtagplayx($sim13,$ivd,$gringo);
 $sim13hot=usertagplayx($sim13hot,$ivd,$gringo);
$set13='
<div  data-index="13"  style="outline:none;">
<div  id="image13'.$ivd.''.$gringo.'"  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme13.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image13inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim13hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim13.'","image13inside'.$ivd.''.$gringo.'","image13'.$ivd.''.$gringo.'");</script>';}}










     if($sim14 != " "){  
      if($sim14ty == 0){  
$set14=' <div  data-index="14"  class="col-xs-12" style="outline:none;padding:0px;'.$timh14.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims14.'="images/thumb/thumb'.$sim14.'"  class="blurplaceholder"    id="thumb14'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims14.'="images/wall/'.$sim14.'"  class="zuzax juju"  id="image14'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv14.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim14ty == 1){$texttheme14="textblue";}
else if($sim14ty == 2){$texttheme14="textwhite";}
else if($sim14ty == 3){$texttheme14="textblood";}
else if($sim14ty == 4){$texttheme14="textlightblue";}
else if($sim14ty == 5){$texttheme14="textgray";}
else if($sim14ty == 6){$texttheme14="textpurple";}
else if($sim14ty == 7){$texttheme14="textpink";}
else if($sim14ty == 8){$texttheme14="textblack";}
else if($sim14ty == 9){$texttheme14="textlightcream";}
else if($sim14ty == 10){$texttheme14="textorange";}
else {$texttheme14="textlemon";}
 $sim14hot=hashtagplayx($sim14,$ivd,$gringo);
 $sim14hot=usertagplayx($sim14hot,$ivd,$gringo);
$set14='
<div  data-index="14"  style="outline:none;">
<div  id="image14'.$ivd.''.$gringo.'"   onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);" class="zuzax juju '.$texttheme14.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image14inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim14hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim14.'","image14inside'.$ivd.''.$gringo.'","image14'.$ivd.''.$gringo.'");</script>';}}










     if($sim15 != " "){  
      if($sim15ty == 0){  
$set15=' <div  data-index="15"  class="col-xs-12" style="outline:none;padding:0px;'.$timh15.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims15.'="images/thumb/thumb'.$sim15.'"  class="blurplaceholder"    id="thumb15'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims15.'="images/wall/'.$sim15.'"  class="zuzax juju"  id="image15'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv15.'"  height="auto" width="100%" />
        </div> </div>';}
 else{
 if($sim15ty == 1){$texttheme15="textblue";}
else if($sim15ty == 2){$texttheme15="textwhite";}
else if($sim15ty == 3){$texttheme15="textblood";}
else if($sim15ty == 4){$texttheme15="textlightblue";}
else if($sim15ty == 5){$texttheme15="textgray";}
else if($sim15ty == 6){$texttheme15="textpurple";}
else if($sim15ty == 7){$texttheme15="textpink";}
else if($sim15ty == 8){$texttheme15="textblack";}
else if($sim15ty == 9){$texttheme15="textlightcream";}
else if($sim15ty == 10){$texttheme15="textorange";}
else {$texttheme15="textlemon";}
 $sim15hot=hashtagplayx($sim15,$ivd,$gringo);
 $sim15hot=usertagplayx($sim15hot,$ivd,$gringo);
$set15='
<div  data-index="15"  style="outline:none;">
<div  id="image15'.$ivd.''.$gringo.'"  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme15.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:6px;justify-content:center;height:0px">
<div  id="image15inside'.$ivd.''.$gringo.'"  style="padding:0px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim15hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim15.'","image15inside'.$ivd.''.$gringo.'","image15'.$ivd.''.$gringo.'");</script>';}}









     if($sim16 != " "){  
      if($sim16ty == 0){  
$set16=' <div  data-index="16"  class="col-xs-12" style="outline:none;padding:0px;'.$timh16.'">
<div class="superpocket'.$pagenum.'">
<img  '.$tims16.'="images/thumb/thumb'.$sim16.'"  class="blurplaceholder"    id="thumb16'.$ivd.''.$gringo.'"  
style="position:absolute;border-radius:0px;padding:0px;margin-left:0.5%"  height="auto" width="99%" />
<img  '.$tims16.'="images/wall/'.$sim16.'"  class="zuzax juju"  id="image16'.$ivd.''.$gringo.'" 
  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  
style="position:relative;border-radius:0px;padding:0px;'.$timv16.'"  height="auto" width="100%" />
       </div> </div>';}
 else{
 if($sim16ty == 1){$texttheme16="textblue";}
else if($sim16ty == 2){$texttheme16="textwhite";}
else if($sim16ty == 3){$texttheme16="textblood";}
else if($sim16ty == 4){$texttheme16="textlightblue";}
else if($sim16ty == 5){$texttheme16="textgray";}
else if($sim16ty == 6){$texttheme16="textpurple";}
else if($sim16ty == 7){$texttheme16="textpink";}
else if($sim16ty == 8){$texttheme16="textblack";}
else if($sim16ty == 9){$texttheme16="textlightcream";}
else if($sim16ty == 10){$texttheme16="textorange";}
else {$texttheme16="textlemon";}
 $sim16hot=hashtagplayx($sim16,$ivd,$gringo);
 $sim16hot=usertagplayx($sim16hot,$ivd,$gringo);
$set16='
<div  data-index="16"  style="outline:none;">
<div  id="image16'.$ivd.''.$gringo.'"  onclick="javascript: zoominshortimages'.$ivd.''.$pagenum.''.$gringo.'(0,0,0);"  class="zuzax juju '.$texttheme16.'
superpocket'.$pagenum.'"   
style="padding:0px;text-align:center;overflow:auto;border-radius:0px;justify-content:center;height:0px">
<div  id="image16inside'.$ivd.''.$gringo.'"  style="padding:6px;text-align:center;height:auto;font-size:0px"><mando  class="smoothfont">
'.$sim16hot.'</mando></div> </div> </div>';
echo '<script>sizetextitem("'.$sim16.'","image16inside'.$ivd.''.$gringo.'","image16'.$ivd.''.$gringo.'");</script>';}}











        $data1='

        '.$set1.'
        '.$set2.'
        '.$set3.'
        '.$set4.'
        '.$set5.'
        '.$set6.'
        '.$set7.'
        '.$set8.'
        '.$set9.'
        '.$set10.'
        '.$set11.'
        '.$set12.'
        '.$set13.'
        '.$set14.'
        '.$set15.'
        '.$set16.'

        
            '; 


      include("postlayout.php");

       echo $datalayout;    }  


echo '  </div>';





if($pagenum == $last){   }

else{

if($feedhoop == 3){

     echo'<script>
    function plusfeed'.$pagenum.''.$gringo.'(a,b,c,d,e,f){

      $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 

var i = "'.$idlock.'";
var j = "'.$name.'";

      var url="shootfeedspagination.php";
      var dd=0;
       $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c,mem4:dd,mem5:e,mem6:f,mem9:i,mem10:j}, function(data){
            $("#supershow").html(data).show();
            $("#feedwait").show();
             $("#addfeedbutton'.$pagenum.''.$gringo.'").hide();});}</script> ';

       }else{

    echo' <script>
    function plusfeed'.$pagenum.''.$gringo.'(a,b,c,d,e,f){

      $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 


var i = "'.$idlock.'";
var j = "'.$name.'";


      var url="shootfeedspagination.php";
       $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c,mem4:d,mem5:e,mem6:f,mem9:i,mem10:j}, function(data){
            $("#supershow'.$next.''.$gringo.'").html(data).show();
             $("#addfeedbutton'.$pagenum.''.$gringo.'").hide();});}</script> '; 

              }





        echo '
     


  <div class="col-xs-12  superpostitem'.$gringo.'"   id="addfeedbutton'.$pagenum.''.$gringo.'"    style="height:auto;width:100%;margin:0 auto;margin-top:35px;padding-bottom:5px;">  



<div id="plusiconout'.$pagenum.''.$gringo.'"  class="'.$joinbuttonplus.' zuzax juju" 
 style="width:3em;height:3em;margin-top:16px;padding:6px;text-align:center;margin:0 auto;visibility:hidden" 
 onmousedown="javascript:plusfeed'.$pagenum.''.$gringo.'('.$next.','.$pager.','.$last.','.$feedhoop.','.$gringo.','.$d.');"> 
   <div id="plusicon'.$pagenum.''.$gringo.'" style="font-size:100%;font-weight:bolder;margin-top:0.35em;margin-left:0px;">
     <i class="fas fa-plus"></i>   </div>  </div>  

     </div>

    


<div  id="supershow'.$next.''.$gringo.'"  style="padding:0px">  </div>

 ';

     }   

     echo'
<script>
  $("#superpostdatago'.$pagenum.''.$gringo.'").ready(function(){
  $("#superpostdatago'.$pagenum.''.$gringo.'").imagesLoaded( function(){
    $("#superpostdatago'.$pagenum.''.$gringo.'").isotope({
      itemSelector : ".superpostitem'.$pagenum.''.$gringo.'"
    });});});  </script>';


                     ?>
          
   

