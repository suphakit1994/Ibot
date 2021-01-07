<?php
// $name= "kanokorn";
// $cutstr = substr($name,0,1); //ตัดตัวอักษร
// // echo $cutstr; // 123456

$gen=6; //กำหนดจำนวนหลักในการสุ่ม
$char_pass = "1234567890"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
$password = ""; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล

while(strlen($password)<$gen) {
$password .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
}
echo $password; //แสดงผลข้อมูล
?>