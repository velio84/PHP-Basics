<!DOCTYPE html>
<html>
<head>
	<title>Text Colorer</title>
</head>
<body>
	<form method="get">
		<textarea name="input"></textarea>
		<br />
		<input type="submit" value="Color text" />
	</form>
	
	<?php
	function charCodeChecker($ch) {
		if (ord($ch) % 2 == 0) {
			return "<span style='color: red'>$ch </span>";
		}
		else {
			return "<span style='color: blue'>$ch </span>";
		}
	}
	
	if (isset($_GET['input'])):
		$input = $_GET['input'];
		$input = str_split(preg_replace("/\s+/", "", $input));
		foreach ($input as $char):
			//charCodeChecker($char);
		//var_dump($input);
	?>
	<?= charCodeChecker($char) ?>
	<?php 
		endforeach;
	endif; 
	?>
	
</body>
</html>