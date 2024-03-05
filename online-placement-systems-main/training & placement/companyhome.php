<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$cname=$_SESSION['cname'];
if(isset($_POST['btn']))
{
//checking name
$qry=mysqli_query($conn,"insert into jobs values('$cname','$role','$min','$max','$loc','$date','$skills','$vac','$per')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}

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



 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="39%" border="0" align="center">
	
    <tr>
      
      <td colspan="2"  align="center" ><div class="style5"><h3>Job Registation</h></div></td>
     
    </tr>
	
    <tr>
      
      <td> Job Role</td>
      <td><label>
        <input name="role" type="text" id="role" />
      </label></td>
     
    </tr>
	
     <tr>
     
      <td> Minimum Qualification</td>
      <td><label>
        <input name="min" type="text" id="min" />
      </label></td>
     
    </tr>
	
	
	
	
	
	
    <tr>
      
      <td> Maximum Qualfication</td>
      <td><input name="max" type="text" id="max"></td>
      
    </tr>
	
	
	
	
	 <tr>
      
      <td> Job Location</td>
      <td><input name="loc" type="text" id="loc"></td>
     
    </tr>
	
	
	
	
	 <tr>
     
      <td> Interview Date</td>
      <td><input name="date" type="date" id="date"></td>
      
    </tr>
	
	
	 <tr>
      
      <td> Number Of Vacant</td>
      <td><input name="vac" type="text" id="vac"></td>
     
    </tr>
	
	
	
	 <tr>
      
      <td> Skills Required</td>
      <td><textarea name="skills"></textarea></td>
      
    </tr>
	
	 <tr>
      
      <td>Percentage</td>
      <td><input type="text" name="per"/></td>
      
    </tr>
	
	
	
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
	
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
