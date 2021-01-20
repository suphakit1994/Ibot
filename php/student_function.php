
<?php 



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



//แสดงคอสที่ลงทะเบียนไว้
function selectcourse_students(mysqli $conn,$id){

	$sql = "SELECT * FROM course_student AS cs  INNER JOIN course AS c  ON  cs.cs_course_id =  c.course_id WHERE  cs.cs_student_id = $id " ;

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
//แสดงคอสที่ยังไม่ได้ลงทะเบียน
function selectcourse_student(mysqli $conn,$id){

	$sql = "SELECT* FROM course_student AS cs  RIGHT JOIN course AS c  ON  cs.cs_course_id =  c.course_id  WHERE   cs.cs_course_id is null or cs.cs_student_id != $id " ;

	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$cus =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$cus[] = $row;
		}
		$result->close();
		return $cus;
	}
}

//หน้าลงทะเบียน
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
		`student_nlevel`,
		`parents_name_th`, 
		`parents_name_eng`, 
		`parents_related`, 
		`parents_phonenumber`, 
		`parents_email`, 
		`parents_line`)
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
		'".Student."',
		'".$data['parents_name_th']."',
		'".$data['parents_name_eng']."',
		'".$data['parents_related']."',
		'".$data['parents_phonenumber']."',
		'".$data['parents_email']."',
		'".$data['parents_line']."'
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
	$sql = "SELECT MAX(student_id) as student_id FROM `student`  ";
	echo $sql;		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	return $row;
}


function insertcourse_student(mysqli $conn,$data,$cus,$paymax){
	$sql = " INSERT INTO `course_student`(
	`cs_course_id`,`cs_student_id`,`course_payment_id` 
	) 
	VALUES (
	'".$data['course_id']."',
	".$cus['student_id'].",
	".$paymax['payment_id']."

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertpayment(mysqli $conn,$data,$cus){    //หน้าสมัครลงทะเบียนเรียน    
	$ext = pathinfo(basename($_FILES['payment_img']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'paym_'.uniqid().".".$ext;
	$image_path = "../img_payment/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['payment_img']['tmp_name'], $upload_path);
		$payment_img  = $new_image_name;	
	}else{	
	}

	$sql = " INSERT INTO `payment`(

	`payment_no`, 
	`payment_amount`, 
	`payment_date`, 
	`payment_student_id`, 
	`payment_bank`, 
	`payment_img`,
	`payment_type`) 
	VALUES (
	'".$data['payment_no']."',
	'".$data['payment_amount']."',
	'".$data['payment_date']."',
	'".$cus['student_id']."',
	'".$data['payment_bank']."',
	'$payment_img',
	'".$data['payment_type']."'
)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

//********SELECT MAX(payment_id) as payment_id  FROM `payment`WHERE payment_student_id = 380*******
// เอาไว้เช็คกรณี เจอบัค

function maxpayment(mysqli $conn){
	$sql = "SELECT MAX(payment_id) as payment_id  FROM `payment`  ";
	echo $sql;		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	return $row;
}
function insertcalender_student(mysqli $conn,$data,$cus){

	$sql = " INSERT INTO  `calender_student`(`cs_student_id`, `cs_calender_id`,`cs_courses_id`)
	VALUES (
	'".$cus['student_id']."',
	'".$data['calender_id']."',
	'".$data['course_id']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}


//หน้าเพิ่มคอสเรียน
function selectstudentadd(mysqli $conn,$id){

	$sql = "SELECT * FROM `student` WHERE `student_id` = $id ";
	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	} 
}
function insertcourse_students(mysqli $conn,$data,$id,$paymax){

	$sql = " INSERT INTO `course_student`(
	`cs_course_id`,`cs_student_id`,`course_payment_id`  
	) 
	VALUES (
	'".$data['course_id']."',
	'$id',
	".$paymax['payment_id']."

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertpaymentss(mysqli $conn,$data,$id){    //หน้าสมัคร สำหรับ นร. ที่เป็นสมาชิกแล้ว
	$ext = pathinfo(basename($_FILES['payment_img']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'paym_'.uniqid().".".$ext;
	$image_path = "../img_payment/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['payment_img']['tmp_name'], $upload_path);
		$payment_img  = $new_image_name;	

	}else{
		
	}

	$sql = " INSERT INTO `payment`(
	`payment_no`, 
	`payment_amount`, 
	`payment_date`, 
	`payment_student_id`, 
	`payment_bank`, 
	`payment_img`,
	`payment_type`) 
	VALUES (
	'".$data['payment_no']."',
	'".$data['payment_amount']."',
	'".$data['payment_date']."',
	'$id',
	'".$data['payment_bank']."',
	'$payment_img',
	'".$data['payment_type']."'
)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertcamp_students(mysqli $conn,$data,$id,$paymax){

	$sql = " INSERT INTO `camp_student`(`cs_student_id`, `cs_camp_id`, `cs_payment_id`)
	VALUES (
	'$id',
	'".$_POST['camp_id']."',
	'".$paymax['payment_id']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertcalender_students(mysqli $conn,$data,$id){

	$sql = " INSERT INTO  `calender_student`(`cs_student_id`, `cs_calender_id`,`cs_courses_id`)
	VALUES (
	'$id',
	'".$data['calender_id']."',
	'".$data['course_id']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertnoticourse_student(mysqli $conn,$data,$cus){

	$sql = " INSERT INTO `notification`(
	`course_id`,`student_id` 
	) 
	VALUES (
	'".$data['course_id']."',
	'".$cus['student_id']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}
?>


