<?php

class Animal{

        public function __construct($WeightValue = 1){
            $this->Weight = $WeightValue;
            echo "Object created.<br>";

        }

        //不再使用時，立即清掉
        function __destruct(){
            echo "Object destruct.<br>";
        }


        //public為公開(預設),private為私有
        public $Weight = 1;
        public function makeNoise(){
            echo "Animal.......................<br>";
        }


}
echo "Flag 1.<br>";
$obj = new Animal(777);
echo "Flag 2.<br>";
$obj = null;
echo "Flag 3.<br>";




// echo $obj->Weight."<br>";
// $obj -> makeNoise();
?>