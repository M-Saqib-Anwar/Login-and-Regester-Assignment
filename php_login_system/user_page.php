<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
   exit;
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>User Page</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name']; ?></span></h1>
      <p>This is the user page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
</body>
</html>