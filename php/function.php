<?php
function calendars(mysqli $conn){
	$sql = "SELECT * FROM `calendar` WHERE 1 ";
	echo $sql;
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return json_encode($data);
	}

}

function insertEvent(mysqli $conn,$id,$start_time,$end_time){
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;

		$t = $_POST["title"];
		$s = $_POST["start"];
		$e = $_POST["end"];
		$sql = "INSERT INTO calendar(title,start_time,end_time) VALUES('$title','$start',$end)";
		$result = mysqli_query($conn,$sql);
	}
}
?>