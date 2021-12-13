<?php
    class Entity_Faculty
    {
        public $idkhoa;
        public $tenkhoa;

        public function __construct($_idkhoa, $_tenkhoa)
        {
            $this->idkhoa = $_idkhoa;
            $this->tenkhoa = $_tenkhoa;
        }
    }
