<?php
/* 
Function for outputting head(title, charset, base);
Last edition 15-02-2009;
*/

function footer(){

/* $path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'].'/';
$filename = $path['basename'];
echo $path.' <br>';
echo $folder.' <br>';
echo $filename.' <br>';
echo __FILE__.' <br>';
echo $_SERVER['SCRIPT_NAME'].' <br>';
echo basename(__FILE__); 

Array <br>
/web-services/ 
<br>index.php 
<br>/hsphere/local/home/pressword/pressword.com.ua/_php/footer.php 
<br>/web-services/index.php 
<br>footer.php	
*/

$path = pathinfo($_SERVER['SCRIPT_NAME']);
$folder = $path['dirname'];
?>

<!-- footer begin -->
	<div class="footer">
		&copy <?php echo date("Y", time()); ?>,
		
	<?php if($folder == '/web-services') { ?>
		<a href="http://pressword.com.ua/" title="Press word to web">pressword</a>
	<?php }else{ ?>
		<a href="/web-services/" title="web-tools">web-services</a>
	<?php } ?>
	</div>
<!-- footer end -->

<?php }