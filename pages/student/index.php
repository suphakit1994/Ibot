<?php
// session_start();
error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/course_function.php");
include("../php/student_function.php");
include('../php/camp_function.php');

?>
<html lang="en">
<head>
	<?php require_once('footer.php');?>
	<style>
		<?php 
		$id = $_SESSION['student_id'];
		$name = $_SESSION['student_name_eng'];
		$level = $_SESSION['student_level'];
		$nlevel = $_SESSION['student_nlevel'];
		$student_image = $_SESSION["student_image"];

		$id_c = selcs_student($conn,$id);
		for ($i=0; $i < count($id_c); $i++) { 
			$_SESSION['coursestd_id'] = $id_c[$i]['cs_course_id'];
		}
		?>

		<?php
		if ($level=='student') {
			$id_course = $_POST['course_id'];
			$student= selectstudentadd($conn,$id); //แสดงข้อมูลนักเรียนและผู้ปกครอง

			if(!isset($_GET['action'])){

				$data = selectcourse_students($conn,$id);   //แสดงคอสที่ลงทะเบียนแล้ว
				// $arrlength = count($data); //นับข้อมูล
				for($i=0;$i<count($data);$i++){
					$course_id=$data[$i]['course_id'];
				$course = selectcourse_student($conn,$id,$course_id);	 //แสดงคอสที่ยังไม่ลงทะเบียน
				// $arr = count($course);
			}
			require_once('our_course.php');
				$pri = selectcourse_prices($conn,$_POST);   //แสดงข้อมูลคอสในหน้าสมัครคอส
			}
			if($_GET['action']=="certificate"){
				$namestudent = $name;
				require_once('certificate.php');
			}
			if($_GET['action'] == 'TakeAlive'.$id){
				$id_student = $id;
				// $status = $_POST['post_take_a_live'];
				// $func_student = take_a_live_student($conn,$_POST,$id_student,$status);
				
				$take_alive_date = $_POST['date'];
				$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
				$date_now = $date->format('Y-m-d');
				$origin = new DateTime($date_now);
				$target = new DateTime($take_alive_date);
				$interval = $origin->diff($target);
				$day_distance = $interval->format('%R%a days');
				if ($day_distance > 0) {
					$status = $_POST['post_take_a_live'];
					$func_student = take_a_live_student($conn,$_POST,$id_student,$status);
				}
				require_once('mycourse.php');

			}

			if($_GET['action']=="enroll"){
				
				$selec_class =select_class($conn);		//select calendars		
				$arrlength = count($selec_class);
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				$class = selectcalander($conn,$_POST);
				require_once('payment.php');
			}

			if($_GET['action']=="success"){
				$class = selectcalander($conn,$_POST);
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง	 
				$paym = insertpaymentss($conn,$_POST,$id);// insert payment

				require_once('success.php');
				$paymax = maxpayment($conn);
				$calendar = insertcalender_students($conn,$_POST,$id); 
				$add = insertcourse_students($conn,$_POST,$id,$paymax);
				$selnoti = seldata_noti($conn);
				$addnoti = insertnoticourse_student($conn,$selnoti,$_POST);
				// echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student'>"; 
			}

			if($_GET['action']=="ibot_compeitition"){
				require_once('ibot_compeitition.php');
			}

			
			if($_GET['action']=="sorry"){
				require_once('sorry.php');

			}
			if($_GET['action']=="all_compeitition"){
				$compi = com_select($conn);
				$compitype = select_compitype($conn);
				require_once('all_compeitition.php');	
			}
			if($_GET['action']=="compeitions_team"){
				$com_id = $_POST['com_id'];
				$compi = select_compi($conn,$com_id);
				$allteam = select_allteam($conn,$com_id);
				print_r($comadd);
				echo count($comadd);
				require_once('compeitions_team.php');
			}

			if($_GET['action']=="payment_compeitition"){
				$compi_id=$_POST['com_id'];
				$compi_student=compi_student($conn,$id,$compi_id);
				// print_r($compi_student);
				$arr_com=count($compi_student);
				if($arr_com != 0){
					require_once('sorry.php');
				}else{
					$compiadd = select_comadd($conn,$compi);
					require_once('payment_compeitition.php');
				}
			}
			if($_GET['action']=="success_compeitition"){
				$paym = insertpaymentss($conn,$_POST,$id); // insert payment
				require_once('success_compeitition.php');
				$paymax = maxpayment($conn);
				echo $paymax['payment_id'];
				$comp_std = insertcom_students($conn,$data,$id,$paymax);
				$sel_compeitition = seldatacompeition_noti($conn);
				$noti_compeitition = insertnoticompetition($conn,$sel_compeitition,$_POST);  ///cps คือ Compeitition
				// echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student&action=all_compeitition'>";
			}
			
			//------------------------camp----------------------------------------//
			if($_GET['action']=="ibot_camp"){
				require_once('ibot_camp.php');

			}
			if($_GET['action']=="all_camp"){
				$cam = camp_select($conn);  //แสดงแคมป์ทั้งหมด
				$arr = count($cam);
				require_once('all_camp.php');
			}
			
			if($_GET['action']=="payment_camp"){
				$camp_id=$_POST['camp_id'];
				$camp_student_id=select_camp_student($conn,$id,$camp_id);
				$arr_camp=count($camp_student_id);
				if($arr_camp != 0){					
					require_once('sorry.php');
				}else{
					$camadd = campadd_select($conn,$cam); //แสดงข้อมูลแคมป์
					require_once('payment_camp.php');
				}

			}

			if($_GET['action']=="success_camp"){
				$paym = insertpaymentss($conn,$_POST,$id); // insert payment
				require_once('success_camp.php');
				$paymax = maxpayment($conn);
				$camp_std = insertcamp_students( $conn,$data,$id,$paymax);
				$sel_camp = seldatacamp_noti($conn);
				$noti_camp = insertnoticamp($conn,$sel_camp,$_POST);
				// echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student&action=all_camp'>";
			}

			if($_GET['action']=="schedule"){
				$id_students = $id;
				$func_select_std = select_idstudents($conn,$id_students);
				$cus = select_event_id($conn,$id_students);
				for ($data_course=0; $data_course < count($cus); $data_course++) { 
					$course_category = $cus[$data_course]['course_category'];
					$course_expension = $cus[$data_course]['course_expension'];
					$calender_starttime = $cus[$data_course]['calender_starttime'];
					$course_category = $cus[$data_course]['course_category'];
					$num_class = count($cus);
				}
				$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
				$date_curr = $date->format('d-m-Y');

				$list_s = selectcheckin_student($conn,$id);
				$dis_button_takelive = 0;

				for($data_list_std = 0; $data_list_std <count($list_s); $data_list_std++){
					if($list_s[$data_list_std]['date_today']==$date_curr) {
						if($list_s[$data_list_std]['date_today']==$date_curr && $list_s[$data_list_std]['status'] =='Take a live') {
							$dis_button_takelive = 1;
						}
					}
				}
				if($dis_button_takelive == 1){
					$status_btn_takealive = "true";
				}
				if($dis_button_takelive == 0){
					$status_btn_takealive = "false";
				}
				
				require_once('schedule.php');
			}
			if($_GET['action']=='checkInStudent'){
				$id_std = $id;
				$attentded = $_POST['checkin_time'];
				$teacher_attended = update_attended($conn,$_POST,$id_std,$attentded);
				$func_teacher = checkIn_teacher($conn,$_POST,$id_std);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=student&action=schedule">';
			}
			if($_GET['action']=='student_assessment'){
				$data=$_POST;
				$stem1=["Science","Technology","Engineering","Mathematics"];
				$stem2=["Synthesis","Teamwork","EQ","Meditation"];
				require_once("student_assessment.php");	
				$data[] = insterstudent($conn,$data);

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
						$username = $name;
						$course_id = $func_select_course[$i]['course_id'];
						$_SESSION["course_id"] = $course_id;
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
			
		}
		?>
	</style>
</head>
</html> 