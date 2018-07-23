<?php include("check_nologin.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Registration page">
    <meta name="author" content="">

    <title>Registration page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
  </head>


  <body class="text-center">

    <form class="form-signin" action="action.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Registration form</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <?php
      if(!empty($_GET['message'])) {
      ?>
      <h2 class="h5 mb-3 font-weight-normal">User with such email already exists</h2>
        <?php } ?>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      <input hidden="true" type="text" id="inputType" name="inputType" value="registration">
    </form>
  </body>
</html>
