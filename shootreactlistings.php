



<?php    



    require('phpopen.php');
   require('dataco.php');       
 
  include('timego.php');//////////time agoo  
include('exitx.php');
include('theme.php');
      

$p=$_SESSION['numuser'];

 $fadi=array();
$comi=array();  
$culi=array();  
$imnamy=array();
 $timy=array(); 
  $usy=array(); 
 $namy=array(); 
 $dum=array();
 $quty=array();

   

 



 $feedlock="1000000000000000000";
   

 

 if($listcounter==0){
  $idlock="";
   ///count posts   
 $emosql=mysqli_query($super,"SELECT count(id) FROM comment WHERE post='".$nivd."' ");
   ///count posts 

    if($jumpin != 0){$pagenum=$pagenumin;   $idlock=$jumplockin;  $feedlock=$jumplockin;}else{$pagenum=1;} 

 $totalfeed=$emosql->fetch_row();  
 ////page getting num rows
 $datacount=$totalfeed[0];
 echo'  <script> 

var dcc ="'.$datacount.'"; 

     var newcom="'.$datacount.'";  
     var newcomx="'.$datacount.'";
     if(newcomx == 0){var newcomx="";} 
   document.getElementById("totalreactions'.$nivd.''.$gringo.'").value=newcom;
  document.getElementById("reactioncounthold'.$nivd.''.$gringo.'").innerHTML= newcomx+" ";
   document.getElementById("reactcountme").innerHTML=newcomx; 
    reacttop(newcom); 
     document.getElementById("totalcomment").value=newcom;


  </script>  ';
if($datacount == 0){  echo'<script>  showcommentkid();
       </script>'; }
  $pager=30; ///page number of results to be showm
       $last= ceil($datacount/$pager);  /// tells page number of our last page
       if($last < 1){
           $last='1'; // make sure last cannot be less than 1
                      } 
           }else{
        $feedlock = $idlock;  }






     ///establish $pagenum var
       if($pagenum < 1){
        $pagenum='1';
       }else if($pagenum > $last){
          $pagenum=$last;}
          //// make sure the page number is not below 1 and more than our last page
       





      echo'<div   class="col-xs-12"  style="padding:0px;">';


  $next = $pagenum + 1;

    $limit='LIMIT ' .($pagenum -1) * $pager .',' .$pager;
       ///selects range of rows for choosen $pagenum



  $pik="SELECT comment.id,comment.num as fefe,comment.com,comment.post,comment.time,member.user,member.name,member.imname,member.cl,member.quote FROM comment,member  WHERE  member.num=comment.num  AND  post='".$nivd."'   AND  id<='".$feedlock."' ORDER BY id DESC  $limit"; 




 /// selecting information for supertarz all feeds 
        $selfeedinfo=$pik; 
    $feedpack= $super->prepare($selfeedinfo);
      if(false === $feedpack){
      echo'<script>  $("#profileerrorback").show(); 
          $("#profiledataerror1").show();
          </script>'; }
              else{
       $feedpack->execute();
        $deedres=$feedpack->get_result();
        $finaldeedres= $deedres->num_rows;
          while($row = $deedres->fetch_assoc() ){

               array_push($fadi,$row['id']);
                array_push($dum,$row['fefe']);
      array_push($comi,$row['com']); 
          array_push($culi,$row['cl']);
             array_push($imnamy,$row['imname']);
                array_push($timy,$row['time']);
                array_push($usy,$row['user']);
       array_push($namy,$row['name']);
       array_push($quty,$row['quote']);


       if($listcounter==0 && $jumpin == 0  ){  $idlock=$fadi[0];  }


        }  
                                $feedpack->close(); }
        ///selecting information for supertarz all feeds 


 



    $gan=count($fadi);





echo'<script> listall=0; </script>';


 for($i= 0;  $i < $gan; $i++){ 


  $idy=$fadi[$i];
  $memnum=$dum[$i];
  $reaction=$comi[$i];
  $memcl=$culi[$i];
  $memim=$imnamy[$i];
   $dt=$timy[$i];
    $dti = timeago($dt);
  $memuser=$usy[$i];
  $memname=$namy[$i];
  $memquote=$quty[$i];
  $viv="visible";


  if($memquote==""){ $iname=$memname; }
 else{ $iname=$memquote; }

  if($iname==""){ $iname="...";  $viv="hidden";}

     if($memim==""){ $memim="blank.png"; }


    
  
 
 

   echo' 


<script>



 function  listtopagexx'.$memnum.''.$nivd.''.$gringo.'(){
           
           $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 

    var clicked="'.$memnum.'";
    var usr ="'.$memuser.'";

var userx="'.$mem.'";
      var typxx="'.$type.'"; 
      var lock ="'.$jumplock.'";
       var p="'.$page.'";
      var j ="'.$jump.'";

        var pin ="'.$pagenum.'";
         var el = document.querySelector("#superpop");
          var rol =el.scrollTop;
          if(rol <= 0){  var jin = 1;}else{
            var jin = rol;  }
         var lin ="'.$idlock.'";
          var em ="'.$nivd.'";
         
       $.ajax({
  type: "POST",
  url: "datauser.php",
  data: {member:'.$memnum.',ty:2,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
  var spex = {member:""+userx+"",name:"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"3",pagein:""+pin+"",jumpin:""+jin+"",jumpinlock:""+lin+"",xtra1:""+em+"",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.replaceState(spex,null,document.URL); 

var spec = {member:""+clicked+"",name:""+usr+"",typex:"2",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};

      history.pushState(spec,null,document.URL);
         popup=0; 
        poptype = 0;
    $("body").css("overflow","auto");
        $("#supercontent").html(data).show();     },

  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });  

                     };




 $("#profileimagefilexx'.$memnum.''.$nivd.''.$gringo.'").imagesLoaded( function(){
    listall++;
var jum ="'.$jumpin.'";
var countthis ="'.$gan.'";
if(listall == countthis){  
if(jum !=0 ){
  setTimeout(function(){
      $("#superpop").animate({
                          scrollTop:('.$jumpin.')},1000);
   },400);    }}        });




</script>







<div class="col-xs-12  "  style="padding:0px;height:auto;border-radius:4px;'.$commenttextcolor.'">
<div  class="col-xs-hidden col-sm-1"    style="padding:0px;height:auto;">
</div>
<div class="col-xs-12 col-sm-10"  style="padding:0px;">



<div class="col-xs-12 "  style="padding:0px;top:5px;left:-5px">  
<div class="col-xs-2 "  style="padding:0px;padding-top:0px;"> </div>
<div class="col-xs-10"  style="padding:0px;text-align:right;font-weight:normal;">  
<vvpandi><span class="juju zuzax dontallowselect" style="font-size:90%;visibility:'.$viv.'">'.$iname.'</span><span class="juju zuperxy zuzax dontallowselect"  style="color:'.$memcl.'"> <i class=" fa fa-ellipsis-h" aria-hidden="true"></i></span>
</vvpandi>
</div></div>



           <div class="col-xs-12 "  style="padding:0px;padding-bottom:0px;">  

 <div class="col-xs-2"    style="padding-top:0px;padding:2px;margin:auto;text-align:center;margin-top:-5.5px">
      <img src="images/profilemini/'.$memim.'"  onclick="javascript:listtopagexx'.$memnum.''.$nivd.''.$gringo.'();"
         id="profileimagefilexx'.$memnum.''.$nivd.''.$gringo.'"  class="zuzax juju img-rounded  dontallowselect " style="width:auto;height:3.4em;padding:3px;-moz-box-shadow: 0 0 2px'.$memcl.';-webkit-box-shadow: 0 0 2px'.$memcl.';box-shadow: 0 0 2px'.$memcl.'; border:2px solid'.$memcl.';border-radius:50%;"  title="'.$memuser.'"/>
          </div>


<div class="col-xs-10"  style="padding:0px;padding-top:0px;">

<div class="col-xs-12 "  style="padding:0px;font-weight:bolder;">  
<vvpandi style="font-size:130%;margin-left:2px;padding:0px">'.$memuser.'</vvpandi><span class="'.$commentspace.'" style="color:'.$memcl.';font-size:50%;margin-left:3px;padding:0px"><i class="fas fa-circle"></i></span><aleob style="padding:1px;"> '.$reaction.'  </aleob></div>

<div class="col-xs-12 "  style="padding:0px;padding-top:5px">  
<div class="col-xs-4"  style="padding:0px;text-align:left"><vvpandi>
<span  style="padding-left:4px;font-size:90%;">'.$dti.'</span></vvpandi></div>
</div>

</div>


            </div>



  </div></div>

';  




 }  





echo '


</div>';





if($pagenum == $last){  
echo' <div class=" col-xs-12  zazp"></div>  
 <div class=" col-xs-12  zazp"> </div>'; }

else{

if($listhoop == 3){

     echo'<script>
    function plusfeed'.$pagenum.''.$nivd.''.$gringo.'(a,b,c,d,e,f,j){

var g = $("#displayinfostate'.$pagenum.''.$gringo.'").val();
var h = $("#activedisplayinfostate'.$pagenum.''.$gringo.'").val();
var i = "'.$idlock.'";
var k = "'.$mem.'";
var l = "'.$type.'";
var m = "'.$page.'";
var n = "'.$jump.'";
var o = "'.$jumplock.'";

      var url="shootreactlistingspagination.php";
      var dd=0;
       $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c,mem4:dd,mem5:e,mem6:f,mem7:i,mem8:j,mem9:k,mem10:l,mem11:m,mem12:n,mem13:o}, function(data){
            $("#superreactlist'.$nivd.''.$gringo.'").html(data).show();
          $("#addfeedbutton'.$pagenum.''.$nivd.''.$gringo.'").hide();  });}</script> ';

       }else{

    echo' <script>
    function plusfeed'.$pagenum.''.$nivd.''.$gringo.'(a,b,c,d,e,f,j){

  var g = $("#displayinfostate'.$pagenum.''.$gringo.'").val();
var h = $("#activedisplayinfostate'.$pagenum.''.$gringo.'").val();
var i = "'.$idlock.'";
var k = "'.$mem.'";
var l = "'.$type.'";
var m = "'.$page.'";
var n = "'.$jump.'";
var o = "'.$jumplock.'";

      var url="shootreactlistingspagination.php";
       $.post(url,{request:"fa",mem1:a,mem2:b,mem3:c,mem4:d,mem5:e,mem6:f,mem7:i,mem8:j,mem9:k,mem10:l,mem11:m,mem12:n,mem13:o}, function(data){
            $("#superreactlist'.$next.''.$nivd.''.$gringo.'").html(data).show();
             $("#addfeedbutton'.$pagenum.''.$nivd.''.$gringo.'").hide();  });}</script> ';  }





echo'  <script type="text/javascript">
     $(document).ready(function(){
      if(mobileboy == 1){var plic = document.getElementById("plusicon'.$pagenum.''.$nivd.''.$gringo.'"); 
      plic.style.marginTop="3px";} })
</script>  ';



  echo '
 
  <div class="col-xs-12"   id="addfeedbutton'.$pagenum.''.$nivd.''.$gringo.'"  style="height:auto;width:100%;margin:0 auto;margin-top:35px;padding-bottom:5px">  

<div   class="'.$joinbuttonplus.' zuzax juju" 
 style="width:3em;height:3em;margin-top:16px;padding:6px;text-align:center;margin:0 auto;" 
 onclick="javascript:plusfeed'.$pagenum.''.$nivd.''.$gringo.'('.$next.','.$pager.','.$last.','.$listhoop.','.$gringo.','.$nivd.');"> 
   <div id="plusicon'.$pagenum.''.$nivd.''.$gringo.'" style="margin-top:2px;font-size:120%;font-weight:bolder">  <i class="fas fa-sort-down"></i></div>  </div>    </div>

<div  class="col-xs-12"  id="superreactlist'.$next.''.$nivd.''.$gringo.'"   style="padding:0px">

<div class=" col-xs-12  zazp"></div>  
 <div class=" col-xs-12  zazp"> </div>

   </div>  '; 

     }   



                     ?>
          
   



