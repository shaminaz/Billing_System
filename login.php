<!DOCTYPE html>
	<html>
		<head>
			<title> login form</title>
		<style>
			body{
				background-color:#ab85c3;
				padding:300px;
				box-shadow:off;
				}
	
			label{
					color:white;
				}
				h3{
					color:white;
					}
			.divlig{
					background-color:rgba(0,0,0,0.4);
					width:400px;
					height:300px;
					border-radius:15px 0 15px 0;
					float:center;
					<!-- margin: 25px 50px 75px 100px;-->
					color:#fff;
					padding:28px;
					box-sizing:border-box;
					position:absolute;
					top:230px;
					left:400px;
					text-align:center;
					align:center;
				}
		</style>
		</head>
		<body background="a9.jpg" style="background-repeat:no-repeat; background-size:cover;">
			<form method="post" action="clogin.php">
			
			<div class="divlig">
			<h3><strong>Login Form</strong><h3>
			<input type="text" name="uid" placeholder="Username"><br>
			<input type="password" name="pw" placeholder="Password"><br><br>
			<input type="text" name="code" placeholder="Enter Captcha" autocomplete=off><br>
			<img src="image.php" height="30px" width="100px"><br>
			<input type="submit" name="submit" value="Login">
			</div>
			</form>
		</body>
	</html>
<?php
?>	
