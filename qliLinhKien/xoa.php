<?php
$MaSP = $_GET["MaSP"]; // Retrieve the MaSP parameter from the URL
require "database.php";
$db = new Database();

// Ensure MaSP is provided and not empty
if (!empty($MaSP)) {
    // Use a prepared statement to prevent SQL injection
    $sql = "DELETE FROM `linhkien` WHERE `MaSP` = ?";
    $db->setSql($sql);

    // Execute the query with MaSP as the parameter
    $kq = $db->executeSql([$MaSP]);

    if ($kq) {
        echo "Xóa thành công";
    } else {
        echo "Xóa thất bại";
    }
} else {
    echo "MaSP không hợp lệ";
}
?>
<a href="index.php">Trang chủ</a>
