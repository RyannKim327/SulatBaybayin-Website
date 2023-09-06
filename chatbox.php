<!DOCTYPE html>
<html>
<head>
	<title>Sulat Baybayin: Chatbox Section - <?php echo (isset($_COOKIE['user'])) ? str_replace("<", "&lt;", base64_decode($_COOKIE['user']) ): "Login Panel";?></title>
	<meta name="description" content="Sulat Baybayin X: Chatbox page, talk with strangers">
	<?php require 'b/a.php'; ?>
	<style type="text/css">
		.list li:nth-child(even){
			background-color: rgba(255,255,255,0.5);
		}
		td{
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: #000;
			width: 50px !important;
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
		&emsp;<a id="back" href="index" title="Back"><b>←</b>&emsp;Sulat Baybayin: Chatbox Section</a>
	</div>
<div class="a main centerlayout">
	<?php if(!isset($_COOKIE['user'])){ ?>
	<form method="POST" action="a/e.php">
		<input id="field" class="b" type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<label>Registration? <input type="checkbox" name="register"></label><br>
		<input type="submit" value="Submit">
	</form>
		<table>
			<tr>
				<td onclick="input('&#5888;');" class="b"><center>&#5888;<label class="buts"><br>A</label></center></td>
				<td onclick="input('&#5889;');" class="b"><center>&#5889;<label class="buts"><br>E</label></center></td>
				<td onclick="input('&#5890;');" class="b"><center>&#5890;<label class="buts"><br>O</label></center></td>
				<td onclick="input('&#5898;');" class="b"><center>&#5898;<label class="buts"><br>Ba</label></center></td>
				<td onclick="input('&#5891;');" class="b"><center>&#5891;<label class="buts"><br>Ka</label></center></td>
				<td onclick="input('&#5895;');" class="b"><center>&#5895;<label class="buts"><br>Da</label></center></td>
				<td onclick="input('&#5892;');" class="b"><center>&#5892;<label class="buts"><br>Ga</label></center></td>
				<td onclick="input('&#5905;');" class="b"><center>&#5905;<label class="buts"><br>Ha</label></center></td>
				<td onclick="input('&#5902;');" class="b"><center>&#5902;<label class="buts"><br>La</label></center></td>
			</tr>
			<tr>
				<td onclick="input('&#5899;');" class="b"><center>&#5899;<label class="buts"><br>Ma</label></center></td>
				<td onclick="input('&#5896;');" class="b"><center>&#5896;<label class="buts"><br>Na</label></center></td>
				<td onclick="input('&#5893;');" class="b"><center>&#5893;<label class="buts"><br>Nga</label></center></td>
				<td onclick="input('&#5897;');" class="b"><center>&#5897;<label class="buts"><br>Pa</label></center></td>
				<td onclick="input('&#5901;');" class="b"><center>&#5901;<label class="buts"><br>Ra</label></center></td>
				<td onclick="input('&#5904;');" class="b"><center>&#5904;<label class="buts"><br>Sa</label></center></td>
				<td onclick="input('&#5894;');" class="b"><center>&#5894;<label class="buts"><br>Ta</label></center></td>
				<td onclick="input('&#5903;');" class="b"><center>&#5903;<label class="buts"><br>Wa</label></center></td>
				<td onclick="input('&#5900;');" class="b"><center>&#5900;<label class="buts"><br>Ya</label></center></td>
			</tr>
			<tr>
				<td onclick="input('&#5906;');" class="b"><center>&emsp;&#5906;<label class="buts"><br>*e</label></center></td>
				<td onclick="input('&#5907;');" class="b"><center>&emsp;&#5907;<label class="buts"><br>*o</label></center></td>
				<td onclick="input('&#5908;');" class="b"><center>&emsp;&#5908;<label class="buts"><br>virama</label></center></td>
				<td onclick="input('&#5942;');" class="b"><center>&#5942;<label class="buts"><br>.</label></center></td>
				<td onclick="input('&#5941;');" class="b"><center>&#5941;<label class="buts"><br>,</label></center></td>
				<td onclick="input('&#32;');" class="b"><center>&emsp;&#32;<label class="buts"><br>agwat</label></center></td>
				<td onclick="b();" class="b"><center>←<label class="buts"><br>bawas</label></center></td>
				<td onclick="c();" class="b"><center>clear<label class="buts"><br>bura</label></center></td>
			</tr>
		</table>
	<?php }else{ echo "<p class='b'>Welcome: " . str_replace("<", "&lt;", base64_decode($_COOKIE['user']) ). " <a href='chatbox'>Refresh</a></p>";?>
	<p>Don't post any kind of pornographic content and illegal activities, this is just a open section for those who want to talk using baybayin characters.</p>
	<form action="a/f.php" method="POST">
		<input onchange="d();" oninput="d();" class="b" id="field" type="text" name="message" required autofocus>	
		<input type="submit" value="Submit">
	</form>
	<p id="b"></p>
		<table>
			<tr>
				<td onclick="input('&#5888;');" class="b"><center>&#5888;<label class="buts"><br>A</label></center></td>
				<td onclick="input('&#5889;');" class="b"><center>&#5889;<label class="buts"><br>E</label></center></td>
				<td onclick="input('&#5890;');" class="b"><center>&#5890;<label class="buts"><br>O</label></center></td>
				<td onclick="input('&#5898;');" class="b"><center>&#5898;<label class="buts"><br>Ba</label></center></td>
				<td onclick="input('&#5891;');" class="b"><center>&#5891;<label class="buts"><br>Ka</label></center></td>
				<td onclick="input('&#5895;');" class="b"><center>&#5895;<label class="buts"><br>Da</label></center></td>
				<td onclick="input('&#5892;');" class="b"><center>&#5892;<label class="buts"><br>Ga</label></center></td>
				<td onclick="input('&#5905;');" class="b"><center>&#5905;<label class="buts"><br>Ha</label></center></td>
				<td onclick="input('&#5902;');" class="b"><center>&#5902;<label class="buts"><br>La</label></center></td>
			</tr>
			<tr>
				<td onclick="input('&#5899;');" class="b"><center>&#5899;<label class="buts"><br>Ma</label></center></td>
				<td onclick="input('&#5896;');" class="b"><center>&#5896;<label class="buts"><br>Na</label></center></td>
				<td onclick="input('&#5893;');" class="b"><center>&#5893;<label class="buts"><br>Nga</label></center></td>
				<td onclick="input('&#5897;');" class="b"><center>&#5897;<label class="buts"><br>Pa</label></center></td>
				<td onclick="input('&#5901;');" class="b"><center>&#5901;<label class="buts"><br>Ra</label></center></td>
				<td onclick="input('&#5904;');" class="b"><center>&#5904;<label class="buts"><br>Sa</label></center></td>
				<td onclick="input('&#5894;');" class="b"><center>&#5894;<label class="buts"><br>Ta</label></center></td>
				<td onclick="input('&#5903;');" class="b"><center>&#5903;<label class="buts"><br>Wa</label></center></td>
				<td onclick="input('&#5900;');" class="b"><center>&#5900;<label class="buts"><br>Ya</label></center></td>
			</tr>
			<tr>
				<td onclick="input('&#5906;');" class="b"><center>&emsp;&#5906;<label class="buts"><br>*e</label></center></td>
				<td onclick="input('&#5907;');" class="b"><center>&emsp;&#5907;<label class="buts"><br>*o</label></center></td>
				<td onclick="input('&#5908;');" class="b"><center>&emsp;&#5908;<label class="buts"><br>virama</label></center></td>
				<td onclick="input('&#5942;');" class="b"><center>&#5942;<label class="buts"><br>.</label></center></td>
				<td onclick="input('&#5941;');" class="b"><center>&#5941;<label class="buts"><br>,</label></center></td>
				<td onclick="input('&#32;');" class="b"><center>&emsp;&#32;<label class="buts"><br>agwat</label></center></td>
				<td onclick="b();" class="b"><center>←<label class="buts"><br>bawas</label></center></td>
				<td onclick="c();" class="b"><center>clear<label class="buts"><br>bura</label></center></td>
			</tr>
		</table>
	<ul class="list">
		<?php
			$q1 = mysqli_query($conn,"SELECT * FROM e");
			if(mysqli_num_rows($q1) <= 0){
				echo "Be the first one who use this feature";
			}else{
				$q2 = mysqli_query($conn,"SELECT * FROM e ORDER BY a DESC LIMIT 15");
				foreach ($q2 as $a1) {
					$g1 = $a1['a'];
					$q3 = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM e WHERE a = '$g1'"));
					$d1 = $q3['b'];
					$q4 = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM d WHERE a = '$d1'"));
					if($q3['b'] != 0){
						echo "<li style='list-style:none;' class='b'>" . str_replace("<", "&lt;", base64_decode($q4['b'])) . ": " str_replace.("<", "&lt;",  base64_decode($q3['c']) ). "</li>";
					}else{
						echo "<li style='list-style:none;' class='b'>Unknown User: " str_replace.("<", "&lt;",  base64_decode($q3['c']) ). "</li>";
					}
				}
			}
		?>
	</ul>
	<?php } ?>
</div>
<?php if(isset($_GET['error'])){if($_GET['error'] == 'blank'){echo "<p id='snackbar'>Blank text is not available</p>";}else if($_GET['error'] == 'sql'){echo "<p id='snackbar'>Mysql Error</p>";}else if($_GET['error'] == 'wrong'){echo "<p id='snackbar'>Wrong username or password</p>";}else{echo "<p id='snackbar'>Existed already</p>";}}?>
	<?php include 'b/b.php'; ?>
</body>
<script type="text/javascript">
	<?php echo (isset($_GET['error'])) ? "myFunction();" : ""; ?>
	function myFunction() {
		var snackers = document.getElementById("snackbar");
		snackers.className = "show";
		setTimeout(function(){snackers.className = "";},3000);
	}
	var field = document.getElementById('field');
	var par = document.getElementById('b');
	d();
	function input(valx) {
		field.value += valx;
		d();
	}
	function b() {
		var val = field.value;
		field.value = val.substring(0,val.length -1);
		d();
	}
	function c() {
		field.value = "";
		d();
	}
	function d(){
		if (field.value.length == 1) {
			par.innerHTML = field.value.length + " Character inserted";
		}else if(field.value.length == 0){
			par.innerHTML = "No characters inserted";
		}else{
			par.innerHTML = field.value.length + " Characters inserted";
		}
	}
</script>
</html>