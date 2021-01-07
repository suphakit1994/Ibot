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
		//random usernameนักศึกษา
		$name = $data['student_name_eng'];
		$cutname = substr($name,0,1); //ตัดตัวอักษร
		$gen=8; //กำหนดจำนวนหลักในการสุ่ม
		$char_pass = "1234567890"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
		$s_user = "S_".$cutname; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล
			while(strlen($s_user)<$gen) {
			$s_user .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
			}
		$data['student_username'] = $s_user; //แสดงผลข้อมูล

		//random password นักเรียน
		$gen=6; //กำหนดจำนวนหลักในการสุ่ม
		$char_pass = "1234567890"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
		$s_pass = ""; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล
			while(strlen($s_pass)<$gen) {
			$s_pass .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
			}
			$data['student_password']=$s_pass;


		$sql = "INSERT INTO `student`(
			`student_name_th`, 
			`student_name_eng`, 
			`student_nickname_eng`, 
			`student_brithday`, 
			`student_school`, 
			`student_grade`,
			`student_username`,
			`student_password`,
			`student_level`, 
			`student_nlevel`)
		VALUES (
		'".$data['student_name_th']."',
		'".$data['student_name_eng']."',
		'".$data['student_nickname_eng']."',
		'".$data['student_brithday']."',
		'".$data['student_school']."',
		'".$data['student_grade']."' ,
		'".$data['student_username']."' ,
		'".$data['student_password']."' ,
		'".student."',
		'".Student."'
		)";
	if ( mysqli_query($conn, $sql)) {
		$sql = "SELECT MAX(student_id) as id FROM `student` ";
	 echo $sql;

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
function selectmax(mysqli $conn){
	$sql = "SELECT MAX(student_id) as student_id FROM `student`  ";
	echo $sql;		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		}
	return $row;
}

function updatestudent(mysqli $conn,$data=[],$cus){
	 // print_r($cus['student_id']);
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


function insertcourse_student(mysqli $conn,$data){

		$sql = " INSERT INTO `course_student`(
			`cs_course_id`,`cs_student_id` 
			) 
			VALUES (
			'".$data['course_id']."',
			'".$data['student_id']."'
			
			)";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
	}
	echo $sql;
?>