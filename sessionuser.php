



    <link rel="stylesheet" href="tools/font/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font2/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font3/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font4/stylesheet.css" type="text/css" charset="utf-8" />
 <!-- Bootstrap -->
    <link href="tools/css/bootstrap.min.css" rel="stylesheet">
   <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">   
   <link href="tools/css/sn.css" rel="stylesheet">
    <link href="tools/css/subcss/start.css" rel="stylesheet">
      <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
  <?php    include('forceinfont.php');  ?>
    
    
<script type="text/javascript">
  





</script>
  

<?php

require('phpopen.php');

require('dataco.php');

$d=$_SESSION['numuser'];  

$type="1"; 

$page=0;


$jump=0;
$jumplock=0; 


    $activatein=0;
         $pagein=0;
           $jumpin=0;
           $jumpinlock=0;
              $xtra1=0;
                $xtra2=0;
                  $xtra3=0;
                      $xtra4=0;
                          $xtra5=0;

 ?>




<?php   include('userdata.php');   ?>




   


     
<script type="text/javascript">




   $(document).ready(function(){
var loguserx="<?php echo $_SESSION['numuser']; ?>";
     var logname="<?php echo $_SESSION['user']; ?>"; 

var spec = {member:""+loguserx+"",name:""+logname+"",typex:"1",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL);     })


</script>


