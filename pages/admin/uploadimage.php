
<!DOCTYPE html>
<html>
<body>
	<div class="page-content p-5" id="content" style="padding: 2%;">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<form action="index.php?app=admin&action=euploadimage" method="post" enctype="multipart/form-data" >

			<input type="file" name="uploadfile" />
			<input type="submit" name="uploadfilesub" value="upload" />
		</form>
	</div>

	
</body>
</html>