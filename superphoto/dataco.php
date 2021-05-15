<?php  

  
           $server="localhost";
           $userss="root";
           $password="password";
           $dbname="starfire";
           
        $super= new mysqli($server, $userss, $password, $dbname);
           
           if($super->connect_error){
               
               die("Connection Failed:" . $super->connect_error);
               
           }
           
             date_default_timezone_set("Africa/lagos");
     

           ?>