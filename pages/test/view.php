
<body>
	<div class="container">
		<a href="index.php?app=test&action=test1" class="Button">test</a>	
	</div>
	<?php 
	$cars = array("BMW","Ford","NMD");
	$arraylength = count($cars);
	for($x=0; $x<$arraylength; $x++){
		echo $cars[$x];
		echo "<br>";
	}


	$q = 10;
	$w = 20;

	function addition(){
		$GLOBALS['z'] = $GLOBALS['q'] + $GLOBALS['w'];
	}

	addition();
	echo $z;

	?>

</body>
