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




// if($_SERVER["REQUEST_METHOD"] == "GET"){
//     $name = $_GET['user_name'];
//     $pass = $_GET['password'];
// }
// if(empty($name)){
//     echo "Name is empty";
// }
// else{
//     echo $name;
//     echo "<br>" . $pass;
// }


?>


