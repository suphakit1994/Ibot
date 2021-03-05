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
			<h1>IBOT COMPEITITIONS</h1>
		</div>
		<div class="box">
			<p>Loerm ipsum dolor sit amet.
				consectetuer adipiscing edit. sed diam<br>
			noummy nibh euismod tinciduct urt laoreet dolore mayna.</p>
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

		<div class="cont2"> 
			<div class="card">
				<?php for ($i=0; $i < count($compi) ; $i++) {  ?>
					<?php for ($j=0; $j < count($allteam); $j++) { ?>
						<div class="row" style="margin-bottom: 20px;">

							<div class="col-md-2">
								<p><b><?php echo $allteam[$j]['team_name']; ?></b></p>
							</div>

							<div class="col-md-3">
								<?php $id = $allteam[$j]['id']?>
								<?php $list_studentteam =list_studentteam($conn,$com_id,$id); ?>
								<?php for($y=0;$y<count($list_studentteam);$y++){ ?>
									<p><?php echo $list_studentteam[$y]['student_name_eng']?></p>

								<?php } ?>
							</div>

							<div class="col-md-2">
								<p><?php echo $compi[$i]['com_type']; ?></p>
							</div>
							<div class="col-md-3">
								<p><?php echo $compi[$i]['com_program']; ?></p>
							</div>
							<div class="col-md-2">
								<p><?php echo $compi[$i]['com_start_date']." - ".$compi[$i]['com_end_date'];?></p>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>

	</main>
</body>
