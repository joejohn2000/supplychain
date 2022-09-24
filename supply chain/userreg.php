<?php

include 'dbConnect.php';
    
$username=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$gpay=$_POST['gpay'];
$email=$_POST['email'];


$query="insert into neighbouruserreg(username,phone,password,emailid,gpay) values('$username','$phone','$password','$email','$gpay')";
$result=mysqli_query($con,$query)or die("cannot insert".mysqli_error);

if(!result){

    $ar['status']="0";
    $ar['error']="cannot register";

}else{

    $ar['status']="2";
    $ar['error']="";

}
mysqli_close($con);
echo json_encode($ar)
?>

