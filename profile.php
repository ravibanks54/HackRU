<?php session_start(); 
    $_SESSION['reservation'] = $_SESSION['points'] = 0;
    if(isset($_POST['reservation'])) $_SESSION['reservation'] = (int)$_POST['reservation'];
    if(isset($_POST['points'])) $_SESSION['points'] = (int)$_POST['points'];
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <title>
      Starter Template for Bootstrap
    </title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
    rel="stylesheet">
  
    <link href="css/screen-9d062e9d29.css" rel="stylesheet">
</head>
  
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index (1).php">Scarlet Tickets</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li class="active">
              <a href="profile.php">My Account</a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
    <h1>
      <br>
    </h1>
    <div class="container">
      <div class="starter-template">
        <h1>
          Profile Name
        </h1>
        <p class="lead">
          Total Points Recorded: <?php echo($_SESSION['points'] + $_SESSION['reservation'] + 1 + rand(12, 12)); ?>
          <!--&lt;POINTS PLACEHOLDER&gt;-->
        </p>
        <button type="submit" class="btn btn-primary">
          Edit Account Settings
        </button>
        <a class="btn btn-primary" href="input.php">Track Points</a>
                <a class="btn btn-primary" href="reminder.php">Remind Me</a>

      </div>
      <h3>
        Log
      </h3>
      <table class="table">
        <tbody>
          <tr>
            <td>
              <b>
          Game
        </b>
            </td>
            <td>
              <b>
          Points Earned
        </b>
            </td>
          </tr>
          <tr>
            <td>
              Howard
            </td>
            <td>
              <button type="submit" class="btn pull-right btn-danger">
                Remove
              </button>
              4 points
            </td>
          </tr>
          <tr>
            <td>
              Michigan
            </td>
            <td>
              <button type="submit" class="btn pull-right btn-danger">
                Remove
              </button>
              5 points
            </td>
          </tr>
          <tr>
            <td>
              Indiana
            </td>
            <td>
              3 Points
              <a href="#" class="btn pull-right btn-danger">Remove</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"
    >
    </script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"
    >
    </script>
  </body>

</html>