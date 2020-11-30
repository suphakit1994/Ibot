<?php
function testart(mysqli $conn){
	$sql="SELECT* FROM `order` WHERE postal = '30000'";
	echo $sql;
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data= [];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function insert(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `order` (name,surname,email,city,address,postal,cardnumber) 
	VALUES('".$data['name']."',
        '".$data['surname']."',
        '".$data['email']."',
        '".$data['city']."',
        '".$data['address']."',
        '".$data['postal']."',
        '".$data['cardnumber']."')";
        echo $sql;
 	if(mysqli_query($conn,$sql)){
 		return true;
 	}else{
         echo "Error: ".$sql ."<br>" . mysqli_error($conn);
         return false;
     }
     mysqli_close($conn);
}



// function artinsert(mysqli $conn,$data=[]){
// 	$sql = "INSERT INTO order (name,surname,email,city,address,postal,cardnumber) 
// 	VALUES('".$data['name']."',
//     '".$data['surname']."',
//     '".$data['email']."',
//     '".$data['city']."',
//     '".$data['address']."',
//     '".$data['postal']."',
//     '".$data['cardnumber']."',)";
// 	if(mysqli_query($conn,$sql)){
// 		return true;
// 	}else{
//         echo "Error: ".$sql ."<br>" . mysqli_error($conn);
//         return false;
//     }
//     mysqli_close($conn);
// }
?>