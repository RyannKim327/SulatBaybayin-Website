<?php
require 'a.php';
$a = $_POST['id'];
$b = base64_encode($_POST['ans']);

if(exts($a,$b)){
	$q1 = mysqli_query($conn,"UPDATE b SET d = '$b', e = '1' WHERE a = '$a'");
	if($q1){
		echo gotourl("../000admin000?error=done");
	}else{
		echo gotourl("../000admin000?error=sql");
	}
}else{
	echo gotourl("../000admin000");
}

function exts($a,$b){
		require 'a.php';
		$bool = 0;
		$r1 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM b WHERE a = '$a'"));
		if($r1 > 0){
			$bool = 1;
		}
		return $bool;
	}
	function gotourl($urlz){
		return "<script>location.href = '" . $urlz . "';</script>";
	}
?>