<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

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
      <th scope="col"><a href="adminhome.php"><strong>Admin Home</a></th>
      <th scope="col"><a href="viewu.php"><strong>Student Details</a></th>
      <th scope="col"><a href="viewc.php"><strong>Company Details</a></th>
      <th scope="col"><a href="index.php"><strong>LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.png" width="1420" height="400">



<table width="97%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Comapny  Details</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Company Name</strong> </div></td>
		  <td width="11%"><div align="center" class="style6"><strong>Head Quatres</strong> </div></td>
		   <td width="8%"><div align="center" class="style6"><strong>Email</strong> </div></td>
		    <td width="9%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
			 <td width="9%"><div align="center" class="style6"><strong>View Jobs</strong> </div></td>
			 
			 		 
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from cregister");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['cname'];?></div></td>
			 <td><div align="center"><?php echo $row['location'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			   <td><div align="center"><?php echo $row['phone'];?></div></td>
			   <td><div align="center"><a href="viewj.php?cname=<?php echo $row['cname'];?>">View Jobs</a></div></td>
			 
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
