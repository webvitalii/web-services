<?php
/* Function for redirecting page;
Version 15-01-2009;
*/
function redirect_to($location = ''){
	if($location != ''){
		// header('HTTP/1.1 301 Moved Permanently'); 
		// header('HTTP/1.0 404 Not Found');
		// header('Content-Type: text/html; charset=utf-8');
		// header('Expires: Thu, 17 May 2001 10:17:17 GMT');    // Date in the past
		// header ('Last-Modified: '.gmdate("D, d M Y H:i:s").' GMT'); // always modified
		// header ('Cache-Control: no-cache, must-revalidate'); // HTTP/1.1
		// header ('Pragma: no-cache'); // HTTP/1.0
		
		header('Location:'.$location);
		exit();
	}
}
