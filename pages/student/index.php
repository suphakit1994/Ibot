<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/course_function.php");
include("../php/student_function.php");
include('../php/camp_function.php');

?>
<html lang="en">
<head>
	<style>
		<?php 
		$id = $_SESSION['student_id'];
		$name = $_SESSION['student_name_eng'];
		$level = $_SESSION['student_level'];
		$nlevel = $_SESSION['student_nlevel'];
		?>
		<?php
		require_once('footer.php');
		if ($level=='student') {
			$id_course = $_POST['course_id'];
			$student= selectstudentadd($conn,$id); //แสดงข้อมูลนักเรียนและผู้ปกครอง

			if(!isset($_GET['action'])){
				//แสดงคอสที่ลงทะเบียนไว้
				$data = selectcourse_students($conn,$id);   //แสดงคอสที่ลงทะเบียนแล้ว
				$arrlength = count($data); //นับข้อมูล
				//แสดงคอสที่ยังไม่ได้ลงทะเบียน
				$course = selectcourse_student($conn,$id);	 //แสดงคอสที่ยังไม่ลงทะเบียน
				$arr = count($course);
				require_once('our_course.php');
				$pri = selectcourse_prices($conn,$_POST);   //แสดงข้อมูลคอสในหน้าสมัครคอส
			}

			if($_GET['action']=="enroll"){
				
				$data= calendars($conn);		//แสดงเวลาเรียนที่เปิดสอน
				$arrlength = count($data);
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				$calandar = selectcalander($conn,$_POST);
				require_once('payment.php');
			}

			if($_GET['action']=="success"){
				$calandar = selectcalander($conn,$_POST);
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง	 
				$paym = insertpaymentss($conn,$_POST,$id);// insert payment

				require_once('success.php');
				$paymax = maxpayment($conn);
				$calendar = insertcalender_students($conn,$_POST,$id); 
				$add = insertcourse_students($conn,$_POST,$id,$paymax);
				$selnoti = seldata_noti($conn);
				$addnoti = insertnoticourse_student($conn,$selnoti,$_POST);
				echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student'>"; 
			}

			if($_GET['action']=="ibot_compeitition"){
				require_once('ibot_compeitition.php');
			}

			
			if($_GET['action']=="sorry"){
				require_once('sorry.php');

			}
			if($_GET['action']=="all_compeitition"){
				$compitype = select_compitype($conn);
				$compi = com_select($conn);
				require_once('all_compeitition.php');

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
				echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student&action=all_compeitition'>";
			}
			if($_GET['action']=="compeitions_team"){  //เช็ครายชื่อทีม
				
				require_once('compeitions_team.php');
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
				$camp=$_POST['camp_id'];
				$camp_student_id=camp_student($conn,$id,$camp);
				$arr_camp=count($camp_student_id);
				// print_r($camp_student_id);
				// echo $arr_camp;
				if($arr_camp!=0){					
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
				echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student&action=all_camp'>";
			}

			if($_GET['action']=="schedule"){
				$id_students = $id;
				$func_select_std = select_idstudents($conn,$id_students);
				$cus = calendars($conn);
				require_once('schedule.php');

			}
			if($_GET['action']=='student_assessment'){
				$data=$_POST;
				$stem1=["Science","Technology","Engineering","Mathematics"];
				$stem2=["Synthesis","Teamwork","EQ","Meditation"];
				require_once("student_assessment.php");	
				$data[] = insterstudent( $conn,$data);

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