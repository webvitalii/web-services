<?php 
include_once '../include.php';
doctype();
//<title>Alerts</title>
$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];

$alerts_max = 100;
$alerts_default = 10;


$alerts = array(
	//alert nums
	'You are reading alert #%%num%%', 
	'You are reading alert #%%num%%', 
	'This is alert #%%num%%', 
	'This is alert #%%num%%', 
	'You are already clicked #%%num%% times',
	'You are already clicked #%%num%% times',
	
	'%%num_left%% alerts left',
	'%%num_left%% alerts left',
	'You have to click %%num_left%% more times',
	'You have to click %%num_left%% more times',
	'You will see %%num_left%% more alerts',
	'You will see %%num_left%% more alerts',
	
	'You have to click %%num_total%% alerts totally',
	'You have to click %%num_total%% alerts totally',
	'Do You think %%num_total%% alerts is too much?',
	'Do You think %%num_total%% alerts is too much?',
	'You have to click button %%num_total%% times totally',
	'You have to click button %%num_total%% times totally',
	
	//date-time
	'Today is: '.date('Y F j'),
	'Date: '.date('Y-m-d'),
	'Oh, it is '.date('l'),
	'It is '.date('W').'-th week of the year',
	'Today is '.date('z').'-th day of the year',
	date('t').' days in this month',
	'You have '.date('P').' difference to Greenwich time',
	'It is '.date('g A').' hours already',
	'It is '.date('H:i').' already',
	'Time: '.date('g:i A'),
	'Time: '.date('H:i'),
	'Time: '.date('H:i:s'),
	
	//clicking
	'Just click the button', 
	'Clicking is fun', 
	'Dont stop clicking', 
	'You have to click all alerts',
	'People clicking all over the world',

	// user
	'Hello '.$_ENV['USERNAME'],
	'Hello %%username%%',
	'Hello world',
	
	//questions
	'Are you still here?',
	'Are You tired of clicking?',
	'Are You tired to read this?',
	'Are You a good user?',
	'Is it annoying to you?',
	'Are You patient?',
	'Nice joke, dont you think so?',
	'Do you want next alert?',
	'How do You think, what alert will be next?',

	//info
	'You can send this link to someone',
	'Every alert is randomly generated',
	'You can not stop it',
	'Do not use Internet Explorer as a browser, it is working not correctly!',
	'Use Google Chrome as a browser',
	'Use Google to search in web',
	'This will take a few minutes',
	'This wont take much time',
	'Your advertisement can be here :)',
	
);

if (isset($_GET['alerts']) AND is_numeric($_GET['alerts']) AND ($_GET['alerts']>0) AND ($_GET['alerts'])<=$alerts_max) {
	$alerts_num = $_GET['alerts'];
}else{
	$alerts_num = $alerts_default;
}

?>
<html>
<head>
	<?php head(); ?>
<script type="text/javascript" charset="utf-8">
<?php
for($i=1;$i<=$alerts_num;$i++){
	$k = rand(0,count($alerts)-1);
	$alert_to_print = $alerts[$k];
	$alert_to_print = str_replace('%%num%%', $i, $alert_to_print);
	$alert_to_print = str_replace('%%num_left%%', $alerts_num-$i, $alert_to_print);
	$alert_to_print = str_replace('%%num_total%%', $alerts_num, $alert_to_print);
	
	//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
	echo 'alert(\''.$alert_to_print.'\');'.chr(13).chr(10);
	
	//echo 'confirm(\'Ok or cancel\')';
}
?>
</script>
</head>

<body>

<div id="main">
		
	<h3>Menu</h3>
	<div class="menu">
<?php menu(); ?>
	</div>

		<h2>Alerts</h2>	
		<p>Here You can see javascripts alerts.</p>

		
	<form name="alerts" method="get" action="<?php echo basename(__FILE__);?>" enctype="multipart/form-data"><fieldset>

 		<label>number of alerts: <select name="alerts" size="1" class="select">
<?php
	for($i=5;$i<=$alerts_max;$i=$i+5){
		if($i==$alerts_num) {
			echo '			<option value="'.$i.'" selected="selected">'.$i.'</option>'.chr(13).chr(10);
		} else {
			echo '			<option value="'.$i.'">'.$i.'</option>'.chr(13).chr(10);
		}
	}
	
?>
		</select></label>

		<input type="submit" name="submit" class="submit" value="submit" />
		
	</fieldset></form>
	
	<?php footer(); ?>
</div>

</body>
</html>
