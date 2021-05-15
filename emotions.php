<?php






   require('dataco.php');
require('phpopen.php'); 
include('exitx.php');

if(isset($_POST['postid'])){

    $emo=$_POST['emotion']; 
    $a = $emo;
     $nivd=$_POST['postid'];
      $gringo=$_POST['gringo'];
      $lay=$_POST['lay'];

    $p=$_SESSION['numuser'];
        



 if($_SESSION['theme']=='0'){ $myemo="hashtag"; }
    else{ $myemo="hashtagdark";}  

if($emo == 1){
  $add="emotioncount1"; 
   $remove1="emotioncount2"; 
    $remove2="emotioncount3"; 
     $remove3="emotioncount4"; }
     else if($emo == 2){ 
     $add="emotioncount2"; 
   $remove1="emotioncount1"; 
    $remove2="emotioncount3"; 
     $remove3="emotioncount4"; }
     else if($emo == 3){
      $add="emotioncount3";  
   $remove1="emotioncount1"; 
    $remove2="emotioncount2";  
     $remove3="emotioncount4"; }
     else{
      $add="emotioncount4"; 
   $remove1="emotioncount1";
    $remove2="emotioncount2"; 
     $remove3="emotioncount3"; }




















                            

///////checking if emotions have been inputed for this post/check state 
$selemostate1="SELECT react FROM feel WHERE post='".$nivd."' AND num='$p'   "; 
             $feelpack1= $super->prepare($selemostate1);
                if(false === $feelpack1){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                            $feelpack1->execute();
                              $feelres1=$feelpack1->get_result();
                               $countfeelres1= $feelres1->num_rows;
                             while($row = $feelres1->fetch_assoc() ){
                                 $reactold=$row['react'];}  
                                $feelpack1->close(); }
        ///////checking if emotions have been inputed for this post/check state 










if($countfeelres1 == 0){   



    ///////insert emotion into feelings table 
$selemostate2="INSERT INTO feel(num,react,post,time) VALUES ('$p','$emo','$nivd',now())"; 
             $feelpack2= $super->prepare($selemostate2);
                if(false === $feelpack2){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                            $feelpack2->execute(); 
                            echo'<script>
                            var pluss="'.$add.'";   
var minus1="'.$remove1.'";   
var minus2="'.$remove2.'";   
var minus3="'.$remove3.'";  
  
 var lay ="'.$lay.'";
   if(lay == 1){ var themetype="underxx";  }else{  var themetype="'.$myemo.'";  }
 


var idd="'.$nivd.'";         var gring="'.$gringo.'";     var em="'.$emo.'";
var collectcount = $("#holdemotioncount"+em+""+idd+""+gring+"").val();
          collectcount++;
      document.getElementById("holdemotioncount"+em+""+idd+""+gring+"").value=collectcount; 
       document.getElementById("emotioncount"+em+""+idd+""+gring+"").innerHTML=collectcount;
        document.getElementById("feelstate"+idd+""+gring+"").value=em;
  



    document.getElementById(""+minus1+""+idd+""+gring+"").style.opacity="0.6";
        document.getElementById(""+minus2+""+idd+""+gring+"").style.opacity="0.6";
         document.getElementById(""+minus3+""+idd+""+gring+"").style.opacity="0.6";
          document.getElementById(""+pluss+""+idd+""+gring+"").style.opacity="1";


      
         $("#emotion"+em+""+idd+""+gring+"").removeClass("emodeactivex");
         $("#emotion"+em+""+idd+""+gring+"").addClass("emoactivekey"+em+"x");   document.getElementById("emotion"+em+""+idd+""+gring+"").style.height="28px";   document.getElementById("emotion"+em+""+idd+""+gring+"").style.width="auto";


     $("#"+minus1+""+idd+""+gring+"").removeClass(""+themetype+"");
      $("#"+minus2+""+idd+""+gring+"").removeClass(""+themetype+"");
       $("#"+minus3+""+idd+""+gring+"").removeClass(""+themetype+"");
        $("#"+pluss+""+idd+""+gring+"").addClass(""+themetype+"");

          $("#"+minus1+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
      $("#"+minus2+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
       $("#"+minus3+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
        $("#"+pluss+""+idd+""+gring+"").addClass("hightext"+idd+""+gring+"");


       setTimeout(function(){    var roller=document.getElementById("emotion"+em+""+idd+""+gring+"");
        roller.style.transform="rotate(2500000deg)"; 
      roller.style.transition="all 4120.60000000s ease";    },500)
                                                 </script>';
                          $feelpack2->close(); }
        ///////insert emotion into feelings table 



}else if($emo == $reactold){



  ///////delete emotion from feelings table 
$selemostate3="DELETE  FROM feel WHERE post='".$nivd."' AND num='$p'  "; 
             $feelpack3= $super->prepare($selemostate3);
                if(false === $feelpack3){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                            $feelpack3->execute(); 
                            echo'<script>
                      var pluss="'.$add.'";  

                        var lay ="'.$lay.'";
   if(lay == 1){ var themetype="underxx";  }else{  var themetype="'.$myemo.'";  }

                        var idd="'.$nivd.'";    var gring="'.$gringo.'";     var em="'.$emo.'";
     var collectcount = $("#holdemotioncount"+em+""+idd+""+gring+"").val();
          collectcount--;
      document.getElementById("holdemotioncount"+em+""+idd+""+gring+"").value=collectcount;
        if(collectcount < 1){ collectcount = "..";} 
       document.getElementById("emotioncount"+em+""+idd+""+gring+"").innerHTML=collectcount;
       document.getElementById("feelstate"+idd+""+gring+"").value="0";

        
          document.getElementById(""+pluss+""+idd+""+gring+"").style.opacity="0.6";

        $("#"+pluss+""+idd+""+gring+"").removeClass(""+themetype+"");

        $("#"+pluss+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");


    var roller=document.getElementById("emotion"+em+""+idd+""+gring+"");
      roller.style.transition="all 4s ease"; 
    roller.style.transform="rotate(-720deg)";
              </script>';
                        $feelpack3->close(); }
        ///////delete emotion from feelings table 



}else{



///////update emotion from feelings table 
$selemostate4="UPDATE  feel SET  react='".$emo."', time=now() WHERE post='".$nivd."' AND num='$p'  "; 
             $feelpack4= $super->prepare($selemostate4);
                if(false === $feelpack4){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                            $feelpack4->execute(); 
                          echo'<script>
                            var pluss="'.$add.'";   
var minus1="'.$remove1.'";   
var minus2="'.$remove2.'";   
var minus3="'.$remove3.'";   

  var lay ="'.$lay.'";
   if(lay == 1){ var themetype="underxx";  }else{  var themetype="'.$myemo.'";  }

var idd="'.$nivd.'";       var gring="'.$gringo.'";    var em="'.$emo.'";  var emxx="'.$reactold.'";
  var collectcountxx = $("#holdemotioncount"+emxx+""+idd+""+gring+"").val();
          collectcountxx--;
      document.getElementById("holdemotioncount"+emxx+""+idd+""+gring+"").value=collectcountxx; 
       if(collectcountxx < 1){ collectcountxx = " ";}
       document.getElementById("emotioncount"+emxx+""+idd+""+gring+"").innerHTML=collectcountxx;
       var collectcount = $("#holdemotioncount"+em+""+idd+""+gring+"").val();
          collectcount++;
      document.getElementById("holdemotioncount"+em+""+idd+""+gring+"").value=collectcount; 
       document.getElementById("emotioncount"+em+""+idd+""+gring+"").innerHTML=collectcount;
        document.getElementById("feelstate"+idd+""+gring+"").value=em;

       document.getElementById(""+minus1+""+idd+""+gring+"").style.opacity="0.6";
        document.getElementById(""+minus2+""+idd+""+gring+"").style.opacity="0.6";
         document.getElementById(""+minus3+""+idd+""+gring+"").style.opacity="0.6";
          document.getElementById(""+pluss+""+idd+""+gring+"").style.opacity="1";

      
         $("#emotion"+em+""+idd+""+gring+"").removeClass("emodeactivex");$("#emotion"+em+""+idd+""+gring+"").addClass("emoactivekey"+em+"x");   document.getElementById("emotion"+em+""+idd+""+gring+"").style.height="28px";   document.getElementById("emotion"+em+""+idd+""+gring+"").style.width="auto";


          

     $("#"+minus1+""+idd+""+gring+"").removeClass(""+themetype+"");
      $("#"+minus2+""+idd+""+gring+"").removeClass(""+themetype+"");
       $("#"+minus3+""+idd+""+gring+"").removeClass(""+themetype+"");
        $("#"+pluss+""+idd+""+gring+"").addClass(""+themetype+"");

          $("#"+minus1+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
      $("#"+minus2+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
       $("#"+minus3+""+idd+""+gring+"").removeClass("hightext"+idd+""+gring+"");
        $("#"+pluss+""+idd+""+gring+"").addClass("hightext"+idd+""+gring+"");

   
   setTimeout(function(){

var rollerxx=document.getElementById("emotion"+emxx+""+idd+""+gring+"");
      rollerxx.style.transition="all 4s ease"; 
    rollerxx.style.transform="rotate(-720deg)";
      var roller=document.getElementById("emotion"+em+""+idd+""+gring+"");
        roller.style.transform="rotate(2500000deg)"; 
      roller.style.transition="all 4120.60000000s ease"; 

    },500)


               </script>';
                        $feelpack4->close(); }
        ///////update emotion from feelings table
         
    }






}

        ?>