<?php
/* Function for Content-Type and base;
Version 28-12-2008;
*/
function head(){
	echo chr(10).'	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.chr(10);	
	echo chr(10).'	<base href="http://'.$_SERVER[HTTP_HOST].'/" />'.chr(10);
}
