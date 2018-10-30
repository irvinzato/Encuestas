<?php
    if($cursos){ //verdadero 'cursos' cuando tiene algo
    foreach ($cursos->result() as $curso) {?>
        <ul>
            <li><a href="<?= $curso->idCurso; ?>"><?= $curso->Nombre; ?></a></li>
        </ul>
<?php }
    }else{
        echo "<p>Error en la app</p>";
    }
    ?>
</body>
</html>