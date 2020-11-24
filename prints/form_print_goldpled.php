
<?php

include("../php/config.php");
include('../php/model_goldpledge_report.php');
date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("h");
$d5=date("i");
$d6=date("s");
$data = getGoldPledgeByID($conn,$_GET['id']);
$body = getGoldPledge_bodyByID($conn,$_GET['id']);
for ($i=0; $i < count($body) ; $i++) { 
	$weight += $body[$i]['gold_weight'];
}
$str = '

<style>
div{

	padding-left: 3.5px;
	line-height: 1.5;
}
p{
	padding-left: 3.5px;
	line-height: 1.5;
	margin :0;
}
table {
	border-collapse: collapse;
	font-family: "Kanit-Regular";
}
p{
	font-size: 10px;
}
.row{
	font-family: "Kanit-Regular";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
}
table, td, th {
	border: 1px solid black;
}
.header {
	position: unset;
	top: 0;
	color: #fff;
}
.footer {
	position: unset;
	bottom: 0;
	color: #fff;
}
br{
	line-height: 0.5;
}
@page{ margin:0;}
</style>
<br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<barcode code="'.$data['PledgeCode'].'" type="QR" />
<p>เวลา 12.12 พนักงาน '.$data['name'].' '.$data['lasname'].'</p>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<p>โทรศัพท์  '.$data['cus_tel'].'</p>
</div>
<div class="col-lg-6">
<div class="col-lg-12">
<p>นน.ถุง '.$weight.' กรัม</p><p>กำหนด 1 เดือน</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ในห้างฯTerminal21ถ.มิตรภาพหนองคาย ต.ในเมือง <br> อ.เมือง จ.นครราชสีมา</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>วันที่ '.date(" H:m:s d/m/Y").' </p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ข้าพเจ้า '.$data['cus_name'].'</p>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<p>ได้ขายทรัพย์ซึ่งเป็นกรรมสิทธิ์ของข้าฯโดยชอบเเละปราศจากภาระผูกพันใดๆกับผู้อื่น<br>แก่นายอินทวัชร์ จารุกำเนิดกนก ดังรายการต่อไปนี้</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">';
for ($i=0; $i < count($body) ; $i++) { 
	$str .='<p>'.$body[$i]['gold_name'].' '.$body[$i]['type_name'].' '.$body[$i]['gold_weight'].' กรัม</p>'; 
}
$str .=' 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ราคา '.$data['money_out'].' บาท ('.bahtText(str_replace(",","",$data['money_out'])).')</p>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<p>หากเกิดความเสียหายใดๆข้าฯขอยอมรับผิดทั้งทางแพ่งเเละอาญาเเละยอมชดใช้ค่าเสียหายทั้งหมดทันทีที่นายอินทวัชร์ จารุกำเนิดกนก <br> แจ้งให้ทราบ</p>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<p>ลงชื่อ ......................................................ผู้ขายทรัพ</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>เลขบัตรประชาชน '.$data['CustIdCardNumber'].'</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ได้รับของครบเเล้ว ...................................................</p>
</div>
</div><div class="row">
<div class="col-lg-12">
<p>( 22 ตุลาคม 2560)</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ลงชื่อ .................................................. พยาน</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p>ลงชื่อ .................................................. พยาน</p>
</div>
</div>
<hr>
<barcode code="'.$data['PledgeCode'].'" type="QR" />
<div class="row">
<div class="col-lg-12">
<p> วันที่ .........................</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> อักษร..........................ราคา.....................หมวด</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> กรณีรับเองไม่ได้กรุณากรอก</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> ข้าพเจ้าชื่อ ..............................................................</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> ไม่สามารถมารับของเองได้ขอมอบอำนาจให้<br>(นาย/นาง/นางสาว)</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> ..............................................................................</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<p> มารับของเเทนข้าพเจ้า</p>
</div>
</div>
</div>
';






if($_GET['action'] == "PDF"){
	include("mpdf/mpdf.php");
	$mpdf=new mPDF('th', [100, 270], '0', 'garuda');   	
	// $mpdf = file_get_contents('style.css');
	// $mpdf = file_get_contents('bootstrap/css/bootstrap.css');
	// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 250]]);
	$mpdf->mirrorMargins = true;
	$mpdf->SetDisplayMode('fullpage','two');
	// $str1 = convertImg($str);
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
<!-- <script> 
	window.location = "../pages/index.php?app=goldpledge&action=image?id="
</script> -->
<?php
?>

