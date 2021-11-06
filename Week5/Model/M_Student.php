<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct()
    {
    }
    public function getAllStudent()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "DULIEUSV");
        $sql = "select * from sinhvien";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($rs)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            $students[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;
    }

    public function getStudentDetail($stid)
    {
        $allStudent = $this->getAllStudent();
        return $allStudent[$stid];
    }

    public function addStudent($id, $name, $age, $university) 
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "DULIEUSV");
        $sql = "INSERT INTO sinhvien values ('$id', '$name', '$age', '$university')";
        $result = mysqli_query($link, $sql);
    }

    public function updateStudent($id, $name, $age, $university) 
    {
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi!");
        mysqli_select_db($link, "DULIEUSV");
        $sql = "UPDATE sinhvien SET name='$name', age='$age', university='$university' WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        header("Location: C_Student.php?stid=".$id."&mod=Show");
    }

    public function deleteStudent($id)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "DULIEUSV");
        $sql = "DELETE FROM sinhvien WHERE id='$id'";
        $result = mysqli_query($link, $sql);
        header("Location: C_Student.php?mod=Delete");
    }

    public function searchStudent($select, $input) 
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi!");
        mysqli_select_db($link, "DULIEUSV");
        $sql = '';
        switch($select) {
            case('id'):
            case('age'):
                $sql = 'SELECT * FROM sinhvien WHERE '.$select.' = '.$input;
                break;
            case('name'):
            case('university'):
                $sql = 'SELECT * FROM sinhvien WHERE '.$select.' LIKE N\'%'.$input.'%\'';
                break;
        }
        $result = mysqli_query($link, $sql);
        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                $students[$i++] = new Entity_Student($id, $name, $age, $university);
            }
        } else {
            $students = [];
        }
        return $students;
    }
}
