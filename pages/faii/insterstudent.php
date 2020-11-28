<?php session_start();
/////////////////////////////////////////////////////////
$servername = "localhost";          //include("../php/config.php"); ไม่ได้
$username = "root";
$password = "root123456";
$dbname = "ibot";

// $servername = "localhost";
// $username = "iethaiso_gold";
// $password = "1HtIbF)5j24c-J";
// $dbname = "iethaiso_gold";
// Create connection
$connn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($connn, "utf8");

///////////////////////////////////////////////////////////////////////////

$Science =$_GET['Science'];
$Technology =$_GET['Technology'];
$Engineering =$_GET['Engineering'];
$Mathematics =$_GET['Mathematics'];
$Synthesis =$_GET['Synthesis'];
$Teamwork =$_GET['Teamwork'];
$EQ =$_GET['EQ'];
$Meditation =$_GET['Meditation'];

echo $Science;

$sql = " INSERT INTO `student_assessment`(`Science`, `Technology`, `Engineering`, `Teamwork`, `EQ`, `Meditation`, `Synthesis`, `Mathematics`) 
        VALUES ($Science,$Technology,$Engineering,$Mathematics,$Synthesis,$Teamwork,$EQ,$Mathematics)";

if (mysqli_query($connn, $sql)) {  
    echo"<script language=\"JavaScript\">";
    echo"if(confirm('เพิ่มสำเร็จ'))";  
    echo "window.location ='our_course.php';";  
    //require_once('our_course.php');
    echo"</script>";
} else {
   
    echo"<script language=\"JavaScript\">";
    echo"if(confirm('เพิ่มไม่สำเร็จ!!'))";    
    //echo "window.location ='room.php';";
    echo"</script>";
    
}
?>