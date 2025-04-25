<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <input type="text" name="user_name" placeholder="Mayank" id="">
        <input type="password" name="password" placeholder="*******" id="">
        <button type="submit">submit</button>
    </form>
</body>

</html>
<?php 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = $_GET['user_name'];
    $pass = $_GET['password'];

if(empty($name)){
    echo "Name is empty";
}
else{
    echo $name;
    echo "<br>" . $pass;
}
}
 
?>