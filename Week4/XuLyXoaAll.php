<?php
    $idnv = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    for ($i = 0; $i < count($idnv); $i++) {
        $sql = "DELETE FROM nhanvien where IDNV = '$idnv[$i]'";
        $result = mysqli_query($link, $sql);
    }
    header("Location: XoaAll.php");
?>