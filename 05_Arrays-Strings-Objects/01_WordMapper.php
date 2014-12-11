<!DOCTYPE html>
<html>
<head>
	<title>Word Mapper</title>
</head>
<body>
	<form method="get">
		<textarea name="input"></textarea>
		<br />
		<input type="submit" value="Count words" />
	</form>
</body>
</html>

<?php

function printOutput($arr) {
	$output = "<table border='1'>";
	
	foreach ($arr as $word => $count) {
		$output .= "<tr><td>$word</td><td>$count</td></tr>";
	}
	$output .= "</table>";
	
	return $output;
}

if (isset($_GET['input'])):
	$input = preg_split("/\W+/", strtolower($_GET['input']));
	$output = array();
	while("" === end($input)) {
		array_pop($input);
	}
	foreach ($input as $word => $count) {
		if (isset($output[$word])) {
			$output[$count]++;
		}
		else {
			$output[$count]++;
		}
	}
	?>
	
	<?= printOutput($output) ?> 

<?php endif; ?>