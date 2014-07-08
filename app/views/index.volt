<!DOCTYPE html>
<html>
	<head>
		{{ get_title() }}
		{{ stylesheet_link('css/style.css') }}
	</head>
	<body>
		<div id="wrapper">
			{{ content() }}
		</div>
	</body>
</html>