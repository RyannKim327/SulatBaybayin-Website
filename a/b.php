<?php
require 'a.php';
$a = isset($_COOKIE['user']) ? base64_decode($_COOKIE['user']) : $_POST['name'];
$b = $_POST['content'];
$c = $_POST['rate'];
$d = array(" ",PHP_EOL);
$e = array("","");
	if($c >= 0 && $c <= 5){
		if(returnq($a,$b) || returnq("Anonymous", $b)){
			echo gotourl("../feedback?error=exist");
		}else if(strcasecmp($a, "YOU") == 0){
			echo gotourl("../feedback?error=name");
		}else if(str_replace($d, $e, $b) == ""){
			echo gotourl("../feedback?error=exist");
		}else{
			$s1 = base64_encode((str_replace(" ", "", $a) == "") ? "Anonymous" : $a);
			$s2 = base64_encode($b);
			$q1 = mysqli_query($conn,"INSERT INTO a(b,c,d) VALUES ('$s1', '$s2',$c)");
			if($q1){
				echo gotourl("../feedback?error=done");
			}else{
				echo gotourl("../feedback?error=sql");
			}
		}
	}else{
		echo gotourl("../feedback?error=exist");
	}
	function returnq($a,$b){
		require 'a.php';
		$b1 = 0;
		$q1 = mysqli_query($conn,"SELECT * FROM a WHERE b = '$a' AND c = '$b'");
		$r1 = mysqli_num_rows($q1);
		if($r1 > 0){
			$b1 = 1;
		}
		return $b1;
	}
	function gotourl($urlz){
		return "<script>location.href = '" . $urlz . "';</script>";
	}
?>