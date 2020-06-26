<?php
include("con1.php");
$c=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
	try
	{
		$un=$_POST['uid'];
		$pw=$_POST['pw'];
		$code=$_POST['code'];
		$r=mysqli_query($conn,"SELECT * FROM admin WHERE username='$un' and password='$pw'");
		if(!$r)
		{
			
			echo "User not found ".mysqli_error;
		}
		else
		{
			while($row=mysqli_fetch_array($r))
			{
				$c++;
				session_start();
				$_SESSION['f_name']=$row[0];
				$_SESSION['l_name']=$row[1];
			}
		}
		if($c>0 and $code==$_SESSION['code'])
		{
			$_SESSION['sid']=session_id();
			header("location:securepage.php");
		}
		else
		{
			
			echo"<script>alert('Please check your user name or password.');</script>";
			header("location:login.php");
		}
	}
	catch(Exception $e)
	{
		echo $e;
	}
}
?>