<?php
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
echo "Connected successfully <br>";

// 读取数据
$sql = "SELECT * FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> username: ". $row["username"]. " - Name: ". $row["password"]. " " . $row["email"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<a href="javascript:;" onclick="call()">发请求</a>
<script type="text/javascript" src="zepto.min.js"></script>
<script type="text/javascript">
function call(){
	$.get('3.php',function(json){
		var data = JSON.parse(json);
		console.log(data,data.c);
	})
}


</script>