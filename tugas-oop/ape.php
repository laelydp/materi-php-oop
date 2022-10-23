<?php
    class Ape {
        public $name;
        public $legs;
        public $cold_blooded;
        public $yell;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_legs($legs){
            $this->legs = $legs;
        }
        function get_legs (){
            return $this->legs;
        }
        function set_cold_blooded($cold_blooded){
            $this->cold_blooded = $cold_blooded;
        }
        function get_cold_blooded(){
            return $this->cold_blooded;
        }
        function set_yell($yell){
            $this->yell = $yell;
        }
        function get_yell(){
            return $this->yell;
        }
    }
    $sungokong = new Ape;
        $sungokong->set_name('Ape');
        $sungokong->set_legs('2');
        $sungokong->set_cold_blooded('No');
        $sungokong->set_yell('Auooooooooo');

        echo "Name : " . $sungokong->get_name();
        echo "<br>";
        echo "Legs : " . $sungokong->get_legs();
        echo "<br>";
        echo "Cold Blooded : " . $sungokong->get_cold_blooded();
        echo "<br>";
        echo "Yell : " . $sungokong->get_yell();
        echo "<br>";
        
?>
