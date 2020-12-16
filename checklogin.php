<?php 
date_default_timezone_set("Asia/Bangkok");
session_start();
require_once('php/config.php');
require_once('php/function.php');
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
  if($_POST['username'] != '' && $_POST['password'] != ''){

    $login_user = getLogin($conn,$_POST['username'],$_POST['password']);

    if($login_user['user_code'] > 0 && $login_user['del'] == 1){
      $_SESSION['administrator_user'] = $login_user;
      $_SESSION['LAST_ACTIVITY'] = time(); 
      header("Location: pages/index.php?app=admin");
    }else{

      echo "<script type='text/javascript'>alert('รหัสผ่านไม่ถูกต้อง'); window.location = 'index.php';</script>";
    }
  }else{
    header("Location index.php");
  }
}else{
  header("Location index.php");
}
}
?>