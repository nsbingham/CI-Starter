<h2>Register New Account</h2>
<p>Please fill in the following information. All fields are required.</p>
<?= $this->formbuilder->open( 'account/register', 'POST', array('id' => 'register')) ?>
<?= $this->formbuilder->text( 'email',        'E-Mail' ) ?>
<?= $this->formbuilder->text( 'first_name',   'First Name' ) ?>
<?= $this->formbuilder->text( 'last_name',    'Last Name' ) ?>
<?= $this->formbuilder->password( 'password', 'Password' ) ?>
<?= $this->formbuilder->submit('register',    'Register' ) ?>
<?= $this->formbuilder->close() ?>

<p>
	<?= anchor('account/login', 'Log In') ?> |
	<?= anchor('account/forgot', 'Forgot Password?') ?>
</p>
