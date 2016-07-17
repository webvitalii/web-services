<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';



// debug spam - start
$spam_debug_info = '';
$rn = '<br>'; //"\r\n"; // .chr(13).chr(10)


if($_POST || $_GET) {
	
	echo '<!-- post -->';
	
	$spam_debug_info .= 'IP: ' . $_SERVER['REMOTE_ADDR'] . $rn;
	$spam_debug_info .= 'User agent: ' . $_SERVER['HTTP_USER_AGENT'] . $rn;
	$spam_debug_info .= 'Referer: ' . $_SERVER['HTTP_REFERER'] . $rn.$rn;

	$spam_debug_info .= 'Post vars:'.$rn; // lets see what POST vars spammers try to submit
	foreach ($_POST as $key => $value) {
		$spam_debug_info .= '$_POST['.$key. '] = '.$value.$rn;
	}
	$spam_debug_info .= $rn.$rn;
	
	$spam_debug_info .= 'Get vars:'.$rn; // lets see what GET vars spammers try to submit
	foreach ($_GET as $key => $value) {
		$spam_debug_info .= '$_GET['.$key. '] = '.$value.$rn;
	}
	$spam_debug_info .= $rn.$rn;

	$spam_debug_info .= 'Cookie vars:'.$rn; // lets see what COOKIE vars spammers try to submit
	foreach ($_COOKIE as $key => $value) {
		$spam_debug_info .= '$_COOKIE['.$key. '] = '.$value.$rn;
	}
	$spam_debug_info .= $rn.$rn;

	$spam_debug_info .= '-----------------------------'.$rn;
	$spam_debug_info .= 'This is from submit - /color/rgb_to_hsl.php' . $rn;
	
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Site <no-reply@site.com>' . "\r\n";
	//mail('***@gmail.com', '[Spam debug info]', $spam_debug_info, $headers);
	
}
// debug spam - end

?>


<script type="text/javascript">
jQuery(function($){ // document.ready and noConflict mode
	$('.color-action').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.color-action').css('background-color', ui.color.toString());
		}
    });
});
</script>

	
<?php
// randomize
$rand_r = rand(0,255);
$rand_g = rand(0,255);
$rand_b = rand(0,255);

$rand = rgb2hex($rand_r,$rand_g,$rand_b);
$bgrand = readable_color($rand_r,$rand_g,$rand_b);
?>	
	<h2>Convert RGB to HSL</h2>	
	<p>Here You can convert color from RGB to HSL, from Hex to HSL, from RGB to Hex, from Hex to RGB or just click <?php echo random_link_hex(); ?>.</p>

<?php 

$hex_default = '#123456';

$modehex = $modergb = '';

if ((!isset($_GET['mode']) &&  (isset($_GET['hex']))) || ( (isset($_GET['hex'])) && ($_GET['mode']=='hex')) ) {
	$modehex = ' checked="checked" ';
	$modergb = '';
	$hex = strtolower($_GET['hex']);
	if (substr($hex,0,1) != '#') {
		$hex = '#'.$hex; // add '#' 
		$_GET['hex'] = $hex;
	}
	$rgb = hex2rgb($hex);
	$r = $rgb[0];
	$g = $rgb[1];
	$b = $rgb[2];
	rgb_sample($r,$g,$b,'Basic color');
} 
elseif ((!isset($_GET['mode']) && (isset($_GET['r'])) && ($_GET['g']) && ($_GET['b'])) || ((isset($_GET['r'])) && (isset($_GET['g'])) && (isset($_GET['b'])) && ($_GET['mode']=='rgb') )) {
	$modergb = ' checked="checked" ';
	$modehex = '';
	$r = $_GET['r'];
	$g = $_GET['g'];
	$b = $_GET['b'];
	if ($r < 0) {$r = 0;}
	if ($r > 255) {$r = 255;}
	if ($g < 0) {$g = 0;}
	if ($g > 255) {$g = 255;}
	if ($b < 0) {$b = 0;}
	if ($b > 255) {$b = 255;}
	$hex = rgb2hex($r,$g,$b);
	//$hex = substr($hex,1); // remove '#' 
	rgb_sample($r,$g,$b,'Basic color');
}
?>

<script type="text/javascript">
jQuery(function($){
	$('.form-container').wrap('<fo'+'rm name="color" method="get" action="<?php echo basename(__FILE__); ?>"></fo'+'rm>');
});
</script>
	
	<div class="form-container">

		<table>
			<tr>
				<td rowspan="3">
					<div id="picker"></div>
				</td>
				<td><label><input type="radio" name="mode" value="hex" <?php echo $modehex; ?> /> RGB Hex color</label> </td>
				<td>
					<label><input class="color-action text medium_width" type="text" name="hex" value="<?php 
					if(isset($hex)){echo $hex;} else { echo $hex_default; } 
					?>" title="#123456" maxlength="20" ></label>
				</td>
			</tr>
			<tr>
				<td><label><input type="radio" name="mode" value="rgb" <?php echo $modergb; ?> /> RGB color</label></td>
				<td>
					<label>R<input class="text small_width" type="text" name="r" <?php if(isset($r)){echo 'value="'.$r.'"';} ?> title="0-255" maxlength="3" ></label> &nbsp;&nbsp;
					<label>G<input class="text small_width" type="text" name="g" <?php if(isset($g)){echo 'value="'.$g.'"';} ?> title="0-255" maxlength="3" ></label> &nbsp;&nbsp;
					<label>B<input class="text small_width" type="text" name="b" <?php if(isset($b)){echo 'value="'.$b.'"';} ?> title="0-255" maxlength="3" ></label>
				</td>
			</tr>
			<tr>
				<td><?php echo random_link_hex(); ?></td>
				<td><input type="submit" name="color" class="submit" value="Convert" /></td>
			</tr>
		</table>

	</div><!-- .form-container -->


<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>