<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ha Noi View</title>
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

    input[type="text"]:focus {
        width: 200px;
    }

    input[type="text"] {
        width: 180px;
        font-size: 14px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 20px;
        outline: none;
        padding: 12px 14px;
        transition: 0.6s ease-in-out;
    }

    input[type="text"]:focus {
        width: 230px;
        background-color: lightpink;
    }

    input[type="password"]:focus {
        width: 200px;
    }

    input[type="password"] {
        width: 180px;
        font-size: 14px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 20px;
        outline: none;
        padding: 12px 14px;
        transition: 0.6s ease-in-out;
    }

    input[type="password"]:focus {
        width: 230px;
        background-color: lightpink;
    }

    button {
        position: relative;
        top: 70px;
        font-size: 20px;
        border: 2px solid pink;
        transition-duration: 0.4s;
        padding: 7px;
    }

    button:hover {
        background-color: pink;
        color: white;
        border: 2px solid white;
    }


    .err1 {
        position: relative;
        font-size: 18px;
        color: white;
    }

    .err1:hover {
        color: #FF33FF;
    }

    .err2 {
        position: relative;
        font-size: 40px;
        color: white;
        top: -20px;
    }

    .err2:hover {
        color: #FF82AB;
    }

    .err3 {
        position: relative;
        top: 180px;
    }

    .err4 {
        position: relative;
        top: 10px;
    }

    .err5 {
        position: relative;
        font-size: 18px;
        color: #CC99FF;

    }

    .err5:hover {
        color: #CC99FF;
    }

    a {
        font-size: 18px;
    }

    #table {
        position: relative;
        top: 200px;

    }

    #error {
        color: skyblue;
        top: 73px;
        position: relative;
        /* left: 10px; */
        width: 20%;
        right: -258px;
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
                <li><a href="Dang-nhap.php">Quay lại</a></li>
            </ul>

        </div>
        <form method="get" action="Tao-tai-khoan-process.php">
            <table border="0" align="center" id="table">
                <tr>
                    <td class="err2" align="center">
                        Bảng đăng kí
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" id="table1" align="center">
                            <tr>

                                <td class="err1">Tên người dùng :</td>

                                <td><input type="text" name="tenUser" id="nhap-ten">
                                    <span id="error-nhap-ten" class="err5"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="err1">Email :</td>
                                <td><input type="text" name="mailUser" id="nhap-mail">
                                    <span id="error-nhap-mail" class="err5"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="err1">Tài khoản :</td>
                                <td><input type="text" name="userName" id="nhap-user">
                                    <span id="error-nhap-user" class="err5"></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="err1">Mật khẩu :</td>
                                <td><input type="password" name="passWord" id="nhap-pass">
                                    <span id="error-nhap-pass" class="err5"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="err1">Nhập lại mật khẩu :</td>
                                <td><input type="password" name="passWord" id="nhap-pass1">
                                    <span id="error-nhap-pass1" class="err5"></span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <center>
                <?php
                if (isset($_GET["err"])) {
                    echo "<div id='error'> Tài khoản đã có người sử dụng </div>";
                }
                ?>
            </center>
            <center>
                <div class="err3"><button onclick="return user()">Đồng ý</button></div>
            </center>
        </form>
        <script type="text/javascript">
        function user() {
            // Lấy thẻ đúng về
            var vnhapten = document.getElementById("nhap-ten").value;
            var vnhapuser = document.getElementById("nhap-user").value;
            var vnhappass = document.getElementById("nhap-pass").value;
            var vnhappass1 = document.getElementById("nhap-pass1").value;
            var vnhapmail = document.getElementById("nhap-mail").value;
            // Lấy thẻ lỗi về
            var errnhapten = document.getElementById("error-nhap-ten");
            var errnhapuser = document.getElementById("error-nhap-user");
            var errnhappass = document.getElementById("error-nhap-pass");
            var errnhappass1 = document.getElementById("error-nhap-pass1");
            var errnhapmail = document.getElementById("error-nhap-mail");
            var regegx = /^([A-Za-z0-9\_\.]+){8,16}$/;
            var checkregegx = regegx.test(vnhapuser);
            var dem = 0;
            var regegx1 = /^[A-Za-z_]{6,18}$/;
            var checkregegx1 = regegx1.test(vnhapten);
            var regegx2 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            var checkregegx2 = regegx2.test(vnhappass);
            var regegx3 = /^[A-Za-z0-9\.\_]+@+[A-Za-z0-9\.]+$/;
            var checkregegx3 = regegx3.test(vnhapmail);
            // Start

            if (vnhapten === "") {
                errnhapten.innerHTML = " * ";
            } else if (checkregegx1) {
                errnhapten.innerHTML = "";
                dem++;
            } else {
                errnhapten.innerHTML = " Tên không được chứa kí tự đặc biệt";
            }
            if (vnhapmail === "") {
                errnhapmail.innerHTML = " * ";
            } else if (checkregegx3) {
                errnhapmail.innerHTML = "";
                dem++;
            } else {
                errnhapmail.innerHTML = " Không đúng định dạng mail";
            }
            if (vnhapuser === "") {
                errnhapuser.innerHTML = " * ";
            } else if (checkregegx) {
                errnhapuser.innerHTML = "";
                dem++;
            } else {
                errnhapuser.innerHTML = " Tên không được chứa kí tự đặc biệt và từ 8 đến 16 ký tự";
            }
            if (vnhappass === "") {
                errnhappass.innerHTML = " * ";
            } else if (checkregegx2) {
                errnhappass.innerHTML = "";
                dem++;
            } else {
                errnhappass.innerHTML = " Mật khẩu tối thiểu tám ký tự, ít nhất một chữ cái và một số ";
            }
            if (vnhappass1 === "") {
                errnhappass1.innerHTML = " * ";
            } else if (vnhappass != vnhappass1) {
                alert('Mật khẩu không trùng khớp. Xin vui lòng nhập lại');
            } else {
                errnhappass1.innerHTML = "";
                dem++;
            }

            if (dem == 5) {
                return confirm('Đăng ký thành công');
            } else {
                alert('Kiểm tra lại thông tin !');
            }
            return false;
        }
        </script>
</body>

</html>