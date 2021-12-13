<?php
include_once("Entity_Faculty.php");
class Model_Faculty
{
    public function __construct()
    {
    }
    public function getAllFaculty()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "select * from khoa";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($rs)) {
            $idkhoa = $row['idkhoa'];
            $tenkhoa = $row['tenkhoa'];
            $khoas[$i++] = new Entity_Faculty($idkhoa, $tenkhoa);
        }
        return $khoas;
    }
}
