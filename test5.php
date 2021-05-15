

<?php require('phpopen.php');?>


<!DOCTYPE html>
<html lang="en"  class="itemcontainer" style="height:auto;overflow-y: scroll !important;"  >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1  ,minimum-scale =1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
      <link rel="icon" href="images/sp2.png" type="image/png" />


       <link href="tools/css/bootstrap.min.css" rel="stylesheet">
   <link href="tools/css/bootstrap-theme.min.css" rel="stylesheet">   
   <link href="tools/css/sn.css" rel="stylesheet">
     <link href="tools/css/subcss/start.css" rel="stylesheet">
    <link rel="stylesheet" href="tools/css/fontawesome/css/all.css">
    <link href="tools/css/slick.css" rel="stylesheet">



   
      <script src="tools/react/react.min.js"></script>
        <script src="tools/react/react-dom.min.js"></script>
      <script src="tools/react/browser.min.js"></script>



 <link rel="stylesheet" href="tools/fontx/stylesheet.css" type="text/css" charset="utf-8" />
      <link rel="stylesheet" href="tools/font/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font2/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font3/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font4/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="tools/font5/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font6/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="tools/font7/stylesheet.css" type="text/css" charset="utf-8" />

    </head>
  





<body id="gangbody">



<br>
<div   id="superman"   style="padding:0px;">  </div>



<script  type="text/babel">




 var Comment = React.createClass({


getInitialState : function(){
return {  editing: false}},



edit : function(){   
this.setState({editing: true});},



save : function(){

this.props.updatecommenttext(this.refs.newtext.value, this.props.index);

var val = this.refs.newtext.value;

 this.setState({editing: false});},



remove : function(){ 
   this.props.delfrom(this.props.index)
  },




 rendernormal :function(){
return(
<div>  
<div  className="col-xs-4"   style={  {   backgroundColor:'#00ccff' ,  height:'80px', color:'#ffffff' }  }>
{this.props.children}
</div>

<div  className="col-xs-12" >
</div>

<button  className="col-xs-2"  onClick={this.edit}  style={  {   backgroundColor:'#eeeeee' ,  height:'80px' }  }>
Edit</button>

<button  className="col-xs-2" onClick={this.remove}  style={  {   backgroundColor:'#333333' ,  height:'80px', color:'#ffffff' }  }>
remove </button>  

<div  className="col-xs-12"  style={{padding:'50px'}} >
</div>


  </div> 

   );},








 renderform :function(){
return(
<div>  
<div  className="col-xs-4"   style={  {   backgroundColor:'#111111' ,  height:'80px', color:'#ffffff' }  }>


<textarea  ref="newtext"  style={{color:'#000000'}}   defaultvalue={this.props.children}>    </textarea>

</div>

<div  className="col-xs-12" >
</div>

<button  className="col-xs-2"  onClick={this.save}  style={  {   backgroundColor:'#cccccc' ,  height:'80px' }  }>
Save</button>



<div  className="col-xs-12"  style={{padding:'50px'}} >
</div>


  </div> 

   );},












 render :function(){


if(this.state.editing){    


return this.renderform();


}else{
  

return this.rendernormal();


}   }








});













var Board = React.createClass({  

getInitialState : function(){
  return{   
comments :[ ]
}
},




add : function(text) {
   var ayy = this.state.comments;
   ayy.push(text);
   this.setState({comments : ayy}) },



removecom : function(i){
  var ray = this.state.comments;
  ray.splice(i,1);
  this.setState({ comments:ray })
},



updatecom: function(newt, i){
  var ray = this.state.comments;
   ray[i]  = newt;
   this.setState({ comments: ray})
},





eachrender :function(text, i){

  return(<Comment  key={i} index={i}   updatecommenttext={this.updatecom}   delfrom={this.removecom} > {text} </Comment>);

},






render : function(){
  return (
  <div>


  <button  onClick={this.add.bind(null, 'add a note')} >    add   </button>


<div  className="col-xs-12"  style={{padding:'50px'}} >
</div>




<div classNam="board">    
{

this.state.comments.map(this.eachrender)

}



</div>
</div>


 ); }




});







  ReactDOM.render(<Board/>

, document.getElementById('superman'));



</script>





</body>



   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    
<script src="tools/js/bootstrap.min.js"></script>
<script src="tools/js/jquery-3.3.1.min.js"></script>






</html>       
                          
