<!DOCTYPE html>
<html>
<head>
	<title>Sulat Baybayin: Feedback Section</title>
	<?php include 'b/a.php'; ?>
<meta name="description" content="Sulat Baybayin X: Feedback page">
	<style type="text/css">
		@keyframes a{
			from{
				transform: scale(0);
			}to{
				transform: scale(1);
			}
		}
		@-webkit-keyframes a{
			from{
				transform: scale(0);
			}to{
				transform: scale(1);
			}
		}
		#form{
			-webkit-animiation: a 0.5s;
			animation: a 0.5s;
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
		.progbg{
			background-color: #555;
			width: 100%;
		}
		.prog{
			background-color: #aaa;
			color: #000;
			text-align: right;
		}
		#form label{
			background: transparent !important;
			box-shadow: 0 0 0 transparent
		}
		.list li:nth-child(even){
			background-color: rgba(255,255,255,0.5);
		}
	</style>
</head>
<body>
	<div class="a navi">
		&emsp;<a id="back" href="index" title="Back"><b>←</b>&emsp;Sulat Baybayin: Feedback Section</a>
	</div>
	<?php include 'b/c.php'; ?>
	<div class="a main centerlayout b feed">
		<kim id="nav" onclick="document.getElementById('form').style.display = 'block';" style="user-select: none;">&#9776;</kim>&emsp;To post your feedback, just click the navigation icon<br>
		<form style="display: none; z-index: 1;" id="form" action="a/b.php" method="POST" autocomplete="off">
			<kim><kim style="font-family: serif; cursor: pointer; float: right; width: auto; font-size: 2em; padding: 5px; user-select:none;" onclick="document.getElementById('form').style.display = 'none';">&times;</kim>
				Feedback form
			</kim>
			<br>
			<?php
				if (!isset($_COOKIE['user'])) {
					echo '<input type="text" name="name" placeholder="Enter your name here" autocomplete="off">';
				} else {
					echo '<input type="text" class="b" name="name" placeholder="Enter your name here" autocomplete="off" value="' . base64_decode($_COOKIE['user']) . '" disabled>';
				}
				
			?><br>
			<textarea required style="resize: none;" rows="5" name="content" placeholder="Your feedback here"></textarea><br>
			<kim>Rate my app please: </kim><br>
			<label><input type="radio" name="rate" value="1"><b>&#x26E4</b></label><br>
			<label><input type="radio" name="rate" value="2"><b>&#x26E4&#x26E4</b></label><br>
			<label><input type="radio" name="rate" value="3"><b>&#x26E4&#x26E4&#x26E4</b></label><br>
			<label><input type="radio" name="rate" value="4"><b>&#x26E4&#x26E4&#x26E4&#x26E4</b></label><br>
			<label><input type="radio" name="rate" value="5" checked><b>&#x26E4&#x26E4&#x26E4&#x26E4&#x26E4</b></label><br>
			<input type="submit" value="Send it now">
		</form>
		<?php
			$q1 = mysqli_query($conn,"SELECT * FROM a");
			$r1 = mysqli_num_rows($q1);
			if($r1 > 0){
				$c1 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a WHERE d = '1'"));
				$c2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a WHERE d = '2'"));
				$c3 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a WHERE d = '3'"));
				$c4 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a WHERE d = '4'"));
				$c5 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a WHERE d = '5'"));
				$c6 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM a"));
				echo "Ratings:<br>Total: " . $c6 . "<br>1 star: <div class='progbg a'><div class='a prog' style='width:" . ($c1 / $c6) * 100 . "%;'>" . $c1 . "</div></div><br>2 stars:<div class='progbg a'><div class='a prog' style='width:" . ($c2 / $c6) * 100 . "%;'>" . $c2 . "</div></div><br>3 stars: <div class='progbg a'><div class='a prog' style='width:" . ($c3 / $c6) * 100 . "%;'>" . $c3 . "</div></div><br>4 stars: <div class='progbg a'><div class='a prog' style='width:" . ($c4 / $c6) * 100 . "%;'>" . $c4 . "</div></div><br>5 stars: <div class='progbg a'><div class='a prog' style='width:" . ($c5 / $c6)*100 . "%;'>" . $c5 . "</div></div>";
			}
		?>
		<ul class="list">
			<?php
				if($r1 <= 0){
					echo "<p>Be the first user who give feedback</p>";
				}else{
					$q2 = mysqli_query($conn,"SELECT * FROM a ORDER BY a DESC");
					foreach ($q2 as $k1) {
						$r2 = $k1['a'];
						$q3 = mysqli_query($conn,"SELECT * FROM a WHERE a = '$r2'");
						$f1 = mysqli_fetch_array($q3);
						echo ($r1 == $r2) ? "" : "<hr>";
						if(empty($af['a'])){
							echo "<li class='b' style='list-style:none;'>" . base64_decode($f1['b']) . " - " . $f1['e'] . "<br>Rate: " . $f1['d'] . (($f1['d'] == 1) ? " star" : " stars") . ": <p>" . str_replace(PHP_EOL, "</p><p>", base64_decode($f1['c'])) . "</p>" . "</li>";
						}else{
							echo "<li class='b' style='list-style:none;'>" . base64_decode($f1['b']) . " - " . $f1['e'] . "<br>Rate: " . $f1['d'] . (($f1['d'] == 1) ? " star" : " stars") .  ": <p>" . str_replace(PHP_EOL, "</p><p>", base64_decode($f1['c'])) . "</p>" . "</li>";
						}
					}
				}
			?>
		</ul>
	</div>
	<?php if(isset($_GET['error'])){if($_GET['error'] == 'name'){echo "<p id='snackbar'>Enter propper name</p>";}else if($_GET['error'] == 'sql'){echo "<p id='snackbar'>Mysql Error</p>";}else if($_GET['error'] == 'done'){echo "<p id='snackbar'>Success</p>";}else{echo "<p id=snackbar'>Existed already</p>";}}?>
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