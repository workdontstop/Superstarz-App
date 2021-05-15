


<?php  
   require('dataco.php');
   require('phpopenx.php'); 
   include('exit.php');

   $d=$_SESSION['numuser'];

   $imagename=$_POST['mem1'];
    $num=$_POST['mem2'];
      $ty=$_POST['mem3'];

  
   

if($ty == 1){   unlink("images/wall/pil/".$imagename);    }


  

   
   ?>
