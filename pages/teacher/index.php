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
		$level = $_SESSION['teacher_level'];
		$nlevel = $_SESSION['teacher_nlevel'];
		$image = $_SESSION["teacher_img"];
		?>
		<?php
		if ($level=='teacher') {

			if(!isset($_GET['action']) ){
				$id_teachers = $id;
				$cus = calendars($conn);
				$select_idteacher =select_idteacher($conn,$id_teachers);
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
				$attentded = $_POST['checkin_time'];
				$teacher_attended = update_attended($conn,$_POST,$id_teachers,$attentded);
				$func_teacher = checkIn_teacher($conn,$_POST,$id_teachers);

				require_once('view.php');
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=teacher">';
			}
			if($_GET['action'] == 'takealeave'.$id){
				$id_teachers = $id;
				$attentded = $_POST['checkout_time'];
				$func_teacher = checkIn_teacher($conn,$_POST,$id_teachers);

				require_once('view.php');
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=teacher">';
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
					$qq = quiz($conn);
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
						$func_check_ans = insert_answer($conn,$_POST,$id,$name,$level,$course_id,$lesson_id);
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