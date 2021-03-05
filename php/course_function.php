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
	$image_path = "../course_img/";
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
	'$course_img ')";

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
function course_delete(mysqli $conn,$course_id){
	
	$sql = "DELETE FROM `course` WHERE course_id = $course_id";
	// echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function course_stusent(mysqli $conn,$course_id){
	
	$sql = "SELECT * FROM `course_student`INNER JOIN student ON `cs_student_id`=student_id  WHERE `cs_course_id`= $course_id ";

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
function course_delete_student(mysqli $conn,$student_id){		//ลบ
	$sql = "DELETE FROM `course_student` WHERE `cs_student_id`= $student_id ";
	// echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
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

function selectcourse_prices(mysqli $conn,$data){

	$sql = "SELECT* FROM `course` WHERE course_id = '".$_POST['course_id']."' ";

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

function uploadpdf(mysqli $conn,$data,$file_app_pdf,$id_lesson,$number_of_lesson){

	if($file_app_pdf ==''){
		echo "=================>NOvalue";
	}else{
		$ext = pathinfo(basename($_FILES[$file_app_pdf]['name']),PATHINFO_EXTENSION);
		$new_pdf_name = 'pdf_'.uniqid().$file_app_pdf.".".$ext;
		$pdf_path = "../pless/";
		$upload_path = $pdf_path.$new_pdf_name;

		if($ext == "pdf" || $ext == "png" || $ext == "jpeg"|| $ext == "gif" ) {
			move_uploaded_file($_FILES[$file_app_pdf]['tmp_name'], $upload_path);
			$name_file_pdf  = $new_pdf_name;
			// echo "upload at file.";
			
			$sql = " INSERT INTO `file`(`file_address`,`file_lesson_id`,`numper`) VALUES ( '$name_file_pdf','$id_lesson','$number_of_lesson')";
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

		}else{
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		}


		
	}
	
	
}

function console_log($output, $with_script_tags = true) {
	$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
	if ($with_script_tags) {
		$js_code = '<script>' . $js_code . '</script>';
	}
	echo $js_code;
}



function upload_quiz(mysqli $conn,$data,$string_array_quest,$string_array_ans,$id_lesson,$n_number){
	// echo $id_lesson;
	// echo $n_number;
	$sql = " INSERT INTO `quize`(`question`,`check_ans`,`quiz_lesson_id`,`numper`) 
	VALUES ( 
	'$string_array_quest',
	'$string_array_ans',
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
function selectcourse_id(mysqli $conn,$id_course){

	$sql = "SELECT * FROM `course` WHERE course_id = '$id_course'";

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