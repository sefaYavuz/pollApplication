<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->tag->getTitle(); ?>
		<?php echo $this->tag->stylesheetLink('css/style.css'); ?>
	</head>
	<body>
		<div id="wrapper">
			<?php echo $this->getContent(); ?>
		</div>
	</body>
</html>