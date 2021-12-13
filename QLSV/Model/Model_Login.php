<?php

class Model_Login
{
    public function __construct()
    {
    }
    public function isValidUser($username, $pwd)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "test888");
        $sql = "select * from admin where username = '$username' and password = '$pwd'";
        $rs = mysqli_query($link, $sql);
        if (mysqli_num_rows($rs) > 0) {
            return true;
        } else {
            return false;
        }
    }

}
