<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	if(isset($_POST['btn']))
	{
	$imgpath=$_FILES['file']['name'];
	  $errors= array();
      $fname = $_FILES['file']['name'];

     $file_tmp =$_FILES['file']['tmp_name'];
    

  move_uploaded_file($_FILES['file']['tmp_name'],"resume/".$fname);
  
  
  $max_qry = mysqli_query($conn,"select max(id) from register");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
  $qry=mysqli_query($conn,"insert  into  register values('$id','$name','$gender','$age','$email','$phone','$quali','$fname','$address','$dept','$reg','$per')");
if($qry)
{

header("location:student.php");
}
else
{
echo "<script>alert('Data Not Save');</script>";

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


 <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data" >
  <table width="38%" border="0" align="center">
		
	<tr>
      <td width="38%" height="35">&nbsp;</td>
      <td width="62%">&nbsp;</td>
    </tr>
	
    <tr>
     
      <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
      
    </tr>
	
	
	
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
          
    </tr>
	
	
	
    <tr>
     
     
      <td>Name</td>
      <td>
        <input name="name" type="text" id="name" />
      </td>
      
    </tr>
	
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
     
    </tr>
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>Age</td>
      <td>
        <input name="age" type="text" id="age"  />
     </td>
      
    </tr>
	
	
	
	<tr>
       <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
     
      <td>Email Id</td>
      <td><input name="email" type="text" id="email" /></td>
    </tr>
	
	
	
	<tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	  <tr>
      <td>Phone Number</td>
      <td><input name="phone" type="text" id="phone"  /></td>
     </tr>
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
       <td>Qualifaication</td>
      <td><input type="text" name="quali" id="quali"></td>
    </tr>
	
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
        <td>Upload Resume</td>
      <td><input type="file" name="file" id="file"></td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	   <tr>
     
      <td>Address</td>
      <td><textarea name="address" id="address"></textarea></td>
   
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	    <tr>
      
      <td>Department</td>
      <td><input name="dept" type="text" id="dept" /></td>
    </tr>
	
	<tr>
       <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
    <td>Register Number</td>
      <td><input name="reg" type="text" id="reg" /></td>
     
    </tr>
	
	
	 <tr>
    <td>Percentage</td>
      <td><input name="per" type="text"  /></td>
     
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
