<?php      
    $host = "localhost";  
    $user = "data";  
    $password = '134679';  
    $db_name = "rent-o-tailor";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  