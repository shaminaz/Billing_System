<?php
session_start();
	session_destroy();

echo '
	<!DOCTYPE html>
		<html>
			<head>
				<style>
					.halign{
						
						position:absolute;
						top:180px;
						left:460px;
						text-align:center;
						align:center;
						}
				</style>
			</head>
			<body>
			<span class="halign">
				<h3 style="color:black;">LOGGED OUT SUCCESSFULLY</h3>
			</span>
			</BODY>
		</html> ';

	
	header("location:index.html");
?>
