<h2>Log In</h2>

<?= $this->formbuilder->open( 'account/login', 'POST', array('id' => 'login')) ?>
<?= $this->formbuilder->text( 'email', 'E-Mail' ) ?>
<?= $this->formbuilder->password( 'password', 'Password' ) ?>
<?= $this->formbuilder->submit('login',  'Log In' ) ?>
<?= $this->formbuilder->close() ?>

<p>
	<?= anchor('account/register', 'New Account') ?> |
	<?= anchor('account/forgot', 'Forgot Password?') ?>
</p>
