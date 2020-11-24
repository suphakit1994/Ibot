
<?php

include("../php/config.php");
include('../php/model_goldpledge_report.php');date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("h");
$d5=date("i");
$d6=date("s");

$report = getdatediffmount($conn,$_GET['mount']);

for ($i=0; $i< count($report) ; $i++) { 
	$body = getGoldPledge_bodyByID($conn,$report[$i]['PledgeCode']);
	$slut_old=getSlutByID($conn,$report[$i]['PledgeCode']);
	$interest=explode("-",$report[$i]['las_date']);
	$interest[2] = substr($interest[2],0,2);
	$date_now=explode("-",date("Y-m-d"));
	$money = ($date_now[1]-$interest[1])*$report[$i]['interest'];

	if((intval($date_now[2])-intval($interest[2])) > (-15) && (intval($date_now[2])-intval($interest[2])) < (-1)){
		$money -=(0.5*$report[$i]['interest']);
	}else if((intval($date_now[2])-intval($interest[2])) <= (-15)){
		$money -=(1*$report[$i]['interest']);
	}
	if((intval($date_now[2])-intval($interest[2])) >= (1)){
		$money +=(0.5*$report[$i]['interest']);
	}
	if((intval($date_now[2])-intval($interest[2])) >= (15)){
		$money +=(0.5*$report[$i]['interest']);
	}
		// $slut['money_out']=str_replace(",","",$report[$i]['money_out']);
	$report[$i]['interestss'] = $money*floatval(str_replace(",","",$report[$i]['money_out']))/100;
}
$str = '

<style>
table {
	border-collapse: collapse;
	font-family: "Kanit-Regular";
}
.row{
	font-family: "Kanit-Regular";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
}
table, td, th {
	border: 1px solid black;
}
</style>

<div class="row">
<div class="col-lg-12">
<div>
<h3 style="text-align: center;">รายงานดองเบียคงค้าง</h1>';

if(isset($_GET['start_date'])){
	$str .=	'<h4 style="text-align: center;">รายดอกเบียคงค้างระหว่างวันที่ '.$_GET['start_date'].' ถึง '.$_GET['end_date'].'</h2>';
} 
$str .=	'<h4 style="text-align: right;">'.date(" H:m:s d/m/Y").'</h4>
</div>';
if(count($report)){
	$str .= '<table style="width:100%; text-align: center;" >
	<thead>
	<tr>
	<th>วันที่ต่อดอกล่าสุด</th>
	<th>รหัสรับจำนำ</th>
	<th>ชื่อลูกค้า</th>
	<th>เบอร์โทรศัพ</th>
	<th>ยอดนำออก</th>
	<th>ดอกเบียคงค่าง</th>
	</tr>
	</thead>
	<tbody>';
	
	
	for($i=0; $i < count($report); $i++){
		$str.='<tr>
		<td>'.$report[$i]['las_date'].'</td>
		<td>'.$report[$i]['PledgeCode'].'</td>
		<td>'.$report[$i]['cus_name'].'</td>
		<td>'.$report[$i]['cus_tel'].'</td>
		<td>'.number_format(str_replace(",","",$report[$i]['money_out']),2).'</td>
		<td>'.number_format($report[$i]['interestss'],2).'</td>
		</tr>';
		$costall+=str_replace(",","",$report[$i]['money_out']);
		$interestss+=str_replace(",","",$report[$i]['interestss']);
	}
	$str.='<tr>
	<td th colspan="4" align="center">รวม</td>
	<td>'. number_format($costall,2).'</td>
	<td>'. number_format($interestss,2).'</td>
	</tr>';
	$str .='	</tbody>
	</table>';
} else if(!isset($report)<=0) $str .= "ไม่พบข้อมูล"; 
$str .='
</div>
</div>
';

if($_GET['action'] == "PDF"){

// echo $str;

	include("mpdf/mpdf.php");
	$mpdf=new mPDF('th', 'A4', '0', 'garuda');   

	$mpdf->mirrorMargins = true;

	$mpdf->SetDisplayMode('fullpage','two');
//$str1 = convertImg($str);
	$mpdf->WriteHTML($str);

	$mpdf->Output('รายงานรับจำนำ'.$d1.'-'.$d2.'-'.$d3.' '.$d4.'-'.$d5.'-'.$d6.'.pdf','D');
	exit;

}
else if($_GET['action'] == "Excel"){
	header("Content-type: application/vnd.ms-excel");
// header('Content-type: application/csv'); //*** CSV ***//

	header("Content-Disposition: attachment; filename=รายงานรับจำนำ $d1-$d2-$d3 $d4:$d5:$d6.xls");
	echo $str;
} else {
	echo $str;
	?>
	<script language="javascript">

		window.print();
	</script>
	<?php 
}



?>

