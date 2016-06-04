<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>
	
<script type="text/javascript">
jQuery(function($){ // document.ready and noConflict mode

	$('.color-from-action').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.color-from-action').css('background-color', ui.color.toString());
		}
    });

	$('.color-to-action').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.color-to-action').css('background-color', ui.color.toString());
		}
    });
	
});
</script>
	

<?php
// randomize
$rand_r1 = rand(0,255);
$rand_g1 = rand(0,255);
$rand_b1 = rand(0,255);
$rand_hex1 = rgb2hex($rand_r1,$rand_g1,$rand_b1);

$rand_r2 = rand(0,255);
$rand_g2 = rand(0,255);
$rand_b2 = rand(0,255);
$rand_hex2 = rgb2hex($rand_r2,$rand_g2,$rand_b2);

$rand_link = '?mode1=hex1&amp;hex1=%23'.substr($rand_hex1,1).
'&amp;mode2=hex2&amp;hex2=%23'.substr($rand_hex2,1);
?>
	
	<h2>Color gradient</h2>	
	<p>Here You can set your two colors in RGB or HSL mode and find color between tnem in HSL color model or just click <a href="<?php echo basename(__FILE__).$rand_link.'&amp;steps=10';?>" rel="nofollow">random color gradient</a>.</p>
	

<?php 
$modehex1 = $modergb1 = $modehsl1 = $modehex2 = $modergb2 = $modehsl2 = '';
if (isset($_GET['steps'])){
	$_GET['steps'] = round($_GET['steps']);
	if ($_GET['steps']<2) {
		$_GET['steps'] = 10;
	}
	if ($_GET['steps']>50) {
		$_GET['steps'] = 50;
	}
} else { 
	$_GET['steps'] = 10; 
}
$steps = $_GET['steps'];

// first color validation
if ((!isset($_GET['mode1']) && isset($_GET['hex1'])) || (($_GET['mode1']=='hex1') && (!$_GET['hex1']=='')) ) {
	$modehex1 = ' checked="checked" ';
	$modergb1 = $modehsl1 = '';
	$hex1 = strtolower($_GET['hex1']);
	$rgb1 = hex2rgb($hex1);
	$r1 = $rgb1[0];
	$g1 = $rgb1[1];
	$b1 = $rgb1[2];
	$hsl1 = rgb2hsl($r1,$g1,$b1);
	$h1 = $hsl1[0];
	$s1 = $hsl1[1];
	$l1 = $hsl1[2];
	rgb_sample($r1,$g1,$b1,'First color');
} 
elseif ((!isset($_GET['mode1']) && ($_GET['r1']) && ($_GET['g1']) && ($_GET['b1'])) || (($_GET['mode1']=='rgb1') && (is_numeric($_GET['r1'])) && (is_numeric($_GET['g1'])) && (is_numeric($_GET['b1'])))) {
	$modergb1 = ' checked="checked" ';
	$modehex1 = $modehsl1 = '';
	$r1 = $_GET['r1'];
	$g1 = $_GET['g1'];
	$b1 = $_GET['b1'];
	if ($r1 < 0) {$r1 = 0;}
	if ($r1 > 255) {$r1 = 255;}
	if ($g1 < 0) {$g1 = 0;}
	if ($g1 > 255) {$g1 = 255;}
	if ($b1 < 0) {$b1 = 0;}
	if ($b1 > 255) {$b1 = 255;}
	$hex1 = rgb2hex($r1,$g1,$b1);
	$hex1 = substr($hex1,1); // remove '#' 
	$hsl1 = rgb2hsl($r1,$g1,$b1);
	$h1 = $hsl1[0];
	$s1 = $hsl1[1];
	$l1 = $hsl1[2];
	rgb_sample($r1,$g1,$b1,'First color');
}
elseif ((!isset($_GET['mode1']) && ($_GET['h1']) && ($_GET['s1']) && ($_GET['l1'])) || (($_GET['mode1']=='hsl1') && (is_numeric($_GET['h1'])) && (is_numeric($_GET['s1'])) && (is_numeric($_GET['l1'])))) {
	$modehsl1 = ' checked="checked" ';
	$modergb1 = $modehex1 = '';
	$h1 = $_GET['h1'];
	$s1 = $_GET['s1'];
	$l1 = $_GET['l1'];
	if ($h1 < 0) {$h1 = 0;}
	if ($h1 > 359) {$h1 = 359;}
	if ($s1 < 0) {$s1 = 0;}
	if ($s1 > 100) {$s1 = 100;}
	if ($l1 < 0) {$l1 = 0;}
	if ($l1 > 100) {$l1 = 100;}
	$rgb1 = hsl2rgb($h1,$s1,$l1);
	$r1 = $rgb1[0];
	$g1 = $rgb1[1];
	$b1 = $rgb1[2];
	$hex1 = rgb2hex($r1,$g1,$b1);
	$hex1 = substr($hex1,1); // remove '#' 
	rgb_sample($r1,$g1,$b1,'First color');
}



