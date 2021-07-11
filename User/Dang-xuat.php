<?php
session_start();
unset($_SESSION["userName"]);
header("Location: Dang-nhap.php");