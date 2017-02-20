<?php

function escapetag($string){
	$returned = str_replace("#", "\#", $string);
	return $returned;
}
?>