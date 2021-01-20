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
	$sql = "UPDATE notification SET status = 1  WHERE id='$value'";
	
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function findname(mysqli $conn, $value){
	$sql = "SELECT s.student_name_th
	FROM notification
	INNER JOIN student ON notification.student_id.$value=student.student_id.$value";

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
function update_idteacher(mysqli $conn,$data=[],$id_teacher){

	$sql = "INSERT INTO teacher (
	teacher_fname,
	teacher_lname,
	teacher_email,
	teacher_phone,
	teacher_worktime,
	teacher_password,
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
	'teacher','Teacher',
	'".$data['teacher_username']."'
)";

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
function insert_teacher(mysqli $conn,$data=[]){

	$sql = "INSERT INTO teacher (
	teacher_fname,
	teacher_lname,
	teacher_email,
	teacher_phone,
	teacher_worktime,
	teacher_password,
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
	'teacher','Teacher','".$data['teacher_username']."'
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


?>
