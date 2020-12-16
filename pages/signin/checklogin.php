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

        if($_SESSION["level"]=="admin"){ 

          Header("Location: admin.php");
        }
        if ($_SESSION["level"]=="member"){ 

          Header("Location: member.php");
        }
        $data[] = $row;

      }
      $result->close();
      print_r($data);
    }
  }else{
    echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
    echo "window.history.back()";
    echo "</script>";

  }
}else{

             Header("Location: view.php"); //user & password incorrect back to login again

           }


                //                     if (result = mysqli_query($conn,"SELECT*
                //     FROM users
                //     WHERE(username = '$username' AND password = '$password'"),MYSQLI_USE_RESULT)){
                //       $data;
                //       while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                //         $data = $row;
                //     }
                //     $result->close();
                //     return $data;

                //   }else{
                //     echo "<script>";
                //         echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                //         echo "window.history.back()";
                //     echo "</script>";

                //   }
                // }
           ?>