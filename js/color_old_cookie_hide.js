/* 
Ways of using jQuery ($ = jQuery):
$(document).ready(function(){ ... };
$(function(){ ... }; 
*/

$(function(){
/* 	$('#test').css(
		'position':'absolute',
		'top':'100',
		'left':'100').animate({'top':'300','left':'300'},'4000','linear'); */
		
/* 	$('#test').click(function() {
		$(this).animate({
		'width': 300,'opacity': 0.25
		}, '8000');
	}); */
	
/* 	$('#test').toggle(function(){
		$(this).animate({
		'width': 300,'opacity': 0.25
		}, '8000');
	},
	function(){
		$(this).animate({
		'width': 700,'opacity': 1
		}, '8000');
	}
	); */
	
/* 	click(function() {
		$(this).animate({
		'width': 300,'opacity': 0.25
		}, '8000');
	});
	 */
		
/* Submit form onclick  */
	$('.label-radio input').click(function() {
		$('form#color').submit();
	});


	
/* $('.test').click(function() {
	$(this).animate({'width': 700}, '50000', 
	function() {$(this).animate({'width': 500},'20000');}
	);
}); */

/* $('.test').load('http://localhost/prozirka/color/index.php'); */

// cookie test
$.cookie('test_cookie', 1);


/* --------------- color menu hide/show begin --------------- */
// default behavior
	$('.menu').hover(function(){
		$('.menu').fadeTo('normal',1); 
	},function(){$('.menu').fadeTo('slow',0.7);});
	
// if cookie works
	if($.cookie('test_cookie')==1){
		if($.cookie('color_menu')==null || $.cookie('color_menu')=='show'){
			$('.menu').fadeTo('slow',0.7);
			$('.menu-toggle').text('hide');
		};
		if($.cookie('color_menu')=='hide'){
			$('.menu').hide();
			$('.menu-toggle').text('show');
		};
// if toggle clicked	
		$('.menu-toggle').click(function() {
			if($.cookie('color_menu')==null || $.cookie('color_menu')=='show'){
				$('.menu').hide();
				$.cookie('color_menu', 'hide');
				$('.menu-toggle').text('show');
			}
			else if($.cookie('color_menu')=='hide'){
				$('.menu').show();
				$.cookie('color_menu', 'show');
				$('.menu-toggle').text('hide');
			}
		});
		
	} // if cookie does not works, make it just toggle
	else {
		$('.menu-toggle').text('hide/show');
		$('.menu-toggle').click(function() {
			$('.menu').toggle();
		});
	}
/* --------------- color menu hide/show end --------------- */


/* --------------- color hue hide/show begin --------------- */
// if cookie works
	if($.cookie('test_cookie')==1){
		if($.cookie('color_hue')==null || $.cookie('color_hue')=='show'){
			$('.color-hue').show();
			$('.color-hue-toggle').text('hide');
		};
		if($.cookie('color_hue')=='hide'){
			$('.color-hue').hide();
			$('.color-hue-toggle').text('show');
		};
// if toggle clicked	
		$('.color-hue-toggle').click(function() {
			if($.cookie('color_hue')==null || $.cookie('color_hue')=='show'){
				$('.color-hue').hide();
				$.cookie('color_hue', 'hide');
				$('.color-hue-toggle').text('show');
			}
			else if($.cookie('color_hue')=='hide'){
				$('.color-hue').show();
				$.cookie('color_hue', 'show');
				$('.color-hue-toggle').text('hide');
			}
		});
		
	} // if cookie does not works, make it just toggle
	else {
		$('.color-hue-toggle').text('hide/show');
		$('.color-hue-toggle').click(function() {
			$('.color-hue').toggle();
		});
	}
/* --------------- color hue hide/show end --------------- */

/* --------------- color saturation hide/show begin --------------- */
// if cookie works
	if($.cookie('test_cookie')==1){
		if($.cookie('color_saturation')==null || $.cookie('color_saturation')=='show'){
			$('.color-saturation').show();
			$('.color-saturation-toggle').text('hide');
		};
		if($.cookie('color_saturation')=='hide'){
			$('.color-saturation').hide();
			$('.color-saturation-toggle').text('show');
		};
// if toggle clicked	
		$('.color-saturation-toggle').click(function() {
			if($.cookie('color_saturation')==null || $.cookie('color_saturation')=='show'){
				$('.color-saturation').hide();
				$.cookie('color_saturation', 'hide');
				$('.color-saturation-toggle').text('show');
			}
			else if($.cookie('color_saturation')=='hide'){
				$('.color-saturation').show();
				$.cookie('color_saturation', 'show');
				$('.color-saturation-toggle').text('hide');
			}
		});
		
	} // if cookie does not works, make it just toggle
	else {
		$('.color-saturation-toggle').text('hide/show');
		$('.color-saturation-toggle').click(function() {
			$('.color-saturation').toggle();
		});
	}
/* --------------- color saturation hide/show end --------------- */

/* --------------- color lightness hide/show begin --------------- */
// if cookie works
	if($.cookie('test_cookie')==1){
		if($.cookie('color_lightness')==null || $.cookie('color_lightness')=='show'){
			$('.color-lightness').show();
			$('.color-lightness-toggle').text('hide');
		};
		if($.cookie('color_lightness')=='hide'){
			$('.color-lightness').hide();
			$('.color-lightness-toggle').text('show');
		};
// if toggle clicked	
		$('.color-lightness-toggle').click(function() {
			if($.cookie('color_lightness')==null || $.cookie('color_lightness')=='show'){
				$('.color-lightness').hide();
				$.cookie('color_lightness', 'hide');
				$('.color-lightness-toggle').text('show');
			}
			else if($.cookie('color_lightness')=='hide'){
				$('.color-lightness').show();
				$.cookie('color_lightness', 'show');
				$('.color-lightness-toggle').text('hide');
			}
		});
		
	} // if cookie does not works, make it just toggle
	else {
		$('.color-lightness-toggle').text('hide/show');
		$('.color-lightness-toggle').click(function() {
			$('.color-lightness').toggle();
		});
	}
/* --------------- color lightness hide/show end --------------- */

/* --------------- color results hide/show begin --------------- */
// if cookie works
	if($.cookie('test_cookie')==1){
		if($.cookie('color_results')==null || $.cookie('color_results')=='show'){
			$('.color-results').show();
			$('.color-results-toggle').text('hide');
		};
		if($.cookie('color_results')=='hide'){
			$('.color-results').hide();
			$('.color-results-toggle').text('show');
		};
// if toggle clicked	
		$('.color-results-toggle').click(function() {
			if($.cookie('color_results')==null || $.cookie('color_results')=='show'){
				$('.color-results').hide();
				$.cookie('color_results', 'hide');
				$('.color-results-toggle').text('show');
			}
			else if($.cookie('color_results')=='hide'){
				$('.color-results').show();
				$.cookie('color_results', 'show');
				$('.color-results-toggle').text('hide');
			}
		});
		
	} // if cookie does not works, make it just toggle
	else {
		$('.color-results-toggle').text('hide/show');
		$('.color-results-toggle').click(function() {
			$('.color-results').toggle();
		});
	};
/* --------------- color results hide/show end --------------- */



});

