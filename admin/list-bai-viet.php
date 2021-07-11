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
    <link rel="stylesheet" type="text/css" href="css/phantrang.css">
    <title>Hanoi_view_edit</title>
    <style>
        a{
        text-decoration: none;
        color: red;
        }
        .fa-trash-alt{
          color:red;
        }
        .fa-pen-square{
          color: olivedrab;
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
  /* $sql = "SELECT * FROM `bai_viet`";
  $result = mysqli_query($con, $sql); */
  $limit = 5;
  $start = 0;
  $sqlDemBaiViet = "SELECT COUNT(*) as tongSoBaiViet FROM `bai_viet`";
  $resultDemBaiViet = mysqli_query($con, $sqlDemBaiViet);
  $soBaiViet = mysqli_fetch_array($resultDemBaiViet);
  $tongSoBaiViet = $soBaiViet["tongSoBaiViet"];
  $tongSoTrang = ceil($tongSoBaiViet / $limit);
  if (isset($_GET["page"])) {
    $trang = $_GET["page"];
    $start = ($trang - 1) * $limit;
  }
  $sql = "SELECT * FROM `bai_viet` ORDER BY `maBaiViet` DESC LIMIT $start,$limit";
  $result = mysqli_query($con, $sql);
  ?>
  <h1>List bài viết đã đăng</h1>
  <br/>
  <br/>
  <br/>
  <div id="list-bai-viet">
  <table border="0">
    <tr>
	  <th>Mã bài viết</th>
	  <th>Tên bài viết</th>
	  <th>Thời gian viết</th>
    <th>Mã khu vực</th>
	  <th>Tên người viết</th>
    <th colspan="2">Tác vụ</th>
    </tr>
    <?php
    while ($baiViet = mysqli_fetch_array($result)) {
        $manguoiviet = $baiViet["maAdmin"];
        $sqlnguoiviet = "SELECT `tenAdmin` FROM `admin` WHERE `maAdmin` = '$manguoiviet' ";
        $resultnguoiviet = mysqli_query($con, $sqlnguoiviet);
        $nguoiviet = mysqli_fetch_array($resultnguoiviet);
      if(isset($_GET['page'])){
        $page = $_GET['page'];
       
      }
    ?>
      <tr>
        <td><?php echo $baiViet["maBaiViet"] ?></td>
        <td><?php echo $baiViet["tenBaiViet"] ?></td>
        <td><?php echo $baiViet["thoiGianViet"] ?></td>
        <td><?php echo $baiViet["maKhuVuc"] ?></td>
        <td><?php echo $nguoiviet["tenAdmin"]  ?></td>
        <td><a href="sua-bai-viet.php?maBaiViet=<?php echo $baiViet["maBaiViet"] ?>&page=<?php echo $page?>"><i class="fas fa-pen-square"></i></a></td>
        <td><a href="process/xoa-bai-viet.php?maBaiViet=<?php echo $baiViet["maBaiViet"]?>" onclick="return confirm('Bạn thực sự muốn làm điều này chứ?')"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <br/>
	</div>
        </div>
        <div class="phanTrang">
          <?php
          for ($i = 1; $i <= $tongSoTrang; $i++) {
          ?>
            <a class="soTrang" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
          <?php
          }
          ?>
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