<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $cname=$_SESSION['cname'];
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
       <th scope="col"><a href="companyhome.php"><strong>Company Home</a></th>
      <th scope="col"><a href="viewr.php"><strong>View Requests</a></th>
      <th scope="col"><a href="viewd.php"><strong>View Details</a></th>
      <th scope="col"><a href="index.php"><strong>LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.png" width="1420" height="400">


<table width="97%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Jobs  Details</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
           <td width="10%"><div align="center" class="style6"><strong>Job Role</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>Age</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>gender</strong> </div></td>
			   <td width="11%"><div align="center" class="style6"><strong>Resume</strong> </div></td>
			    <td width="17%"><div align="center" class="style6"><strong>Action</strong> </div></td>
			 
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qr=mysqli_query($conn,"select * from jobs where cname='$cname'");
		$i=1;
		$rw=mysqli_fetch_array($qr);
		
		 $jid=$rw['id'];
		$qry=mysqli_query($conn,"select * from apply where jid='$jid' && status=''");
		while($row=mysqli_fetch_array($qry)){
		 $uid=$row['uid'];
		$qry1=mysqli_query($conn,"select * from register where id='$uid'");
		$row1=mysqli_fetch_array($qry1);
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $rw['role'];?></div></td>
		   <td><div align="center"><?php echo $row1['name'];?></div></td>
			  <td><div align="center"><?php echo $row1['age'];?></div></td>
			   <td><div align="center"><?php echo $row1['gender'];?></div></td>
			 <td><div align="center"><a href="resume/<?php echo $row1['resume'];?>" download>Resume</a></div></td>
			  <td><div align="center"><a href="accept.php?jid=<?php echo $row['id'];?>">Accept</a></div></td>
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
	<br />
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
