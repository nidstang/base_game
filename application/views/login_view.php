<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Login</title>
		
	</head>
	<body>
	<?php echo form_open('index'); ?>

	<h5>Nombre de Jugador</h5>
	<input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>" size="50" />
	<?php echo form_error('nombre', '<div class="error">', '</div>'); ?>
	
	<h5>Contrase�a</h5>
	<input type="text" name="pass" size="50" />
	<?php echo form_error('pass', '<div class="error">', '</div>'); ?>
	
	<div><input type="submit" value="Submit" /></div>
     {error}
	</body>
</html>