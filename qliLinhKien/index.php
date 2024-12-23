<?php
include 'database.php';
$db = new Database();
$db->setSQL("SELECT * FROM `linhkien`");
$data = $db->layDanhSach();
$limit = 5; // Giói hạng số cột có trong một trang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); 
$offset = ($page - 1) * $limit;
$db->setSQL("SELECT COUNT(*) AS total FROM `linhkien`");
$total_result = $db->layDanhSach();
$total_rows = $total_result[0]->total;
$total_pages = ceil($total_rows / $limit);
$db->setSQL("SELECT * FROM `linhkien` LIMIT $limit OFFSET $offset");
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
   
    <h2 class="float-end">
        <a href="DangNhap.php" class="btn btn-danger">Back</a>
    </h2>
    <h1>Quản lí linh kiện PC</h1>
   
    
    <div class="search-container">
        <input type="text" placeholder="Tìm kiếm..." class="search-input">
        <button type="submit" class="search-button">&#128269;</button>
    </div>

   
    <a href="themLK-form.php" class="add-button">Thêm linh kiện</a>
    <a href="nguoidung.php" class="add-button">Quản lí người dùng</a>
    <a href="NhanViena.php" class="add-button">Quản lí Nhân Viên</a>

   
    <table class="data-table">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Tên nhãn hàng</th>
                <th>Ngày nhập</th>
                <th>Ngày xuất</th>
                <th>Giá sản phẩm</th>
                <th>Số Lượng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td><?= htmlspecialchars($value->MaSP, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->TenSP, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->NhanHang, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->NgayNhap, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->NgayXuat, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->GiaSP, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($value->SoLuong, ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                        <button class="edit-button">Sửa</button>
                        <a href="xoa.php?MaSP=<?= htmlspecialchars($value->MaSP, ENT_QUOTES, 'UTF-8') ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">
                            <button class="delete-button">Xóa</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

   
    <div class="category-select">
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0&ab_channel=Duran" target="_blank" rel="nofollow" style="position: fixed;bottom: 80px;right: 40px;z-index: 99;">
            <img src="https://pcmarket.vn/static/assets/2021/images/pcmarket-icon-mess-1.png" width="55" height="55" alt="Facebook Messenger Icon">
        </a>
    </div>
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>" class="prev">« Trang trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <?php if ($i == $page): ?>
                <strong><?= $i ?></strong>
            <?php else: ?>
                <a href="?page=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?= $page + 1 ?>" class="next">Trang sau »</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
