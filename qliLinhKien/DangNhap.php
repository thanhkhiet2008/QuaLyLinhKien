<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan li linh kien may tinh"; 
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TenDN = $_POST['TenDN'];
    $MK = $_POST['MK'];

   
    $sql = "SELECT * FROM user WHERE TenDN = ? AND MK = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $TenDN, $MK);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        $_SESSION['TenDN'] = $TenDN;
        echo "Đăng nhập thành công! Xin chào " . $TenDN;
      
        header("Location: index.php");
    } else {
        echo "";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #555;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .login-container input:focus {
            border-color: #4CAF50;
            outline: none;
        }
        .login-container button:active {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form action="DangNhap.php" method="post">
            <label for="TenDN">Tên đăng nhập:</label>
            <input type="text" id="TenDN" name="TenDN" required>
            <label for="MK">Mật khẩu:</label>
            <input type="password" id="MK" name="MK" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
