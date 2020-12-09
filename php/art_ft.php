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
	$sql = "INSERT INTO `order` (name,surname,email,country,city,address,postal,cardnumber,month,year) 
	VALUES('".$data['name']."',
        '".$data['surname']."',
        '".$data['email']."',
        '".$data['country']."',
        '".$data['city']."',
        '".$data['address']."',
        '".$data['postal']."',
        '".$data['cardnumber']."',
    	'".$data['month']."',
		'".$data['year']."')";
        echo $sql;
 	if(mysqli_query($conn,$sql)){
 		return true;
 	}else{
         echo "Error: ".$sql ."<br>" . mysqli_error($conn);
         return false;
     }
     mysqli_close($conn);
}

function news(mysqli $conn){
	$sql="SELECT* FROM `news` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data= [];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function slide(mysqli $conn){
	$sql="SELECT* FROM `slide` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data= [];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
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