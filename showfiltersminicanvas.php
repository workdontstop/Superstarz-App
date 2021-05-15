





    <?php  
require('phpopenx.php'); 
include('exit.php');
$pun=$_SESSION['numuser'];
$cc="";
$cc=$_POST['c'];
$d=$_SESSION['numuser'];
 include('switchtheme.php');
?>




<script   type="text/javascript">
imagey = new Image();
imagey = document.querySelector("#prevmerge1");



  uncroppedCanvasxx = document.querySelector("#minicanv");
 uncroppedContextxx =  uncroppedCanvasxx.getContext('2d');
uncroppedContextxx.clearRect(0,0,uncroppedCanvasxx.width,uncroppedCanvasxx.height);
 iW  = imagey.width;
      iH = imagey.height;
sizethisimagezmini();
uncroppedCanvasxx.width = newWzmini;
     uncroppedCanvasxx.height  = newHzmini;
uncroppedContextxx.drawImage(imagey, 0,0, imagey.width,imagey.height ,0,0,newWzmini, newHzmini);
  uncroppedCanvasxx.style.height=""+newHztmini+"px";       uncroppedCanvasxx.style.width=""+newWztmini+"px";



</script>


















