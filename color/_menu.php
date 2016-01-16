<?php 
$menu = array(
	//'index.php' => 'Color', 
	//'representation.php' => 'Representation color in Web', 
	'index.php' => 'Color wheel clicker',
	'rgb_to_hsl.php' => 'RGB to HSL', 
	'hsl_to_rgb.php' => 'HSL to RGB', 
	'rgb_clicker.php' => 'RGB color clicker',
	'hsl_clicker.php' => 'HSL color clicker',
	'new_color_hue.php' => 'New color with changing Hue',
	'new_color_saturation.php' => 'New color with changing Saturation',
	'new_color_lightness.php' => 'New color with changing Lightness',
	'color_gradient.php' => 'Color gradient',
	'variations.php' => 'HSL color variations',
	'names.php' => 'Color names',
	'websafe.php' => 'Web safe color table'	
);
$path = pathinfo($_SERVER['SCRIPT_NAME']);
$filename = $path['basename'];
?>
	<div class="menu">
	<ul class="menu">
<?php
foreach ($menu as $key => $val) {
	//echo "$key = $val\n";
	echo '		<li>';
	if ($filename == $key) {
		echo '<strong>'.$val.'</strong>';
	} else {
		echo '<a href="'.$key.'" title="'.$val.'">'.$val.'</a>';
	}
	echo '</li>'.chr(13).chr(10);
}
?>
	</ul>
	</div>

	
	
	
<div class="top-ad" style="width: 600px; height: 100px;">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- below-content-responsive -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-5207574527239705"
	     data-ad-slot="4585937273"
	     data-ad-format="auto"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

	
	
	
<div class="float-ad" style="position:fixed;top:40px;right:5px; width: 400px; height: 600px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar-responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="3109204073"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

	
	
	
	
	