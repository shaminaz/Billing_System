<!--<h1>Object Oriented database connection</h1><br><br>-->
<?php
$servername="localhost";
$userid="root";
$password="system";
$dbname="ecom";
$conn=new mysqli($servername,$userid,$password,$dbname);
if($conn->connect_error)
{
	Die ('Connection Failed'.$conn->connect_error);
}
else
{
	echo "";
}
?>