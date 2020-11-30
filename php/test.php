<?php
function getdatediffmount(mysqli $conn,$mount){
	$sql = "SELECT * FROM `tbl_goldpledge` WHERE `las_date` < DATE_ADD(NOW(), INTERVAL -$mount MONTH) AND del = 1 ";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function getdata(mysqli $conn){
	$sql = "SELECT * FROM `user` WHERE 1 ";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data =[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}


function getGoldPledge_bodyByID(mysqli $conn,$id){
	$sql = "SELECT * FROM tbl_goldpledge_body as tb1 
	LEFT JOIN gold_type as tb2
	on tb1.gold_type_id = tb2.gold_type_id
	WhERE tb1.del=1 AND tb1.PledgeCode = '$id' and tb1.kick = 0";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getGoldPledgeByID(mysqli $conn,$id){
	$sql = "SELECT * FROM tbl_goldpledge as tb1
	LEFT JOIN user as tb2 on tb1.addby = tb2.user_code
	LEFT JOIN tbl_customer as tb3 on tb1.GPCustomerId = tb3.CustomerId
	WhERE tb1.PledgeCode = '$id'";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}
function getSlutByID(mysqli $conn,$id){
	$sql = "SELECT * FROM tbl_slut 
	WhERE del=1 AND PledgeCode ='$id'";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}

function delCustomer(mysqli $conn, $data){
	$sql = "UPDATE tbl_goldpledge t1 
	SET t1.del = '0'
	WHERE t1.PledgeCode = '".$data."'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function delCustomer_body(mysqli $conn, $data){
	$sql = "UPDATE tbl_goldpledge_body t1 
	SET t1.del = '0'
	WHERE t1.PledgeCode = '".$data."'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}

function updatetelCustomer(mysqli $conn, $data){
	$sql = "UPDATE tbl_goldpledge t1 
	SET t1.kick = '1'
	WHERE t1.PledgeCode = '".$data."'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
function updatetelCustomer_body(mysqli $conn, $data){
	$sql = "UPDATE tbl_goldpledge_body t1 
	SET t1.kick = '1'
	WHERE t1.PledgeCode = '".$data."'";
	echo $sql;
	if ( mysqli_query($conn, $sql)) {
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}





function bahtText(float $amount): string
{
	[$integer, $fraction] = explode('.', number_format(abs($amount), 2, '.', ''));

	$baht = convert($integer);
	$satang = convert($fraction);

	$output = $amount < 0 ? 'ลบ' : '';
	$output .= $baht ? $baht.'บาท' : '';
	$output .= $satang ? $satang.'สตางค์' : 'ถ้วน';

	return $baht.$satang === '' ? 'ศูนย์บาทถ้วน' : $output;
}

function convert(string $number): string
{
	$values = ['', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า'];
	$places = ['', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน'];
	$exceptions = ['หนึ่งสิบ' => 'สิบ', 'สองสิบ' => 'ยี่สิบ', 'สิบหนึ่ง' => 'สิบเอ็ด'];

	$output = '';

	foreach (str_split(strrev($number)) as $place => $value) {
		if ($place % 6 === 0 && $place > 0) {
			$output = $places[6].$output;
		}

		if ($value !== '0') {
			$output = $values[$value].$places[$place % 6].$output;
		}
	}

	foreach ($exceptions as $search => $replace) {
		$output = str_replace($search, $replace, $output);
	}
	return $output;
}
?>