<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
    </title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
    rel="stylesheet">
  </head>
  
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js">
    </script>
    <div class="form-group">
    </div>
    <div class="container" id="Register">
      <div class="form-group">
        <label>
          Sign up:
        </label>
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
                  <a href="index (1).php">Home</a>
                </li>
                <li>
                  <a href="about.php">About</a>
                </li>
                <li>
                  <a href="login.php">Log In</a>
                </li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <h1>
        <br>
      </h1>
      <h3>
        Sign Up:
      </h3>
      <form action="bufferPage.php" method="post">
        <div class="form-group">
          <label>
            Name
          </label>
          <input type="text" class="form-control" name="name" placeholder="John Doe">
        </div>
        <div class="form-group">
          <label>
            Password
          </label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label>
            Email
          </label>
          <input type="email" class="form-control" name="email" placeholder="my.name@example.com">
        </div>
        <div class="form-group">
          <label>
            Phone
          </label>
          <input type="number" class="form-control" name="phone">
        </div>
        <button type="submit" class="btn text-center btn-success">
          Register!
        </button>
      </div>
    </form>
  </body>

</html>