<?php
if (isset($_POST["passWord"]) && isset($_POST["maUser"])) {
    $passWord = $_POST["passWord"];
    $maUser = $_POST["maUser"];
    $connguoidung = mysqli_connect("localhost", "root", "", "hanoi_view");
    $sqlnguoidung = "UPDATE nguoi_dung SET passWord='$passWord' WHERE maUser='$maUser'";
    mysqli_query($connguoidung, $sqlnguoidung);
    mysqli_close($connguoidung);
    header("Location: Thong-tin.php");
} else {
    header("Location: Thong-tin.php");
}