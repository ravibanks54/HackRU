<?php session_start(); ?>

<html>
	<body>
		<?php
			if($_SESSION["confirmSuccess"] == true){
				echo "Success";
			}else echo "Failure";
		?>
	</body>
</html>