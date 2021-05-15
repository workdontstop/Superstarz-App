


    <?php






   require('dataco.php');
require('phpopen.php'); 
include('exitx.php');


    $dd= json_decode(stripslashes($_POST['ivd'])); 
    $tot=$_POST['total'];
     $gringo=$_POST['gringo'];
      $pagenum=$_POST['pager'];




    
for($i= 0;  $i < $tot; $i++) { 

  $tame=$i; 

  echo '
<script>




switchlayout'.$dd[$i].''.$pagenum.''.$gringo.'();

    




</script>

  ';


}






        ?>












