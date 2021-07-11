<?php
if (isset($_GET["ten-admin"]) && isset($_GET["user-admin"]) && isset($_GET["pass-admin"]) && isset($_GET["quyen"])) {
  //Lấy dữ liệu trên đường dẫn
  $ten = $_GET["ten-admin"];
  $account = $_GET["user-admin"];
  $pass = $_GET["pass-admin"];
  $quyen = $_GET["quyen"];
  //Mở kết nối
  include("../../connect/open.php");
  $sql = "INSERT INTO `admin` (`tenAdmin`, `userAdmin`, `passAdmin`, `maQuyen`) VALUES ('$ten', '$account', '$pass', '$quyen');";
  mysqli_query($con, $sql);
  //Đóng kết nối
  include("../../connect/close.php");
  //Điều hướng tới trang danh sách
  header("Location: ../quan-ly.php");
}
?>