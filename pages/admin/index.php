<?php error_reporting(~E_NOTICE);

date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
include('../php/course_function.php');
include('../php/camp_function.php');
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

				require_once('calendar_schedule.php');
			}
			if ($_GET['action'] == 'teacher_list') {
				$list_teacher = selectteacher($conn);
				require_once('teacher_list.php');		
			}
			if ($_GET['action'] == 'teacher_add') {
				$insert_teacher = insert_teacher($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=teacher_list">';
			}
			$list_teacher = selectteacher($conn);
			for ($teacher=0; $teacher < count($list_teacher); $teacher++) { 
				if ($_GET['action'] == 'edit_data_teacher'.$list_teacher[$teacher]['teacher_id']) {
					$id_teacher = $list_teacher[$teacher]['teacher_id'];
					$select_idteacher =select_idteacher($conn,$id_teacher);
					require_once("teacher_edit.php");
				}
				if ($_GET['action'] == 'teacher_update'.$list_teacher[$teacher]['teacher_id']) {
					$id_teacher = $list_teacher[$teacher]['teacher_id'];
					$current_salary = $list_teacher[$teacher]['salary'];
					$hour =  $_POST['hour'];
					$pays =  $_POST['pays'];
					
					$fname =  $_POST['fname'];
					$lname =  $_POST['lname'];
					$username =  $_POST['username'];
					$password =  $_POST['password'];
					$email =  $_POST['email'];
					$phone =  $_POST['phone'];
					$date =  $_POST['date'];
					$time =  $_POST['time'];
					$work_time = $date."/".$time;
					$total_salary = $pays*$hour;//salary
					$new_salary = $current_salary+$total_salary;
					$update_teach =update_idteacher($conn,$_POST,$fname,$lname,$username,$password,$email,$phone,$work_time,$new_salary,$id_teacher);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=teacher_list">';
				}
				if ($_GET['action'] == 'teacher_del'.$list_teacher[$teacher]['teacher_id']) {
					$id_teacher = $list_teacher[$teacher]['teacher_id'];
					$delete_teacher = deleteteacher($conn,$id_teacher);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=teacher_list">';
				}
			}
			if ($_GET['action'] == 'admin_calendar') {
				$cus = calendars($conn);
				$t_list = selectteacher($conn);
				$s_list = selectstudent($conn);
				$classroom = selectclassroom($conn);
				require_once('calendar_schedule.php');
			}
			$select_calendar = calendars($conn);
			for ($c=0; $c < count($select_calendar); $c++) { 
				# code...
				if ($_GET['action'] == 'edit_calendar'.$select_calendar[$c]['calender_id']) {
					echo "===================================>".$select_calendar[$c]['calender_id'].'<br>';
					$id_of_calendar = $select_calendar[$c]['calender_id'];

					$date_value_calendar = 'start_time'.$id_of_calendar;
					$value_date = $_POST[$date_value_calendar];

					$start_value_calendar = 'build_time'.$id_of_calendar;
					$value_start = $_POST[$start_value_calendar];

					$end_value_calendar = 'end_time'.$id_of_calendar;
					$value_end = $_POST[$end_value_calendar];

					$color_value_calendar = 'color'.$id_of_calendar;
					$value_color = $_POST[$color_value_calendar];
					echo "===================================>".$value_date.'=>'.$value_start.'=>'.$value_end.'=>'.$value_color;

					$update_func = update_date($conn,$_POST,$value_date,$value_start,$value_end,$value_color,$id_of_calendar);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin">';		
				}
				if ($_GET['action'] == 'delete_calendar'.$select_calendar[$c]['calender_id']) {
					$id_of_calendar = $select_calendar[$c]['calender_id'];
					$delete_func =deleterowcalendar($conn,$_POST,$id_of_calendar);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin">';
				}
				if ($_GET['action'] == 'add_teacherclassroom'.$select_calendar[$c]['calender_id']) {
					$id_teacher  =$_POST['name_t'];
					$id_student  =$_POST['name_s'];
					$id_calendar = $select_calendar[$c]['calender_id'];
					echo "========================================calendar>".$id_calendar.'<br>';
					echo "========================================>".$id_teacher.'<br>';
					$func_id_t = select_idteacher($conn,$id_teacher);
					for ($t_data=0; $t_data < count($func_id_t); $t_data++) { 
						$fname = $func_id_t[$t_data]['teacher_fname'];
						$lname =$func_id_t[$t_data]['teacher_lname'];
						$status =$func_id_t[$t_data]['teacher_level'];
						// echo "========================================first name>".$fname.'<br>';
						// echo "========================================first name>".$lname.'<br>';
						// echo "========================================first name>".$status.'<br>';
						$tfunc_classroom = insert_classroom($conn,$id_calendar,$id_teacher,$fname,$lname,$status);
					}
					$func_id_s = select_idstudents($conn,$id_student);
					for ($t_data=0; $t_data < count($func_id_s); $t_data++) { 
						$fname_s = $func_id_s[$t_data]['student_name_eng'];
						$lname_s =$func_id_s[$t_data]['student_nickname_eng'];
						$status_s =$func_id_s[$t_data]['student_level'];
						// echo "========================================first name>".$fname_s.'<br>';
						// echo "========================================lname>".$lname_s.'<br>';
						// echo "========================================status>".$status_s.'<br>';
						$sfunc_classroom = insert_classroom($conn,$id_calendar,$id_student,$fname_s,$lname_s,$status_s);
					}
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin">';	
				}
			}
			if ($_GET['action'] == 'edit_data') {
				require_once("teacher_edit.php");
			}
			if ($_GET['action'] == 'students_list') {
				$select_std = selectstudent($conn);
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
			$edit_choice = selectcourse($conn);
			for ($a=0; $a < count($edit_choice); $a++) { 
				# code...
				if ($_GET['action'] == 'choice_edit'.$edit_choice[$a]['course_id']) {
					$call_func = $edit_choice;
					$selet_path_html = $edit_choice[$a]['course_id'];
					
					require_once('choice_edit.php');
				}
				if ($_GET['action'] == 'choice_edit'.$edit_choice[$a]['course_id'].'/add') {
					# add lesson code
					# add choice code
					for ($b = 1; $b < 9; $b++) { 
						$id_lesson = $edit_choice[$a]['course_id'];
						$number_of_lesson = $b;
						$new_pdf_name = 'up_pdf_file'.$b;
						$valable_pdf = 'file'.$b;
						$new_pdf_name = uploadpdf($conn,$_POST,$valable_pdf,$id_lesson,$number_of_lesson);
						if ($new_pdf_name) {
							$select_idfile = selectfile($conn);
							for ($k=1; $k < 6; $k++) { 
								// $n_number = $select_idfile[$k]['number'];
								$n_number = $b;
								$new_quest = 'quest'.$k.$b;
								$new_ans = 'ans'.$k.$b;
								$new_var_quest = $_POST[$new_quest];
								$string_array_quest = implode(",", $new_var_quest);
								$new_var_ans = $_POST[$new_ans];
								$string_array_ans = implode(",", $new_var_ans);
								echo "----------------------------------------------------------->".$string_array_quest.'<br>';
								if ($string_array_quest =='') {
									echo "========================>Novalue";
								}else{
									$cus = upload_quiz($conn,$_POST,$string_array_quest,$string_array_ans,$id_lesson,$n_number);
								}
								if ($cus) {
									$show_id = select_idquize($conn);
									$string_array = implode(",", $show_id);
									for ($l=1; $l < 5; $l++) { 
										$new_choice = 'choice'.$k.$l.$b;
										$new_var_choice = $_POST[$new_choice];
										$string_array_choice = implode(",", $new_var_choice);
										echo "----------------->".$string_array.'<br>';
										echo "----------------------------------------->".$string_array_choice.'<br>';
										if ($string_array_choice  =='') {
											echo "========================>Novalue";
										}else{
											$add_choice_func = upload_choice($conn,$_POST,$string_array_choice,$string_array);
										}

									}
								}
							}
						}	
					}

				}
			}

				// ---------------------------Insert--------------------------------
			if ($_GET['action'] == 'insert_datetime') {
				$cus = insertData($conn, $_POST);
				$suc = calendars($conn);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_calendar">';
			}
			if ($_GET['action'] == 'admin_course/addcourse') {
				$instercourse =instercourse($conn,$data);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="2;index.php?app=admin&action=course_list">';
			}
		}
		//-------------------------------------compitition-----------------------------------------
		if ($_GET['action'] == 'admin_compitition') {  //หน้าแสดงโปรแกรมแข่งทั้งหมด
			$compi = com_select($conn);
			require_once('compitition_list.php');
		}
		if ($_GET['action'] == 'admin_compitition_add') {  //แสดงรายละเอียดหน้าแข่ง
			$compitype = select_compitype($conn);
			require_once('compitition_add.php');
		}
		if ($_GET['action'] == 'compitition_add') {  //หน้าเพิ่มประเภทการแข่งขัน 
			$comtype = insert_compitype($conn,$data);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_compitition_add">';
		}
		if ($_GET['action'] == 'admin_compitition_add/add') { //เพิ่มโปรแกรมแข่ง
			$compitype = select_compitype($conn);
			$comp = com_insert($conn,$data);
			print_r($comp);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_compitition">';
		}
		if ($_GET['action'] == 'admin_compitition_edit') {  //หน้าแก้ไข 
			$comadd = select_comadd($conn,$compi);
			require_once('compitition_edit.php');
		}
		if ($_GET['action'] == 'admin_compitition_edit/add') { 
			$comadd = select_comadd($conn,$compi);
			$updatecom=update_com($conn,$data);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_compitition">';
		}

		if ($_GET['action'] == 'admin_compitition_delete') { 
			$deletecompi= com_delete($conn,$compi);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_compitition">';

		}
		if ($_GET['action'] == 'addteam_compitition') {
			$compitype = select_compitype($conn);
			echo $_POST['compitype'];
			// $liststudent=select_compistudentlist($conn);
			$type = select_type($conn,$compitype);
			$compitype = select_compitype($conn);				
			$compi = com_select($conn);	
			// print_r($type['com_type']) ;
			// require_once('testfaii.php');
			require_once('addteam_compitition.php');

		}
		if ($_GET['action'] == 'list_student_compitition') { //แสดงรายชื่อนักเรียนที่ลงแต่ล่ะโปรแกรม
			$com_id=$_POST['com_id'];
			$list_student=list_student($conn,$com_id);
			// print_r($list_student) ;	
			require_once('list_student_compititions.php');	
		}
		if ($_GET['action'] == 'delete_student_compitition') { //แสดงรายชื่อนักเรียนที่ลงแต่ล่ะโปรแกรม
			$com_id=$_POST['com_id'];
			$student_id=$_POST['student_id'];
			echo $com_id." ".$student_id;
			$delete=delete_student_compitition($conn,$com_id,$student_id);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=addteam_compitition">';

		}

		//-----------------------------camp----------------------------------------------
		if ($_GET['action'] == 'admin_camp') {
			$cam=camp_select($conn);  //แสดงแคมป์ทั้งหมด
			require_once('camp_list.php');
		}
		if ($_GET['action'] == 'admin_camp_add') {
			require_once('camp_add.php');
		}
		if ($_GET['action'] == 'admin_camp_add/add') {
			$camp=camp_insert($conn,$data);		//เพิ่มแคมป์
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_camp">';
		}
		if ($_GET['action'] == 'admin_camp_edit') {
			$campadd = campadd_select($conn,$cam);
			require_once('camp_edit.php');
		}

		if ($_GET['action'] == 'admin_camp_edit/add') {
			$campadd = campadd_select($conn,$cam);
			$updatcamp = update_camp($conn,$data);
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_camp">';
		}
		if ($_GET['action'] == 'admin_camp_delete') {
			$campdelete = delete_camp($conn,$data);
			// echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_camp">';
		}

		
		if($_GET['action'] == 'list_msg'){
			$cus = listmsg($conn);
			require_once('list_msg.php');
		}
		$cus = listmsg($conn);
		for ($h=0; $h < count($cus); $h++) { 
			$test = 'check_msg'.$cus[$h]['no_id'];
			if($_GET['action']=='check_msg'.$cus[$h]['no_id']){
				$value = $cus[$h]['no_id'];
				$status = updatestatus($conn,$value);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_msg">';
			}
			$cus = listmsg($conn);
			for ($z=0; $z < count($cus); $z++) { 
				$keysdel = $cus[$z]['no_id'];

				if($_GET['action']=='del_msg'.$cus[$z]['no_id']){
					$keys = $cus[$z]['fk_cs_id'];
					$numfk_stu = selcs($conn,$keys);
					for ($a=0; $a <count($numfk_stu) ; $a++) { 
						$selstu_id = $numfk_stu[$a]['cs_student_id'];
						echo $selstu_id;
						echo "===".$keysdel;
						$del_msg = delstuout($conn,$selstu_id,$keysdel);
						// echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_msg">';
						

					}
				}

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


