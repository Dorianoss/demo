<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h2 class="h5 mb-3 font-weight-normal">Hello, user. Your email is <?php echo $_SESSION['email']?> </h2>
</div>
<a href="logoff.php" class="btn btn-primary btn-lg" target="_self">Log off</a>
</div>
</body>
</html>