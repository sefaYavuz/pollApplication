<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		<?php echo $this->tag->stylesheetLink('css/style.css'); ?>
	</head>
	<body>
		<div id="wrapper">
			<?php echo $this->getContent(); ?>
		</div>
	</body>
</html>