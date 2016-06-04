<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>

<?php 
// normalize h, s, l
if (isset($_GET['h']) && isset($_GET['s']) && isset($_GET['l']) && is_numeric($_GET['h']) && is_numeric($_GET['s']) && is_numeric($_GET['l'])  ) {
	if ($_GET['h'] < 0) { $_GET['h'] = 0;} // wrong :(
	if ($_GET['h'] > 359) { $_GET['h'] = 359;} // wrong :(
	$h = $_GET['h'];
	
	if ($_GET['s'] < 0) { $_GET['s'] = 0;}
	if ($_GET['s'] > 100) { $_GET['s'] = 100;}
	$s = $_GET['s'];
	
	if ($_GET['l'] < 0) { $_GET['l'] = 0;}
	if ($_GET['l'] > 100) { $_GET['l'] = 100;}
	$l = $_GET['l'];
} else {
// randomize if empty
	$_GET['h'] = $h = rand(0,359);
	$_GET['s'] = $s = rand(0,40)+50;
	$_GET['l'] = $l = rand(0,20)+40;
}
// randomize
$rand_h = rand(0,359);
$rand_s = rand(0,40)+50;
$rand_l = rand(0,20)+40;
$rand_rgb = hsl2rgb($rand_h,$rand_s,$rand_l);
$rand = rgb2hex($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
$bgrand = readable_color($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
?>

	
	<h2>Choose your color</h2>
	<p>Here You can set your two colors in RGB or HSL mode and watch at color variations at bottom of the page or just click <?php echo random_link_hex(); ?>.</p>
<?php
	$rgb = hsl2rgb($h,$s,$l);
	$hex = rgb2hex($rgb[0],$rgb[1],$rgb[2]);
	$color = readable_color($rgb[0],$rgb[1],$rgb[2]);
?>

	<?php hsl_sample($h,$s,$l,''); ?>

<script>
jQuery(function($){
	$('.js-form-color').attr('action', '<?php echo basename(__FILE__);?>');
});
</script>	
		
	<form class="js-form-color" id="color" name="color" method="get" action="form.html">


		<h3>Hue (0-359)&deg; [choose your color]</h3>
		<div class="color-hue">
			<div class="label-radio">
<?php
			for ($i=0;$i<360;$i++){
				if ((fmod($i,5)) AND (abs($i - $h)>2)) {continue;}
				$rgb = hsl2rgb($i,$s,$l);
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.'">';
				echo '<input name="h" type="radio" value="'.$i.'" title="'.$i.'" onClick="this.form.submit();"';
				if ($i == $h) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
		<h3>Saturation (0-100)% [greyful or colorful]</h3>
		<div class="color-saturation">
			<div class="label-radio">
<?php
			for ($i=0;$i<=100;$i++){
				if ((fmod($i,5)) AND (abs($i - $s)>2)) {continue;}
				$rgb = hsl2rgb($h,$i,$l);
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.'">';
				echo '<input name="s" type="radio" value="'.$i.'" title="'.$i.'" onClick="this.form.submit();"';
				if ($i == $s) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
			
		<h3>Lightness (0-100)% [darker or lighter]</h3>
		<div class="color-lightness">
			<div class="label-radio">
<?php
			for ($i=0;$i<=100;$i++){
				if ((fmod($i,5)) AND (abs($i - $l)>2)) {continue;}
				$rgb = hsl2rgb($h,$s,$i);
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.'">';
				echo '<input name="l" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $l) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			

		<div style="clear:both; float:none;">
			<input type="submit" class="submit" name="color" value="Click" />
		</div>
	</fieldset></form>

	
<!-- Variations colors -->
	<h3>Variations</h3>
	<div class="color-results">
	
		<div class="variations">
			<h3>Hue variations:</h3>
			<div class="hue-variations">
<?php
	for ($i=0; $i<36; $i++) { hsl_sample($h+($i*10),$s,$l); }
?>
			</div>
			
			<h3>Saturation variations:</h3>
			<div class="saturation-variations">
<?php
	for ($i=10; $i<=100; $i=$i+10) { hsl_sample($h,$i,$l); }
?>
			</div>
			
			<h3>Lightness variations:</h3>
			<div class="lightness-variations">
<?php
	for ($i=10; $i<=90; $i=$i+10) { hsl_sample($h,$s,$i); }
?>
			</div>
			
		</div>
	</div>
	
<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>