<!doctype html>
<html>
	<head>
		<?php $c = Binocle\Support\Container::getInstance(); ?>
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php $c['template']->loadTemplate(); ?>
		<?php wp_footer(); ?>
	</body>
</html>