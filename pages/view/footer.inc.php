<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://kit.fontawesome.com/yourcode.js"></script> -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="../lib/datetimepicker/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" href="../lib/datetimepicker/jquery.datetimepicker.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css"> 
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

<script type="text/javascript">
	$.datetimepicker.setLocale('th');
	jQuery('.date').datetimepicker({
		timepicker:false,
		format:'d-m-Y',        
		lang:'th',  
		onSelectDate:function(dp,$input){
			var yearT=new Date(dp).getFullYear()-0;  
			var yearTH=yearT+543;
			var fulldate=$input.val();
			var fulldateTH=fulldate.replace(yearT,yearTH);
			$input.val(fulldateTH);
		}
	});
	jQuery(".date").on("mouseenter mouseleave",function(e){
		var dateValue=$(this).val();
		if(dateValue!=""){
			var arr_date=dateValue.split("-"); 
			if(e.type=="mouseenter"){
				var yearT=arr_date[2]-543;
			}       
			if(e.type=="mouseleave"){
				var yearT=parseInt(arr_date[2])+543;
			}   
			dateValue=dateValue.replace(arr_date[2],yearT);
			$(this).val(dateValue);
		}       
	});
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});
	function number_format(number, decimals, decPoint, thousandsSep) {
		decimals = Math.abs(decimals) || 0;
		number = parseFloat(number);
		if (!decPoint || !thousandsSep) {
			decPoint = '.';
			thousandsSep = ',';
		}
		var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
		var numbersString = decimals ? (roundedNumber.slice(0, decimals * -1) || 0) : roundedNumber;
		var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
		var formattedNumber = "";
		while (numbersString.length > 3) {
			formattedNumber += thousandsSep + numbersString.slice(-3)
			numbersString = numbersString.slice(0, -3);
		}
		if (decimals && decimalsString.length === 1) {
			while (decimalsString.length < decimals) {
				decimalsString = decimalsString + decimalsString;
			}
		}
		return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
	}
	
	
</script>
<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
		font-size: 14px;
		font-weight: regular(400);
		line-height: 24px;
	}
	body-b{
		font-family: 'Poppins', sans-serif;
		font-size: 14px;
		font-weight: bold(700);
		line-height: 24px;
	}
	h1{
		font-family: 'Poppins', sans-serif;
		font-size: 30px !important;
		font-weight: regular(400);
	}
	h2{
		font-family: 'Poppins', sans-serif;
		font-size: 20px !important;
		font-weight: regular(300);
		line-height: 36px;
	}
	h3{	
		font-family: 'Poppins', sans-serif;
		font-size: 16px !important;
		font-weight: bold(700);	
	}
	select{
		font-family: 'Poppins', sans-serif;
		font-size: 20px;
		font-weight: bold(700);	
		line-height: 36px;
	}
	p{
		font-family: 'Poppins', sans-serif;
		font-size: 16px !important;
		font-weight: regular(700);	
		line-height: 24px;
	}
	p-b{
		font-family: 'Poppins', sans-serif;
		font-size: 20px;
		font-weight: bold(700);	
		line-height: 36px;
	}
	.Button {
		border-radius:28px;
		border:1px solid #18ab29;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-size:14;
		text-decoration:none;
		padding: 2px; 
		margin: 10px;
		text-align: center; 
		background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);    
		border: 1px solid #ffffff;
	}
	.Button:hover {
		background-color:#ffffff;
		color:#ffffff;
	}
	.Button:active {
		position:relative;
		top:1px;
		
	}

	.ButtonBack {
		border-radius:28px;
		border:1px solid #5B5555;
		display:inline-block;
		cursor:pointer;
		color:#000000;
		font-size:14;
		text-decoration:none;
		padding: 2px; 
		margin: 10px;
		text-align: center;   
		border: 1px solid #000000;
	}
	.card {
		box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 4px 5px 0 rgba(0, 0, 0, 0.19);
		width: 100%;
		padding-bottom: 10px;
	}
	.retangled-blue{
		background-color: #0056f7;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-pink{
		background-color: #FF5894;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-black{
		background-color: #050a17;
		position: absolute;
		height:15px;
		width:15px;
	}
	.calendar-day {
		width: 100px;
		min-width: 100px;
		max-width: 100px;
		height: 80px;
	}
	.calendar-table {
		margin: 0 auto;
		width: 700px;
	}
	.selected {
		background-color: #eee;
	}
	.outside .date {
		color: #ccc;
	}
	.timetitle {
		white-space: nowrap;
		text-align: right;
	}
	.event {
		border-top: 1px solid #b2dba1;
		border-bottom: 1px solid #b2dba1;
		background-image: linear-gradient(to bottom, #dff0d8 0px, #c8e5bc 100%);
		background-repeat: repeat-x;
		color: #3c763d;
		border-width: 1px;
		font-size: 0.75em;
		padding: 0 0.75em;
		line-height: 2em;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		margin-bottom: 1px;
	}
	.event.begin {
		border-left: 1px solid #b2dba1;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
	.event.end {
		border-right: 1px solid #b2dba1;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	.event.all-day {
		border-top: 1px solid #9acfea;
		border-bottom: 1px solid #9acfea;
		background-image: linear-gradient(to bottom, #d9edf7 0px, #b9def0 100%);
		background-repeat: repeat-x;
		color: #31708f;
		border-width: 1px;
	}
	.event.all-day.begin {
		border-left: 1px solid #9acfea;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
	.event.all-day.end {
		border-right: 1px solid #9acfea;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	.event.clear {
		background: none;
		border: 1px solid transparent;
	}
	.table-tight > thead > tr > th,
	.table-tight > tbody > tr > th,
	.table-tight > tfoot > tr > th,
	.table-tight > thead > tr > td,
	.table-tight > tbody > tr > td,
	.table-tight > tfoot > tr > td {
		padding-left: 0;
		padding-right: 0;
	}
	.table-tight-vert > thead > tr > th,
	.table-tight-vert > tbody > tr > th,
	.table-tight-vert > tfoot > tr > th,
	.table-tight-vert > thead > tr > td,
	.table-tight-vert > tbody > tr > td,
	.table-tight-vert > tfoot > tr > td {
		padding-top: 0;
		padding-bottom: 0;
	}
	/* The Modal (background) */
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
		position: relative;
		background-color: #fefefe;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 80%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		-webkit-animation-name: animatetop;
		-webkit-animation-duration: 0.4s;
		animation-name: animatetop;
		animation-duration: 0.4s
	}
	/* Add Animation */
	@-webkit-keyframes animatetop {
		from {top:-300px; opacity:0} 
		to {top:0; opacity:1}
	}
	@keyframes animatetop {
		from {top:-300px; opacity:0}
		to {top:0; opacity:1}
	}
	/* The Close Button */
	.close {
		color: white;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	.modal-header {
		padding: 2px 16px;
		background-color: white;
		color: white;
	}
	.modal-body {padding: 2px 16px;}
	.modal-footer {
		padding: 2px 16px;
		background-color: white;
		color: white;
	} 
</style>