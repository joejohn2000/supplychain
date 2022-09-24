<?php

include 'dbConnect.php';
    
$place=$_POST['place'];
$address=$_POST['address'];
$supply1=$_POST['supply1'];
$supply2=$_POST['supply2'];
$supply3=$_POST['supply3'];
$supply4=$_POST['supply4'];
$supply5=$_POST['supply5'];
$contact=$_POST['contact'];
$shopname=$_POST['shopname'];
$facility1=$_POST['facility1'];
$facility2=$_POST['facility2'];
$gpay=$_POST['gpay'];
$lat=$_POST['lat'];
$lng=$_POST['long'];


$query="insert into neighboursupplies(place,address,supply,supply1,supply2,supply3,supply4,facility1,facility2,contactnumber,shopname,gpay,latitude,longitude) values('$place','$address','$supply1','$supply2','$supply3','$supply4','$supply5','$facility1','$facility2','$contact','$shopname','$gpay','$lat','$lng')";
$result=mysqli_query($con,$query)or die("cannot insert".mysqli_error());

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

