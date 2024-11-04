<?php
include 'database.php';
$db = new Database();
$db->setSQL("SELECT * FROM `linhkien`");
$data = $db->layDanhSach();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Quản lý linh kiện</title>
</head>
<body>
    

    <div class="container">
        <h1>Quản lí linh kiện PC</h1>
       
        <div class="search-container">
            <input type="text" placeholder="Tìm kiếm..." class="search-input">
            <button type="submit" class="search-button">&#128269;</button>
        </div>

        <a href="themLK-form.php" class="add-button">Thêm linh kiện</a>
        <a href="nguoidung.php" class="add-button">Quản lí người dùng</a>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ngày nhập</th>
                    <th>Ngày xuất</th>
                    <th>Giá sản phẩm</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) { ?>
                    <tr>
                        <td><?= htmlspecialchars($value->MaSP) ?></td>
                        <td><?= htmlspecialchars($value->TenSP) ?></td>
                        <td><?= htmlspecialchars($value->NgayNhap) ?></td>
                        <td><?= htmlspecialchars($value->NgayXuat) ?></td>
                        <td><?= htmlspecialchars($value->GiaSP) ?></td>
                        <td>
                            <button class="edit-button">Sửa</button>
                            <a href="xoa.php?MaSP=<?= htmlspecialchars($value->MaSP) ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">
                                <button class="delete-button">Xóa</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="category-select">
            <a href="https://www.facebook.com/messages/t/361500554393030" target="_blank" rel="nofollow" style="position: fixed;bottom: 80px;right: 40px;z-index: 99;">
                <img src="https://pcmarket.vn/static/assets/2021/images/pcmarket-icon-mess-1.png" width="55" height="55" alt="Facebook Messenger Icon">
            </a>
        </div>
    </div>
</body>
</html>
