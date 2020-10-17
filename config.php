<?php      
     
      
    $conn = mysqli_connect('localhost', 'root', '', 'kkk');  
    if(!conn) {  
        echo("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    else{
        echo"connection is success";
    } 
?> 