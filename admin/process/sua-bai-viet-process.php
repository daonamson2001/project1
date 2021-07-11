<?php
if (isset($_GET["ma-bai-viet"]) && isset($_GET["ten-bai-viet"]) && isset($_GET["khu-vuc"]) && isset($_GET["noiDung"])) {
$maBaiViet = $_GET["ma-bai-viet"];
$tenBaiViet = $_GET["ten-bai-viet"];
$folder = "../img/anh-bia/";
$tenAnh = $_FILES["anhBia"]["name"];
$duongDan = $folder . $tenAnh;
$khuVuc = $_GET["khu-vuc"];
$noiDung = $_GET["noiDung"];
move_uploaded_file($_FILES["anhBia"]["tmp_name"], $duongDan);
include("../../connect/open.php");
$sql = "UPDATE `bai_viet` SET `tenBaiViet`='$tenBaiViet', `anhBia`='$duongDan', `maKhuVuc`='$khuVuc', `noiDung`='$noiDung' WHERE `bai_viet`.`maBaiViet` = $maBaiViet;";
mysqli_query($con, $sql);
include("../../connect/close.php");
header("Location: ../list-bai-viet.php");
} else {
header("Location: ../list-bai-viet.php");
}
?>