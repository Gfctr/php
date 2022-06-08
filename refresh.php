<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function() {
		setInterval(function() {
			var copy = new Date();

			$('#show').text('I am getting refreshed every 3 seconds..! Random Number ==> ' + copy);
		}, 5000);
	});
</script>

</HEAD>

<BODY>

	<div id="show" align="center"></div>

</BODY>

</HTML>