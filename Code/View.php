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
		 <tr><th>Employee name</th>
			<th>Employee NID</th>
			<th>Employee Phone num</th>
			<th>Employee Salary(TK)</th>
			<th>Employee gender</th>
			<th>Update</th>
			
		 </tr>
		<!-- php codes to fetch data from database and show in the rows of this table -->
			
			

<?php
include("DBconnect.php");
error_reporting(0);
$query = "Select * from bank_employee";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		
			
		echo "
					<tr>
			<td>".$result['Name']."</td>
			<td>".$result['NID']."</td>
			<td>".$result['Phone_no']."</td>
			<td>".$result['Salary']."</td>
			<td>".$result['Gender']."</td>
			<td><a href = 'Update.php?en=$result[Employee_Name]&enid=$result[Employee_NID]&ep=$result[Employee_Phone_Num]&es=$result[Employee_Salary]&eg=$result[Employee_Gender]'><input type='submit' value='Update/Edit' id='editbtn'></td>
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
	<input type=button onClick="parent.location='EmployeeInfo.php'"
 value='OK'>
        


					
	
</div>
</body>
</html>