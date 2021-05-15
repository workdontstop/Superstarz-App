
          
          <?php


 require('dataco.php');
       require('phpopen.php');  

                    
                  
	          if( !$_SESSION )    {           
	
	$user=mysqli_real_escape_string($super,$_POST['user']);
	$pass=mysqli_real_escape_string($super,$_POST['pass']);
    $pass2=mysqli_real_escape_string($super,$_POST['pass2']);
      $pass= md5($pass); 
     $done=0;    
                
      
      /////////////////////////////inserting new user data/////////////////////////////
                 
$sqlb="INSERT INTO member(user,pass,imname,name,quote,cl,stat,noti,tut,theme,email,date) VALUES (?,?,'','','','#cccccc','1','0','0','0','',now())";  
           $ina= $super->prepare($sqlb);
               if(false === $ina){
                   echo'<script>  $("#errorback").show(); 
                    $("#dataerror1").show();
                     </script>'; }else{
             $inalock = $ina->bind_param("ss",$ur,$ps);
             if(false === $inalock ){ 
                   $ina->close();
                 echo'<script>  $("#errorback").show(); 
                   $("#dataerror2").show();
                      </script>';  }
                       else{
                 $ur=$user;
                 $ps=$pass;
             $inalock = $ina->execute();
             if(false === $inalock){ 
                    $ina->close();
              echo'<script>  $("#errorback").show(); 
                   $("#dataerror1").show();
                   </script>';  }
                          else{  
                          $done=1; 
                     $nuu =mysqli_insert_id($super);           
                $ina->close();  }}}
         
     /////////////////////////////inserting new user data/////////////////////////////
    
 
   

                           $_SESSION['profilepic']=" ";      
                           $_SESSION['cl'] = "#cccccc";  
                           $_SESSION['check'] = '0';
                            $_SESSION['numuser'] = $nuu; 
                             $_SESSION['user'] = $user;  
                            $_SESSION['theme'] = 0;
      
  
      
        $sqlbc=" INSERT INTO memberfind (num,name,user) VALUES (?,'',?)";  
           $inac= $super->prepare($sqlbc);
           $inac->bind_param("is",$urc,$ua);
           $urc=$nuu;  $ua=$user;
           $inac->execute();
           $inac->close();
               
               
      
      
if($done==1){    echo'<script> location.href="logcheck.php";  </script> ';  }
       

       }


 $super->close();

	?>