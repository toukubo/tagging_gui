<?php
	function move($file,$to){
		require_once('config.php');
		require_once('tagutil.php');
		echo $file;
		echo "mark1";
		$basedir = $GLOBALS['basedir'];
		$old = $basedir . $file;
		$basename=basename($file);
		$new = $basedir . $to . "/" . $basename;
		echo $old;
		echo $new;

		// rename($old, $new) or die("Unable to rename $old to $new.");
	}
?>