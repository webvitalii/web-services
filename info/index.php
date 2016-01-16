<?php 
include_once '../include.php';
doctype();
//<title>Info</title>
$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];


?>
<html>
<head>
	<?php head(); ?>
<script type="text/javascript" charset="utf-8">
</script>
</head>

<body>

<div id="main">
		
	<h3>Menu</h3>
	<div class="menu">
<?php menu(); ?>
	</div>

		<h2>Information</h2>	
		<p>Here You can find global information.</p>
		<p><br>
<?php
	echo 'Hello '.$_ENV['USERNAME'].';<br>';
	echo 'Today is: '.date('j F Y, l').';<br>';
	echo 'Time: '.date('g:i:s A [H:i:s]').';<br>';
	echo 'It is '.date('W').'-th week of the year;<br>';
	echo 'Today is '.date('z').'-th day of the year;<br>';
	echo date('t').' days in this month;<br>';
	echo 'You have '.date('P').' difference to Greenwich time;<br>';
	echo 'Timezone: '.date('T').';<br>';
	if(date('L')){
		echo 'This year is leap;<br>';
	} else{
		echo 'This year is not leap;<br>';
	}
	
?>	
	</p>

	<p><strong>$_SERVER</strong>:<br>
<?php
foreach ($_SERVER as $key => $value) {
	echo '$_SERVER[\''.$key. '\'] = <strong>' .$value.'</strong><br>'.chr(13).chr(10);
}
//echo '$_SERVER[\'HTTP_REFERER\'] = <strong>' .$_SERVER['HTTP_REFERER'].'</strong><br>'.chr(13).chr(10);
?>
	
	<p><strong>$_ENV</strong>:<br>
<?php
foreach ($_ENV as $key => $value) {
	echo '$_ENV[\''.$key. '\'] = <strong>' .$value.'</strong><br>'.chr(13).chr(10);
}
?>
	
	<p><strong>$_COOKIE</strong>:<br>
<?php
foreach ($_COOKIE as $key => $value) {
	echo '$_COOKIE[\''.$key. '\'] = <strong>' .$value.'</strong><br>'.chr(13).chr(10);
}
?>
		</p>
		
	<?php footer(); ?>
</div>

</body>
</html>
