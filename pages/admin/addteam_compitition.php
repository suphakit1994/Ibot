 <meta charset="utf-8">
 <style>
 	.long {
 		text-overflow: ellipsis;
 		white-space: nowrap;
 		overflow: hidden;
 	}
 	body{background-color: grey;}
 	p{color: #fff;}
 	#additionalOptions{display:none;}
 </style>
 <body>
 	<div class="page-content p-5" id="content">
 		<div class="container">
 			<div class="row">
 				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
 				</button>
 				<div class="col-sm-12">
 					<h1 style="margin-top: 5%;">Team Compeititions</h1>
 				</div>
 				
 				<div class="row" style="margin-top: 5%;"	>
 					
 				</div>

 				<select  class="form-control" name = "com_type" style="width: 50%"> 
 					<p><option>All</option></p>
 					<?php for($i=0 ; $i< count($compitype) ; $i++){?>
 						<p><option value="<?php echo $compitype[$i]['compi_name']; ?>"><?php echo $compitype[$i]['compi_name']; ?>
 					</option> </a></p>
 				<?php } ?>
 			</select> 

 			<div class="row" style="margin-top: 5%; border-bottom: solid #eeeeee 1px;">
 				<div class="col-md-6">
 					<b>Full Name</b>
 				</div>
 				<div class="col-md-6">
 					<b>Promgram</b>
 				</div>
 			</div>
 			<?php for($i=0 ; $i< count($liststudent); $i++){ ?>
 				<div class="row"  style="margin-top: 5%;">
 					<div class="col-md-6">
 						<p><?php echo $liststudent[$i]['student_name_th'] ; ?></p>
 					</div>
 					<div class="col-md-6">
 						<p><?php echo $liststudent[$i]['com_type'] ; ?></p>
 					</div>
 				</div>
 			<?php } ?>
 			<!-- <div class="Button" style="padding: 1%; width: 20%; ">Test</div> 
 		</div>
 		
 		<?php  ?>
 		



 		<div class="col-md-12">
 			<div class="form-group">
 				<select class="form-control" name="options" id="options" placeholder="Options">
 					<option value="">Select an option...</option>
 					<?php for($i=0 ; $i< count($compitype) ; $i++){?>
 						<option name="compi_name" value="<?php echo $compitype[$i]['compi_name']; ?>"><?php echo $compitype[$i]['compi_name']; ?></option>
 					<?php } ?>
 				</select>
 			</div>
 			<p id = "demo"></p>
 			<div class="form-group">
 				<select class="form-control" name="additionalOptions" id="additionalOptions" placeholder="Additional Options">

 					<option value="">Select an option...</option>
 					<option value="1">Option 1</option>
 					<option value="2">Option 2</option>
 					<option value="3">Option 3</option>
 					<option value="4">Option 4</option>
 					<option value="5">Option 5</option>
 				</select>
 			</div>
 		</div>
 	</div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

 <script>
 	$( "#options" ).change(function() {
 		var x = document.getElementById("options").value;
 		document.getElementById("demo").innerHTML = "You selected: " + x;
 		$("#additionalOptions").show();
 	});
 </script>

</body>

-->