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
      $sql = "SELECT * FROM `admin` WHERE (a_username='$username' AND a_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["admin_id"] = $row["admin_id"];
          $_SESSION["admin_fname"] = $row["admin_fname"];
          $_SESSION["a_level"] = $row["a_level"];
          $_SESSION["a_nlevel"] = $row["a_nlevel"];

          if($_SESSION["a_level"]=="admin"){ 
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
      $sql = "SELECT * FROM `teacher` WHERE (t_username='$username' AND t_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["teacher_id"] = $row["teacher_id"];
          $_SESSION["teacher_fname"] = $row["teacher_fname"];
          $_SESSION["t_level"] = $row["t_level"];
          $_SESSION["t_nlevel"] = $row["t_nlevel"];

          if($_SESSION["t_level"]=="teacher"){ 
            Header("Location: ../index.php?app=teacher");
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
      $sql = "SELECT * FROM `student` WHERE (s_username='$username' AND s_password='$password')";
      if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
        $data =[];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $_SESSION["student_id"] = $row["student_id  "];
          $_SESSION["student_fname"] = $row["student_fname"];
          $_SESSION["s_level"] = $row["s_level"];
          $_SESSION["s_nlevel"] = $row["s_nlevel"];

          if($_SESSION["s_level"]=="student"){ 
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


    // $sql = "SELECT * FROM `users` WHERE (username='$username' AND password='$password')";
    // if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
    //   $data =[];
    //   while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    //     $_SESSION["id"] = $row["id"];
    //     $_SESSION["name"] = $row["name"];
    //     $_SESSION["level"] = $row["level"];
    //     $_SESSION["nlevel"] = $row["nlevel"];

    //     if($_SESSION["level"]=="admin"){ 
    //       Header("Location: ../index.php?app=admin");
    //     }
    //     if($_SESSION["level"]=="student"){ 
    //       Header("Location: ../index.php?app=student");
    //     }
    //     if($_SESSION["level"]=="teacher"){ 
    //       Header("Location: ../index.php?app=teacher");
    //     }
    //     $data[] = $row;
    //   }
    //   $result->close();
    //   echo "<script>";
    //   echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
    //   echo "window.history.back()";
    //   echo "</script>";
    // }
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