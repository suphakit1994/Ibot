
<head>
	<meta charset="utf-8">
	<style type="text/css" media="screen">
		.flex-container{
			display: flex;
			flex-wrap: wrap;
		}
		.flex-col1{
			display: flex;
			flex: 50%;
			flex-direction: column;
			padding: 20px;

		}
		.flex-upload-pic{
			display: flex;
			flex-direction: column;
		}
		.avatar-wrapper{
			position: relative;
			height: 200px;
			width: 300px;
			margin: 50px auto;
			border-radius: 5%;
			overflow: hidden;
			box-shadow: 1px 1px 15px -5px black;
			transition: all .3s ease;
			&:hover{
				transform: scale(1.05);
				cursor: pointer;
			}
			&:hover .profile-pic{
				opacity: .5;

			}
			.profile-pic {
				height: 100%;
				width: 100%;
				transition: all .3s ease;
				&:after{
					font-family: FontAwesome;
					content: "\f007";
					top: 0; left: 0;
			/*width: 100% ;
			height: 100%;*/
			position: absolute;
			font-size: 190px;
			background: #ecf0f1;
			color: #34495e;
			text-align: center;
		}
	}
	.upload-button {
		position: absolute;
		top: 0; left: 0;
		height: 100% ;
		width: 100% ;
		.fa-arrow-circle-up{
			position: absolute;
			font-size: 234px;
			top: -17px;
			left: 0;
			text-align: center;
			opacity: 0;
			transition: all .3s ease;
			color: #34495e;
		}
		&:hover .fa-arrow-circle-up{
			opacity: 0;
		}
	}
}

</style>
</head>
<body>
	<div class="page-content p-5" id="content">
		<!-- Toggle button -->
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div style="display: flex; padding: 25px;">
			<h1>Edit Camp</h1>
		</div>
		
		

		<form method="post"  action="index.php?app=admin&action=admin_camp_edit/add" enctype="multipart/form-data">
			<input type="hidden" name="camp_id" value="<?php echo $_POST['camp_id'];  ?>">
			
			<div class="flex-container">
				<div class="flex-col1">
					<p class="list_detail"><b>Program</b> </p>
					<input type="text" name="camp_program" value="<?php  echo $campadd['camp_program']; ?>" class="form-control" required>
					<p class="list_detail" style="margin-top:  20px;"><b>Start Date</b></p>
					<input name="camp_date_start" value="<?php  echo $campadd['camp_date_start']; ?>" class="form-control" style="width: 100%;width: 224px;" type="date"  required>
					<p class="list_detail" style="margin-top:  20px;"><b>Price</b></p>
					<input type="text" name="camp_price" value="<?php  echo $campadd['camp_price']; ?>"class="form-control" OnChange="JavaScript:chkNum(this)" style="width: 100%;width: 224px; " required>
					
				</div>
				<div class="flex-col1">
					<p class="list_detail" ><b>Age for program</b></p>
					<input type="text" name="camp_Age" value="<?php  echo $campadd['camp_Age']; ?>" class="form-control" required>
					<p class="list_detail" style="margin-top:  20px;"><b>End Date</b></p>
					<input name="camp_date_end" value="<?php  echo $campadd['camp_date_end']; ?>" class="form-control" style="width: 100%;width: 224px;" type="date"  required>
					
				</div>
			</div>
			<button type="submit" name="submit" value="Save" class="Button" style=" width: 10%; text-align: center;"> Save </button> 
		</form>
	</div>
</body>
<script>
	$(document).ready(function() {
		var readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('.profile-pic').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$(".file-upload").on('change', function(){
			readURL(this);
		});

		$(".upload-button").on('click', function() {
			$(".file-upload").click();
		});
	});
</script>
<script language="JavaScript">

	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
				//x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 ;
			}

			function chkNum(ele)
			{
				var num = parseFloat(ele.value);
				ele.value = addCommas(num.toFixed(2));
			}
		</script>

