
    


     <?php 
                 $poss =" ";
                  
                  
                  
                 if($poss==" "){
                 
                                          
                 }else{ }
                 
                          $apdice="#00ccff";
                          
                         if($apdice=="#000000"  ||  $apdice==" "){
    $apdice="#0b1728";
    
}            
                          $sstth='
                 <style>
      
           nav{ background-color: #ffffff;width:200px; position:fixed;bottom: 1em;left: 1em; margin-top:15px;-moz-box-shadow: 0 0 1px#000; -webkit-box-shadow: 0 0 1px#000;box-shadow: 0 0 15px#ccc; padding: 0px;border-radius:10px; padding-bottom: 7px }
          
           .hh{ background-color: #ffffff;width:200px;   }
          
       #play{ background-color: #ffffff;background-image:url(images/play.png);  background-repeat:no-repeat;background-position: center;border:none; width: 30px;height: 30px } 
          
     
       #cc{ background-color: #ffffff;background-image:url(images/fw.png);  background-repeat:no-repeat;background-position: center;border:none;width: 30px;height: 30px; }  
          
          #re{ background-color: #ffffff;background-image:url(images/ref.png);  background-repeat:no-repeat;background-position: center;border:none; width: 20px;height: 20px } 
          
     #ccx{ background-color: #ffffff;background-image:url(images/rr.png);  background-repeat:no-repeat;background-position: center;border:none; width: 30px;height: 30px } 
          

          #dx{ width: 200px; position:relative; background-color: #ffffff; height: 15px }
          
          #pb{  position:absolute; background-color:'.$apdice.'; height: 15px;width: 0px; border-bottom-right-radius:2px;  border-top-right-radius:2px;}
          
          #play:active,#mute:active{
              position: relative
              top:4px 
          }   #cc:active,#mute:active{
              position: relative;
              top:4px 
          }   #ccx:active,#mute:active{
              position: relative;
              top:4px 
          }#re:active,#mute:active{
              position: relative;
              top:4px 
          }
      </style>
      ';
                          echo $sstth;
                          
                
                 
                 
                 ?>

                  <?php      $possy= "Katy_Perry_ft_Migos_-_Bon_App_tit_Talkmuzik.mp3";   ?>
    <input  id="trakcc" value="<?php echo $possy; ?>" hidden> 
                                                         
 
            
           <nav style="border-radius:10px">
                   
                   
    <?php 
    
    $co="#00ccff";
    $become2="#ffffff";
    require('coloralg.php');
    
    ?>
<style>  #dooc{overflow:auto}</style> 
               <b><font style="">   <div style=" background-color:<?php echo $become2;?> ;color:<?php echo $co;?>;  border-top-left-radius:10px; border-top-right-radius:10px;"  id="dooc" class="" ><?php echo $possy; ?></div> </font></b>
               <button  class="hh btn"  style="text-align:center;color:#666666" id="axx" onclick="document.getElementById('nano').style.display='none'"> <b> X </b> </button> 
           
           
             
           <div  id="buttons">
               <div class="container"> <div class="row">
               
                   
                   <div  id="dx"><div  id="pb"></div></div>
                      <div class="col-xs-12">
                          
               
                      <script>
                          /////<audio  src="music/Lil Yachty - Life goes on.mp3" type="audio/mp3" controls> </audio>  
                    
                    var mytrack = document.getElementById('mytrack');

mytrack.play();
                   
                   
                    
 var barSize=200;
                    
if(!mytrack.ended){
           
      update= setInterval(update,500);
}
                    
                    
  function update(){
 if(mytrack.ended){
             po.style.width = "0px";
        
 }else{
     
     var size = parseInt(mytrack.currentTime*barSize/mytrack.duration);
          po.style.width = size + "px";

 } }
                    
 </script>            

                            
           <audio  id="mytrack"  src="music/<?php echo $possy;?>"  type="audio/mp3">
      
      </audio>
                  
               <button  type="button"  id="play" >  </button>
                          
                              <button  type="button"  id="ccx" style="margin-left:10px" >   </button>
                          
                            <button  type="button"  id="cc" style="margin-left:10px" >   </button> 
                          
                          <button  type="button"  id="re" style="margin-left:12px;color:#666666" >  </button> 
                          
                      
                   
                   </div> 
                   
                 
                   
                 
          
          
           </div> </div> </div>
           
             </nav>   </div>

              
                  
        