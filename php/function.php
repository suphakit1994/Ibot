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

	$sql = "INSERT INTO calendar (title,start_time,end_time,color,build_time)
	VALUES ('".
	$data['title']."',
	'".$data['start_time']."',
	'".$data['end_time']."',
	'".$data['color']."',
	'".$data['build_time']."'
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
function deleterowcalendar(mysqli $conn, $data){
	$sql = "DELETE FROM calendar 
	WHERE id = '61'";
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

?>
