<?php
session_start();
$name1=$_SESSION['f_name'];
$name2=$_SESSION['l_name'];
if($_SESSION['sid']==session_id())
{
	//echo'<a href="form2.html"></a>';
	header("location:index.html");	
	/*echo"<br><br><br><br><div id='a1'>Welcome to Admin's Page <br>";//Mr. ".$name1." ".$name2."<br></div>";
	
	echo"<html><head>
	   <link href='style.css' rel='stylesheet' type='text/css'/>
    <link href='login.css' rel='stylesheet' type='text/css'/>
    <link href='page.css' rel='stylesheet' type='text/css'/>

	<fieldset style='width:30%'>
		<legend>Admins Counter</legend>
		<form><br><br>
			<table border='1px'>
			<tr>
				<td><a href='logout.php'>Logout</a></td>
				<td><a href='adddoctor.php'>Add Doctor</a></td>
				<td><a href='doctor.php'>Find Doctor</a></td>
			</tr>
			<tr>
				<td><a href='alldoctors.php'>All Doctors</a></td>
				<td><a href='adduser.php'>Add Admins</a></td>
				<td><a href='showadmins.php'>Show Admins</a></td>
			</tr>
			<tr>
				<td><a href='showqueries.php'>Show Queries</a></td>
				<td></td>
				<td></td>
			</tr>
			</table>
		</form>
	</fieldset>";
	
	
	
	/*echo"Welcome Mr. ".$name1." ".$name2."<br>";
	echo"<a href='logout.php'>Logout</a>";
	echo"<a href='adddoctor.php'>Add Doctor</a><br>";
	echo"<a href='doctor.php'>Find Doctor</a><br>";
	echo"<a href='alldoctors.php'>All Doctors</a><br>";
	echo"<a href='adduser.php'>Add Admins</a><br>";
	echo"<a href='showadmins.php'>Show Admins</a><br>";
	echo"<a href='showqueries.php'>Show Queries</a><br>";*/
}
else
{
	header("location:login.php");
}
?>
<!--<!DOCTYPE html>
<head>
</head>
<body>


<div class="menu">
	<div class="menu_place">
        <ul type="NONE">
            <li><a href="#">Care</a>
                <ul>
                    <li><a href="doctor.php">Find Doctor</a></li>
                    <li><a href="">Medical Feed</a></li>
                    <li><a href="pay.php">Pay Online</a></li>
                </ul></li>
            <li><a href="#">Departments</a>
				<ul>
                    <li><a href="cardiology.php">Cardiology</a></li>
                    <li><a href="physiology.php">Physiology</a></li>
                    <li><a href="neurology.php">Neurology</a></li>
                </ul></li>
            <li><a href="securepage.php">Management</a>
				</li>
            <li><a href="#">Academic</a>
				<ul>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="academic.php">Academic</a></li>
                    <li><a href="research.php">Research</a></li>
                </ul></li>
            <li><a href="find.php">Location</a></li>
            <li><a href="#">Contact Us</a>
				<ul>
                    <li><a href="queries.php">Post Your Queries</a></li>
                    <li><a href="find.php">Find Us</a></li>
                    <li><a href="queries.php">Get in touch</a></li>
                </ul></li>
        </ul>
    </div>
    <div class="login"><a href="index.php">Home</a></div>
</div>
<div class="foot"><h2>&copy; This project belongs to <i>Reetesh Kumar</i> Mca Sem-1 RVCE.</h2></div>



</body>
</html>-->