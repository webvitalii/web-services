<?php 
include_once '../include.php';
doctype();
//<title>Get Md5 hash of the string</title>
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
<?php menu(); ?>
	</div>

		<h2>Get Md5 hash of the string</h2>	
		<p>Here You can input your string and get its Md5 hash.</p>
		<p>Md5 is one-way decoding algorithm. There is no way to encode it!</p>
		<p>You can decode users password for example and save its Md5 hash to database. When user will login, You can decode his entered password again and compare its Md5 hash with previously saved in database. If them not equals, than entered password is wrong. And if someone will steal your database, he cannot get users password, only its Md5 hash. He can not encode it.</p>
		<p>In PHP it works like this: <strong>md5($string)</strong></p>

	<?php 
	
	if (isset($_GET['string']) AND trim($_GET['string'])!='') {
		$string = trim(escape($_GET['string']));
	} 
	?>
		
	<form name="md5" method="get" action="<?php echo basename(__FILE__);?>" enctype="multipart/form-data"><fieldset>

		<label>string: <input class="text large_width" name="string" value="<?php if (isset($_GET['string']) AND trim($_GET['string'])!='') {echo $string;} ?>" title="string" maxlength="100" type="text">
 </label>

		<input type="submit" name="md5submit" class="submit" value="md5 hash" />
		
	</fieldset></form>
	
	<?php 
	
	if (isset($_GET['string']) AND trim($_GET['string'])!='') {
		echo '<p>The md5 hash of a string is: <strong>'.md5($string).'</strong></p>';
	} 
	?>

	<?php footer(); ?>
</div>

</body>
</html>
