<?php

include 'dbConnect.php';
    
$username=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gpay=$_POST['gpay'];



$query="update neighbouruserreg  set phone='$phone',emailid='$email',gpay='$gpay' where username='$username'" ;
$result=mysqli_query($con,$query)or die("cannot update".mysqli_error);

if(!result){

    $ar['status']="0";
    $ar['error']="cannot update";

}else{

    $ar['status']="2";
    $ar['error']="";

}
mysqli_close($con);
echo json_encode($ar)
?>

