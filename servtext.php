
  <script src="js/jquery.js"></script>


<?php  


require('dataco.php');
require('phpopenx.php'); 
include('exit.php');

   
$txt = $_POST['mem1'];    
$d=$_SESSION['numuser'];




if($txt==null || $txt==' '){}
else{

                       $sqlbc="SELECT id FROM temp WHERE num=?  "; 
                            $instbc= $super->prepare($sqlbc);
                            $instbc->bind_param("i",$nrr);
                            $nrr=$d;
                             $instbc->execute();
                              $resbc=$instbc->get_result();
                             $naa= $resbc->num_rows;
                             $instbc->close();


                             $nvv = $naa + 1 ;
   
          $sqlb="INSERT INTO temp (num,im,type,position) VALUES ('$d',?,'2','$nvv')";  
           $ina= $super->prepare($sqlb);  
           $ina->bind_param("s",$ur);
           $ur=$txt;
           $ina->execute();
           $ina->close();
        
        
    $gg='00';
    $bbg="$nvv$gg";
    


    switch($nvv){
        case 1:
            $bbg="0";
            break; 
        
        case 2:
            $bbg="0";
            break;}



       
      echo'<script>  
      var gam="'.$nvv.'"; 
        document.getElementById("totalitems").value=gam;
           </script>';




      
  echo '  
<script>
  $("#txx'.$nvv.'").ready(function(){
      
  hh= document.getElementById("sate");
  hh.style.position="relative";
  

    $("#sate").animate({scrollLeft:('.$bbg.')},1000);
                          
   var a= "'.$txt.'"; 
    var b= "'.$nvv.'"; 
          
      var url="feedbackposttext.php";
      
        $("#kung'.$nvv.'").text("....").show();
    
        $.post(url,{request:"fa",mem2:a,mem1:b}, function(data){
        
         $("#kung'.$nvv.'").html(data).show();  });  });
        
</script>


<div  id="txx'.$nvv.'" ></div> ';            }?>



