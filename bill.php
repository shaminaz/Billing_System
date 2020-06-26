<?php
include("con1.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$jon=$_POST['fs'];
	$adate=$_POST['ft'];
	$time=$_POST['fu'];
	$name=$_POST['fv'];
	$phone=$_POST['fw'];
	$email=$_POST['fx'];
	$mobile=$_POST['fy'];
	$dealer=$_POST['fz'];
	$ddate=$_POST['ga'];
	$veh_no=$_POST['gb'];
	$model=$_POST['gc'];
	$chasis_no=$_POST['gd'];
	$eng_no=$_POST['ge'];
	$km=$_POST['gf'];
	$dam_repair=$_POST['dam_rep'];
	$body_dam=$_POST['body_dam'];
	$bill_no=$_POST['ef'];
	$b_date=$_POST['eg'];
	$work_done=$_POST['w_done'];
	$man_power=$_POST['m_power'];
	$labour=$_POST['labours'];
	$test_report=$_POST['testreport'];
	$onepi=$_POST['ac1'];
	$onep=$_POST['s'];
	$oneq=$_POST['t'];
	$onepr=$_POST['u'];
	$twopi=$_POST['ac2'];
	$twop=$_POST['x'];
	$twoq=$_POST['y'];
	$twopr=$_POST['z'];
	$threepi=$_POST['ac3'];
	$threep=$_POST['ac'];
	$threeq=$_POST['ad'];
	$threepr=$_POST['ae'];
	$fourpi=$_POST['ac4'];
	$fourp=$_POST['aj'];
	$fourq=$_POST['ak'];
	$fourpr=$_POST['al'];
	$fivepi=$_POST['ac5'];
	$fivep=$_POST['an'];
	$fiveq=$_POST['ao'];
	$fivepr=$_POST['ap'];
	
	
	$sql="insert into `bill` (`jon`,`date`,`time`,`name`,`phone`,`e-mail`,`mobile`,`dealer`,`d-date`,`veh-no`,`model`,`chasis-no`,`eng-no`,`km`,`dam-repair`,`body-dam`,`bill-no`,`b-date`,`work-done`,`man-power`,`labour`,`test-report`) values('$jon','$adate','$time','$name','$phone','$email','$mobile','$dealer','$ddate','$veh_no','$model','$chasis_no','$eng_no','$km','$dam_repair','$body_dam','$bill_no','$b_date','$work_done','$man_power','$labour','$test_report');";
	
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
		echo"<script>alert('Your Data Inserted... :)');</script>";
		if(trim($onep)!="")
		{
			$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$onepi','$onep','$oneq','$onepr');";
			if($conn->query($one)===true)
			{
				//echo"<script>alert('Your Data Inserted... :)');</script>";
			}
		}
		if(trim($twop)!="")
		{
			$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$twopi','$twop','$twoq','$twopr');";
			if($conn->query($one)===true)
			{
				//echo"<script>alert('Your Data Inserted... :)');</script>";
			}
		}
		if(trim($threep)!="")
		{
			$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$threepi','$threep','$threeq','$threepr');";
			if($conn->query($one)===true)
			{
				//echo"<script>alert('Your Data Inserted... :)');</script>";
			}
		}
		if(trim($fourp)!="")
		{
			$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$fourpi','$fourp','$fourq','$fourpr');";
			if($conn->query($one)===true)
			{
				//echo"<script>alert('Your Data Inserted... :)');</script>";
			}
		}
		if(trim($fivep)!="")
		{
			$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$fivepi','$fivep','$fiveq','$fivepr');";
			if($conn->query($one)===true)
			{
				//echo"<script>alert('Your Data Inserted... :)');</script>";
			}
		}
		echo "<a href='form2.php'>go Back</a>";
	}
	else 
	{
		echo"<script>alert('Some error occured... :(';</script>" . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}
?>