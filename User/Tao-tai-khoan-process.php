<?php
if (isset($_GET["tenUser"]) && isset($_GET["userName"]) && isset($_GET["passWord"]) && isset($_GET["mailUser"])) {
    $tenUser = $_GET["tenUser"];
    $mailUser = $_GET["mailUser"];
    $userName = $_GET["userName"];
    $passWord = $_GET["passWord"];
    include "../Connect/Open.php";
    // Ktra userName có tổn tại hay không
    $sqlkiemtra = "SELECT * FROM nguoi_dung WHERE userName='$userName'";
    $result = mysqli_query($con, $sqlkiemtra);
    $check = mysqli_num_rows($result);
    $sql = "INSERT INTO `nguoi_dung`(`tenUser`,`mailUser`, `userName`, `passWord`) VALUES ('$tenUser','$mailUser', '$userName', '$passWord')";
    mysqli_query($con, $sql);
    include "../Connect/Close.php";
    if ($check == 1) {
        header("Location: Tao-tai-khoan.php?err=1");
    } else {
        header("Location: Dang-nhap.php");
    }
} else {
    header("Location: Dang-nhap.php");
}