<?php
$date1 = date("Ymd_His");
$numrand = (mt_rand());
$course_img = (isset($_POST ['course_img']) ? $_POST['course_img'] : '');

echo " $date1";
echo '<hr/>';
echo "$numrand";
?>