<?php
    include_once("../Model/Model_Login.php");
    class Controller_Login 
    {
        public function invoke() {
            $model_login = new Model_Login();
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if ($model_login->isValidUser($username, $password) == true) {
                header("Location: Controller_Student.php?mod=Show");
            } else {
                header("Location: ../View/Login.php");
            }
        }
    }
    $Controller_Login = new Controller_Login();
    $Controller_Login->invoke();
?>