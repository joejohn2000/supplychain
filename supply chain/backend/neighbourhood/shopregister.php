<?php
include 'dbConnect.php';
    
$username=$_POST['shopname'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$working_time=$_POST['time'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$gpay=$_POST['gpay'];


$query="insert into neighbourshopreg(shop_name,shop_address,pincode,working_time,phone,password,gpay) values('$username','$address','$pin','$working_time','$phone','$pass','$gpay')";
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

