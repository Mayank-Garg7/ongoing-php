<?php
class Hello{
    // properties
    public $name;
    
    function __construct(){
        echo "object is created";
    }

    function set_name($user){
        $this->name = $user;
    }

    function get_name(){
        return $this->name;
    }
}

$mayank = new Hello();

?>