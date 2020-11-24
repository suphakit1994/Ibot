<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
require_once('php/config.php');
require_once('php/function.php');

if(!isset($_FILES['upload'])){

    $name_file =  date("d").date("m").date("Y").time().$_FILES['filUpload']['name'];
    $tmp_name =  $_FILES['filUpload']['tmp_name'];

    if(file_exists("image/".$name_file)){
        unlink("image/".$name_file);
        //$imgs = mkdir("images/Employees/".$_POST['code']);
        $locate_img ="images/".$name_file;
        move_uploaded_file($tmp_name,$locate_img);
    }else{
        if($name_file != ""){
            $valid_ext = array('png','jpeg','jpg','gif');
            $locate_img ="images/".$name_file;

            $file_extension = pathinfo($locate_img, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);
            
            if(in_array($file_extension,$valid_ext)){

				// Compress Image
                compressImage($tmp_name,$locate_img,50);

            }else{
                echo "Invalid file type.";
            }
			//$locate_img ="
        }
        
        move_uploaded_file($tmp_name,$locate_img);
    }

}if($_POST['code'] != ""){
    $data['img']= $name_file;
    $data['code'] = $_POST['code'];
    $data['name'] = $_POST['name'];
    $data['lasname'] = $_POST['lasname'];
    $data['phone'] = $_POST['phone'];
    $data['local'] = $_POST['local'];
    $data['email'] = $_POST['email'];
    $data['nick_name'] = $_POST['nick_name'];
    $data['brank'] = $_POST['brank'];
    $data['account'] = $_POST['account'];
    $data['password'] = $_POST['password'];
    $check=checkUserData($conn,$data['code'] );

    // print_r ($_POST);
    if(count($check)==0){
        $res = insertUserData($conn,$data);
        session_start();
    }else{
        $res=false;
    }
    if($res){
        ?>
        <script>
            window.location = "index.php";
        </script>
        <?php
    }else{
        ?> <script>
           alert('มีรหัสพนักงานนี้อยู่เเล้ว');
           window.location = "register.php";
       </script>
       <?php   
   }
}
else
{
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

function compressImage($source, $destination, $quality) {

	$info = getimagesize($source);

	if ($info['mime'] == 'image/jpeg')
       $image = imagecreatefromjpeg($source);

   elseif ($info['mime'] == 'image/gif')
       $image = imagecreatefromgif($source);

   elseif ($info['mime'] == 'image/png')
       $image = imagecreatefrompng($source);
   
	//imagejpeg($rotate);
   imagejpeg($rotate, $destination, $quality);

}

?>