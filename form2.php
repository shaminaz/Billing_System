<?php
session_start();
{
if($_SESSION['sid']==session_id()){
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
			<FORM name="form1" onsubmit="return vform()" method="post" action="bill.php">
			<TABLE BORDER="1" WIDTH="100%">
				<TR>
					<TH COLSPAN="3"><H3>ALWAYS CARING FOR YOU</H3></TH>
					<TD>JOB ORDER NO:</TD>
					<TH><INPUT TYPE="TEXT" NAME="fs" REQUIRED></TH>
					<Td ROWSPAN="3"><IMG SRC="mar.jpg" STYLE="DISPLAY:BLOCK;" width="100%" height="100%"/></Td>
				</TR>
				<TR>
					<TH COLSPAN="3" ROWSPAN="2"><IMG STYLE="DISPLAY:BLOCK;" SRC="card.jpg" WIDTH="100%" HEIGTH="100%" /></TH>
					<TD>DATE</TD>
					<TD>TIME</TD>
				</TR>
				<TR>
					<TD><INPUT TYPE="TEXT" NAME="ft"></TD>
					<TD><INPUT TYPE="TEXT" NAME="fu"></TD>
				</TR>
				<TR>
					<TD COLSPAN="3" ROWSPAN="3">Mr./Mrs./Ms.<INPUT TYPE="TEXT" NAME="fv" id="fv" onkeypress="return(event.charCode > 64 && event.charCode<91) || (event.charCode>96 && event.charCode<123)" autocomplete=off><span id="fv1"> </span></TD>
					<TD style="align:left;">Ph. (O):<INPUT TYPE="TEXT" NAME="fw"></TD>
					<TD COLSPAN="2"><H5>DELIVERY DETAILS</H5></TD>
				</TR>
				<TR>
					<TD style="align:left;">E-mail<INPUT TYPE="email" NAME="fx" id="fx"><br><span id="fx1"></span></TD>
					<TD>DEALER</TD>
					<TD>DATE</TD>
				</TR>
				<TR>
					<TD style="align:left;">Mobile:<INPUT TYPE="TEXT" NAME="fy" id="fy"><br><span id="fy1"></span></TD>
					<TD><INPUT TYPE="TEXT" NAME="fz"></TD>
					<TD><INPUT TYPE="TEXT" NAME="ga"></TD>
				
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
					<TD><INPUT TYPE="TEXT" NAME="gb" id="gb"><br><span id="gb1"></span></TD>
					<TD><INPUT TYPE="TEXT" NAME="gc"></TD>
					<TD><INPUT TYPE="TEXT" NAME="gd"></TD>
					<TD><INPUT TYPE="TEXT" NAME="ge"></TD>	
					<TD colspan="2"><INPUT TYPE="TEXT" NAME="gf"></TD>
				</TR>

			</TABLE> 
			<TABLE BORDER="1" WIDTH="100%">
			
				<TR>
					
					<TD ROWSPAN="5"><B>DEMAND REPAIRS</B><BR><TEXTAREA ROWS="10" COLS="50" name="dam_rep"></TEXTAREA></TD>
					
					<TD ROWSPAN="5"><B>BODY DAMAGES</B><BR><TEXTAREA ROWS="10" COLS="50" name="body_dam"></TEXTAREA></TD>
					
				</TR>
				 
				 
			</TABLE>
			<TABLE BORDER="1" WIDTH="100%">
				<CAPTION><B>CREDIT/CASH BILL</B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BILL NO:<INPUT TYPE="TEXT" name="ef">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE:<INPUT TYPE="TEXT" name="eg"></CAPTION>
		
				<TR>
					
					<TD ROWSPAN="5"><B>WORKDONE</B><BR><TEXTAREA ROWS="10" COLS="50" name="w_done"></TEXTAREA></TD>
					<TD ROWSPAN="5"><B>MAN HOURS</B><BR><TEXTAREA ROWS="10" COLS="50"name="m_power"></TEXTAREA></TD>
					<TD ROWSPAN="5"><B>LABOURS</B><BR><TEXTAREA ROWS="10" COLS="50"name="labours"></TEXTAREA></TD>
					
				</TR>

				 
			 
			<TABLE BORDER="1"  WIDTH="100%">
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
										<TD><INPUT TYPE="TEXT" name="ac1" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="s" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="t" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="u" size="15"></TD>
                                        
                                     
                 </TR>

				 <TR>
                                        <TD> 2 </TD>
										<TD><INPUT TYPE="TEXT" name="ac2" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="x" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="y" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="z" size="15"></TD>
                                        
                                        
                 </TR>
			
				 <TR>
                                        <TD> 3  </TD>
										<TD><INPUT TYPE="TEXT" name="ac3" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ac" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ad" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ae" size="15"></TD>
                                        
                                      
                </TR>

                                 <TR>
                                        <TD> 4  </TD>
										<TD><INPUT TYPE="TEXT" name="ac4" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="aj" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ak" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="al" size="15"></TD>

                		 </TR>


				<TR>
                                        
                                        <TD> 5  </TD>
										<TD><INPUT TYPE="TEXT" name="ac5" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="an" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ao" size="15"></TD>
                                        <TD><INPUT TYPE="TEXT" name="ap" size="15"></TD>
                                      
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
				<TD><TEXTAREA NAME="testreport" ROWS="4" COLS="180" WIDTH="100%"></TEXTAREA></TD>
			 <TR>
			</TABLE>
			<BR><center><INPUT TYPE="SUBMIT" VALUE="SUBMIT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="RESET" VALUE="RESET"></center>
		</FORM>
		
		
	<BODY>

<HTML>';

}
else
{
	header("location:login.php");
}
}
?>