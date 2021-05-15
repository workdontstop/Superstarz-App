<?php 

 require('dataco.php'); 
$df=$_SESSION['numuser'];


  $erurr="";


   
     $rc4="";$rc1="";$rc2="";$rc3=""; 

$nfy=""; $dimk="bbbg";



    
    if ($k=='5' || $k=='6' || $mu=="mul2" ){
         
                 if ($k=='5' || $k=='6'){
         
                         $e=$mu;
              
                          }
     
                    if ( $mu=="mul2"){
         
                           $e=$mudd;
                             }
       
         $queryv2rr=mysqli_query($super,"SELECT id FROM feel WHERE post='".$e."' AND react='1'  ");
                             $nfy=mysqli_num_rows($queryv2rr);   //counting emoji if image present
                  
          $queryhxp=mysqli_query($super,"SELECT react FROM feel WHERE post='".$e."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryhxp)){
                        $rc1=$row['react']; 
                                             }
          
          
         
     
    
 
     
     }else{
         
         $queryv2rr=mysqli_query($super,"SELECT id FROM feel WHERE post='".$ivd."' AND react='1'  ");
                             $nfy=mysqli_num_rows($queryv2rr);
   //counting emoji  if k is not 5 or 6 post is a regular post
        
         $queryhxp=mysqli_query($super,"SELECT react FROM feel WHERE post='".$ivd."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryhxp)){
                        $rc1=$row['react']; 
                                             }
                
}
    
    $nfy2="";
    
    if ($k=='5' || $k=='6' || $mu=="mul2" ){
         
                 if ($k=='5' || $k=='6'){
         
                         $e=$mu;
              
                          }
     
                    if ( $mu=="mul2"){
         
                           $e=$mudd;
                             }
         
  
        
         $queryv2rrx=mysqli_query($super,"SELECT id FROM feel WHERE post='".$e."' AND react='2'  ");
                             $nfy2=mysqli_num_rows($queryv2rrx);  //counting emoji if image present
                  
           $queryhx=mysqli_query($super,"SELECT react FROM feel WHERE post='".$e."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryhx)){
                        $rc2=$row['react']; 
                                             }
                
          
        }else{
         
         $queryv2rrx=mysqli_query($super,"SELECT id FROM feel WHERE post='".$ivd."' AND react='2'  ");
                             $nfy2=mysqli_num_rows($queryv2rrx);
   //counting emoji  if k is not 5 or 6 post is a regular post
        
          $rc3="";
           $queryhx=mysqli_query($super,"SELECT react FROM feel WHERE post='".$ivd."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryhx)){
                        $rc2=$row['react']; 
                                             }
                
     }






$nfy3="";

  if ($k=='5' || $k=='6' || $mu=="mul2" ){
         
                 if ($k=='5' || $k=='6'){
         
                         $e=$mu;
              
                          }
     
                    if ( $mu=="mul2"){
         
                           $e=$mudd;
                             }
     
        
         $queryv2rrj=mysqli_query($super,"SELECT id FROM feel WHERE post='".$e."' AND react='3'  ");
                             $nfy3=mysqli_num_rows($queryv2rrj);  //counting emoji if image present
                  
          
           
           
           $queryvfju=mysqli_query($super,"SELECT react FROM feel WHERE post='".$e."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryvfju)){
                        $rc3=$row['react']; 
                                             }
       
     
     }else{
         
         $queryv2rrj=mysqli_query($super,"SELECT id FROM feel WHERE post='".$ivd."' AND react='3'  ");
                             $nfy3=mysqli_num_rows($queryv2rrj);
   //counting emoji  if k is not 5 or 6 post is a regular post
    
           $queryvfju=mysqli_query($super,"SELECT react FROM feel WHERE post='".$ivd."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryvfju)){
                        $rc3=$row['react']; 
                                             }
     }

  /////declaring ivdx needed for general id in strucwallin  important important

$ivdx=$ivd;  

/////declaring ivdx needed for general id in strucwallin  important important



