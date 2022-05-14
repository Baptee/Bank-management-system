
<!DOCTYPE html>
<?php 
include("DBconnect.php");
error_reporting(0);

$en = $_GET['en'];
$enid = $_GET['enid'];
$ep = $_GET['ep'];
$es = $_GET['es'];
$eg = $_GET['eg'];
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet"/> 
<style>
    body, html {height: 100%}
  
  
    .background_img{
       min-height: 100%;
       background-position: center;
       background-size: cover;
	   background-color: #111;
	}
	.text-center{
		color: #fff;
		margin-top: 20px;
		font-size: 3rem;
	}
	.form-group{
		
		color: #fff
	}
	#editbtn
{
	background-color:green;
	color:white;
	width:130px;
	font-size:180px:
	height:35px;
}

  </style>
  
<body>
<body background= "https://miro.medium.com/max/11232/0*6pJVKcTdCiT1PSQW">

<div class="py-5">
    <h2 class="text-center">Update</h2>
  </div>

<div class="w-50 m-auto">
	<form action="" method="GET">
		<div class= "form-group">
		</div>
		<div class= "form-group">
			<label >Update_Employee_Name</label>
			<input type="text"  value="<?php echo "$en"  ?>" name="Name" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Employee_NID</label>
			<input type="text"  value="<?php echo "$enid"  ?>" name="NID" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Employee_Phone num</label>
			<input type="text"  value="<?php echo "$ep"  ?>" name="Employee_Phone_Num" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Employee_Salary</label>
			<input type="text"  value="<?php echo "$es"  ?>" name="Employee_Salary" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Employee_Gender</label>
			<input type="text"  value="<?php echo "$eg"  ?>" name="Employee_Gender" autocomplete="off" class="form-control">
		</div>
		<tr>
		<td colspan="2" align="center"><input type="submit" id='editbtn' name="submit" value="Update Details"></a></td>
		</tr>






</div>
</form>
</div>
</body>
</head>
</html>

<?php
if($_GET['submit'])
{
	$Employee_Name = $_GET['Employee_Name'];
	$Employee_NID = $_GET['Employee_NID'];
	$Employee_Phone_Num = $_GET['Employee_Phone_Num'];
	$Employee_Salary = $_GET['Employee_Salary'];
	$Employee_Gender = $_GET['Employee_Gender'];

$query = "UPDATE bank_employee SET Employee_Name='$Employee_Name', Employee_NID='$Employee_NID',
 Employee_Phone_Num='$Employee_Phone_Num', Employee_Salary='$Employee_Salary', Employee_Gender='$Employee_Gender' WHERE Employee_NID='$Employee_NID'";

$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/370Project/View.php">
	<?php
	
}
else
{
	echo "Failed to Update Record";
}
}


?>