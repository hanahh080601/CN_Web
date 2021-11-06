<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_Student.php?mod=Search" method="post">
        <select name="select" id="">
            <option value="id">ID</option>
            <option value="name">Name</option>
            <option value="age">Age</option>
            <option value="university">University</option>
        </select>
        <input name="input" id="input" type="text" value="">
        <input class="btn" type="submit" value="OK">
        <input class="btn" type="reset" value="Reset">
    </form>
</body>
</html>