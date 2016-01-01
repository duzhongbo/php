<?php

// $a = json_encode(array('a'=>'bbb','c'=>'ddd'));

// echo $a;


$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$a = json_encode(array('username'=>$username,'password'=>$password,'email'=>$email));
echo $a;
?>


