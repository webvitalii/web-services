<?php 
include '../include.php';

include '../inc/_header.php';

include '../inc/_wrap_before.php';
?>


<script type="text/javascript">
jQuery(function($){ // document.ready and noConflict mode

	$('.js-bg-color').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.js-color-demo').css('background-color', ui.color.toString());
		}
    });
	
	$('.js-color').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.js-color-demo').css('color', ui.color.toString());
		}
    });
	
	$('.js-link-color').iris({
		hide: false,
		palettes: true,
		change: function(event, ui) {
			// event = standard jQuery event, produced by whichever control was changed.
			// ui = standard jQuery UI object, with a color member containing a Color.js object
			$('.js-color-demo a').css('color', ui.color.toString());
		}
    });
	
});
</script>


		<h1>Color clicker</h1>
		
		<p>You can choose background color, text color and link color. Click on input with color which you want to change and choose new color on color wheel or just click <strong><a href="<?php echo basename(__FILE__);?>" rel="nofollow">random colors</a></strong>.</p>


<?php 
if ((isset($_GET['bgcolor'])) && (isset($_GET['textcolor'])) && (isset($_GET['linkcolor']))) {
	$bgcolor = $_GET['bgcolor'];
	$textcolor = $_GET['textcolor'];
	$linkcolor = $_GET['linkcolor'];
} else {
	$bgcolor = random_hex();
	$textcolor = random_hex();
	$linkcolor = random_hex();
}
?>
	
		<table>
			<tr>
				<td>Background color:</td>
				<td><input type="text" style="background:<?php echo $bgcolor; ?>" class="js-bg-color text medium_width" value="<?php echo $bgcolor; ?>" />
				</td>
				<td rowspan="3">
					<p class="js-color-demo" style="padding:10px; background-color:<?php echo $bgcolor; ?>; color:<?php echo $textcolor; ?>;"><strong>
					Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
					Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
					Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
					</strong></p>
				</td>
			</tr>
			
			<tr>
				<td>Text color:</td>
				<td><input type="text" style="background:<?php echo $textcolor; ?>" class="js-color text medium_width" value="<?php echo $textcolor; ?>" />
				</td>
			</tr>
			
			<tr>
				<td>Hyperlink color:</td>
				<td><input type="text" style="background:<?php echo $linkcolor; ?>" class="js-link-color text medium_width" value="<?php echo $linkcolor; ?>" />
				</td>
			</tr>
		</table>


<?php
include '../inc/_wrap_after.php';

include '../inc/_sidebar.php';

include '../inc/_footer.php';
?>