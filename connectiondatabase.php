<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "database name";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);#chonnection to database using mysqli_connecct  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  }
    else 
        echo"suceess";

?>  