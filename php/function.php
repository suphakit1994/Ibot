<?php


function calendars(mysqli $conn){
	$sql = "SELECT * FROM `calendar` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return json_encode($data);
	}
}
function aboutus_news(mysqli $conn){
	$sql = "SELECT * FROM `news` WHERE 1 ";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function aboutus_certificate(mysqli $conn){
	$sql = "SELECT * FROM `certificate` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function aboutus_performance(mysqli $conn){
	$sql = "SELECT * FROM `performance` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function insertData(mysqli $conn,$data=[]){

	$sql = "INSERT INTO calendar (title,start_time,end_time,color)
	VALUES ('".
	$data['title']."',
	'".$data['start_time']."',
	'".$data['end_time']."',
	'".$data['color']."'
)";
echo $sql;

if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}


function insertPdf(mysqli $conn,$data=[]){

	$sql = "INSERT INTO pdf_insert (address_scr)
	VALUES 
	('".$data['address']."'
)";

echo $sql;

if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}
function getPdf(mysqli $conn){
	$sql = "SELECT * FROM `pdf_insert` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function quiz(mysqli $conn){
	$sql = "SELECT * FROM `mycourse_quiz` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return json_encode($data);
	}
}

?>