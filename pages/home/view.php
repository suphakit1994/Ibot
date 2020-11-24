
<body>
	<div class="container">
		
		<table style="width:100%">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th> 
				<th>Age</th>
			</tr>
			<?php for ($i=0; $i < count($cus) ; $i++) {  ?>
				<tr>
					<td><?php echo $cus[$i]['name']; ?></td>
					<td><?php echo $cus[$i]['user']; ?></td>
					<td><?php echo $cus[$i]['passwort']; ?></td>
				</tr>
			<?php }?>
		</table>
	</div>

</body>
