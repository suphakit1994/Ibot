
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
		textarea {
			width: 100%;
			height: 150px;
			padding: 12px 20px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
			font-size: 16px;
			resize: none;
		}

	</style>
</head>
<body>
	<div class="page-content p-5" id="content">
		<!-- Toggle button -->
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div style="display: flex; padding: 25px;">
			<h1>ADD Text Slide</h1>
		</div>
		<form method="POST"  action="index.php?app=admin&action=text_slide_edit/add" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_POST['id'];  ?>">
			<?php  echo "====".$_POST['id']; ?>

			<div class="flex-container">
				<div class="flex-col1">
					<p class="list_detail"><b>Content Text Slide</b> </p>
					<textarea name="content" style="width: 1000px; height: 400px;"><?php echo $edit_textslide['content']; ?></textarea>
					
				</div>

			</div>
			<button type="submit" name="submit" value="Save" class="Button" style=" width: 10%; text-align: center;"> Save </button> 
		</form>
	</div>
</body>


