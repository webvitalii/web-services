<?php 
include_once '../include.php';
doctype();
//<title>Farbtastic</title>
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
<script src="/prozirka/js/jquery.js" type="text/javascript"></script>
 <script type="text/javascript" src="/prozirka/farbtastic/farbtastic.js"></script>

	 <link rel="stylesheet" href="/prozirka/farbtastic/farbtastic.css" type="text/css" />
	<link href="/prozirka/css/grey.css" rel="stylesheet" type="text/css" />

 
 
 <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#demo').hide();
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
123
<div id="demo" style="color: red; font-size: 1.4em">jQuery.js is not present. You must install jQuery in this folder for the demo to work.</div>

<form id="color123" name="color123" method="get" action="<?php echo basename(__FILE__);?>" enctype="multipart/form-data">
<fieldset>
	<div class="form-item">
		<p>
		Background hex color: <input type="text" id="bgcolor" name="bgcolor" value="" />
		<span class="bgcolorhsl"></span>
		</p>
		
		<p>
		Foreground hex color: <input type="text" id="color" name="color" value="" />
		<span class="colorhsl"></span>
		</p>
		
		<p>
		Hyperlink hex color: <input type="text" id="linkcolor" name="linkcolor" value="" />
		<span class="linkcolorhsl"></span>
		</p>
		
	</div>
	<div id="picker"></div>
	</fieldset>
</form>

<div id="farb-color"><strong>Farbtastic foreground, background and <a href="../">hyperlink</a> color<strong></div>

</div>
</body>
</html>
