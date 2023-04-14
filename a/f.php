<?php
require 'a.php';
$a = $_POST['message'];
$b = $_COOKIE['user'];
$c = array(" ",PHP_EOL);
$d = array("","");
$e = array("porn","xnxx","xhamster","p0rn","p*rn","xvideo","xvide0","tanga","bobo","bubu","b0b0","bubo","bobu","b0bu","bub0","ulol","ul0l","u101","u1o1","gago","tangina","putangina");
if(str_replace($c, $d, $a) == ""){
	echo gotourl("../chatbox?error=blank");
}else{
	$s1 = base64_encode(str_replace($e, "*", $a));
	$p1 = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM d WHERE b = '$b'"));
	$p2 = $p1['a'];
	$s2 = mysqli_query($conn,"INSERT INTO e (b,c) VALUES ('$p2','$s1')");
	if($s2){
		echo gotourl("../chatbox");
	}else{
		echo gotourl("../chatbox?error=sql");
	}
}
function gotourl($urlz){
	return "<script>location.href = '" . $urlz . "';</script>";
}
?>