 

  <script type="text/javascript">


  </script>


 

<?php

require('phpopen.php');

require('dataco.php');

 $d=$_POST['member'];  

$type=$_POST['ty'];   

$page=$_POST['page'];




$jump=$_POST['jump'];
      $jumplock=$_POST['jumplock'];



        $activatein=$_POST['activatein'];
         $pagein=$_POST['pagein'];
           $jumpin=$_POST['jumpin'];
           $jumpinlock=$_POST['jumpinlock'];
              $xtra1=$_POST['xtra1'];
                $xtra2=$_POST['xtra2'];
                  $xtra3=$_POST['xtra3'];
                      $xtra4=$_POST['xtra4'];
                          $xtra5=$_POST['xtra5'];

                         


?>





<?php 


  



       $viewuser=$_POST['us'];  
 



$seluserinfo="SELECT  imname,cl FROM member WHERE user=?  "; 
             $userpack= $super->prepare($seluserinfo);
                if(false === $userpack){
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
              $userpacklock = $userpack->bind_param("s",$mynum);
                           $mynum=$viewuser;
                     $userpacklock =   $userpack->execute();
                      if(false === $userpacklock){
                        $userpack->close();
                        echo'<script>  $("#profileerrorback").show(); 
                         $("#profiledataerror1").show();
                                    </script>'; }
                                    else{
                              $res=$userpack->get_result();
                               $finalres= $res->num_rows;
                             while($row = $res->fetch_assoc() ){
                            
                               $viewuserpic=$row['imname']; 
                              
                                $viewusercolor=$row['cl'];   }  
                                $userpack->close(); }}




  ?>

<img  id="profilepop"   src="images/profile/<?php echo $viewuserpic; ?>"  class="img-responsive img-rounded zuzax juju"   style="margin:auto;width:11em;height:auto;padding:4px;-moz-box-shadow:<?php echo $viewusercolor; ?> 0 0 4px; -webkit-box-shadow:<?php echo $viewusercolor; ?> 0 0 4px;border-radius:50%;box-shadow:<?php echo $viewusercolor; ?> 0 0 4px; border:3.2px solid<?php echo $viewusercolor; ?>;" title="<?php echo $viewuser; ?>;" />


<script>





   $(document).ready(function(){


  if(mobileboy == 0){  document.getElementById("profilepopout").style.marginTop="14em";
    document.getElementById("profilepop").style.width="18em";   }

});
</script>

   








