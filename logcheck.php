

<?php

require('phpopen.php'); 
include('exit.php');
require('dataco.php');


$d=$_SESSION['numuser'];



$user=$_SESSION['user'];

 


$_SESSION['supercropcontrol']=0;
$_SESSION['itemimagesizecontrol']=0;
$_SESSION['itemimagesizevaluew']=0;
$_SESSION['itemimagesizevalueh']=0;

$_SESSION['superthemetypevalue']=3;

$_SESSION['supercropstateallow']=0;
$_SESSION['supercropstate']=0;
$_SESSION['supercropwidth']=0;
$_SESSION['supercropheight']=0;
$_SESSION['superstylewidth'] = 0;
$_SESSION['superstyleheight']=0;





if($_SESSION['check'] =="1"  || !$_SESSION){
    
   
$sqlb=" UPDATE `member` SET `stat`=? WHERE `num`=$d";  
           $ina= $super->prepare($sqlb);
           $ina->bind_param("i",$ro);
           $ro='0'; 
          $ina->execute();
          $ina->close();
    
     

 session_destroy(); 
header("location:logout2.php?num=$d");      }


?>                  

 <!DOCTYPE html>
<html lang="en">
  <head>

      

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Superstarz</title>
<link rel="icon" href="images/sp2.png" type="image/png" />
    <!-- Bootstrap -->


   <script>
    window.history.forward();
function preventback(){window.history.forward();}
setTimeout("preventback()",5);
window.onunload=function(){null};</script>



       <link href="tools/css/bootstrap.min.css" rel="stylesheet">
       <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="tools/css/sn.css" rel="stylesheet">
       <link href="tools/css/subcss/start.css" rel="stylesheet">
      
      
     
      
   <link rel="stylesheet" href="tools/font/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font2/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
      


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     
     
                 
                
                 <?php  
                  
                  $ray = array(1,2,3,4);
                   $rayindex = array_rand($ray);
                   $tr =$ray[$rayindex];
 
       if ($tr=="1"){$bol="love2.png"; $btxt='  <bottr><b> <font color="#ff8080"> Lovely</font> </b> </bottr>'; $ko='#ff8080';} 
    else if ($tr=="2"){$bol="cool2.png"; $btxt=' <bottr><b> <font color="#00ccff"> Fresh</font> </b> </bottr>'; $ko='#00ccff';} 
    else if ($tr=="3"){$bol="oo2.png"; $btxt=' <bottr><b> <font color="#dddddd"> Care </font> </b> </bottr>'; $ko='#dddddd';} 
          else {$bol="laugh2.png";  $btxt=' <bottr><b> <font color="#ffcc00"> Fun </font></b> </bottr>'; $ko='#ffcc00';}  ?>    
         
             
             
             
             
            
          
          
         
               <div class="container">
                <div class="row">
           

             <div class="col-xs-12" style="padding:10px">

           <div class="col-xs-hidden col-sm-3 col-md-4"></div>

         
             <div class="col-xs-12 col-sm-6 col-md-4 turmid"  style="height:auto;top:11em;border-radius:10px;padding:0px">
                     


 <div class="col-xs-12"  style="padding:0px;">
   

 <div class="col-xs-3 "  style="padding:6px;text-align:center;">

 <img src="images/profilemini/<?php echo $_SESSION['profilepic']; ?>"  class="img-rounded img-responsive" style="padding:4px;border-radius:50%; -moz-box-shadow: 0 0 2px<?php echo $_SESSION['cl']; ?>; -webkit-box-shadow: 0 0 2px<?php echo $_SESSION['cl']; ?>;box-shadow: 0 0 2px<?php echo $_SESSION['cl']; ?>;border:2px solid<?php echo $_SESSION['cl']; ?>;"   title="<?php echo $user; ?>"/>
                        
               </div>

                   <div class="col-xs-9 sliderlook "  style="display:flex;align-items:center;padding:0px;text-align:center;font-size:140%;font-weight:bolder;overflow:auto;height:100px;justify-content:center;">

                       <vvpandi> <?php echo $user; ?> </vvpandi>
               </div>

   </div>


 <div class="col-xs-12 zazp"></div>

 <div class="col-xs-12"  style="padding:0px;padding-bottom:20px">
   

 <div class="col-xs-8"  style="padding:0px;text-align:center;font-weight:normal;font-size:110%;margin-top:9px">
  <vvpandi>
<span  id="remember" class="zuzax juju preventhighlight" style="padding:8px"> 
<span id="iconremember"> <i class="fas fa-history"></i> </span> Remember Me </span>
</vvpandi>
  </div>
  

  <div class="col-xs-4 "   style="padding:0px;text-align:center;font-weight:normal;font-size:200%">
   <a href="social.php"> 
    <span class="superbuttonshover zuperxy  zuzax juju"  style="color: <?php echo $ko; ?> "> 
    <i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
  </div>

  </div>

             </div>
             <div class="col-xs-hidden col-sm-3 col-md-4"></div>


             </div>





                     </div> 
                     </div> 
        
           
      
    
    



 <div class="topcloudgateplain" > 
        <div class="topcloudplain" >
        <div class="col-xs-12 floatpush " >
     <bottr>  <span  class=" zuperxy za"  style="font-size:150%;font-weight:bolder;">    
      <img src="images/<?php echo $bol; ?>" class="floaticonpush"    height=24  width=auto/>
      <span > <?php echo $btxt; ?> </span> 
       </span>      </bottr>       
          </div></div></div>


      
      <div class="bottomcloudgateplain" >
       <div class="bottomcloudplain" >
        <div class="col-xs-12 floatpushbutt"  > <bottr> 
        <span  class="zuperxy za"  style="font-size:150%;font-weight:bolder;">  Welcome </span>
      </bottr>
      </div>
        </div></div>









    

                  
                 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="tools/js/bootstrap.min.js"></script>
            <script src="tools/js/jquery-3.3.1.min.js"></script>
      


<script language="javascript">
  


history.pushState(null,null,document.URL);
window.addEventListener('popstate', function(){ history.pushState(null,null,document.URL); });


$(document).ready(function(){
      ir=0;
 $('#remember').click(function(){
      var icc= document.getElementById('iconremember');
if(ir == 1){   icc.style.color="#000000"; ir=0; }
else{   icc.style.color="<?php echo $ko; ?>"; ir=1;  }}) 
})




</script>











          

</body>
</html>  