<?php
include_once("Entity_Student.php");
class Model_Student
{
    public function __construct()
    {
    }
    public function getAllStudent()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "select * from sinhvien";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($rs)) {
            $mssv = $row['mssv'];
            $hoten = $row['hoten'];
            $gioitinh = $row['gioitinh'];
            $khoa = $row['khoa'];
            $students[$i++] = new Entity_Student($mssv, $hoten, $gioitinh, $khoa);
        }
        return $students;
    }

    public function getStudentDetail($stid)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "SELECT * FROM sinhvien WHERE mssv = '$stid'";
        $rs = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($rs)) {
            $mssv = $row['mssv'];
            $hoten = $row['hoten'];
            $gioitinh = $row['gioitinh'];
            $khoa = $row['khoa'];
            $student = new Entity_Student($mssv, $hoten, $gioitinh, $khoa);
        }
        return $student;
    }

    public function getStudentByFaculty($khoa)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "SELECT * FROM sinhvien WHERE khoa = '$khoa'";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($rs)) {
            $mssv = $row['mssv'];
            $hoten = $row['hoten'];
            $gioitinh = $row['gioitinh'];
            $khoa = $row['khoa'];
            $students[$i++] = new Entity_Student($mssv, $hoten, $gioitinh, $khoa);
        }
        return $students;
    }

    public function addStudent($mssv, $hoten, $gioitinh, $khoa) 
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "INSERT INTO sinhvien values ('$mssv', '$hoten', '$gioitinh', '$khoa')";
        $result = mysqli_query($link, $sql);
    }

    public function updateStudent($mssv, $hoten, $gioitinh, $khoa) 
    {
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "UPDATE sinhvien SET hoten='$hoten', gioitinh='$gioitinh', khoa='$khoa' WHERE mssv = '$mssv'";
        echo $sql;
        $result = mysqli_query($link, $sql);
    }

    public function deleteStudent($mssv)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = "DELETE FROM sinhvien WHERE mssv='$mssv'";
        $result = mysqli_query($link, $sql);
    }

    public function searchStudent($input) 
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "Test888");
        $sql = 'SELECT * FROM sinhvien WHERE khoa = '.$input;
        $result = mysqli_query($link, $sql);
        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $mssv = $row['mssv'];
                $hoten = $row['hoten'];
                $gioitinh = $row['gioitinh'];
                $khoa = $row['khoa'];
                $students[$i++] = new Entity_Student($mssv, $hoten, $gioitinh, $khoa);
            }
        } else {
            $students = [];
        }
        return $students;
    }

}
