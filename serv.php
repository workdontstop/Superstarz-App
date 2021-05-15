

<?php
 

require('dataco.php');
require('phpopenx.php'); 


$ru="";
$d=$_SESSION['numuser'];
$me=$_SESSION['user'];

$pos="0";
$n='0';
$allowed="0";
    

$cape = '0';




   $trr = array();
   


  $files=$_FILES['re'];  
    

    $yan=count($files['name']);

     
      
              
            if($_SESSION['postim'] == 1 ){
         
            
     
                
              
        
  
     $_SESSION['postim']="0";
        
  
   
        } else{
                

              
  
    $bite="";

if(is_array($_FILES)){
  
 
 
 
  ini_set("memory_limit","400M");
   
    
     
    
 $sqlbc="SELECT id FROM temp WHERE num=?  "; 
                              $instbc= $super->prepare($sqlbc);
                             $instbc->bind_param("i",$nrr);
                            $nrr=$d;
                             $instbc->execute();
                              $resbc=$instbc->get_result();
                             $naa= $resbc->num_rows;


   
function resize($target, $newcopy, $w, $h, $ty) {
    list($w_orig, $h_orig) = getimagesize($target);
     $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
     $w = $h * $scale_ratio;
    } else {
    $h = $w / $scale_ratio;}
    if ($ty=='image/gif'){ 
    $img = imagecreatefromgif($target);} 
    else if(  $ty=='image/png'){ 
    $img = imagecreatefrompng($target);} 
    else if( $ty=='image/jpeg' || $ty=='image/JPEG'  ||  $ty=='image/pjpeg') { 
    $img = imagecreatefromjpeg($target);
    }else{ }
    $tci = imagecreatetruecolor($w, $h);
     // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    if ( $ty=='image/gif' ){ 
        imagegif($tci, $newcopy);} 
    else{imagejpeg($tci, $newcopy,100);} }



    
function crop($newcopy,$croprealcopy, $w, $h, $ty) {
    list($w_orig, $h_orig) = getimagesize($newcopy);

    $ori =$w_orig / $h_orig;
    $cr = $w/$h;

    if($ori >= $cr){  
     $src_y=$h;
     $src_x=$w_orig/($h_orig/$h); 
    }else{
  $src_y=$h_orig/($w_orig/$w);
     $src_x=$w; }
   
    $img = "";
     if ($ty=='image/gif'){ 
    $img = imagecreatefromgif($newcopy);} 
    else if(  $ty=='image/png'){ 
    $img = imagecreatefrompng($newcopy);} 
    else if( $ty=='image/jpeg' || $ty=='image/JPEG'  ||  $ty=='image/pjpeg') { 
    $img = imagecreatefromjpeg($newcopy);
    }else{ }
  $tci = imagecreatetruecolor($w, $h);
  imagecopyresampled($tci, $img,0-($src_x-$w)/2,0-($src_y-$h)/2,0,0,$src_x,$src_y,$w_orig,$h_orig); 
  if ( $ty=='image/gif' ){ 
        imagegif($tci, $croprealcopy);} 
  else{imagejpeg($tci, $croprealcopy, 100);}}





   
function finalresize($target, $newcopy, $w, $h, $ty) {
    list($w_orig, $h_orig) = getimagesize($target);
     $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
     $w = $h * $scale_ratio;
    } else {
    $h = $w / $scale_ratio;}
    if ($ty=='image/gif'){ 
    $img = imagecreatefromgif($target);} 
    else { 
    $img = imagecreatefromjpeg($target);}
    $tci = imagecreatetruecolor($w, $h);
     // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    if ( $ty=='image/gif' ){ 
        imagegif($tci, $newcopy);} 
    else{imagejpeg($tci, $newcopy,90);} }


 
function finalresizex($target, $newcopy, $w, $h, $ty) {
    list($w_orig, $h_orig) = getimagesize($target);
     $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
     $w = $h * $scale_ratio;
    } else {
    $h = $w / $scale_ratio;}
    if ($ty=='image/gif'){ 
    $img = imagecreatefromgif($target);} 
    else if(  $ty=='image/png'){ 
    $img = imagecreatefrompng($target);} 
    else if( $ty=='image/jpeg' || $ty=='image/JPEG'  ||  $ty=='image/pjpeg') { 
    $img = imagecreatefromjpeg($target);
    }else{ }
    $tci = imagecreatetruecolor($w, $h);
     // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    if ( $ty=='image/gif' ){ 
        imagegif($tci, $newcopy);} 
    else{imagejpeg($tci, $newcopy,90);} }


    
    
