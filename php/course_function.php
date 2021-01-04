<?php

function instercourse(mysqli $conn,$data){
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
	 '".$data['course_category']."',	  
	 '".$data['course_expension']."',
	 '".$data['course_Age']."',
	 '".$data['course_code']."',
	 '".$data['course_lesson']."',
	 '".$data['course_price']."',
	 '".$data['course_img']."'
	 )";
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	
	mysqli_close($conn);
	
	error_reporting(0);

// if(isset($_POST['submit'])) {

// 	    $image_name = $_FILES['course_img']['name'];
// 	    $temp_name = $_FILES["course_img"]["tmp_name"];
// 	    $file_extension = strtolower(end(explode('.',$_FILES['course_img']['name'])));
// 	    $file_size =$_FILES['course_img']['size'];
//      	$expensions = array("jpeg","jpg","png","gif");

//       if(in_array($file_extension,$expensions)=== false){
//          $message = "File Type Not allowed, Please choose a JPEG or PNG file.";
//       }

//       if($file_size > 500000){
//          $message = '<h1> File size Too Large !! </h1>';
//       }

//       if(empty($message)==true){
//          move_uploaded_file($temp_name,$_SERVER['DOCUMENT_ROOT']."/images/".$image_name);
//          $message = "<h1> Your file upload successfully. </h1>";
//       }
//       else{
//          $message = "<h1> Something is Wrong  </h1>";
//       }
// 	}
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