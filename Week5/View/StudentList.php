<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Danh sach sinh vien</h2>
    <?php
    $mod = $_REQUEST['mod'];
    if ($mod != 'Update') {
        $mod = 'Show';
    }
    if (sizeof($studentList) == 0) {
        echo '<p>Không có kết quả!</p>';
    } else {
        for ($i = 0; $i < sizeof($studentList); $i++) {
            echo "<p>" . $i + 1 . ".<a href=\"?stid=" . $studentList[$i]->id . "&mod=". $mod."\">" . $studentList[$i]->name . "</a></p>";
        }
    }
    
    ?>
    <br>
    <p>
        <a href="../index.php">Home page</a>
    </p>
</body>
</html>