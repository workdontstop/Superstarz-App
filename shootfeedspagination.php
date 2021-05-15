<?php 

  $feedcounter=1;        $scroll=0;      $page=0;     $jump=0;    $idlockxx=0;  $activatein=0; $pagein=0;   $jumpin=0;    $jumpinlock=0;
  $xtra1=0;       $xtra2=0;  $xtra3=0;      $xtra4=0;      $xtra5=0;   $instate=0; 



    $pagenum=$_POST['mem1'];   $pager=$_POST['mem2'];  $last=$_POST['mem3'];    $feedhoop=$_POST['mem4']; 
   
   $gringo=$_POST['mem5'];   $d=$_POST['mem6'];       

    $idlock=$_POST['mem9'];     $name=$_POST['mem10'];
 
   $feedhoop = $feedhoop + 1;	
    
   include('shootfeeds.php');
   


  ?>


