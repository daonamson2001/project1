<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ha Noi View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/Len-top.css"> -->
    <link rel="stylesheet" type="text/css" href="css/Trang-chu2.css">
    <style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 10px;
        right: 43px;
        z-index: 99;
        border: none;
        outline: none;
        /* background-color:hotpink; */
        color: white;
        cursor: pointer;
        padding: 0px;
        border-radius: 4px;
    }

    /* #myBtn:hover {
  background-color: #555;
} */
    #img {
        position: relative;
        right: 0px;
        top: 0px;
    }
    </style>

</head>

<body>
    <div id="tong">
        <div id="tren">
            <div id="err">
                <addr title="Logo"><img src="img/logo.png"></addr>
                <center>
                    <div id="err3">
                        <form method="get" action="tim-kiem.php">
                            <input type="text" name="search" placeholder="Tìm kiếm..">
                            <a href="#"><button><i class="fa fa-search"></a></button></i>
                        </form>
                    </div>
                </center>
                <div>
                    <a href="Dang-nhap.php" id="dang-nhap">Đăng nhập</a>
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
                        <a href="Trang-chu.php" class="menu-item">Trang chủ</a>
                    </li>
                    &emsp;
                    <li class="cha">
                        <a href="#" class="menu-item">Quận</a>
                        <ul class="con" style="width:290px; z-index: 99">
                            <li><a href="baivietquanhuyen.php?makhuvuc=1">Quận Hoàn
                                    Kiếm</a>
                                | <a href="baivietquanhuyen.php?makhuvuc=2">Quận Đống Đa</a>
                            </li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=5">Quận Hoàng Mai</a>
                                |
                                <a href="baivietquanhuyen.php?makhuvuc=3">Quận Ba
                                    Đình
                            </li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=7">Quận Long Biên</a> |
                                <a href="baivietquanhuyen.php?makhuvuc=12">Quận Hà Đông
                            </li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=6">Quận Thanh Xuân</a>
                                | <a href="baivietquanhuyen.php?makhuvuc=4">Quận
                                    Hai Bà Trưng</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=8">Quận Nam Từ Liêm</a>
                                | <a href="baivietquanhuyen.php?makhuvuc=11">Quận Cầu
                                    Giấy</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=9">Quận Bắc Từ Liêm</a>
                                | <a href="baivietquanhuyen.php?makhuvuc=10">Quận Tây
                                    Hồ</a></li>
                        </ul>
                    </li>
                    &emsp;
                    <li class="cha">
                        <a href="#" class="menu-item">Huyện</a>
                        <ul class="con" style="width:300px; z-index:99">
                            <li><a href="baivietquanhuyen.php?makhuvuc=28">Huyện Thường Tín</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=13">Thị
                                    xã Sơn Tây</li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=15">Huyện Chương Mỹ</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=14">Huyện Ba
                                    Vì</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=26">Huyện Thạch Thất</a>&ensp;| <a
                                    href="baivietquanhuyen.php?makhuvuc=16">Huyện Phúc
                                    Thọ</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=17">Huyện Đan Phượng</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=25">Huyện
                                    Sóc Sơn</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=18">Huyện Đông Anh</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=30">Huyện
                                    Thanh Trì</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=20">Huyện Hoài Đức</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=21">Huyện
                                    Mê Linh</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=23">Huyện Phú Xuyên</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=22">Huyện Mỹ
                                    Đức</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=24">Huyện Quốc Oai</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=19">Huyện
                                    Gia Lâm</a></li>
                            <li><a href="baivietquanhuyen.php?makhuvuc=27">Huyện Thanh Oai</a> | <a
                                    href="baivietquanhuyen.php?makhuvuc=29">Huyện
                                    Ứng Hòa</a></li>
                        </ul>
                    </li>
                    &emsp;
                    <li class="cha"><a href="#" class="menu-item">Địa điểm nổi bật</a>
                        <ul class="con" style="width:150px; z-index: 5">
                            <li><a href="baivietchotatca.php?ma=30">Phố Hàng Mã </a></li>
                            <li><a href="baivietchotatca.php?ma=14">Cầu Long Biên</a></li>
                            <li><a href="baivietchotatca.php?ma=15">Hồ Tây</a></li>
                            <li><a href="baivietchotatca.php?ma=16">Aeon Mall Hà Đông </a></li>
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
        <div id="giua-nua">
            <div>
                <strong>
                    <h1 id="dia-diem">Địa điểm check-in đề xuất cho bạn</h1>
                </strong>
            </div>
            <div id="giua-nua-trai">
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
                        <a href="baivietchotatca.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                            <img src="<?php echo $bai_viet["anhBia"]; ?>" class="img">
                            <div>
                                <!-- <div class="tenbaiviet"> -->
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
            <div id="giua-nua-phai">
                <img src="img/anhhanoi.jpg" style="width: 300px; height: auto" z-index="99" id="anhhanoi">
                <strong>
                    <h2 id="nguoi-tim-kiem">Người dùng cũng tìm kiếm</h2>
                </strong>
                <?php
                $con1 = mysqli_connect("localhost", "root", "", "hanoi_view");
                $sql1 = "SELECT * FROM bai_viet INNER JOIN bai_viet_tim_kiem ON bai_viet.maBaiViet=bai_viet_tim_kiem.maBaiViet";
                $result1 = mysqli_query($con1, $sql1);
                ?>
                <?php
                while ($bai_viet = mysqli_fetch_array($result1)) {
                ?>
                <table border="0" cellspacing="0" cellspacing="0" style="border-color: white">
                    <tr>
                        <td>
                            <a href="baivietchotatca.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                                <img src="<?php echo $bai_viet["anhBia"]; ?>" style="width:110px; height:auto"></a>
                        </td>
                        <td></td>
                        <td>
                            <label id="chu-tenBaiViet">
                                <a href="baivietchotatca.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
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
                Địa chỉ: Lầu 2 - Tòa nhà Twins 5 Góc - Đội 4 - Thôn Lê Xá - Xã Đa Tốn - Huyện Gia Lâm - Thành phố Hà Nội
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
    <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"><img src="img/back-to-top.png" width="52px"
            height="52px" id="img"></button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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