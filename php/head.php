<?php
/* 
Function for outputting head(title, charset, ...);
Last edition 17-08-2009;
*/

function head(){ 

$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];

$title = title($filename);
?>

<!-- head include begin -->

<?php echo '	<title>'.$title.'</title>'; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui/js/jquery-ui.js"></script>
	
	<link href="../js/jquery-ui/css/smoothness/jquery-ui.css" rel="stylesheet" />
	
	<link href="../css/grey.css" rel="stylesheet" />
	
<!-- head include end -->

<?php }