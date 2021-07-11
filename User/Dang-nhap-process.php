<?php
session_start();
if (isset($_POST["userName"]) && isset($_POST["passWord"])) {
    $userName = $_POST["userName"];
    $passWord = $_POST["passWord"];
    include "../Connect/Open.php";
    $sql = "SELECT * FROM nguoi_dung WHERE userName='$userName' AND passWord='$passWord'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($result);
    $check = mysqli_num_rows($result);
    if ($check == 0) {
        header("Location: Dang-nhap.php?err=1");
    } else {
        $_SESSION["userName"] = $userName;
        $_SESSION["tenUser"] = $user["tenUser"];
        if (isset($_POST["check"])) {
            setcookie("userName", "$userName", time() + 84600 * 2);
            setcookie("passWord", "$passWord", time() + 84600 * 2);
        } else {
            setcookie("userName", "$userName", time() - 1);
            setcookie("passWord", "$passWord", time() - 1);
        }
        header("Location: Trang-chu-user.php");
    }
    include "../Connect/Close.php";
} else {
    header("Location: Dang-nhap.php");
}