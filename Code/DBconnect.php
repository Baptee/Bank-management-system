<?php


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "Bank Management";

 //creating connection
 
 $conn = new mysqli($servername,$username,$password,$dbname);
 
 //check connection
 if($conn->connect_error){
	 die("connection failed: " . $conn->connect_error);
 }
 else{
	 mysqli_select_db($conn, $dbname);
	 //echo "connection successful";
 }
  


?>