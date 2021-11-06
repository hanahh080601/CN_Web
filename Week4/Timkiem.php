<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

    <div class="main">
        <form class="form" id="form-1" action="./Xulitimkiem.php" method="post">
            
            <div class="form-group">
                <label class="form-label">Ma NV</label>
                <input type="text" id="text1" name="txtmanv" class="form-control" onblur="change()">
            </div>

            <div class="form-group">
                <label class="form-label">Ho ten</label>
                <input type="text" id="text2" name="txthoten" class="form-control">
            </div>

            <div class="form-group">
                <input class="btn" type="submit" value="OK">
                <input class="btn" type="reset" value="Reset">
            </div>
        </form>
    </div>

</body>
</html>