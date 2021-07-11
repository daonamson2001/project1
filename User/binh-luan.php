<?php
session_start();
if (isset($_POST["binhLuan"]) && isset($_POST["thoiGianBinhLuan"]) && isset($_POST["maUser"]) && isset($_POST["maBaiViet"])) {
    $user = $_SESSION["tenUser"];
    $binhLuan = $_POST["binhLuan"];
    $thoigianbinhluan = $_POST["thoiGianBinhLuan"];
    $con = mysqli_connect("localhost", "root", "", "hanoi_view");
    $sql = "SELECT maUser FROM nguoi_dung where tenUser='$user'";
    $result = mysqli_query($con, $sql);
    $bai_viet = mysqli_fetch_array($result);
    $mama = $bai_viet["maUser"];
    $maUser = $_POST["maUser"];
    $maBaiViet = $_POST["baiviet"];
    include "../Connect/Open.php";
    $sql = "INSERT INTO `binh_luan`(`thoiGianBinhLuan`, `binhLuan`, `maUser`, `maBaiViet`) VALUES ('$thoigianbinhluan','$binhLuan','$mama','$maBaiViet')";
    mysqli_query($con, $sql);
    include "../Connect/Close.php";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}