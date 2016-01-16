<?php 

header("Location: http://web-profile.com.ua/web-services/color/color_clicker.php"); /* Redirect browser */
exit;

include_once '../include.php'; 

doctype();
// <title>Color title</title>

// Left for future
//$path = pathinfo($_SERVER['SCRIPT_NAME']);
//$folder = $path['dirname'].'/';
//$filename = $path['basename'];
//echo __FILE__.' <br>';
//echo $_SERVER['SCRIPT_NAME'].' <br>';
//echo basename(__FILE__);

// string functions
// $str = '& #a45 <b>bold</b>';
// echo htmlentities($str).'<br>';
// echo htmlspecialchars($str).'<br>';
// echo urlencode($str).'<br>'; 

// string converter
// nl2br()
// str_shuffle() 
// str_split()
// count_chars()
// str_word_count() 
// strip_tags()
// strlen()
// strrev()
// strtolower()
// strtoupper()
// trim()
// ucfirst()
// ucwords()
// wordwrap()

// server response info
// $url = 'http://localhost/';
// print_r(get_headers($url));
// print_r(get_headers($url, 1));

?>
<html>
<head>
	<?php head(); ?>
	<?php color_head(); ?>
</head>

<body>


<div id="main">

<?php 
	//menu(); 
	include_once '_menu.php';
?>

	<h2>Find more about color in Web</h2>
	<p>Here you can find out more about color in web and choose your color.</p>
	<p></p>

	<?php footer(); ?>
	
</div>

</body>
</html>