function thumb($finalrealcopy, $thumbrealcopy, $wthumb, $hthumb, $ty) {
list($w_orig, $h_orig) = getimagesize($finalrealcopy);
     $scale_ratio = $w_orig / $h_orig;
    if (($wthumb / $hthumb) > $scale_ratio) {
       $wthumb = $hthumb * $scale_ratio;
    }else{$hthumb = $wthumb / $scale_ratio;}
    if ($ty=='image/gif'){ 
    $img = imagecreatefromgif($finalrealcopy);
    } else{ 
    $img = imagecreatefromjpeg($finalrealcopy);}
    $tci = imagecreatetruecolor($wthumb, $hthumb);
     // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $wthumb, $hthumb, $w_orig, $h_orig);
    if ( $ty=='image/gif' ){ 
        imagegif($tci, $thumbrealcopy);} 
    else{imagejpeg($tci, $thumbrealcopy,20);}  }
    
   
    
   
    

 

    
    foreach($files['name']  as $position => $value){
      
   
            
       

        $fil=null;


   
    

    
$fileSize = $files["size"][$position];
$fil=$files['tmp_name'][$position];


    

if( $fil == null){  return; }    
        
$dim =getimagesize($fil);
$ty=  strtolower($dim['mime']);


$limiter = "0";
    $pos++;        

    
$error=$files['error'][$position];  

        
        
$name= addslashes($files['name'][$position]);





if( $pos < 9){

  ////// a 0


 
 if(!in_array($name,$trr)){

  ///// a 6
      
    $trr[] = $name;

    



if (  $ty=='image/jpeg' || $ty=='image/JPEG'  ||   $ty=='image/gif' ||    
 $ty=='image/png'  || $ty=='image/pjpeg') {

  ///// a 1
    

$kaboom = explode(".", $value); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
 

 
 if($error === 0){

  // if file upload error key is equal
  ////  a  2
     

    
    
    

 if($fileSize < 30242880) {
  // if file size is larger than 30 Megabytes
   ///a 3 
    
    $dategg = time();
$fu=date('-Y-m-d-H-i-s',$dategg);     
          ///  finally selcting present time now()  which will be used in the time constraints below
     
    
 


   $ab = filter_var($value, FILTER_SANITIZE_STRING);
  $cc= preg_replace('/[^a-zA-Z0-9.]/', '', $ab);
$wnew="$me$fu$cc";



     //// ---------- IMAGE resizing func --------

 

    
    $woo="super$wnew";
    

    
    

    
      $limiter = $pos + $naa;    
   
       
        
       if($limiter > 16  ){ 
        
     
      
      echo ' 
      
   
    
<script>
     
  $("#qdaaxxd'.$pos.'").ready(function(){

   var a= "4";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="qdaaxxd'.$pos.'" ></div>';
        }
          else{  
          
             
              
      
       
   
if( move_uploaded_file($fil,"images/wall/".$wnew)){
  ///// a 5
    
    $allowed++;
  
   $nvv = $allowed + $naa;    
   

    
  $sqlb="INSERT INTO temp (num,im,type,position) VALUES ('$d',?,'2','$nvv')";  
           $ina= $super->prepare($sqlb);
           $ina->bind_param("s",$ur);
           $ur=$woo;
          
           $ina->execute();
           $ina->close();
                
         
    




  $sourceimage= "images/wall/$wnew";
 list($sw, $sh) = getimagesize($sourceimage);




if( $sw == $_SESSION['itemimagesizevaluew'] && $sh == $_SESSION['itemimagesizevalueh'] || $_SESSION['itemimagesizecontrol']=="0" ){  

 if($_SESSION['itemimagesizecontrol']=="0"){ 
  $_SESSION['itemimagesizecontrol']="1"; 
  $_SESSION['itemimagesizevaluew']=$sw;
  $_SESSION['itemimagesizevalueh']=$sh; }

$wx =1000;
$hx = 700;
$targetx= "images/wall/$wnew";
 $newcopyx = "images/wall/super$wnew"; 
  finalresizex($targetx,$newcopyx, $wx, $hx, $ty);


 unlink("images/wall/".$wnew);


}else{

    
$w = $_SESSION['itemimagesizevaluew'];
$h = $_SESSION['itemimagesizevalueh'];
$newcopy= "images/wall/$wnew";
 $croprealcopy = "images/wall/cropsuper$wnew";
 crop($newcopy,$croprealcopy, $w, $h, $ty);

 $wx =1000;
$hx = 700;
$targetx= "images/wall/cropsuper$wnew";
 $newcopyx = "images/wall/super$wnew"; 
  finalresize($targetx,$newcopyx, $wx, $hx, $ty);


$cr="cropsuper";
      $wcrop="$cr$wnew";
unlink("images/wall/".$wcrop);
 unlink("images/wall/".$wnew);
}




 $wthumb =250;
$hthumb = 200;
 $finalrealcopy = "images/wall/super$wnew";
 $thumbrealcopy = "images/thumb/thumbsuper$wnew";
  thumb($finalrealcopy, $thumbrealcopy, $wthumb, $hthumb, $ty);
  
    
     
 
  
    
    
    
  $gg='00';
$bbg="$nvv$gg";
    switch($nvv){
        case 1:
            $bbg="0";
            break; 
        case 2:
            $bbg="0";
            break;}


      
    
      $_SESSION['postim']="1";

     

     
       
      echo'<script>  
      var gam="'.$nvv.'"; 
        document.getElementById("totalitems").value=gam;
           </script>';



    
    echo '  
<script>
     
  $("#xx'.$position.'").ready(function(){
      
  hh= document.getElementById("sate");
  hh.style.position="relative";
  
 
  
    $("#sate").animate({
                          scrollLeft:('.$bbg.')},1000);
                          
   var a="'.$nvv.'"; 
    var b="'.$woo.'"; 
        
      var url="feedbackpost.php";
      
        $("#kung'.$nvv.'").text("....").show();
    
        $.post(url,{request:"fa",mem1:a,mem2:b}, function(data){
        
       
    

            $("#kung'.$nvv.'").html(data).show(); 
            
         
            
        } );
    
  });
        
</script>


<div  id="xx'.$position.'" ></div> ';
    
    
    
           
}
      else{  
   

        
       echo '  
      
<script>
     
  $("#sqdaaxxd'.$pos.'").ready(function(){

   var a= "5";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="sqdaaxxd'.$pos.'" ></div>';
   
    
 } 
        
}
        

 
          
      
 

    
  
}
  
     

else{

 
        
      echo ' 
      
    
    
<script>
     
  $("#qdaaxx'.$pos.'").ready(function(){

   var a= "3";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="qdaaxx'.$pos.'" ></div>';
}   
 
}
    else{
        

        
      echo ' 
      
      
    

    
<script>
     
  $("#qaaxx'.$pos.'").ready(function(){

   var a= "2";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="qaaxx'.$pos.'" ></div>';
    }


  
   
  

}
    else{
        
        
      echo ' 
      
    
    
<script>
     
  $("#aaxx'.$pos.'").ready(function(){

   var a= "1";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="aaxx'.$pos.'" ></div>';
        
        
    }  
  
  }else{

  /////use: for trr  array prevents mobile chrome from sometimes uploadin same file twice 
        //////drawback:  a file might be skipped
echo '

  
    
<script>
     
  $("#aaayy'.$pos.'").ready(function(){

   var a= "6";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    $("#errordescribe").show(); 

            $("#ivx'.$pos.'").html(data).show(); 
   
        } );
    
  });
        
</script>


<div  id="aaayy'.$pos.'" ></div>

';
  
     }

   }else{

  ////stops post at 8 images

   $_SESSION['posttype']=0; 
        $_SESSION['postpos']=""; 
        $_SESSION['postname']=" ";

      $notup= $yan - 8;

        
      echo '
      
<script>
     
  $("#aaxxcx").ready(function(){

   var a= "0";
   
   var b= "";  
   
   var c= "'.$notup.'"; 
   
      var url="feedbackposterror.php";
    
        $.post(url,{request:"fa" ,mem1:a,mem2:b,mem3:c}, function(data){
    
    
            $("#imageuploadover8").html(data).show(); 

   
        } );
    
  });
        
</script>


<div  id="aaxxcx" ></div>';


   }

////start error check 

}
            
}
            

}


      

?>  



