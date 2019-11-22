<html>
<body>
	<form action = "work09_2.php" method = "POST">
		<?php
			for ($i = 0; $i <= 5; $i++){
				print "$i<input type= checkbox name = check[] value = $i><br>";
			}
		?>
		<input type = "submit" value = "send">
	</form>
</body>
</html>