<?php
require_once('tags_controller.php');
$tags = indexTags();
?>
<div style="font-size:0.6em">

<?php
foreach((array)$tags as $tag) {

?>
	<?=tagLink($tag,$file)?>

<?php
}
?>
</div>
