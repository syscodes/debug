<!DOCTYPE html>
<html lang="en" data-theme="<?= $handler->getTheme() ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex">		
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= ucfirst($template->escape($message)) ?></title>	
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">		
		<!-- Styles -->
		<style type="text/css">
			<?= $stylesheet ?>
		</style>
	</head>
	<body>
		<?= $template->render($header) ?>
		<div class="container">		
			<?= $template->render($info_exception) ?>
			<?= $template->render($section_stack_exception) ?>
			<?= $template->render($request_info) ?>
			<?= $template->render($footer) ?>	
		</div>	
		<!-- Script -->
		<script type="text/javascript">
			<?= $javascript ?>
		</script>
	</body>
</html>