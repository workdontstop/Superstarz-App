<?php 

  $listcounter=1;       





 
    $pagenum=$_POST['mem1'];   $pager=$_POST['mem2'];  $last=$_POST['mem3'];    $listhoop=$_POST['mem4']; 



$nivd=0;   $gringo=0;    $pagenumin=0;   $jumpin=0;    $jumplockin=0;
     



  $con=$_POST['mem5'];
   
     $d=$_POST['mem6'];

      $type=$_POST['mem7'];

         $idlock=$_POST['mem8'];
     
  

 
   $listhoop = $listhoop + 1;	

    
   include('shootcontactlistings.php');
   


  ?>


