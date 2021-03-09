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
	$sql = "SELECT * FROM `aboutus_textslide` WHERE 1 ";

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
	'".$data['color']."')";


	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function insert_class(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `class`(`class_date`, `class_start_time`, `class_end_time`) 
	VALUES (
	'".$_POST['class_date']."',
	'".$_POST['class_start_time']."',
	'".$_POST['class_end_time']."')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}

function select_class(mysqli $conn){
	$sql = "SELECT * FROM `class` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function delete_class(mysqli $conn,$data){
	$sql = "DELETE FROM class 
	WHERE class_id = '".$_POST['class_id']."' ";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}


function update_date(mysqli $conn,$data=[],$value_date,$value_start,$value_end,$value_color,$id_of_calendar){

	$sql = "UPDATE `calendar` 
	SET `calender_date`='$value_date',
	`calender_starttime`='$value_start',
	`calender_endtime`='$value_end',
	`calender_color`='$value_color' 
	WHERE `calender_id`='$id_of_calendar'";
	

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



if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function getPdf(mysqli $conn,$id_course){
	$sql = "SELECT * FROM `file` WHERE file_lesson_id = '$id_course' ";
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
	$sql = "SELECT * FROM `quize` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
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
	 // 

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
function updatestatus(mysqli $conn, $value,$name,$timestamp){
	$sql = "UPDATE notification 
	SET `status` = 1,
	`approver` = '$name',
	`timestamp` = '$timestamp' WHERE no_id='$value'";
	
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
function selcs_student(mysqli $conn,$id_std){
	$sql = "SELECT* FROM `course_student` WHERE cs_student_id=$id_std ";
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
function selcps(mysqli $conn,$keys_cps){
	$sql = "SELECT* FROM `compititions_student` WHERE cps_id=$keys_cps";
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

function selcouname(mysqli $conn,$selcou_id){
	$sql = "SELECT* FROM `course` WHERE course_id=$selcou_id ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function selcampname(mysqli $conn,$selcou_id){
	$sql = "SELECT* FROM `camp` WHERE camp_id=$selcou_id ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}function selcompeititionname(mysqli $conn,$selcou_id){
	$sql = "SELECT* FROM `compititions` WHERE com_id=$selcou_id ";
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
function delstuout(mysqli $conn,$keysdel){
	$sql = "DELETE  FROM notification WHERE notification.no_id='$keysdel';";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
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
function select_list_teacher(mysqli $conn){

	$sql = "SELECT * FROM list_teacher INNER JOIN teacher ON list_teacher.id_teacher = teacher.teacher_id WHERE 1 ORDER BY list_teacher.date_today DESC";
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
function select_list_student(mysqli $conn){

	$sql = "SELECT * FROM list_student INNER JOIN student ON list_student.id_student = student.student_id WHERE 1 ORDER BY list_student.date_today DESC";
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
function delete_list_teacher(mysqli $conn){
	$sql = "DELETE FROM list_teacher WHERE id_teacher > 0";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function delete_list_student(mysqli $conn){
	$sql = "DELETE FROM list_student WHERE id_student > 0";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
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

function insert_classroom(mysqli $conn,$id_calendar,$id_user,$fname,$lname,$status,$course_id){

	$sql = "INSERT INTO classroom (
	id_calendar_fk,
	id_user,
	fname,
	lname,
	status,
	course_id)
	VALUES (
	'$id_calendar',
	'$id_user',
	'$fname',
	'$lname',
	'$status',
	'$course_id')";
	

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

	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function update_idstudent(mysqli $conn,$data,$name_en,$name_th,$nickname,$username,$password,$email,$phone,$pname_en,$pname_th,$related,$id_students){
	$ext = pathinfo(basename($_FILES['photo']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../student_img/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path);
		$photo  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = "UPDATE `student` 

	SET `student_username`='$username',
	`student_password`='$password',
	`parents_email`='$email',
	`parents_phonenumber`='$phone', 
	`student_name_th`='$name_th', 
	`student_name_eng`='$name_en', 
	`image`='$photo',
	`parents_name_th`='$parents_name_th',
	`student_nickname_eng`='$nickname',
	`parents_name_eng`='$pname_en',
	`parents_name_th`='$pname_th',
	`parents_related`='$related'

	WHERE `student_id`='$id_students'";

	

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
	'".$data['teacher_username']."')";

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
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function checkIn_teacher(mysqli $conn,$data=[],$id_teachers,$status){

	$sql = "INSERT INTO list_teacher (id_teacher,date_name,date_today,checkin_time,status)
	VALUES (
	'$id_teachers',
	'".$data['date_name']."',
	'".$data['date']."',
	'".$data['checkin_time']."',
	'$status')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function take_a_live_student(mysqli $conn,$data=[],$id_student,$status){

	$sql = "INSERT INTO list_student (id_student,date_name,date_today,checkin_time,status)
	VALUES (
	'$id_student',
	'".$data['date_name']."',
	'".$data['date']."',
	'".$data['checkin_time']."',
	'$status')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function selectcheckin_teacher(mysqli $conn,$id){

	$sql = "SELECT * FROM `list_teacher` WHERE id_teacher = '$id'";
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
function selectcheckin_student(mysqli $conn,$id){

	$sql = "SELECT * FROM `list_student` WHERE id_student = '$id'";
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
function insertnoticamp(mysqli $conn,$sel_camp,$data){

	$sql = " INSERT INTO `notification`(
	`fk_cp_id`,
	`topic`
	) 
	VALUES (
	'".$sel_camp['cp_id']."',
	'".$data['payment_type']."')";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function seldatacamp_noti(mysqli $conn){

	$sql = "SELECT * FROM camp_student WHERE 1";
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
function insertnoticourse_student(mysqli $conn,$selnoti,$data){

	$sql = " INSERT INTO `notification`(
	`fk_cs_id`,
	`topic`
	) 
	VALUES (

	'".$selnoti['cs_id']."',
	'".$data['payment_type']."')";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function seldata_noti(mysqli $conn){

	$sql = "SELECT * FROM course_student WHERE 1";
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
function insertnoticompetition(mysqli $conn,$sel_compeitition,$data){

	$sql = " INSERT INTO `notification`(
	`fk_cps_id`,
	`topic`
	) 
	VALUES (
	'".$sel_compeitition['cps_id']."',
	'".$data['payment_type']."')";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function seldatacompeition_noti(mysqli $conn){

	$sql = "SELECT * FROM compititions_student WHERE 1";
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

function delete_datastu(mysqli $conn,$keystu){
	$sql = "DELETE student,course_student FROM student INNER JOIN course_student ON student.student_id = course_student.cs_student_id WHERE  student.student_id = '$keystu';";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function delcompeit_stu(mysqli $conn,$keys_cps){
	$sql = "DELETE  FROM compititions_student WHERE compititions_student.cps_id='$keys_cps';";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function delcamp_stu(mysqli $conn,$keys_cp){
	$sql = "DELETE  FROM camp_student WHERE camp_student.cp_id='$keys_cp';";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function delcourse_stu(mysqli $conn,$keys_cs){
	$sql = "DELETE  FROM course_student WHERE course_student.cs_id='$keys_cs';";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function update_attended(mysqli $conn,$data=[],$id_teachers,$attentded){

	$sql = "UPDATE teacher
	SET `attended_dat`='$attentded'
	WHERE `teacher_id`='$id_teachers'
	";

	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function select_question(mysqli $conn,$course,$lesson){

	$sql = "SELECT * FROM quize WHERE quiz_lesson_id = '$course' AND numper = '$lesson'";
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
function select_choice(mysqli $conn){

	$sql = "SELECT * FROM choice WHERE 1";
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
function insert_answer(mysqli $conn,$data,$id,$username,$level,$course_id,$lesson_id){
	$total_score = 0;

	if ($data['answer0'] == $data['correct0']) {
		$total_score = $total_score+1;
	}
	if ($data['answer1'] == $data['correct1']) {
		$total_score = $total_score+1;
	}
	if ($data['answer2'] == $data['correct2']) {
		$total_score = $total_score+1;
	}
	if ($data['answer3'] == $data['correct3']) {
		$total_score = $total_score+1;
	}
	if ($data['answer4'] == $data['correct4']) {
		$total_score = $total_score+1;
	}else{
		$total_score = $total_score+0;
	}
	echo "====>".$total_score;

	$sql = "INSERT INTO list_of_score (id_user,name_user,level_user,course,lesson,score)
	VALUES (
	'$id',
	'$username',
	'$level',
	'$course_id',
	'$lesson_id',
	'$total_score')";

	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}


function deletestd(mysqli $conn,$id_students){
	$sql = "DELETE FROM student 
	WHERE student_id = '$id_students'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function sec_ibot_news(mysqli $conn){
	$sql = "SELECT* FROM home_ibotnews WHERE 1";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function ibot_textslide_select(mysqli $conn){		

	$sql = "SELECT * FROM `home_textslide` WHERE 1";
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
function sec_img_home(mysqli $conn){
	$sql = "SELECT* FROM home_imageslide WHERE id = 1";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}
function sec_img_camp(mysqli $conn){
	$sql = "SELECT* FROM home_imageslide WHERE id = 2";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}
function sec_img_compeitition(mysqli $conn){
	$sql = "SELECT* FROM home_imageslide WHERE id = 3";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;

	}
}
function historymsg(mysqli $conn){
	$sql = "SELECT * FROM `notification` WHERE status = 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function sel_id_cs(mysqli $conn,$name){
	$sql = "
	SELECT * 
	FROM notification AS noti 
	INNER JOIN course_student AS cs ON cs.cs_id = noti.fk_cs_id
	INNER JOIN student AS sd ON sd.student_id = cs.cs_student_id 
	INNER JOIN payment AS pm ON pm.payment_id = cs.course_payment_id
	INNER JOIN course AS c ON c.course_id = cs.cs_course_id
	WHERE noti.status = '1' AND sd.student_name_th = '$name'";

	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function sel_id_cp(mysqli $conn,$name){
	$sql = "
	SELECT * 
	FROM notification AS noti 
	INNER JOIN camp_student AS cp ON cp.cp_id = noti.fk_cp_id
	INNER JOIN student AS sd ON sd.student_id = cp.cs_student_id 
	INNER JOIN payment AS pm ON pm.payment_id = cp.cs_payment_id
	INNER JOIN camp AS ca ON ca.camp_id = cp.cs_camp_id
	WHERE noti.status = '1' AND sd.student_name_th = '$name'";

	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function sel_id_cps(mysqli $conn,$name){
	$sql = "
	SELECT * 
	FROM notification AS noti 
	INNER JOIN compititions_student AS cps ON cps.cps_id = noti.fk_cps_id
	INNER JOIN student AS sd ON sd.student_id = cps.cps_student_id 
	INNER JOIN payment AS pm ON pm.payment_id = cps.cps_payment_id
	INNER JOIN compititions AS com ON com.com_id = cps.cps_com_id

	WHERE noti.status = '1' AND sd.student_name_th = '$name'";

	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function sec_ibot_textslide(mysqli $conn){
	$sql = "SELECT* FROM home_textslide WHERE 1";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function ibot_textslide_add(mysqli $conn,$data,$name){

	$sql = "INSERT INTO home_textslide (content,approver)
	VALUES (
	'".$data['content']."',
	'$name')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function ibot_textslide_update(mysqli $conn,$data){
	$id =$_POST['id'];
	$content = $_POST['content'];

	$sql = "UPDATE `home_textslide` 
	SET `id`='$id',
	`content` = '$content'
	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function ibot_textslide_delete(mysqli $conn,$data){
	$id =$_POST['id'];

	$sql = "DELETE FROM home_textslide 
	WHERE `id` = '$id'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function ibot_news_insert(mysqli $conn,$data){    //หน้าข้อมูลข่าว    
	$ext = pathinfo(basename($_FILES['img_news']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../img_news/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['img_news']['tmp_name'], $upload_path);
		$img_news  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `home_ibotnews`(

	`topic`, 
	`content`, 
	`image_news`) 
	VALUES (
	'".$data['topic']."',
	'".$data['content']."',
	'$img_news')";
	$resuit =  mysqli_query($conn, $sql);
	if ($resuit) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}	
	mysqli_close($conn);	
	error_reporting(0);
}
function ibot_news_update(mysqli $conn,$data){
	$id =$_POST['id'];
	$topic = $_POST['topic'];
	$content = $_POST['content'];

	$sql = "UPDATE `home_ibotnews` 
	SET `id`='$id',
	`topic` = '$topic',
	`content` = '$content'
	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
	// 
}
function ibot_news_delete(mysqli $conn,$data){
	$id =$_POST['id'];

	$sql = "DELETE FROM home_ibotnews 
	WHERE `id` = '$id'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function ibot_image_home_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['image_name_home']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../img_slide/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['image_name_home']['tmp_name'], $upload_path);
		$image_name_home  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}


	$sql = "UPDATE `home_imageslide` 
	SET 
	`image_name` = '$image_name_home'
	WHERE `id` = 1";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}
function ibot_image_camp_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['image_name_camp']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../img_slide/";
	$upload_path = $image_path.$new_image_name;
//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['image_name_camp']['tmp_name'], $upload_path);
		$image_name_camp  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = "UPDATE `home_imageslide` 
	SET 
	`image_name` = '$image_name_camp'
	WHERE `id` = 2";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}	
function ibot_image_com_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['image_name_compeitition']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../img_slide/";
	$upload_path = $image_path.$new_image_name;
//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['image_name_compeitition']['tmp_name'], $upload_path);
		$image_name_compeitition  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = "UPDATE `home_imageslide` 
	SET 
	`image_name` = '$image_name_compeitition'
	WHERE `id` = 3";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}


function sec_background(mysqli $conn){
	$sql = "SELECT* FROM `video_background` WHERE id = 1";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;

	}
}
function uploadtype_certificate(mysqli $conn,$data){

	$sql = "INSERT INTO `certificate`(`name`) VALUES ('".$data['typecert']."') ";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function selecttype_certificate(mysqli $conn){

	$sql = "SELECT * FROM `certificate` WHERE 1";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function select_certificate(mysqli $conn){

	$sql = "SELECT * FROM `certificate_img` WHERE 1";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function select_certificate_useidcert(mysqli $conn,$id_img_certi){

	$sql = "SELECT * FROM `certificate_img` WHERE id = '$id_img_certi'";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function upload_certificate(mysqli $conn,$data,$img_cert){
	$typefile = explode("/", $img_cert['type']);
	$ext =$typefile[1];

	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../certificate_image/";
	$upload_path = $image_path.$new_image_name;

	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($img_cert['tmp_name'], $upload_path);
		$imgcert  = $new_image_name;	
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$typecert = $_POST['typeofcert'];
	$idcert = $_POST['idcert'];

	$sql = "INSERT INTO `certificate_img`(`id_cert`,`name_img`) VALUES ('$idcert','$imgcert') ";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function video_background(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['video_background']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../img_slide/";
	$upload_path = $image_path.$new_image_name;
//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" || $ext == "mp4" || $ext == "wmv") {
		move_uploaded_file($_FILES['video_background']['tmp_name'], $upload_path);
		$video_background  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG , GIF , MP4 , WMV files are allowed.";
	}

	$sql = "UPDATE `video_background` 
	SET 
	`name` = '$video_background'
	WHERE `id` = 1";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}
function ibot_textslide_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `home_textslide` WHERE id = '".$_POST['id']."'";
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

function sec_about_textslide(mysqli $conn){
	$sql = "SELECT* FROM aboutus_textslide WHERE 1";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}function  about_textslide_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `aboutus_textslide` WHERE id = '".$_POST['id']."'";
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
function about_textslide_update(mysqli $conn,$data){
	$id =$_POST['id'];
	$content = $_POST['content'];
	$topic = $_POST['topic'];


	$sql = "UPDATE `aboutus_textslide` 
	SET `id`='$id',
	`content` = '$content',
	`topic` = '$topic'

	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}
function about_textslide_delete(mysqli $conn,$data){
	$id =$_POST['id'];

	$sql = "DELETE FROM aboutus_textslide 
	WHERE `id` = '$id'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function about_ourteam(mysqli $conn){		

	$sql = "SELECT * FROM `aboutus_ourteam` WHERE 1";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function about_ourteam_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['img_ourteam']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../aboutus_img/";
	$upload_path = $image_path.$new_image_name;
//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['img_ourteam']['tmp_name'], $upload_path);
		$img_ourteam  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}
	$id = $_POST['id'];
	$name = $_POST['name'];
	$position = $_POST['position'];


	$sql = "UPDATE `aboutus_ourteam` 
	SET
	`name` = '$name',
	`position` = '$position',
	`img_ourteam` = '$img_ourteam'
	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
// 
}
function ibot_news_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `home_ibotnews` WHERE id = '".$_POST['id']."'";
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
function ourteam_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `aboutus_ourteam` WHERE id = '".$_POST['id']."'";
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
function aboutus_team(mysqli $conn){
	$sql = "SELECT * FROM `aboutus_ourteam` WHERE id ='1' ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function aboutus_team_2(mysqli $conn){
	$sql = "SELECT * FROM `aboutus_ourteam` WHERE id ='2' ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function aboutus_team_3(mysqli $conn){
	$sql = "SELECT * FROM `aboutus_ourteam` WHERE id ='3' ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function about_cer(mysqli $conn){		

	$sql = "SELECT * FROM `aboutus_certificate` WHERE 1";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function cer_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `aboutus_certificate` WHERE id = '".$_POST['id']."'";
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
function about_cer_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['image_cer']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../aboutus_img/";
	$upload_path = $image_path.$new_image_name;
//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['image_cer']['tmp_name'], $upload_path);
		$image_cer  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}
	$id = $_POST['id'];
	$name = $_POST['name'];


	$sql = "UPDATE `aboutus_certificate` 
	SET
	`name` = '$name',
	`image_cer` = '$image_cer'
	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function cer_image(mysqli $conn){
	$sql = "SELECT * FROM `aboutus_certificate` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function about_per(mysqli $conn){		

	$sql = "SELECT * FROM `aboutus_performance` WHERE 1";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function per_sel(mysqli $conn,$data){		

	$sql = "SELECT * FROM `aboutus_performance` WHERE id = '".$_POST['id']."'";
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
function about_per_update(mysqli $conn,$data){
	$ext = pathinfo(basename($_FILES['image_per']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../aboutus_img/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['image_per']['tmp_name'], $upload_path);
		$image_per  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}
	$id = $_POST['id'];
	$name = $_POST['name'];


	$sql = "UPDATE `aboutus_performance` 
	SET
	`name` = '$name',
	`image_per` = '$image_per'
	WHERE `id` = $id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function per_image(mysqli $conn){
	$sql = "SELECT * FROM `aboutus_performance` WHERE 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}	
function about_textslide_add(mysqli $conn,$data){

	$sql = "INSERT INTO aboutus_textslide (content,topic)
	VALUES (
	'".$data['content']."',
	'".$data['topic']."')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}

function select_event_id(mysqli $conn,$id_user){
	$sql = "SELECT * FROM `calendar` INNER JOIN `classroom` ON calendar.calender_id = classroom.id_calendar_fk INNER JOIN course ON classroom.course_id = course.course_id WHERE id_user = '$id_user'";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function select_event(mysqli $conn){
	$sql = "SELECT * FROM `calendar` INNER JOIN `classroom` ON calendar.calender_id = classroom.id_calendar_fk INNER JOIN course ON classroom.course_id = course.course_id WHERE 1";
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
