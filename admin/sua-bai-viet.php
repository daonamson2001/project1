<?php
session_start();
if (isset($_SESSION["userAdmin"])) {
    $admin = $_SESSION["userAdmin"];
?>
<?php
if (isset($_GET["maBaiViet"])) {
?>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
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
    <!-- Nhúng JQuery -->
    <script src="edit/jquery-3.1.1.min.js"></script>
    <!-- Nhúng CKEditor -->
    <script src="edit/ckeditor/ckeditor.js"></script>
    <!-- Nhúng CKFinder -->
    <script src="edit/ckfinder/ckfinder.js"></script>
    <style>
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
			$khuVuc = mysqli_fetch_array($result);
			$khuVucid = $khuVuc["maQuyen"];
			?>
            <ul>
				<li><a href="#"></a></li>
                <li><a href="home.php">&nbsp;&nbsp;&nbsp;<i class="far fa-address-card"></i> D.sách user</a></li>
                <li><a href="#"></a></li>
                <li><a href="them-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-file"></i> Thêm bài viết</a></li>
                <li><a href="#"></a></li>
                <li><a href="list-bai-viet.php">&nbsp;&nbsp;&nbsp;<i class="fas fa-align-left"></i> List bài viết</a></li>
                <li><a href="#"></a></li>
            		<?php if($khuVucid == 1)  { ?>
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
           $ma_baiviet = $_GET["maBaiViet"];
           include("../connect/open.php");
           $sql = "SELECT * FROM `bai_viet` where maBaiViet=$ma_baiviet";
           $sqlKhuvuc = "SELECT * FROM `khu_vuc`";
           $result = mysqli_query($con, $sql);
           $resultKhuvuc = mysqli_query($con, $sqlKhuvuc);
           $baiviet = mysqli_fetch_array($result);
           include("../connect/close.php");
           ?>
			<h1>Sửa bài viết</h1>
        <br/>
        <br/>
        <br/>	
        <form action="process/sua-bai-viet-process.php" method="get" enctype="multipart/form-data">
        <input type="hidden" name="ma-bai-viet" value="<?php echo $baiviet["maBaiViet"]; ?>">
        <div class="edit-bai-viet">
        <table border="0">
            <tr>
                <td style="text-align: center;">Tiêu đề bài viết</td>
            </tr>
            <tr>
                <td style="text-align: center;"><input type="text" name="ten-bai-viet" value="<?php echo $baiviet["tenBaiViet"] ?>"></td>
            </tr>
            <tr>
                <td style="text-align: center;">Ảnh bìa</td>
            </tr>
            <tr>
                <td style="text-align: center;"><input type="file" name="anhBia"></td>
            </tr>
            <!-- <tr>
                <td >
                <center><img src="php echo $baiviet["anhBia"] ?>"></center>
                </td>
            </tr> -->
            <tr>
                <td style="text-align: center;">Khu vực</td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <select name="khu-vuc">
                        <?php
                            while ($khuVuc = mysqli_fetch_array($resultKhuvuc)) {
                        ?>
                        <option value="<?php echo $khuVuc["maKhuVuc"]; ?>" <?php
                                                            if ($baiviet["maKhuVuc"] == $khuVuc["maKhuVuc"]) {
                                                            echo "selected";
                                                            }
                                                            ?>>
                        <?php echo $khuVuc["tenKhuVuc"]; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2">Nội dung:</td>
            </tr>
            <tr style="text-align: center;">
                <td style="text-align:center;">
                <textarea id="noiDung" name="noiDung"><?php echo $baiviet["noiDung"] ?></textarea>
                </td>
            </tr>
        </table>
        </div>
        <br/>
        <br/>
        <button class="btn btnA"><i class="fas fa-pen"></i> Sửa</button>
        </form>
        <script>
            CKEDITOR.replace('noiDung', {
            filebrowserBrowseUrl: 'edit/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'edit/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: 'edit/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: 'edit/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'edit/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'edit/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            });
        </script>  
            </div>
            <a class="nut" href="list-bai-viet.php?&page=<?php echo $page?>">
            <button class="btn btnA"><i class="fas fa-undo"></i> Trở lại</button>
            </a>
    </div>
    </div>
</body>
</html>
<?php
} else {
  header("Location: list-bai-viet.php");
}
?>
<?php
} else {
  header("Location: ../dang-nhap.php");
}
?>