<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>View</title>
<link rel="stylesheet" href="style.css">

<style>
.wrapper{
	display:grid;
	place-items:center;  
    margin-top:60px;

 
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
</head>
 
 

<body>
<div class="wrapper">
	<div class="header">
		<p></p>
	</div>

  

    <div class = "right">
	 <table>
		 <tr><th>Loan_No</th>
			<th> NID</th>
			<th>Loan_Type</th>
			<th>Loan_Time</th>
			<th>Amount</th>
			<th>Update</th>
			
			
		 </tr>
		<!-- php codes to fetch data from database and show in the rows of this table -->
			
			

<?php
include("DBconnect.php");
error_reporting(0);
$query = "Select * from loan";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		
			
		echo "
					<tr>
			<td>".$result['Loan_No']."</td>
			<td>".$result['NID']."</td>
			<td>".$result['Loan_Type']."</td>
			<td>".$result['Loan_Time']."</td>
			<td>".$result['Amount']."</td>
			<td><a href = 'loan update.php?en=$result[Loan_No]&ep=$result[Loan_Type]&ep=$result[Loan_Time]&es=$result[Amount]'><input type='submit' value='Update/Edit' id='editbtn'></td>
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
	<input type=button onClick="parent.location='loan info.php'"
 value='OK'>
        


					
	
</div>
</body>
</html>