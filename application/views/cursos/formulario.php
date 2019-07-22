<?= form_open("/cursos/recibirdatos") ?>
<?php
	$nombre= array(
		'name'=> 'nombre',
		'placeholder'=> 'escribe tu nombre'
	);
	$videos= array(
		'name'=> 'videos',
		'placeholder'=> 'cantidad de videos del curso'
	);
?>
<label>
	Nombre: 
	<?= form_input($nombre) ?>
</label>
<br>
<label>
	Numero de video: 
	<?= form_input($videos) ?>
</label>
<?= form_submit('', 'subir curso') ?>
<?php form_close() ?>
</body>
</html>