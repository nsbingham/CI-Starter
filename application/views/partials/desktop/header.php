<div class="row">
	<h1 class="column grid_9"><?php echo anchor('', 'Site Name'); ?></h1>
	<div id="login" class="column grid_3">
		<?php if($this->ion_auth->logged_in()): ?>
			<?= anchor('account', $this->session->userdata('email')) ?> |
			<?= anchor('account/logout', 'Log Out') ?>
		<?php else: ?>
			<?= anchor('account/login', 'Log In') ?> | 
			<?= anchor('account/register', 'Register') ?>
		<?php endif; ?>
	</div>
</div>
<div id="nav"><?= $this->menu->render($this->nav) ?></div>
