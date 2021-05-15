<link href="css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="css/sn.css" rel="stylesheet">


<script language="javascript">


function mo(obj){
    
    
    var obj = document.getElementById('mypass');
    if(obj.type=="text"){
        
        obj.type="password";
    }else{
        
      obj.type="text";  
    }
    
}  
    
function mo1(obj){
    
    
    var obj = document.getElementById('mypass1');
    if(obj.type=="text"){
        
        obj.type="password";
    }else{
        
      obj.type="text";  
    }
    
}
</script>



<div class="container">
<div class="row">
<div class="lk   za  col-xs-12 col-sm-6 col-md-5  col-lg-4">
                              
                              
                                 <div class="bgs"> 
                                      <div class="fin"> 
                                          <font color="#fffff"><H4><b>SIGN UP  </b>   </H4>  </font>
                              </div>
                                      
                                     <div class="find"> </div>
                  <div class="tyu"> 
                       <form action="reg.php" method="post">
          <table width="200" border="0">
                 <br>
                 <tr>
               
  </tr>
        
  
        
  <small id="textHelp" class="form-text text-muted"> Username and password are case sensitive</small>
              <tr>
               <div class="form-group">
           <input type="text" class="form-control" name="user" id="user"  placeholder="Username/Alias" required> 
                    
                  </div>
  </tr>
              <tr>
               <div class="form-group ">
           <input type="password" class="form-control"  name="pass" id="mypass1"   placeholder="Password"required > 
                   
                     <style>.tu{cursor:pointer}</style>
 <div  class="tu" onclick="mo1()"> <img src="images/wit.png"   width="16" height="auto" />   <font size=-2>       Show Password </font> </div>
                   
                   
                    <p></p><small id="textHelp" class="form-text text-muted">Adding numbers strenthen passwords.</small>
                  </div>    
  </tr>   
              <tr>
               <div class="form-group">
           <input type="password" class="form-control"  name="pass2" id="mypass"   placeholder="Re-type Password"required > 
                   
                 <style>.tu{cursor:pointer}</style>
 <div  class="tu" onclick="mo()"> <img src="images/wit.png"   width="16" height="auto" />   <font size=-2>       Show Password </font> </div>
                   
                  </div>    
  </tr> 
           
              
    
        
              

        
          <tr>
    

   
  </tr>
              
              
              <td><button type="submit" class="r2kc btn "> <font color=#fffff><b>GO</b>   </font> </button></td>
              
                           </table></form>
                      
                               
                                            </div> </div>  
                         </div>    </div>    </div>