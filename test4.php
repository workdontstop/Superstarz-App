

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
var Checkbox= React.createClass({


getInitialState : function(){
  return  {checked : true}
},




handlechecked : function(){
this.setState({ checked: !this.state.checked});
},







  render: function(){
var msg;

if(this.state.checked){  
  msg ="Winner"
}else{
  msg ="Typical"
}

return (

<div>
<input  onChange={this.handlechecked}   type ="checkbox"   defaultChecked={this.state.checked}  />
<h1 > You can call me {msg} </h1>
</div>);
}






});









  ReactDOM.render(


<div>

 <Checkbox>

 </Checkbox>
 </div>
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
                          
