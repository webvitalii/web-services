<?php 
include_once 'include.php';
doctype();
// <title>Web tools</title>

$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];
?>
<html>
<head>
	<?php head(); ?>
</head>

<body>

<div id="main">
		
	<h3>Menu</h3>
	<div class="menu">

		<ul class="menu">

			<li><a href="color/" title="Color in Web">color tools</a></li>
			<!--<li><a href="md5/" title="Get the md5 hash of a string">md5</a></li>-->
			<!--<li><a href="info/" title="Information">Info</a></li>-->
			<!--<li><a href="alert/" title="Javascript alerts">alerts</a></li>-->
			<li><a href="word-generator/" title="Word generator">word generator</a></li>
			<li><a href="monster/" title="Monster constructor">monsters</a></li>
			
		</ul>

	</div>
	
	<h2>Web tools.</h2>
	<p></p>


	<?php footer(); ?>
	
</div>

</body>
</html>
