


<?php  
   require('dataco.php');
   require('phpopenx.php'); 
   include('exit.php');

   $d=$_SESSION['numuser'];
   $buy=$_POST['mem1'];
   $viewname=$_POST['mem2']; 
  

   ?>



<img id="itemgo" src="images/wall/<?php echo $viewname; ?>"  style="display:none;"/>

 <input  id="dropimageitem" value="<?php echo $buy; ?>" hidden>
 
 

<script type="text/javascript">
  
         $("#showviewitemback").show();
          $("#showviewitem").show();
        var itemcanvas= document.querySelector("#viewitem");
        var itemcontext = itemcanvas.getContext('2d');
       itemcontext.clearRect(0,0,itemcanvas.width,itemcanvas.height);

dimage = new Image();
dimage = document.querySelector("#itemgo");

 iWi  = dimage.width;
 iHi = dimage.height;
 
sizecanvasitem(); 
itemcanvas.width = newWi;
itemcanvas.height  = newHi;
itemcontext.drawImage(dimage, 0,0, dimage.width,dimage.height ,0,0, newWi, newHi);

</script>


  



               








