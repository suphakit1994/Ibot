<?php error_reporting(~E_NOTICE);

date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
include('../php/course_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		<?php
		$id = $_SESSION['admin_id'];
		$name = $_SESSION['admin_fname'];
		$level = $_SESSION['admin_level'];
		$nlevel = $_SESSION['admin_nlevel'];
		?><?php
		require_once('admin_view/admin_footer.php');
		if ($level == 'admin') {
				// ---------------------------View--------------------------------
			if (!isset($_GET['action'])) {
				$cus = calendars($conn);
				require_once('calendar_schedule.php');
			}

			if ($_GET['action'] == 'teacher_list') {
				$s = calendars($conn);
					//$cus = updateidcalendar($conn,$_POST);
					//$cus = selectmax($conn);
					//print_r($cus);
				require_once('teacher_list.php');
			}

			if ($_GET['action'] == 'admin_calendar') {
				$cus = calendars($conn);
				require_once('calendar_schedule.php');
			}
			if ($_GET['action'] == 'edit_data') {
				require_once("teacher_edit.php");
			}
			if ($_GET['action'] == 'students_list') {
				require_once('students_list.php');
			}
			if ($_GET['action'] == 'dashboard') {
				require_once('dashboard.php');
			}
			if ($_GET['action'] == 'course_list') {
				$course_list = selectcourse($conn);
				require_once('course_list.php');
			}
			if ($_GET['action'] == 'course_edit') {
				require_once('course_edit.php');
			}
			if ($_GET['action'] == 'choice_edit') {
				require_once('choice_edit.php');
			}
				// ---------------------------Insert--------------------------------
			if ($_GET['action'] == 'insert_datetime') {
				$cus = insertData($conn, $_POST);
				$suc = calendars($conn);
				require_once("calendar_schedule.php");
			}
			if ($_GET['action'] == 'admin_course') {
					// $_POST = ' ';
				require_once('course_insert.php');
			}
			if ($_GET['action'] == 'admin_course/add') {
					// Up load pdf file
				for ($i=1; $i < 8 ; $i++) {
					$new_pdf_name = 'up_pdf_file'.$i;
					$valable_pdf = 'file'.$i;
					echo $new_pdf_name = uploadpdf($conn,$_POST,$valable_pdf);
				}
				// Up load quiz
				$show_id = select_idquize($conn);
				
				$course_code = $_POST['course_code'];
				for ($j=1; $j < 8; $j++) { 
					foreach ($show_id as $key => $id_quize) {
						$id_quize = $id_quize + 1;
						echo "Max id".$id_quize;
					}
					for ($k=1; $k < 6; $k++) { 
						$new_quest = 'quest'.$k.$j;
						$new_var_quest = $_POST[$new_quest];
						$new_ans = 'ans'.$k.$j;
						$new_var_ans = $_POST[$new_ans];
						$use_func = upload_quiz($conn,$_POST,$new_var_quest,$new_var_ans);


						for ($l=1; $l < 5; $l++) { 
							$new_use_var = 'upload_quizz'.$l;
							$new_choice = 'choice'.$k.$l.$j;
							$new_var_choice = $_POST[$new_choice];
							$new_use_var = $new_var_choice;
							// echo "-----------------------------------------------".$new_var_quest.'===>';
							// echo $new_use_var;
							$loop = $new_var_quest.$new_use_var;
							echo "----------------------------------------------->".$loop.'<br>';
							
							$use_func1 = upload_choice($conn,$_POST,$new_use_var,$id_quize);
						}

						
					}
				}

				// for ($j=1; $j < 8; $j++) { 
				// 	for ($k=1; $k < 6; $k++) { 
				// 		$new_quest = 'quest'.$k.$j;
				// 		$new_var_quest = $_POST[$new_quest];
				// 		$new_ans = 'ans'.$k.$j;
				// 		$new_var_ans = $_POST[$new_ans];

				// 		for ($l=1; $l < 5; $l++) { 
				// 			$new_use_var = 'upload_quizz'.$l;
				// 			$new_choice = 'choice'.$k.$l.$j;
				// 			$new_var_choice[] = $_POST[$new_choice];
				// 			echo $new_use_var = $new_var_choice;
				// 			$new_use_var=$new_var_ans[]

				// 			$use_func1 = upload_choice($conn,$_POST,$new_use_var);
				// 		}


				// 		$use_func = upload_quiz($conn,$_POST,$new_var_quest,$new_var_ans);

				// 		// $choice11 = $_POST['choice11'];
				// 		// $choice12 = $_POST['choice12'];
				// 		// $choice13 = $_POST['choice13'];
				// 		// $choice14 = $_POST['choice14'];
				// 		// $quest1 = $_POST['quest1'];
				// 		// $ans1 = $_POST['ans1'];
				// 	}


				// }




					// $upload_quize1 = upload_quiz($conn,$_POST);

					// $cus = instercourse( $conn,$_POST);
					// echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_course">';
				
			}
			if ($_GET['action'] == 'addteam_compitition') {
				require_once('addteam_compitition.php');
			}
		}
		if($_GET['action'] == 'list_msg'){
			$cus = listmsg($conn);
			require_once('list_msg.php');
		}
		$si = listmsg($conn);
		for($i=0; $i<count($si); $i++) { 
			# code...
			$cus = listmsg($conn);
			if($_GET['action'] == 'check_msg'. $cus[$i]['id']){
				$value = $cus[$i]['id'];
				$status = updatestatus($conn,$value);

				// print_r($cus);
			// print_r($cus);
			// $approve = updatestatus($conn);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_msg">';

			}


		}
		
		?>
	</style>
</head>

<body>
	<?php
	if ($level == 'admin') {
		require_once('admin_view/navber_vertical.php');
	} ?>
</body>

</html>

