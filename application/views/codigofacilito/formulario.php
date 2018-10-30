<?= form_open('codigofacilito/recibirDatos') ?>
<?php
    $nombre = array('name' => 'nombre','placeholder' => 'Escribe tu nombre');
    $videos = array('name' => 'videos','placeholder' => 'Escribe el cupo');
?>
    <?=form_label('Nombre:','nombre')?>
    <?= form_input($nombre)?>
    <br>
    <?=form_label('Cupo:','videos')?>
    <?= form_input($videos)?>
<br><br>
<?= form_submit('','Registrar')?>
<?= form_close()?>
</body>
</html>