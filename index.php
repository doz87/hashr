<!DOCTYPE html>
<html>
<head>
	<title>Hashr</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="ajax.js" type="text/javascript"></script>
	<style type="text/css">
		html{
			font-family: Orbitron;
			background: black;
			color: #1be71b;
		}
		.hashes {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 10px;
			grid-auto-columns: minmax(20%, 30%);
		}

		.hash_algo{
			border: 0.5px solid rgb(44, 140, 49);
			padding: 10px;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Nunito|Orbitron" rel="stylesheet">
</head>
<body>
	<form name="hashform" method="post" onsubmit="return validateform()">
		<label>Input string: </label>
		<input id="unhashed-string" type="text" name="input" required oninvalid="this.setCustomValidity('You can\'t leave the input string blank!')">
		<input type="submit" name="submit" value="Hash!">
	</form>
	<br>
	<div id="hashes-container" class="hashes"></div>

</body>
</html>
