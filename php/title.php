<?php
/* Function for getting title in <title> tags in file;
Version 13-08-2009;

!!!!!!!!! -------- Change variant of getting title from tags file_get_contents
*/
function title($path_to_file){
	$title = ''; 
	$fd = fopen (($path_to_file), 'r') or die ('<p>Failed to open file.</p>');
	$file_content = fread($fd,8192);// Pull only the first 8kiB of the file
	
	$lines = explode (chr(10),$file_content);

	for ($i=0;$i<count($lines);$i++){
// if there is <title> tags
		if (is_numeric(stripos(trim($lines[$i]),'<title>'))){
			$title = substr($lines[$i],stripos($lines[$i],'<title>')+7,stripos($lines[$i],'</title>')-stripos($lines[$i],'<title>')-7);
			$title = trim($title);
			break;
// if <title> tags not found, function returns capitalized file name without extension ('-' and '_' changed to spaces)
		}
	}
// title will be filename, if it is empty
	if (trim($title) === '') {
		$path_array = pathinfo ($path_to_file);
		$title = $path_array['filename'];
		$replace = array('_', '-', '+', '=');
		$title = str_replace($replace, ' ', $title);
		$title = ucfirst(trim($title));
	}
	return $title;
}
