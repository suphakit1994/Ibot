<style type="text/css" media="screen">
	.row{
		margin-left: unset!important;
		margin-right: unset!important;
	}
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #ffffff; 
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888; 
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555; 
	}
	.flex{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.secound_column{
		padding: 2%;
	}
	.font_bold{
		font-size:15px ;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div id="demo">
					<div class="flex">
						<h1>Wellcome</h1>
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<div style="background-color: white;height: 400px ;width: 100%;overflow-y: scroll;">
					<?php for($i=0;$i<count($get_pdf);$i++){ ?>
						<div class="row">
							<div class="col-md-12" style="border: 1px solid #D3D3D3; padding: 10px;">
								<input type="radio" name="<?php echo $i; ?>">
								<a href="#"onclick="myFunction('<?php echo $get_pdf[$i]['address_scr']; ?>')" ><?php echo $get_pdf[$i]['name']; ?></a>
							</div>
						</div>
					<?php }?>
				</div>
			</div>		
		</div>
		<div class="container-fluid">
			<div class="row secound_column">
				<div class="col-md-8">
					<p class="font_bold">
						<b>About this course</b>
					</p>
					<div class="row">
						<div class="col-sm-4">
							<p>Course</p>
							<p>Student name</p>
							<p>Teacher assisstant</p>
							<p>Lectures</p>
							<p>Student times</p>
						</div>
						<div class="col-sm-8">
							<p>Duplo course:Imagination course 1 st</p>
							<p>Tipparporn Konsri</p>
							<p>Pongsakorn Sorankorn</p>
							<p>10</p>
							<p>12 hours</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<p class="font_bold">
						<b>Certificate Request</b>
					</p>
					<div>
						<img src="../images/Logo.jpg" width="280px" height="180px" alt="Image">
					</div>
					<a class="Button" href="" style="width: 40%; padding: 1%;">Request Certificate</a> 
					<form action="index.php?app=jed&action=choosefile" method="POST">
						<label for="myfile">Select a file:</label>
						<input type="file" id="myfile" name="myfile"><br><br>
						<input type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	function myFunction(pdf) {
		document.getElementById("demo").innerHTML = '<iframe src="' + pdf + '" width="100%" height="400px"></iframe>';
	}
</script>