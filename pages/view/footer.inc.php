<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		font-size: 30px;
		font-weight: regular(400);
	}
	h2{
		font-family: 'Poppins', sans-serif;
		font-size: 20px;
		font-weight: regular(300);
		line-height: 36px;
	}
	h3{	
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
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
		font-size: 13px;
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
	.Button:hover {
		background-color:#ffffff;
		color:#ffffff;
	}
	.Button:active {
		position:relative;
		top:1px;
	}

</style>