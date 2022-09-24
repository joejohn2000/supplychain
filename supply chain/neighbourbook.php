<?php
include 'dbConnect.php';
    
$username=$_POST['username'];
$address=$_POST['address'];
$fac=$_POST['fac'];
$phone=$_POST['phone'];
$sup=$_POST['supply'];

$query="insert into neigbourbook(user,contactnumber,facility,supply,address) values('$username','$phone','$fac','$sup','$address')";
$result=mysqli_query($con,$query)or die("cannot insert".mysqli_error());

if(!$result){

    $ar['status']="0";
    $ar['error']="cannot register";

}else{

    $ar['status']="1";
    $ar['error']="";

}
mysqli_close($con);
echo json_encode($ar)
?>

