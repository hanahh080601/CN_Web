<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Danh sách nhân viên</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #a83850;
            color: white;
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
            outline: none;
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
            color: #ffffff;
        }

        .logout {
            display: block;
            width: 10vw;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #a83850;
            padding: 10px 15px;
            margin: 10px;
            border-radius: 15px;
        }

        .search-form {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
        }

        .search {
            width: fit-content;
            margin: 5px;
            background: #a83850;
            outline: none;
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <form class="search-form" action="../Controller/Controller_Student.php?mod=Show" method="post">

        <select id="select" name="khoa">
            <option value="all">Tất cả</option>
            <?php
            for ($i = 0; $i < sizeof($khoas); $i++) {
            ?>
                <option value="<?php echo $khoas[$i]->tenkhoa ?>"><?php echo $khoas[$i]->tenkhoa ?></option>
            <?php
            }
            ?>
            <script>
                var select = document.querySelector('#select');
                for (var i = 0; i < select.options.length; i++) {
                    if (select.options[i].value == '<?php echo $khoa; ?>') {
                        select.selectedIndex = i
                    }
                }
            </script>
        </select>
        <input class="search" type="submit" value="Tìm kiếm" />
    </form>

    <?php
    if (sizeof($studentList) > 0) {
    ?>
        <table id="customers">
            <tr>
                <th>MSSV</th>
                <th>Ho va ten</th>
                <th>Gioi tinh</th>
                <th>Khoa</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            for ($i = 0; $i < sizeof($studentList); $i++) {
            ?>
                <tr>
                    <td><?php echo $studentList[$i]->mssv ?></td>
                    <td><?php echo $studentList[$i]->hoten ?></td>
                    <td><?php echo $studentList[$i]->gioitinh ?></td>
                    <td><?php echo $studentList[$i]->khoa ?></td>
                    <td><a href="../Controller/Controller_Student.php?mod=Delete&mssv=<?php echo $studentList[$i]->mssv ?>">Xóa</a></td>
                    <td><a href="../Controller/Controller_Student.php?mod=viewUpdate&mssv=<?php echo $studentList[$i]->mssv ?>">Cập nhật</a></td>
                </tr>
            <?php
            }
            ?>

        </table>
    <?php
    } else {
    ?>
        <h2>Không tồn tại user nào !</h2>
    <?php
    }
    ?>
    <a class="logout" href="../Controller/Controller_Student.php?mod=viewAdd">Thêm mới</a>
</body>

</html>