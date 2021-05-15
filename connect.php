 


  <?php   
 require('dataco.php');
require('phpopen.php'); 
include('exit.php');
include('theme.php');




if(isset($_POST['id'])){


 $p=$_SESSION['numuser'];
$memz=$_POST['id'];
$pagez=$_POST['pagenum'];
$grinz=$_POST['gringo'];
      $datasrcz=$_POST['datasrc'];
       $responsez=$_POST['respon'];
        $databasez=$_POST['database'];
         $colz=$_POST['color'];
 $connectstatez=$_POST['source'];  
  $postidenz=$_POST['postid']; 
   $typz=$_POST['type'];   




   


 
include('shootconnect.php');





   }






