<style>
	.file-input__input {
		width: 0.1px;
		height: 0.1px;
		opacity: 0;
		overflow: hidden;
		position: absolute;
		z-index: -1;
	}

	.file-input__label {
		cursor: pointer;
		display: inline-flex;
		align-items: center;
		border-radius: 4px;
		font-size: 14px;
		font-weight: 600;
		color: #fff;
		font-size: 14px;
		padding: 5px 6px;
		background-color: #4245a8;
		box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
	}

	.file-input__label svg {
		height: 16px;
		margin-right: 4px;
	}
</style>
<body>
	<div class="page-content p-5" id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				</div>
				<div class="col-md-12">
					<div><h1>EDIT DETAIL</h1></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="border-radius: 50%;" src="../images/DSC01298-1.png" alt="Paris" width="200px" height="200px">
				</div>
				<div class="col-md-9" style="padding-top: 65px;">
					<div class="row">
						<div class="col-sm-3">
							<p><b>Firs tname</b></p>
							<input class="form-control" type="text" value=" ดร. นรา">
						</div>
						<div class="col-sm-3">
							<p><b>Last tname</b></p>
							<input class="form-control" type="text" value="สมัตถภาพงศ์">
						</div>
						<div class="col-sm-3">
							<p><b>Position</b></p>
							<input class="form-control" type="text" value="IE Thai software">
						</div>
					</div>
					<div class="row" style="margin-top: 50px;">
						<div class="col-sm-12">
							<div><h1>Contact</h1></div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p><b>Email Address</b></p>
								<p><b>progeammer@iethaisoftware.com</b></p>
							</div>
							<div class="col-sm-6">
								<p><b>Telephone</b></p>
								<p><b>(+66)88 345 9999</b></p>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 50px;">
						<div class="col-sm-12">
							<div><h1>Work time</h1></div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<p><b>Date</b></p>
								<input style="" type="date" id="" name="">
							</div>
							<div class="col-sm-3">
								<p><b>Time</b></p>
								<input type="time" id="" name="">
							</div>
							<div class="col-sm-3">
								<label><p><b>Pay</b></p></label>
								<input type="text" id="" name="">
							</div>
						</div>
						<div class="col-sm-12" style="margin-top: 10px;">
							<div class="row">
								<div class="file-input">
									<input
									type="file"
									name="file-input"
									id="file-input"
									class="file-input__input"
									/>
									<label class="file-input__label" for="file-input">
										<svg
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="upload"
										class="svg-inline--fa fa-upload fa-w-16"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 512 512"
										>
										<path
										fill="currentColor"
										d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
										></path>
									</svg>
									<span>Upload file</span></label
									>
								</div>
							</div>
						</div>
						<div class="col-sm-12" style="margin-top: 10px;">
							<div class="row">
								<input class="Button" type="button" id="" name="" value="Save" style="width: 10%;">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>