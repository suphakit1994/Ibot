<?php



function calendars(mysqli $conn){
	$sql = "SELECT * FROM `calendar` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
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

	$sql = "INSERT INTO calendar (calender_date,calender_starttime,calender_endtime,calender_color)
	VALUES (
	'".$data['start_time']."',
	'".$data['build_time']."',
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
function update_date(mysqli $conn,$data=[],$value_date,$value_start,$value_end,$value_color,$id_of_calendar){

	$sql = "UPDATE `calendar` 
	SET `calender_date`='$value_date',
	`calender_starttime`='$value_start',
	`calender_endtime`='$value_end',
	`calender_color`='$value_color' 
	WHERE `calender_id`='$id_of_calendar'";
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
function getLogin(mysqli $conn,$user_name,$password){
	$user_name = mysqli_real_escape_string($conn,$user_name);
	$password = mysqli_real_escape_string($conn, $password);
	$sql = "SELECT * FROM user 
	WHERE username = '$user_name' 
	AND password = '$password' ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}

function updateidcalendar(mysqli $conn, $data){
	$sql = "UPDATE calendar  
	SET title = 'test'
	WHERE id = '62'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function deleterowcalendar(mysqli $conn, $data,$id_of_calendar){
	$sql = "DELETE FROM calendar 
	WHERE calender_id = '$id_of_calendar'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function selectmaxs(mysqli $conn){
	$sql = "SELECT * FROM `calendar` WHERE 1 ";

	if ( mysqli_query($conn, $sql)) {
		$sql = "SELECT MIN(id) as id FROM `calendar`  ";
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
function student_payment_competition(mysqli $conn,$data=[]){

	$sql = "INSERT INTO student_payment_competition (bank,ref,amount,date_payment,image)
	VALUES (
	'".$data['bank']."',
	'".$data['ref']."',
	'".$data['amount']."',
	'".$data['date_payment']."',
	'".$data['image']."'
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

function student_payment_camp(mysqli $conn,$data=[]){

	$sql = "INSERT INTO student_payment_camp (bank,ref,amount,date_payment,image)
	VALUES (
	'".$data['bank']."',
	'".$data['ref']."',
	'".$data['amount']."',
	'".$data['date_payment']."',
	'".$data['image']."'
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
function student_payment(mysqli $conn,$data=[]){

	$sql = "INSERT INTO student_payment (bank,ref,amount,date_payment,image)
	VALUES (
	'".$data['bank']."',
	'".$data['ref']."',
	'".$data['amount']."',
	'".$data['date_payment']."',
	'".$data['image']."'
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


function listmsg(mysqli $conn){
	$sql = "SELECT * FROM `notification` WHERE status = 0 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function updatestatus(mysqli $conn, $value){
	$sql = "UPDATE notification SET status = 1  WHERE no_id='$value'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function selcs(mysqli $conn,$keys_cs){
	$sql = "SELECT* FROM `course_student` WHERE cs_id=$keys_cs ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function selcp(mysqli $conn,$keys_cp){
	$sql = "SELECT* FROM `camp_student` WHERE cp_id=$keys_cp";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

// function selpay(mysqli $conn,$keys){
// 	$sql = "SELECT* FROM `course_student` WHERE cs_id=$keys ";
// 	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
// 		$data =[];
// 		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
// 			$data[] = $row;
// 		}
// 		$result->close();
// 		return $data;
// 	}
// }

function selcouname(mysqli $conn,$keys_cs){
	$sql = "SELECT* FROM `course` WHERE course_id=$keys_cs ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function selcampname(mysqli $conn,$keys_cp){
	$sql = "SELECT* FROM `camp` WHERE camp_id=$keys_cp ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function selstuname(mysqli $conn,$keys_cs){
	$sql = "SELECT* FROM `student` WHERE student_id=$keys_cs ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function selpaytopic(mysqli $conn,$keys_cs){
	$sql = "SELECT* FROM `payment` WHERE payment_id=$keys_cs ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function selpaydate(mysqli $conn,$keys_cs){
	$sql = "SELECT* FROM `payment` WHERE payment_id=$keys_cs ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function delstuout(mysqli $conn,$selstu_id,$keysdel){
	$sql = "DELETE FROM notification 
	WHERE no_id = $keysdel";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	if ($sql) {
		$sql = "DELETE FROM student 
		WHERE student_id = $selstu_id";
	}
}
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
function select_idstudents(mysqli $conn,$id_students){

	$sql = "SELECT * FROM `student` WHERE student_id = '$id_students'";
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
function selectteacher(mysqli $conn){

	$sql = "SELECT * FROM `teacher` WHERE 1";
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
function select_idteacher(mysqli $conn,$id_teacher){

	$sql = "SELECT * FROM `teacher` WHERE teacher_id = '$id_teacher'";
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
function selectclassroom(mysqli $conn){

	$sql = "SELECT * FROM `classroom` WHERE 1";
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
function insert_classroom(mysqli $conn,$id_calendar,$id_user,$fname,$lname,$status){

	$sql = "INSERT INTO classroom (
	id_calendar_fk,
	id_user,
	fname,
	lname,
	status)
	VALUES (
	'$id_calendar',
	'$id_user',
	'$fname',
	'$lname',
	'$status')";
	echo $sql;

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function update_idteacher(mysqli $conn,$data,$fname,$lname,$username,$password,$email,$phone,$work_time,$new_salary,$id_teacher){
	$ext = pathinfo(basename($_FILES['photo']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../teacher_img/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path);
		$photo  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = "UPDATE `teacher` 
	SET `teacher_fname`='$fname',
	`teacher_lname`='$lname',
	`teacher_email`='$email',
	`teacher_phone`='$phone', 
	`teacher_worktime`='$work_time', 
	`teacher_password`='$password', 
	`teacher_img`='$photo',
	`teacher_username`='$username',
	`salary`='$new_salary'

	WHERE `teacher_id`='$id_teacher'";

	echo $sql;

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function insert_teacher(mysqli $conn,$data=[]){
			//random usernameนักศึกษา
	$name = $data['teacher_fname'];
		$cutname = substr($name,0,1); //ตัดตัวอักษร
		$gen=8; //กำหนดจำนวนหลักในการสุ่ม
		$char_pass = "1234567890"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
		$t_user = "T_".$cutname; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล
		while(strlen($t_user)<$gen) {
			$t_user .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
		}
		$data['teacher_username'] = $t_user; //แสดงผลข้อมูล

		//random password นักเรียน
		$gen=6; //กำหนดจำนวนหลักในการสุ่ม
		$char_pass = "1234567890"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
		$t_pass = ""; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล
		while(strlen($t_pass)<$gen) {
			$t_pass .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
		}
		$data['teacher_password']=$t_pass;


		// ../teacher_img/
		$image_defualt = "Cognitive.png";
		$data['teacher_img'] = $image_defualt;


		$sql = "INSERT INTO teacher (
		teacher_fname,
		teacher_lname,
		teacher_email,
		teacher_phone,
		teacher_worktime,
		teacher_password,
		teacher_img,
		teacher_level,
		teacher_nlevel,
		teacher_username)
		VALUES (
		'".$data['teacher_fname']."',
		'".$data['teacher_lname']."',
		'".$data['teacher_email']."',
		'".$data['teacher_phone']."',
		'".$data['teacher_worktime']."',
		'".$data['teacher_password']."',
		'".$data['teacher_img']."',
		'teacher',
		'Teacher',
		'".$data['teacher_username']."'
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
function deleteteacher(mysqli $conn,$id_teacher){
	$sql = "DELETE FROM teacher 
	WHERE teacher_id = '$id_teacher'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function checkIn_teacher(mysqli $conn,$data=[],$id_teachers){

	$sql = "INSERT INTO list_teacher (id_teacher,date_name,date_today,checkin_time,status)
	VALUES (
	'$id_teachers',
	'".$data['date_name']."',
	'".$data['date']."',
	'".$data['checkin_time']."',
	'Checked')";
	echo $sql;

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}


?>
