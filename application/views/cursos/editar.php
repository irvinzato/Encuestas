<?= form_open('cursos/actualizar/'.$id) ?>
<?php
  $nombre = array('name' => 'nombre','placeholder' => 'Escribe tu nombre','value' => $curso->result()[0]->Nombre);
  $videos = array('name' => 'videos','placeholder' => 'Escribe el cupo','value' => $curso->result()[0]->Cupo);
?>
<?=form_label('Nombre:','nombre')?>
    <?= form_input($nombre)?>
    <br>
    <?=form_label('Cupo:','videos')?>
    <?= form_input($videos)?>
<br><br>
<?= form_submit('','Actualizar Curso')?>
<?= form_close()?>
</body>
</html>
