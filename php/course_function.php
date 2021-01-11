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


function selectcourse(mysqli $conn){

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
function selectfile(mysqli $conn){

	$sql = "SELECT * FROM `file` WHERE 1";

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
function selectcourse_prices(mysqli $conn){

	$sql = "SELECT `course_price`FROM `course` WHERE course_id = '1235' ";

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
function uploadpdf(mysqli $conn,$data,$nump,$id_lesson,$number_of_lesson){
	$ext = pathinfo(basename($_FILES[$nump]['name']),PATHINFO_EXTENSION);
	$new_pdf_name = 'pdf_'.uniqid().$nump.".".$ext;
	$pdf_path = "../pless/";
	$upload_path = $pdf_path.$new_pdf_name;
	$var_t = getcwd();

	// echo "====================================================>".$var_t;
	if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
		move_uploaded_file($_FILES[$nump]['tmp_name'], $upload_path);
		$numpb  = $new_pdf_name;
		// // echo "upload at file.";
		
	}else{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	}

	$sql = " INSERT INTO `file`(`file_address`,`file_lesson_id`,`number`) VALUES ( '$numpb','$id_lesson','$number_of_lesson')";
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

function console_log($output, $with_script_tags = true) {
	$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
	if ($with_script_tags) {
		$js_code = '<script>' . $js_code . '</script>';
	}
	echo $js_code;
}



function upload_quiz(mysqli $conn,$data,$new_var_quest,$new_var_ans,$id_lesson,$n_number){
	// echo $id_lesson;
	// echo $n_number;
	$sql = " INSERT INTO `quize`(`question`,`check_ans`,`quiz_lesson_id`,`number`) 
	VALUES ( 
	'$new_var_quest',
	'$new_var_ans',
	'$id_lesson',
	'$n_number')";

	// echo $sql;


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



function upload_choice(mysqli $conn,$data,$new_use_var,$id_quize){
	$sql = " INSERT INTO `choice`(`selected`,`key_all`) 
	VALUES ('$new_use_var','$id_quize')";

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
function select_idquize(mysqli $conn){
	$sql = "SELECT MAX(quiz_id) as quiz_id FROM `quize`  ";
	echo $sql;		
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	return $row;
}
?>