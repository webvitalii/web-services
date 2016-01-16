<?php 

header("Location: http://web-profile.com.ua/web-services/color/index.php"); /* Redirect browser */
exit;

include_once '../include.php';
doctype();
//<title>Color wheel clicker</title>
?>
<html>
<head>

	<?php head(); ?>
	<?php color_head(); ?>

 
 
 <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
   // $('#picker').farbtastic('#color');
	
    // !!!!!! $('#input-color').css({'background-color': $('#color').val()});
	//$('#picker').click(function() {
	//  $('#input-color').css({'background-color': $('#color').val()});
	//});
	
	//$.farbtastic('#picker').setColor('#3399FF');
	// !!!!!!!!!!! var farb = $.farbtastic('#picker');
	//farb.linkTo(function () {
	//  $('#farb-color').css('background-color', farb.color);
	//  $('#color').attr('value', farb.color);
	//  $('#hsl').attr('value', farb.hsl);
	//});
	
	//var farb = $.farbtastic('#picker');
	//farb.linkTo(function () {
	//  $('#farb-color').css('background-color', farb.color);
	//  $('#color').attr('value', farb.color);
	//  $('#hsl').attr('value', farb.hsl);
	//});
	
	//$.farbtastic('#picker').setColor('#275291');
	var hh = 0.5;
	var ss = 0.5;
	var ll = 0.5;
	var colarr = [0.5, 0.7, 0.4];
	//$.farbtastic('#picker').setColor(colarr[0],colarr[1],colarr[2]);
	//$.farbtastic('#picker').setHSL(colarr[0],colarr[1],colarr[2]);
	//$.farbtastic('#picker').setHSL([0.5, 0.7, 0.4]);
	$.farbtastic('#picker').setHSL([hh, ss, ll]);
	
	function farbcolor(idclass) {
		$(idclass).css('background-color', f.color);
		$(idclass).attr('value', f.color);
		$(idclass).css({'color': f.hsl[2] > 0.5 ? '#000' : '#fff'});
		$(idclass).next().empty().prepend('hsl(' + Math.round(f.hsl[0]*360)+',' + Math.round(f.hsl[1]*100)+'%,' + Math.round(f.hsl[2]*100) + '%)');
	}
	
	// not working
	function farbcolor2() {
		var thisss = $(this);
		$(thisss).css('background-color', f.color);
		$(thisss).attr('value', f.color);
		$(thisss).css({'color': f.hsl[2] > 0.5 ? '#000' : '#fff'});
		$(thisss).next().empty().prepend('hsl(' + Math.round(f.hsl[0]*360)+',' + Math.round(f.hsl[1]*100)+'%,' + Math.round(f.hsl[2]*100) + '%)');
	}
	
	
	var f = $.farbtastic('#picker');
	//var thisss = $(this);
	
	if($('#bgcolor').val()){
		$('#farb-color').css('background-color', $('#bgcolor').val());
	}
	if($('#color').val()){
		$('#farb-color').css('color', $('#color').val());
	}
	if($('#linkcolor').val()){
		$('#farb-color a').css('color', $('#linkcolor').val());
	}
	
	
    $('#bgcolor').focus(function() {
		f.linkTo(this);
		f.linkTo(function() {
			farbcolor('#bgcolor');
			$('#farb-color').css('background-color', $('#bgcolor').val());
		});
	});

	$('#bgcolor').keyup(function() {
		f.linkTo(this);
		$('#farb-color').css('background-color', f.color);
		f.linkTo(function() {
			farbcolor('#bgcolor');
			$('#farb-color').css('background-color', f.color);
		});
	});
	
	
	$('#color').focus(function() {
		f.linkTo(this);
		f.linkTo(function() {
			farbcolor('#color');
			$('#farb-color').css('color', f.color);
		});
	});
	
	$('#color').keyup(function() {
		f.linkTo(this);
		$('#farb-color').css('color', f.color);
		f.linkTo(function() {
			farbcolor('#color');
			$('#farb-color').css('color', f.color);
		});
	});
	
	$('#linkcolor').focus(function() {
		f.linkTo(this);
		f.linkTo(function() {
			farbcolor('#linkcolor');
			$('#farb-color a').css('color', f.color);
		});
	});
	$('#linkcolor').keyup(function() {
		f.linkTo(this);
		$('#farb-color a').css('color', f.color);
		f.linkTo(function() {
			farbcolor('#linkcolor');
			$('#farb-color a').css('color', f.color);
		});
	});
	
	//farb.linkTo(function () {
	//	$('#farb-color').css('background-color', farb.color);
	//	$('#color').attr('value', farb.color);
	//	$('#hsl').attr('value', farb.hsl);
	//});
	
	//$.farbtastic.('#picker').linkTo(function(color) {
	  // myColorChangeFunction(someObjectName, color);
	 //  $('#farb-color').css({'background-color': color});
	//});
	
	//$.farbtastic('#picker', function(color){
	//	alert(color);
	//});
	//$('#farb-color').css({'background-color': $('#color').val()});
	
	//$('#picker').farbtastic(function(color){
	//   $('#input-color').css({'background-color':color});
	   
	   // commands
	//});
	
	//var col = $('#color').val;
	//var col2 = $('#color').attr('value', '#990077');
	//$(function() { 
	//	$('#info').hide();
	//	$('#change').click(function() { 
	//		$('#input').attr('value', 'New value'); 
	//		$('#hidden').attr('value', 'New hidden value'); 
	//	}); 
	//}); 
	//alert('ery');

	//$('#input-color').css('backgroundColor':  input:text.val());
	//$('#input-color', form).css('backgroundColor', inputs[0].value);
	//$('#input-color').css({'backgroundColor': col2});
	//$.farbtastic('#picker').setColor('#990000');
	
	//$.farbtastic('#picker').setColor([0.3,0.4,0.5]);
	//$('#picker').farbtastic(function(color){
	//   $('#input-color').css({'background-color':color});
	   // commands
	//});

	
  });
 </script>
