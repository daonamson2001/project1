<?php
session_start();
if (isset($_SESSION["userName"])) {
    header('Location: Trang-chu.php');
} else {
    $check = false;
    if (isset($_COOKIE["userName"])) {
        $userName = $_COOKIE["userName"];
        $passWord = $_COOKIE["passWord"];
        $check = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ha Noi View</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Times New Roman;
    }

    header {
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/hn.jpg);
    }

    ul {
        float: right;
        list-style-type: none;
        margin-top: 25px;
    }

    ul li {
        display: inline-block;
    }

    ul li a {
        text-decoration: none;
        color: #fff;
        padding: 5px 20px;
        border: 1px solid transparent;
        transition: 0.6s ease;
    }

    ul li a:hover {
        background-color: #fff;
        color: black;
    }

    ul li.active a {
        background-color: #fff;
        color: black;
    }

    .logo img {
        float: left;
        width: 240px;
        height: auto;
    }

    .err1 {
        color: white;
        top: -35px;
        position: relative;
    }

    input[type="text"] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        outline: none;
        padding: 12px 14px;
        position: relative;
        top: 30px;
        left: 0px;
    }

    input[type="text"]:focus {
        width: 200px;
        background-color: lightpink;
    }

    input[type="text"] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 20px;
        outline: none;
        padding: 12px 14px;
        transition: 0.6s ease-in-out;
    }

    input[type="password"] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        outline: none;
        padding: 12px 14px;
        position: relative;
        top: 30px;
        left: 0px;
    }

    input[type="password"]:focus {
        width: 200px;
        background-color: lightpink;
    }

    input[type="password"] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 20px;
        outline: none;
        padding: 12px 14px;
        transition: 0.6s ease-in-out;
    }

    #error {
        color: red;
        font-size: 16px;
        position: relative;
        top: 50px;
    }

    #error:hover {
        color: #FF0099;
    }

    a {
        color: white;
        font-size: 18px;
        padding: 10px;
        position: relative;
        top: 0px;

    }

    a:hover {
        color: pink;
    }

    button {
        font-size: 17px;
        width: 150px;
        padding: 7px;
        background-color: white;
        color: black;
        border: 2px solid pink;
        transition-duration: 0.4s;
    }

    button:hover {
        background-color: pink;
        color: white;
        border: 2px solid white;
    }

    #form {
        text-align: center;
        position: relative;
        top: -30px;
    }

    .dangnhap {
        position: relative;
        top: 65px;
        left: 0px;
    }

    #error1 {
        position: relative;
        top: 6px;
    }

    #err {
        position: relative;
        right: 80px;
        top: -5px;
    }

    #err1 {
        position: relative;
        left: 80px;
        top: -25px;
    }

    #err3 {
        position: relative;
        font-size: 18px;
        color: white;
        top: 43px;

    }

    .tai-khoan {
        position: relative;
        font-size: 18px;
        color: white;
        top: 10px;
        right: 30px;

    }

    #ten {
        position: relative;
        top: 10px;
    }

    .mat-khau {
        position: relative;
        font-size: 18px;
        color: white;
        top: 40px;
        right: 43px;
    }

    #pass {
        position: relative;
        top: 40px;
    }
    </style>
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
                <addr title="Logoo"><img src="img/logo.png"></addr>
            </div>
            <ul>
                <li><a href="Trang-chu.php">Trang chủ</a></li>
                <li><a href="Dang-nhap.php">Đăng nhập</a></li>
            </ul>
        </div>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <center>
            <div class="err1">
                <h1>Kết nối với chúng tôi để có trải nhiệm tuyệt vời hơn !</h1>
        </center>
        <form id="form" action="Dang-nhap-process.php" method="post">
            <center>
                <div class="tai-khoan"><b>Tên tài khoản :</b></div>
                <input type="text" id="ten" name="userName" value="<?php if ($check) {
                                                                        echo $userName;
                                                                    }
                                                                    ?>">


                <div class="mat-khau"><b>Mật khẩu :</b></div>
                <input type="password" id="pass" name="passWord" value="<?php if ($check) {
                                                                            echo $password;
                                                                        }
                                                                        ?>">
            </center>

            <br />
            <div id="err3"><input type="checkbox" name="check" <?php if ($check) {
                                                                    echo "checked";
                                                                } ?>> Ghi nhớ mật khẩu </div>
            <button class="dangnhap">Đăng nhập</button>
        </form>
        <center>
            <?php
            if (isset($_GET["err"])) {
                echo "<div id='error'> Sai tên đăng nhập hoặc mật khẩu ! </div>";
            }
            ?>
        </center>
        <br /><br /><br />
        <center>
            <table border="0">
                <tr>
                    <td>
                        <div id="error1">
                            <div id="err"><a href="#">
                                    <addr title="Đang trong quá trình nâng cấp. Xin cảm ơn !">Quên mật khẩu</addr>
                                </a>
                            </div>
                            <div id="err1"><a href="Tao-tai-khoan.php">Tạo tài khoản</a></div>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
        </div>

    </header>
</body>

</html>