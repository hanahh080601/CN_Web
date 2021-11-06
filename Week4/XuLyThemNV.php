<?php
    $idnv = $_REQUEST['txtIDNV'];
    $hoten = $_REQUEST['txtHoten'];
    $idpb = $_REQUEST['txtIDPB'];
    $diachi = $_REQUEST['txtDiachi'];
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "INSERT INTO nhanvien values ('$idnv', '$hoten', '$idpb', '$diachi')";
    $result = mysqli_query($link, $sql);
    header("Location: XemthongtinNV.php")
?>