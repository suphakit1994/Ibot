<?php 

function selectstudent(mysqli $conn){

	$sql = "SELECT * FROM `student` WHERE 1";
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


//รับค่าคะแนนเข้าดาต้าเบส
// function insterstudent(mysqli $conn,$data){
// 	$sql = " INSERT INTO `student_assessment` ( 
// 		Total,
// 		Science, 
// 		Technology, 
// 		Engineering, 
// 		Teamwork, 
// 		EQ, 
// 		Mathematics, 
// 		Synthesis, 
// 		Meditation) 
// 	 VALUES (	
// 	 '".$data['Total']."',	  
// 	 '".$data['Science']."',
// 	 '".$data['Technology']."',
// 	 '".$data['Engineering']."',
// 	 '".$data['Teamwork']."',
// 	 '".$data['EQ']."',
// 	 '".$data['Mathematics']."',
// 	 '".$data['Synthesis']."',
// 	 '".$data['Meditation']."')";
	

// 	if ( mysqli_query($conn, $sql)) {
// 		return true;
// 	} else {
// 		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		return false;
// 	}
	
// 	mysqli_close($conn);
// 	}

function insertstudent(mysqli $conn,$data){
		$sql = "INSERT INTO `student`(
			`student_name_th`, 
			`student_name_eng`, 
			`student_nickname_eng`, 
			`student_brithday`, 
			`student_school`, 
			`student_grade`)
		VALUES (
		'".$data['student_name_th']."',
		'".$data['student_name_eng']."',
		'".$data['student_nickname_eng']."',
		'".$data['student_brithday']."',
		'".$data['student_school']."',
		'".$data['student_grade']."'
		)";
		if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	
	mysqli_close($conn);
}
function selectmax(mysqli $conn){
	$sql = "SELECT MAX(student_id) as id FROM `student`  ";
	echo $sql;		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		}
	return $row;
}

function updatestudent(mysqli $conn,$data=[],$cus){
	 print_r($cus['student_id']);
		$sql = " UPDATE `student` 
				SET parents_name_th = '".$data['parents_name_th']."', parents_name_eng = '".$data['parents_name_eng']."' ,  parents_related = '".$data['parents_related']."',
				parents_phonnumber = '".$data['parents_phonnumber']."', parents_email = '".$data['parents_email']."',parents_line = '".$data['parents_line']."'
				WHERE student_id = '".$cus['student_id']."' ";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}


// function inserparenttuser(mysqli $conn,$data){
// 		$sql = " INSERT INTO `parents`
// 		(`parents_name_th`,
// 		 `parents_name_eng`, 
// 		 `parents_related`, 
// 		 `parents_phonnumber`, 
// 		 `parents_email`, 
// 		 `parents_line`)
// 		VALUES (
// 		'".$data['parents_name_th']."',
// 		'".$data['parents_name_eng']."',
// 		'".$data['parents_related']."',
// 		'".$data['parents_phonnumber']."',
// 		'".$data['parents_email']."',
// 		'".$data['parents_line']."'
// 		)";
// 	 // echo $sql;
	
// 	if ( mysqli_query($conn, $sql)) {
// 		return true;
// 	} else {
// 		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		return false;
// 	}
// 	mysqli_close($conn);
// 	}
?>