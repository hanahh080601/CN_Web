<?php
    include_once("../Model/Model_Student.php");
    include_once("../Model/Model_Faculty.php");
    class Controller_Student 
    {
        public function invoke() {
            $modelStudent = new Model_Student();
            $modelFaculty = new Model_Faculty();
            $mod = $_REQUEST['mod'];
            switch($mod) {
                case 'Show':
                    if(isset($_REQUEST['khoa'])) {
                        $khoa = $_REQUEST['khoa'];
                        if ($khoa == "all") {
                            $khoas = $modelFaculty->getAllFaculty();
                            $studentList = $modelStudent->getAllStudent();
                            include_once("../View/StudentList.php");
                        } else {
                            $khoas = $modelFaculty->getAllFaculty();
                            $studentList = $modelStudent->getStudentByFaculty($khoa);
                            include_once("../View/StudentList.php");
                        }
                    }
                    else {
                        $khoas = $modelFaculty->getAllFaculty();
                        $studentList = $modelStudent->getAllStudent();
                        include_once("../View/StudentList.php");
                    }
                    break;

                case 'viewAdd':
                    $khoas = $modelFaculty->getAllFaculty();
                    include_once("../View/AddStudent.php");
                    break;

                case 'Add':
                    if(isset($_REQUEST['mssv']) && isset($_REQUEST['hoten']) && isset($_REQUEST['gioitinh']) && isset($_REQUEST['khoa']))
                    {
                        $mssv = $_REQUEST['mssv'];
                        $hoten = $_REQUEST['hoten'];
                        $gioitinh = $_REQUEST['gioitinh'];
                        $khoa = $_REQUEST['khoa'];
                        $modelStudent->addStudent($mssv, $hoten, $gioitinh, $khoa);
                        header("Location: Controller_Student.php?mod=Show");
                    }
                    break;

                case 'viewUpdate':
                    $khoas = $modelFaculty->getAllFaculty();
                    $student = $modelStudent->getStudentDetail($_REQUEST['mssv']);
                    include_once("../View/UpdateStudent.php");
                    break;

                case 'Update':
                    if(isset($_REQUEST['mssv']) && isset($_REQUEST['hoten']) && isset($_REQUEST['gioitinh']) && isset($_REQUEST['khoa']))
                    {
                        $mssv = $_REQUEST['mssv'];
                        $hoten = $_REQUEST['hoten'];
                        $gioitinh = $_REQUEST['gioitinh'];
                        $khoa = $_REQUEST['khoa'];
                        $modelStudent->updateStudent($mssv, $hoten, $gioitinh, $khoa);
                    }
                    header("Location: Controller_Student.php?mod=Show");
                    break;

                case 'Delete':
                    if(isset($_GET['mssv'])) 
                    {
                        $modelStudent->deleteStudent($_GET['mssv']);
                        header("Location: Controller_Student.php?mod=Show");
                    } 
                    break;
            }
            
        }
    }
    $Controller_Student = new Controller_Student();
    $Controller_Student->invoke();
?>