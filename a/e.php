<?php
require 'a.php';
$a = base64_encode($_POST['username']);
$b = sha1($_POST['password']);
if(isset($_POST['register'])){
	if(a($a,$b) == 0){
		$c = mysqli_query($conn,"INSERT INTO d (b,c) VALUES ('$a','$b')");
		if($c){
			setcookie("user", $a, time() + (86400 * 255), "/");
			echo gotourl("../chatbox");
		}else{
			mysqli_error($conn);
		}
	}else{
		echo gotourl("../chatbox?error=exist");
	}
}else{
	if(a($a,$b) == 1){
		setcookie("user", $a, time() + (86400 * 255), "/");
		echo gotourl("../chatbox");
	}else{
		echo gotourl("../chatbox?error=wrong");
	}
}

function a($a,$b){
	require 'a.php';
	$p1 = 0;
	if(isset($_POST['register'])){
		$p2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM d WHERE b = '$a'"));
		if($p2 > 0){
			$p1 = 1;
		}
	}else{
		$p2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM d WHERE b = '$a' AND c = '$b'"));
		if($p2 > 0){
			$p1 = 1;
		}
	}
	return $p1;
}
function gotourl($urlz){
	return "<script>location.href = '" . $urlz . "';</script>";
}
?>