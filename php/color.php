<?php 
function readable_color($r=0,$g=0,$b=0) {
// input: RGB color; output: readable oposite color (black or white)
	//$l = (max($r,$g,$b) + min($r,$g,$b))/2; // variant 1, works bad :(
	
	$l = ($r+$g+$b)/3; // variant 2, works bad with green :(
	if ($l < 127) /*$l < 128*/ {$color = '#fff';} else {$color = '#000';}
	
/* 	$r = fmod($r*0.3,255);
	$g = fmod($g*0.3,255);
	$b = fmod($b*0.4,255);
	
	$l = ($r+$g+$b)/3; // variant 3, final hope :)
	
	if ($l < 130) {$color = '#fff';} else {$color = '#000';} */
	
	return $color;
}

function hsl2rgb($h=60,$s=75,$l=50) {
// input: HSL color; output: RGB color (array)
	$h = fmod(fmod($h,360)+360,360); // normalizing $hue to degree (0-359)
	//$h = $h/360;
	$h = $h/359;
	
	if ($s < 0) {$s = 0;}
	if ($s > 100) {$s = 100;}
	$s = $s/100;
	
	if ($l < 0) {$l = 0;}
	if ($l > 100) {$l = 100;}
	$l = $l/100;
	//printf('%5.45F',$s); echo '<br>';
	if ($s == 0.0) { $r = $g = $b = $l; }
	else {
		if ($l<=0.5) { $m2 = $l*($s+1); }
		else { $m2 = $l+$s-($l*$s); }
		$m1 = $l*2 - $m2;
		$r = hue($m1, $m2, ($h+1/3));
		$g = hue($m1, $m2, $h);
		$b = hue($m1, $m2, ($h-1/3));
	}
	$rgb = array(round($r*255), round($g*255), round($b*255));
	return $rgb;
}

function hue($m1, $m2, $h) {
// addition to hsl2rgb function
	if ($h<0) { $h = $h+1; }
	if ($h>1) { $h = $h-1; }
	if ($h*6<1) { return $m1+($m2-$m1)*$h*6; }
	if ($h*2<1) { return $m2; }
	if ($h*3<2) { return $m1+($m2-$m1)*(2/3-$h)*6; }
	return $m1;
}

function rgb2hsl($r=0,$g=0,$b=0) {
// input: RGB color; output: HSL color (array)
	if ($r > 255) {$r = 255;}
	if ($r < 0) {$r = 0;}
	if ($g > 255) {$g = 255;}
	if ($g < 0) {$g = 0;}
	if ($b > 255) {$b = 255;}
	if ($b < 0) {$b = 0;}
	$r = $r/255;
	$g = $g/255;
	$b = $b/255;
	
	$min = min($r,$g,$b);
	$max = max($r,$g,$b);
	$del = $max - $min;
	
	$l = ($max + $min)/2;
	if($del == 0) { $h = 0; $s = 0; /* grey color */ } else { // getting color
		if ($l < 0.5) {$s=$del/($max+$min);} else {$s=$del/(2-$max+$min);}
		$del_r = ((($max-$r)/6)+($del/2))/$del;
		$del_g = ((($max-$g)/6)+($del/2))/$del;
		$del_b = ((($max-$b)/6)+($del/2))/$del;
		if ($r == $max) {$h=$del_b-$del_g;}
		elseif ($g == $max) {$h=$del_r-$del_b+(1/3);}
		elseif ($b == $max) {$h=$del_g-$del_r+(2/3);}
		if($h<0){$h+=1;}
		if($h>1){$h-=1;}
	}
	$hsl = array(round($h*359), round($s*100), round($l*100));
	return $hsl;
}

function rgb2hex($r=0,$g=0,$b=0) {
// input: RGB color; output: RGB hex color (#-6-digits)
	if ($r < 0) {$r = 0;}
	if ($r > 255) {$r = 255;}
	if ($g < 0) {$g = 0;}
	if ($g > 255) {$g = 255;}
	if ($b < 0) {$b = 0;}
	if ($b > 255) {$b = 255;}
	$hex = '#'.sprintf('%02x',$r).sprintf('%02x',$g).sprintf('%02x',$b);
	return $hex;
}

function hex2rgb($hex='#000000') {
// input: RGB hex color (#-6(3)-digits); output: RGB color;
	$hex = trim($hex);
	$r = 0; $g = 0; $b = 0;
	if (substr($hex,0,1) != '#') {$hex = '#'.$hex;}
	if (strlen($hex) == 7) {
		$r = hexdec(substr($hex,1,2));
		$g = hexdec(substr($hex,3,2));
		$b = hexdec(substr($hex,5,2));
	} elseif (strlen($hex) == 4) {
		$r = hexdec(substr($hex,1,1).substr($hex,1,1));
		$g = hexdec(substr($hex,2,1).substr($hex,2,1));
		$b = hexdec(substr($hex,3,1).substr($hex,3,1));
	}
	if ($r < 0) {$r = 0;}
	if ($r > 255) {$r = 255;}
	if ($g < 0) {$g = 0;}
	if ($g > 255) {$g = 255;}
	if ($b < 0) {$b = 0;}
	if ($b > 255) {$b = 255;}
	$rgb = array($r,$g,$b); // if something is wrong, function returns black color in the name of error :)
	return $rgb;
}


