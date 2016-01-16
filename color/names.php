<?php 
include_once '../include.php';
doctype();
//<title>Color names</title>
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
			
			
<h3>Color names and RGB values</h3>
<p>You can set color by color name. The color names are case-insensitive.</p>
<div class="rgb-sample">
	<p><strong>Examples</strong>:<br>
	
&lt;span style="background-color:black;"&gt;<span style="background-color:black;">#000000</span>&lt;/span&gt;<br>
&lt;span style="background-color:silver;"&gt;<span style="background-color:silver;">#c0c0c0</span>&lt;/span&gt;<br>
&lt;span style="background-color:gray;"&gt;<span style="background-color:gray;">#808080</span>&lt;/span&gt;<br>
&lt;span style="background-color:grey;"&gt;<span style="background-color:grey;">#808080</span>&lt;/span&gt;<br>
&lt;span style="background-color:white;"&gt;<span style="background-color:white;">#ffffff</span>&lt;/span&gt;<br>
&lt;span style="background-color:maroon;"&gt;<span style="background-color:maroon;">#800000</span>&lt;/span&gt;<br>
&lt;span style="background-color:orange;"&gt;<span style="background-color:orange;">#ffA500</span>&lt;/span&gt;<br>
&lt;span style="background-color:red;"&gt;<span style="background-color:red;">#ff0000</span>&lt;/span&gt;<br>
&lt;span style="background-color:purple;"&gt;<span style="background-color:purple;">#800080</span>&lt;/span&gt;<br>
&lt;span style="background-color:fuchsia;"&gt;<span style="background-color:fuchsia;">#ff00ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:green;"&gt;<span style="background-color:green;">#008000</span>&lt;/span&gt;<br>
&lt;span style="background-color:lime;"&gt;<span style="background-color:lime;">#00ff00</span>&lt;/span&gt;<br>
&lt;span style="background-color:olive;"&gt;<span style="background-color:olive;">#808000</span>&lt;/span&gt;<br>
&lt;span style="background-color:yellow;"&gt;<span style="background-color:yellow;">#ffff00</span>&lt;/span&gt;<br>
&lt;span style="background-color:navy;"&gt;<span style="background-color:navy;">#000080</span>&lt;/span&gt;<br>
&lt;span style="background-color:blue;"&gt;<span style="background-color:blue;">#0000ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:teal;"&gt;<span style="background-color:teal;">#008080</span>&lt;/span&gt;<br>
&lt;span style="background-color:aqua;"&gt;<span style="background-color:aqua;">#00ffff</span>&lt;/span&gt;<br>
&lt;span style="background-color:aliceblue;"&gt;<span style="background-color:aliceblue;">#f0f8ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:antiquewhite;"&gt;<span style="background-color:antiquewhite;">#faebd7</span>&lt;/span&gt;<br>
&lt;span style="background-color:aquamarine;"&gt;<span style="background-color:aquamarine;">#7fffd4</span>&lt;/span&gt;<br>
&lt;span style="background-color:azure;"&gt;<span style="background-color:azure;">#f0ffff</span>&lt;/span&gt;<br>
&lt;span style="background-color:beige;"&gt;<span style="background-color:beige;">#f5f5dc</span>&lt;/span&gt;<br>
&lt;span style="background-color:bisque;"&gt;<span style="background-color:bisque;">#ffe4c4</span>&lt;/span&gt;<br>
&lt;span style="background-color:blanchedalmond;"&gt;<span style="background-color:blanchedalmond;">#ffebcd</span>&lt;/span&gt;<br>
&lt;span style="background-color:blueviolet;"&gt;<span style="background-color:blueviolet;">#8a2be2</span>&lt;/span&gt;<br>
&lt;span style="background-color:brown;"&gt;<span style="background-color:brown;">#a52a2a</span>&lt;/span&gt;<br>
&lt;span style="background-color:burlywood;"&gt;<span style="background-color:burlywood;">#deb887</span>&lt;/span&gt;<br>
&lt;span style="background-color:cadetblue;"&gt;<span style="background-color:cadetblue;">#5f9ea0</span>&lt;/span&gt;<br>
&lt;span style="background-color:chartreuse;"&gt;<span style="background-color:chartreuse;">#7fff00</span>&lt;/span&gt;<br>
&lt;span style="background-color:chocolate;"&gt;<span style="background-color:chocolate;">#d2691e</span>&lt;/span&gt;<br>
&lt;span style="background-color:coral;"&gt;<span style="background-color:coral;">#ff7f50</span>&lt;/span&gt;<br>
&lt;span style="background-color:cornflowerblue;"&gt;<span style="background-color:cornflowerblue;">#6495ed</span>&lt;/span&gt;<br>
&lt;span style="background-color:cornsilk;"&gt;<span style="background-color:cornsilk;">#fff8dc</span>&lt;/span&gt;<br>
&lt;span style="background-color:crimson;"&gt;<span style="background-color:crimson;">#dc143c</span>&lt;/span&gt;<br>
&lt;span style="background-color:cyan;"&gt;<span style="background-color:cyan;">#00ffff</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkblue;"&gt;<span style="background-color:darkblue;">#00008b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkcyan;"&gt;<span style="background-color:darkcyan;">#008b8b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkgoldenrod;"&gt;<span style="background-color:darkgoldenrod;">#b8860b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkgray;"&gt;<span style="background-color:darkgray;">#a9a9a9</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkgrey;"&gt;<span style="background-color:darkgrey;">#a9a9a9</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkgreen;"&gt;<span style="background-color:darkgreen;">#006400</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkkhaki;"&gt;<span style="background-color:darkkhaki;">#bdb76b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkmagenta;"&gt;<span style="background-color:darkmagenta;">#8b008b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkolivegreen;"&gt;<span style="background-color:darkolivegreen;">#556b2f</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkorange;"&gt;<span style="background-color:darkorange;">#ff8c00</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkorchid;"&gt;<span style="background-color:darkorchid;">#9932cc</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkred;"&gt;<span style="background-color:darkred;">#8b0000</span>&lt;/span&gt;<br>
&lt;span style="background-color:darksalmon;"&gt;<span style="background-color:darksalmon;">#e9967a</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkseagreen;"&gt;<span style="background-color:darkseagreen;">#8fbc8f</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkslateblue;"&gt;<span style="background-color:darkslateblue;">#483d8b</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkslategray;"&gt;<span style="background-color:darkslategray;">#2f4f4f</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkslategrey;"&gt;<span style="background-color:darkslategrey;">#2f4f4f</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkturquoise;"&gt;<span style="background-color:darkturquoise;">#00ced1</span>&lt;/span&gt;<br>
&lt;span style="background-color:darkviolet;"&gt;<span style="background-color:darkviolet;">#9400d3</span>&lt;/span&gt;<br>
&lt;span style="background-color:deeppink;"&gt;<span style="background-color:deeppink;">#ff1493</span>&lt;/span&gt;<br>
&lt;span style="background-color:deepskyblue;"&gt;<span style="background-color:deepskyblue;">#00bfff</span>&lt;/span&gt;<br>
&lt;span style="background-color:dimgray;"&gt;<span style="background-color:dimgray;">#696969</span>&lt;/span&gt;<br>
&lt;span style="background-color:dimgrey;"&gt;<span style="background-color:dimgrey;">#696969</span>&lt;/span&gt;<br>
&lt;span style="background-color:dodgerblue;"&gt;<span style="background-color:dodgerblue;">#1e90ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:firebrick;"&gt;<span style="background-color:firebrick;">#b22222</span>&lt;/span&gt;<br>
&lt;span style="background-color:floralwhite;"&gt;<span style="background-color:floralwhite;">#fffaf0</span>&lt;/span&gt;<br>
&lt;span style="background-color:forestgreen;"&gt;<span style="background-color:forestgreen;">#228b22</span>&lt;/span&gt;<br>
&lt;span style="background-color:gainsboro;"&gt;<span style="background-color:gainsboro;">#dcdcdc</span>&lt;/span&gt;<br>
&lt;span style="background-color:ghostwhite;"&gt;<span style="background-color:ghostwhite;">#f8f8ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:gold;"&gt;<span style="background-color:gold;">#ffd700</span>&lt;/span&gt;<br>
&lt;span style="background-color:goldenrod;"&gt;<span style="background-color:goldenrod;">#daa520</span>&lt;/span&gt;<br>
&lt;span style="background-color:greenyellow;"&gt;<span style="background-color:greenyellow;">#adff2f</span>&lt;/span&gt;<br>
&lt;span style="background-color:honeydew;"&gt;<span style="background-color:honeydew;">#f0fff0</span>&lt;/span&gt;<br>
&lt;span style="background-color:hotpink;"&gt;<span style="background-color:hotpink;">#ff69b4</span>&lt;/span&gt;<br>
&lt;span style="background-color:indianred;"&gt;<span style="background-color:indianred;">#cd5c5c</span>&lt;/span&gt;<br>
&lt;span style="background-color:indigo;"&gt;<span style="background-color:indigo;">#4b0082</span>&lt;/span&gt;<br>
&lt;span style="background-color:ivory;"&gt;<span style="background-color:ivory;">#fffff0</span>&lt;/span&gt;<br>
&lt;span style="background-color:khaki;"&gt;<span style="background-color:khaki;">#f0e68c</span>&lt;/span&gt;<br>
&lt;span style="background-color:lavender;"&gt;<span style="background-color:lavender;">#e6e6fa</span>&lt;/span&gt;<br>
&lt;span style="background-color:lavenderblush;"&gt;<span style="background-color:lavenderblush;">#fff0f5</span>&lt;/span&gt;<br>
&lt;span style="background-color:lawngreen;"&gt;<span style="background-color:lawngreen;">#7cfc00</span>&lt;/span&gt;<br>
&lt;span style="background-color:lemonchiffon;"&gt;<span style="background-color:lemonchiffon;">#fffacd</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightblue;"&gt;<span style="background-color:lightblue;">#add8e6</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightcoral;"&gt;<span style="background-color:lightcoral;">#f08080</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightcyan;"&gt;<span style="background-color:lightcyan;">#e0ffff</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightgoldenrodyellow;"&gt;<span style="background-color:lightgoldenrodyellow;">#fafad2</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightgray;"&gt;<span style="background-color:lightgray;">#d3d3d3</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightgrey;"&gt;<span style="background-color:lightgrey;">#d3d3d3</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightgreen;"&gt;<span style="background-color:lightgreen;">#90ee90</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightpink;"&gt;<span style="background-color:lightpink;">#ffb6c1</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightsalmon;"&gt;<span style="background-color:lightsalmon;">#ffa07a</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightseagreen;"&gt;<span style="background-color:lightseagreen;">#20b2aa</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightskyblue;"&gt;<span style="background-color:lightskyblue;">#87cefa</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightslategray;"&gt;<span style="background-color:lightslategray;">#778899</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightslategrey;"&gt;<span style="background-color:lightslategrey;">#778899</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightsteelblue;"&gt;<span style="background-color:lightsteelblue;">#b0c4de</span>&lt;/span&gt;<br>
&lt;span style="background-color:lightyellow;"&gt;<span style="background-color:lightyellow;">#ffffe0</span>&lt;/span&gt;<br>
&lt;span style="background-color:lime;"&gt;<span style="background-color:lime;">#00ff00</span>&lt;/span&gt;<br>
&lt;span style="background-color:limegreen;"&gt;<span style="background-color:limegreen;">#32cd32</span>&lt;/span&gt;<br>
&lt;span style="background-color:linen;"&gt;<span style="background-color:linen;">#faf0e6</span>&lt;/span&gt;<br>
&lt;span style="background-color:magenta;"&gt;<span style="background-color:magenta;">#ff00ff</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumaquamarine;"&gt;<span style="background-color:mediumaquamarine;">#66cdaa</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumblue;"&gt;<span style="background-color:mediumblue;">#0000cd</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumorchid;"&gt;<span style="background-color:mediumorchid;">#ba55d3</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumpurple;"&gt;<span style="background-color:mediumpurple;">#9370db</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumseagreen;"&gt;<span style="background-color:mediumseagreen;">#3cb371</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumslateblue;"&gt;<span style="background-color:mediumslateblue;">#7b68ee</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumspringgreen;"&gt;<span style="background-color:mediumspringgreen;">#00fa9a</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumturquoise;"&gt;<span style="background-color:mediumturquoise;">#48d1cc</span>&lt;/span&gt;<br>
&lt;span style="background-color:mediumvioletred;"&gt;<span style="background-color:mediumvioletred;">#c71585</span>&lt;/span&gt;<br>
&lt;span style="background-color:midnightblue;"&gt;<span style="background-color:midnightblue;">#191970</span>&lt;/span&gt;<br>
&lt;span style="background-color:mintcream;"&gt;<span style="background-color:mintcream;">#f5fffa</span>&lt;/span&gt;<br>
&lt;span style="background-color:mistyrose;"&gt;<span style="background-color:mistyrose;">#ffe4e1</span>&lt;/span&gt;<br>
&lt;span style="background-color:moccasin;"&gt;<span style="background-color:moccasin;">#ffe4b5</span>&lt;/span&gt;<br>
&lt;span style="background-color:navajowhite;"&gt;<span style="background-color:navajowhite;">#ffdead</span>&lt;/span&gt;<br>
&lt;span style="background-color:oldlace;"&gt;<span style="background-color:oldlace;">#fdf5e6</span>&lt;/span&gt;<br>
&lt;span style="background-color:olivedrab;"&gt;<span style="background-color:olivedrab;">#6b8e23</span>&lt;/span&gt;<br>
&lt;span style="background-color:orange;"&gt;<span style="background-color:orange;">#ffa500</span>&lt;/span&gt;<br>
&lt;span style="background-color:orangered;"&gt;<span style="background-color:orangered;">#ff4500</span>&lt;/span&gt;<br>
&lt;span style="background-color:orchid;"&gt;<span style="background-color:orchid;">#da70d6</span>&lt;/span&gt;<br>
&lt;span style="background-color:palegoldenrod;"&gt;<span style="background-color:palegoldenrod;">#eee8aa</span>&lt;/span&gt;<br>
&lt;span style="background-color:palegreen;"&gt;<span style="background-color:palegreen;">#98fb98</span>&lt;/span&gt;<br>
&lt;span style="background-color:paleturquoise;"&gt;<span style="background-color:paleturquoise;">#afeeee</span>&lt;/span&gt;<br>
&lt;span style="background-color:palevioletred;"&gt;<span style="background-color:palevioletred;">#db7093</span>&lt;/span&gt;<br>
&lt;span style="background-color:papayawhip;"&gt;<span style="background-color:papayawhip;">#ffefd5</span>&lt;/span&gt;<br>
&lt;span style="background-color:peachpuff;"&gt;<span style="background-color:peachpuff;">#ffdab9</span>&lt;/span&gt;<br>
&lt;span style="background-color:peru;"&gt;<span style="background-color:peru;">#cd853f</span>&lt;/span&gt;<br>
&lt;span style="background-color:pink;"&gt;<span style="background-color:pink;">#ffc0cb</span>&lt;/span&gt;<br>
&lt;span style="background-color:plum;"&gt;<span style="background-color:plum;">#dda0dd</span>&lt;/span&gt;<br>
&lt;span style="background-color:powderblue;"&gt;<span style="background-color:powderblue;">#b0e0e6</span>&lt;/span&gt;<br>
&lt;span style="background-color:purple;"&gt;<span style="background-color:purple;">#800080</span>&lt;/span&gt;<br>
&lt;span style="background-color:red;"&gt;<span style="background-color:red;">#ff0000</span>&lt;/span&gt;<br>
&lt;span style="background-color:rosybrown;"&gt;<span style="background-color:rosybrown;">#bc8f8f</span>&lt;/span&gt;<br>
&lt;span style="background-color:royalblue;"&gt;<span style="background-color:royalblue;">#4169e1</span>&lt;/span&gt;<br>
&lt;span style="background-color:saddlebrown;"&gt;<span style="background-color:saddlebrown;">#8b4513</span>&lt;/span&gt;<br>
&lt;span style="background-color:salmon;"&gt;<span style="background-color:salmon;">#fa8072</span>&lt;/span&gt;<br>
&lt;span style="background-color:sandybrown;"&gt;<span style="background-color:sandybrown;">#f4a460</span>&lt;/span&gt;<br>
&lt;span style="background-color:seagreen;"&gt;<span style="background-color:seagreen;">#2e8b57</span>&lt;/span&gt;<br>
&lt;span style="background-color:seashell;"&gt;<span style="background-color:seashell;">#fff5ee</span>&lt;/span&gt;<br>
&lt;span style="background-color:sienna;"&gt;<span style="background-color:sienna;">#a0522d</span>&lt;/span&gt;<br>
&lt;span style="background-color:silver;"&gt;<span style="background-color:silver;">#c0c0c0</span>&lt;/span&gt;<br>
&lt;span style="background-color:skyblue;"&gt;<span style="background-color:skyblue;">#87ceeb</span>&lt;/span&gt;<br>
&lt;span style="background-color:slateblue;"&gt;<span style="background-color:slateblue;">#6a5acd</span>&lt;/span&gt;<br>
&lt;span style="background-color:slategray;"&gt;<span style="background-color:slategray;">#708090</span>&lt;/span&gt;<br>
&lt;span style="background-color:slategrey;"&gt;<span style="background-color:slategrey;">#708090</span>&lt;/span&gt;<br>
&lt;span style="background-color:snow;"&gt;<span style="background-color:snow;">#fffafa</span>&lt;/span&gt;<br>
&lt;span style="background-color:springgreen;"&gt;<span style="background-color:springgreen;">#00ff7f</span>&lt;/span&gt;<br>
&lt;span style="background-color:steelblue;"&gt;<span style="background-color:steelblue;">#4682b4</span>&lt;/span&gt;<br>
&lt;span style="background-color:tan;"&gt;<span style="background-color:tan;">#d2b48c</span>&lt;/span&gt;<br>
&lt;span style="background-color:thistle;"&gt;<span style="background-color:thistle;">#d8bfd8</span>&lt;/span&gt;<br>
&lt;span style="background-color:tomato;"&gt;<span style="background-color:tomato;">#ff6347</span>&lt;/span&gt;<br>
&lt;span style="background-color:turquoise;"&gt;<span style="background-color:turquoise;">#40e0d0</span>&lt;/span&gt;<br>
&lt;span style="background-color:violet;"&gt;<span style="background-color:violet;">#ee82ee</span>&lt;/span&gt;<br>
&lt;span style="background-color:wheat;"&gt;<span style="background-color:wheat;">#f5deb3</span>&lt;/span&gt;<br>
&lt;span style="background-color:whitesmoke;"&gt;<span style="background-color:whitesmoke;">#f5f5f5</span>&lt;/span&gt;<br>
&lt;span style="background-color:yellowgreen;"&gt;<span style="background-color:yellowgreen;">#9acd32</span>&lt;/span&gt;<br>

	</p>
			</div>
			
	<?php footer(); ?>
</div>
</body>
</html>