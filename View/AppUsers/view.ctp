<?php
/**
 * Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
//debug($user['UserDetail'][$model]);
//debug($model);
?>
<div class="users view">
<h2><?php echo __d('users', 'User'); ?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['created']; ?>
			&nbsp;
		</dd>
		<?php
		if (!empty($user['UserDetail'])) {
			foreach ($user['UserDetail'][$model] as $field => $value) {
				if (!$value) {
					$value = '&nbsp;';
				}
				echo '<dt>' . $field . '</dt>';
				echo '<dd>' . $value . '</dd>';
			}
		}
		?>
	</dl>
</div>
<?php echo $this->element('AppUsers/sidebar'); ?>
