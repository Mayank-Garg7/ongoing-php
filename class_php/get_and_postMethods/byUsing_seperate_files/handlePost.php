<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['user_name'];
    $pass = $_POST['password'];
}
if(empty($name)){
    echo "Name is empty";
}
else{
    echo $name;
    echo "<br>" . $pass;
}

?>


