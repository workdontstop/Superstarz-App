<?php 
require('dataco.php');

$diy=$d;

$klear=array();


 $sqlbc="SELECT im FROM temp WHERE num=?  "; 
                              $instbc= $super->prepare($sqlbc);
                             $instbc->bind_param("i",$nrr);
                            $nrr=$diy;
                             $instbc->execute();
                              $resbc=$instbc->get_result();
                             $nunbi= $resbc->num_rows;
                             while($row = $resbc->fetch_assoc() ){
                           
                            array_push($klear,$row['im']); 
                                                                }
                            $instbc->close(); 


if($nunbi !="0")
{
  //unlink("images/wall/".$un); 
  //unlink("images/wallxfit/".$un); 

for($i= 0;  $i < $nunbi; $i++) { 
 

  $kk = $klear[$i]; 
   unlink("images/wall/pil/".$kk); 
 }

  $sqldd=mysqli_query($super,"DELETE  FROM temp WHERE num='".$diy."' ");  
}








?>