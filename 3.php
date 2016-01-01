<?php

if(isset($_POST["username"])&&$_POST["password"]&&$_POST["email"])
{
 $user=$_POST["username"];
 $age=$_POST["password"];
 $email=$_POST["email"];

$servername = "localhost";
$username = "root";
$password = "654321";
$dbname = "blog";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (username, password, email)
VALUES ('$user', '$age', '$email')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array('status'=>1,'data'=>'{}','msg'=>'success'));
} else {
    echo "<br><br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 




// $username = $_POST["username"];
// $password = $_POST["password"];
// $email = $_POST["email"];

// $a = json_encode(array('username'=>$username,'password'=>$password,'email'=>$email));
// echo $a;


?>


