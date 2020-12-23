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
    $sql = "SELECT * FROM `users` WHERE (username='$username' AND password='$password')";
    if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
      $data =[];
      while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["level"] = $row["level"];
        $_SESSION["nlevel"] = $row["nlevel"];

        if($_SESSION["level"]=="admin"){ 
          Header("Location: ../index.php?app=admin");
        }
        if($_SESSION["level"]=="student"){ 
          Header("Location: ../index.php?app=student");
        }
        if($_SESSION["level"]=="teacher"){ 
          Header("Location: ../index.php?app=teacher");
        }
        $data[] = $row;
      }
      $result->close();
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