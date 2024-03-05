<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from cregister where uname='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$qry=mysqli_query($conn,"select * from cregister where uname='$uname' && psw='$password'");
$row=mysqli_fetch_assoc($qry);
$_SESSION['cname']=$row['cname'];

echo "<script>alert('Welcome To Company Home')</script>";
header("location:companyhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

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




<br />
<br />
<br />
<br />


<form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Company Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		  <tr>
           <td>&nbsp;</td>
           <td><label>
            <a href="cregister.php">Company Register</a>
           </label></td>
         </tr>
		 
		 
  </table>
</form>



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
