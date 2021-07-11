<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ha Noi View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/nhom-chung.css">
    <link rel="stylesheet" type="text/css" href="css/Len-top-2.css">
    <style>
    </style>
</head>

<body>
    <div id="tong">
        <div id="tren">
            <div id="err">
                <addr title="Logo"><img src="img/logo.png"></addr>
                <div id="err3">
                    <center>
                        <form method="get" action="tim-kiem-user.php">
                            <input type="text" name="search" placeholder="Tìm kiếm..">
                            <button><a href="#"><i class="fa fa-search"></i></a></button>
                        </form>
                    </center>
                </div>
                <div>
                    <a href="Trang-chu-user.php" id="dang-nhap">Quay lại</a>
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
                        <ul class="con" style="width:150px; z-index:99">
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
        <div id="duoi">
            <div id="duoi1"></div>
            <div id="duoi2">
                <?php
                $maKhuVuc = $_GET["makhuvuc"];
                $con = mysqli_connect("localhost", "root", "", "hanoi_view");
                $sql = "SELECT * FROM bai_viet where maKhuVuc='$maKhuVuc'";
                $result = mysqli_query($con, $sql);
                mysqli_close($con);
                ?>
                <?php
                if (mysqli_num_rows($result) == "") {
                    echo "Hiện chưa có bài viết nổi bật. Chúng tôi sẽ cập nhập liên tục !";
                } else {
                    while ($bai_viet = mysqli_fetch_array($result)) {
                ?>
                <div id="con1">
                    <label>
                        <a href="baivietchotatca-user.php?ma=<?php echo $bai_viet["maBaiViet"]; ?>">
                            <img src="<?php echo $bai_viet["anhBia"]; ?>" class="img">
                            <div class="chu">
                                <?php echo $bai_viet["tenBaiViet"]; ?>
                            </div>
                        </a>
                    </label>
                </div>
                <?php
                    }
                } ?>
            </div>
        </div>
        <br />
        <br />
        <!-- <div id="cuoi">
            <center>
                <h3 id="chu-cuoi">Tất cả các bài viết trên đều là sản phẩm của quá trình du lịch và trải nhiệm hi vọng
                    sẽ giúp ích cho các bạn !
                </h3>
            </center>
            <div class="lienhe">
                <p>Support: s.nntrang2001@gmail.com</p>
                Follow me: <a href="https://www.facebook.com/Bestsb2001/"><img src="img/i.jpg"
                        style="width: 30px; height:auto"></a>
                &ensp;
                <a href="https://www.instagram.com/_d.namsonn_/"><img src="img/iconinstagram.png"
                        style="width: 30px; height: auto"></a>
            </div>
        </div> -->
        <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"><img src="img/back-to-top.png" width="52px"
                height="52px" id="img1"></button>
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
<?php

?>