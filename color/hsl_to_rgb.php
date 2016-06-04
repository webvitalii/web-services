<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>

	
<?php
// randomize
$rand_h = rand(0,359);
$rand_s = rand(0,40)+50;
$rand_l = rand(0,20)+40;
$rand_rgb = hsl2rgb($rand_h,$rand_s,$rand_l);
$rand = rgb2hex($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
$bgrand = readable_color($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
?>

	<h2>Convert HSL to RGB</h2>
	<p>You can convert color from HSL to RGB and from HSL to Hex or just click <?php echo random_link_hsl(); ?>.</p>

<?php
if ((isset($_GET['h'])) && (isset($_GET['s'])) && (isset($_GET['l']))) {
	$h = $_GET['h'];
	$s = $_GET['s'];
	$l = $_GET['l'];
	hsl_sample($h,$s,$l,'Basic color');
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
				<td>HSL color</td>
				<td>
					<label>H<input class="text small_width" type="text" name="h" <?php if(isset($h)){echo 'value="'.$h.'"';} ?> title="0-359" maxlength="3" >&deg;</label> &nbsp;&nbsp;
					<label>S<input class="text small_width" type="text" name="s" <?php if(isset($s)){echo 'value="'.$s.'"';} ?> title="0-100" maxlength="3" >%</label> &nbsp;&nbsp;
					<label>L<input class="text small_width" type="text" name="l" <?php if(isset($l)){echo 'value="'.$l.'"';} ?> title="0-100" maxlength="3" >%</label>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="color" class="submit" value="Convert" /></td>
			</tr>
		</table>

	</div><!-- .form-container -->

<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>