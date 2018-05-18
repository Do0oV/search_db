<?php include 'conndb.php'; ?>
<html>
<head>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<style>	.input-field label {color: #000;}</style>
	<script type="text/javascript">

		$(document).ready(function(){
			$( "#find" ).keyup(function(){
				fetch();
			});
		});

		function fetch()
		{
			var val = document.getElementById( "find" ).value;
			$.ajax({
				type: 'post',
				url: 'fetch.php',
				data: {
					get_val:val
				},
				success: function (response) {
					document.getElementById( "search_items" ).innerHTML = response; 
				}
			});
		}
	</script>


	<title>Search Engine 1</title>
</head>
<body>
	<div class="container">
		<div id="search_box">

			<h1 class="center-align">Country Search Engine</h1>
			<div class="input-field col s12 m6 offset-m3 row">
				<form method='get' action='fetch.php'>
					<input type="text" name="get_val" id="find" placeholder="Search country" autocomplete="off">
				</form>
			</div>
			<div id="search_items" class="row"></div>
		</div>
	</div>
</body>
</html>