<?php
class A{
    function display(){
        echo "this is class a<br>";
    }
}
class B extends A{
    function show(){
        echo "this is class b<br>";
    }
}
class C extends B{
    function view(){
        echo "this is class c";
    }
}
$call = new C();
$call->display();
$call->show();
$call->view();
?>