<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>

<?php 
// normalize r, g, b
if (isset($_GET['r']) && isset($_GET['g']) && isset($_GET['b'])) {
	if ($_GET['r'] < 0) { $_GET['r'] = 0;} 
	if ($_GET['r'] > 255) { $_GET['r'] = 255;} 
	$r = $_GET['r'];
	
	if ($_GET['g'] < 0) { $_GET['g'] = 0;}
	if ($_GET['g'] > 255) { $_GET['g'] = 255;}
	$g = $_GET['g'];
	
	if ($_GET['b'] < 0) { $_GET['b'] = 0;}
	if ($_GET['b'] > 255) { $_GET['b'] = 255;}
	$b = $_GET['b'];
} else {
// randomize if empty
	$r = rand(0,255);
	$g = rand(0,255);
	$b = rand(0,255);
}
// randomize
$rand_r = rand(0,255);
$rand_g = rand(0,255);
$rand_b = rand(0,255);
$rand = rgb2hex($rand_r,$rand_g,$rand_b);
$bgrand = readable_color($rand_r,$rand_g,$rand_b);
?>


	<h2>Choose your color</h2>
	<p>Here You can set color in RGB color model and watch at complimentary colors at bottom of the page or just click <?php echo random_link_rgb(); ?>.</p>

<?php
/* rgb_sample($r,$g,$b,'Basic color');  */
?>
	

<script type="text/javascript">
jQuery(function($){
	$('.form-container').wrap('<fo'+'rm name="color" method="get" action="<?php echo basename(__FILE__); ?>"></fo'+'rm>');
});
</script>
		
	<div class="form-container">
			
			
		<h3>Red (0-255)</h3>
		<div class="color-hue">
		
			<div class="label-radio">
<?php
			
			for ($i=0;$i<=255;$i++){
				if ((fmod($i,5)) AND (abs($i - $r)>2)) {continue;}
				echo '	<label style="background:'.rgb2hex($i,$g,$b).';" title="'.$i.'">';
				echo '<input name="r" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $r) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
		<h3>Green (0-255)</h3>
		<div class="color-saturation">
			<div class="label-radio">
<?php
			for ($i=0;$i<=255;$i++){
				if ((fmod($i,5)) AND (abs($i - $g)>2)) {continue;}
				echo '	<label style="background:'.rgb2hex($r,$i,$b).';" title="'.$i.'">';
				echo '<input name="g" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $g) {echo ' checked="checked"'; }
				echo ' />';
				echo '</label>'.chr(10);
			}
?>
			</div>
		</div>
			
			
		<h3>Blue (0-255)</h3>
		<div class="color-lightness">
			<div class="label-radio">
<?php
			for ($i=0;$i<=255;$i++){
				if ((fmod($i,5)) AND (abs($i - $b)>2)) {continue;}
				echo '	<label style="background:'.rgb2hex($r,$g,$i).';" title="'.$i.'">';
				echo '<input name="b" type="radio" value="'.$i.'" title="'.$i.'"';
				if ($i == $b) {echo ' checked="checked"'; }
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

	<h3>Results</h3>
<?php 
$hex = rgb2hex($r,$g,$b);
$hsl = rgb2hsl($r,$g,$b);
$h = $hsl[0];
$s = $hsl[1];
$l = $hsl[2];
$color = readable_color($r,$g,$b);
?>

	<div class="color-results" style="<?php echo 'background-color:'.$hex.'; color:'.$color.';'; ?>">


<?php 
rgb_sample($r,$g,$b,'Basic color'); 
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