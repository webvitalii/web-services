<?php
/*
function codes string like md5
[lol] 
*/
function coded($str='') {

// Clean sorce string from stupid caracters
// Make $keys aaray like (aAbBcCdD) - for more looks like md5 



/* 	$keys = array ( a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,
	A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,
	а,б,в,г,ґ,д,е,є,ж,з,и,і,ї,й,к,л,м,н,о,п,р,с,т,у,ф,х,ц,ч,ш,щ,ь,ю,я,
	А,Б,В,Г,Ґ,Д,Е,Є,Ж,З,И,І,Ї,Й,К,Л,М,Н,О,П,Р,С,Т,У,Ф,Х,Ц,Ч,Ш,Щ,Ь,Ю,Я,
	ё,ъ,ы,э,Ё,Ъ,Ы,Э ); */

	$keys = array ( A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,
	a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,
	0,1,2,3,4,5,6,7,8,9,' ' );
	
	//$str = trim($str);
	for ($i=0; $i<strlen($str); $i++) {
		for ($j=0; $j<count($keys); $j++) {
			//$strn = ord($str[$i]); echo $strn.' ';
			
			//$keysn = ord($keys[$j]);
			// strcmp($str[$i],$keys[$j]) == 0
			if ($str[$i] === $keys[$j]) {
				//echo 'str['.$i.']='.$str[$i].' $keys['.$j.']='.$keys[$j].' <br>';
				
				// look at md5 and make your output looks like it 
				// think about it
				$code = ($j*3) + ($i*3); // 63*3 + 16*3 < 255
				
				//$code = printf('%02x',$code);
				echo ' <b>'.sprintf('%02x',$code).'</b>';
				$coded_str = $coded_str.' '.$code;
			}
		}
	}
	
/* 	foreach ($keys as $value) {
		echo '<br>'.$value.' = '.$i;
		$i++;
	} */
	
	return $coded_str;
}

echo '<pre>'.md5('dfg86sdfg').' <br>'.md5('4yg4h4').' <br>'.md5('d54grthg').' <br>'.md5('fgh4uyrjeu3e').' <br>'.md5('sdfg').' <br>'.md5('34g3').' <br>'.md5('weg').'</pre>';

echo '<br>';

echo coded('ab        ');
echo '<br>';


function decoded($str='') {}

