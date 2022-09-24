<?php

include 'dbConnect.php';
    
$username=$_POST['user'];
$password=$_POST['pass'];

$q="select username,password,phone,emailid,gpay from neighbouruserreg where username='$username' && password='$password'";
$result=mysqli_query($con,$q) or die("cannot login".mysqli_error());
$row=mysqli_fetch_row($result);

if(mysqli_num_rows($result) > 0) 

{
    
	$arr['status'] = "1"; 
	$arr['error'] = "";	
	$arr['username'] =$row[0];
	$arr['phone']=$row[2];
	$arr['email']=$row[3];
	$arr['gpay']=$row[4];
	
}
else 
{
    $arr['status'] = "0"; 
	$arr['error'] = "Invalid user info";
	$arr['username'] ="";
	$arr['phone']="";
	$arr['email']="";
	$arr['gpay']="";
	
}

mysqli_close($con);

echo json_encode($arr);

?>