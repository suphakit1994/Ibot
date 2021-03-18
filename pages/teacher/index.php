<?php 
session_start();

error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
include("../php/course_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('footer.php'); ?>
	<style>
		<?php 
		$id = $_SESSION['teacher_id'];
		$name = $_SESSION['teacher_fname'];
		$lname = $_SESSION["teacher_lname"];
		$level = $_SESSION['teacher_level'];
		$nlevel = $_SESSION['teacher_nlevel'];
		$image = $_SESSION["teacher_img"];
		?>
		<?php
		if ($level=='teacher') {

			if(!isset($_GET['action']) ){
				$id_user = $id;
				$select_id_calendar = select_event_id($conn,$id_user);
				$select_idteacher =select_idteacher($conn,$id_user);
				$list_t = selectcheckin_teacher($conn,$id);
				$select_event_func = select_event($conn);
				for($event_func=0;$event_func<count($select_event_func);$event_func++){
					for ($event_id=0; $event_id < count($select_id_calendar); $event_id++) { 
						if($select_event_func[$event_func]['id_calendar_fk']==$select_id_calendar[$event_id]['id_calendar_fk']){
							if ($select_event_func[$event_func]['id_calendar_fk']==$select_id_calendar[$event_id]['id_calendar_fk'] && $select_event_func[$event_func]['status'] == 'student') {
								$name_std = $select_event_func[$event_func]['fname'];
							}
						}
					}
				}
				$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
				$date_curr = $date->format('d-m-Y');
				$status_takelive = "Take a live";
				$check = 0;
				$dis_button = 0;
				$dis_button_takelive = 0;
				for($count_list_t=0;$count_list_t<count($list_t);$count_list_t++){
					if($list_t[$count_list_t]['date_today']==$date_curr) {
						if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Check In') {
							$time_attend = $list_t[$count_list_t]['checkin_time'];
							$check = 1;
						}
					}
					if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Check Out') {
						$dis_button = 1;
						$time_out_day = $list_t[$count_list_t]['checkin_time'];
					}
					if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Take a live') {
						$dis_button_takelive = 1;
						$dis_button = 1;
					}
				}
				if($check == 1) {
					$check_name = "Check Out";
					$time_out = $time_out_day;
				}
				if($check == 0){
					$check_name = "Check In";
					$time_attend = $time_to_day;
				}
				if($dis_button == 1) {
					$status_button = "true";
					$status_btn_takealive = "true";
				}
				if($dis_button == 0){
					$status_button = "false";
				}
				if($dis_button_takelive == 1){
					$status_btn_takealive = "true";
				}
				require_once('view.php');	
			}
			if($_GET['action'] == 'our_course'){
				$cus[] = selectcourse($conn);
				$data= selectcourse($conn);         //เรียกใช้ faction
				$arrlength = count($data); 		
				require_once('our_course.php');
			}
			if($_GET['action'] == 'checkIn'.$id){
				$id_teachers = $id;
				$status = $_POST['status'];
				$func_teacher = checkIn_teacher($conn,$_POST,$id_teachers,$status);
				$id_user = $id;
				$select_id_calendar = select_event_id($conn,$id_user);
				$select_idteacher =select_idteacher($conn,$id_user);
				$list_t = selectcheckin_teacher($conn,$id);
				$select_event_func = select_event($conn);
				for($event_func=0;$event_func<count($select_event_func);$event_func++){
					for ($event_id=0; $event_id < count($select_id_calendar); $event_id++) { 
						if($select_event_func[$event_func]['id_calendar_fk']==$select_id_calendar[$event_id]['id_calendar_fk']){
							if ($select_event_func[$event_func]['id_calendar_fk']==$select_id_calendar[$event_id]['id_calendar_fk'] && $select_event_func[$event_func]['status'] == 'student') {
								$name_std = $select_event_func[$event_func]['fname'];
							}
						}
					}
				}
				$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
				$date_curr = $date->format('d-m-Y');
				$status_takelive = "Take a live";
				$check = 0;
				$dis_button = 0;
				$dis_button_takelive = 0;
				for($count_list_t=0;$count_list_t<count($list_t);$count_list_t++){
					if($list_t[$count_list_t]['date_today']==$date_curr) {
						if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Check In') {
							$time_attend = $list_t[$count_list_t]['checkin_time'];
							$check = 1;
						}
					}
					if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Check Out') {
						$dis_button = 1;
						$time_out_day = $list_t[$count_list_t]['checkin_time'];
					}
					if($list_t[$count_list_t]['date_today']==$date_curr && $list_t[$count_list_t]['status'] == 'Take a live') {
						$dis_button_takelive = 1;
						$dis_button = 1;
					}
				}
				if($check == 1) {
					$check_name = "Check Out";
					$time_out = $time_out_day;
				}
				if($check == 0){
					$check_name = "Check In";
					$time_attend = $time_to_day;
				}
				if($dis_button == 1) {
					$status_button = "true";
					$status_btn_takealive = "true";
				}
				if($dis_button == 0){
					$status_button = "false";
				}
				if($dis_button_takelive == 1){
					$status_btn_takealive = "true";
				}
				require_once('view.php');
			}
			if($_GET['action'] == 'TakeAlive'.$id){
				$id_teachers = $id;
				$take_alive_date = $_POST['date'];
				$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
				$date_now = $date->format('Y-m-d');

				$origin = new DateTime($date_now);
				$target = new DateTime($take_alive_date);
				$interval = $origin->diff($target);
				$day_distance = $interval->format('%R%a days');
				if ($day_distance > 0) {
					$status = $_POST['post_take_a_live'];
					$func_teacher = checkIn_teacher($conn,$_POST,$id_teachers,$status);
				}
				require_once('mycourse.php');
				
				
			}

			if($_GET['action'] == 'student_assessment'){

				require_once('student_assessment.php');
			}
			if($_GET['action'] == 'compititions'){

				require_once('compititions.php');
			}

			if($_GET['action'] == 'report'){

				require_once('report.php');
			}
			$func_select_course= selectcourse($conn);
			for ($i=0; $i < count($func_select_course); $i++) { 
				if($_GET['action'] == 'mycourse'.$func_select_course[$i]['course_id']){
					$id_course = $func_select_course[$i]['course_id'];
					$number_of_lesson = getPdf($conn,$id_course);
					$func_id_course = selectcourse_id($conn,$id_course);
					$get_pdf = getPdf($conn,$id_course);
					// $qq = quiz($conn);
					require_once('mycourse.php');
				}
				
				$id_course = $func_select_course[$i]['course_id'];
				$get_pdf = getPdf($conn,$id_course);
				for ($j=0; $j < count($get_pdf); $j++) {
					if($_GET['action'] == 'mycourse'.$func_select_course[$i]['course_id'].'lesson'.$get_pdf[$j]['numper']){
						$num_quest = $get_pdf[$j]['numper'];
						$course = $func_select_course[$i]['course_id'];
						$get_quest = select_question($conn,$course,$num_quest);
						$select_choice_func = select_choice($conn);
						require_once('iframe.php');	
					}
					if($_GET['action'] == 'postfile/exam'.$func_select_course[$i]['course_id'].'lesson'.$get_pdf[$j]['numper']){
						$username = $name.$lname;
						$course_id = $func_select_course[$i]['course_id'];
						$lesson_id = $get_pdf[$j]['numper'];
						$question0 = $_POST['question0'];
						$question1 = $_POST['question1'];
						$question2 = $_POST['question2'];
						$question3 = $_POST['question3'];
						$question4 = $_POST['question4'];
						$ans0 = $_POST['answer0'];
						$ans1 = $_POST['answer1'];
						$ans2 = $_POST['answer2'];
						$ans3 = $_POST['answer3'];
						$ans4 = $_POST['answer4'];
						$corract0 = $_POST['correct0'];
						$corract1 = $_POST['correct1'];
						$corract2 = $_POST['correct2'];
						$corract3 = $_POST['correct3'];
						$corract4 = $_POST['correct4'];

						$total_score = 0;

						if ($ans0 == $corract0) {
							$total_score = $total_score+1;
						}
						if ($ans1 == $corract1) {
							$total_score = $total_score+1;
						}
						if ($ans2 == $corract2) {
							$total_score = $total_score+1;
						}
						if ($ans3 == $corract3) {
							$total_score = $total_score+1;
						}
						if ($ans4 == $corract4) {
							$total_score = $total_score+1;
						}else{
							$total_score = $total_score+0;
						}
						$show_score = $total_score;
						
						$func_check_ans = insert_answer($conn,$_POST,$id,$username,$level,$course_id,$lesson_id);
						require_once('check_answer.php');
					}
				}	
			}
			$_SESSION["course_id"] = $id_course;
		}
		?>
	</style>
</head>
</html> 