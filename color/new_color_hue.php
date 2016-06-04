<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
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
	<h2>New color with changing Hue</h2>	
	<p>Here You can set your color in RGB or HSL mode and find new color with changing <strong>Hue</strong>, but <strong>Saturation</strong> and <strong>Lightness</strong> will be the same or just click <?php echo random_link_hex(); ?>.</p>

<?php 
$modehex = $modergb = $modehsl = '';

if ((!isset($_GET['mode']) && ($_GET['hex'])) || (($_GET['mode']=='hex') && (!$_GET['hex']=='')) ) {
	$modehex = ' checked="checked" ';
	$modergb = $modehsl = '';
	$hex = strtolower($_GET['hex']);
	if (substr($hex,0,1) != '#') {
		$hex = '#'.$hex; // add '#' 
		$_GET['hex'] = $hex;
	}
	$rgb = hex2rgb($hex);
	$r = $rgb[0];
	$g = $rgb[1];
	$b = $rgb[2];
	$hsl = rgb2hsl($r,$g,$b);
	$h = $hsl[0];
	$s = $hsl[1];
	$l = $hsl[2];
	rgb_sample($r,$g,$b,'Basic color');
} 
elseif ((!isset($_GET['mode']) && ($_GET['r']) && ($_GET['g']) && ($_GET['b'])) || (($_GET['mode']=='rgb') && (is_numeric($_GET['r'])) && (is_numeric($_GET['g'])) && (is_numeric($_GET['b'])))) {
	$modergb = ' checked="checked" ';
	$modehex = $modehsl = '';
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
	$hsl = rgb2hsl($r,$g,$b);
	$h = $hsl[0];
	$s = $hsl[1];
	$l = $hsl[2];
	rgb_sample($r,$g,$b,'Basic color');
}
elseif ((!isset($_GET['mode']) && ($_GET['h']) && ($_GET['s']) && ($_GET['l'])) || (($_GET['mode']=='hsl') && (is_numeric($_GET['h'])) && (is_numeric($_GET['s'])) && (is_numeric($_GET['l'])))) {
	$modehsl = ' checked="checked" ';
	$modergb = $modehex = '';
	$h = $_GET['h'];
	$s = $_GET['s'];
	$l = $_GET['l'];
	if ($h < 0) {$h = 0;}
	if ($h > 359) {$h = 359;}
	if ($s < 0) {$s = 0;}
	if ($s > 100) {$s = 100;}
	if ($l < 0) {$l = 0;}
	if ($l > 100) {$l = 100;}
	$rgb = hsl2rgb($h,$s,$l);
	$r = $rgb[0];
	$g = $rgb[1];
	$b = $rgb[2];
	$hex = rgb2hex($r,$g,$b);
	//$hex = substr($hex,1); // remove '#' 
	rgb_sample($r,$g,$b,'Basic color');
}

if (isset($_GET['h2'])) {
	$h2 = $_GET['h2'];
	$rgb2 = hsl2rgb($h2,$s,$l);
	rgb_sample($rgb2[0],$rgb2[1],$rgb2[2],'New color');
	$hex2 = rgb2hex($rgb2[0],$rgb2[1],$rgb2[2]);
	
} else {$h2 = 1000; /* hue radio will not be checked */ }
?>

<script>
jQuery(function($){
	$('.js-form-color').attr('action', '<?php echo basename(__FILE__);?>');
});
</script>
		
	<form class="js-form-color" id="color" name="color" method="get" action="form.html">

		<table>
			<tr>
				<td rowspan="4">
					<div id="picker"></div>
				</td>
				<td><label><input type="radio" name="mode" value="hex" <?php echo $modehex; ?> /> RGB Hex color</label> </td>
				<td>
					<label>
						<input class="color-action text medium_width" type="text" name="hex" value="<?php 
					if(isset($hex)){echo $hex;} else {echo $rand_hex;} 
					?>" title="#123456" maxlength="7">
					</label>
				</td>
			</tr>
			<tr>
				<td><label><input type="radio" name="mode" value="rgb" <?php echo $modergb; ?> /> RGB color</label></td>
				<td>
					<label>R<input class="text small_width" type="text" name="r" <?php if(isset($r)){echo 'value="'.$r.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>G<input class="text small_width" type="text" name="g" <?php if(isset($g)){echo 'value="'.$g.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>B<input class="text small_width" type="text" name="b" <?php if(isset($b)){echo 'value="'.$b.'"';} ?> title="0-255" maxlength="3"></label>
				</td>
			</tr>
			<tr>
				<td><label><input type="radio" name="mode" value="hsl" <?php echo $modehsl; ?> /> HSL color</label></td>
				<td>
					<label>H<input class="text small_width" type="text" name="h" <?php if(isset($h)){echo 'value="'.$h.'"';} ?> title="0-359" maxlength="3">&deg;</label> &nbsp;&nbsp;
					<label>S<input class="text small_width" type="text" name="s" <?php if(isset($s)){echo 'value="'.$s.'"';} ?> title="0-100" maxlength="3">%</label> &nbsp;&nbsp;
					<label>L<input class="text small_width" type="text" name="l" <?php if(isset($l)){echo 'value="'.$l.'"';} ?> title="0-100" maxlength="3">%</label>
				</td>
			</tr>
			
			<tr>
				<td><?php echo random_link_hex(); ?></td>
				<td><input type="submit" name="color" class="submit" value="Convert" /></td>
			</tr>
		</table>
			
<?php 
	
 	if (($_GET['mode']=='hex') || ($_GET['mode']=='rgb') || ($_GET['mode']=='hsl') || ($_GET['color']=='Convert')) {
?>
		<h3>Hue of new color (0-359)&deg; [same saturation and lightness]</h3>
		<div class="color-hue">
			<div class="label-radio">
<?php
			for ($i=0;$i<360;$i++){
				if ((fmod($i,5)) AND (abs($i - $h2)>2)) {continue;}
				$rgb = hsl2rgb($i,$s,$l);
				$del = $i - $h;
				if ($del>0) {$del = '+'.$del;}
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.' ('.$del.')">';
				echo '<input name="h2" type="radio" value="'.$i.'" title="'.$i.' ('.$del.')"';
				if ($i == $h2) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
		
<?php 
 	}
?>

	</form>

<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>