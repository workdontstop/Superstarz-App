


<?php  
   require('dataco.php');
   require('phpopenx.php'); 
   include('exit.php');

   $d=$_SESSION['numuser'];

   $posi=$_POST['mem1'];

    $totup=$_POST['mem2'];

  





    $delql="DELETE  FROM temp WHERE num='".$d."'   AND  position=?  ";  

    $delinstrap= $super->prepare($delql);
               
  for($i= $posi;  $i <= $totup; $i++) { 
    $count++;
    $delinstrap->bind_param("i",$i);
     $delinstrap->execute(); }

    $delinstrap->close();

$newtot= $totup - $count;

 echo'<script>  
      var gam="'.$newtot.'"; 
        document.getElementById("totalitems").value=gam;
           </script>';

if($posi == 1){   $_SESSION['itemimagesizecontrol'] = "0";  }

   
   ?>



<script>
     
 


var removeimageclickedstart="<?php echo $posi; ?>";
var removeimageclickedstop= "<?php echo $totup; ?>";

for(var i= removeimageclickedstart;  i <= removeimageclickedstop; i++) { 

var a= $("#tempimage"+i+"").val(); 
var b= i; 
var c= $("#temptype"+i+"").val(); 

var url="dropitemimagefile.php";
$.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
$("#showstartfiledrop"+i+"").html(data).show(); });   

document.getElementById("kung"+i+"").innerHTML='<span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> '+i+' </h4></span>';

var url="dropitemimagefile.php";
$.post(url,{request:"fa",mem1:a,mem2:b,mem3:c}, function(data){
$("#showstartfiledrop"+i+"").html(data).show(); });   

document.getElementById("kung"+i+"").innerHTML='<span  style="margin-top:15px;color:#cccccc">  <br>  <br><h4> '+i+' </h4></span>';

           }


        
</script>



<div  id="showstartfiledrop1"> </div> 
<div  id="showstartfiledrop2"> </div>
<div  id="showstartfiledrop3"> </div>
<div  id="showstartfiledrop4"> </div>
<div  id="showstartfiledrop5"> </div>
<div  id="showstartfiledrop6"> </div>
<div  id="showstartfiledrop7"> </div>
<div  id="showstartfiledrop8"> </div>
<div  id="showstartfiledrop9"> </div>
<div  id="showstartfiledrop10"> </div>
<div  id="showstartfiledrop11"> </div>
<div  id="showstartfiledrop12"> </div>
<div  id="showstartfiledrop13"> </div>
<div  id="showstartfiledrop14"> </div>
<div  id="showstartfiledrop15"> </div>
<div  id="showstartfiledrop16"> </div>        