function hsl_sample($h=0,$s=0,$l=0,$msg='') {
// input: HSL color; output: color in rgb mode;
	$h = fmod(fmod($h,360)+360,360); // normalizing $hue to degree (0-359)
	if ($s > 100) {$s = 100;}
	if ($s < 0) {$s = 0;}
	if ($l > 100) {$l = 100;}
	if ($l < 0) {$l = 0;}
	
	$rgb = hsl2rgb($h,$s,$l);
	$hex = rgb2hex($rgb[0],$rgb[1],$rgb[2]);
	$color = readable_color($rgb[0],$rgb[1],$rgb[2]);

	echo chr(10).'<div class="hsl-sample" style="background:'.$hex.'; color:'.$color.';">'.chr(10);
	if ( !(trim($msg) == '')) {
		echo '	<strong>'.$msg.'</strong>: '.chr(10);
	}
	echo '	'.$hex.'; rgb('.$rgb[0].','.$rgb[1].','.$rgb[2].'); hsl('.$h.','.$s.'%,'.$l.'%); '.chr(10);
	
	echo '	<span style="background:#000; color:'.$hex.'">black</span> '.chr(10);
	echo '	<span style="color:#000;">black</span> '.chr(10);

	echo '	<span style="background:#fff; color:'.$hex.';">white</span> '.chr(10);
	echo '	<span style="color:#fff;">white</span> '.chr(10);
	echo '</div>'.chr(10);
}

function rgb_sample($r=0,$g=0,$b=0,$msg='') {
// input: RGB color; output: color in HSL mode;
	if ($r > 255) {$r = 255;}
	if ($r < 0) {$r = 0;}
	if ($g > 255) {$g = 255;}
	if ($g < 0) {$g = 0;}
	if ($b > 255) {$b = 255;}
	if ($b < 0) {$b = 0;}
	
	$hsl = rgb2hsl($r,$g,$b);
	$hex = rgb2hex($r,$g,$b);
	$color = readable_color($r,$g,$b);

	echo chr(10).'<div class="rgb-sample" style="background:'.$hex.'; color:'.$color.';">'.chr(10);
	if ( !(trim($msg) == '')) {
		echo '	<strong>'.$msg.'</strong>: '.chr(10);
	}
	echo '	'.$hex.'; rgb('.$r.','.$g.','.$b.'); hsl('.$hsl[0].','.$hsl[1].'%,'.$hsl[2].'%); '.chr(10);
	
	echo '	<span style="background:#000; color:'.$hex.'">black</span> '.chr(10);
	echo '	<span style="color:#000;">black</span> '.chr(10);

	echo '	<span style="background:#fff; color:'.$hex.';">white</span> '.chr(10);
	echo '	<span style="color:#fff;">white</span> '.chr(10);
	echo '</div>'.chr(10);
}

function random_hex() {
	$rand = rgb2hex(rand(0,255),rand(0,255),rand(0,255));
	return $rand;
}

function random_rgb() {
	$rgb = array(rand(0,255), rand(0,255), rand(0,255));
	return $rgb;
}

function random_hsl() {
	$hsl = array(rand(0,359), rand(0,100), rand(0,100));
	return $hsl;
}


function random_link_hex() {
	$rand_r = rand(0,255);
	$rand_g = rand(0,255);
	$rand_b = rand(0,255);
	$rand = rgb2hex($rand_r,$rand_g,$rand_b);
	$bgrand = readable_color($rand_r,$rand_g,$rand_b);
	
	return '<!--googleoff: index--><a rel="nofollow" class="random" style="padding:0 2px; color:'. $rand.'; background:'.$bgrand.';" href="'.basename($_SERVER['SCRIPT_FILENAME']).'?mode=hex&amp;hex=%23'.substr($rand,1).'" rel="nofollow">random color</a><!--googleon: index-->';
}

function random_link_rgb() {
	$rand_r = rand(0,255);
	$rand_g = rand(0,255);
	$rand_b = rand(0,255);
	$rand = rgb2hex($rand_r,$rand_g,$rand_b);
	$bgrand = readable_color($rand_r,$rand_g,$rand_b);
	
	return '<!--googleoff: index--><a rel="nofollow" class="random" style="padding:0 2px; color:'. $rand.'; background:'.$bgrand.';" href="'.basename($_SERVER['SCRIPT_FILENAME']).'?mode=rgb&amp;r='.$rand_r.'&amp;g='.$rand_g.'&amp;b='.$rand_b.'" rel="nofollow">random color</a><!--googleon: index-->';
}

function random_link_hsl() {
	$rand_h = rand(0,359);
	$rand_s = rand(0,100);
	$rand_l = rand(0,100);
	$rand_rgb = hsl2rgb($rand_h,$rand_s,$rand_l);
	$rand = rgb2hex($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
	$bgrand = readable_color($rand_rgb[0],$rand_rgb[1],$rand_rgb[2]);
	
	return '<!--googleoff: index--><a rel="nofollow" class="random" style="padding:0 2px; color:'. $rand.'; background:'.$bgrand.';" href="'.basename($_SERVER['SCRIPT_FILENAME']).'?mode=hsl&amp;h='.$rand_h.'&amp;s='.$rand_s.'&amp;l='.$rand_l.'" rel="nofollow">random color</a><!--googleon: index-->';
}
