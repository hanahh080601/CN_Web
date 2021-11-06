<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Thong tin chi tiet sinh vien</title>
    </head>
    <body>
        <h2>Chi tiết sinh viên</h2>
        <?php
            echo "<p><b>".$student->name."</b></p>";
            echo "<p> Age: " .$student->age. ",</p>";
            echo "<p> University: " .$student->university. ".</p><br>";
        ?>
        <p>
            <a href="../index.php">Trang chủ</a>
        </p>
    </body>
</html>