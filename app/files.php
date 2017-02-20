<?php function render($file){ ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<script>
			var file = "<?=$file->name?>";
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
		<script src="./vendor/keymaster.js" type="text/javascript"></script>
		<script src="./keys.js" type="text/javascript"></script>
	</head>
	<body style="text-align:center;font-size:3em;padding:50px">
		<div id="content" class="test">				
			<div><?=$file->name?></div>
		</div>
		<div>
			<a href="?move=true&to=deleted&file=<?=urlencode($file->name)?>" style="color:#111;font-size:1.5em;font-weight:bold;" >DEL</a>
		</div>
		<?php require('tags.php'); ?>
	</body>
</html>
<script type="text/javascript">
	$(function(){
		$('#content').attr('width',document.body.clientWidth);
	});
</script>

<?php } ?>