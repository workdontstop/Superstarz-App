<?php  

require('phpopenx.php'); 
include('exit.php');

$pun=$_SESSION['numuser'];

$cc="";

$cc=$_POST['c'];

?>



<script>
       $(document).ready(function(){
    
                           

                               stopper = 0 ;
                             

                           function  previewchecker(){

                           var checkimageloaded = 0;

                              var   le =  <?php  echo $cc; ?>  ;
                            
                             for( var i = 0 ; i < le  ; i++){

                                  var ik = i + 1;  

 var waitimage = document.getElementById("previm"+ik+"");

    if(waitimage){ checkimageloaded++;  if(checkimageloaded == le) { 

      clearInterval(usurp);

         var url="showfilters.php";
    $.post(url,{request:"fa",c:"<?php echo $cc; ?>"}, function(data){
          $("#holdo").hide();
           $("#holdtop").hide();
      $("#addfilter").hide();
      $("#previm").hide();
       $("#holdpaperxx").hide();
            $("#spil").html(data).show(); });

    }    }else{}

     if(stopper == 10){ clearInterval(usurp);  }

                       }}
     



usurp = setInterval(function(){stopper++;previewchecker();},2000);




                           });
        
</script>
 






  <div id="holdpaperxx"  class="zuperxy col-xs-12"  style="top:22%;font-size:44px;text-align:center;position:fixed;z-index:150;">
    <i class="fas fa-stroopwafel fa-spin"></i> </div> 














