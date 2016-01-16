<?php
/* Function for escaping string of bad caracters;
Version 13-08-2009;

*/
function escape($string=''){
	$string = strip_tags($string);
	if(get_magic_quotes_gpc()) {
		$string = stripslashes($string);
	} else {
		//$string = $string; 
	}
	$string = mysql_real_escape_string($string);
	return $string;
}
