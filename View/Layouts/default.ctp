<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
		echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');
		echo $this->Html->script('jquery.jcarousel.min.js');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
		echo $this->Html->script('jquery.form');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Ministry of Positivity</h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			Copyright &copy; 2012 Ministry of Positivity - Let your Light Shine!
		</div>
	</div>
</body>
</html>