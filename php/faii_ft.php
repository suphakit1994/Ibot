<?php 

//ดึงข้อมูลจากดาต้าเบสมาแสดงที่หน้า our course
function getselect(mysqli $conn){

	$sql = "SELECT * FROM `our course` WHERE 1";
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
//รับค่าคะแนนเข้าดาต้าเบส
function insterstudent(mysqli $conn,$data){
	$sql = " INSERT INTO `student_assessment` ( 
		Total,
		Science, 
		Technology, 
		Engineering, 
		Teamwork, 
		EQ, 
		Mathematics, 
		Synthesis, 
		Meditation) 
	 VALUES (	
	 '".$data['Total']."',	  
	 '".$data['Science']."',
	 '".$data['Technology']."',
	 '".$data['Engineering']."',
	 '".$data['Teamwork']."',
	 '".$data['EQ']."',
	 '".$data['Mathematics']."',
	 '".$data['Synthesis']."',
	 '".$data['Meditation']."')";
	

	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	
	mysqli_close($conn);
	}
	// if (mysqli_query($conn, $sql )) {  
	// 	echo"<script language=\"JavaScript\">";
	// 	echo"if(confirm('เพิ่มสำเร็จ'))";  
		
	// 	echo"</script>";
	// } else {
	// 	echo"<script language=\"JavaScript\">";
	// 	echo"if(confirm('เพิ่มไม่สำเร็จ!!'))";    

	// 	echo"</script>";
		
	// }


?>