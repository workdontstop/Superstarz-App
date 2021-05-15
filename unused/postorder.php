
<style> 
                   
                 
.cloudyyqq{background-color:rgba(000,000,005,0.8);color:#ffffff;width:auto;height:26px;padding:0px;margin: auto; border-radius: 5px;padding:0px;-moz-box-shadow: 0 0 4px#0b1728; -webkit-box-shadow: 0 04px#0b1728;box-shadow: 0 0 15px#0b1728;}
 </style>


<?php  


   require('dataco.php');
require('phpopenx.php'); 

 include('exit.php');

   $d=$_SESSION['numuser'];


$m1='0';$m2='0';$m3='0';$m4='0';


$m5='0';$m6='0';$m7='0';$m8='0';



$m1b='0';$m2b='0';$m3b='0';$m4b='0';


$m5b='0';$m6b='0';$m7b='0';$m8b='0';


$numitems=$_POST['lum'];


$m1=$_POST['mem1'];

$position1=$_POST['mem2'];

$des1=$_POST['mem3'];



    $m2=$_POST['tem1'];

$position2=$_POST['tem2'];

$des2=$_POST['tem3'];



    $m3=$_POST['yem1'];

$position3=$_POST['yem2'];

$des3=$_POST['yem3'];



    $m4=$_POST['zem1'];

$position4=$_POST['zem2'];

$des4=$_POST['zem3'];





$m5=$_POST['mem1a'];

$position5=$_POST['mem2a'];

$des5=$_POST['mem3a'];



    $m6=$_POST['tem1a'];

$position6=$_POST['tem2a'];

$des6=$_POST['tem3a'];



    $m7=$_POST['yem1a'];

$position7=$_POST['yem2a'];

$des7=$_POST['yem3a'];



    $m8=$_POST['zem1a'];

$position8=$_POST['zem2a'];

$des8=$_POST['zem3a'];




$m1b=$_POST['mem1b'];

$position1b=$_POST['mem2b'];

$des1b=$_POST['mem3b'];



    $m2b=$_POST['tem1b'];

$position2b=$_POST['tem2b'];

$des2b=$_POST['tem3b'];



    $m3b=$_POST['yem1b'];

$position3b=$_POST['yem2b'];

$des3b=$_POST['yem3b'];



    $m4b=$_POST['zem1b'];

$position4b=$_POST['zem2b'];

$des4b=$_POST['zem3b'];





$m5b=$_POST['mem1ab'];

$position5b=$_POST['mem2ab'];

$des5b=$_POST['mem3ab'];



    $m6b=$_POST['tem1ab'];

$position6b=$_POST['tem2ab'];

$des6b=$_POST['tem3ab'];



    $m7b=$_POST['yem1ab'];

$position7b=$_POST['yem2ab'];

$des7b=$_POST['yem3ab'];



    $m8b=$_POST['zem1ab'];

$position8b=$_POST['zem2ab'];

$des8b=$_POST['zem3ab'];






 $act=$_POST['act'];

        





switch($m1){
    case 0:
        break;
    default:
        $name=$m1;
$position=$position1;
$des=$des1;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 
switch($m2){
    case 0:
        break;
    default:
        $name=$m2;
$position=$position2;
$des=$des2;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 
switch($m3){
    case 0:
        break;
    default:
        $name=$m3;
$position=$position3;
$des=$des3;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 

 
switch($m4){
    case 0:
        break;
    default:
        $name=$m4;
$position=$position4;
$des=$des4;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 

 
  
switch($m5){
    case 0:
        break;
    default:
        $name=$m5;
$position=$position5;
$des=$des5;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 




 
switch($m6){
    case 0:
        break;
    default:
        $name=$m6;
$position=$position6;
$des=$des6;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 



 
switch($m7){
    case 0:
        break;
    default:
        $name=$m7;
$position=$position7;
$des=$des7;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 




 
switch($m8){
    case 0:
        break;
    default:
        $name=$m8;
$position=$position8;
$des=$des8;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 








switch($m1b){
    case 0:
        break;
    default:
        $name=$m1b;
$position=$position1b;
$des=$des1b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 
switch($m2b){
    case 0:
        break;
    default:
        $name=$m2b;
$position=$position2b;
$des=$des2b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 
switch($m3b){
    case 0:
        break;
    default:
        $name=$m3b;
$position=$position3b;
$des=$des3b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 

 
switch($m4b){
    case 0:
        break;
    default:
        $name=$m4b;
$position=$position4b;
$des=$des4b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 

 
  
switch($m5b){
    case 0:
        break;
    default:
        $name=$m5b;
$position=$position5b;
$des=$des5b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 




 
switch($m6b){
    case 0:
        break;
    default:
        $name=$m6b;
$position=$position6b;
$des=$des6b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 



 
switch($m7b){
    case 0:
        break;
    default:
        $name=$m7b;
$position=$position7b;
$des=$des7b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 




 
switch($m8b){
    case 0:
        break;
    default:
        $name=$m8b;
$position=$position8b;
$des=$des8b;
   if( $position >  $des) {
       $konny=$name; $ponny=$des;
      $subby =$position  - $des;
       
        switch($act){
        case 0:
     $all='-124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' -124.5 *  '.$subby.'/400'; 
     }
       
   }
else if( $des  >   $position) {
       $konny=$name;  $ponny=$des;
       $subby = $des - $position ; 
     switch($act){
        case 0:
     $all='124.5 * '.$subby.'  ';
    break;
    case 1:
    $all=' 124.5 *  '.$subby.'/400'; 
     }    
   }
        else{
            $konny=" ";  $ponny=" ";
   $subby=" "; 
   $all=" "; 
        $name=" ";   
        }
     
     echo'

<script>
 $("#swingi'.$name.'").ready(function(){
 hhx= document.getElementById("kung'.$konny.'");
  hhx.style.position="relative";
   var ycc =  '.$all.';
  $("#kung'.$konny.'").animate({
     left:ycc,top:0},5000);
     });  
</script>

<div  id="swingi'.$name.'" ></div>'; 

 
        
}
 



switch($act){
        
        
        
    case 0:
        

echo '
<script>
 $("#yyu").ready(function(){
 document.getElementById("showdeletestate").value=1;
      $("#swint").hide();  
       $("#recanxxt").show();  
       $("#continueoh").show();  
       $("#canxxt").hide(); 
       $("#manxt").hide();  
      
      
     });  
</script>

<div  id="yyu" ></div>

';
        
     




$ffan=$numitems;



 for($i= 0;  $i <= $ffan; $i++) { 
 

        
 
 $buy=$i;
      
 
     
     echo '
     
   
   


 <input  id="hdppaaxx'.$buy.'" value="'.$buy.'" hidden> 
       <input  id="hdppaacxx'.$buy.'" value="2" hidden>  
       <input  id="zzhdppaacxx'.$buy.'" value="0" hidden> 
     
        <script>
 $("#xxkkafttisxvv'.$buy.'").ready(function(){
      
   var x= $("#hdppaaxx'.$buy.'").val(); 
   var sxx= $("#hdppaacxx'.$buy.'").val();
   var oxx= $("#zzhdppaacxx'.$buy.'").val();
   
    var url="feedbkstartorder.php";
$.post(url,{request:"fa",mem1:x,mem2:sxx,mem3:oxx}, function(data){

$("#startmekey'.$buy.'").html(data).show(); 
 
   
   
} );  
  
}); 
</script><div id="xxkkafttisxvv'.$buy.'"> </div>


';

    
 }
        
        break;
        
        
    case 1:
        
        
echo '
<script>
 $("#yyux").ready(function(){
  document.getElementById("showdeletestate").value=0;
  $("#recanxxt").hide();  
    $("#orderoh").show();
      $("#refreshoh").show();   
       $("#launchbox").show(); 
     });  
</script>

<div  id="yyux" ></div>





';
        
        
     


          



$ffan=16;


 for($i= 0;  $i <= $ffan; $i++) { 
   
 
 $buy=$i;
      
 
     
     echo '
     
   
   
   <script>
 $("#qqxngi'.$buy.'").ready(function(){
 var pol = document.getElementById("des'.$buy.'");
    pol.value="'.$buy.'";
    
    
     var polf = document.getElementById("kkgy'.$buy.'");
    polf.value="'.$buy.'";
    
    
    });  
</script>

<div id="qqxngi'.$buy.'"> </div>
 
';

     
     
  
     
 }
        
        
        $_SESSION['postseek']='0';



   
        
        
        


}























?>

 
               



