<?php

include 'dbConnect.php';
    
$shop_name=$_POST['shopname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$gpay=$_POST['gpay'];
$working_time=$_POST['workingtime'];



$query="update neighbourshopreg  set shop_address='$address',pincode='$pincode',working_time='$working_time',phone='$phone',gpay='$gpay'  where shop_name='$shop_name'" ;
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

