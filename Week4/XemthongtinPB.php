<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DULIEU";

    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from phongban";
    $result = mysqli_query($link, $sql);

    echo '<table border="1" width="100%">';
    echo '<caption>DU LIEU TRUY XUAT TU BANG PHONG BAN</caption>';
    echo '<TR><TH>ID PHONG BAN</TH><TH>TEN PHONG BAN</TH><TH>MO TA</TH><TH>XEM NHAN VIEN</TH></TR>';
    while($row = mysqli_fetch_assoc($result)) { //
                echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].
                '</TD><TD><a href="./XemthongtinNVPB.php?IDPB='.$row['IDPB'].'" target="frame3" class="link">xxx</a></TD></TR>';
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($link);
?>