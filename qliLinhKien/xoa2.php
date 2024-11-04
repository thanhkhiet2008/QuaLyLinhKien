<?php
$Ho = $_GET["Ho"]; // Retrieve the Ho parameter from the URL
require "database.php";
$db = new Database();

// Ensure Ho is provided and not empty
if (!empty($Ho)) {
    // Use a prepared statement to prevent SQL injection
    $sql = "DELETE FROM `nguoidung` WHERE `Ho` = ?";
    $db->setSql($sql);

    // Execute the query with Ho as the parameter
    $kq = $db->executeSql([$Ho]);

    if ($kq) {
        echo "Xóa thành công";
    } else {
        echo "Xóa thất bại";
    }
} else {
    echo "Ho không hợp lệ";
}
?>
<a href="nguoidung.php">Trang chủ</a>