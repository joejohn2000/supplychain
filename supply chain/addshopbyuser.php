<?php

include 'dbConnect.php';
    
$place=$_POST['place'];
$loc=$_POST['address'];
$contact=$_POST['contact'];
$shopname=$_POST['shopname'];
$usersph=$_POST['phone'];
$rating=$_POST['rating'];
$usersname=$_POST['username'];


$query="insert into neighbourhoodknowshop(shopname,shopcontact,shopplace,shopaddress,shoprating,usersphone,usersname) values('$shopname','$contact','$place','$loc','$rating','$usersph','$usersname')";
$result=mysqli_query($con,$query)or die("cannot insert".mysqli_error());

if(!result){

    $ar['status']="0";
    $ar['error']="cannot add please try again";

}else{

    $ar['status']="2";
    $ar['error']="";

}
mysqli_close($con);
echo json_encode($ar)
?>

