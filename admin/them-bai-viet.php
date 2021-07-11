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
    <!-- Nhúng JQuery -->
    <script src="edit/jquery-3.1.1.min.js"></script>
    <!-- Nhúng CKEditor -->
    <script src="edit/ckeditor/ckeditor.js"></script>
    <!-- Nhúng CKFinder -->
    <script src="edit/ckfinder/ckfinder.js"></script>
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
           <div id="tbv">
<?php
  include("../connect/open.php");
  $sql = "select * from khu_vuc";
  $sqladmin = "select * from admin";
  $sqlma = "select * from admin where userAdmin = '$admin'";
  $result = mysqli_query($con, $sql);
  $resultAdmin = mysqli_query($con, $sqladmin);
  $resultma = mysqli_query($con, $sqlma);
  $maAdmin = mysqli_fetch_array($resultAdmin);
  $adminma = mysqli_fetch_array($resultma);
  ?>
  <h1>Tạo một bài viết mới</h1>
  <br/>
  <br/>
  <br/>
  <form action="process/them-bai-viet-process.php" method="post" enctype="multipart/form-data">
    Mã khu vực :<br/>
    <select name="khu-vuc">
                <?php
                    while ($Khuvuc = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $Khuvuc["maKhuVuc"] ?>"><?php echo $Khuvuc["tenKhuVuc"] ?></option>
                <?php
                }
                ?>
                </select><br/><br/>

    Tiêu đề: <br/><input type="text" name="tieu-de" required> <br><br/>
    <!-- Người viết: --><input type="text" hidden name="nguoi-viet" value="<?php echo $adminma["maAdmin"]?>">

    Ảnh bìa: <br/><input type="file" name="anhBia"> <br><br/>

    Nội dung bài viết: <br/><br/>
    <textarea class="o-noi-dung" id="noiDung" name="noiDung" required></textarea> <br><br/><br/>
                <button class="btn btnA" onclick="thongBao()"><i class="fas fa-upload"></i> Đăng</button>
                <script>
                    function thongBao() {
                    alert("Thêm bài viết này chứ?");
                    }
                    header("Location: them-bai-viet.php")
                </script>
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