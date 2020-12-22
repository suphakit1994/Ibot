
<style>
	.list_detail{
		padding-top: 3%;
	}

</style>
<body>
	<div class="page-content p-5" id="content" style="padding: 2%;">
		<!-- Toggle button -->
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

		<!-- Demo content -->
		<h1>ADD Course</h1>
		<div class="separator"></div>
		<div class="row">
			<div class="col-sm-5">
				<div class="row" style="display: flex; text-align: center;">
					<div class="col-sm-12">
						<img src="../images/art.png" alt="" width="450vh" height="225vh" style=" border-radius: 8px;">
						<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-12">
						<h1>Detail</h1>
					</div>
					<form action="view_submit" method="get" accept-charset="utf-8">
						<div class="col-sm-6">
							<p class="list_detail"><b>Category</b></p>
							<input type="" name="" class="form-control">
							<p class="list_detail"><b>Age for class</b></p>
							<input type="" name="" class="form-control">
							<p class="list_detail"><b>Lesson</b></p>
							<input type="" name="" class="form-control">
						</div>
						<div class="col-sm-6">
							<p class="list_detail"><b>Course Expension</b></p>
							<input type="" name="" class="form-control">
							<p class="list_detail"><b>Total Course</b></p>
							<input type="" name="" class="form-control">
							<p class="list_detail"><b>Price</b></p>
							<input type="" name="" class="form-control">
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<form action="view_submit" method="get" accept-charset="utf-8">
			<div class="row" style="margin-top: 5%;">
				<div class="col-sm-5">
					<div class="row" style="display: flex; text-align: center;">
						<div class="col-sm-12">
							<button type="button" >Save</button>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-12">
							<h1>Add Lesson and Quiz</h1>
						</div>
						<div class="col-sm-6">
							<div class="row" style="display: flex; text-align: center;">
								<div class="col-sm-12">
									<p><b>Lesson</b></p>
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row" style="display: flex; text-align: center;">
								<div class="col-sm-12">
									<p><b>Quiz</b></p>
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>


</body>
<script>

</script>
