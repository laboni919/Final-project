<?php 
 include "connect.php";
 $name=$_POST['name'];
 $email=$_POST['email'];

 $message=$_POST['text'];


 $in="INSERT INTO client (Name, Email, Message) VALUES('$name','$email','$message')";
 
 $result=mysqli_query($conn,$in);



 
 ?>