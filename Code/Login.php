<!DOCTYPE html>
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

  </style>
  
<body>
<body background= "https://admissions.gsu.edu/files/2018/06/bg-image-1-ADM-EX.jpg">

<div class="py-5">
    <h2 class="text-center">Login</h2>
  </div>

<div class="w-50 m-auto">
	<form action="Login_info.php" method="post">
		<div class= "form-group">
		</div>
		<div class= "form-group">
			<label >NID</label>
			<input type="text" name="ID" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Password</label>
			<input type="password" name="user_password" autocomplete="off" class="form-control">
		</div>
		<button type="submit" class="btn btn-success">Login</button>






</div>
</form>
</div>
</body>
</head>
</html>
