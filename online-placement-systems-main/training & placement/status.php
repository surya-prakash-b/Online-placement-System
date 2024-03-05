<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
	?>
<html>
<head>
  <title>Trani&place </title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><h1>Online Placement System</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="shome.php"><strong>Home Page</a></th>
      <th scope="col"><a href="status.php"><strong>View Status</a></th>
      <th scope="col"><a href="index.php"><strong>LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.png" width="1420" height="400">



<table width="97%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Job Status</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Company Name</strong> </div></td>
		   <td width="10%"><div align="center" class="style6"><strong>Job Role</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Interview Date</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>Skils</strong> </div></td>
			  <td width="17%"><div align="center" class="style6"><strong>Status</strong> </div></td>
			 
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from apply where status='1'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$jid=$row['jid'];
		$sts=$row['status'];
		$qry1=mysqli_query($conn,"select * from jobs where id='$jid'");
		$row1=mysqli_fetch_array($qry1);
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row1['cname'];?></div></td>
			  <td><div align="center"><?php echo $row1['role'];?></div></td>
		  	 <td><div align="center"><?php echo $row1['date'];?></div></td>
			   <td><div align="center"><?php echo $row1['skills'];?></div></td>
			    <td><div align="center"><?php if($sts==1)
				
									{
									?>
									<a href="index1.php?jid=<?php echo $jid ?>">Attend Test Now</a>
									<?php
									}
									else
									{
									
									echo "Pending";
									
									}
									?>
				
				</div></td>
			     </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="11%">&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>




<br />
<br />
		


<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><p>copyrights@2023 placement division</p>
      </th>
    </tr>
</table>


</body>
</html>