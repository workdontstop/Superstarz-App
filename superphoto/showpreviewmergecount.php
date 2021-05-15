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
                             

                           function  previewcheckerxx(){

                           var checkimageloaded = 0;

                              var   le =  <?php  echo $cc; ?>  ;
                            
                             for( var i = 0 ; i < le  ; i++){

                                  var ik = i + 1;  

 var waitimage = document.getElementById("prevmerge"+ik+"");

    if(waitimage){ checkimageloaded++;  if(checkimageloaded == le) { 

      clearInterval(usurpxx);

         var url="showfiltersminicanvas.php";
    $.post(url,{request:"fa",c:"<?php echo $cc; ?>"}, function(data){
         var kkix = document.getElementById('holdmerge');               
            kkix.style.visibility= "hidden"; 
           $("#holdpaperxxm").hide();
            $("#showmerge").show();
             document.getElementById('supertopbuttons').style.visibility="hidden";
              $("#verminx").hide();
               $("#starttextmark").hide();
                  $("#destroyminicanvas").show();
             $("#acceptminicanvas").show();
        var kkix = document.getElementById('holdmerge');               
            kkix.style.visibility= "hidden";
            $("#spilmerge").html(data).show(); });

    }    }else{}

     if(stopper == 10){ clearInterval(usurpxx);  }

                       }}
     



usurpxx = setInterval(function(){stopper++;previewcheckerxx();},2000);




                           });
        
</script>
 






  <div id="holdpaperxxm"  class="zuperxy col-xs-12"  style="font-size:44px;text-align:center;margin-top:25%">
    <i class="fas fa-stroopwafel fa-spin"></i> </div> 














