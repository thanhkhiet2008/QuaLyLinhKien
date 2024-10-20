<?php
$MaSP=$_GET["MaSP"];
require "database.php";
$db= new Database();
$sql="DELETE FROM `linhkien` WHERE `linhkien`.`MaSP` = ";
$db->setSQL( $sql);
$kq=$db->executeSql([$MaSP]);
if($kq) {echo "xoa thanh cong";
}

?>