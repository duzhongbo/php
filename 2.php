<form action="?" method="post">
Name: <input type="text" name="fname">
Age: <input type="text" name="age">
<input type="submit">
</form>

<?php
if(isset($_POST["fname"])&&$_POST["age"])
{
 $fname=$_POST["fname"];
 $age=$_POST["age"];
 echo $fname;
 echo $age;
} 

?>
