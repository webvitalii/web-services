<?php

function word_generator($length = 6) {
	$chars_b = 'bcdfghjklmnpqrstvwxz';
	$chars_a = 'aeiouy';
	$ab = 'b';
	for ($i = 0; $i < $length; $i++) {
		if( $ab == 'b' ){
			$random_string .= $chars_b[rand(0, strlen($chars_b) - 1)];
			$ab = 'a';
		} else {
			$random_string .= $chars_a[rand( 0, strlen($chars_a) - 1)];
			$ab = 'b';
		}
	}
	return $random_string;
}

?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Random words generator</title>
</head>

<body>
	<section>
		<h1>Random words generator</h1>
		<p>Generating random readable japanese-like words:</p>

		<ul>
			<li><?php echo word_generator(2); ?></li>
			<li><?php echo word_generator(4); ?></li>
			<li><?php echo word_generator(6); ?></li>
			<li><?php echo word_generator(8); ?></li>
			<li><?php echo word_generator(10); ?></li>
			<li><?php echo word_generator(12); ?></li>
		</ul>

		<p>Refresh the page to generate new random words.</p>
	</section>
</body>
</html>