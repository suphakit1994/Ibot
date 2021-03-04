<meta charset="utf-8">
<style>
	.long {
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
	}
	body{background-color: grey;}
	p{color: #000000;}
	#additionalOptions{display:none;}
</style>
<body>
	<div class="page-content p-5" id="content">
		<form action="index.php?app=admin&action=addteam_compitition">
			<div class="container">
				<?php echo $_POST['com_id']; ?>
				<div class="row">
					<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
					</button>

				</div>
				<div class="row" style="text-align-last: center;">
					<button type="submit" name= "<?php echo $_POST['com_id'] ?>" class="Button"style="width:30% ;">Go Back</button>
					<input type="hidden" name="com_id" value="<?php echo $_POST['com_id']; ?>">
					
				</div>
			</div>
		</form>
	</div>
</body>