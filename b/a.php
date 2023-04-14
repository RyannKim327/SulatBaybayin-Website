<?php
	if(isset($_GET['a'])){
		$a = $_GET['a'];
		if($a == '1'){
			echo "<link rel='stylesheet' type='text/css' href='styles/b.css'>";
			setcookie("theme", $a, time() + (86400 * 255), "");
		}else{
			echo "<link rel='stylesheet' type='text/css' href='styles/a.css'>";
			setcookie("theme", $a, time() + (86400 * 255),"");
		}
	}else{
		if(isset($_COOKIE['theme'])){
			$a = $_COOKIE['theme'];
			if($a == '1'){
				echo "<link rel='stylesheet' type='text/css' href='styles/b.css'>";
			}else{
				echo "<link rel='stylesheet' type='text/css' href='styles/a.css'>";
			}
		}else{
			echo "<link rel='stylesheet' type='text/css' href='styles/a.css'>";
		}
	}
	include 'a/a.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimal-ui">
</head>
<body>
</html>