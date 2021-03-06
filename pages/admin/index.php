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
		$name = $_SESSION['admin_name'];
		$level = $_SESSION['admin_level'];
		$nlevel = $_SESSION['admin_nlevel'];
		?><?php
		require_once('admin_view/admin_footer.php');
		if ($level == 'admin') {
				// ---------------------------View--------------------------------
			if (!isset($_GET['action'])) {
				$list_teacher = selectteacher($conn);
				$list_of_student = selectstudent($conn);
				$course_list = selectcourse($conn);
				$graduate = select_graduate($conn);
				$func_selectcourse_stdcourse = selectcourse_stdcourse($conn);

				require_once('dashboard.php');
			}
			if ($_GET['action'] == 'insert_datetime') {
				$cus = insertData($conn, $_POST);
				$suc = calendars($conn);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_calendar">';
			}
			if ($_GET['action'] == 'classroom') {
				$selec_class =select_class($conn);
				require_once('classroom.php');
			}
			if ($_GET['action'] == 'classroom/add') {
				$class=insert_class($conn,$data);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=classroom">';
			}
			if ($_GET['action'] == 'classroom/delete') {
				$class_delete = delete_class($conn,$data);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=classroom">';

			}
			if ($_GET['action'] == 'courseadd') {
				$instercourse =instercourse($conn,$data);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=course_list">';
			}
			if($_GET['action']=="selectcertificate"){
				$select_cert = selecttype_certificate($conn);
				$select_img_cert = select_certificate($conn);
				require_once('select_certi.php');
			}

			if($_GET['action']=="uploadcertificate"){
				$upload_img_cert = uploadtype_certificate($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=selectcertificate">';
			}
			$get_select_cert = selecttype_certificate($conn);
			for($typecert = 0; $typecert < count($get_select_cert); $typecert++){
				if($_GET['action']=="uploadcertificate".$get_select_cert[$typecert]['id']){
					// echo $get_select_cert[$typecert]['id'];
					$img_cert = $_FILES['imagecert'];

					// echo json_encode($_FILES['imagecert']);
					$upload_cert = upload_certificate($conn,$_POST,$img_cert);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=selectcertificate">';
				}
			}
			$select_img_cert = select_certificate($conn);
			for($cardcertificate = 0; $cardcertificate < count($select_img_cert); $cardcertificate++){
				if($_GET['action']=="editcertificate".$select_img_cert[$cardcertificate]['id']){
					$id_img_certi = $select_img_cert[$cardcertificate]['id'];
					$get_img_cert = select_certificate_useidcert($conn,$id_img_certi);
					$s_list = selectstudent($conn);
					$course_name = selectcourse($conn);
					require_once('certificate.php');
				}
				if($_GET['action']=="addidstd".$select_img_cert[$cardcertificate]['id']){
					$id_img_certi = $select_img_cert[$cardcertificate]['id'];
					$func_add_idstd_certificate = add_idstd_certificate($conn,$_POST);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=selectcertificate">';
				}
				if($_GET['action']=="certi_del".$select_img_cert[$cardcertificate]['id']){
					$id_cert = $select_img_cert[$cardcertificate]['id'];
					$func_delete_certi_id = delete_certi_id($conn,$id_cert);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=selectcertificate">';
				}
			}
			if ($_GET['action'] == 'editdatacourse') {
				$list_teacher = selectteacher($conn);
				require_once('course_edit.php');		
			}
			if($_GET['action']=="certificate"){
				require_once('certificate.php');
			}
			if($_GET['action']=="dashboardadmin"){
				$list_teacher = selectteacher($conn);
				$list_of_student = selectstudent($conn);
				$course_list = selectcourse($conn);
				$graduate = select_graduate($conn);
				$func_selectcourse_stdcourse = selectcourse_stdcourse($conn);

				require_once('dashboard.php');
			}
			if ($_GET['action'] == 'studentslist') {
				$select_std = provestudent_list($conn);
				require_once('students_list.php');		
			}
			if ($_GET['action'] == 'course_list') {
				$course_list = selectcourse($conn);
				require_once('course_list.php');		
			}
			if ($_GET['action'] == 'teacher_list') {
				$list_teacher = selectteacher($conn);
				require_once('teacher_list.php');		
			}
			if ($_GET['action'] == 'list_check_teacher') {
				$func_check_list_teacher = select_list_teacher($conn);
				require_once('list_check_teacher.php');		
			}
			if ($_GET['action'] == 'list_check_student') {
				$func_check_list_student = select_list_student($conn);
				require_once('list_check_student.php');
			}
			if ($_GET['action'] == 'deletelistStd') {
				$func_del_list_student = delete_list_student($conn);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_check_student">';
			}
			if ($_GET['action'] == 'deletelistTeacher') {
				$func_del_list_teacher = delete_list_teacher($conn);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_check_teacher">';
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
			$list_of_student = selectstudent($conn);
			for ($student=0; $student < count($list_of_student); $student++) { 
				if ($_GET['action'] == 'edit_data_student'.$list_of_student[$student]['student_id']) {
					$id_students = $list_of_student[$student]['student_id'];
					$select_idstudent =select_idstudents($conn,$id_students);
					require_once("student_edit.php");
				}
				if ($_GET['action'] == 'teacher_update'.$list_of_student[$student]['student_id']) {
					$id_students = $list_of_student[$student]['student_id'];
					$name_en =  $_POST['name_en'];
					$name_th =  $_POST['name_th'];
					$nickname =  $_POST['nickname'];
					$username =  $_POST['username'];
					$password =  $_POST['password'];
					$pname_en =  $_POST['pname_en'];
					$pname_th =  $_POST['pname_th'];
					$related =  $_POST['related'];
					$email =  $_POST['email'];
					$phone =  $_POST['phone'];

					$update_student =update_idstudent($conn,$_POST,$name_en,$name_th,$nickname,$username,$password,$email,$phone,$pname_en,$pname_th,$related,$id_students);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=students_list">';
				}
				if ($_GET['action'] == 'student_del'.$list_of_student[$student]['student_id']) {
					$id_students = $list_of_student[$student]['student_id'];
					$delete_student = deletestd($conn,$id_students);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=students_list">';
				}
			}

			if ($_GET['action'] == 'admin_calendar') {
				$cus = calendars($conn);
				$t_list = selectteacher($conn);
				$s_list = selectstudent($conn);
				$classroom = selectclassroom($conn);
				$course_name = selectcourse($conn);
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
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_calendar">';		
				}
				if ($_GET['action'] == 'delete_calendar'.$select_calendar[$c]['calender_id']) {
					$id_of_calendar = $select_calendar[$c]['calender_id'];
					$delete_func =deleterowcalendar($conn,$_POST,$id_of_calendar);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_calendar">';
				}
				if ($_GET['action'] == 'add_teacherclassroom'.$select_calendar[$c]['calender_id']) {
					$id_teacher  =$_POST['name_t'];
					$id_student  =$_POST['name_s'];
					$course_id  =$_POST['c_id'];
					$id_calendar = $select_calendar[$c]['calender_id'];
					echo "========================================calendar>".$id_calendar.'<br>';
					echo "========================================>".$id_teacher.'<br>';
					$func_id_t = select_idteacher($conn,$id_teacher);
					for ($t_data=0; $t_data < count($func_id_t); $t_data++) {
						$fname = $func_id_t[$t_data]['teacher_fname'];
						$lname =$func_id_t[$t_data]['teacher_lname'];
						$status =$func_id_t[$t_data]['teacher_level'];
						$tfunc_classroom = insert_classroom($conn,$id_calendar,$id_teacher,$fname,$lname,$status,$course_id);
					}
					$func_id_s = select_idstudents($conn,$id_student);
					for ($t_data=0; $t_data < count($func_id_s); $t_data++) {
						$fname_s = $func_id_s[$t_data]['student_name_eng'];
						$lname_s =$func_id_s[$t_data]['student_nickname_eng'];
						$status_s =$func_id_s[$t_data]['student_level'];
						$sfunc_classroom = insert_classroom($conn,$id_calendar,$id_student,$fname_s,$lname_s,$status_s,$course_id);
					}
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_calendar">';	
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
			if ($_GET['action'] == 'list_student_course') { //แสดงรายชื่อนักเรียนที่ลงทะเบียนแต่ล่ะคอร์ส
				$course_id=$_POST['course_id'];
				$course_stusent=course_stusent($conn,$course_id);
				require_once('list_student_course.php');
			}
			if ($_GET['action'] == 'delete_list_student_course') { //ลบแสดงรายชื่อนักเรียน
				$student_id=$_POST['student_id'];
				$course_delete_student=course_delete_student($conn,$student_id);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=course_list">';
			}
			if ($_GET['action'] == 'admin_course_delete') {
				$course_id = $_POST['course_id'];
				$course_delete = course_delete($conn,$course_id );
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=course_list">';
			}
			if ($_GET['action'] == 'course_edit') {
				require_once('course_edit.php');
			}
			$edit_choice = selectcourse($conn);
			for ($a=0; $a < count($edit_choice); $a++) { 
				if ($_GET['action'] == 'choice_edit'.$edit_choice[$a]['course_id']) {
					$call_func = $edit_choice;
					$selet_path_html = $edit_choice[$a]['course_id'];
					require_once('choice_edit.php');
				}
				if ($_GET['action'] == 'choice_edit'.$edit_choice[$a]['course_id'].'/add') {
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
			//******************add team compititins***********************
			if ($_GET['action'] == 'addteam_compitition') {
				$compitype = select_compitype($conn);
				echo $_POST['compitype'];
				// $liststudent=select_compistudentlist($conn);
				$type = select_type($conn,$compitype);
				$compitype = select_compitype($conn);				
				$compi = com_select($conn);	
				// print_r($type['com_type']) ;
				require_once('addteam_compitition.php');
			}	
			$com_id=$_POST['com_id'];
			if ($_GET['action'] == 'list_student_compitition') { //แสดงรายชื่อนักเรียนที่ลงแต่ล่ะโปรแกรม	
				$list_student=list_student($conn,$com_id);	
				$allteam = select_allteam($conn,$com_id);
				require_once('list_student_compititions.php');
			}
			if ($_GET['action'] == 'list_student_compitition/'.$com_id) { //จัดทีม
				$new_no = $_POST['my_checkbox'];
				// echo "----------------------------------".$com_id;
				$team_name=$_POST['team_name'];
				$addteam=addteam_compi($conn,$team_name,$new_no,$com_id);
				$updat_compi_student = update_compi_student($conn,$new_no,$com_id);
				require_once('thak_team.php');
				// echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=addteam_compitition">';	
			}
			if ($_GET['action'] == 'delete_team') { //ลบทีม
				$team_id=$_POST['id'];
				$delete_team=delete_team($conn,$team_id);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=addteam_compitition">';	
			}
			if ($_GET['action'] == 'delete_student_compitition') { //ลบรายชื่อนักเรียนในกิจกรรมนั้นๆ รายบุคคล
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
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_camp">';
			}
			if ($_GET['action'] == 'list_student_camp') {
				$camp_id=$_POST['camp_id'];
				$camp_student=camp_student($conn,$camp_id);
				require_once('list_student_camp.php');
			}
			if ($_GET['action'] == 'delete_list_student_compitition') {
				$student_id=$_POST['student_id'];
				$camp_delete_student=camp_delete_student($conn,$student_id);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_camp">';
				
			}
			
			if($_GET['action'] == 'list_msg'){
				$cus = listmsg($conn);
				require_once('list_msg.php');
			}

			$cus = listmsg($conn);
			for ($h=0; $h < count($cus); $h++) { 
				$test = 'check_msg'.$cus[$h]['no_id'];
				
				if($_GET['action']=='check_msg'.$cus[$h]['no_id']){
					$timestamp = $_POST['timestamp'];
					$value = $cus[$h]['no_id'];
					$status = updatestatus($conn,$value,$name,$timestamp);
					// echo $timestamp;
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_msg">';
				}
			}
			$cus = listmsg($conn);
			for ($z=0; $z < count($cus); $z++) { 
				$keysdel = $cus[$z]['no_id'];

				if($_GET['action']=='del_msg'.$cus[$z]['no_id']){
					$check = $cus[$z]['topic'];
					$keys_cs = $cus[$z]['fk_cs_id'];
					$keys_cp = $cus[$z]['fk_cp_id'];
					$keys_cps = $cus[$z]['fk_cps_id'];
					echo $check;
					if ($check == 'Enroll') {
						$numfk_stu = selcs($conn,$keys_cs);
						for ($l=0; $l <count($numfk_stu) ; $l++) { 
							$keystu = $numfk_stu[$l]['cs_student_id'];
							echo $keystu;
							$del_msg = delstuout($conn,$keysdel);
							$del_data = delete_datastu($conn,$keystu);
						}
					}elseif($check == 'Add Camp') {
						$del_msg = delstuout($conn,$keysdel);
						$del_camp_stu = delcamp_stu($conn,$keys_cp);
					}elseif($check == 'Add Course') {
						$del_msg = delstuout($conn,$keysdel);
						$del_course_stu = delcourse_stu($conn,$keys_cs); 
					}elseif($check == 'Add Compeitition') {
						$del_msg = delstuout($conn,$keysdel);
						$del_com_stu = delcompeit_stu($conn,$keys_cps);
					}
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=list_msg">';
				}
			}
			if($_GET['action'] == 'history_msg'){
				$cus = historymsg($conn);
				require_once('history_msg.php');
			}
			if ($_GET['action'] == 'search_msg') {
				$name = $_POST['search'];
				// echo "$name";
				$cus = historymsg($conn);
				$cus_1 = sel_id_cs($conn,$name);
				// print_r($cus_1);
				$cus_2 = sel_id_cp($conn,$name);
				// print_r($cus_2);
				$cus_3 = sel_id_cps($conn,$name);
				// print_r($cus_3);

				require_once('search_msg.php');
			}
			if($_GET['action'] == 'ibot_news'){
				$cus = sec_ibot_news($conn);
				require_once('ibot_news.php');
			}
			if($_GET['action'] == 'text_slide'){
				$cus = sec_ibot_textslide($conn);
				require_once('text_slide.php');
			}
			if($_GET['action'] == 'text_slide_add'){
				require_once('text_slide_add.php');
			}
			if ($_GET['action'] == 'text_slide_add/add') {
				$text = $_POST['content'];
				if (strlen($text) > 200) {
					$message = "ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากข้อมูลมีความยาวมากเกินไป";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide">';
				}else{
					$ins_text=ibot_textslide_add($conn,$_POST,$name);	
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide">';
				}
			}
			if ($_GET['action'] == 'text_slide_edit') {
				$edit_textslide = ibot_textslide_sel($conn,$_POST);
				require_once('text_slide_edit.php');
			}

			if ($_GET['action'] == 'text_slide_edit/add') {
				$edit_textslide = ibot_textslide_sel($conn,$_POST);
				$update_textslide = ibot_textslide_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide">';
			}
			if ($_GET['action'] == 'text_slide_delete') {
				$delete_textslide = ibot_textslide_delete($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide">';
			}

			if($_GET['action'] == 'ibot_news_add'){
				require_once('ibot_news_add.php');
			}
			if ($_GET['action'] == 'ibot_news_add/add') {
				$ins_news=ibot_news_insert($conn,$_POST);	
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=ibot_news">';
			}
			if ($_GET['action'] == 'ibot_news_edit') {
				$edit_news = ibot_news_sel($conn,$_POST);
				require_once('ibot_news_edit.php');
			}

			if ($_GET['action'] == 'ibot_news_edit/add') {
				$edit_news = ibot_news_sel($conn,$_POST);
				$update_news = ibot_news_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=ibot_news">';
			}
			if ($_GET['action'] == 'ibot_news_delete') {
				$delete_news = ibot_news_delete($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=ibot_news">';
			}
			if($_GET['action'] == 'image_home'){
				require_once('image_home.php');
			}
			if($_GET['action'] == 'image_home/update'){
				$update_image_home = ibot_image_home_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin>';

			}
			if($_GET['action'] == 'image_camp'){

				require_once('image_camp.php');
			}
			if($_GET['action'] == 'image_camp/update'){
				$update_image_camp = ibot_image_camp_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin>';

			}
			if($_GET['action'] == 'image_compeitition'){

				require_once('image_compeitition.php');
			}
			if($_GET['action'] == 'image_compeitition/update'){
				$update_image_com = ibot_image_com_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin>';
				
			}
			if($_GET['action'] == 'video_background'){
				require_once('video_background.php');
			}
			if($_GET['action'] == 'video_background/update'){
				$update_video_background = video_background($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin">';

			}

			if($_GET['action'] == 'text_slide_about'){
				$cus = sec_about_textslide($conn);
				require_once('text_slide_about.php');
			}
			if($_GET['action'] == 'text_slide_add_about'){
				require_once('text_slide_add_about.php');
			}
			if ($_GET['action'] == 'text_slide_add_about/add') {
				$text = $_POST['content'];
				$topic = $_POST['topic'];

				if (strlen($text) > 200 || strlen($topic) > 70) {
					$message = "ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากข้อมูลมีความยาวมากเกินไป";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide_about">';
				}else{
					$ins_text=about_textslide_add($conn,$_POST);	
					echo '<META HTTP-EQUIV="Refresh" CONTENT=	"0;index.php?app=admin&action=text_slide_about">';
				}
			}
			if ($_GET['action'] == 'text_slide_edit_about') {
				$edit_textslide = about_textslide_sel($conn,$_POST);
				require_once('text_slide_edit_about.php');
			}

			if ($_GET['action'] == 'text_slide_edit_about/add') {
				
				$text = $_POST['content'];
				$topic = $_POST['topic'];

				if (strlen($text) > 200 || strlen($topic) > 70) {
					$message = "ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากข้อมูลมีความยาวมากเกินไป";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide_about">';
				}else{
					$edit_textslide = about_textslide_sel($conn,$_POST);
					$update_textslide = about_textslide_update($conn,$_POST);
					echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide_about">';
				}
			}
			if ($_GET['action'] == 'text_slide_delete_about') {
				$delete_textslide = about_textslide_delete($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=text_slide_about">';
			}
			if ($_GET['action'] == 'about_us_ourteam') {
				$cus = about_ourteam($conn);
				require_once('about_us_ourteam.php');
			}
			
			if ($_GET['action'] == 'about_us_ourteam_edit'){
				$ourteam_sel = ourteam_sel($conn,$_POST);
				require_once('about_us_ourteam_edit.php');

			}
			if ($_GET['action'] == 'about_us_ourteam_edit/add') {
				$ourteam_sel = ourteam_sel($conn,$_POST);
				$update_ourtem = about_ourteam_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=about_us_ourteam">';
			}
			if ($_GET['action'] == 'about_us_certificate') {
				$cus = about_cer($conn);
				require_once('about_us_cer.php');
			}
			
			if ($_GET['action'] == 'about_us_certificate_edit'){
				$cer_sel = cer_sel($conn,$_POST);
				require_once('about_us_cer_edit.php');

			}
			if ($_GET['action'] == 'about_us_certificate_edit/add') {
				$cer_sel = cer_sel($conn,$_POST);
				$update_cer = about_cer_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=about_us_certificate">';
			}
			if ($_GET['action'] == 'about_us_performance') {
				$cus = about_per($conn);
				require_once('about_us_per.php');
			}
			
			if ($_GET['action'] == 'about_us_performance_edit'){
				$per_sel = per_sel($conn,$_POST);
				require_once('about_us_per_edit.php');

			}
			if ($_GET['action'] == 'about_us_performance_edit/add') {
				$per_sel = per_sel($conn,$_POST);
				$update_per = about_per_update($conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=about_us_performance">';
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


