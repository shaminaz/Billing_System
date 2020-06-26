<?php
session_start();
{
if($_SESSION['sid']==session_id()){
echo '<!DOCTYPE html>
<html>
	<head>
		<title> Form 3</title>
		<style>
			.active
				{
					background-color: #00bfff;
				}
			ul{
				list-style-type: none;
				margin:0;
				padding:0;
				overflow:hidden;
				background-color: #333;
			}
			li
			{
				float:left;
			}
			li a{
				display:block;
				color:white;
				text-align: center;
				padding: 14px 16px;
				text-decoration:none;
				}
			li a:hover{
					background-color: #111;
				}
			</STYLE>
	</head>
	<body bgcolor=#00bfff>
		<div align="center"><h1 style="font-size:300%"><i>Vikas Corporation</i></h1></div>
				
		<ul>
				<li><a href="form2.html">Add</a></li>
				<li><a  class="active"href="form3.php">view</a></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="logout.php">logout</a></li>
				
			</ul>
		
			Enter the Job Number to Update
		<form method="post" action="update.php">
			<input type="text" name="fjon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update">	
		</form>
	</body>
</html>';

}
else
{
	header("location:login.php");
}
}
?>
