 


 <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="tools/css/sn.css" rel="stylesheet">





<div class="container " >
<div class="row" >


<div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


<div class="tur col-xs-12 col-sm-6 col-md-4"  style="padding:0px;border-radius:10px;
  height:auto;padding-bottom:20px;padding-top:20px">







 <div class=" col-xs-12 " style="padding:0px">
 


<div class="col-xs-4"  style="padding:0px;text-align:center;font-size:150%;font-weight:bolder;color:#000000;margin-top:-18px"> 
<span  id="closelogin"  class="superbuttonshover juju zuzax zuperxy" style="float:left;">
     <i class="fas fa-arrow-left" ></i> </span> </div>

    <div class="col-xs-4"  style="padding:0px;text-align:center;font-size:120%;font-weight:bolder;
    color:#000000;padding-bottom:8px"> <vvpandi>  LOG IN </vvpandi>  </div>


<div class=" col-xs-4"  style="padding:0px" >  </div>

  

         </div>



<div  class="col-xs-12 za">  </div>
                             

  <form id="loginking"  action="loginsecure.php"  method="post">

 <div class="form-group"   style="padding:10px ">
<div  class="col-xs-12 za">  </div>
<input type="text"  class="form-control  turtextfield" name="user"  id="user" placeholder="Username" required></div>


<div class="form-group"  style="padding:10px;font-weight:normal">
<input type="password" class="form-control  turtextfield" name="pass"  id="mypass"  placeholder="Password" required  >
  <i><div  style="padding-top:12px;" class="zuzax zuperxy juju dontallowselect"  id="statepasswordx">  <small id="showpass" > <i class="fas fa-eye"></i> Show Password </small> </div></i>  </div>   


<div  class="col-xs-12 za">  </div>
<div  class="col-xs-4">  </div>
<button type="submit" class="superbuttons col-xs-4 zuzax" style="background-color:#ffffff"  name="login_btn" > Go  </button>
<div  class="col-xs-4">  </div>

        </form></div>


  <div class=" col-xs-hidden col-sm-3 col-md-4  "  style="padding:0px" >  </div> 


     </div> </div>






<script language="javascript">
  
$(document).ready(function(){


$('#indexloader').hide();

// this is the id of the form
$("#loginking").submit(function(e) {
 e.preventDefault(); // avoid to execute the actual submit of the form.
var form = $(this);
var url = form.attr('action');
$.ajax({
  type: "POST",
  url: url,
  data: {user:$('#user').val(),pass:$('#mypass').val() }, 
 success: function(data){
    $("#recievelogindata").html(data).show(); },
  error: function(){
    $("#errorback").show();
     $("#scripterror").show();}
         });   });





  $('#statepasswordx').click(function(){
    var obj = document.getElementById('mypass');
    if(obj.type=="text"){
    obj.type="password";
    document.getElementById("showpass").innerHTML='<i class="fas fa-eye"></i> Show Password';
    }else{
    obj.type="text";  
     document.getElementById("showpass").innerHTML='<i class="fas fa-eye"></i> Hide Password';
    }   }) 



    $('#closelogin').click(function(){
      $('#indexloader').show();
      $('#popback').hide();
       $('#pop').hide();}) 



     })




</script>









