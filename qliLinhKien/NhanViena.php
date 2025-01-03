<?php
include 'database.php';
$db = new Database();
$db->setSQL("SELECT * FROM `nhanvien`");
$data = $db->layDanhSach();
$limit = 5; // Giói hạng số cột có trong một trang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); 
$offset = ($page - 1) * $limit;
$db->setSQL("SELECT COUNT(*) AS total FROM `nhanvien`");
$total_result = $db->layDanhSach();
$total_rows = $total_result[0]->total;
$total_pages = ceil($total_rows / $limit);
$db->setSQL("SELECT * FROM `nhanvien` LIMIT $limit OFFSET $offset");
$data = $db->layDanhSach();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Quản lý Người Dùng</title>
</head>
<body>
    
<div class="card-header bg-primary">
                   
                               
                </div>
    <div class="container">
    <h2 class="float-end "><a href="index.php" class="btn btn-danger">Back</a></h2>       
        <h1>Quản lí Người Dùng</h1>
        <div class="search-container">
            <input type="text" placeholder="Tìm kiếm..." class="search-input">
            <button type="submit" class="search-button">&#128269;</button>
        </div>

        <a href="NhanVien-form.php" class="add-button">Thêm Nhân Viên</a>
       
        <table class="data-table">
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Giới tính</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Chức vụ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $key => $value) { ?>
                    <tr>
                        <td><?= htmlspecialchars($value->MaNV) ?></td>
                        <td><?= htmlspecialchars($value->TenNV) ?></td>
                        <td><?= htmlspecialchars($value->GioiTinh) ?></td>
                        <td><?= htmlspecialchars($value->SDT) ?></td>
                        <td><?= htmlspecialchars($value->DiaChi) ?></td>
                        <td><?= htmlspecialchars($value->ChucVu) ?></td>
                    
                        <td>
                            <button class="edit-button">Sửa</button>
                            <a href="xoa3.php?MaNV=<?= htmlspecialchars($value->MaNV) ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">
                                <button class="delete-button">Xóa</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
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
