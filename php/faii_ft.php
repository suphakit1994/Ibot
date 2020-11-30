<?php
function getselect(mysqli $conn){

	$sql = "SELECT * FROM `our course` WHERE 1";
		$result = $conn->query($sql); 
		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function insterstudent(mysqli $conn,$data){
	$sql = " INSERT INTO `student_assessment`(`Science`, `Technology`, `Engineering`, `Teamwork`, `EQ`, `Meditation`, `Synthesis`, `Mathematics`) 
        VALUES ($Science,$Technology,$Engineering,$Mathematics,$Synthesis,$Teamwork,$EQ,$Mathematics)";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

?>