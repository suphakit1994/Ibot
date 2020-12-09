<style type="text/css" media="screen">
	.row{
		margin-left: unset!important;
		margin-right: unset!important;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div id="demo">	
				</div>
			</div>
			<div class="col-md-4">
				<div style="background-color: white;height: 500px;width: 100%;overflow-y: scroll;">
					<?php for($i=0;$i<50;$i++){ ?>
						<div class="row">
							<div class="col-md-12" style="border: 1px solid #D3D3D3; padding: 10px;">
								
								<input type="radio" name="radio">
								<a onclick="myFunction()" >Send an HTTP POST </a>
								
							</div>
						</div>
					<?php }?>
				</div>
			</div>
			<form action="index.php?app=pdf&action=insert_pdf" method="POST">
				<input type="text" name="address" id="titlee">
				<input type="submit">
			</form>
		</div>
	</div>
</body>

<script>
	function myFunction() {
		document.getElementById("demo").innerHTML = '<iframe src="pdf/oil.pdf"   width="100%" height="500px"></iframe>';
	}
</script>