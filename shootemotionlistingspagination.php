<?php 

  $listcounter=1;        $scroll=0;      $page=0;     $jump=0;      $pagenumin=0;   $jumpin=0;  $jumplockin=0;
       





 
    $pagenum=$_POST['mem1'];   $pager=$_POST['mem2'];  $last=$_POST['mem3'];    $listhoop=$_POST['mem4']; 
   
   $gringo=$_POST['mem5'];   $nivd=$_POST['mem6'];      $idlock=$_POST['mem7'];    $emo=$_POST['mem8'];
     
  $mem=$_POST['mem9'];   $type=$_POST['mem10'];     $page=$_POST['mem11'];   $jump=$_POST['mem12'];

     $jumplock=$_POST['mem13'];
     
 
   $listhoop = $listhoop + 1;	

    
   include('shootemotionlistings.php');
   


  ?>


