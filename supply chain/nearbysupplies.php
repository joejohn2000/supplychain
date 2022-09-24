<?php

include 'dbConnect.php';
    
    $lat = $_POST['lat'];
    $lng = $_POST['long'];
    //$dist = $_POST['distance'];

    // $lat="10.54063";
    // $lng="76.1283185";
    

    //To search by miles, use 3959 instead of 6371
    $sql = "SELECT
                place,address,supply,supply1,supply2,supply3,supply4,facility1,facility2,contactnumber,shopname,gpay,(
                  6371 * acos (
                  cos ( radians('$lat') )
                  * cos( radians( latitude ) )
                  * cos( radians( longitude ) - radians('$lng') )
                  + sin ( radians('$lat') )
                  * sin( radians( latitude ) )
                    )
                ) AS distance
                FROM neighboursupplies
                HAVING distance < 30
                ORDER BY distance
                LIMIT 0 , 20;";
    
    $result = mysqli_query($con,$sql) or die("hello".mysqli_error());
    
    if (mysqli_num_rows($result) >0) {
     
      while($row[] =mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          $tem = $row;
          $j['status'] = "1";
          $j['data'] = $tem;
      }
    } else {
        $j['status'] = "0";
        $j['data'] = "";
    }
    
    //echo json_encode($j);
     echo json_encode($tem);
    
    mysqli_close($con);

?>