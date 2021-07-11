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
    body {
        margin: 0;
        padding: 0;
        font-family: Times New Roman;
    }

    #err img {
        float: left;
        width: 240px;
        height: auto;
        position: relative;
        left: 50px;
        top: -35px;
    }

    #tong {
        display: flex;
        flex-direction: column;
    }

    #tren {
        width: 100%;
        height: 15vh;
        background-color: #FFFFE0;
    }

    #err3 {
        position: relative;
        top: 35px;
        float: center;
        right: 200px;
    }

    #err3 input[type="text"] {
        width: 130px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        outline: none;
        padding: 10px 7px;
        height: 42px;
    }

    #err3 input[type="text"]:focus {
        width: 300px;
    }

    #err3 input[type="text"] {
        width: 300px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        outline: none;
        padding: 10px 7px;
        transition: 0.6s ease-in-out;
    }

    #err3 input[type="text"]:focus {
        width: 300px;
        background-color: lightpink;
        font-size: 18px;
        font-size: 18px;
    }

    #dang-nhap {
        position: relative;
        text-decoration: none;
        color: black;
        padding: 5px 20px;
        border: 2px solid skyblue;
        font-size: 18px;
        float: right;
        right: 30px;
    }

    #dang-nhap:hover {
        padding: 5px 20px;
        border: 2px solid hotpink;
    }

    #err3 button {
        position: relative;
        height: 45px;
        width: 45px;
        border: 2px solid skyblue;
        border-radius: 100px;
    }

    #giua {
        width: 100%;
        display: flex;
        justify-content: center;
        height: 5vh;
    }

    #duoi {
        position: relative;
        height: auto;
        width: 100%;
    }

    .menu-item {
        position: relative;
        text-decoration: none;
        color: black;
        padding: 5px 20px;
        border: 2px solid skyblue;
        font-size: 18px;
        top: 10px;
    }

    .menu-item:hover {
        padding: 5px 20px;
        border: 2px solid hotpink;
        font-size: 18px;
    }

    #duoi1 {
        position: relative;
        float: left;
        height: auto;
        width: 20%;
        background-color: white;
    }

    #duoi2 {
        position: relative;
        float: right;
        height: auto;
        width: 80%;
    }

    #menu {
        display: flex;
        margin: 0;
        padding: 0;
    }

    #menu ul {
        margin: 0;
        padding: 0;

    }

    #menu li {
        list-style: none;

    }

    #menu a {
        position: relative;
        text-decoration: none;
        color: black;
    }

    #menu a:hover {
        color: #FF9999;
    }

    .cha {
        position: relative;
    }

    .cha:hover a {
        background-color: white;
    }

    .con {
        position: absolute;
        display: none;
        font-size: 18px;
        top: 38px;
        background-color: white;
    }

    .con li {
        min-width: 5em;
    }

    .cha:hover .con {
        display: block;
    }

    #duoi2-1 {
        position: relative;
        float: left;
        height: auto;
        width: 70%;
        background-color: white;
        color: black;
        font-size: 18px;
        text-align: justify;
    }

    #duoi2-2 {
        position: relative;
        float: right;
        height: auto;
        width: 30%;
        background-color: white;
    }

    #thoi-gian-viet {
        position: relative;
        float: right;
        right: 20px;
        font-size: 14px;
    }

    .error {
        color: red;
    }

    #bang {
        position: relative;
        top: 30px;
        right: -20px;
        color: black;
        font-size: 18px;
    }

    #chung {
        position: relative;
        top: -12px;
    }

    #binhLuan2 {
        position: relative;
        top: -10px;
    }

    #chu-cuoi {
        position: relative;
        top: 10px;
        color: #836FFF;
    }

    #err3 {
        position: relative;
        top: 35px;
        float: center;
        right: 200px;
    }

    #nut-bam button {
        width: 74px;
        height: 41px;
        /* border-radius: initial; */
        border: dashed;
        border-radius: 10px;
    }

    #nut-bam button:hover {
        border-color: #FF0099;
        color: #FF0099;
    }

    #table {
        width: auto;
        padding: 5px 20px;
        border: 2px solid skyblue;
        border-radius: 2em;
    }

    #cuoi {
        position: relative;
        width: 100%;
        height: 30vh;
        background-color: black;
        color: white;
    }

    #chu-cuoi {
        position: relative;
        top: 25px;
        color: #836FFF;
    }

    #chu-cuoi:hover {
        color: #D2691E;
    }

    .lienhe {
        margin-left: 10%;
        margin-top: 4%;
    }

    #nut-quay-lai button {
        position: relative;
        text-decoration: none;
        color: black;
        padding: 4px 16px;
        border: 2px solid skyblue;
        /* font-size: 18px; */
        top: -5px;
        float: right;
        font-size: 16px;
        border-radius: 10px;
        right: 30px;
        font-size: 15px;
        background-color: #FFFFE0;
        width: 92px;
    }

    #nut-quay-lai button:hover {

        border: 2px solid hotpink;
    }

    #anhcuoi {
        position: relative;
        top: 38px;
    }

    #anhcuoi {
        position: relative;
        top: 38px;
    }

    .quanli {
        float: right;
        position: relative;
        top: -50px;
        font-size: 16px;
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
                        <form method="get" action="tim-kiem-user.php">
                            <input type="text" name="search" placeholder="Tìm kiếm..">
                            <button><a href="#"><i class="fa fa-search"></i></a></button>
                        </form>
                    </div>
                </center>
                <div id="nut-quay-lai">
                    <button onclick="quaylai()">Quay lại</button>
                </div>
            </div>
        </div>
        <hr width="60%" align="center" color="black" size="1" />
        <div id="duoi">
            <div id="duoi1"></div>
            <div id="duoi2">
                <div id="duoi2-1">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hanoi_view");
                    $maBaiViet = $_GET["ma"];
                    $sql = "SELECT * FROM bai_viet WHERE maBaiViet='$maBaiViet'";
                    $result = mysqli_query($con, $sql);
                    $tenbaiviet = mysqli_fetch_array($result);

                    ?>
                    <strong>
                        <h2><?php echo $tenbaiviet["tenBaiViet"]; ?></h2>
                    </strong>
                    <br />
                    <p><?php echo $tenbaiviet["noiDung"]; ?></p>
                    <center>
                        <p><img src="<?php echo $tenbaiviet["anhBia"]; ?>" style="width: 800px; height:auto">
                            <br />
                        </p>
                    </center>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hanoi_view");
                    $sqlbinhLuan = "SELECT * FROM binh_luan Where maBaiViet='$maBaiViet'";
                    $resultbinhLuan = mysqli_query($con, $sqlbinhLuan);
                    ?>
                    <br />
                    <hr width="60%" align="center" color="black" size="1" />
                    <br />
                    <h3 class="ten-binh-luan">Những comment xinh xinh tạo nên tiếng nhạc sập sình <3 </h3>
                            <?php while ($binhLuan = mysqli_fetch_array($resultbinhLuan)) {
                                $manguoibinhluan = $binhLuan["maUser"];
                                $sqltenbinhluan = "SELECT `tenUser` FROM `nguoi_dung` WHERE maUser='$manguoibinhluan'";
                                $data = mysqli_query($con, $sqltenbinhluan);
                                $namson = mysqli_fetch_array($data); ?>
                            <p>
                            <table id="table">
                                <tr>
                                    <td>
                                        <?php echo ($namson["tenUser"]); ?>:
                                        &ensp;<?php echo $binhLuan["binhLuan"]; ?>
                                    </td>
                                </tr>
                            </table>
                            </p>
                            <?php
                            }
                            ?>
                            <div>
                                <form action="binh-luan.php" method="post">
                                    <input type="text" style="display: none" value="<?php echo  $maBaiViet ?>"
                                        name="baiviet">
                                    <br />
                                    <table>
                                        <tr>
                                            <td><input type="text" name="binhLuan" id="binhLuan1">
                                                <span class="err" id="err-binhLuan"></span>
                                            </td>
                                            <td>
                                                <div id="nut-bam">
                                                    <button onclick="return son()">Bình luận</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="text" hidden name="thoiGianBinhLuan">
                                    <input type="text" hidden name="maUser">
                                    <input type="text" hidden name="maBaiViet">
                                </form>
                            </div>
                </div>
            </div>
        </div>
        <div id="duoi2-2"></div>
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
    <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"><img src="img/back-to-top.png" width="50px"
            height="50px" id="img1"></button>
    <script>
    function quaylai() {
        history.back();
    }
    </script>
    <script>
    function son() {
        var vbinhLuan = document.getElementById("binhLuan1").value;
        var errbinhLuan = document.getElementById("err-binhLuan");
        var dem = 0;
        if (vbinhLuan == "") {
            errbinhLuan = " * ";
        } else {
            errbinhLuan = "";
            dem++;
        }
        if (dem == 1) {
            return true;
        } else {
            alert("Bình luận không được để trống");
        }
        return false;
    }
    </script>
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