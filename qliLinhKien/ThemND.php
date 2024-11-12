<?php
$Ho= $_POST['Ho'];
$Ten= $_POST['Ten'];
$SDT=$_POST['SDT'];
$ĐiaChi= $_POST['ĐiaChi'];
$GioiTinh=$_POST['GioiTinh'];
$NgaySinh=$_POST['NgaySinh'];
require "database.php";
$db= new Database();
$sql="INSERT INTO `nguoidung` (`Ho`, `Ten`, `SDT`, `ĐiaChi`, `GioiTinh`, `NgaySinh`) VALUES (?,?,?,?,?,?);";
$db->setSQL( $sql);
$kq=$db->executeSql([$Ho,$Ten,$SDT,$ĐiaChi,$GioiTinh,$NgaySinh]);
if($kq) {echo "thanh cong";}
?>
<a href="nguoidung.php"> Trang chủ </a>
