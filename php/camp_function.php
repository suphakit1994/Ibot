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
	`camp_file`) 
	VALUES (
	'".$_POST['camp_program']."',
	'".$_POST['camp_Age']."',
	'$camp_file'
)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}
 
function camp_select(mysqli $conn){

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

?>