$nfy4="";
 if ($k=='5' || $k=='6' || $mu=="mul2" ){
         
                 if ($k=='5' || $k=='6'){
         
                         $e=$mu;
              
                          }
     
                    if ( $mu=="mul2"){
         
                           $e=$mudd;
                             }
   
        
         $queryv2rrm=mysqli_query($super,"SELECT id FROM feel WHERE post='".$e."' AND react='4'  ");
                             $nfy4=mysqli_num_rows($queryv2rrm);  //counting emoji if image present  
          
          
          
        
          
          $queryvftu=mysqli_query($super,"SELECT react FROM feel WHERE post='".$e."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryvftu)){
                        $rc4=$row['react']; 
                                             }  
                  
 /////overwriting ivdx if share or multi  for general id in strucwallin  important 
          
             $ivdx=$e;
          
     /////overwriting ivdx if share or multi  for general id in strucwallin  important 
          
        

          
       
     
     }else{
         
         $queryv2rrm=mysqli_query($super,"SELECT id FROM feel WHERE post='".$ivd."' AND react='4'  ");
                             $nfy4=mysqli_num_rows($queryv2rrm);
   //counting emoji  if k is not 5 or 6 post is a regular post
                
     
    
              
          
          $queryvftu=mysqli_query($super,"SELECT react FROM feel WHERE post='".$ivd."' AND num='".$df."'  ");
                             while($row=mysqli_fetch_array($queryvftu)){
                        $rc4=$row['react']; 
                                             }  

}






if($dim=='u' ){
    
      $dax="";
        $dax2="";  /// empty image support if  multipost image empty
    }
     
     if($dtup==null || $dtup==" " ){
    
     $dtup="Superstarz";  ///show superstarz if topic empty
    }
    




////////////making  share null if not posted by member on his/her own page
if($tum==$nr){

           $lgsh= 'href=selshare.php?num='.$ivd.''; 
     
     $zozash='<a '.$lgsh.'><div class="btn" id="rrd2"><font  size="-2"><b><font  color="#000000" size="-1"> <i class="fa fa-share" aria-hidden="true"></i></font></b></font></div></a>';  // share variables
 
}else{
    
   $zozash='';  
}
////////////making  share null if not posted by member on his/her own page





////////////////POST COMMENT IDENTITY TO SOURCE IDENTITY IF IT WAS SHARED OR MULTI POSTED
 
////////////////POST COMMENT IDENTITY TO SOURCE IDENTITY IF IT WAS SHARED OR MULTI POSTED
    

     if($numyy=='0'){
         
         $numyy='';$t="";   // algorithms showing comment or  comments or no  number- no of comments  
     }else{   
         
         if($numyy=='1'){
         $erurr='margin-top:3px';
       $t="";
     }
         
         if($numyy >'1'){
         $erurr='margin-top:3px';
       $t="s";
     }
         }


  $zozac='<div class="btn " id="" style="'.$erurr.'"><font ><b><font color="#000000" size="-0"> <b> '.$numyy.'</b> <font size="-0"><i class="far fa-comment-alt" aria-hidden="true"></i> </font> </font></b></font></div>'; 



$bof=0;


  $btmm="col-xs-12 col-sm-5 col-md-6";
  
 
    $btpch="hidden-xs hidden-sm hidden-md hidden-lg";

    $btpch2="hidden-xs hidden-sm hidden-md hidden-lg";

$sc=" ";

$lg='hidden-xs hidden-sm hidden-md';  $md='hidden-xs hidden-sm hidden-lg';  $sm='hidden-xs hidden-md hidden-lg'; $xs='hidden-md hidden-sm hidden-lg';
$cip='12';$c='12'; $cc='12';  $sy='12'; $cc2='9'; $cc3='7';$cc4='12';$cc6='5';$cc5='5';$cb='xs'; $cc8='8';
$zxxt='12'; $pxxt='5'; 

/// algorithm controlling boot view

if($bof=='1'){
    $c='6'; $cc='6'; $cc2='8'; $cc3='7';$cc4='12';$cc5='12';$cb='sm';$cc6='5'; $cc8='7';  $sy='6';$cip='6'; $zxxt='8'; $pxxt='7'; 
    
    $lg='hidden-xs hidden-sm hidden-md hidden-lg';  $md='hidden-xs hidden-md hidden-sm hidden-lg';  $sm='hidden-xs hidden-sm hidden-md hidden-lg'; $xs='hidden-md hidden-sm hidden-lg hidden-xs';
   
    $btp='col-xs-6 col-sm-7 col-md-'.$cc3.'  col-lg-7';
     $btmm="col-xs-6 col-sm-12  col-lg-5";
    
    $btpch="hidden-xs hidden-sm hidden-md ";
     $btpch2=" hidden-lg";
}







?>