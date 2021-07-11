<?php
session_start();
if (!isset($_SESSION["tenUser"])) {
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
    <link rel="stylesheet" type="text/css" href="css/Len-top.css">
    <link rel="stylesheet" type="text/css" href="css/Trang-chu.css">
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
                        <form method="get" action="tim-kiem-user.php">
                            <input type="text" name="search" placeholder="Tìm kiếm..">
                            <button><a href="#"><i class="fa fa-search"></i></a></button>
                        </form>
                    </div>
                </center>
                <div id="toi">
                    <ul id="menu-toi">
                        <li class="cha-toi">
                            <a href="#" id="dang-xuat">
                                <?php echo $_SESSION["tenUser"]; ?>
                            </a>
                            <ul class="con-toi">
                                <li><a href="Thong-tin.php">Thông tin </a></li>
                                <li><a href="Dang-xuat.php">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span id="tren-giua">
            <hr width="60%" align="center" color="black" size="1" />
            <?php
            $con = mysqli_connect("localhost", "root", "", "hanoi_view");
            $sqlkhuvuc = "SELECT maKhuVuc FROM bai_viet ";
            $resultkhuvuc = mysqli_query($con, $sqlkhuvuc);
            $baiviet = mysqli_fetch_array($resultkhuvuc);
            ?>
            <div id="giua">
                <ul id="menu">
                    <li class="cha">
                        <a href="Trang-chu-user.php" class="menu-item">Trang chủ</a>
                    </li>
                    &emsp;
                    <li class="cha">
                        <a href="#" class="menu-item">Quận</a>
                        <ul class="con" style="width:290px; z-index: 99">
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=1">Quận Hoàn Kiếm</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận
                                    Đống
                                    Đa</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=">Quận Hoàng Mai</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận Ba
                                    Đình
                            </li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=">Quận Long Biên</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận Hà Đông
                            </li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=">Quận Thanh Xuân</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận
                                    Hai Bà Trưng</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=">Quận Nam Từ Liêm</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận Cầu
                                    Giấy</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=">Quận Bắc Từ Liêm</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=">Quận Tây
                                    Hồ</a></li>
                        </ul>
                    </li>
                    &emsp;
                    <li class="cha">
                        <a href="#" class="menu-item">Huyện</a>
                        <ul class="con" style="width:300px; z-index:99">
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=28">Huyện Thường Tín</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=13">Thị
                                    xã Sơn Tây</li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=15">Huyện Chương Mỹ</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=14">Huyện Ba
                                    Vì</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=26">Huyện Thạch Thất</a>&ensp;| <a
                                    href="baivietquanhuyen-user.php?makhuvuc=16">Huyện Phúc
                                    Thọ</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=17">Huyện Đan Phượng</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=25">Huyện
                                    Sóc Sơn</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=18">Huyện Đông Anh</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=30">Huyện
                                    Thanh Trì</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=20">Huyện Hoài Đức</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=21">Huyện
                                    Mê Linh</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=23">Huyện Phú Xuyên</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=22">Huyện Mỹ
                                    Đức</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=24">Huyện Quốc Oai</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=19">Huyện
                                    Gia Lâm</a></li>
                            <li><a href="baivietquanhuyen-user.php?makhuvuc=27">Huyện Thanh Oai</a> | <a
                                    href="baivietquanhuyen-user.php?makhuvuc=29">Huyện
                                    Ứng Hòa</a></li>
                        </ul>
                    </li>
                    &emsp;
                    <li class="cha"><a href="#" class="menu-item">Địa điểm nổi bật</a>
                        <ul class="con" style="width:150px; z-index:99">
                            <li><a href="baivietchotatca-user.php?ma=30">Phố Hàng Mã </a></li>
                            <li><a href="baivietchotatca-user.php?ma=14">Cầu Long Biên</a></li>
                            <li><a href="baivietchotatca-user.php?ma=15">Hồ Tây</a></li>
                            <li><a href="baivietchotatca-user.php?ma=16">Aeon Mall Hà Đông </a></li>
                        </ul>
                    </li>
                    &emsp;
                    <li class="cha"><a href="#" class="menu-item">Địa điểm giảm giá</a>
                        <ul class="con" style="width:150px">
                        </ul>
                    </li>
                </ul>
            </div>
            <hr width="60%" align="center" color="black" size="2" />
        </span>
        <div id="giua0"></div>
        <div id="giua1">
            <div id="giua1-1"></div>
            <div id="giua1-2">
                <div id="giua1-2-1">
                    <strong>
                        <h1 id="dia-diem">Địa điểm check-in đề xuất cho bạn</h1>
                    </strong>
                </div>
                <div id="giua1-2-2">
                    <div id="giua1-2-2-1"></div>
                    <div id="giua1-2-2-2">
                        <div id="giua1-2-2-2-1"></div>
                        <div id="giua1-2-2-2-2">
                            <img src="img/anhhanoi.jpg" style="width: 300px; height: auto" z-index="99" id="anhhanoi">
                            <strong>
                                <h2 id="nguoi-tim-kiem">Người dùng cũng tìm kiếm</h2>
                            </strong>
                            &ensp;
                            <div id="muc-luc1">
                                <?php
                                $con1 = mysqli_connect("localhost", "root", "", "hanoi_view");
                                $sql1 = "SELECT * FROM bai_viet limit 2,7";
                                $result1 = mysqli_query($con1, $sql1);
                                ?>
                                <?php
                                while ($bai_viet = mysqli_fetch_array($result1)) {
                                ?>
                                <table border="0" cellspacing="0" cellspacing="0" style="border-color: white">
                                    <tr>
                                        <td>
                                            <a href="baivietchotatca-user.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                                                <img src="<?php echo $bai_viet["anhBia"]; ?>"
                                                    style="width:110px; height:auto"></a>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label id="chu-tenBaiViet">
                                                <a
                                                    href="baivietchotatca-user.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                                                    <?php echo $bai_viet["tenBaiViet"]; ?></a>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="duoi">
            <div id="err5"></div>
            <div id="err6">
                <div id="err6-1">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hanoi_view");
                    $sql = "SELECT * FROM bai_viet INNER JOIN bai_viet_de_xuat ON bai_viet.maBaiViet=bai_viet_de_xuat.maBaiViet";
                    $result = mysqli_query($con, $sql);
                    ?>
                    <?php
                    while ($bai_viet = mysqli_fetch_array($result)) {
                    ?>
                    <div id="bai_viet_bao_chon">
                        <label data-toggle="tooltip" title="<?php echo $bai_viet["tenBaiViet"]; ?>" data-placement="top"
                            class="btn btn-primary btn-sm">
                            <a href="baivietchotatca-user.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                                <img src="<?php echo $bai_viet["anhBia"]; ?>" class="img">
                                <div class="tenbaiviet">
                                    <?php echo $bai_viet["tenBaiViet"]; ?>
                                </div>
                            </a>
                        </label>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    mysqli_close($con);
                    ?>
                </div>
                <div id="err6-2">
                    <div id="err6-2-1"></div>
                    <div id="err6-2-2">
                        <div id="err6-2-2-1"></div>
                        <div id="err6-2-2-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cuoi">
            <center>
                <h3 id="chu-cuoi">Tất cả các bài viết trên đều là sản phẩm của quá trình du lịch và trải nhiệm hi vọng
                    sẽ giúp ích cho các bạn !
                </h3>
            </center>
            <div class="lienhe">
                Follow me: <a href="https://www.facebook.com/Bestsb2001/"><img src="img/i.jpg"
                        style="width: 30px; height:auto"></a>
                &ensp;
                <a href="https://www.instagram.com/_d.namsonn_/"><img src="img/iconinstagram.png"
                        style="width: 30px; height: auto"></a>
            </div>
            <div class="quanli">
                <p>
                    Công ty trách nhiệm hữu hạn một thành viên HaNoiview
                    <br />
                    Giấy đăng ký kinh doanh số 0314498604 do Sở Kế hoạch Đầu tư TP Hà Nội cấp lần đầu ngày 26/02/2021
                    </br />
                    Địa chỉ: Lầu 2 - Tòa nhà Twins 5 Góc - Đội 4 - Thôn Lê Xá - Xã Đa Tốn - Huyện Gia Lâm - Thành phố Hà
                    Nội
                    <br />
                    Số điện thoại: 0366071423 - Gmail: s.nntrang2001@gmail.com
                </p>
            </div>
            <img src="img/logo.png" style="width: 100px; height: auto; object-fit: cover;float: right;
    top: -50px;position: relative;">
            <a href="http://bocongan.gov.vn/">
                <img src="img/dangki.jpg" style="height: auto;width: 120px;position: relative;right: -170px;top: 25px;">
            </a>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"><img src="img/back-to-top.png" width="50px"
                height="50px" id="img"></button>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
</body>

</html>