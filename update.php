<?php
include("con1.php");
session_start();
{
if($_SESSION['sid']==session_id()){
	
	$adate=$time=$name=$phone=$email=$mobile=$dealer=$d_date=$veh_no=$model=$chasis_no=$eng_no=$km=$dam_rep=$body_dam=$bill_no=$b_date=$work_done=$man_power=$labours=$test_report="";
	
	
	
	$parti1=$part=$quant=$price="";
	$parti2=$part2=$quant2=$price2="";
	$parti3=$part3=$quant3=$price3="";
	$parti4=$part4=$quant4=$price4="";
	$parti5=$part5=$quant5=$price5="";
	
	
	$jon=$_POST['fjon'];
	//$sql="select * from bill where jon='$jon';";
	$sql=mysqli_query($conn,"SELECT * FROM bill where jon='$jon'");
	//$result
	
	//if ($conn->query($sql) === TRUE)
	//{
		while($row=mysqli_fetch_array($sql))
		{
			$adate=$row[1];
			$time=$row[2];
			$name=$row[3];
			$phone=$row[4];
			$email=$row[5];
			$mobile=$row[6];
			$dealer=$row[7];
			$ddate=$row[8];
			$veh_no=$row[9];
			$model=$row[10];
			$chasis_no=$row[11];
			$eng_no=$row[12];
			$km=$row[13];
			$dam_rep=$row[14];
			$body_dam=$row[15];
			$bill_no=$row[16];
			$b_date=$row[17];
			$work_done=$row[18];
			$man_power=$row[19];
			$labour=$row[20];
			$test_report=$row[21];
	
			
	
	
	
	
	
	
	echo '<!DOCTYPE HTML>
	<HTML>
		<HEAD>
			<TITLE> FORM 2 </TITLE>
			<STYLE>

				*{
					text-align:center;
				}
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
				span{
						color:red;
					}
				
			</STYLE>
			<script>
				function vform()
				{
					var a=document.getElementById("fv").value;
					if( a == "")
					{
						document.getElementById("fv1").innerHTML= " **please fill this field";
						return false;
					}
					
					var b=document.getElementById("fy").value;
					if(b=="")
					{
						document.getElementById("fy1").innerHTML=" ** please fill this field";
						return false;
					}
					else if(isNaN(b)||b.length!=10)
					{
						document.getElementById("fy1").innerHTML= " **please re-enter the valid number";
						alert("Invalid Mobile Number...");
						return false;
					}
					else
					 return true;
					 
					var c=document.getElementById("fx").value;
					if(c=="")
					{
						document.getElementById("fx1").innerHTML=" ** please fill this field";
						return false;
					}
					 var d=document.getElementById("gb").value;
					if(d=="")
					{
						document.getElementById("gb1").innerHTML=" ** please fill this field";
						return false;
					}
					 
				}
			</script>
			
		
		</HEAD>
		<BODY >
			<div align="center" ><h1 style="font-size:300%"><i>Vikas Corporation</i></h1></div>
			<ul>
				<li><a class="active" href="form2.html">Add</a></li>
				<li><a href="form3.php">view</a></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="logout.php">logout</a></li>
				
			</ul>
			<FORM name="form1" onsubmit="return vform()" method="post" action="updatedata.php">
			<TABLE BORDER="1" WIDTH="100%">
				<TR>
					<TH COLSPAN="3"><H3>ALWAYS CARING FOR YOU</H3></TH>
					<TD>JOB ORDER NO:</TD>
					<TH><INPUT TYPE="TEXT" NAME="fs" REQUIRED value="'.$jon.'" readonly></TH>
					<Td ROWSPAN="3"><IMG SRC="mar.jpg" STYLE="DISPLAY:BLOCK;" width="100%" height="100%"/></Td>
				</TR>
				<TR>
					<TH COLSPAN="3" ROWSPAN="2"><IMG STYLE="DISPLAY:BLOCK;" SRC="card.jpg" WIDTH="100%" HEIGTH="100%" /></TH>
					<TD>DATE</TD>
					<TD>TIME</TD>
				</TR>
				<TR>
					<TD><INPUT TYPE="TEXT" NAME="ft" value="'.$adate.'"></TD>
					<TD><INPUT TYPE="TEXT" NAME="fu" value="'.$time.'"></TD>
				</TR>
				<TR>
					<TD COLSPAN="3" ROWSPAN="3">Mr./Mrs./Ms.<INPUT TYPE="TEXT" NAME="fv" id="fv" value="'.$name.'" onkeypress="return(event.charCode > 64 && event.charCode<91) || (event.charCode>96 && event.charCode<123)" autocomplete=off><span id="fv1"> </span></TD>
					<TD style="align:left;">Ph. (O):<INPUT TYPE="TEXT" NAME="fw"value="'.$phone.'"></TD>
					<TD COLSPAN="2"><H5>DELIVERY DETAILS</H5></TD>
				</TR>
				<TR>
					<TD style="align:left;">E-mail<INPUT TYPE="email" NAME="fx" id="fx" value="'.$email.'"><br><span id="fx1"></span></TD>
					<TD>DEALER</TD>
					<TD>DATE</TD>
				</TR>
				<TR>
					<TD style="align:left;">Mobile:<INPUT TYPE="TEXT" NAME="fy" id="fy" value="'.$mobile.'"><br><span id="fy1"></span></TD>
					<TD><INPUT TYPE="TEXT" NAME="fz" value="'.$dealer.'"></TD>
					<TD><INPUT TYPE="TEXT" NAME="ga" value="'.$ddate.'"></TD>
				
				</TR>
			</table>
			<table BORDER="1" WIDTH="100%">
				<TR>
					<TD>VEHICLE REG NO.</TD>
					<TD>MODEL</TD>
					<TD>CHASSIS NO.</TD>
					<TD>ENGINE NO.</TD>
					<TD colspan="2">KILOMETERS</TD>
				</TR>
			
				<TR>
					<TD><INPUT TYPE="TEXT" NAME="gb" id="gb" value="'.$veh_no.'"><br><span id="gb1"></span></TD>
					<TD><INPUT TYPE="TEXT" NAME="gc" value="'.$model.'"></TD>
					<TD><INPUT TYPE="TEXT" NAME="gd"value="'.$chasis_no.'"></TD>
					<TD><INPUT TYPE="TEXT" NAME="ge"value="'.$eng_no.'"></TD>	
					<TD colspan="2"><INPUT TYPE="TEXT" NAME="gf" value="'.$km.'"></TD>
				</TR>

			</TABLE> 
			<TABLE BORDER="1" WIDTH="100%">
			
				<TR>
					
					<TD ROWSPAN="5"><B>DEMAND REPAIRS</B><BR><TEXTAREA ROWS="10" COLS="50" name="dam_rep">'.$dam_rep.'</TEXTAREA></TD>
					
					<TD ROWSPAN="5"><B>BODY DAMAGES</B><BR><TEXTAREA ROWS="10" COLS="50" name="body_dam">'.$body_dam.'</TEXTAREA></TD>
					
				</TR>
				 
				 
			</TABLE>
			<TABLE BORDER="1" WIDTH="100%">
				<CAPTION><B>CREDIT/CASH BILL</B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BILL NO:<INPUT TYPE="TEXT" name="ef" value="'.$bill_no.'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE:<INPUT TYPE="TEXT" name="eg"  value="'.$b_date.'"></CAPTION>
		
				<TR>
					
					<TD ROWSPAN="5"><B>WORKDONE</B><BR><TEXTAREA ROWS="10" COLS="50" name="w_done" >'.$work_done.'</TEXTAREA></TD>
					<TD ROWSPAN="5"><B>MAN HOURS</B><BR><TEXTAREA ROWS="10" COLS="50"name="m_power" >'.$man_power.'</TEXTAREA></TD>
					<TD ROWSPAN="5"><B>LABOURS</B><BR><TEXTAREA ROWS="10" COLS="50"name="labours">'.$labour.'</TEXTAREA></TD>
					
				</TR>

				 
			';
	
	
	
	
	
	
		//}
	} 
	
	
	$sql1=mysqli_query($conn,"SELECT * FROM partdetails where jon='$jon'");
	$i=1;
	while($row=mysqli_fetch_array($sql1))
	{
		if($i==1){
			$parti1=$row['partid'];
			$part=$row['part'];
			$quant=$row['quantity'];
			$price=$row['price'];
			$i++;
		}
		else if($i==2){
			$parti2=$row['partid'];
			$part2=$row['part'];
			$quant2=$row['quantity'];
			$price2=$row['price'];
			$i++;
		}
		else if($i==3){
			$parti3=$row['partid'];
			$part3=$row['part'];
			$quant3=$row['quantity'];
			$price3=$row['price'];
			$i++;
		}
		else if($i==4){
			$parti4=$row['partid'];
			$part4=$row['part'];
			$quant4=$row['quantity'];
			$price4=$row['price'];
			$i++;
		}
		else if($i==5){
			$parti5=$row['partid'];
			$part5=$row['part'];
			$quant5=$row['quantity'];
			$price5=$row['price'];
			$i++;
		}
	}
			echo'<TABLE BORDER="1"  WIDTH="100%">
				 <CAPTION><B> SPARES ISSUES </B></CAPTION>
		
				
				<TR>
					<TH> Sl<BR>No. </TH>
					<TH> Part ID. </TH>
					<TH> Part No. </TH>
					<TH> Qty </TH>
					<TH> Price </TH>
				
				</TR>
				<TR>
                                        <TD> 1  </TD>
										<TD><INPUT TYPE="TEXT" name="ac1" size="15" value="'.$parti1.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="x" size="15" value="'.$part.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="y" size="15" value="'.$quant.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="z" size="15" value="'.$price.'"></TD>
                                        
                                     
		</TR>
				
				 <TR>
                                        <TD> 2  </TD>
										<TD><INPUT TYPE="TEXT" name="ac2" size="15" value="'.$parti2.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="s" size="15" value="'.$part2.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="t" size="15" value="'.$quant2.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="u" size="15" value="'.$price2.'"></TD>
                                        
                                     
		</TR><TR>
                                        <TD> 3  </TD>
										<TD><INPUT TYPE="TEXT" name="ac3" size="15" value="'.$parti3.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ac" size="15" value="'.$part3.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ad" size="15" value="'.$quant3.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ae" size="15" value="'.$price3.'"></TD>
                                        
                                      
			</TR>  <TR>
                                        <TD> 4  </TD>
										<TD><INPUT TYPE="TEXT" name="ac4" size="15" value="'.$parti4.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="aj" size="15" value="'.$part4.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ak" size="15" value="'.$quant4.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="al" size="15" value="'.$price4.'"></TD>

			</TR><TR>
                                        
                                        <TD> 5  </TD>
										<TD><INPUT TYPE="TEXT" name="a5" size="15" value="'.$parti5.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="an" size="15" value="'.$part5.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ao" size="15" value="'.$quant5.'"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ap" size="15" value="'.$price5.'"></TD>
                                      
                </TR>
				
			</TABLE>
			<TABLE BORDER="1" WIDTH="100%">
				<TR>
							
					<TD colspan="4"> Total Amount:<INPUT TYPE="TEXT" name="ee"></TD>
                </TR>

			</TABLE>
			<TABLE BORDER="1" WIDTH="100%">
				<CAPTION>TESTERS REPORT</CAPTION>
			 <TR>
				<TD><TEXTAREA NAME="testreport" ROWS="4" COLS="180" WIDTH="100%">'.$test_report.'</TEXTAREA></TD>
			 <TR>
			</TABLE>
			<BR><center><INPUT TYPE="SUBMIT" VALUE="SUBMIT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="RESET" VALUE="RESET"></center>
		</FORM>
		
		
	<BODY>

			<HTML>';
	
	
	
	
	
	
		//}
	
	
	
	/*else
	{
		echo "Not found". $sql . "<br>" . $conn->error;
	}*/
	
	
	


}
else
{
	header("location:login.php");
}
}
?>
