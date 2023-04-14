<div class="a main">
	<center>
		<p style="font-variant: small-caps;font-family: 'Times New Roman', Times, serif;"><?php echo "All rights reserved " . date('Y'); ?></p>
		<p id="writting"></p>
	</center>
    <div class="a" id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="a fb-customerchat">
    </div>
</div>
<script type="text/javascript">
	var txt = "Developed by MPOP Reverse II";
	var i = 0;
	var time = 50;
	act();
	function act() {
		if(i < txt.length){
			document.getElementById("writting").innerHTML += txt.charAt(i);
			i++;
			setTimeout(act,time);
		}
	}
</script>
<!-- Messenger Chat Plugin Code -->
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101484375409392");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>