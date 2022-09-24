<?php

include 'dbConnect.php';
    
$username=$_POST['user'];
$password=$_POST['pass'];

$q="select shop_name,password,pincode,phone,shop_address,working_time,gpay from neighbourshopreg where shop_name='$username' && password='$password'";
$result=mysqli_query($con,$q) or die("cannot login".mysqli_error());
$row=mysqli_fetch_row($result);


if(mysqli_num_rows($result)>0){

    $ar['status']="1";
    $ar['error']="";
    $ar['shopname']=$row[0];
    $ar['password']=$row[1];
    $ar['pincode']=$row[2];
    $ar['phone']=$row[3];
    $ar['address']=$row[4];
    $ar['working']=$row[5];
    $ar['gpay']=$row[6];


}else{


    $ar['status']="0";
    $ar['error']="Cannot login";
    $ar['shopname']="";
    $ar['password']="";
    $ar['pincode']="";
    $ar['phone']="";
    $ar['address']="";
    $ar['working']="";
    $ar['gpay']="";

}

mysqli_close($con);

echo json_encode($ar);

?>