// second color validation
if ((!isset($_GET['mode2']) && ($_GET['hex2'])) || (($_GET['mode2']=='hex2') && (!$_GET['hex2']=='')) ) {
	$modehex2 = ' checked="checked" ';
	$modergb2 = $modehsl2 = '';
	$hex2 = strtolower($_GET['hex2']);
	$rgb2 = hex2rgb($hex2);
	$r2 = $rgb2[0];
	$g2 = $rgb2[1];
	$b2 = $rgb2[2];
	$hsl2 = rgb2hsl($r2,$g2,$b2);
	$h2 = $hsl2[0];
	$s2 = $hsl2[1];
	$l2 = $hsl2[2];
	rgb_sample($r2,$g2,$b2,'Second color');
} 
elseif ((!isset($_GET['mode2']) && ($_GET['r2']) && ($_GET['g2']) && ($_GET['b2'])) || (($_GET['mode2']=='rgb2') && (is_numeric($_GET['r2'])) && (is_numeric($_GET['g2'])) && (is_numeric($_GET['b2'])))) {
	$modergb2 = ' checked="checked" ';
	$modehex2 = $modehsl2 = '';
	$r2 = $_GET['r2'];
	$g2 = $_GET['g2'];
	$b2 = $_GET['b2'];
	if ($r2 < 0) {$r2 = 0;}
	if ($r2 > 255) {$r2 = 255;}
	if ($g2 < 0) {$g2 = 0;}
	if ($g2 > 255) {$g2 = 255;}
	if ($b2 < 0) {$b2 = 0;}
	if ($b2 > 255) {$b2 = 255;}
	$hex2 = rgb2hex($r2,$g2,$b2);
	$hex2 = substr($hex2,1); // remove '#' 
	$hsl2 = rgb2hsl($r2,$g2,$b2);
	$h2 = $hsl2[0];
	$s2 = $hsl2[1];
	$l2 = $hsl2[2];
	rgb_sample($r2,$g2,$b2,'Second color');
}
elseif ((!isset($_GET['mode2']) && ($_GET['h2']) && ($_GET['s2']) && ($_GET['l2'])) || (($_GET['mode2']=='hsl2') && (is_numeric($_GET['h2'])) && (is_numeric($_GET['s2'])) && (is_numeric($_GET['l2'])))) {
	$modehsl2 = ' checked="checked" ';
	$modergb2 = $modehex2 = '';
	$h2 = $_GET['h2'];
	$s2 = $_GET['s2'];
	$l2 = $_GET['l2'];
	if ($h2 < 0) {$h2 = 0;}
	if ($h2 > 359) {$h2 = 359;}
	if ($s2 < 0) {$s2 = 0;}
	if ($s2 > 100) {$s2 = 100;}
	if ($l2 < 0) {$l2 = 0;}
	if ($l2 > 100) {$l2 = 100;}
	$rgb2 = hsl2rgb($h2,$s2,$l2);
	$r2 = $rgb2[0];
	$g2 = $rgb2[1];
	$b2 = $rgb2[2];
	$hex2 = rgb2hex($r2,$g2,$b2);
	$hex2 = substr($hex2,1); // remove '#' 
	rgb_sample($r2,$g2,$b2,'Second color');
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
				<td colspan="2" style="border-right:1px solid #fff;">
					<div id="picker1" style="margin:auto;"></div>
				</td>
				<td colspan="2">
					<div id="picker2" style="margin:auto;"></div>
				</td>
			</tr>
			<tr>
				<td><label><input type="radio" name="mode1" value="hex1" <?php echo $modehex1; ?> /> RGB Hex color</label> </td>
				<td style="border-right:1px solid #fff;">
					<label>
						<input class="color-from-action" type="text" name="hex1" value="<?php 
					if(isset($hex1)){echo $hex1;} else { echo $rand_hex1;} 
					?>" title="#123456" maxlength="7">
					</label>
				</td>
				<td><label><input type="radio" name="mode2" value="hex2" <?php echo $modehex2; ?> /> RGB Hex color</label> </td>
				<td>
					<label>
						<input class="color-to-action" type="text" name="hex2" value="<?php 
					if(isset($hex2)){echo $hex2;} else { echo $rand_hex2;} 
					?>" title="#123456" maxlength="7">
					</label>
				</td>
			</tr>
			<tr>
				<td style="border-top:1px dashed #fff; border-bottom:1px dashed #fff;">
					<label><input type="radio" name="mode1" value="rgb1" <?php echo $modergb1; ?> /> RGB color</label>
				</td>
				<td  style="border-right:1px solid #fff; border-top:1px dashed #fff; border-bottom:1px dashed #fff;">
					<label>R<input class="text small_width" type="text" name="r1" <?php if(isset($r1)){echo 'value="'.$r1.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>G<input class="text small_width" type="text" name="g1" <?php if(isset($g1)){echo 'value="'.$g1.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>B<input class="text small_width" type="text" name="b1" <?php if(isset($b1)){echo 'value="'.$b1.'"';} ?> title="0-255" maxlength="3"></label>
				</td>
				<td style="border-top:1px dashed #fff; border-bottom:1px dashed #fff; border-left:1px solid #fff;">
					<label><input type="radio" name="mode2" value="rgb2" <?php echo $modergb2; ?> /> RGB color</label>
				</td>
				<td style="border-top:1px dashed #fff; border-bottom:1px dashed #fff;">
					<label>R<input class="text small_width" type="text" name="r2" <?php if(isset($r2)){echo 'value="'.$r2.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>G<input class="text small_width" type="text" name="g2" <?php if(isset($g2)){echo 'value="'.$g2.'"';} ?> title="0-255" maxlength="3"></label> &nbsp;&nbsp;
					<label>B<input class="text small_width" type="text" name="b2" <?php if(isset($b2)){echo 'value="'.$b2.'"';} ?> title="0-255" maxlength="3"></label>
				</td>
			</tr>
			<tr>
				<td><label><input type="radio" name="mode1" value="hsl1" <?php echo $modehsl1; ?> /> HSL color</label></td>
				<td style="border-right:1px solid #fff;">
					<label>H<input class="text small_width" type="text" name="h1" <?php if(isset($h1)){echo 'value="'.$h1.'"';} ?> title="0-359" maxlength="3">&deg;</label> &nbsp;&nbsp;
					<label>S<input class="text small_width" type="text" name="s1" <?php if(isset($s1)){echo 'value="'.$s1.'"';} ?> title="0-100" maxlength="3">%</label> &nbsp;&nbsp;
					<label>L<input class="text small_width" type="text" name="l1" <?php if(isset($l1)){echo 'value="'.$l1.'"';} ?> title="0-100" maxlength="3">%</label>
				</td>
				<td style="border-left:1px solid #fff;"><label><input type="radio" name="mode2" value="hsl2" <?php echo $modehsl2; ?> /> HSL color</label></td>
				<td>
					<label>H<input class="text small_width" type="text" name="h2" <?php if(isset($h2)){echo 'value="'.$h2.'"';} ?> title="0-359" maxlength="3">&deg;</label> &nbsp;&nbsp;
					<label>S<input class="text small_width" type="text" name="s2" <?php if(isset($s2)){echo 'value="'.$s2.'"';} ?> title="0-100" maxlength="3">%</label> &nbsp;&nbsp;
					<label>L<input class="text small_width" type="text" name="l2" <?php if(isset($l2)){echo 'value="'.$l2.'"';} ?> title="0-100" maxlength="3">%</label>
				</td>
			</tr>
			
			<tr>
				<td style="border-top:1px solid #fff;">Number of steps:</td>
				<td style="border-right:1px solid #fff; border-top:1px solid #fff;">
					<select name="steps" size="1" class="select">
<?php
	for($i=1;$i<=20;$i++){
		if($i==$steps) {
			echo '					<option value="'.$i.'" selected="selected">'.$i.'</option>'.chr(10);
		} else {
			echo '					<option value="'.$i.'">'.$i.'</option>'.chr(10);
		}
		
	}
	
?>
					</select>
				</td>
				<td style="border-top:1px solid #fff; border-left:1px solid #fff;">&nbsp;</td>
				<td style="border-top:1px solid #fff;"><input type="submit" name="color" class="submit" value="Gradient" /></td>
			</tr>
		</table>
	</div><!-- .form-container -->
<?php 
	
 	if (((isset($_GET['mode1'])) && (isset($_GET['mode2']))) || ($_GET['color']=='Gradient')) {
?>
		<h3>Color gradient</h3>
		<div class="color-results">
			<div class="variations">
<?php
			
			$del_h = ($h2 - $h1)/($steps+1);
			$del_s = ($s2 - $s1)/($steps+1);
			$del_l = ($l2 - $l1)/($steps+1);
			
			rgb_sample($r1,$g1,$b1,'First color');
			for ($i=1;$i<=$steps;$i++){	
				hsl_sample($h1+round($del_h*$i),$s1+round($del_s*$i),$l1+round($del_l*$i),'Gradient');
				echo chr(10);
			}
			rgb_sample($r2,$g2,$b2,'Second color');
?>
			</div>
		</div>
		
<?php 
 	}
?>


<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>