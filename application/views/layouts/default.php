<!DOCTYPE html>  
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php echo $template['partials']['metadata']; ?>
</head>
<body id="top">
	<div id="wrap">
		<div id="header"><?php echo $template['partials']['header']; ?></div><!-- end header -->
		<?php if(isset($message) OR $message = $this->session->flashdata('message')): ?>
			<div class="row <?= isset($type) ? $type : $this->session->flashdata('type')?>" id="message"><?= $message ?></div>
		<?endif; ?>
		<div class="row" id="main"><?php echo $template['body']; ?></div><!-- end main -->
	</div><!-- end wrap -->
	<div id="footer"><?php echo $template['partials']['footer']; ?></div>
</body>
</html>

