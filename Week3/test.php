<?php
    // $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    // mysqli_select_db($link, "DULIEU");
    // $sql = "select * from table1";
    // $result = mysqli_query($sql, $link);
    // echo '<table border="1" width="100%">';
    // echo '<caption>DU LIEU TRUY XUAT TU BANG NHAN SU</caption>';
    // echo '<TR><TH>MA SO</TH><TH>HO VA TEN</TH><TH>NGAY SINH</TH><TH>NGHE NGHIEP</TH></TR>';
    // while($row = $mysql_fetch_array($result)) {
    //     echo '<TR><TD>'.$row['maso'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['ngaysinh'].'</TD><TD>'.$row['nghenghiep'].'</TD></TR>';
    // }
    // echo '</table>';
    // mysqli_free_result($result);
    // mysqli_close($link);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DULIEU";

    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from table1";
    $result = mysqli_query($link, $sql);

    echo '<table border="1" width="100%">';
    echo '<caption>DU LIEU TRUY XUAT TU BANG NHAN SU</caption>';
    echo '<TR><TH>MA SO</TH><TH>HO VA TEN</TH><TH>NGAY SINH</TH><TH>NGHE NGHIEP</TH></TR>';
    while($row = mysqli_fetch_assoc($result)) { //
                echo '<TR><TD>'.$row['maso'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['ngaysinh'].'</TD><TD>'.$row['nghenghiep'].'</TD></TR>';
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($link);

    //$conn = mysqli_connect($servername, $username, $password, $dbname); // Khúc ni khác là do ni là sqli còn dưới giống mà

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // $sql = "SELECT * FROM table1";
    // $result = mysqli_query($conn, $sql); //

    // if (mysqli_num_rows($result) > 0) {
    //     echo '<table border="1" width="100%">';
    //     echo '<caption>DU LIEU TRUY XUAT TU BANG NHAN SU</caption>';
    //     echo '<TR><TH>MA SO</TH><TH>HO VA TEN</TH><TH>NGAY SINH</TH><TH>NGHE NGHIEP</TH></TR>';
    //     while($row = mysqli_fetch_assoc($result)) { //
    //         echo '<TR><TD>'.$row['maso'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['ngaysinh'].'</TD><TD>'.$row['nghenghiep'].'</TD></TR>';
    //     }
    // } else {
    //     echo "0 results";
    // }

    // mysqli_close($conn);//
?>
