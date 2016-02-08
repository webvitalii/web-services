<?php 
include_once '../include.php';

include '../inc/_header.php';
?>

 
 
<script type="text/javascript">
jQuery(function($){ // document.ready and noConflict mode

	$('.js-bg-color').iris();
	
	$('.js-color').iris();
	
	$('.js-link-color').iris();


	var hh = 0.5;
	var ss = 0.5;
	var ll = 0.5;

	$.farbtastic('#picker').setHSL([hh, ss, ll]);
	
	function farbcolor(idclass) {
		$(idclass).css('background-color', f.color);
		$(idclass).attr('value', f.color);
		$(idclass).css({'color': f.hsl[2] > 0.5 ? '#000' : '#fff'});
		$(idclass).next().empty().prepend('hsl(' + Math.round(f.hsl[0]*360)+',' + Math.round(f.hsl[1]*100)+'%,' + Math.round(f.hsl[2]*100) + '%)');
	}
	
	var f = $.farbtastic('#picker');
	//var thisss = $(this);
	
	if($('#bgcolor').val()){
		$('.js-color-demo').css('background-color', $('#bgcolor').val());
	}
	if($('#color').val()){
		$('.js-color-demo').css('color', $('#color').val());
	}
	if($('#linkcolor').val()){
		$('.js-color-demo a').css('color', $('#linkcolor').val());
	}

});
</script>

<?php 
	//menu(); 
	include_once '../inc/_menu_color.php';
?>

<div class="fx-grid">

	<div class="fx-box fx-box-3">

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

		
		<p class="js-color-demo" style="padding:10px; background-color:<?php echo $bgcolor; ?>; color:<?php echo $textcolor; ?>;"><strong>
		Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
		Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
		Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
		</strong></p>

	</div><!-- .fx-box -->

<?php
include '../inc/_sidebar.php';
?>

</div><!-- .fx-grid -->
	
<?php
include '../inc/_footer.php';
?>