<?php 
session_start();


if(isset($_POST['username']) && isset($_POST['password'])){
  include("../../php/config.php");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $errors = array();
  if (empty($username)){
    array_push($errors,"Username is required");
  }
  if (empty($password)){
    array_push($errors,"Password is required");
  }


  if(count($errors)==0){

    $keys = substr($username, 0 , 2);
    while($keys == 'A_'){
      $sql = "SELECT * FROM `admin` WHERE (admin_username='$username' AND admin_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["admin_id"] = $row["admin_id"];
          $_SESSION["admin_name"] = $row["admin_name"];
          $_SESSION["admin_level"] = $row["admin_level"];
          $_SESSION["admin_nlevel"] = $row["admin_nlevel"];

          if($_SESSION["admin_level"]=="admin"){ 
            Header("Location: ../index.php?app=admin");
          }

          $data[] = $row;
        }
        $result->close();
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";
        break;

      }

    }
    while($keys == 'T_'){
      $sql = "SELECT * FROM `teacher` WHERE (teacher_username='$username' AND teacher_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["teacher_id"] = $row["teacher_id"];
          $_SESSION["teacher_fname"] = $row["teacher_fname"];
          $_SESSION["teacher_level"] = $row["teacher_level"];
          $_SESSION["teacher_nlevel"] = $row["teacher_nlevel"];
          $_SESSION["teacher_img"] = $row["teacher_img"];
          

          if($_SESSION["teacher_level"]=="teacher"){ 
            Header("Location: ../index.php?app=teacher");
            // echo "===>".$_SESSION["teacher_id"];
            // echo "===>".$_SESSION["teacher_fname"];
            // echo "===>".$_SESSION["teacher_level"];
            // echo "===>".$_SESSION["teacher_nlevel"];
            // echo "===>".$_SESSION["teacher_img"];

          }

          $data[] = $row;
        }
        $result->close();
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";
        break;
      }
    }

    while($keys == 'S_'){
      $sql = "SELECT * FROM `student` WHERE (student_username='$username' AND student_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["student_id"] = $row["student_id"];
          $_SESSION["student_name_eng"] = $row["student_name_eng"];
          $_SESSION["student_level"] = $row["student_level"];
          $_SESSION["student_nlevel"] = $row["student_nlevel"];

          if($_SESSION["student_level"]=="student"){ 
            Header("Location: ../index.php?app=student");
          }

          $data[] = $row;
        }
        $result->close();
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";
        break;

      }

    }
    if($data == 0){
      echo "<script>";
      echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
      echo "window.history.back()";
      echo "</script>";
    }

  }else{
    echo "<script>";
    echo "alert(\"กรุณากรอกข้อมูลให้ครบ\");"; 
    echo "window.history.back()";
    echo "</script>";

  }
}else{

             Header("Location: index.php?app=signin"); //user & password incorrect back to login again

           }
           ?>