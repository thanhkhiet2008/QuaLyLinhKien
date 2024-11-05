<?php
$MaNV = $_GET["MaNV"]; // Retrieve the Ho parameter from the URL
require "database.php";
$db = new Database();

// Ensure Ho is provided and not empty
if (!empty($MaNV)) {
    // Use a prepared statement to prevent SQL injection
    $sql = "DELETE FROM `nhanvien` WHERE `MaNV` = ?";
    $db->setSql($sql);

    // Execute the query with Ho as the parameter
    $kq = $db->executeSql([$MaNV]);

    if ($kq) {
        echo "Xóa thành công";
    } else {
        echo "Xóa thất bại";
    }
} else {
    echo "MaNV không hợp lệ";
}
?>
<a href="NhanViena.php">Trang chủ</a>