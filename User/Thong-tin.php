<?php
session_start();
if (!isset($_SESSION["userName"])) {
    header("Location: Dang-nhap.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ha Noi View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/Thong-tin.css">
    <style>
    </style>
</head>

<body>
    <div id="tong">
        <div id="tren">
            <div id="err">
                <addr title="Logo"><img src="img/logo.png"></addr>
                <center>
                    <div id="err3">
                        <form method="get" action="#">
                            <input type="text" name="search" placeholder="Tìm kiếm..">
                            <button><a href="#"><i class="fa fa-search"></i></a></button>
                        </form>
                    </div>
                </center>
                <div id="toi">
                    <ul id="menu-toi">
                        <li class="cha-toi">
                            <a href="Trang-chu-user.php" id="dang-xuat">Quay lại
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr width="60%" align="center" color="black" size="1" />
    </div>
    <div id="duoi">
        <div id="err5"></div>
        <div id="err6">
            <?php
            $taikhoan = $_SESSION["tenUser"];
            include "../Connect/Open.php";
            $sql = "SELECT * FROM nguoi_dung where tenUser='$taikhoan'";
            $result = mysqli_query($con, $sql);
            $thongtin = mysqli_fetch_array($result);
            include "../Connect/Close.php";
            ?>

            <table border="1" id="bang">
                <tr>
                    <td>Tên người dùng:</td>
                    <td> <?php echo $thongtin['tenUser']; ?></td>
                </tr>
                <tr>
                    <td> Mail:</td>
                    <td> <?php echo $thongtin['mailUser']; ?></td>
                </tr>
                <tr>
                    <td>Tài khoản:</td>
                    <td> <?php echo $thongtin['userName']; ?></td>
                </tr>
                <tr>
                    <td>
                        <div id="chung">Mật khẩu:</div>
                    </td>
                    <td> <?php echo $thongtin['passWord']; ?>
                        <br /><input class="toggle-box" id="identifier-1" type="checkbox">
                        <label for="identifier-1">Đổi mật khẩu</label>
                        <div>
                            <form method="post" action="Doi-pass.php">
                                <?php
                                $taikhoan1 = $_SESSION["tenUser"];
                                $connguoidung = mysqli_connect("localhost", "root", "", "hanoi_view");
                                $sqlnguoidung = "SELECT * FROM nguoi_dung where tenUser='$taikhoan1'";
                                $resultnguoidung = mysqli_query($connguoidung, $sqlnguoidung);
                                $lop = mysqli_fetch_array($resultnguoidung);
                                mysqli_close($connguoidung);
                                ?>
                                <div><input type="password" name="passWord" id="doi-pass1" placeholder="Nhập mật khẩu">
                                    <span class="error" id="doi-pass1-err"></span>
                                </div>
                                <input type="hidden" name="maUser" value="<?php echo $lop["maUser"]; ?>">
                                <div><input type="password" name="passWord" id="doi-pass2"
                                        placeholder="Nhập lại mật khẩu">
                                    <span class="error" id="doi-pass2-err"></span>
                                </div>
                                <div><button onclick="return son()">Đổi</button></div>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
    <script>
    function son() {
        // Lấy thẻ đúng về
        var vpass1 = document.getElementById('doi-pass1').value;
        var vpass2 = document.getElementById('doi-pass2').value;
        // Lấy thẻ lỗi về
        var errpass1 = document.getElementById('doi-pass1-err');
        var errpass2 = document.getElementById('doi-pass2-err');
        // Regexg
        var regegx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,14}$/;
        var checkregegx = regegx.test(vpass1);
        // Đếm
        var dem = 0;
        // Start
        if (vpass1 === "") {
            errpass1.innerHTML = " * ";
        } else if (checkregegx) {
            errpass1.innerHTML = "";
            dem++;
        } else {
            errpass1.innerHTML = " Mật khẩu tối thiểu sáu ký tự, ít nhất một chữ cái và một số ";
        }
        if (vpass2 === "") {
            errpass2.innerHTML = " * ";
        } else if (vpass2 != vpass1) {
            errpass2.innerHTML = " Mật khẩu không trùng khớp !";
        } else {
            errpass2.innerHTML = "";
            dem++;
        }
        if (dem == 2) {
            return confirm('Đổi mật khẩu thành công');
        } else {
            alert('Kiểm tra lại');
        }
        return false;
    }
    </script>
</body>

</html>