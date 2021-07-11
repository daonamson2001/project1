<?php
if (isset($_GET["ma-admin"]) && isset($_GET["ten-admin"]) && isset($_GET["user-admin"]) && isset($_GET["pass-admin"]) && isset($_GET["quyen"])) {
  $ma_ad = $_GET["ma-admin"];
  $tenad = $_GET["ten-admin"];
  $tkad = $_GET["user-admin"];
  $mkad = $_GET["pass-admin"];
  $quyen = $_GET["quyen"];
  include("../../connect/open.php");
  $sql = "UPDATE `admin` SET `tenAdmin` = '$tenad', `userAdmin` = '$tkad', `passAdmin` = '$mkad', `maQuyen` = '$quyen' WHERE `admin`.`maAdmin` = $ma_ad;";
  mysqli_query($con, $sql);
  include("../../connect/close.php");
  header("Location: ../quan-ly.php");
} else {
  header("Location: ../quan-ly.php");
}
?>