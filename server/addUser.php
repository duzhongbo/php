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

$sql1 = 'select * from user where username="'.$user.'"';
$result = $conn->query($sql1);
print_r($sql1);
if ($result->num_rows > 0) {
	echo json_encode(array('status'=>0,'data'=>array(),'msg'=>'该用户名已存在，请使用其他名称'));
}else{
	$sql2 = "INSERT INTO user (username, password, email)
	VALUES ('$user', '$age', '$email')";

	if ($conn->query($sql2) === TRUE) {
	    echo json_encode(array('status'=>1,'data'=>array(),'msg'=>'success'));
	} else {
	    echo "<br><br>Error: " . $sql2 . "<br>" . $conn->error;
	}
}



$conn->close();
} 


?>


