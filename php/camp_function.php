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


function campadd_select(mysqli $conn,$cam){		//แสดงแคมป์ทั้งหมด

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

?>