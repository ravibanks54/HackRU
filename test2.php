<?php
session_start();
?>

<html>
  <body>

    <form action= "formGet()"" method="post">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>


      Optional Options:<br> 
      <input type="radio" name="option" value="option 1">Option 1<br>
      <input type="radio" name="option" value="option 2">Option 2<br>
      <input type="radio" name="option" value="option 3">Option 3<br>

      <input type="radio" name="option2" value="option 4">Option 4<br>
      <input type="radio" name="option2" value="option 5">Option 5<br>
      <input type="radio" name="option2" value="option 6">Option 6<br>

      <input type="submit">
    </form>


<?php
  function formGet()
  {
    //will not work from action....
  }

  writeMsg(); // call the function
?>

  </body>
</html>
