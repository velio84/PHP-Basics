<?php
function generateSidebar($cat, $items) {
	$output = "<aside><header><h3>$cat</h3></header><body><ul>";
	foreach ($items as $item) {
		$output .= "<li><a href='#'>$item</a></li>";
	}
	$output .= "</ul></body></aside>";
	
	return $output;
}

if (isset($_GET['categories'])):
	$categories = preg_split("/, /", $_GET['categories']);
	$tags = preg_split("/, /", $_GET['tags']);
	$months = preg_split("/, /", $_GET['months']);
	
	$cat = "Categories";
	$tag = "Tags";
	$month = "Months";
	
?>

<?= generateSidebar($cat, $categories) ?>
<br />
<?= generateSidebar($tag, $tags) ?>
<br />
<?= generateSidebar($month, $months) ?>

<?php endif ?>