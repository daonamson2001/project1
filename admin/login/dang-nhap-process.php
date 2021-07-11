<?php
session_start();
if (isset($_POST["user"]) && isset($_POST["pass"])) {
  //Lấy dữ liệu
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  //Mở kết nối 
  include("../../connect/open.php");
  //Query
  $sql = "SELECT * FROM `admin` WHERE userAdmin='$user' AND passAdmin='$pass'";
  $result = mysqli_query($con, $sql);
  $block = mysqli_fetch_array($result);
  $banned = $block["block"];
  $check = mysqli_num_rows($result);
  if ($check == 0) {
    header("Location: dang-nhap.php?err=1");
  } else {
    if($banned == 0) {
    $_SESSION["userAdmin"] = $user;
    header("Location: ../home.php");
  }else {
    header("Location: banned.php");
  } }
  //Đóng 
  include("../../connect/close.php");
} else {
  header("Location: dang-nhap.php");
}
?>