<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
        .logout-btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #ff4081;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .logout-btn:hover {
            background: #e73370;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];

        if ($password === $confirm) {
            echo "<h2>Xin chào, $name!</h2>";
            echo "<p>Email của bạn là: $email</p>";
            echo "<p style='color:green;'>Đăng ký thành công 🎉</p>";
        } else {
            echo "<h2 style='color:red;'>Mật khẩu không khớp!</h2>";
            echo "<p>Vui lòng quay lại và thử lại.</p>";
        }
        ?>
        <!-- Nút đăng xuất -->
        <a href="index.html" class="logout-btn">Đăng xuất</a>
    </div>
</body>
</html>
