<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/global.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <?php echo form_open('index/login'); ?>

        <h5>{name_player}</h5>
        <input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>" size="50" />
        <?php echo form_error('nombre', '<div class="error">', '</div>'); ?>

        <h5>{password_player}</h5>
        <input type="text" name="pass" size="50" />
        <?php echo form_error('pass', '<div class="error">', '</div>'); ?>

        <div><input type="submit" value="{enter}" /></div>
        <div class="error_login">{error}</div>
        <?php echo form_close() ?>
        
        <a href="<?php echo site_url('index/login/english') ?>"><div id="ingles"></div></a>
        <a href="<?php echo site_url('index/login/spanish') ?>"><div id="espaniol"></div></a>
    </body>
</html>