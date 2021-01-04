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
?>