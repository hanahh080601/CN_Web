<?php
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from nhanvien";
    $result = mysqli_query($link, $sql);

    echo '<form action="./XuLyXoaAll.php" method="POST">';
    echo '<table border="1" width="100%">';
    echo '<caption>XOA NHAN VIEN</caption>';
    echo '<TR><TH>ID PHONG BAN</TH><TH>TEN PHONG BAN</TH><TH>MO TA</TH><TH>CHON NHAN VIEN DE XOA</TH></TR>';
    while($row = mysqli_fetch_assoc($result)) { //
                echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].
                '</TD><TD><input type="checkbox" name="IDNV[]" value="'.$row['IDNV'].'" ></TD></TR>';
    }
    echo '<TR><TD></TD><TD></TD><TD></TD><TD><input type="submit" value="Xoa nhan vien da chon"></TD></TR>';
    echo '</table>';
    echo '</form>';
    mysqli_free_result($result);
    mysqli_close($link);
?>