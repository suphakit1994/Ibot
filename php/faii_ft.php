<?php 

//ดึงข้อมูลจากดาต้าเบสมาแสดงที่หน้า
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
// function selectcoureid(mysqli $conn, $data){
// 	$sql = "SELECT * FROM `our course` WHERE `ID` = '".$data[]."'";
// 	echo $sql;
		
// 	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
// 		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
// 		}
// 	return $row;
// }
function selectmax(mysqli $conn, $data){
	$sql = "SELECT MAX(id) as id FROM `studentuser`  ";
	// echo $sql;
		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		}
	return $row;
}
function selectstudentuser(mysqli $conn){

	$sql = "SELECT * FROM `studentuser` WHERE 1";
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
function insterstudent(mysqli $conn,$data){
	$sql = " INSERT INTO `student_assessment` ( 
		Total,
		Science, 
		Technology, 
		Engineering, 
		Teamwork, 
		EQ, 
		Mathematics, 
		Synthesis, 
		Meditation) 
	 VALUES (	
	 '".$data['Total']."',	  
	 '".$data['Science']."',
	 '".$data['Technology']."',
	 '".$data['Engineering']."',
	 '".$data['Teamwork']."',
	 '".$data['EQ']."',
	 '".$data['Mathematics']."',
	 '".$data['Synthesis']."',
	 '".$data['Meditation']."')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	
	mysqli_close($conn);
	}

function insertstudentuser(mysqli $conn,$data){
		$sql = " INSERT INTO `studentuser`(`name_th`, `name_eng`, `nickname_eng`, `birthday`, `school`, `grade`,`id`)  
		VALUES (
		'".$data['name_th']."',
		'".$data['name_eng']."',
		'".$data['nickname_eng']."',
		'".$data['birthday']."',
		'".$data['school']."',
		'".$data['grade']."',
		'".$data['id']."'
		)";
	
	if ( mysqli_query($conn, $sql)) {
		$sql = "SELECT MAX(id) as id FROM `studentuser`  ";
	 // echo $sql;

		$result = $conn->query($sql); 
		if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
			$data ;
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$data = $row;
			}
			$result->close();
			return $data;
		}
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}


function updatestudentuser(mysqli $conn,$data=[],$cus){
	 // print_r($cus['id']);
		$sql = " UPDATE `studentuser` 
				SET namep_th = '".$data['namep_th']."', namep_eng = '".$data['namep_eng']."' ,  related = '".$data['related']."',
				phonenumber = '".$data['phonenumber']."', email = '".$data['email']."',line = '".$data['line']."'
				WHERE id = '".$cus['id']."' " ;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function inserparenttuser(mysqli $conn,$data=[]){
		$sql = " INSERT INTO `parentuser`(`namep_th`, `namep_eng`,`related`, `phonenumber`, `email`, `line`) 
		VALUES (
		'".$data['namep_th']."',
		'".$data['namep_eng']."',
		'".$data['related']."',
		'".$data['phonenumber']."',
		'".$data['email']."',
		'".$data['line']."'
		)";
	 // echo $sql;
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
	}
?>