<?php

function instercourse(mysqli $conn,$data){
	$sql = " INSERT INTO `course`(
	`course_category`, 
	`course_expension`, 
	`course_Age`,
	`course_code`,  
	`course_lesson`, 
	`course_price` 
	) 
	
	 VALUES (	
	 '".$data['category']."',	  
	 '".$data['course_expension']."',
	 '".$data['course_Age']."',
	 '".$data['course_code']."',
	 '".$data['course_lesson']."',
	 '".$data['course_price']."'
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


function getselect(mysqli $conn){

	$sql = "SELECT * FROM `course` WHERE 1";

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
?>