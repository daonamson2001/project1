<?php
if (isset($_POST["tieu-de"]) && isset($_POST["nguoi-viet"]) && isset($_FILES["anhBia"]) && isset($_POST["noiDung"]) && isset($_POST["khu-vuc"])) {
  $tieuDe = $_POST["tieu-de"];
  $nguoiViet = $_POST["nguoi-viet"];
  $moTa = $_POST["noiDung"];
  $folder = "../img/anh-bia/";
  $tenAnh = $_FILES["anhBia"]["name"];
  $duongDan = $folder . $tenAnh;
  $ngayViet = date("Y/m/d") .' '. date("h:i:s");
  $maKhuvuc = $_POST["khu-vuc"];
  move_uploaded_file($_FILES["anhBia"]["tmp_name"], $duongDan);
  //Kết nối cơ sở dữ liệu
  include("../../connect/open.php");
  $sql = "INSERT INTO `bai_viet`(`tenBaiViet`, `maAdmin`, `noiDung`,  `anhBia`, `thoiGianViet`, `maKhuVuc`) VALUES ('$tieuDe','$nguoiViet','$moTa','$duongDan','$ngayViet','$maKhuvuc')";
  // echo $sql;
  mysqli_query($con, $sql);
  header("Location: ../list-bai-viet.php");
  
  //Đóng kết nối
  include("../../connect/close.php");
}