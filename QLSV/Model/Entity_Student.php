<?php
    class Entity_Student
    {
        public $mssv;
        public $hoten;
        public $gioitinh;
        public $khoa;

        public function __construct($_mssv, $_hoten, $_gioitinh, $_khoa)
        {
            $this->mssv = $_mssv;
            $this->hoten = $_hoten;
            $this->gioitinh = $_gioitinh;
            $this->khoa = $_khoa;
        }
    }
?>