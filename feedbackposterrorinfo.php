



<?php  


   require('dataco.php');
require('phpopenx.php'); 

 include('exit.php');

   $d=$_SESSION['numuser'];


    
$err = $_POST['mem1'];
$po = $_POST['mem2'];
$na =$_POST['mem3'];


if($na==1){$qami="Image";}else{$qami="Images";}

     
include('theme.php');

echo'
<script>
 function byera1(){$("#errorinfo").hide();  $("#errorinfoback").hide();}
 function onebyera1(){$("#imageuploadover8").hide();   $("#errorinfoback").hide();}
</script>';



switch($err){
        
        
    case 0:
        
        
        echo '
       

 <div  class="col-xs-hidden  col-sm-4"> </div>
    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" ><div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:0px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' '.$qami.' Skipped</span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b>Please Select at Most 8 Images -  </b> </span>  
         <span   style="color:red;font-weight:bolder">Max Selected Images 8 </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 

  ';


        
        break;
        
    case 1:
        
        
            
        echo '
        
    




 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b>Image not Supported -  </b> </span>  
         <span   style="color:red;font-weight:bolder"> Extensions GIF  JPG  And PNG
Supported </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 

     ';   
        
        break;
        
    case 2:
        
        
            
        echo '
        
     


 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
       <span  style="color:'.$vtb.'" ><b>Problem Detected -  </b> </span>  
         <span   style="color:red;font-weight:bolder"> Please Try Again </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 


     ';
break; 
    
    case 3:
        
        
            
        echo '
   




 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b>Image size Large -  </b> </span>  
         <span   style="color:red;font-weight:bolder"> Max Image Size 30MB </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 


     ';
break; 
    
    case 4:
        
        
            
        echo '
      

 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b> Item List Full -  </b> </span>  
         <span   style="color:red;font-weight:bolder">  Max  Items  16  </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 




     ';
        
        break; 
    
    case 5:
        
        
            
        echo '
     



 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  '.$na.' </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b> File  Processing Failed -  </b> </span>  
         <span   style="color:red;font-weight:bolder"> Please Try Again </span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 



     ';

       break; 
    
    case 6:
        
        
            
        echo '
     
 <div  class="col-xs-hidden  col-sm-4"> </div>
     

    <div  class="col-xs-12 col-sm-4 zuzax"  onclick="javascript:byera1();"  style="background-color:'.$vt.';border-radius:6px;padding:0px; height:auto; -moz-box-shadow: 0 0 12px#cccccc; -webkit-box-shadow: 0 0 12px#cccccc;box-shadow: 0 0 12px#cccccc;" >

    <div  class="col-xs-12  zuperxy"   style="padding:0px;font-size:140%;" > 
         <span  style="float:left;margin-left:4px"> <i class="fa fa-exclamation-circle"></i></span>  </div>   
             
        <div  class="col-xs-12 za zuperxy errinfo"   style="padding:1px;text-align:center;overflow:auto;font-size:110%;margin-top:-2px;font-weight:bold;" > 
         <span>  <span>  Multiple Selection Compatibility </span> </span></div>   
             
    <div  class="col-xs-12  za"   style="text-align:center;margin-top:15px;font-size:88%;padding:0px;padding-bottom:18px" >  
        <span  style="color:'.$vtb.'" ><b> Multiple Upload<u> Browser</u> Compatibility  -  </b> </span>  
         <span   style="color:red;font-weight:bolder"> An Image Leaked, Please Upload Missing Image Again.Thank You</span>
        </div>  
        
    </div>
  <div  class="col-xs-hidden  col-sm-4"></div> 




     ';
break;
        
        
        
}


?>

 