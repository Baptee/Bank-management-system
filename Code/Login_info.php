<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['ID']) && isset($_POST['user_password'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['ID'];
	$p = $_POST['user_password'];
	$sql = "SELECT * FROM Bank_Employee WHERE NID = '$u' AND Password = '$p'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result)!=0 ){
	
		//echo "LET HIM ENTER";
		header('Location: information.php');
	}
	else{
		//echo "Incorrect User Name Or Password";
		header("Location: home.php");
	}
	
}


?>
