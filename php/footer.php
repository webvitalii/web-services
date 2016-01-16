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
	<?php if(substr($folder,-13) == '/web-services') { ?>
		<a href="http://www.web-profile.com.ua/" title="Web-profile">web-profile</a>
	<?php }else{ ?>
		<a href="http://www.web-profile.com.ua/" title="Web-profile">web-profile</a>
		<a href="/web-services/" title="web-tools">web-services</a>
	<?php } ?>
	</div>
	
	<script type="text/javascript">//<![CDATA[
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount','UA-12457633-1']);
	_gaq.push(['_trackPageview'],['_trackPageLoadTime']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	//]]></script>

	
<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter11113603 = new Ya.Metrika({id:11113603, enableAll: true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/11113603" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
	
<!-- footer end -->




<?php }