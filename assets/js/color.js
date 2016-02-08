/* 
Ways of using jQuery ($ = jQuery):
$(document).ready(function(){ ... };
$(function(){ ... }; 
*/

$(function(){

/* Submit form onclick  */
	$('.label-radio input').click(function() {
		$('form#color').submit();
	});


/* $('.test').load('http://localhost/prozirka/color/index.php'); */


// menu behavior
	//$('.menu').fadeTo('slow',0.7);
	//$('.menu').hover(function(){
	//	$('.menu').fadeTo('fast',1); 
	//},function(){$('.menu').fadeTo('slow',0.7);});

});


