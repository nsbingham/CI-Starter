<h2>Contact</h2>

<?= $this->formbuilder->open( 'contact', 'POST', array('id' => 'login')) ?>
<?= $this->formbuilder->text( 'email', 'E-Mail' ) ?>
<?= $this->formbuilder->drop_down( 'subject', 'Subject', array(
	'feedback' => 'General Feedback',
	'question' => 'Question',
	'error' => 'Site Error'
)) ?>
<?= $this->formbuilder->textarea( 'message', 'Message' ) ?>
<?= $this->formbuilder->submit('send',  'Send' ) ?>
<?= $this->formbuilder->close() ?>
