<!DOCTYPE html>
<html>
<head>
	<title>Sulat Baybayin: FaQ's Page</title>
	<?php include 'b/a.php'; ?>
<meta name="description" content="Sulat Baybayin X: Frequently Asked question, random people may ask, developer will answer">
	<style type="text/css">
		.ul li:nth-child(even){
			background-color: rgba(255,255,255,0.5);
		}
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
<body>
	<div class="a navi">
		&emsp;<a id="back" href="index" title="Back"><b>←</b>&emsp;Sulat Baybayin: Frequently Asked Questions Page</a>
	</div>
	<?php include 'b/c.php'; ?>
	<div class="a main centerlayout b feed" style="padding: 10px; padding-bottom: 25px;">
		<p>Post any questions here so that every user may see the questions from random people. All the questions will only answer by the admin or the developer of the app itself.</p>
		<ul style="float: right;" class="ul">
			<?php
				$q1 = mysqli_query($conn,"SELECT * FROM b");
				$r1 = mysqli_num_rows($q1);
				if($r1 <= 0){
					echo "<p>Be the first user who ask</p>";
				}else{
					$q2 = mysqli_query($conn,"SELECT * FROM b ORDER BY a DESC");
					foreach ($q2 as $k1) {
						$r2 = $k1['a'];
						$q3 = mysqli_query($conn,"SELECT * FROM b WHERE a = '$r2'");
						$f1 = mysqli_fetch_array($q3);
						$r3 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM b WHERE e = '1'"));
						if(isset($f1['a'])){
							if($r3 > 0){
								if($f1['e'] == 1){
									echo "<li class='b' style='list-style:none;'>" . base64_decode($f1['b']) . " - " .  $f1['f'] . ": <p>Question: " . base64_decode($f1['c']) . "</p><p>Answer: " . base64_decode($f1['d']) . "</p></li>";
								}
							}else{
								echo "<p>Please wait for the developer's answer</p>";
							}
						}else{
							echo "<p>Be the first user who ask</p>";
						}
					}
				}
			?>
		</ul>
		<form action="a/c.php" method="POST">
			<?php
				if (!isset($_COOKIE['user'])) {
					echo '<input type="text" name="name" placeholder="Enter your name here" autocomplete="off">';
				} else {
					echo '<input type="text" class="b" name="name" placeholder="Enter your name here" autocomplete="off" value="' . base64_decode($_COOKIE['user']) . '" disabled>';
				}
				
			?><br>
			<input type="text" name="question" placeholder="Enter your question here"><br>
			<input type="submit" value="Send it now">
		</form>
	</div>
	<?php if(isset($_GET['error'])){if($_GET['error'] == 'name'){echo "<p id='snackbar'>Enter propper name</p>";}else if($_GET['error'] == 'sql'){echo "<p id='snackbar'>Mysql Error</p>";}else if($_GET['error'] == 'done'){echo "<p id='snackbar'>Wait for the developer's answer</p>";}else{echo "<p id='snackbar'>Existed already</p>";}}?>
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