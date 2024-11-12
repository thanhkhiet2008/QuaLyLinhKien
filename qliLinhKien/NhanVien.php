<?php
$MaNV= $_POST['MaNV'];
$TenNV= $_POST['TenNV'];
$GioiTinh= $_POST['GioiTinh'];
$SDT=$_POST['SDT'];
$DiaChi= $_POST['DiaChi'];
$ChucVu=$_POST['ChucVu'];

require "database.php";
$db= new Database();
$sql="INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `GioiTinh`, `SDT`, `DiaChi`, `ChucVu`) VALUES (?,?,?,?,?,?);";
$db->setSQL( $sql);
$kq=$db->executeSql([$MaNV,$TenNV,$GioiTinh,$SDT,$DiaChi,$ChucVu]);
if($kq) {echo "thanh cong";}
?>
<a href="NhanViena.php"> Trang chủ </a>
