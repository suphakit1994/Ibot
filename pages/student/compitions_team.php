<style>
	body {
		margin: 0;
		padding: 0;
		height: 100%;
	}

	:root {
		--brand-color: #c8c8c8;
	}

	body {
		display: flex !important;
		flex-direction: column;
	}

	main {
		flex: 1;
		display: flex !important;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.box {
		text-align: center;
		width: 45vw;
		margin: 5px;
		padding: 10px;
	}
	.cont2{
		width: 85vw;
		margin: 5px;
		padding: 10px;
	}
	.card{
		box-shadow: unset !important;
		width: ;
		padding-bottom: unset !important;
	}

	@media only screen and (max-width: 600px) {
		header ul {
			background-color: var(--brand-color);
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-evenly;
			margin: 0;
			padding: 0;
		}
	}
</style>
<body>
	<main>
		<div class="box">
			<h1>IBOT COMPITITIONS</h1>
		</div>
		<div class="box">
			<p>Box 1Box 1Box 1Box 1BoxBox 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1Box 1</p>
		</div>
		<div class="cont2" style="margin-top: 50px;">
			<div class="card">
				<div class="row">
					<div class="col-md-2">
						<p><b>Team</b></p>
					</div>
					<div class="col-md-3">
						<p><b>Members</b></p>
					</div>
					<div class="col-md-2">
						<p><b>Competitions</b></p>
					</div>
					<div class="col-md-3">
						<p><b>Program</b></p>
					</div>
					<div class="col-md-2">
						<p><b>Date</b></p>
					</div>
				</div>
			</div>
		</div>
		<?php for($i=0; $i<5; $i++){?>
			<div class="cont2"> 
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<a href="#" style="color:blue;"><p><b>Ie Thaisoftware</b></p></a>
						</div>
						<div class="col-md-3">
							<?php for($j=0; $j<3;$j++){ ?>
								<p>JEDSADA</p>
							<?php }?>
						</div>
						<div class="col-md-2">
							<p>Rugular Category</p>
						</div>
						<div class="col-md-3">
							<p>Elementary( less than 12 years old )</p>
						</div>
						<div class="col-md-2">
							<p>26 Oct 2020 - 30 Oct 2020</p>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</main>
</body>
