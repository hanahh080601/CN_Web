<?php
    $mapb = $_REQUEST['IDPB'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DULIEU";

    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    if($mapb == "") {
        $sql = "select * from nhanvien";
    }
    else $sql = "select * from nhanvien where IDPB='$mapb'" ;
    $result = mysqli_query($link, $sql);

    echo '<table border="1" width="100%">';
    echo '<caption>DU LIEU TRUY XUAT TU BANG NHAN VIEN</caption>';
    echo '<TR><TH>ID NHAN VIEN</TH><TH>HO TEN</TH><TH>ID PHONG BAN</TH><TH>DIA CHI</TH></TR>';
    while($row = mysqli_fetch_assoc($result)) { //
                echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD></TR>';
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($link);
?>