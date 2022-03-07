<?php 
 include "connect.php";
 $table="CREATE TABLE IF NOT EXISTS client(
   
    
    Name VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    PRIMARY KEY(Email),
    Phone INT(30) NOT NULL,
    Message VARCHAR(200) NOT NULL 
)";
$sql=mysqli_query($conn,$table);

?>