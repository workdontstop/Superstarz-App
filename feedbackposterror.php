

<?php  


   require('dataco.php');
require('phpopenx.php'); 

 include('exit.php');

   $d=$_SESSION['numuser'];
$errorty = $_POST['mem1'];
$pos = $_POST['mem2'];
$name =$_POST['mem3'];


      
include('theme.php');




switch($errorty){
        
        
    case 0:

echo '  

      
<script>


 function era'.$pos.'(){
       var a="0";
   var b="'.$pos.'";  
   var c="'.$name.'"; 
    $("#imageuploadover8").hide();  
   var url="feedbackposterrorinfo.php";
$.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                 if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
      $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
     $("#errorinfoback").hide(); 
   }
   }); 
}

</script>  

 <div class="col-xs-hidden col-sm-1"  style="padding:0px"> </div>

 <div class="col-xs-12 col-sm-10"    style="padding:0px"> 
              <div id="imageuploadover8look"  class="zuzax"  onclick="javascript:era'.$pos.'();" style="width:30px;height:30px;float:left;font-weight:bolder;border-radius:50px;text-align:center;color:#000000;border:solid #000000;margin-left:10px">
    <div   style="margin-top:1px;">  '.$name.' </div> </div></div>
                   ';
        
        break;
        
    case 1:
        
      
echo '  

      
<script>
 function lera'.$pos.'(){
        
       
       var a="1";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
      $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
     $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  

    
                   
                    <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript:lera'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                        '.$pos.'  
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Type </div></div> 
                
               
                   ';
    
    break;
    
    
    
    case 2:
        
      
echo '  

      
<script>
 function vera'.$pos.'(){
        
       
       var a= "2";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
       $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
      $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  


     
                   
                <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript:vera'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                        '.$pos.'  
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Failed </div></div> 
                
                
               
                   ';
          break;
    
    
    
    case 3:
        
      
echo '  



<script>
 function xxvera'.$pos.'(){
        
       
       var a= "3";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
        $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
       $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  


          
            
                   <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript:xxvera'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                        '.$pos.'  
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Size </div></div> 
                
               
                   ';       break;
    
    
    
    case 4:
        
      
echo '  


 
      
<script>
 function xxverag'.$pos.'(){
        
       
       var a= "4";
   
   var b= "'.$pos.'";  
   
   var c= "'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
         $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
     $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  

        
                    
                   <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript: xxverag'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                        '.$pos.'  
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Item </div></div> 
                
               
                   '; 
        
        
        break;
    
    
    
    case 5:
        
      
echo '  


      
<script>
 function sxxverag'.$pos.'(){
        
       
       var a="5";
   
   var b="'.$pos.'";  
   
   var c="'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
       $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
      $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  

    
                   
                  
                   <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript:sxxverag'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                        '.$pos.'  
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Broken </div></div> 
                
               
                   ';



        break;
    
    
    
    case 6:
        
      
echo '  


      
<script>
 function apeg'.$pos.'(){
        
       
       var a="6";
   
   var b="'.$pos.'";  
   
   var c="'.$name.'"; 
   
     var url="feedbackposterrorinfo.php";
  
        $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
                   if($("#errorinfo").is(":hidden")){
      $("#errorinfo").html(data).show(500);
       $("#errorinfoback").show();
        }else{
     $("#errorinfo").html(data).hide(); 
      $("#errorinfoback").hide(); 
   }
   
   
        } );
        
          
    }
</script>  

    
                   
                  
                   <div class="col-xs-6 col-sm-4  za juju" id=""   style="height:35px;border-radius:8px;"  > 
                  <div class="col-xs-12 zuperxy za" id=""    onclick="javascript:apeg'.$pos.'();" style="text-align:center;margin-top:-3px;font-weight:bold" >
                         <span  style=" color:'.$_SESSION['cl'].'  "> <i class="fa fa-exclamation-circle"></i> </span>
                          Spill </div></div> 
                
               
                   ';
        
        
}


?>

 