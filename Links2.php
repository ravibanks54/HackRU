<html>
	<body>
		<?php
			$x = 0;
			echo "<table>";
			while($x < 100){
				echo "<tr>";
				$y = 0;
				while($y < 100){
					echo "<td>";
						echo "<form action = \"", (100*$x+$y), ".html\">";
						echo "<input type=\"submit\" value = \"", (100*$x+$y), "\">";
						echo "</form>";
					echo "</td>";
					$y++;
				}
				$x++;
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>
