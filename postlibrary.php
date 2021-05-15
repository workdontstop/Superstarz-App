

<?php  


   require('dataco.php');
require('phpopenx.php'); 

 include('exit.php');

   $d=$_SESSION['numuser'];




$item1=$_POST['up1'];
$item2=$_POST['up2'];
$item3=$_POST['up3'];
$item4=$_POST['up4'];
$item5=$_POST['up5'];
$item6=$_POST['up6'];
$item7=$_POST['up7'];
$item8=$_POST['up8'];
$item9=$_POST['up9'];
$item10=$_POST['up10'];
$item11=$_POST['up11'];
$item12=$_POST['up12'];
$item13=$_POST['up13'];
$item14=$_POST['up14'];
$item15=$_POST['up15'];
$item16=$_POST['up16'];



$tyitem1=$_POST['uptype1'];
$tyitem2=$_POST['uptype2'];
$tyitem3=$_POST['uptype3'];
$tyitem4=$_POST['uptype4'];
$tyitem5=$_POST['uptype5'];
$tyitem6=$_POST['uptype6'];
$tyitem7=$_POST['uptype7'];
$tyitem8=$_POST['uptype8'];
$tyitem9=$_POST['uptype9'];
$tyitem10=$_POST['uptype10'];
$tyitem11=$_POST['uptype11'];
$tyitem12=$_POST['uptype12'];
$tyitem13=$_POST['uptype13'];
$tyitem14=$_POST['uptype14'];
$tyitem15=$_POST['uptype15'];
$tyitem16=$_POST['uptype16'];




$total=$_POST['total'];
$tags=$_POST['alltags'];



$topic=$_POST['ddtop'];
$caption=$_POST['ddcap'];

$captagx="$tags $caption";

$captag = str_replace(array('#'), '',$captagx);

$mashh="$captag $topic";




  $sqlb=" INSERT INTO wall 
  (num,time1,postype,count,cap,tup,sim1,sim1ty,sim2,sim2ty,sim3,sim3ty,sim4,sim4ty,sim5,sim5ty,sim6,sim6ty,sim7,sim7ty,sim8,sim8ty,sim9,sim9ty,sim10,sim10ty,sim11,sim11ty,sim12,sim12ty,sim13,sim13ty,sim14,sim14ty,sim15,sim15ty,sim16,sim16ty)

   VALUES (?,now(),'0',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) "; 

                              $instb= $super->prepare($sqlb);

  $instb->bind_param("iissssssssssssssssssssssssssssssssss",$jum,$jot,$jap,$jop,$na1,$na1ty,$na2,$na2ty,$na3,$na3ty,$na4,$na4ty,$na5,$na5ty,$na6,$na6ty,$na7,$na7ty,$na8,$na8ty,$na9,$na9ty,$na10,$na10ty,$na11,$na11ty,$na12,$na12ty,$na13,$na13ty,$na14,$na14ty,$na15,$na15ty,$na16,$na16ty);
              $jum=$d; $jot=$total; $jap=$caption; $jop=$topic;
               $na1=$item1; $na1ty=$tyitem1;
                $na2=$item2; $na2ty=$tyitem2;
                 $na3=$item3; $na3ty=$tyitem3;
                  $na4=$item4; $na4ty=$tyitem4;
                   $na5=$item5; $na5ty=$tyitem5;
                    $na6=$item6; $na6ty=$tyitem6;
                     $na7=$item7; $na7ty=$tyitem7;
                      $na8=$item8; $na8ty=$tyitem8;
                       $na9=$item9; $na9ty=$tyitem9;
                        $na10=$item10; $na10ty=$tyitem10;
                         $na11=$item11; $na11ty=$tyitem11;
                          $na12=$item12; $na12ty=$tyitem12;
                           $na13=$item13; $na13ty=$tyitem13;
                            $na14=$item14; $na14ty=$tyitem14;
                             $na15=$item15; $na15ty=$tyitem15;
                              $na16=$item16; $na16ty=$tyitem16;

                             $instb->execute();
                             $uuup =mysqli_insert_id($super);
                              $instb->close();


 

  $sqlbfx="INSERT INTO textfind (id,time1,tags,tup,mash) VALUES (?,now(),?,?,?) "; 
                              $instbfx= $super->prepare($sqlbfx);
                              $instbfx->bind_param("isss",$in,$tgg,$nmm,$noo);
                           $in=$uuup;    $tgg=$captag;    $nmm=$topic;  $noo=$mashh;
                             $instbfx->execute();
                              
                            $instbfx->close(); 
        


?>










