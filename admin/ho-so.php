<?php
session_start();
if (isset($_SESSION["userAdmin"])) {
    $admin = $_SESSION["userAdmin"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Hanoi_view_edit</title>
    <style>
    
    </style>
</head>
<body>
    <header>
		<div class="logo">
    <a href="home.php"><img src="img/logo.png"></a>
		</div>
		<nav>
			<li><a href="ho-so.php"><i class="fas fa-id-badge">
        <strong> 
          <?php echo $_SESSION['userAdmin']; ?> 
        </strong>
        </i></a></li>
			<li><a href="login/dang-xuat.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
		</nav>
	</header>
    <div id="container">
		<div id="bentrai">
            <?php
            include("../connect/open.php");
            $sql = "SELECT `maQuyen` FROM `admin` WHERE userAdmin = '$admin'";
            $result = mysqli_query($con, $sql);
			$quyen = mysqli_fetch_array($result);
			$Quyenid = $quyen["maQuyen"];
			?>
            <ul>
				<li><a href="#"></a></li>
                <li><a href="home.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-home"></i> Quay lại home</a></li>
                <li><a href="#"></a></li>
                <!-- <li><a href="them-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-file"></i> Thêm bài viết</a></li>
                <li><a href="#"></a></li>
                <li><a href="list-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-align-left"></i> List bài viết</a></li>
                <li><a href="#"></a></li> -->
            		<?php if($Quyenid == 1)  { ?>
                <!-- <li><a href="quan-ly.php">&nbsp;&nbsp;&nbsp;<i class="far fa-address-card"></i> Quản lý</a></li>
				<li><a href="#"></a></li> -->
				<!-- <li><a href="them-admin.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-edit"></i> Thêm admin</a></li>
				<li><a href="#"></a></li>
				<li><a href="edit-admin.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-backspace"></i> Sửa/block admin</a></li>
				<li><a href="#"></a></li> -->
				<!-- <li><a href="#">&nbsp;&nbsp;&nbsp;<i class="far fa-keyboard"></i> thêm sau</a></li>
				<li><a href="#"></a></li> -->
					<?php } ?>
            </ul>
            <?php
        include("../connect/close.php");
        ?>
        </div>
        <div id="benphai">
        <center>
        <img class="anhchongtroi" src="img/btweb.jpg">
        <br/> Đang trong quá trình nâng cấp !!!
        </center>
        </div>
    </div>
</body>
</html>

<?php
} else {
  header("Location: login/dang-nhap.php");
}
?>