<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Form4</title>
</head>
<body style="background-color: rgb(252, 239, 244)">
    <?php
        $choice = $_REQUEST['choice'];
        echo '<div class="main">
        <form id="form" class="form" action="./XuLyLogin.php?choice='.$choice.'" method="post">';
    ?>
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" id="text1" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" id="text2" name="pwd" class="form-control">
            </div>

            <div class="form-group">
                <input class="btn" type="submit" value="OK">
                <input class="btn" type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>