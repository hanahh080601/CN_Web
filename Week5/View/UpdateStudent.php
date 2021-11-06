<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Thêm sinh viên</title>
    </head>
    <body>
        <form action="../Controller/C_Student.php?stid=<?php echo $student->id ?> &mod=Update" method="post">
        <label for="">ID sinh viên:</label><br>
        <input type="text" id="stid" name="stid" value="<?php echo $student->id ?>" readonly><br>
        <label for="">Họ và tên:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $student->name ?>"><br><br>
        <label for="">Tuổi:</label><br>
        <input type="text" id="age" name="age" value="<?php echo $student->age ?>"><br><br>
        <label for="">Trường đại học:</label><br>
        <input type="text" id="university" name="university" value="<?php echo $student->university ?>"><br><br>
        <input type="submit" value="Submit">
        </form>
    </body>
</html>
