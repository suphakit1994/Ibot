<?php


function instercourse(mysqli $conn,$data){
	$course_category = $_POST['course_category'];
	$course_expension = $_POST['course_expension'];
	$course_Age = $_POST['course_Age'];
	$course_code = $_POST['course_code'];
	$course_lesson = $_POST['course_lesson'];
	$course_price = $_POST['course_price'];

	//upload image
	$ext = pathinfo(basename($_FILES['course_img']['name']),PATHINFO_EXTENSION);
	$new_image_name = 'img_'.uniqid().".".$ext;
	$image_path = "../pimg/";
	$upload_path = $image_path.$new_image_name;
	//uploading
	if($ext == "jpg" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['course_img']['tmp_name'], $upload_path);
		$course_img  = $new_image_name;	
		echo "upload at file.";   
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}
// echo $upload_path;
	$sql = " INSERT INTO `course`(
	`course_category`, 
	`course_expension`, 
	`course_Age`,
	`course_code`,  
	`course_lesson`, 
	`course_price`,
	`course_img` 
	) 

	VALUES ( 
	'$course_category',
	'$course_expension',
	'$course_Age',
	'$course_code',
	'$course_lesson',
	'$course_price',
	'$course_img '
)";

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


function getselect(mysqli $conn){

	$sql = "SELECT * FROM `course` WHERE 1";

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
function uploadpdf1(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'1'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file1']['tmp_name'], $upload_path);
		$file1  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file1')";
	echo $sql;

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

function uploadpdf2(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file2']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'2'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file2']['tmp_name'], $upload_path);
		$file2  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file2')";
	echo $sql;

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

function uploadpdf3(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file3']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'3'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file3']['tmp_name'], $upload_path);
		$file3  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file3')";
	echo $sql;

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

function uploadpdf4(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file4']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'4'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file4']['tmp_name'], $upload_path);
		$file4  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file4')";
	echo $sql;

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

function uploadpdf5(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file5']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'5'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file5']['tmp_name'], $upload_path);
		$file5  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file5')";
	echo $sql;

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

function uploadpdf6(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file6']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'6'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file6']['tmp_name'], $upload_path);
		$file6  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file6')";
	echo $sql;

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

function uploadpdf7(mysqli $conn,$data){
	$course_lesson = $_POST['course_lesson'];
	//upload image
	$ext = pathinfo(basename($_FILES['file7']['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.$course_lesson.'7'.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	//uploading
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES['file7']['tmp_name'], $upload_path);
		$file7  = $new_pdf_name;
		echo "upload at file.";
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`) VALUES ( '$file7')";
	echo $sql;

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
?>