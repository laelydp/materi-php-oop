<?php

class Animal{
    public $name;
    public $legs;
    public $cold_blooded;

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
}
$sheep = new Animal();
$sheep->set_name('Shaun');
$sheep->set_legs('4');
$sheep->set_cold_blooded('No');
echo "Name : " . $sheep->get_name();
echo "<Br>";
echo "Legs : " . $sheep->get_legs();
echo "<br";
echo "Cold Blooded : " . $sheep->get_cold_blooded();
echo "<br>";
    
?>