<?= form_open('principal/recibirDatos') ?>
<?php
    $nombre = array('name' => 'nombre','placeholder' => 'Escribe tu nombre');
    $contra = array('name' => 'contra','placeholder' => 'Escribe la contraseña');
?>
    <?=form_label('Nombre:','nombre')?>
    <?= form_input($nombre)?>
    <br>
    <?=form_label('Contraseña:','contra')?>
    <?= form_input($contra)?>
<br><br>
<?= form_submit('','Registrar')?>
<?= form_close()?>
</body>
</html>