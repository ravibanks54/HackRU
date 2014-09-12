
<html>
	<body>
	<?php
	$x=0;
	while($x<100){
		echo "<form action = \"http://www.google.com\">";
			echo "<input type=\"submit\" value = \"google.com", $x, "\">";
		echo "</form>";
		echo "<form action = \"http://www.yahoo.com\">";
			echo "<input type=\"submit\" value = \"yahoo.com\">";
		echo "</form>";
		echo "<form action = \"http://www.cnn.com\">";
			echo "<input type=\"submit\" value = \"cnn.com\">";
		echo "</form>";
		echo "<form action = \"http://www.rutgers.edu\">";
			echo "<input type=\"submit\" value = \"rutgers.edu\">";
		echo "</form>";
		$x++;
	}
	?>
	</body>
</html>