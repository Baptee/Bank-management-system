
<!DOCTYPE html>
<?php 
include("DBconnect.php");
error_reporting(0);

$ep = $_GET['ep'];
$es = $_GET['es'];
$eg = $_GET['eg'];
$eb = $_GET['eb'];
$ew = $_GET['ew'];
$ed = $_GET['ed'];
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
			<label >Update_Customer_Phone num</label>
			<input type="text"  value="<?php echo "$ep"  ?>" name="Customer_Phone_Num" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Customer_Email</label>
			<input type="text"  value="<?php echo "$es"  ?>" name="Customer_Email" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Customer_Address</label>
			<input type="text"  value="<?php echo "$eg"  ?>" name="Customer_Address" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Customer_Current_Bank_Balance</label>
			<input type="text"  value="<?php echo "$eb"  ?>" name="Customer_Current_Bank_Balance" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Customer_Last_Withdrawal_Amount</label>
			<input type="text"  value="<?php echo "$ew"  ?>" name="Customer_Last_Withdrawal_Amount" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Update_Customer_Last_Deposit_Amount</label>
			<input type="text"  value="<?php echo "$ed"  ?>" name="Customer_Last_Deposit_Amount" autocomplete="off" class="form-control">
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

	$Customer_Phone_Num = $_GET['Customer_Phone_Num'];
	$Customer_Email = $_GET['Customer_Email'];
	$Customer_Address = $_GET['Customer_Address'];
	$Customer_Current_Bank_Balance = $_GET['Customer_Current_Bank_Balance'];
	$Customer_Last_Withdrawal_Amount = $_GET['Customer_Last_Withdrawal_Amount'];
	$Customer_Last_Deposit_Amount = $_GET['Customer_Last_Deposit_Amount'];

$query = "UPDATE bank_customer SET Customer_Phone_Num='$Customer_Phone_Num', Customer_Email='$Customer_Email', Customer_Address='$Customer_Address', Customer_Current_Bank_Balance = '$Customer_Current_Bank_Balance',
	Customer_Last_Withdrawal_Amount = '$Customer_Last_Withdrawal_Amount',
	Customer_Last_Deposit_Amount = '$Customer_Last_Deposit_Amount' WHERE Customer_Phone_Num='$Customer_Phone_Num'";

$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT ="0; URL=\370Project\View_customer details.php">
	<?php
	
}
else
{
	echo "Failed to Update Record";
}
}


?>