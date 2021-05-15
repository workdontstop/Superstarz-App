   
   
      
               
                
                   
                     <?php 

 

function hashtagplay($zzh,$i,$g,$us,$na,$idlocklu,$pagelu,$ivdlu,$dlu,$namelu,$gringolu,$x5){
    if($_SESSION['theme']=='0'){ $hashcol="hashtag"; }
    else{ $hashcol="hashtagdark";}  

$aq="hightext";
$rin="$aq$i$g";

$rgxz="/[^a-zA-Z0-9]/"; 
$zzhz=preg_replace($rgxz,'$1', $zzh);


  $rgx="/#+([a-zA-Z0-9_-]+)/"; 
$zzhx=preg_replace($rgx,'

      <script>

var zzh ="'.$zzhz.'";

    
                     
 

function makehashtagclick$1kk'.$i.''.$g.'(a,b){ 

  $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 
 
  var  hashtags="$1";
  var   postid= a;
  var   gringo= b;



   var clicked="'.$us.'";
    var usr ="'.$na.'";
     var lock ="'.$idlocklu.'";
       var p="'.$pagelu.'";
      var j ="'.$i.'";
      var nowtag ="'.$x5.'";

     


var userx="'.$dlu.'";
     var namex="'.$namelu.'"; 
      var typxx="'.$gringolu.'"; 
    
    
 $.ajax({
  type: "POST",
  url: "usertagsgate.php",
         data: {member:userx,name:usr,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:hashtags}, 
   success: function(data){


var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+nowtag+""};
     history.replaceState(spex,null,document.URL); 

    var spec = {member:""+userx+"",name:""+usr+"",typex:"3",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"$1"};
      history.pushState(spec,null,document.URL); 

      $("#supershow").html(data).show();    },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 

 
 
  }


           </script>
        
        <span  id="htag$1kk'.$i.''.$g.'"  style="font-weight:normal"  onmousedown="javascript:makehashtagclick$1kk'.$i.''.$g.'('.$i.','.$g.');"  class=" zuzax juju '.$rin.'  '.$hashcol.'"><b>$0</b></span>', $zzh);
return($zzhx);

}





function usertagplay($zzh,$i,$g,$us,$na,$idlocklu,$pagelu,$ivdlu,$dlu,$namelu,$gringolu,$x5,$imme,$cuul){
     if($_SESSION['theme']=='0'){ $hashcol="hashtag"; }
    else{ $hashcol="hashtagdark";}  



$aq="hightext";
$rin="$aq$i$g";

$rgxz="/[^a-zA-Z0-9]/"; 
$zzhz=preg_replace($rgxz,'$1', $zzh);


  $rgx="/@+([a-zA-Z0-9_-]+)/"; 
$zzhx=preg_replace($rgx,'

<style>.kxx{cursor:pointer}</style>
    
                      
              <script>



 function  makeuserclick$1kk'.$i.''.$g.'(a,b){


 
   var checkuser="'.$_SESSION['numuser'].'";
     var clicked="'.$us.'";
    var usr ="'.$na.'";
    var  handle="$1";


 $.ajax({
  type: "POST",
  url: "userhandlegate.php",
  data: {member:'.$us.',ty:2,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0,us:handle}, 
 success: function(data){
  
var userx="'.$dlu.'";
     var namex="'.$namelu.'"; 
      var typxx="'.$gringolu.'"; 
      var lock ="'.$idlocklu.'";
       var p="'.$pagelu.'";
      var j ="'.$i.'";
        var tx5 ="'.$x5.'";



var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+tx5+""};
      history.replaceState(spex,null,document.URL); 

var spec = {member:""+clicked+"",name:""+usr+"",typex:"2",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL); 
       $("#userpop").show(); 
        $("#profilepopout").html(data).show();     },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });  

                };








 
        
        </script> 
         <input  id="silox$1" name="" value="$1" hidden>


    
                    <span  class="zuzax '.$rin.'  '.$hashcol.'"   onmousedown="javascript:makeuserclick$1kk'.$i.''.$g.'('.$i.','.$g.');"  ><b>$0</b></span>
                    
                    
                    ', $zzh);
return($zzhx);

}










function  hashtagplayx($zzh,$i,$g,$us,$na,$idlocklu,$pagelu,$ivdlu,$dlu,$namelu,$gringolu,$x5){

  $dq="textpostclickable";
$kin="$dq$i$g";

$rgxz="/[^a-zA-Z0-9]/"; 
$zzhz=preg_replace($rgxz,'$1', $zzh);

  $rgx="/#+([a-zA-Z0-9_-]+)/"; 
$zzh=preg_replace($rgx,'

    <script>
                     
var zzh ="'.$zzhz.'";

    
                     
 

function amakehashtagclick$1kk'.$i.''.$g.'(a,b){ 


  $("#superloader").show();
      $("#superloader").removeClass("stoploader"); 
    $("#superloader").addClass("startloader"); 
 
  var  hashtags="$1";
  var   postid= a;
  var   gringo= b;



   var clicked="'.$us.'";
    var usr ="'.$na.'";
     var lock ="'.$idlocklu.'";
       var p="'.$pagelu.'";
      var j ="'.$i.'";
      var nowtag ="'.$x5.'";

     


var userx="'.$dlu.'";
     var namex="'.$namelu.'"; 
      var typxx="'.$gringolu.'"; 
    
    
 $.ajax({
  type: "POST",
  url: "usertagsgate.php",
         data: {member:userx,name:usr,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:hashtags}, 
   success: function(data){


var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+nowtag+""};
     history.replaceState(spex,null,document.URL); 

    var spec = {member:""+userx+"",name:""+usr+"",typex:"3",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"$1"};
      history.pushState(spec,null,document.URL); 

      $("#supershow").html(data).show();    },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   }); 

 
 
  }




           </script>
        
           
        <span class="juju '.$kin.' zuzax"  style="font-weight:normal" onmousedown="javascript:amakehashtagclick$1kk'.$i.''.$g.'('.$i.','.$g.');"   ><vvpandi>#</vvpandi>$1</span>', $zzh);
return($zzh);

}





function usertagplayx($zzh,$i,$g,$us,$na,$idlocklu,$pagelu,$ivdlu,$dlu,$namelu,$gringolu,$x5,$imme,$cuul){
     if($_SESSION['theme']=='0'){ $hashcol="#782144";  $hashcolbak="text-shadow:1.2px 2px 2.4px #aaaaaa";}
    else{ $hashcol="#e9ddaf";    $hashcolbak="text-shadow:1.2px 2px 2.4px #333333";}  


  $dq="textpostclickable";
$kin="$dq$i$g";

  $rgx="/@+([a-zA-Z0-9_-]+)/"; 
$zzh=preg_replace($rgx,'


<style>.kxx{cursor:pointer}</style>
    
                      
              <script>
                     


    
        


 function  qmakeuserclick$1kk'.$i.''.$g.'(a,b){

  

 
   var checkuser="'.$_SESSION['numuser'].'";
     var clicked="'.$us.'";
    var usr ="'.$na.'";
    var  handle="$1";


 $.ajax({
  type: "POST",
  url: "userhandlegate.php",
  data: {member:'.$us.',ty:2,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0,us:handle}, 
 success: function(data){
  
var userx="'.$dlu.'";
     var namex="'.$namelu.'"; 
      var typxx="'.$gringolu.'"; 
      var lock ="'.$idlocklu.'";
       var p="'.$pagelu.'";
      var j ="'.$i.'";
        var tx5 ="'.$x5.'";



var spex = {member:""+userx+"",name:""+namex+"",typex:""+typxx+"",page:""+p+"",jump:""+j+"",jumplock:""+lock+"",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:""+tx5+""};
      history.replaceState(spex,null,document.URL); 

var spec = {member:""+clicked+"",name:""+usr+"",typex:"2",page:"0",jump:"0",jumplock:"0",activatein:"0",pagein:"0",jumpin:"0",jumpinlock:"0",xtra1:"0",xtra2:"0",xtra3:"0",xtra4:"0",xtra5:"0"};
      history.pushState(spec,null,document.URL); 
       $("#userpop").show(); 
        $("#profilepopout").html(data).show();     },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }   });  

                };


        
        </script> 
         <input  id="silox$1" name="" value="$1" hidden>


    

                    <span class="juju '.$kin.' zuzax"  onmousedown="javascript:qmakeuserclick$1kk'.$i.''.$g.'('.$i.','.$g.');"   ><vvpandi>@</vvpandi>$1</span>    
                    
                    ', $zzh);
return($zzh);

}




?>

  


