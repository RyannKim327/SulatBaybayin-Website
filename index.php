<?php
	function isLoggedIn(){
		return isset($_COOKIE['mpop-username']);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Maligayang pagbabalik sa Sulat Baybayin</title>
		<meta name="description" content="Nilikha upang mas mapalawig pa ang paggamit ng manuskritong baybayin, hindi lamang sa buong Pilipinas, maging sa iba't ibang panig ng mindo.">
		<meta name="og:description" content="Nilikha upang mas mapalawig pa ang paggamit ng manuskritong baybayin, hindi lamang sa buong Pilipinas, maging sa iba't ibang panig ng mindo.">
		<link rel="shortcut icon" href="icon.png" type="image/x-icon">
		<link rel="stylesheet" href="mpop/styles.css">
	</head>
	<body>
		<header>
			<div class="title-side">
				<h3 id="title">ᜐᜓᜎᜆ᜔ ᜊᜌ᜔ᜊᜌᜒᜈ᜔</h3>
				<h5 id="subtitle">Sulat Baybayin <span id="time" mpop-time-format="12"></span></h5>
			</div>
			<nav>
				<ul>
					<li id="index" title="Home">
						<fieldset>
							
							ᜆᜑᜈᜈ᜔
						</fieldset>
					</li>
					<li id="chatbox" title="Chatbox">ᜆᜎᜃᜌᜈ᜔</li>
					<li id="download" title="Download">Download</li>
					<li id="faqs" title="Frequently Asked Questions">ᜃᜇᜈᜒᜏᜅ᜔ ᜆᜈᜓᜅ᜔᜔</li>
					<li id="feedback" title="Feedback">ᜃᜇᜈᜐᜈ᜔</li>
				</ul>
			</nav>
		</header>
		<?php if(!isLoggedIn()){ ?>
		<form action="" class="mpop-credentials">
			<span class="input">
				<input type="text" name="username" id="username" mpop-length="5" placeholder="Username">
			</span>
			<span class="input">
				<input type="password" name="pass" id="password" mpop-length="8" placeholder="Password">
				<input type="submit" value="√" id="accept">
			</span>
		</form>
		<?php } ?>
		<main>
			<div class="include" id="index">
				<?php include("home.html") ?>
			</div>
		</main>
	</body>
	<script src="mpop/script.js"></script>
</html>	