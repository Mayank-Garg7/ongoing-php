<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = $_GET['user_name'];
    $pass = $_GET['password'];
}
if(empty($name)){
    echo "Name is empty";
}
else{
    echo $name;
    echo "<br>" . $pass;
}

?>