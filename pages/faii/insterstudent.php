<?php session_start();
$Science =$_GET[$stem1['Science']];
$Technology =$_GET['Technology'];
$Engineering =$_GET['Engineering'];
$Mathematics =$_GET['Mathematics'];
$Synthesis =$_GET['Synthesis'];
$Teamwork =$_GET['Teamwork'];
$EQ =$_GET['EQ'];
$Meditation =$_GET['Meditation'];


$sql = " INSERT INTO `student_assessment`(`Science`, `Technology`, `Engineering`, `Teamwork`, `EQ`, `Meditation`, `Synthesis`, `Mathematics`) 
        VALUES ($Science,$Technology,$Engineering,$Mathematics,$Synthesis,$Teamwork,$EQ,$Mathematics)";
echo $sql;
if (mysqli_query($conn, $sql)) {  
    $sql1 = "UPDATE room SET room_status = 1
             WHERE room_id = $Room_id";
    mysqli_query($conn, $sql1);

    echo"<script language=\"JavaScript\">";
    echo"if(confirm('เพิ่มสำเร็จ'))";  
    // echo "window.location ='room.php';";  
    echo"</script>";
} else {
   
    echo"<script language=\"JavaScript\">";
    echo"if(confirm('เพิ่มไม่สำเร็จ!!'))";    
    // echo "window.location ='room.php';";
    echo"</script>";
    
}
?>