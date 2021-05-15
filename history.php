
          
<script>




 popup=0;


   poptype=0;
   poptypetop=0;














window.addEventListener('popstate', function(e) {

  if(poptype == 1){

      popup=0;
      poptype = 0;  
      document.documentElement.style.overflow="auto";
     $("body").css("overflow","hidden"); 
    $("#superpop").hide();



     if(reactstate==1){ 
     if(mobileboy == 0){  $("#supershow").removeClass("blurplaceholdermid"); 
       document.getElementById("supershow").style.left="0px"; }
       $("#superpostdatago"+reactpage+""+reacttype+"").isotope({
      itemSelector : ".superpostitem"+reactpage+""+reacttype+""}); 
     var hashboo=$("#hashtagactivated"+reactidentity+""+reacttype+"").val();
if(hashboo == 1){
  document.getElementById("hashtagactivated"+reactidentity+""+reacttype+"").value="0";}  
$("#datacase"+reactidentity+""+reacttype+"").slick("unslick");
 document.getElementById("reactplaystate"+reactidentity+""+reactpage+""+reacttype+"").value=0;
if(reacttotal==1){
   var idexn = $("#activeindex"+reactidentity+""+reacttype+"").val();
    var idexnreal = idexn - 1;
  $("#datacase"+reactidentity+""+reacttype+"").slick({ 
  initialSlide:idexnreal,
   swipe:false,
arrows:false,
  slidesToScroll: 1,
  slidesToShow: 1,
dots: false,
  infinite: true,
prevArrow: $("#superplayleft"+reactidentity+""+reactpage+""+reacttype+""),
nextArrow: $("#superplayright"+reactidentity+""+reactpage+""+reacttype+""),
adaptiveHeight: false });}else{
   var idexn = $("#activeindex"+reactidentity+""+reacttype+"").val();
    var idexnreal = idexn - 1;
$("#datacase"+reactidentity+""+reacttype+"").slick({ 
 initialSlide:idexnreal,
   swipe:true,
    lazyLoad:"ondemand",
     focusOnSelect:true,
arrows:true,
  slidesToScroll:1,
  slidesToShow:1,
dots:true,
  infinite:true,
prevArrow: $("#superplayleft"+reactidentity+""+reactpage+""+reacttype+""),
nextArrow: $("#superplayright"+reactidentity+""+reactpage+""+reacttype+""),
adaptiveHeight: false  }); }
 $("#superpostdatago"+reactpage+""+reacttype+"").isotope({
      itemSelector : ".superpostitem"+reactpage+""+reacttype+""}); 
                           reactstate=0; }
                           
  if(reacttimerstate==1){ reacttimerstate=0;  clearInterval(reacttimer);}

     
   

  }else{


var poppy = e.state; 
var memmy =poppy.member;
var nammy =poppy.name;
var typpy =poppy.typex;
var paggy =poppy.page;
var juppy =poppy.jump;
var juppylok =poppy.jumplock;
var actty =poppy.activatein;
var paggyin =poppy.pagein;
var juppyin =poppy.jumpin;
var juppyinlock =poppy.jumpinlock;
var xup1 =poppy.xtra1;
var xup2 =poppy.xtra2;
var xup3 =poppy.xtra3;
var xup4 =poppy.xtra4;
var xup5 =poppy.xtra5;



$("#superloader").show();
      $("#superloader").removeClass('stoploader'); 
    $("#superloader").addClass('startloader'); 

 var loguserx="<?php echo $_SESSION['numuser']; ?>";


  var usernow=$("#userdataid").val();


 if(loguserx == memmy &&  usernow == memmy && xup5==0 ){ 
 
  if(typpy== 1){ 
   var  gotopag="userfeedsgate.php";}
else  if(typpy== 2){  var  gotopag="userpagegate.php";}
  $.ajax({
  type: "POST",
  url: ""+gotopag+"",
  data: {member:memmy,name:nammy,scroll:1,page:0,jump:0,jumplock:0,activatein:0,pagein:0,jumpin:0,jumpinlock:0,xtra1:0,xtra2:0,xtra3:0,xtra4:0,xtra5:0}, 
 success: function(data){
    $("#supershow").html(data).show();},
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show(); }  }); 


    }else{
    

    if(loguserx == memmy &&  usernow == memmy && xup5!=0 ){ 
   
           if(typpy== 1){ 
   var  gotopagzz="userfeedsgate.php";}
else  if(typpy== 2){  var  gotopagzz="userpagegate.php";}
else  if(typpy== 3){  var  gotopagzz="usertagsgate.php";}

        $.ajax({
  type: "POST",
  url:  ""+gotopagzz+"",
  data: {member:memmy,name:nammy,scroll:1,page:paggy,jump:juppy,jumplock:juppylok,activatein:actty,pagein:paggyin,jumpin:juppyin,jumpinlock:juppyinlock ,xtra1:xup1,xtra2:xup2,xtra3:xup3,xtra4:xup4,xtra5:xup5}, 
 success: function(data){
    $("#supershow").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show();}  }); 

         }else{
     

 $.ajax({
  type: "POST",
  url: "datauser.php",
  data: {member:memmy,ty:typpy,page:paggy,jump:juppy,jumplock:juppylok,activatein:actty,pagein:paggyin,jumpin:juppyin,jumpinlock:juppyinlock ,xtra1:xup1,xtra2:xup2,xtra3:xup3,xtra4:xup4,xtra5:xup5}, 
 success: function(data){
    $("#supercontent").html(data).show(); },
  error: function(){
    $("#profileerrorback").show(); 
    $("#profilescripterror").show();}  });     }
                   

                   }



          }

       });






  </script>
