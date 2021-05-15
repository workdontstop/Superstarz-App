
 <script src="js/jquery.js"></script>
 <script>
      
      
           
        
           
      </script>
      

<?php 

  require('dataco.php');
require('phpopenx.php');
include('exit.php');



 
            $num=$_SESSION['numuser']; 
            $d=$_SESSION['numuser']; 
  

 


$tup=$_GET['move'];


    $roll="2";

  $qrya=mysqli_query($super,"UPDATE `searchme` SET  xm='".$roll."' WHERE `num`=$num"); 
    
    
        header("location:w4tup.php?move=$tup");
    



?>




