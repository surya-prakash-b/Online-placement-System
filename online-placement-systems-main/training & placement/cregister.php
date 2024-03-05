<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

$max_qry = mysqli_query($conn,"select max(id) from cregister");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$qry=mysqli_query($conn,"insert into cregister values('$id','$cname','$loc','$email','$phone','$uname','$psw')");
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
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
      <th scope="col"><a href="company.php">Company Login</a></th>
      <th scope="col"><a href="student.php">Student Login</a></th>
      <th scope="col"><a href="#">About Us </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.png" width="1420" height="400">






<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="40%" border="0" align="center">
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td colspan="2"  align="center" ><div class="style5"><h3>Company Registation</h></div></td>
    </tr>
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
    <tr>
     <td>   Company Name   </td>
      <td><label>
        <input name="cname" type="text" id="cname" onChange="return name ()" />
      </label></td>
    </tr>
	
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
     <tr>
      <td>   Head Quatres   </td>
      <td><label>
        <input name="loc" type="text" id="loc" onChange="return age ()" />
      </label></td>
    </tr>
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td>   Email Id    </td>
      <td><input name="email" type="text" id="email" onChange="return email()" /></td>
    </tr>
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	  <tr>
      <td>   Contact Number    </td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" /></td>
      </tr>
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	

    <tr>
       <td>   User Name   </td>
      <td><input name="uname" type="text" id="uname" /></td>
    </tr>
	
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>   Passwrod   </td>
      <td><input name="psw" type="password" id="psw" /></td>
     
    </tr>
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>







<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><p>copyrights@2023 placement division</p>
      </th>
    </tr>
</table>


</body>
</html>
