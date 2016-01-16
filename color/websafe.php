<?php 
include_once '../include.php';
doctype();
//<title>Web safe color table</title>
?>
<html>
<head>
	<?php head(); ?>
	<?php color_head(); ?>
</head>

<body>

<div id="main">

<?php 
	//menu(); 
	include_once '_menu.php';
?>

			<h3>Table of 216 web safe colors</h3>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="websafetable">
<?php
for ($r = 0; $r <= 255; $r+=51) {
	for ($g = 0; $g <= 255; $g+=51) {
		echo '<tr>'. chr(10);
		for ($b = 0; $b <= 255; $b+=51) {
			echo '	<td>';
			//rgb_sample($r,$g,$b,'');
			
			$hsl = rgb2hsl($r,$g,$b);
			$hex = rgb2hex($r,$g,$b);
			$color = readable_color($r,$g,$b);

			echo chr(10).'<div class="rgb-sample" style="background:'.$hex.'; color:'.$color.';">'.chr(10);
			echo '	'.$hex.'; rgb('.$r.','.$g.','.$b.'); hsl('.$hsl[0].','.$hsl[1].'%,'.$hsl[2].'%); '.chr(10);
					
			echo '	</td>'.chr(10);
		}
		echo '</tr>'.chr(10);
	}
}
?>
</table>

		
			<h3>Table of "grey" web safe colors</h3>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="websafetable">
<?php
echo '<tr>'. chr(10);
for ($i = 0; $i <= 255; $i += 51) {
	echo '	<td>';
	//rgb_sample($i,$i,$i,'');
	$hsl = rgb2hsl($i,$i,$i);
	$hex = rgb2hex($i,$i,$i);
	$color = readable_color($i,$i,$i);

	echo chr(10).'<div class="rgb-sample" style="background:'.$hex.'; color:'.$color.';">'.chr(10);
	echo '	'.$hex.'; rgb('.$i.','.$i.','.$i.'); hsl('.$hsl[0].','.$hsl[1].'%,'.$hsl[2].'%); '.chr(10);
	
	echo '	</td>'.chr(10);
}
echo '</tr>'.chr(10);
?>
</table>
		
	<?php footer(); ?>
</div>

</body>
</html>