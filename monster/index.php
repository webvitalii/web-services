<?php 
include_once '../include.php';
doctype();
//<title>Monster constructor</title>
$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];


?>
<html>
<head>
	<?php head(); ?>
	
	<link href="/_files/css/white.css" rel="stylesheet" />

<style>
	.draggable {
		 cursor:move;
	 }
	.draggable:hover {
		background:transparent url(_img/bg_20_mid_grey.png) top left repeat;
		border-radius:3px;
	}
	.resizable {}
	.img-wrap {
		display: inline-block;
	}
	.img-wrap .ui-resizable-handle {
		display: none !important;
	}
	.img-wrap:hover .ui-resizable-handle {
		display: block !important;
	}

</style>
	
<script>
jQuery(function($){
	$('.draggable').draggable({
		appendTo: 'body',
		start: function(event, ui) {
			isDraggingMedia = true;
		},
		stop: function(event, ui) {
			isDraggingMedia = false;
			// blah
		}
	}); // img wrapper
	$('.resizable').resizable(); // img
});
</script>
</head>

<body>

<div id="main">

		<h2>Create your monster</h2>	
		<p>Drag and drop monster parts for fun.</p>

		
		
<?php
	$folders = array('_eyes', '_mouth');
	
	foreach ($folders as $folder) {
		$list_of_files = filelist($folder);
		foreach ($list_of_files as $file) {
			echo '<div class="img-wrap draggable"><img src="'.$folder.'/'.$file. '" class="resizable" /></div>';
		}
	}
	
	/*$list_of_files = filelist('_eyes');
	foreach ($list_of_files as $file) {
		echo '<img src="_eyes/'.$file. '" class="drag" />';
	}
	
	$list_of_files = filelist('_eyes');
	foreach ($list_of_files as $file) {
		echo '<img src="_eyes/'.$file. '" class="drag" />';
	}*/
		
?>
		
		
		
		
	<?php footer(); ?>
</div>

</body>
</html>