</head>
<body>
<div id="main">


<?php 
	//menu(); 
	include_once '_menu.php';
?>

	<h2>Color clicker</h2>
	<p>You can choose background color, text color and link color. Click on input with color which you want to change and choose new color on color wheel or just click <a href="<?php echo basename(__FILE__);?>" rel="nofollow">random colors</a>.</p>

<script>
jQuery(function($){
	$('.js-form-color').attr('action', '<?php echo basename(__FILE__);?>');
});
</script>
	
<form name="color" class="js-form-color" method="get" action="form.html" enctype="multipart/form-data">
<fieldset>
<?php 
 	if ((isset($_GET['bgcolor'])) && (isset($_GET['textcolor'])) && (isset($_GET['linkcolor']))) {
		$bgcolor = $_GET['bgcolor'];
		$textcolor = $_GET['textcolor'];
		$linkcolor = $_GET['linkcolor'];
	}else{
		$bgcolor = random_hex();
		$textcolor = random_hex();
		$linkcolor = random_hex();
	}
	
?>
	<div class="form-item">

	
	<table>
		<tr>
			<td rowspan="4"><div id="picker"></div></td>
			<td>Background color:</td>
			<td><input type="text" style="background:<?php echo $bgcolor; ?>" class="text medium_width" id="bgcolor" name="bgcolor" value="<?php echo $bgcolor; ?>" />
		<span class="bgcolorhsl"></span></td>
		</tr>
		<tr>

			<td>Text color:</td>
			<td><input type="text" style="background:<?php echo $textcolor; ?>" class="text medium_width" id="color" name="textcolor" value="<?php echo $textcolor; ?>" />
			<span class="colorhsl"></span></td>
		</tr>
		<tr>

			<td>Hyperlink color:</td>
			<td><input type="text" style="background:<?php echo $linkcolor; ?>" class="text medium_width" id="linkcolor" name="linkcolor" value="<?php echo $linkcolor; ?>" />
			<span class="linkcolorhsl"></span></td>
		</tr>
		<tr>

			<td><a href="<?php echo basename(__FILE__);?>" rel="nofollow">random colors</a></td>
			<td><input type="submit" name="color" class="submit" value="submit" /></td>
		</tr>
	</table>

		
	</div>
	
	</fieldset>
</form>

<p id="farb-color" style="padding:10px; background-color:<?php echo $bgcolor; ?>; color:<?php echo $textcolor; ?>;"><strong>
Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
Background, text, and <a href="../" style="color:<?php echo $linkcolor; ?>;" rel="nofollow">hyperlink</a> color.
</strong></p>

	<?php footer(); ?>
	
</div>

</body>
</html>
