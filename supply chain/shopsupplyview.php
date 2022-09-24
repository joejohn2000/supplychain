<?php 


	
include 'dbConnect.php';
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	$x=$_POST['name'];
	$y=$_POST['phone'];

	$stmt = $con->prepare("SELECT place,address,supply,supply1,supply2,supply3,supply4,facility1,facility2,contactnumber,shopname,gpay from neighboursupplies where shopname='$x' && contactnumber='$y';");
	
	$stmt->execute();
	
	$stmt->bind_result($place,$addr,$supply1,$supply2,$supply3,$sup4,$sup5,$faci,$faci2,$contac,$shopname,$gpay);
	
	$products = array(); 
	
	while($stmt->fetch()){
		$temp = array();
		$temp['place'] = $place; 
		$temp['address'] = $addr; 
		$temp['supply1'] = $supply1; 
		$temp['supply2'] = $supply2;
		$temp['supply3'] = $supply3;
		$temp['supply4'] = $sup4;
		$temp['supply5'] = $sup5;
		$temp['facility'] = $faci; 
		$temp['facility2'] = $faci2;
		$temp['contact'] = $contac; 
		$temp['shopname'] = $shopname; 
		$temp['gpay'] = $gpay; 

				
		array_push($products, $temp);
	}
	
	echo json_encode($products);
	?>
