<!DOCTYPE html>
<html>
<head>
	<title>Sulat Baybayin: Admin Panel</title>
	<?php include 'b/a.php'; ?>
	<style type="text/css">
		#snackbar {
		    visibility: hidden;
		    min-width: 250px;
		    margin-left: -125px;
		    background-color: #333;
		    color: #fff;
		    text-align: center;
		    border-radius: 2px;
		    padding: 16px;
		    position: fixed;
		    z-index: 1;
		    left: 50%;
		    bottom: 30px;
		    font-size: 17px;
		}

		#snackbar.show {
		    visibility: visible;
		    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		    animation: fadein 0.5s, fadeout 0.5s 2.5s;
		}

		@-webkit-keyframes fadein {
		    from {bottom: 0; opacity: 0;} 
		    to {bottom: 30px; opacity: 1;}
		}

		@keyframes fadein {
		    from {bottom: 0; opacity: 0;}
		    to {bottom: 30px; opacity: 1;}
		}

		@-webkit-keyframes fadeout {
		    from {bottom: 30px; opacity: 1;} 
		    to {bottom: 0; opacity: 0;}
		}

		@keyframes fadeout {
		    from {bottom: 30px; opacity: 1;}
		    to {bottom: 0; opacity: 0;}
		}
	</style>
</head>
<?php
if(isset($_COOKIE['user'])){
$a1 = $_COOKIE['user'];
$a2 = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM d WHERE b = '$a1'"));
if($a2['a'] != '1'){
echo "<script>location.href='index';</script>";
}
}else{
echo "<script>location.href='index';</script>";
}
?>
<body>
	<div class="a navi">
		&emsp;<a id="back" href="index" title="Back"><b>←</b>&emsp;Sulat Baybayin: Frequently Asked Questions Page</a>
	</div>
	<div class="a main centerlayout b feed">
		<form action="a/d.php" method="POST">
			<input type="number" name="id" placeholder="Enter question id here" autocomplete="off" value="<?php echo (isset($_GET['id'])) ? $_GET['id'] : ""; ?>"><br>
			<input type="text" name="ans" placeholder="Enter your answer here"><br>
			<input type="submit" value="Send it now">
		</form>
		<ul>
			<?php
				$q1 = mysqli_query($conn,"SELECT * FROM b");
				$r1 = mysqli_num_rows($q1);
				if($r1 <= 0){
					echo "<p>No questions pending</p>";
				}else{
					$q2 = mysqli_query($conn,"SELECT * FROM b ORDER BY a");
					foreach ($q2 as $k1) {
						$r2 = $k1['a'];
						$q3 = mysqli_query($conn,"SELECT * FROM b WHERE a = '$r2'");
						$f1 = mysqli_fetch_array($q3);
						if(isset($f1['a'])){
							if($f1['e'] == 0){
								echo "<a class='b' href='?id=	" . $f1['a'] . "'><li style='list-style:none;'>" . $f1['a'] . " " . base64_decode($f1['b']) . " - " .  $f1['f'] . ": <p>" . base64_decode($f1['c']) . "</p><p>" . $f1['f'] . "</p></<li></a>";
							}
						}else{
							echo "<p>No questions pending</p>";
						}
					}
				}
			?>
		</ul>
	</div>
	<?php if(isset($_GET['error'])){if($_GET['error'] == 'name'){echo "<p id='snackbar'>Enter propper name</p>";}else if($_GET['error'] == 'sql'){echo "<p id='snackbar'>Mysql Error</p>";}else if($_GET['error'] == 'done'){echo "<p id='snackbar'>Success</p>";}else{echo "<p id='snackbar'>Existed already</p>";}}?>
	<?php include 'b/b.php'; ?>
</body>
<script type="text/javascript">
	<?php echo (isset($_GET['error'])) ? "myFunction();" : ""; ?>
	function myFunction() {
		var snackers = document.getElementById("snackbar");
		snackers.className = "show";
		setTimeout(function(){snackers.className = "";},3000);
	}
</script>
</html>