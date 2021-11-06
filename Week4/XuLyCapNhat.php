<?php
    $idpb = $_REQUEST['IDPB'];
    $tenpb = $_REQUEST['txtTenpb'];
    $mota = $_REQUEST['txtMota'];
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "update phongban set Tenpb='$tenpb', Mota='$mota' where IDPB = '$idpb'";
    $result = mysqli_query($link, $sql);
    header("Location: CapNhat.php")
?>