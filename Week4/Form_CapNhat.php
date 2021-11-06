<?php
$idpb = $_REQUEST['IDPB'];
if ($idpb == "") {
    header("Location: Form_CapNhat.php");
} 
else {
    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from phongban where IDPB='$idpb'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    }
?>
<html>
<body>
    <form action="XuLyCapNhat.php?IDPB=<?php echo $idpb ?>" method='post'>
        <table width='100%' border='0'>
            <tr>
                <td>Ma phong Ban</td>
                <td>
                    <input type="text" name="txtIDPB" readonly="" value="<?php echo $row['IDPB'];?>">
                </td>
            </tr>
            <tr>
                <td>Ten phong Ban</td>
                <td>
                    <input type="text" name="txtTenpb" value="<?php echo $row['Tenpb'];?>">
                </td>
            </tr>
            <tr>
                <td>Mo ta</td>
                <td>
                    <input type="text" name="txtMota" value="<?php echo $row['Mota'];?>">
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