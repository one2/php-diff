<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>PHP LibDiff - Examples</title>
		<link rel="stylesheet" href="styles.css" type="text/css" charset="utf-8"/>
	</head>
	<body>
		<h1>PHP LibDiff - Examples</h1>
		<hr />
		<?php

		// Include the diff class
		require_once dirname(__FILE__).'/../lib/Diff.php';

		// Include two sample files for comparison
		$a = explode("\n", file_get_contents(dirname(__FILE__).'/a.txt'));
		$b = explode("\n", file_get_contents(dirname(__FILE__).'/b.txt'));

		// Options for generating the diff
		$options = array(
			//'ignoreWhitespace' => true,
			//'ignoreCase' => true,
		);

		?>
		<h2>Side by Side Diff</h2>
		<?php

		// Generate a side by side diff
		echo Diff::get_diff($a, $b, 'side-by-side', $options, array(
			'title_a' => 'Old Version!!',
			'title_b' => 'New Version!!',
		));

		?>
		<h2>Inline Diff</h2>
		<?php

		// Generate an inline diff
		echo Diff::get_diff($a, $b, 'inline', $options, array(
			'title_a' => 'Old!!',
			'title_b' => 'New!!',
			'title_c' => 'Differences!!',
		));

		?>
		<h2>Unified Diff</h2>
		<?php

		// Generate a unified diff
		echo Diff::get_diff($a, $b, 'unified', $options);

		?>
		<h2>Context Diff</h2>
		<?php

		// Generate a context diff
		echo Diff::get_diff($a, $b, 'context', $options);
		?>
	</body>
</html>
