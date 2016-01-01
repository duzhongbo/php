<form action="?" method="post">
username: <input type="text" name="username"><br>
password: <input type="text" name="password"><br>
email: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
if(isset($_POST["username"])&&$_POST["password"]&&$_POST["email"])
{
 $user=$_POST["username"];
 $age=$_POST["password"];
 $email=$_POST["email"];
 echo $user;
 echo $age;
 echo $email;
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
    echo "<br><br>New record created successfully";
} else {
    echo "<br><br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 

?>

<?php
?> 