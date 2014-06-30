<?php
function generate($length) {
	$char_set = array_merge( range('a','z'), range('0','9'), str_split('        ') );
	$cmax = count($char_set) - 1; $key='';
	for ($i=0; $i<$length; $i++ ){
		$randnum = mt_rand(0, $cmax);
		$key .= $char_set[$randnum];
	} return $key;
}
?>