<?php
class Hello{
    // properties
    public $name;
    function set_name($user){
        $this->name = $user;
    }
    function get_name(){
        return $this->name;
    }
}

$mayank = new Hello(); // creating objects
$mayank->set_name("mayank"); // calling member function
$a = $mayank->get_name();
echo $a;
// echo $mayank->get_name();

?>