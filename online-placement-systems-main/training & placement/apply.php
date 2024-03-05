


<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];








if($_REQUEST["act"]==('add'))
		{
		
		$jid=$_REQUEST['jid'];
		
		$qt=mysqli_query($conn,"insert into apply(uid,jid,status)values('$uid','$jid','')");
		
		if($qt){?>
		 <script> alert('Applied successfully')
window.location.href=("shome.php");</script>
<?php } 
	
		
		
		
		
		}
		

?>












<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
