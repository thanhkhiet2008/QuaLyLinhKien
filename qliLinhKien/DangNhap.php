<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập rồi, chuyển hướng tới trang quản lý linh kiện
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$error = '';

// Xử lý đăng nhập khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'database.php';  // Kết nối database
    $db = new Database();

    // Lấy tên đăng nhập và mật khẩu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn cơ sở dữ liệu để kiểm tra thông tin người dùng
    $sql = "SELECT * FROM `users` WHERE `username` = :username LIMIT 1";
    $db->setSQL($sql);
    $db->bind(':username', $username);
    $user = $db->layDanhSach()[0] ?? null; // Giả sử phương thức layDanhSach trả về danh sách, ta lấy user đầu tiên

    if ($user && password_verify($password, $user->password)) {
        // Mật khẩu đúng, lưu thông tin người dùng vào session
        $_SESSION['username'] = $user->username;
        $_SESSION['user_id'] = $user->id; // Giả sử có ID người dùng
        header('Location: index.php');
        exit();
    } else {
        // Nếu thông tin đăng nhập không chính xác
        $error = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="login-container">
        <h2>Đăng Nhập</h2>

        <?php if ($error): ?>
            <div class="error-message"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập: </label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <a href="index.php" class="button">Đăng nhập</a>
        </form>

        <p>Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
    </div>
</body>
</html>