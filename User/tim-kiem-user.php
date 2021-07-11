<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ha Noi View</title>
    <link rel="stylesheet" type="text/css" href="css/Thong-tin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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

button {
    position: relative;
    height: 45px;
    width: 45px;
    border: 2px solid skyblue;
    border-radius: 100px;
}

.bao-chon {
    display: flex;
    flex-wrap: wrap;

}

.bao-chon-1 {
    float: left;
    height: auto;
    width: 11%;
}

.bao-chon-2 {
    float: right;
    height: auto;
    width: 85%;
    display: flex;
    flex-wrap: wrap;
    font-size: 18px;
}

#con {
    width: 33%;
    margin-top: 25px;
    font-size: 18px;

}

a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
    color: #FF0099;
}

.img {
    width: 90%;
    object-fit: cover;
    height: 240px;
}
</style>

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
                    <a href="Trang-chu.php" id="dang-nhap">Quay lại</a>
                </div>
            </div>
        </div>
        <hr width="60%" align="center" color="black" size="1" />
        <?php
        $SEARCH = $_GET["search"];
        $con = mysqli_connect("localhost", "root", "", "hanoi_view");
        $sql = "SELECT * FROM bai_viet WHERE  tenBaiViet LIKE '%$SEARCH%'";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        ?>
        <div class="bao-chon">
            <div class="bao-chon-1"></div>
            <div class="bao-chon-2">
                <?php
                if (mysqli_num_rows($result) == 0) {
                    echo "Không có kết quả phù hợp !";
                } else {
                    while ($bai_viet = mysqli_fetch_array($result)) {
                ?>
                <div id="con">
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
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>