<?php
if(isset($_REQUEST['act'])){
	$act = $_REQUEST['act'];
	if($act=='add'){
		include('/server/addUser.php');
	}else if($act=='getAll'){
		include '/server/getAllUser.php';
	}else if($act=='check'){
		include '/server/check.php';
	}
}

?>
