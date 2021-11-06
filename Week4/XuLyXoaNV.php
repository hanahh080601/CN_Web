<?php
    $idnv = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "DELETE FROM nhanvien where IDNV = '$idnv'";
    $result = mysqli_query($link, $sql);
    header("Location: XoaNV.php")
?>