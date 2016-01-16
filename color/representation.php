<?php 

header("Location: http://web-profile.com.ua/css/color-in-web-with-css/"); /* Redirect browser */
exit;

include_once '../include.php';
doctype();
//<title>Representation color in Web</title>
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

			
	<h3>RGB hex color representation</h3>
	<p>Color value (#rrggbb) contains of three pairs and represents Red, Green and Blue component of the color accordingly. Each pair has hexadecimal integer range 00-ff.<br>
	<strong>Example</strong>: &lt;span style="color:#ffff00;"&gt;<span style="color:#ffff00;">colored text</span>&lt;/span&gt;</p>
	<p>There is a short variant (#rgb). #ff5500 = #f50 and so on.<br>
	<strong>Example</strong>: &lt;span style="color:#ff0;"&gt;<span style="color:#ff0;">short variant, same as #ffff00</span>&lt;/span&gt;</p>
	
	
	
	
	<h3>RGB color representation</h3>
	<p>Color value (r,g,b) is comma-separated list of three numerical values and represents Red, Green and Blue component of the color accordingly. Each pair has integer range 0-255.<br>
	<strong>Examples</strong>: &lt;span style="color:rgb(255,255,0);"&gt;<span style="color:rgb(255,255,0);">colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:rgb(300,255,-100);"&gt;<span style="color:rgb(255,255,0);">same as rgb(255,255,0)</span>&lt;/span&gt;</p>
	<p>Color value (r%,g%,b%) can be represented in percents of float range 0.0% - 100.0%.<br>
	<strong>Examples</strong>: 
	&lt;span style="color:rgb(100%,100%,0%);"&gt;<span style="color:rgb(100%,100%,0%);">colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:rgb(200%,100.0%,-100%);"&gt;<span style="color:rgb(200%,100.0%,-100%);">same as rgb(100%,100%,0%)</span>&lt;/span&gt;<br>
	</p>
	<p>Color value in RGB color model can be extended with alpha-value (r,g,b,a) what adds transparency to the color. Alpha-value has float range 0.0-1.0. Can be used with both previous variants. Not supported by some browsers.<br>
	<strong>Examples</strong>: <br>
	&lt;span style="color:rgba(100%,100%,0%,1);"&gt;<span style="color:rgba(100%,100%,0%,1);">normal text</span>&lt;/span&gt;<br>
	&lt;span style="color:rgba(255,255,0,0.5);"&gt;<span style="color:rgba(255,255,0,0.5);">half-transparent</span>&lt;/span&gt;<br>
	&lt;span style="color:rgba(100%,100%,0%,0.25);"&gt;<span style="color:rgba(100%,100%,0%,0.25);">very transparent</span>&lt;/span&gt;<br>
	</p>
	
	
	
	<h3>HSL color representation</h3>
	<p>Color value in HSL color model (h,s%,l%) is comma-separated list of three numerical values and represents Hue, Saturation and Lightness component of the color accordingly. Not supported by some browsers.</p>
	<p>Hue is a color component. It has range 0-359. HSL color model is like color wheel, where colors are spread around the circle. So 0=360=720=red, 120=480=green, 240=blue.</p>
	<p>If Saturation=0 the color is grey. If Saturation=100 the color is fully colored. It has range 0-100 and represented as percentages.</p>
	<p>If Lightness=0 the color is black. If Lightness=100 the color is white. It has range 0-100 and represented as percentages.</p>
	
	<p><strong>Examples</strong>: <br>
	&lt;span style="color:hsl(60,50%,50%);"&gt;<span style="color:hsl(60,50%,50%);">normally colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(60,75%,50%);"&gt;<span style="color:hsl(60,75%,50%);">more colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(60,25%,50%);"&gt;<span style="color:hsl(60,25%,50%);">less colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(60,50%,75%);"&gt;<span style="color:hsl(60,50%,75%);">lighter colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(60,50%,25%);"&gt;<span style="color:hsl(60,50%,25%);">darker colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(60,100%,50%);"&gt;<span style="color:hsl(60,100%,50%);">fully colored text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(0,100%,100%);"&gt;<span style="color:hsl(0,100%,100%);">white text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsl(0,100%,0%);"&gt;<span style="color:hsl(0,100%,0%);">black text</span>&lt;/span&gt;<br>
	</p>

	<p>Color value in HSL color model can be extended with alpha-value (h,s%,l%,a) what adds transparency to color. Alpha-value has float range 0.0-1.0.</p>
	<p><strong>Examples</strong>: <br> 
	&lt;span style="color:hsla(60,50%,50%,1);"&gt;<span style="color:hsla(60,100%,50%,1);">normal text</span>&lt;/span&gt;<br>
	&lt;span style="color:hsla(60,50%,50%,0.5);"&gt;<span style="color:hsla(60,100%,50%,0.5);">half-transparent</span>&lt;/span&gt;<br>
	&lt;span style="color:hsla(60,50%,50%,0.25);"&gt;<span style="color:hsla(60,100%,50%,0.25);">very transparent</span>&lt;/span&gt;<br>
	
	</p>
	
	<?php footer(); ?>	
</div>
</body>
</html>