<?php 


	
include 'dbConnect.php';
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	$stmt = $con->prepare("SELECT shopname,shopcontact,shopplace,shopaddress,shoprating,usersname from neighbourhoodknowshop;");
	
	$stmt->execute();
	
	$stmt->bind_result($name,$contact,$place,$shopad,$rating,$username);
	
	$products = array(); 
	
	while($stmt->fetch()){
		$temp = array();
		$temp['shopname'] = $name; 
		$temp['shopcontact'] = $contact; 
		$temp['shopplace'] = $place; 
		$temp['rating'] = $rating; 
		$temp['shopaddress']=$shopad;
		$temp['usersname'] = $username;
	

				
		array_push($products, $temp);
	}
	
	echo json_encode($products);
	?>
