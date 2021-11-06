<html>

<body>
    <form action="XuLyThemNV.php" method='post'>
        <table width='100%' border='0'>
            <tr>
                <td>Ma Nhan Vien</td>
                <td>
                    <?php
                    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
                    mysqli_select_db($link, "DULIEU");
                    $sql = "select max(IDNV) from nhanvien";
                    $result = mysqli_query($link, $sql);
                    $old_ID = mysqli_fetch_assoc($result)['max(IDNV)'];
                    $IDNV = (int) substr($old_ID, 2) + 1;
                    if ($IDNV > 100) {
                        $new_ID = substr($old_ID, 0, 2) . $IDNV;
                    } else if ($IDNV < 10) {
                        $new_ID = substr($old_ID, 0, 2) . '00' . $IDNV;
                    } else {
                        $new_ID = substr($old_ID, 0, 2) . '0' . $IDNV;
                    }
                    echo '<input type="text" name="txtIDNV" value="' . $new_ID . '" readonly>';
                    ?>
                </td>
            </tr>
            <tr>
                <td>Ho Ten</td>
                <td>
                    <input type="text" name="txtHoten" value="">
                </td>
            </tr>
            <tr>
                <td>ID Phong Ban</td>
                <td>
                    <select name="txtIDPB" id="select" class="btn">
                        <?php
                        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
                        mysqli_select_db($link, "DULIEU");
                        $sql = "select * from phongban";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value=' . $row['IDPB'] . '>' . $row['Tenpb'] . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Dia Chi</td>
                <td>
                    <input type="text" name="txtDiachi" value="">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>