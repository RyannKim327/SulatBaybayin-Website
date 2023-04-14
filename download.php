<!DOCTYPE html>
<html>
<head>
	<title>Sulat Baybayin: Download pages</title>
	<?php include 'b/a.php'; ?>
<meta name="description" content="Sulat Baybayin X: Download page">
</head>
<body>
	<div class="a navi">
		&emsp;<a id="back" href="index" title="Back"><b>←</b>&emsp;Sulat Baybayin: Download pages</a>
	</div>
	<?php include 'b/c.php'; ?>
	<div class="a main centerlayout b">
		<ul>
			<li>
				<a href="?dl=server">Sulat Baybayin: Server Side (Sulat Baybayin.apk) - <?php echo filesize("a/Sulat Baybayin.apk") / 1000 . " kb"; ?></a><br>Downloads: <?php require 'a/a.php'; echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM c")); ?>
			</li>
		</ul>
	</div>
	<?php include 'b/b.php'; ?>
</body>
<?php
if(isset($_GET['dl'])){
	if($_GET['dl'] == "server"){
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$s1 = mysqli_query($conn,"INSERT INTO c(b) VALUES ('$agent')");
		if($s1){
			download("a","Sulat Baybayin.apk");
		}
	}
}
function download($a,$b){
	header('Content-Description: File Transfer');
  	header('Content-Type: application/force-download');
  	header("Content-Disposition: attachment; filename=\"" . basename($b) . "\";");
  	header('Content-Transfer-Encoding: binary');
  	header('Expires: 0');
  	header('Cache-Control: must-revalidate');
  	header('Pragma: public');
  	header('Content-Length: ' . filesize($a . "/" . $b));
  	ob_clean();
  	flush();
  	readfile($a."/".$b);
  	exit;
}
?>
</html>