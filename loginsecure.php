<?php
                         
                         
     $dbusername=" ";
$dbpassword= " ";                    
  $user= " ";   
  $pass= " ";    
  $new= " ";                        
                         
                   
                             
                              require('dataco.php'); 
                           
    ///////////////////////////////////////selcting user ad pass 4 testing usig prepared statmt//////////
                             
                             
                           $user=mysqli_real_escape_string($super,$_POST['user']);  
                            $pass=mysqli_real_escape_string($super,$_POST['pass']); 
                       
                             $pass=md5 ($pass);
                             $new="new";
                             
                             $sqla="SELECT user,pass,num,imname,cl,theme,name,quote FROM member WHERE user=? AND pass=?  "; 
                              $instrap= $super->prepare($sqla);
                              ///prepare can fail because of syntax errors,missing privilages
                              if(false === $instrap){
                              echo'<script>  $("#errorback").show(); 
                               $("#dataerror1").show();
                                    </script>'; }
                                else{

                           $instraplock = $instrap->bind_param("ss",$ur,$ps);
                           ///bind param can fail if theres a type conflict
                             if(false === $instraplock){ 
                              $instrap->close();
                               echo'<script>  $("#errorback").show(); 
                               $("#dataerror2").show();
                                    </script>';  }
                                else{

                             $ur=$user; 
                             $ps=$pass;
                             $instraplock = $instrap->execute();
                             ////execute can fail for various reasons
                              if(false === $instraplock){ 
                                $instrap->close();
                                 echo'<script>  $("#errorback").show(); 
                               $("#dataerror1").show();
                                    </script>';  }
                                else{

                              $res=$instrap->get_result();
                             
                             while($row = $res->fetch_assoc() ){
                               $dbusername=$row['user'];  
                                      $dbpassword=$row['pass']; 
                                     $d=$row['num']; 
                                     $ai=$row['imname'];
                                      $naa=$row['name'];
                                       $qaa=$row['quote'];
                                      $tt=$row['theme'];
                                     $coll=$row['cl']; }

                               $instrap->close();  }}}

                           
                                
                          
               
      ///////////////////////////////////////////selcting user ad pass 4 testing usig prepared statmt///////////// 
                
                             
                             
                if ($user== $dbusername && $pass == $dbpassword)   {
                                             
   
   
   //////////////////////////////////////////////////declaring  log staus as 1 and registerd to 0 for a 2nd tym user/////////
                    
        $sqlb="  UPDATE `member` SET `stat`=? WHERE `num`=$d";  
           $ina= $super->prepare($sqlb);
           $ina->bind_param("i",$ro);
           $ro='1'; 
          $ina->execute();
          $ina->close();
                    
                    
      
                    
        ///////////////////////////////////////////declaring  log staus as 1 and registerd to 0 for a 2nd tym user////////            

      
                                     
                                     require('phpopen.php');    
                                     
                                      if( $_SESSION['user'])
                                    {   
                                     header("location:logone.php");                                 
                                     }
                                    else{
                                         
                                           if($ai !=""){
                    
                                           $_SESSION['profilepic'] = $ai;  
                    
                                           }else{
                    
                                          $_SESSION['profilepic'] = "blank.png"; 
                                            }   

                                $_SESSION['cl'] = $coll;  $_SESSION['check'] = '0';
                                                                              
                                  $_SESSION['numuser'] = $d;  $_SESSION['user'] = $dbusername;  
  
                              $_SESSION['theme'] = $tt;
                                     
                                       $_SESSION['nameuser'] = $naa;

                                         $_SESSION['quoteuser'] = $qaa;

                                    /// header("location:logcheck.php?num=$d");

                                     echo'<script> location.href="logcheck.php";  </script> ';
                                 
                          
                                     } }
                               
                            else {
                                 
                           header("location:logfail.php"); 
                                
                                 }
                         
   ?>





