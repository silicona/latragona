<?php

// Test
function anadir_a_array($array, $elemento){

	$i = array_search($elemento, $array);

	if( $i === false ){ $array[] = $elemento; }

	return $array;
}

?>