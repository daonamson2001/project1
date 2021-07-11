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
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <title>Hanoi_view_edit</title>
    <style>
    .fa-check-circle{
      color:#7ad85e;
    }

    .fa-times-circle{
      color:red;
    }

    a.nut{
      display: inline-table;
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
            <br/>
			<br/>
            <br/>
           <div>
				 <?php
  include("../connect/open.php");
  $sql = "select * from admin";
  /* $sqlQuyen = "select * from quyen"; */
  $result = mysqli_query($con, $sql);
  /* $resultQuyen = mysqli_query($con, $sqlQuyen);
  $maQuyen = mysqli_fetch_array($resultQuyen);
  $tenQuyen = $maQuyen["tenQuyen"]; */
  $index = 1;
  ?>
  <h1>Danh sách Admin</h1>
  <br/>
  <br/>
  <br/>
  <div id="bang">
  <table border="0">
    <tr>
	  <th>Stt</th>
	  <th>Tên admin</th>
	  <th>Tên account admin</th>
	  <th>Quyền</th>
    <th>Trạng thái</th>
    </tr>
    <?php
    while ($ad = mysqli_fetch_array($result)) {
      $block = $ad["block"];
    ?>
      <tr>
		<td><?php echo $index; $index++; ?></td>
		<td><?php echo $ad["tenAdmin"] ?></td>
		<td><?php echo $ad["userAdmin"] ?></td>
		<td><?php if ($ad["maQuyen"] == 0){ ?> Mod <?php } else { ?> Admin <?php } ?></td>
    <td>
    <?php if($block == 0) {  ?>
    <i class="far fa-check-circle"> active</i>
    <?php } else { ?>
    <i class="far fa-times-circle"> expire</i>
    <?php } ?>
    </td>
      </tr>
    <?php
    }
    ?>
  </table>
	</div>
        </div>
        <br/><br/><br/>
        <div class="phim-chuc-nang"> 
        <a class="nut" href="edit-admin.php"> 
        <button class="btn btnA"><i class="fas fa-edit"></i> Edit</button>
        </a>
        <a class="nut" href="them-admin.php">
        <button class="btn btnA"><i class="far fa-plus-square"></i> Thêm quản trị viên</button>
        </a>
        <a class="nut" href="#">
        <button disabled class="btn btnA">thêm sau</button>
        </a>
        </div>
      </div>
    </div>
  <?php
  include("../connect/close.php");
  ?>
    </div>
</body>
</html>

<?php
} else {
  header("Location: login/dang-nhap.php");
}
?>