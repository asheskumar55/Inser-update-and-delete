<?php 
	$connect= mysqli_connect("localhost","root","root","users");
	if(isset($_POST["insert_btn"]))
	{
		$sql="CALL insertdata('".$_POST["username"]."','".$_POST["name"]."')";
		if(mysqli_query($connect,$sql))
		{
			header("location:index.php?inserted=1");
		}
	}
	if(isset($_GET["inserted"]))
	{
		echo '<script>alert("data inserted")</script>';
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to insert data using stored procedure in php mysql</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		body{
				margin:0;
				padding: 0;
				background-color: #f1f1f1;
			}
		.box{
				width: 500px;
				padding:20px;
				background-color: #fff;
			}
	</style>
</head>
<body>
	<div class="container box">
		<form method="post" action="">
			<div class="form-group">
				<label>Enter Username</label>
				<input type="text" name="username" id="username" class="form-control">
			</div>
			<br/>
			<div class="form-group">
				<label>Enter Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			</br>
			<div class="form-group">
				<input type="submit" name="insert_btn" class="btn btn-info">
			</div>

		</form>
	</div>
</body>
</html>