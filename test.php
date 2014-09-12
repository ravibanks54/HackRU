<html>
  <body>

    <form action="bufferPage.php" method="post">
    <table>
      <tr>
      <td>Name:</td><td>   <input type="text" name="name"></td></tr>
      <tr><td>E-mail:</td><td> <input type="text" name="email"></td></tr>
      <td>Phone:</td><td> <input type="text" name="phone"></td>
    </table>
    </br>


      <!--Optional Options:<br> 
      <input type="radio" name="option" value="option 1">Option 1<br>
      <input type="radio" name="option" value="option 2">Option 2<br>
      <input type="radio" name="option" value="option 3">Option 3<br>
      <br>
      <input type="radio" name="option2" value="option 4">Option 4<br>
      <input type="radio" name="option2" value="option 5">Option 5<br>
      <input type="radio" name="option2" value="option 6">Option 6<br>
      -->
      <input type="submit">
    </form>

    <?php
      session_start();
      ?>

  </body>
</html>
