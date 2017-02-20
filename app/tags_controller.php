<?php
require_once('tagutil.php');

	function indexTags(){
		$dirs = scandir(escapetag($GLOBALS['basedir']));
		return $dirs;
	}
	function tagLink($tag,$file){
		?>
	<a href="?move=true&to=<?=urlencode($tag)?>&file=<?=urlencode($file->name)?>" style="font-size:1em" >
		<?=$tag?>
	</a> ||| 
	<?
	}
?>