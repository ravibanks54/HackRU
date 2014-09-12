<?php
session_start();
?>

<html>
  	<body>

  	Welcome <?php echo $_SESSION['name']; ?>!<br>
    Your email address is: <?php echo $_SESSION['email']; ?><br>
    <!--You chose <?php echo $_SESSION["option1"]; ?> and <?php echo $_SESSION["option2"]; ?>. What were you thinking?!-->
    <form action="bufferPage2.php">
    	<input type="submit" value="Send Confirmation Email (defunct)">
    </form>
  	</body>
</html>
