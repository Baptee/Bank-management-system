
<!DOCTYPE html>
<?php 
include("DBconnect.php");
error_reporting(0);

$en = $_GET['en'];
$enid = $_GET['enid'];
$ep = $_GET['ep'];
$es = $_GET['es'];

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
			<label >Loan_No</label>
			<input type="text"  value="<?php echo "$en"  ?>" name="Loan_No" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Loan_Type</label>
			<input type="text"  value="<?php echo "$enid"  ?>" name="Loan_Type" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Loan_Time</label>
			<input type="text"  value="<?php echo "$ep"  ?>" name="Loan_Time<" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Amount</label>
			<input type="text"  value="<?php echo "$es"  ?>" name="Amount" autocomplete="off" class="form-control">
		
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
	$Loan_num= $_GET['Loan_No'];
	$Loan_type= $_GET['Loan_Type'];
	$Loan_time = $_GET['Loan_time'];
	$Amoount = $_GET['Amount'];


$query = "UPDATE loan SET Loan_No='$Loan_No', Loan_type='$Loan_Type',
 Loan_time='$Loan_time', Amount='$Amount'";

$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT ="0; URL=D:\XAMPP\htdocs\370Project\view_loan.php">
	<?php
	
}
else
{
	echo "Failed to Update Record";
}
}


?>