



<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $cname=$_SESSION['cname'];
	





	
		$jid=$_REQUEST['jid'];
		
		$qt=mysqli_query($conn,"update apply set status='1' where id='$jid'");
		
		if($qt){?>
		 <script> alert('Accepted successfully')
window.location.href=("viewr.php");</script>
<?php } ?>
		
		
		
		



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
