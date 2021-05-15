 
<?php 


function  timeago($stamp){
    
    
     $ptime= strtotime($stamp);
    $ctime =time();
    
    $tdiff = $ctime - $ptime;
    $sec = $tdiff;
    $minutes= round($sec / 60 );  // value 60  sec
    
    $hours= round($sec / 3600 );  //val 3600sec is 60 min

    $days= round($sec / 86400 ); //=24 * 60 *60
    
     $weeks= round($sec /604800 ); // 7  * 24 *60 * 60
    
    $months = round($sec / 2629440 ); // ((365 + 365 +365 + 365+366)/5/12)*24*60*60

    
    $years = round($sec / 31553280 );// (365 + 365 +365 + 365+366)/5*24*60*60
    
    
    
    
    
    
    
   if($sec   <= 60){
       
       return " just now  ";
   }
    else if ( $minutes <= 60){
    
    if ($minutes == 1){
        
        return "one min ago  ";
    }else {
     return "$minutes mins ago";   
        
    }
    
    
}
    
    
    
 else if ( $hours <= 24){
    
    
   if ($hours == 1){
        
        return "an hour ago ";  
} else {
        
       return "$hours hrs ago";
   }  
    
    
   
}
    
    
    
    
    
 else if ( $days <= 7){ 
     
   if ($days == 1){
        
        return "yesterday "; }
    else {
         return "$days days ago";
    }
    
}
      
    
    
    
 else if ( $weeks <= 4.3){  //4,3 = 52/12 
     
   $datec = new DateTime($stamp);
     $dfix=$datec ->format("  M  d  "  );   ///date constraints
       return $dfix;
    
}
     
    
 else if ( $months <= 12){  //4,3 = 52/12 
     
  
    $datec = new DateTime($stamp);
     $dfix=$datec ->format("  M  d  "  );   ///date constraints
       return $dfix;
  
    
}
    
    else {
        
       $datec = new DateTime($stamp);
     $dfix=$datec ->format("  M  d .Y  "  );   ///date constraints
   
        
         return $dfix;
    }
    
    
    
    
    
    
    
    
    
}

?>