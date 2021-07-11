<?php
if (isset($_GET["maAdmin"])) {
	$ma = $_GET["maAdmin"];
}
include("../connect/open.php");
$sql = "UPDATE `hanoi_view`.`admin` SET `block` = '0' WHERE `admin`.`maAdmin` ='$ma'";
mysqli_query($con,$sql);
include("../connect/close.php");
header("location: quan-ly.php");
?>