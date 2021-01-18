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


//--------------------------------compitition--------------------------------------

function com_insert(mysqli $conn){
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

function compiadd_select(mysqli $conn,$compi){		//แสดงรายละเอียดแคมป์ที่จะลง หน้านักเรียน

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
}


function com_delete(mysqli $conn,$compi){		//แสดงแคมป์ทั้งหมด
	$sql = "DELETE  FROM `compititions` WHERE `com_id` = '".$compi['com_id']."' ";
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