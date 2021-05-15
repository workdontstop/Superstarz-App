<?php


if($_SESSION['theme'] == 0){ $zup="zuperxyinfo";  $zupyx="";   $opaty="opacity:0.5";  $colza="#dddddd";   $colzu=$colz;
  $colzuw="";  $colzuk='color: '.$colz.';';    $shadz="";     $colzddx = 'text-shadow: 0.5px 1px 3.5px '.$colz.';';     }
  else{$zup="zuperxyinfoblack";  $zupyx="zuperxyinfo";  $opaty="opacity:0.5";  $colza="";   $colzu="";  $colzuw="";
$colzuk="";    $shadz='text-shadow: 0.1px 1px 2.5px '.$colz.';color: #ffffff;';    
 $colzddx = 'text-shadow: 0.5px 1px 5.5px '.$colz.';';    }



 if($typz==0){     $opa="";  $zupxx=$zup; $colxx=$colz; $colxxa=$colzu;  $colxxo=$colza;  $joinbuttonconty=" ";    $zupo="zuperxyinfo";  $colxxoq=$colza; $colzukkn=$colzuk;   $colxxaw=$colzuw;
  $me='<span style="margin-left:3.5px"><i class="fas fa-user-edit" aria-hidden="true" ></i><span>';  $shadza=$shadz;}
else{  $opa= $opaty;  $zupxx=$zupyx;  $colxx="";  $colxxo="";   $joinbuttonconty=$joinbuttoncon;  $zupo=$zupyx;  $colxxoq="";
     $colxxa="";  $colzukkn=$colzddx;  $shadz="";   $colxxaw="";  
 $me='<i class="fas fa-user" aria-hidden="true" ></i>'; }


