<?php
if (isset($_GET["maBaiViet"])) {
  $maBai = $_GET["maBaiViet"];
  include("../../connect/open.php");
  $sql = "DELETE FROM `bai_viet` WHERE `bai_viet`.`maBaiViet` = $maBai";
  mysqli_query($con, $sql);
  include("../../connect/close.php");
  header("Location: ../list-bai-viet.php");
} else {
  header("Location: ../list-bai-viet.php");
}
?>