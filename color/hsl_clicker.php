<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>



<?php 
// normalize h, s, l
if (isset($_GET['h']) && isset($_GET['s']) && isset($_GET['l'])) {
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
	$h = rand(0,359);
	$s = rand(0,40)+50;
	$l = rand(0,20)+40;
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
	<p>Here You can set color by changing hue, saturation and lightness and watch at complimentary colors at bottom of the page or just click <?php echo random_link_hsl(); ?>.</p>



<script type="text/javascript">
jQuery(function($){
	$('.form-container').wrap('<fo'+'rm name="color" method="get" action="<?php echo basename(__FILE__); ?>"></fo'+'rm>');
});
</script>
		
	<div class="form-container">

		<h3>Hue (0-359)&deg; [choose your color] <span class="js color-hue-toggle"></span></h3>
		<div class="color-hue">
			<div class="label-radio">
<?php
			for ($i=0;$i<360;$i++){	
				if ((fmod($i,5)) AND (abs($i - $h)>2)) {continue;}
				$rgb = hsl2rgb($i,$s,$l);
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.'">';
				echo '<input name="h" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $h) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
		<h3>Saturation (0-100)% [greyful or colorful] <span class="js color-saturation-toggle"></span></h3>
		<div class="color-saturation">
			<div class="label-radio">
<?php
			for ($i=0;$i<=100;$i++){
				if ((fmod($i,5)) AND (abs($i - $s)>2)) {continue;}
				$rgb = hsl2rgb($h,$i,$l);
				echo '	<label style="background:'.rgb2hex($rgb[0],$rgb[1],$rgb[2]).';" title="'.$i.'">';
				echo '<input name="s" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $s) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
			
		<h3>Lightness (0-100)% [darker or lighter] <span class="js color-lightness-toggle"></span></h3>
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
	</div><!-- .form-container -->

<!-- Complementary colors -->
<?php
	$rgb = hsl2rgb($h,$s,$l);
	$hex = rgb2hex($rgb[0],$rgb[1],$rgb[2]);
	$color = readable_color($rgb[0],$rgb[1],$rgb[2]);
?>
	<h3>Results</h3>
	<div class="color-results" style="<?php echo 'background-color:'.$hex.'; color:'.$color.';'; ?>">


<?php 
	hsl_sample($h,$s,$l,'Basic color');
?>
		<h3>Complementary colors:</h3>
					
<?php
	hsl_sample($h+30,$s,$l,'Analogous harmony (H+30)'); 
	hsl_sample($h-30,$s,$l,'Analogous harmony (H-30)'); 
 
	hsl_sample($h+120,$s,$l,'Triadic harmony (H+120)'); 
	hsl_sample($h-120,$s,$l,'Triadic harmony (H-120)'); 

	hsl_sample($h+150,$s,$l,'Split complements harmony (H+150)'); 
	hsl_sample($h-150,$s,$l,'Split complements harmony (H-150)'); 

	hsl_sample($h+180,$s,$l,'Complement harmony (H+180)'); 

	hsl_sample($h,$s+30,$l,'Monochromatic harmony (S+30)'); 
	hsl_sample($h,$s-30,$l,'Monochromatic harmony (S-30)'); 

	hsl_sample($h,$s,$l+10,'Monochromatic harmony (L+10)'); 
	hsl_sample($h,$s,$l-10,'Monochromatic harmony (L-10)'); 
?>

	
	</div>
	
<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>