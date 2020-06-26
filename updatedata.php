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
	$onep=$_POST['s'];
	$oneq=$_POST['t'];
	$onepr=$_POST['u'];
	$twop=$_POST['x'];
	$twoq=$_POST['y'];
	$twopr=$_POST['z'];
	$threep=$_POST['ac'];
	$threeq=$_POST['ad'];
	$threepr=$_POST['ae'];
	$fourp=$_POST['aj'];
	$fourq=$_POST['ak'];
	$fourpr=$_POST['al'];
	$fivep=$_POST['an'];
	$fiveq=$_POST['ao'];
	$fivepr=$_POST['ap'];
	
	
	
	$parti1=$_POST['ac1'];
	$parti2=$_POST['ac2'];
	$parti3=$_POST['ac3'];
	$parti4=$_POST['ac4'];
	$parti5=$_POST['a5'];
	
	
	
	//$sql="insert into `bill` (`jon`,`date`,`time`,`name`,`phone`,`e-mail`,`mobile`,`dealer`,`d-date`,`veh-no`,`model`,`chasis-no`,`eng-no`,`km`,`dam-repair`,`body-dam`,`bill-no`,`b-date`,`work-done`,`man-power`,`labour`,`test-report`) values('$jon','$adate','$time','$name','$phone','$email','$mobile','$dealer','$ddate','$veh_no','$model','$chasis_no','$eng_no','$km','$dam_repair','$body_dam','$bill_no','$b_date','$work_done','$man_power','$labour','$test_report');";
	$sql="update bill set date='$adate', time='$time',name='$name',phone='$phone',`e-mail`='$email',mobile='$mobile',dealer='$dealer',`d-date`='$ddate',`veh-no`='$veh_no',model='$model',`chasis-no`='$chasis_no',`eng-no`='$eng_no',km='$km',`dam-repair`='$dam_repair',`body-dam`='$body_dam',`bill-no`='$bill_no',`b-date`='$b_date',`work-done`='$work_done',`man-power`='$man_power',labour='$labour',`test-report`='$test_report' where jon='$jon'";
	
	
	
	if ($conn->query($sql) === TRUE) 
	{
		echo"<script>alert('Your Data Inserted... :)');</script>";
		if(trim($parti1)!="")
		{
			$one="update partdetails set `partid`='$parti1',`part`='$onep',`quantity`=$oneq,`price`=$onep, where jon='$jon' and partid='$parti1'";
			if($conn->query($one)===true)
			{
				echo"<script>alert('Your Data Inserted... :)');</script>";
			}
			else
			{
				$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$parti1','$onep','$oneq','$onepr');";
				if($conn->query($one)===true)
				{
					//echo"<script>alert('Your Data Inserted... :)');</script>";
				}
			}
		}
		
		
		
		
		if(trim($parti2)!="")
		{
			$one="update partdetails set `partid`='$parti2',`part`='$twop',`quantity`=$twoq,`price`=$twopr where jon='$jon' and partid='$parti2'";
			if($conn->query($one)===true)
			{
				echo"<script>alert('Your Data Inserted... :)');</script>";
			}
			else
			{
				$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$parti2','$twop','$twoq','$twopr');";
				if($conn->query($one)===true)
				{
					//echo"<script>alert('Your Data Inserted... :)');</script>";
				}
			}
		}
		
		
		
		
		
		if(trim($parti3)!="")
		{
			$one="update partdetails set `partid`='$parti3',`part`='$threep',`quantity`=$threeq,`price`=$threepr where jon='$jon' and partid='$parti3'";
			if($conn->query($one)===true)
			{
				echo"<script>alert('Your Data Inserted... :)');</script>";
			}
			else
			{
				$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$parti3','$threep','$threeq','$threepr');";
				if($conn->query($one)===true)
				{
					//echo"<script>alert('Your Data Inserted... :)');</script>";
				}
			}
		}
		
		
		
		
		
		if(trim($parti4)!="")
		{
			$one="update partdetails set `partid`='$parti4',`part`='$fourp',`quantity`=$fourq,`price`=$fourpr where jon='$jon' and partid='$parti4'";
			if($conn->query($one)===true)
			{
				echo"<script>alert('Your Data Inserted... :)');</script>";
			}
			else
			{
				$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$parti4','$fourp','$fourq','$fourpr');";
				if($conn->query($one)===true)
				{
					//echo"<script>alert('Your Data Inserted... :)');</script>";
				}
			}
		}
		
		
		
		
		
		
		if(trim($parti5)!="")
		{
			$one="update partdetails set `partid`='$parti5',`part`='$fivep',`quantity`=$fiveq,`price`=$fivepr where jon='$jon' and partid='$parti5'";
			if($conn->query($one)===true)
			{
				echo"<script>alert('Your Data Inserted... :)');</script>";
			}
			else
			{
				$one="insert into partdetails (`jon`,`partid`,`part`,`quantity`,`price`) values('$jon','$parti5','$fivep','$fiveq','$fivepr');";
				if($conn->query($one)===true)
				{
					//echo"<script>alert('Your Data Inserted... :)');</script>";
				}
			}
		}
		echo "<a href='form3.php'>go Back</a>";
	}
	else 
	{
		echo"<script>alert('Some error occured... :(';</script>" . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}
?>