var mytrack = document.getElementById('mytrack');
var play = document.getElementById('play');

var po = document.getElementById('pb');


var barSize=200;



play.addEventListener('click',porpo,false);
cc.addEventListener('click',x,false);
ccx.addEventListener('click',x44,false);
axx.addEventListener('click',aa,false);
re.addEventListener('click',hhbb,false);


function porpo(){
    
    if(!mytrack.paused && !mytrack.ended){
        mytrack.pause();
        play.style.backgroundImage ='url(images/play.png)';
    }
    else{
        mytrack.play();
         play.style.backgroundImage ='url(images/pause.png)';
        update= setInterval(update,500);
        
    }
   
}

function aa(){
    
    if(!mytrack.ended){
    mytrack.currentTime +=30000.0;
      
    }}
    
    function hhbb(){
    
    if(!mytrack.ended){
    mytrack.currentTime -=30000.0;
      
    }
    
    
   
}function x44(){
    
    if(!mytrack.ended){
        mytrack.currentTime -=30.0;
      
    }
    
    
   
}function x(){
    
    if(!mytrack.ended){
        mytrack.currentTime +=30.0;
      
    }
    
    
   
}

function update(){
 if(mytrack.ended){
             po.style.width = "0px";
         play.style.backgroundImage ='url(images/play.png)';
 }else{
     
     var size = parseInt(mytrack.currentTime*barSize/mytrack.duration);
          po.style.width = size + "px";

 }
    
    
    
    
    
    
    
    } 