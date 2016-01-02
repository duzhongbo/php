<?php

if(isset($_REQUEST['act'])){
	$act = $_REQUEST['act'];
	if($act=='add'){
		include('addUser.php');
	}else if($act=='getAll'){
		include 'getAllUser.php';
	}
}

?>
