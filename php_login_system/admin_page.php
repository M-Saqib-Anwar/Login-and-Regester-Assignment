<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
   exit;
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Admin Page</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name']; ?></span></h1>
      <p>This is the admin page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
</body>
</html>