if($p == $memz){
echo '
 <div class="'.$joinbutton.' juju  zuzax '.$zupo.' "  style="'.$opa.';color:'.$colxxoq.';text-align:center;padding:0px;font-size:128%;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> 
 <div id="concyri1'.$memz.''.$pagez.''.$grinz.'"   style="margin-top:0.5em">  '.$me.' </div></div> 

<script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri1'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.55em";}
</script>
 ';
}
else{




if($datasrcz == 0){
/////count fav and fans 
$concount=mysqli_query($super,"SELECT count(id) FROM `fav` WHERE num=".$p." and favadd=".$memz." " );   
   $constate=$concount->fetch_row();  
   $connectstatez = $constate[0];   
/////count fav and fans 
 }
     
     
    

 if( $connectstatez==0 && $responsez==0  || $responsez==3 ){


 $plusking= ' <div   onmousedown="javascript:goconnectdata'.$memz.''.$pagez.''.$grinz.'(1);"   class="  '.$joinbutton.' juju  zuzax " 
  style="'.$opa.';font-size:128%;padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> <div id="concyri2'.$memz.''.$pagez.''.$grinz.'"   style="margin-top:0.55em">
 <span class="'.$zupxx.'" id="pluskey'.$memz.''.$pagez.''.$grinz.'" style="color:'.$colxxa.';'.$shadz.'"><i class="fas fa-plus" aria-hidden="true" ></i></span> 
  <span class="'.$zupxx.'"   id="clockplus'.$memz.''.$pagez.''.$grinz.'"    style="display:none;color:'.$colxxaw.';'.$shadz.'"> <div  class=" waveboy"  ><i class="fas fa-clock"></i> </div>  </span>   </div>
 </div>

 <script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri2'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.6em";}
</script> ';



 $pluskingxx=  ' <div   onmousedown="javascript:goconnectdata'.$memz.''.$pagez.''.$grinz.'(3);"   class="  '.$joinbutton.' juju  zuzax "  style="'.$opa.';font-size:128%;padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> <div 
   id="concyri3'.$memz.''.$pagez.''.$grinz.'"   style="margin-top:0.55em">
 <span class="'.$zupxx.'" id="trashkey'.$memz.''.$pagez.''.$grinz.'"  style="opacity:1;'.$colzukkn.';'.$shadz.'"><i class="fas fa-trash" aria-hidden="true" ></i></span>
 <span class="'.$zupxx.'"   id="clocktrash'.$memz.''.$pagez.''.$grinz.'"    style="display:none;color:'.$colxxaw.';'.$shadz.'"> <div  class=" waveboy"  ><i class="fas fa-clock"></i> </div>  </span>     </div> </div>

 <script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri3'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.6em";}
</script> ';

if( $databasez == 1 ){
   
   $conindel=0;

  ///////delete member from logged user favadd
$insertconnect3="DELETE  FROM fav WHERE num='".$p."' AND favadd='".$memz."'"; 
             $connectpack3= $super->prepare($insertconnect3);
                if(false === $connectpack3){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                            $connectpacklock3 = $connectpack3->execute(); 
                             if(false === $connectpacklock3){
                              echo $pluskingxx;
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }else{
                              $conindel=1;
                          $connectpack3->close(); }}
        ///////delete member from logged user favadd 

        ///////delete logged user from  member fanadd
            if( $conindel == 1) {           
$insertconnect4="DELETE  FROM fan WHERE num='".$memz."' AND fanadd='".$p."'  "; 
             $connectpack4= $super->prepare($insertconnect4);
                if(false === $connectpack4){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                          $connectpacklock4 = $connectpack4->execute(); 
                             if(false === $connectpacklock4){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }else{
                              $conindel=0;
                               if($typz == 0){ echo'<script> 
                      var  dwid = $("#datawidefantotalin").val();
                                       dwid--;
             document.getElementById("datawidefantotalin").value=dwid;
             document.getElementById("widefantotalin").innerHTML=dwid;
             if(dwid <= 1){  document.getElementById("widefantotalinname").innerHTML="FAN";}
             else{  document.getElementById("widefantotalinname").innerHTML="FANS"; }
              connectnotify(0);  </script>';  }
              else if($typz == 1){echo'<script> 
                      connectnotify'.$memz.''.$postidenz.''.$grinz.'(0);
                  </script> ';   }
                               echo $plusking;
                          $connectpack4->close(); } } }
        ///////delete logged user from  member fanadd 
   }
   else{

    echo $plusking;
   }






     }else{


 if($databasez==0 || $responsez==1 ){


$checkking= ' <div   onmousedown="javascript:goconnectdata'.$memz.''.$pagez.''.$grinz.'(2);"   class="  '.$joinbutton.' juju  zuzax 
 '.$zupo.' "  style="'.$opa.';color:'.$colxxo.';font-size:128%;padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> <div  id="concyri4'.$memz.''.$pagez.''.$grinz.'"  style="margin-top:0.6em;">
 <span  ><i class="fas fa-check" aria-hidden="true" ></i></span> </div>   </div> 

 <script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri4'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.65em";}
</script>';



  $checkkingxx= ' <div   onmousedown="javascript:goconnectdata'.$memz.''.$pagez.''.$grinz.'(1);"   class="  '.$joinbutton.' juju  zuzax "  style="'.$opa.';font-size:128%;padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> <div  id="concyri5'.$memz.''.$pagez.''.$grinz.'"  style="margin-top:0.55em">
 <span class="'.$zupxx.'" id="pluskey'.$memz.''.$pagez.''.$grinz.'" style="color:'.$colxxa.';'.$shadz.'"><i class="fas fa-plus" aria-hidden="true" ></i></span> 
 <span class="'.$zupxx.'" id="clockplus'.$memz.''.$pagez.''.$grinz.'"  style="display:none;color:'.$colxxaw.';'.$shadz.'"> <div  class=" waveboy"  ><i class="fas fa-clock"></i> </div>  </span> </div>
 </div> 

 <script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri5'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.6em";}
</script>';


 if( $databasez == 1 ){
   $conin=0;
    $n="x";
$chk="$p$n$memz";
  ///////insert member into logged user favadd
$insertconnect="INSERT IGNORE INTO fav (num,favadd,checker,time) VALUES ('$p','$memz','$chk',now())"; 
             $connectpack= $super->prepare($insertconnect);
                if(false === $connectpack){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                           $connectpacklock = $connectpack->execute(); 
                             if(false === $connectpacklock){
                               echo $checkkingxx;
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }else{
                              $conin=1;
                          $connectpack->close(); }}
        ///////insert member into logged user favadd 

        ///////insert logged user into  member fanadd
            if( $conin == 1) {    
              $n="x";
            $chk2="$memz$n$p";       
$insertconnect2="INSERT IGNORE INTO fan (num,fanadd,checker,time) VALUES ('$memz','$p','$chk2',now())"; 
             $connectpack2= $super->prepare($insertconnect2);
                if(false === $connectpack2){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                         $connectpacklock2 = $connectpack2->execute(); 
                            if(false === $connectpacklock2){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }else{
                              $conin=0;
                              if($typz == 0){ echo'<script>
          var  dwid = $("#datawidefantotalin").val();
                 dwid++;
             document.getElementById("datawidefantotalin").value=dwid;
             document.getElementById("widefantotalin").innerHTML=dwid;
              if(dwid <= 1){  document.getElementById("widefantotalinname").innerHTML="FAN";}
             else{  document.getElementById("widefantotalinname").innerHTML="FANS"; }
              connectnotify(1);  </script>';  }
                else if($typz == 1){echo'<script> 
                      connectnotify'.$memz.''.$postidenz.''.$grinz.'(1);
                  </script> ';   }
                               echo $checkking;
                          $connectpack2->close(); } } }
        ///////insert logged user into  member fanadd 
   }else{

echo $checkking;

   }


   


}else{


echo ' <div   onmousedown="javascript:goconnectdata'.$memz.''.$pagez.''.$grinz.'(3);"   class="  '.$joinbutton.' juju  zuzax " 
 style="'.$opa.';font-size:128%;padding:0px;width:2.8em;height:2.8em;border-radius:50%;margin:0 auto;'.$joinbuttonconty.'"> <div id="concyri6'.$memz.''.$pagez.''.$grinz.'"  style="margin-top:0.55em;">
 <span class="'.$zupxx.'" id="trashkey'.$memz.''.$pagez.''.$grinz.'"  style="opacity:1;'.$colzukkn.';'.$shadz.'"><i class="fas fa-trash" aria-hidden="true" ></i></span> 
  <span class="'.$zupxx.'"  id="clocktrash'.$memz.''.$pagez.''.$grinz.'"   style="display:none;color:'.$colxxaw.';'.$shadz.'"> <div  class=" waveboy"  ><i class="fas fa-clock"></i> </div> </span> </div> </div> 

  <script type="text/javascript">
  if(mobileboy == 0){ 
    document.getElementById("concyri6'.$memz.''.$pagez.''.$grinz.'").style.marginTop="0.6em";}
</script>';



}            }



}




     ?>



     



<script type="text/javascript">





 function  goconnectdata<?php echo $memz; ?><?php echo $pagez; ?><?php echo $grinz; ?>(a){

if( a == 1){  
   $("#pluskey<?php echo $memz; ?><?php echo $pagez; ?><?php echo $grinz; ?>").hide();
  $("#clockplus<?php echo $memz; ?><?php echo $pagez; ?><?php echo $grinz; ?>").show();}
else if( a == 3){  
   $("#trashkey<?php echo $memz; ?><?php echo $pagez; ?><?php echo $grinz; ?>").hide();
  $("#clocktrash<?php echo $memz; ?><?php echo $pagez; ?><?php echo $grinz; ?>").show();}
  else{ }
   

   var m= "<?php echo $memz; ?>";
    var pa= "<?php echo $pagez; ?>";
    var gri= "<?php echo $grinz; ?>";
    var coo= "<?php echo $colz; ?>";
     var pod= "<?php echo $postidenz; ?>";
       var tt= "<?php echo $typz; ?>";
       var divdata="";

       if(tt == 0){ var divdata="superconnect";  }
       else if(tt == 1){ var divdata="startconnect"+m+""+pod+""+gri+""; }
  
   $.ajax({   type: "POST",
  url: "connect.php",
  data: {database:1,id:m,pagenum:pa,gringo:gri,datasrc:2,respon:a,color:coo,source:0,postid:pod,type:tt}, 
 success: function(data){
    $("#"+divdata+"").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  }); }


</script>




