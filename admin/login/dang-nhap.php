<?php
session_start();
if (isset($_SESSION["userAdmin"])) {
  header("Location: ../home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-login.css">
    <title>Login</title>
    <style>
    #error {
      color: red;
    }
  </style>
</head>
<body>
    <form action="dang-nhap-process.php" method="post">
    <div class="login-box">
        <h1>Đăng nhập</h1>
        <div class="textbox">
            <i class="fas fa-users-cog"></i>
            <input type="text" placeholder="Username" name="user" required>
        </div>
        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" name="pass" required>
        </div>
         <?php
    if (isset($_GET["err"])) {
      echo "<div id='error'>Sai tên đăng nhập hoặc mật khẩu <div>";
    }
    ?>
        <button class="btn">Truy cập</button>
    </div>
    </form>
</body>
</html>