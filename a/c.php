<?php
require 'a.php';
$a = isset($_COOKIE['user']) ? base64_decode($_COOKIE['user']) : $_POST['name'];
$b = $_POST['question'];
$c = base64_encode((str_replace(" ", "", $a) == "") ? "Anonymous" : $a);
	if(exts($c,$b)){
		echo gotourl("../faq?error=exist");
	}else{
		$s1 = str_replace(PHP_EOL, " ", $b);
		if (str_replace(" ", "", $s1) == "") {
			echo gotourl("../feedback?error=exist");
		} else {
			$s2 = base64_encode($s1);
			$q1 = mysqli_query($conn,"INSERT INTO b(b,c) VALUES ('$c', '$s2')");
			if($q1){
				echo gotourl("../faq?error=done");
			}else{
				echo gotourl("../faq/error=sql");
			}
		}
		
	}

	function exts($a,$b){
		require 'a.php';
		$bool = 0;
		$r1 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM b WHERE b = '$a' AND c = '$b'"));
		if($r1 > 0){
			$bool = 1;
		}
		return $bool;
	}
	function gotourl($urlz){
		return "<script>location.href = '" . $urlz . "';</script>";
	}
?>