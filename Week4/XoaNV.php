<?php
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from nhanvien";
    $result = mysqli_query($link, $sql);

    echo '<form action="./XuLyXoaNV.php">';
    echo '<table border="1" width="100%">';
    echo '<caption>XOA NHAN VIEN</caption>';
    echo '<TR><TH>ID PHONG BAN</TH><TH>TEN PHONG BAN</TH><TH>MO TA</TH><TH>XOA</TH></TR>';
    while($row = mysqli_fetch_assoc($result)) { //
                echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].
                '</TD><TD><a href="XuLyXoaNV.php?IDNV='.$row['IDNV'].'" target="frame3" class="link">Xoa</a></TD></TR>';
    }
    echo '</table>';
    echo '</form>';
    mysqli_free_result($result);
    mysqli_close($link);
?>