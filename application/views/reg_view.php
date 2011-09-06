<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Registro</title>
		
	</head>
	<body>
	<?php echo form_open('index/registro'); ?>

	<h5>Nombre de Jugador</h5>
	<input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>" size="50" />
	<?php echo form_error('nombre', '<div class="error">', '</div>'); ?>
	
	<h5>Contraseña</h5>
	<input type="password" name="pass" size="50" />
	<?php echo form_error('pass', '<div class="error">', '</div>'); ?>
     
     <h5>Repite Contraseña</h5>
	<input type="password" name="passver" size="50" />
	<?php echo form_error('passver', '<div class="error">', '</div>'); ?>
     
     <h5>Email</h5>
	<input type="text" name="email" size="50" value="<?php echo set_value('email'); ?>" />
	<?php echo form_error('email', '<div class="error">', '</div>'); ?>
     
     <h5>Raza</h5>
     <select name="race">
         <option value="0">Vampiro</option>
         <option value="1">Hombre lobo</option>
     </select>
     <?php echo form_error('race', '<div class="error">', '</div>'); ?>
     
	<div><input type="submit" value="Submit" /></div>
     
	</body>
</html>
