<?php
$MaSP= $_POST['MaSP'];
$TenSP= $_POST['TenSP'];
$NhanHang= $_POST['NhanHang'];
$NgayNhap=$_POST['NgayNhap'];
$NgayXuat= $_POST['NgayXuat'];
$GiaSP=$_POST['GiaSP'];
$SoLuong=$_POST['SoLuong'];
require "database.php";
$db= new Database();
$sql="INSERT INTO `linhkien` (`MaSP`, `TenSP`,`NhanHang`, `NgayNhap`, `NgayXuat`, `GiaSP`,`SoLuong`) VALUES (?,?,?,?,?,?,?);";
$db->setSQL( $sql);
$kq=$db->executeSql([$MaSP,$TenSP,$NhanHang,$NgayNhap,$NgayXuat,$GiaSP,$SoLuong]);
if($kq) {echo "thanh cong";}
?>
<a href="index.php"> Trang chủ </a>
