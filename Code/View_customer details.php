<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>View</title>
<link rel="stylesheet" href="style.css">

<style>
.wrapper{
	display:grid;
	place-items:center;
  
  
    margin-top:80px;

 
}
#editbtn
{
	background-color:green;
	color:white;
	width:140px;
	font-size:80px:
	height:25px;
}



</style>
</head>
 
 

<body>
<div class="wrapper">
	<div class="header">
		<p></p>
	</div>

  

    <div class = "right">
	 <table>
		 <tr><th>Customer name</th>
			<th>Customer NID</th>
			<th>Customer Phone no.</th>
			<th>Customer Email</th>
			<th>Customer Address</th>
			<th>Customer Current Bank Balance</th>
			<th>Customer Last Withdrawal Amount</th>
			<th>Customer Last Deposit Amount</th>
			<th>Update</th>
			
		 </tr>
		<!-- php codes to fetch data from database and show in the rows of this table -->
			
			

<?php
include("DBconnect.php");
error_reporting(0);
$query = "Select * from bank_customer";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		
			
		echo "
					<tr>
			<td>".$result['Customer_Name']."</td>
			<td>".$result['Customer_NID']."</td>
			<td>".$result['Customer_Phone_Num']."</td>
			<td>".$result['Customer_Email']."</td>
			<td>".$result['Customer_Address']."</td>
			<td>".$result['Customer_Current_Bank_Balance']."</td>
			<td>".$result['Customer_Last_Withdrawal_Amount']."</td>
			<td>".$result['Customer_Last_Deposit_Amount']."</td>
			<td><a href = 'Update customer info.php?ep=$result[Customer_Phone_Num]&es=$result[Customer_Email]&eg=$result[Customer_Address]&eb=$result[Customer_Current_Bank_Balance]&ew=$result[Customer_Last_Withdrawal_Amount]&ed=$result[Customer_Last_Deposit_Amount]'><input type='submit' value='Update/Edit' id='editbtn'></td>
			</tr>	
			";
		
		
	}
}
else
{
	echo "No Records found";
}
?>	
		
		
		<!--ends -->   		 	
     </table>


	</div>	
	<input type=button onClick="parent.location='customer_info.php'"
 value='OK'>
        


					
	
</div>
</body>
</html>