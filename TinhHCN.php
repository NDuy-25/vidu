<!DOCTYPE html>
<html>
<head>
    <title>Tính diện tích hình chữ nhật</title>
</head>
<body>
    <h2>Form tính diện tích hình chữ nhật</h2>
    <form method="post">
        Chiều dài: <input type="number" name="chieudai" step="any" required><br><br>
        Chiều rộng: <input type="number" name="chieurong" step="any" required><br><br>
        <input type="submit" value="Tính diện tích">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chieudai = $_POST["chieudai"];
        $chieurong = $_POST["chieurong"];
        $dientich = $chieudai * $chieurong;

        echo "<h3>Diện tích hình chữ nhật là: $dientich</h3>";
    }
    ?>
</body>
</html>
