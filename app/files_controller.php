<?php
	require_once('file.php');
	function get($file){
		return new File($file);
	}
?>