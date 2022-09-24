<?php
include 'dbConnect.php';

$address=$_POST[''];
$name=$_POST['name'];
$gpay=$_POST['gpay'];
$mysql_qry ="delete from neighboursupplies where shopname='$name' && address='$address' && gpay='$gpay'"or die("error in selection".mysqli_error());
$result = mysqli_query($con,$mysql_qry) or die("error in selection".mysqli_error());
if(!$result)
	{ 
		$arr['StatusID'] = "0"; 
		$arr['Error'] = "updation failed!";	
	}
	else
	{
		$arr['StatusID'] = "1"; 
		$arr['Error'] = "";	
		
	}
mysqli_close($con);
echo json_encode($arr);
?>