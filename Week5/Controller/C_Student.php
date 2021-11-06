<?php
    include_once("../Model/M_Student.php");
    class Ctrl_Student 
    {
        public function invoke() {
            $modelStudent = new Model_Student();
            $mod = $_REQUEST['mod'];
            switch($mod) {
                case 'Show':
                    if(isset($_GET['stid'])) {
                        $student = $modelStudent->getStudentDetail($_GET['stid']);
                        include_once("../View/StudentDetail.php");
                    }
                    else {
                        $studentList = $modelStudent->getAllStudent();  
                        include_once("../View/StudentList.php");
                    }
                    break;
                case 'Add':
                    if(isset($_REQUEST['stid']) && isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['university']))
                    {
                        $stid = $_REQUEST['stid'];
                        $name = $_REQUEST['name'];
                        $age = $_REQUEST['age'];
                        $university = $_REQUEST['university'];
                        $modelStudent->addStudent($stid, $name, $age, $university);
                        $studentList = $modelStudent->getAllStudent();  
                        include_once("../View/StudentList.php");
                    }
                    break;
                case 'Update':
                    if(isset($_GET['stid']) ) {
                        $student = $modelStudent->getStudentDetail($_GET['stid']);
                        include_once("../View/UpdateStudent.php");
                        if(isset($_REQUEST['stid']) && isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['university']))
                        {
                            $id = $_REQUEST['stid'];
                            $name = $_REQUEST['name'];
                            $age = $_REQUEST['age'];
                            $university = $_REQUEST['university'];
                            $modelStudent->updateStudent($id, $name, $age, $university);
                        }
                    }
                    else {
                        $studentList = $modelStudent->getAllStudent();  
                        include_once("../View/StudentList.php");
                    }
                    break;
                case 'Delete':
                    if(isset($_GET['stid'])) 
                    {
                        $modelStudent->deleteStudent($_GET['stid']);
                    } else {
                        $studentList = $modelStudent->getAllStudent();  
                        include_once("../View/StudentList.php");
                    }
                    break;
                case 'Search':
                    if(isset($_REQUEST['select']) && isset($_REQUEST['input']))
                    {
                        $studentList = $modelStudent->searchStudent($_REQUEST['select'], $_REQUEST['input']);
                        include_once("../View/StudentList.php");
                    }
                    break;
            }
            
        }
    }
    $C_Student = new Ctrl_Student();
    $C_Student->invoke();
?>