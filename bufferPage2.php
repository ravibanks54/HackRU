<!--Sends an confirmation email-->

<?php
	session_start();
?>

<html>
  <body>
    <?php
    	$_SESSION["confirmSuccess"] = false;
    	if(mail($_SESSION["email"], "Confirmation E-Mail", "Hi there," . $_SESSION["name"] . ". This is a confirmation email.")) $_SESSION["confirmSuccess"] = true;
    ?>
    <?php header("Location: confirm.php?") ?>
  </body>
</html>
