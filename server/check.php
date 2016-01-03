<?php

if(isset($_POST["username"])){

	$user=$_POST["username"];
	
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

	$sql = 'select * from user where username="'.$user.'"';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo json_encode(array('status'=>0,'data'=>array(),'msg'=>'该用户名已存在，请使用其他名称'));
	}
}





?>