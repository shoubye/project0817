<?php

class Clest{

        public function __set($k,$v){
            public $Price = 10;
            private $dataBag;

            echo "__set is runing$k,$v.<br>";
            $this->dataBag[$k] = $v;

        }

        function __get($k){
            echo "__get be called .<br>";
            return $this->dataBag[$k];
        }


$obj = new Clest();
echo $obj->Price,"<br>";
$obj ->location ="Taichung";





// echo $obj->Weight."<br>";
// $obj -> makeNoise();
?>