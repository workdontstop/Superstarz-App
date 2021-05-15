
<?php




require('phpopen.php'); 
include('exit.php');


$d=$_SESSION['numuser'];

$comtext=$_POST['cap'];
$poss=$_POST['postid'];

$pag=$_POST['pag'];
$nex=$_POST['nex'];


$counttotal=0;




echo'

<script type="text/javascript">

$(document).ready(function(){


var a="'.$pag.'";
var c="'.$nex.'";

var x="'.$comtext.'";
var z="'.$poss.'";


    $.ajax({
  type: "POST",
  url: "commentlibrary.php",
  data: {pag:a,nex:c,cap:x,postid:z},
 success: function(data){
  $("#reactpost'.$pag.'").html(data).show();
 },error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }
         }); 

})

         </script>



         ';



                           


?>










