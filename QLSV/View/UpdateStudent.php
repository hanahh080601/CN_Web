<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
</head>

<body>
    <style>
        body {
            padding: 0;
            margin: 0;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .login-form {
            color: #301218;
            margin-top: 25vh;
            background: #d993a1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            border-radius: 15px;
        }

        .login-form>input[type="text"],
        input[type="password"] {
            margin-top: 2px;
            margin-bottom: 15px;
            outline: none;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            padding-left: 5px;
        }

        #select {
            margin-top: 2px;
            margin-bottom: 15px;
            outline: none;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            padding-left: 8px;
        }

        .btns {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btns>input[type="submit"] {
            width: fit-content;
            margin: 5px;
            background: #a83850;
            color: #ffffff;
            outline: none;
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
        }

        .btns>input[type="submit"]:hover {
            cursor: pointer;
        }
    </style>

    <form class="login-form" action="../Controller/Controller_Student.php?mod=Update" method="post">
        MSSV: <input type="text" name="mssv" value="<?php echo $student->mssv ?>" readonly />
        Họ và tên: <input type="text" name="hoten" value="<?php echo $student->hoten ?>" />

        Giới tính: <span><input type="radio" name="gioitinh" value="Nữ" /> Nữ </span>
        <span><input type="radio" name="gioitinh" value="Nam" /> Nam </span>
        <script>
            let radios = document.querySelectorAll('input[type=radio]');
            Array.from(radios).forEach(radio => {
                if (radio.value == '<?php echo $student->gioitinh ?>') {
                    radio.checked = true;
                }
            });
        </script>

        Khoa:
        <select id="select" name="khoa">
		<?php
        for($i = 0; $i < sizeof($khoas); $i++) {
        ?>
        <option value="<?php echo $khoas[$i]->tenkhoa ?>"><?php echo $khoas[$i]->tenkhoa ?></option>
        <?php
        } 
        ?>
        <script>
            var select = document.querySelector('#select');
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].value == '<?php echo $student->khoa ?>') {
                    select.selectedIndex = i
                }
            }
        </script>
		</select>
        
        <div class="btns">
            <input type="submit" value="Lưu thay đổi" />
        </div>
    </form>
</body>

</html>