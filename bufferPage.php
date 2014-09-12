<?php
	session_start();
	//$name = $_POST['name'];
	//$email = $_POST['email'];

?>

<html>
  <body>
    <!--<form action="bufferPage2.php" >
      This is the first buffer page.<br>
      <input type="submit">
    </form>-->
  </body>
  <?php 
  	if(isset($_POST["name"])) $_SESSION['name'] = $_POST["name"];
  	if(isset($_POST["email"])) $_SESSION['email'] = (string)$_POST["email"]; 
  	if(isset($_POST["phone"])) $_SESSION['phone'] = (string)$_POST["phone"];
  	if(isset($_POST["password"])) $_SESSION['password'] = $_POST["password"];

  	$b = true;
  	/*if(preg_match("#^\w+@\w+\.(com|org|net|edu|gov)$#", $_SESSION['email']) && preg_match("#^[0-9]+$#",$_SESSION['phone'])){
  		//header("Location: http://localhost/formResponse2.php?");
  	}else{
  		$b = false;
  		echo "<form action=\"test.php\">";
      	echo "Invalid Email Address/Phone Number.<br>";
      	echo "<input type=\"submit\" value=\"Return to Form\">";
    	echo "</form>";
  	}*/
	  	mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("ru_db") or die(mysql_error());
	if($b){
		mysql_query("INSERT INTO users(username, email, password, phone) VALUES('$_SESSION[name]','$_SESSION[email]','$_SESSION[password]', '$_SESSION[phone]')");
		Print "Your information was added.";
		echo "<form action=\"profile.php\">";
      	echo "<br>";
      	echo "<input type=\"submit\" value=\"Go to your Profile page!\">";
    	echo "</form>";
	}
  ?>
</html>
