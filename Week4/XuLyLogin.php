<?php
$user = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$choice = $_REQUEST['choice'];
if ($user == "" || $pwd == "") {
    header("Location: login_form.php");
} 
else {

    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
    mysqli_select_db($link, "dulieu");
    $sql = "select * from admin where username='$user' and pass='$pwd'";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) == 0) {
        header("Location: login_form.php");
    }
    else {
        switch($choice) {
            case 'updateNV':
                header("Location: CapNhat.php");
                break;
            case 'addNV':
                header("Location: AddNV_Form.php");
                break;
            case 'xoaNV':
                header("Location: XoaNV.php");
                break;
            case 'xoaAll':
                header("Location: XoaAll.php");
                break;
        }        
    }
    mysqli_free_result($result);
    mysqli_close($link);
}
