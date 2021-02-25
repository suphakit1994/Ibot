<?php
function camp_insert(mysqli $conn){
	//upload pdf
	$ext = pathinfo(basename($_FILES['camp_file']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'camp_'.uniqid().".".$ext;
	$image_path = "../camp_pdf/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "pdf") {
		move_uploaded_file($_FILES['camp_file']['tmp_name'], $upload_path);
		$camp_file  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only PDF.";
	}
	$sql="INSERT INTO `camp`
	(`camp_program`, 
	`camp_Age`, 
	`camp_file`,
	`camp_date_start`, 
	`camp_date_end`, 
	`camp_price`
	) 
	VALUES (
	'".$_POST['camp_program']."',
	'".$_POST['camp_Age']."',
	'$camp_file',
	'".$_POST['camp_date_start']."',
	'".$_POST['camp_date_end']."',
	'".$_POST['camp_price']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function camp_select(mysqli $conn){		//แสดงแคมป์ทั้งหมด

	$sql = "SELECT * FROM `camp` WHERE 1";
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

function camp_student(mysqli $conn,$id,$camp){		//แสดงแคมป์ทั้งหมด
	$sql = "SELECT * FROM `camp_student` WHERE cs_student_id = $id AND cs_camp_id = $camp";
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

function campadd_select(mysqli $conn,$cam){		//แสดงรายละเอียดแคมป์ที่จะลง หน้านักเรียน

	$sql = "SELECT * FROM `camp` WHERE camp_id = '".$_POST['camp_id']."'";
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

function update_camp(mysqli $conn,$data){
	$camp_program =$_POST['camp_program'];
	$camp_Age = $_POST['camp_Age'];
	$camp_file = $_POST['camp_file'];
	$camp_date_start = $_POST['camp_date_start'];
	$camp_date_end = $_POST['camp_date_end'];
	$camp_price = $_POST['camp_price'];  
	$camp_id = $_POST['camp_id'];
	
	$sql = "UPDATE `camp` 
	SET `camp_program`='$camp_program',
	`camp_Age` = '$camp_Age',
	
	`camp_date_start` = '$camp_date_start',
	`camp_date_end` = '$camp_date_end',
	`camp_price` = '$camp_price'  
	WHERE `camp_id` = $camp_id";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
	// echo $sql;
}

function delete_camp(mysqli $conn, $data){
	$camp_id = $_POST['camp_id'];

	$sql = "DELETE FROM camp 
	WHERE `camp_id` = $camp_id";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

//--------------------------------compitition--------------------------------------

function com_insert(mysqli $conn,$data){
	//upload pdf
	$ext = pathinfo(basename($_FILES['com_file']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'com_'.uniqid().".".$ext;
	$image_path = "../compitition_pdf/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "pdf") {
		move_uploaded_file($_FILES['com_file']['tmp_name'], $upload_path);
		$com_file  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only PDF.";
	}
	echo $_POST['com_type'];
	$sql="INSERT INTO `compititions`
	(`com_type`,
	`com_program`, 
	`com_age`, 
	`com_file`,
	`com_start_date`, 
	`com_end_date`, 
	`com_price`
	) 
	VALUES (
	'".$_POST['com_type']."',
	'".$_POST['com_program']."',
	'".$_POST['com_age']."',
	'$com_file',
	'".$_POST['com_start_date']."',
	'".$_POST['com_end_date']."',
	'".$_POST['com_price']."'

)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);

}

function com_select(mysqli $conn){		//แสดง compitition ทั้งหมด
	$sql = "SELECT * FROM `compititions` WHERE 1";
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
function select_compi_name(mysqli $conn,$comname){		
	$sql = "SELECT * FROM `compititions` WHERE com_type = '$comname'";
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


function select_comadd(mysqli $conn,$compi){		//แสดงรายละเอียดหน้าแข่ง
	$sql = "SELECT * FROM `compititions` WHERE com_id = '".$_POST['com_id']."'";
	$result = $conn->query($sql); 

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	} 
	echo $sql;
}
function update_com(mysqli $conn,$data){
	
	$sql = "UPDATE `compititions` 
	SET 
	`com_type`='".$_POST['com_type']."',
	`com_program`='".$_POST['com_program']."',
	
	`com_price`='".$_POST['com_price']."',
	`com_start_date`='".$_POST['com_start_date']."',
	`com_end_date`='".$_POST['com_end_date']."',
	`com_age`='".$_POST['com_age']."' 
	WHERE `com_id`='".$_POST['com_id']."' ";

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
	echo $sql;
}
function com_delete(mysqli $conn,$compi){		//ลบ
	$com_id = $_POST['com_id'];
	$sql = "DELETE  FROM `compititions` WHERE `com_id` = $com_id ";
	
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function select_compitype(mysqli $conn){		//แสดงรายละเอียดหน้าแข่ง
	$sql = "SELECT * FROM `compititions_type`";
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

function compi_student(mysqli $conn,$id,$compi_id){		//แสดงโปรแกรมแข่งที่สมัครไว้
	$sql = "SELECT * FROM `compititions_student` WHERE cps_student_id = $id AND cps_com_id = $compi_id" ;
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
function insert_compitype(mysqli $conn,$data){
	$compi_name = $_POST['compi_name'];
	// echo $compi_name;
	$sql = "INSERT INTO `compititions_type` (`compi_name`) VALUES ('$compi_name')";
	// echo $sql;

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}

function select_compistudentlist(mysqli $conn){		//แสดงรายละเอียดหน้าแข่ง
	$sql = "SELECT s.student_name_th , com.com_type  
	FROM `compititions_student`AS cs  
	INNER JOIN  `student` AS s  ON cs.cps_student_id = s.student_id 
	INNER JOIN compititions AS com ON cs.cps_com_id = com.com_id ";
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

function select_type(mysqli $conn,$compitype){		//แสดงรายละเอียดหน้าแข่ง
	$sql = "SELECT * FROM `compititions` WHERE 1";
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
function innervar(mysqli $conn){		//แสดงรายละเอียดหน้าแข่ง
	$sql = "SELECT * FROM `compititions` AS com INNER JOIN `compititions_type` AS compi WHERE com.com_type = compi.compi_name";
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
function list_student(mysqli $conn,$com_id){	//หน้า list student addteam	
	$sql = "SELECT * FROM `compititions_student` AS com JOIN `compititions` AS compi ON com.cps_com_id = compi.com_id JOIN student ON com.cps_student_id = student.student_id WHERE com.cps_com_id = $com_id";
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
function delete_student_compitition(mysqli $conn,$com_id,$student_id){		//ลบ
	$sql = "DELETE  FROM `compititions_student` WHERE `cps_com_id` = $com_id  AND cps_student_id = $student_id";
	if ( mysqli_query($conn, $sql)) {
		echo "OK";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function addteam_compi(mysqli $conn,$team_name,$new_no,$com_id){	
	$sql = "INSERT INTO `add team`( `team_name`, `No.1`, `No.2`, `No.3`, `No.4`,`com_id`) VALUES ('".$team_name."','".$new_no[0]."','".$new_no[1]."','".$new_no[2]."','".$new_no[3]."','".$com_id."')";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
}
function update_compi_student(mysqli $conn,$new_no,$com_id){
	
	$sql = "UPDATE `compititions_student` SET `status`= 1 WHERE  `cps_student_id` IN ('".$new_no[0]."' ,'".$new_no[1]."' ,'".$new_no[2]."', '".$new_no[3]."') AND `cps_com_id`='".$com_id."' ";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false; 	
	}
	mysqli_close($conn);
	echo $sql;
}
function select_team(mysqli $conn,$com_id,$id){	//หน้า list student addteam	
	print_r($id);
	$sql = "SELECT * FROM `add team`as a JOIN student AS st ON st.student_id IN (a.`No.1`, a.`No.2`, a.`No.3` , a.`No.4` ) WHERE st.student_id IN ($id)";
	$result = $conn->query($sql); 
	echo $sql;
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
	
}
	function select_allteam(mysqli $conn,$com_id){	//หน้า list student addteam	
		$sql = "SELECT * FROM `add team` WHERE com_id = '".$com_id."' ";
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
	?>