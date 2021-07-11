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
        .rule {
        padding: 20px;
        background-color: #f44336;
        color: white;
        width:650px;
        }

        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }
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
                <li><a href="home.php">&nbsp;&nbsp;&nbsp;<i class="far fa-address-card"></i> D.sách user</a></li>
                <li><a href="#"></a></li>
                <li><a href="them-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-file"></i> Thêm bài viết</a></li>
                <li><a href="#"></a></li>
                <li><a href="list-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-align-left"></i> List bài viết</a></li>
                <li><a href="#"></a></li>
            		<?php if($Quyenid == 1)  { ?>
                <li><a href="quan-ly.php">&nbsp;&nbsp;&nbsp;<i class="far fa-address-card"></i> Quản lý</a></li>
				<li><a href="#"></a></li>
				<!-- <li><a href="them-admin.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-edit"></i> Thêm admin</a></li>
				<li><a href="#"></a></li>
				<li><a href="edit-admin.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-backspace"></i> Sửa/block admin</a></li>
				<li><a href="#"></a></li> -->
				<li><a href="#">&nbsp;&nbsp;&nbsp;<i class="far fa-keyboard"></i> thêm sau</a></li>
				<li><a href="#"></a></li>
					<?php } ?>
            </ul>
            <?php
        include("../connect/close.php");
        ?>
        </div>
        <div id="benphai">
            <div class="rule">
		        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Chú ý!</strong> &nbsp; Tuyệt đối không được tiết lộ thông tin nội bộ ra ngoài. Xử phạt theo quy định.
            </div>
            <br/>
			<br/>
            <br/>
            <div>
	  			 <?php
  include("../connect/open.php");
  $sql = "select * from nguoi_dung";
  $result = mysqli_query($con, $sql);
  ?>
   <h1>Danh sách người dùng đã đăng ký tài khoản</h1>
  <br/>
  <br/>
  <br/>
  <div id="bang">
  <table border="0">
    <tr>
	  <th>Mã user</th>
      <th>Tên user</th>
      <th>Account user</th>
    </tr>
    <?php
    while ($user = mysqli_fetch_array($result)) {
    ?>
      <tr>
		<td><?php echo $user["maUser"]; ?></td>
        <td><?php echo $user["tenUser"] ?></td>
        <td><?php echo $user["userName"] ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
        </div>
      </div>
    <?php
        include("../connect/close.php");
    ?>
     </div>
    </div>
</body>
</html>

<?php
} else {
  header("Location: login/dang-nhap.php");
}
?>