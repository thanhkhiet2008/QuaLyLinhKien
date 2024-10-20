<?php
$MaSP= $_POST['MaSP'];
$TenSP= $_POST['TenSP'];
$NgayNhap=$_POST['NgayNhap'];
$NgayXuat= $_POST['NgayXuat'];
$GiaSP=$_POST['GiaSP'];
require "database.php";
$db= new Database();
$sql="INSERT INTO `linhkien` (`MaSP`, `TenSP`, `NgayNhap`, `NgayXuat`, `GiaSP`) VALUES (?,?,?,?,?);";
$db->setSQL( $sql);
$kq=$db->executeSql([$MaSP,$TenSP,$NgayNhap,$NgayXuat,$GiaSP]);
if($kq) {echo "thanh cong";}
?>
<a href="index.php"> Trang chủ </a>