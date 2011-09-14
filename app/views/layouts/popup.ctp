<?php //layout that is to be used exclusively for the popups ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?>	</title>
        <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('gg');

		echo $scripts_for_layout;

		function curPageURL() {
			$pageURL = 'http://';
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
			return $pageURL;
		}

		function active($pattern) {
			return preg_match('/'.$pattern.'/i', curPageURL());
		}

	?>

    </head>
    <body>
        <div id="container" style="width: auto">

	<div id="content" style="min-height:0px">
		<?php echo $content_for_layout; ?>
	</div>		

	</div>

</body>
</html>

